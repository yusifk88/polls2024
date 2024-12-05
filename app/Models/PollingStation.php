<?php

namespace App\Models;

use App\Exports\VotersExport;
use App\Jobs\ConvertJob;
use DOMDocument;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\Console\Output\ConsoleOutput;

class PollingStation extends Model
{
    protected $table = 'polling_stations';
    protected $fillable = ["constituency_id", "community_id", "code", "name", "details"];


    public function community(){
        return $this->belongsTo(Community::class);
    }


    public function constituency(){

        return $this->belongsTo(Constituency::class);
    }

    public static function renameFile()
    {
        $files = Storage::disk('public')->files("SISSALAEAST");
        foreach ($files as $file) {

            $new_name = str_replace(")", "", str_replace("(", "", $file));

            Storage::disk('public')->move($file, "SISSALAEAST/$new_name");

        }

    }

    public static function convertPDFs()
    {
        $files = Storage::disk('public')->files("SISSALAEAST");

        $output_path = Storage::disk('public')->path("html_outputs");

        if (!file_exists($output_path)) {
            mkdir($output_path, 0777, true);
        }

        $i = 1;


        $out = new ConsoleOutput();


        $chunks = collect($files)->chunk(10);


        foreach ($chunks as $chunk) {

            dispatch(new ConvertJob($chunk->toArray()));

//          $full_path = Storage::disk('public')->path($file);
//
//          $name = explode("_",str_replace("SISSALAEAST/","",$file))[0];
//          if (!Storage::disk("public")->exists("$output_path/$name-html.html")) {
//
//
//              $out->writeln("Converting $name");
//
//              passthru("pdftohtml -s -q -c -zoom 1.5 $full_path $output_path/$name");
//
//
//          }
        }


        $output_file = Storage::disk('public')->files("html_outputs");

        return [
            "sourceFiles" => count($files),
            "outputFiles" => count($output_file),
        ];

    }


    public static function conversionSummaries()
    {
        $sourceFiles = Storage::disk('public')->files("SISSALAEAST");
        $outputFiles = Storage::disk('public')->files("html_outputs");

        $outputFilesCollection = collect($outputFiles);

        $filter = $outputFilesCollection->filter(function ($file) use ($outputFiles) {

            return Str::contains($file, ".html");
        });


        return [
            "sourceFiles" => count($sourceFiles),
            "outputFiles" => count($filter),
        ];


    }


    public static function htmlToExcel(): array
    {

        ini_set('memory_limit', '7G');
        $outputFiles = Storage::disk('public')->files("html_outputs");

        $outputFilesCollection = collect($outputFiles);

        $filter = $outputFilesCollection->filter(function ($file) use ($outputFiles) {

            return Str::contains($file, ".html");
        })->toArray();

        $divContent = [];


        foreach ($filter as $file) {


            $HTMLfile = Storage::disk('public')->path($file);

            $html = file_get_contents($HTMLfile);

            $dom = new DOMDocument();

            @$dom->loadHTML($html);


            $divs = $dom->getElementsByTagName("div");

            $i = 0;
            foreach ($divs as $div) {

                if ($i > 0) {
                    foreach ($div->childNodes as $child) {

                        $divContent[] = $child->nodeValue;
                    }

                }

                $i++;

            }


            $filterContent = array_filter($divContent, function ($item) {

                return $item != "\n" && !in_array($item, ["Name:", "Tick", "THE ELECTORAL COMMISSION  OF GHANA - VOTERS REGISTER - DECEMBER 2024", ""]);
            });


            $chunk = collect($filterContent)->chunk(4)->toArray();

            $filteredChunk = array_filter($chunk, function ($item) {

                $plain = implode(",", $item);

                return Str::contains($plain, ["Sex: ", "Voter ID: ", "Age: "]);
            });

            $sheetName = str_replace("-html.html", "", str_replace("html_outputs/", "", $file));

            dispatch(new ConvertJob($filteredChunk,$sheetName));

        }

        return $divContent;


    }

}
