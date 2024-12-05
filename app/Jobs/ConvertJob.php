<?php

namespace App\Jobs;

use App\Exports\VotersExport;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class ConvertJob implements ShouldQueue
{
    use Queueable;

    private mixed $chunks;
    private string $ps_number;

    /**
     * Create a new job instance.
     */
    public function __construct($chunks,string $ps_number)
    {
        $this->chunks=$chunks;
        $this->ps_number=$ps_number;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        ini_set('memory_limit', '6G');



        Excel::store(new VotersExport($this->chunks,$this->ps_number),"final_sheet/final_voters_sissala_east.xlsx","public");




//        $output_path = Storage::disk('public')->path("html_outputs");
//
//        if (!file_exists($output_path)) {
//            mkdir($output_path, 0777, true);
//        }
//
//        foreach ($this->files as $file) {
//
//
//            $full_path = Storage::disk('public')->path($file);
//
//            $name = explode("_",str_replace("SISSALAEAST/","",$file))[0];
//
//            if (!Storage::disk("public")->exists("$output_path/$name-html.html")) {
//
//
//                passthru("pdftohtml -s -q -c -zoom 1.5 $full_path $output_path/$name");
//
//
//            }
//
//        }
//

    }
}
