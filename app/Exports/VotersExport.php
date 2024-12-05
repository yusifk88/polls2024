<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;

class VotersExport implements fromArray
{

    private mixed $voters;
    private string $ps_code;

    public int $timeout = 240;


    public function __construct($voters, string $ps_code)
    {
        $this->voters = $voters;
        $this->ps_code = $ps_code;
    }




    /**
     *
     * @return array
     */
    public function array(): array
    {
        $mainList = [];
        foreach ($this->voters as $voterGroup) {

            $voterID=  $this->getVoterID($voterGroup);
            $sex=  $this->getSex($voterGroup);

            if ($voterID && $sex){

                $mainList[] = [
                    $this->getName($voterGroup),
                    $voterID,
                    $this->getAge($voterGroup),
                    $sex,
                    $this->ps_code
                ];

            }



        }

        return $mainList;

    }

    private function getName(array $list)
    {
        foreach ($list as $item) {
            $hasAge = !Str::contains($item, ["Age: ", 'Sex: ', 'Voter ID: ']);

            if ($hasAge) {

                return $item;
            }

        }


        return "";
    }

    private function getVoterID(array $list)
    {

        foreach ($list as $item) {


            $hasAge = Str::contains($item, "Voter ID: ");

            if ($hasAge) {

                return str_replace('Voter ID: ', '', $item);
            }

        }


        return "";
    }

    private function getAge(array $list)
    {
        foreach ($list as $item) {

            $hasAge = Str::contains($item, "Age:");

            if ($hasAge) {

                return str_replace('Age:', '', $item);
            }

        }


        return "";
    }

    private function getSex(array $list)
    {

        foreach ($list as $item) {
            $hasAge = Str::contains($item, "Sex: ");

            if ($hasAge) {

                return str_replace('Sex: ', '', $item);
            }

        }


        return "";
    }




}
