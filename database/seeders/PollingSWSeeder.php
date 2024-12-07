<?php

namespace Database\Seeders;

use App\Models\Community;
use App\Models\Constituency;
use App\Models\PollingStation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PollingSWSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $lookup = [
            [
                "Code" => "P100101A",
                "Name" => "PULIMA PRIM",
                "Electoral_area" => "PULIMA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100101B",
                "Name" => "PULIMA PRIM",
                "Electoral_area" => "PULIMA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100102A",
                "Name" => "PULIMA JHS",
                "Electoral_area" => "PULIMA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100102B",
                "Name" => "PULIMA JHS",
                "Electoral_area" => "PULIMA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100201",
                "Name" => "KUPULIMA  PRIM",
                "Electoral_area" => "FIALIBELLE",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100202",
                "Name" => "JITONG PRIM",
                "Electoral_area" => "FIALIBELLE",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100203",
                "Name" => "GBARIMA PRIM",
                "Electoral_area" => "FIALIBELLE",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100204",
                "Name" => "LEWIERA  PRIM",
                "Electoral_area" => "FIALIBELLE",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100301A",
                "Name" => "SILBELLE PRIM",
                "Electoral_area" => "MWANGUBELLE",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100301B",
                "Name" => "SILBELLE PRIM",
                "Electoral_area" => "MWANGUBELLE",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100302A",
                "Name" => "SORBELLE PRIM",
                "Electoral_area" => "MWANGUBELLE",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100302B",
                "Name" => "SORBELLE PRIM",
                "Electoral_area" => "MWANGUBELLE",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100303A",
                "Name" => "SORBELLE JHS",
                "Electoral_area" => "MWANGUBELLE",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100303B",
                "Name" => "SORBELLE JHS",
                "Electoral_area" => "MWANGUBELLE",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100304A",
                "Name" => "BUOTI PRIM",
                "Electoral_area" => "MWANGUBELLE",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100304B",
                "Name" => "BUOTI PRIM",
                "Electoral_area" => "MWANGUBELLE",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100305",
                "Name" => "KANDIA PRIM",
                "Electoral_area" => "MWANGUBELLE",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100401A",
                "Name" => "GWOLLU PRIM",
                "Electoral_area" => "JUASIALA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100401B",
                "Name" => "GWOLLU PRIM",
                "Electoral_area" => "JUASIALA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100402",
                "Name" => "GWOLLU PRIM",
                "Electoral_area" => "JUASIALA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100403A",
                "Name" => "GWOLLU PRIM",
                "Electoral_area" => "JUASIALA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100403B",
                "Name" => "GWOLLU PRIM",
                "Electoral_area" => "JUASIALA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100404",
                "Name" => "GWOLLU JHS",
                "Electoral_area" => "JUASIALA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100501A",
                "Name" => "KONNALA PRIM",
                "Electoral_area" => "KONNALA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100501B",
                "Name" => "KONNALA PRIM",
                "Electoral_area" => "KONNALA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100502",
                "Name" => "KONNALA PRIM",
                "Electoral_area" => "KONNALA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100601",
                "Name" => "JAWIA PRIM",
                "Electoral_area" => "JAWIA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100602",
                "Name" => "JAWIA PRIM",
                "Electoral_area" => "JAWIA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100603",
                "Name" => "JAWIA JHS",
                "Electoral_area" => "JAWIA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100604",
                "Name" => "LIPILIME PRIM.",
                "Electoral_area" => "JAWIA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100605",
                "Name" => "LIPILIME PRIM.",
                "Electoral_area" => "JAWIA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100606",
                "Name" => "MUABELLE DAY",
                "Electoral_area" => "JAWIA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100701",
                "Name" => "KUSALI PRIM",
                "Electoral_area" => "KUSALI",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100702",
                "Name" => "KUSALI PRIM",
                "Electoral_area" => "KUSALI",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100703",
                "Name" => "KUNKORGU PRIM",
                "Electoral_area" => "KUSALI",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100801",
                "Name" => "JEFFISI PRIM",
                "Electoral_area" => "JEFFISI",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100802",
                "Name" => "JEFFISI PRIM",
                "Electoral_area" => "JEFFISI",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100803",
                "Name" => "JEFFISI PRIM",
                "Electoral_area" => "JEFFISI",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100804A",
                "Name" => "JEFFISI JHS",
                "Electoral_area" => "JEFFISI",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100804B",
                "Name" => "JEFFISI JHS",
                "Electoral_area" => "JEFFISI",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100805",
                "Name" => "KUNTULO PRIM",
                "Electoral_area" => "JEFFISI",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100806",
                "Name" => "DAJAN PRIM",
                "Electoral_area" => "JEFFISI",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100901",
                "Name" => "DASIMA PRIM",
                "Electoral_area" => "DASIMA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100902",
                "Name" => "DASIMA PRIM",
                "Electoral_area" => "DASIMA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100903",
                "Name" => "DASIMA JHS",
                "Electoral_area" => "DASIMA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100904",
                "Name" => "DUWIE PRIM",
                "Electoral_area" => "DASIMA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100905",
                "Name" => "TIMMIE PRIM",
                "Electoral_area" => "DASIMA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P100906",
                "Name" => "GBELE CHIEF",
                "Electoral_area" => "DASIMA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101001",
                "Name" => "BULLU PRIM",
                "Electoral_area" => "BULLU",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101002",
                "Name" => "BULLU PRIM",
                "Electoral_area" => "BULLU",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101003A",
                "Name" => "NYIMETI PRIM.",
                "Electoral_area" => "BULLU",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101003B",
                "Name" => "NYIMETI PRIM.",
                "Electoral_area" => "BULLU",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101004",
                "Name" => "NYIMETI PRIM.",
                "Electoral_area" => "BULLU",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101005",
                "Name" => "JUAGANMUA DAY",
                "Electoral_area" => "BULLU",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101101",
                "Name" => "KWALA PRIM",
                "Electoral_area" => "KWALA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101102",
                "Name" => "PAANA PRIM.",
                "Electoral_area" => "KWALA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101103",
                "Name" => "GBAL PRIM",
                "Electoral_area" => "KWALA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101104",
                "Name" => "KUNNI PRIM.",
                "Electoral_area" => "KWALA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101201",
                "Name" => "FIELMUA ZONGO",
                "Electoral_area" => "FELIMUA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101202A",
                "Name" => "FIELMUA DAY",
                "Electoral_area" => "FELIMUA",
                "Constituency" => "SISSALA",
                "" => "WEST"
            ],
            [
                "Code" => "P101202B",
                "Name" => "FIELMUA DAY",
                "Electoral_area" => "FELIMUA",
                "Constituency" => "SISSALA",
                "" => "WEST"
            ],
            [
                "Code" => "P101203A",
                "Name" => "FIELMUA DAY",
                "Electoral_area" => "FELIMUA",
                "Constituency" => "SISSALA",
                "" => "WEST"
            ],
            [
                "Code" => "P101203B",
                "Name" => "FIELMUA DAY",
                "Electoral_area" => "FELIMUA",
                "Constituency" => "SISSALA",
                "" => "WEST"
            ],
            [
                "Code" => "P101204A",
                "Name" => "FIELMUA MARKET",
                "Electoral_area" => "FELIMUA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101204B",
                "Name" => "FIELMUA MARKET",
                "Electoral_area" => "FELIMUA",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101301A",
                "Name" => "CHETU PRIM",
                "Electoral_area" => "CHETU",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101301B",
                "Name" => "CHETU PRIM",
                "Electoral_area" => "CHETU",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101302",
                "Name" => "GAAPARI PRIM.",
                "Electoral_area" => "CHETU",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101401",
                "Name" => "NIMORO COMM.",
                "Electoral_area" => "NIMORO",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101402A",
                "Name" => "WIIRO PRIM",
                "Electoral_area" => "NIMORO",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101402B",
                "Name" => "WIIRO PRIM",
                "Electoral_area" => "NIMORO",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101403",
                "Name" => "CHAPARISI CHIEF",
                "Electoral_area" => "NIMORO",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101404",
                "Name" => "KAA PRIM",
                "Electoral_area" => "NIMORO",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101501A",
                "Name" => "BUO PRIM",
                "Electoral_area" => "BUO",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101501B",
                "Name" => "BUO PRIM",
                "Electoral_area" => "BUO",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101502A",
                "Name" => "BUO JHS",
                "Electoral_area" => "BUO",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101502B",
                "Name" => "BUO JHS",
                "Electoral_area" => "BUO",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101503",
                "Name" => "KONCHUURI KG",
                "Electoral_area" => "BUO",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101601A",
                "Name" => "LIERO KG",
                "Electoral_area" => "LIERO",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101601B",
                "Name" => "LIERO KG",
                "Electoral_area" => "LIERO",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101602",
                "Name" => "FOLITENG PRIM.",
                "Electoral_area" => "LIERO",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101603",
                "Name" => "KANKANDUOLE PRIM",
                "Electoral_area" => "LIERO",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101604",
                "Name" => "BUKPAL MARKET",
                "Electoral_area" => "LIERO",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101701",
                "Name" => "ZINI PRIM",
                "Electoral_area" => "ZINI",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101702",
                "Name" => "ZINI PRIM",
                "Electoral_area" => "ZINI",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101703",
                "Name" => "DAKUMA PRIM",
                "Electoral_area" => "ZINI",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101704",
                "Name" => "HIEL CHIEF",
                "Electoral_area" => "ZINI",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101801A",
                "Name" => "TIIWI PRIM",
                "Electoral_area" => "TIIWI",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101801B",
                "Name" => "TIIWI PRIM",
                "Electoral_area" => "TIIWI",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101802A",
                "Name" => "PUZENE PRIM",
                "Electoral_area" => "TIIWI",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101802B",
                "Name" => "PUZENE PRIM",
                "Electoral_area" => "TIIWI",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101803",
                "Name" => "NYIVIL PRIM",
                "Electoral_area" => "TIIWI",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101901",
                "Name" => "NYENTIE PRIM",
                "Electoral_area" => "FATCHU",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101902A",
                "Name" => "FATCHU PRIM",
                "Electoral_area" => "FATCHU",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101902B",
                "Name" => "FATCHU PRIM",
                "Electoral_area" => "FATCHU",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P101903",
                "Name" => "SANGBAKA PRIM",
                "Electoral_area" => "FATCHU",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P102001",
                "Name" => "NIATOR PRIM",
                "Electoral_area" => "NIATOR",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P102002",
                "Name" => "WASAI PRIM",
                "Electoral_area" => "NIATOR",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P102003",
                "Name" => "LULO PRIM",
                "Electoral_area" => "NIATOR",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P102101",
                "Name" => "DU PRIM",
                "Electoral_area" => "GUMO",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P102102",
                "Name" => "GUMO PRIM",
                "Electoral_area" => "GUMO",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P102103",
                "Name" => "PEPILIME PRIM",
                "Electoral_area" => "GUMO",
                "Constituency" => "SISSALA",
                "" => ""
            ],
            [
                "Code" => "P1001SPS",
                "Name" => "E.C OFFICE,GOLLU SISSALA WEST",
                "Electoral_area" => "GWOLLU",
                "Constituency" => "SISSALA",
                "" => ""
            ]
        ];




        $list = [
            [
                "Code" => "P100101A",
                "Name" => "PULIMA PRIM",
                "Community" => "PULIMA",
                "Constituency" => "SISSALA WEST",
            ],
            [
                "Code" => "P100101B",
                "Name" => "PULIMA PRIM",
                "Community" => "PULIMA",
                "Constituency" => "SISSALA WEST",
            ],
            [
                "Code" => "P100102A",
                "Name" => "PULIMA JHS",
                "Community" => "PULIMA",
                "Constituency" => "SISSALA WEST",
            ],
            [
                "Code" => "P100102B",
                "Name" => "PULIMA JHS",
                "Community" => "PULIMA",
                "Constituency" => "SISSALA WEST",
            ],
            [
                "Code" => "P100201",
                "Name" => "KUPULIMA PRIM",
                "Community" => "FIALIBELLE",
                "Constituency" => "SISSALA WEST",
            ],
            [
                "Code" => "P100202",
                "Name" => "JITONG PRIM",
                "Community" => "JITONG",
                "Constituency" => "SISSALA WEST",
            ],
            [
                "Code" => "P100203",
                "Name" => "GBARIMA PRIM",
                "Community" => "GBARIMA",
                "Constituency" => "SISSALA WEST",
            ],
            [
                "Code" => "P100204",
                "Name" => "LEWIERA  PRIM",
                "Community" => "LEWIERA ",
                "Constituency" => "SISSALA WEST",
            ],
            [
                "Code" => "P100301A",
                "Name" => "SILBELLE PRIM",
                "Community" => "SILBELLE",
                "Constituency" => "SISSALA WEST",
            ],
            [
                "Code" => "P100301B",
                "Name" => "SILBELLE PRIM",
                "Community" => "SILBELLE",
                "Constituency" => "SISSALA WEST",
            ],
            [
                "Code" => "P100302A",
                "Name" => "SORBELLE PRIM",
                "Community" => "SORBELLE",
                "Constituency" => "SISSALA WEST",
            ],
            [
                "Code" => "P100302B",
                "Name" => "SORBELLE PRIM",
                "Community" => "SORBELLE",
                "Constituency" => "SISSALA WEST",
            ],
            [
                "Code" => "P100303A",
                "Name" => "SORBELLE JHS",
                "Community" => "SORBELLE",
                "Constituency" => "SISSALA WEST",
            ],
            [
                "Code" => "P100303B",
                "Name" => "SORBELLE JHS",
                "Community" => "SORBELLE",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100304A",
                "Name" => "BUOTI PRIM",
                "Community" => "BUOTI",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100304B",
                "Name" => "BUOTI PRIM",
                "Community" => "BUOTI",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100305",
                "Name" => "KANDIA PRIM",
                "Community" => "KANDIA",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100401A",
                "Name" => "GWOLLU PRIM",
                "Community" => "GWOLLU",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100401B",
                "Name" => "GWOLLU PRIM",
                "Community" => "GWOLLU",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100402",
                "Name" => "GWOLLU PRIM",
                "Community" => "GWOLLU",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100403A",
                "Name" => "GWOLLU PRIM",
                "Community" => "GWOLLU",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100403B",
                "Name" => "GWOLLU PRIM",
                "Community" => "GWOLLU",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100404",
                "Name" => "GWOLLU JHS",
                "Community" => "GWOLLU",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100501A",
                "Name" => "KONNALA PRIM",
                "Community" => "KONNALA",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100501B",
                "Name" => "KONNALA PRIM",
                "Community" => "KONNALA",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100502",
                "Name" => "KONNALA PRIM",
                "Community" => "KONNALA",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100601",
                "Name" => "JAWIA PRIM",
                "Community" => "JAWIA",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100602",
                "Name" => "JAWIA PRIM",
                "Community" => "JAWIA",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100603",
                "Name" => "JAWIA JHS",
                "Community" => "JAWIA",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100604",
                "Name" => "LIPILIME PRIM.",
                "Community" => "LIPILIME",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100605",
                "Name" => "LIPILIME PRIM.",
                "Community" => "LIPILIME",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100606",
                "Name" => "MUABELLE DAY",
                "Community" => "MUABELLE",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100701",
                "Name" => "KUSALI PRIM",
                "Community" => "KUSALI",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100702",
                "Name" => "KUSALI PRIM",
                "Community" => "KUSALI",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100703",
                "Name" => "KUNKORGU PRIM",
                "Community" => "KUNKORGU",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100801",
                "Name" => "JEFFISI PRIM",
                "Community" => "JEFFISI",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100802",
                "Name" => "JEFFISI PRIM",
                "Community" => "JEFFISI",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100803",
                "Name" => "JEFFISI PRIM",
                "Community" => "JEFFISI",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100804A",
                "Name" => "JEFFISI JHS",
                "Community" => "JEFFISI",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100804B",
                "Name" => "JEFFISI JHS",
                "Community" => "JEFFISI",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100805",
                "Name" => "KUNTULO PRIM",
                "Community" => "KUNTULO",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100806",
                "Name" => "DAJAN PRIM",
                "Community" => "DAJAN",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100901",
                "Name" => "DASIMA PRIM",
                "Community" => "DASIMA",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100902",
                "Name" => "DASIMA PRIM",
                "Community" => "DASIMA",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100903",
                "Name" => "DASIMA JHS",
                "Community" => "DASIMA",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100904",
                "Name" => "DUWIE PRIM",
                "Community" => "DUWIE",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100905",
                "Name" => "TIMMIE PRIM",
                "Community" => "TIMMIE",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P100906",
                "Name" => "GBELE CHIEF",
                "Community" => "GBELE",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101001",
                "Name" => "BULLU PRIM",
                "Community" => "BULLU",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101002",
                "Name" => "BULLU PRIM",
                "Community" => "BULLU",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101003A",
                "Name" => "NYIMETI PRIM.",
                "Community" => "NYIMETI",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101003B",
                "Name" => "NYIMETI PRIM.",
                "Community" => "NYIMETI",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101004",
                "Name" => "NYIMETI PRIM.",
                "Community" => "NYIMETI",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101005",
                "Name" => "JUAGANMUA DAY",
                "Community" => "JUAGANMUA",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101101",
                "Name" => "KWALA PRIM",
                "Community" => "KWALA",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101102",
                "Name" => "PAANA PRIM.",
                "Community" => "PAANA",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101103",
                "Name" => "GBAL PRIM",
                "Community" => "GBAL",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101104",
                "Name" => "KUNNI PRIM.",
                "Community" => "KUNNI",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101201",
                "Name" => "FIELMUA ZONGO",
                "Community" => "FIELMUA",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101202A",
                "Name" => "FIELMUA DAY",
                "Community" => "FIELMUA",
                "Constituency" => "SISSALA WEST",
                "" => "WEST"
            ],
            [
                "Code" => "P101202B",
                "Name" => "FIELMUA DAY",
                "Community" => "FIELMUA",
                "Constituency" => "SISSALA WEST",
                "" => "WEST"
            ],
            [
                "Code" => "P101203A",
                "Name" => "FIELMUA DAY",
                "Community" => "FIELMUA",
                "Constituency" => "SISSALA WEST",
                "" => "WEST"
            ],
            [
                "Code" => "P101203B",
                "Name" => "FIELMUA DAY",
                "Community" => "FIELMUA",
                "Constituency" => "SISSALA WEST",
                "" => "WEST"
            ],
            [
                "Code" => "P101204A",
                "Name" => "FIELMUA MARKET",
                "Community" => "FIELMUA",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101204B",
                "Name" => "FIELMUA MARKET",
                "Community" => "FIELMUA",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101301A",
                "Name" => "CHETU PRIM",
                "Community" => "CHETU",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101301B",
                "Name" => "CHETU PRIM",
                "Community" => "CHETU",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101302",
                "Name" => "GAAPARI PRIM.",
                "Community" => "GAAPARI",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101401",
                "Name" => "NIMORO COMM.",
                "Community" => "NIMORO",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101402A",
                "Name" => "WIIRO PRIM",
                "Community" => "WIIRO",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101402B",
                "Name" => "WIIRO PRIM",
                "Community" => "WIIRO",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101403",
                "Name" => "CHAPARISI CHIEF",
                "Community" => "CHAPARISI",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101404",
                "Name" => "KAA PRIM",
                "Community" => "KAA",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101501A",
                "Name" => "BUO PRIM",
                "Community" => "BUO",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101501B",
                "Name" => "BUO PRIM",
                "Community" => "BUO",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101502A",
                "Name" => "BUO JHS",
                "Community" => "BUO",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101502B",
                "Name" => "BUO JHS",
                "Community" => "BUO",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101503",
                "Name" => "KONCHUURI KG",
                "Community" => "KONCHUURI",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101601A",
                "Name" => "LIERO KG",
                "Community" => "LIERO",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101601B",
                "Name" => "LIERO KG",
                "Community" => "LIERO",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101602",
                "Name" => "FOLITENG PRIM.",
                "Community" => "FOLITENG",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101603",
                "Name" => "KANKANDUOLE PRIM",
                "Community" => "KANKANDUOLE",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101604",
                "Name" => "BUKPAL MARKET",
                "Community" => "BUKPAL",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101701",
                "Name" => "ZINI PRIM",
                "Community" => "ZINI",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101702",
                "Name" => "ZINI PRIM",
                "Community" => "ZINI",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101703",
                "Name" => "DAKUMA PRIM",
                "Community" => "DAKUMA",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101704",
                "Name" => "HIEL CHIEF",
                "Community" => "HIEL",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101801A",
                "Name" => "TIIWI PRIM",
                "Community" => "TIIWI",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101801B",
                "Name" => "TIIWI PRIM",
                "Community" => "TIIWI",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101802A",
                "Name" => "PUZENE PRIM",
                "Community" => "PUZENE",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101802B",
                "Name" => "PUZENE PRIM",
                "Community" => "PUZENE",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101803",
                "Name" => "NYIVIL PRIM",
                "Community" => "NYIVIL",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101901",
                "Name" => "NYENTIE PRIM",
                "Community" => "NYENTIE",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101902A",
                "Name" => "FATCHU PRIM",
                "Community" => "FATCHU",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101902B",
                "Name" => "FATCHU PRIM",
                "Community" => "FATCHU",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P101903",
                "Name" => "SANGBAKA PRIM",
                "Community" => "SANGBAKA",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P102001",
                "Name" => "NIATOR PRIM",
                "Community" => "NIATOR",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P102002",
                "Name" => "WASAI PRIM",
                "Community" => "WASAI",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P102003",
                "Name" => "LULO PRIM",
                "Community" => "LULO",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P102101",
                "Name" => "DU PRIM",
                "Community" => "DU",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P102102",
                "Name" => "GUMO PRIM",
                "Community" => "GUMO",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P102103",
                "Name" => "PEPILIME PRIM",
                "Community" => "PEPILIME",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ],
            [
                "Code" => "P1001SPS",
                "Name" => "E.C OFFICE,GOLLU SISSALA WEST",
                "Community" => "E.C OFFICE,GOLLU",
                "Constituency" => "SISSALA WEST",
                "" => ""
            ]
        ];


        $lookupCollection = collect($lookup);

        foreach ($list as $polling) {

            $electoralArea = $lookupCollection->where("Code", $polling["Code"])->first()['Electoral_area'];

            PollingStation::query()->create([
                "Code" => $polling["Code"],
                "name" => $polling["Name"],
                "community_id"=>Community::query()->where("name",$electoralArea)->first()->id,
                "constituency_id"=>Constituency::query()->where("name",$polling["Constituency"])->first()->id,
                ]);

        }


    }
}
