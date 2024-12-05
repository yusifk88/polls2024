<?php

namespace Database\Seeders;

use App\Models\Community;
use App\Models\Constituency;
use Illuminate\Database\Seeder;

class CommunitySWSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $list = [
            [

                "name" => "JEFFISI",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
            ],
            [

                "name" => "DASIMA",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
            ],
            [

                "name" => "BULLU",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
            ], [

                "name" => "FATCHU",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
            ],

            [

                "name" => "NIATOR",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
            ],
            [

                "name" => "GUMO",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
            ],
            [

                "name" => "KWALA",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
            ],   [

                "name" => "ZINI",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
            ],

            [

                "name" => "FELIMUA",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
            ],
            [

                "name" => "BUO",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
            ],
            [

                "name" => "LIERO",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
            ],
            [

                "name" => "THIWI",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
            ]
            ,
            [

                "name" => "TIIWI",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
            ]
            ,
            [

                "name" => "KWALA",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
            ]
            ,
            [

                "name" => "FELMUA",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
            ],
            [

                "name" => "CHETU",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
            ]
            ,
            [

                "name" => "NIMORO",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
            ]
            ,
            [

                "name" => "BUO",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
            ]   ,
            [

                "name" => "GWOLLU",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
            ]
            ,
            [

                "name" => "KONNALA",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
            ]
            ,
            [

                "name" => "JAWIA",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
            ]
            ,
            [

                "name" => "KUSALI",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
            ]
            ,
            [

                "name" => "PULIMA",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
            ]
            ,
            [

                "name" => "SPECIAL ELECTORAL AREA",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
            ]
            ,
            [

                "name" => "HALIBELLE",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
            ]
            ,
            [

                "name" => "MWANGUBELLE",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
            ]

            ,
            [

                "name" => "JUASIALA",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
            ]   ,
            [

                "name" => "FIALIBELLE",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
            ]

        ];

        Community::insert($list);
    }
}
