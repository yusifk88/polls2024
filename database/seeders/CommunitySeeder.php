<?php

namespace Database\Seeders;

use App\Models\Community;
use App\Models\Constituency;
use Illuminate\Database\Seeder;

class CommunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [
            [
                "name" => "BUJAN",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ],

            [
                "name" => "CHALLU",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            ,

            [
                "name" => "KWAPUN",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            ,

            [
                "name" => "BANU",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]

            ,

            [
                "name" => "DOLIBIZON",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ],

            [
                "name" => "KASSANA",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            ,

            [
                "name" => "SAKAI",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ],
            [
                "name" => "Kyeiviara-Yalia",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ],
            [
                "name" => "Wallembelle",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            ,
            [
                "name" => "KONG",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]

            ,

            [
                "name" => "WELLEMBELLE",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ],
            [
                "name" => "BUGUBELLE",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            , [
                "name" => "VAMBOI",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            ,

            [
                "name" => "KULFUO/TARSOR",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            ,
            [
                "name" => "MWANDUANU",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ],  [
                "name" => "TUMU",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ],

            [
                "name" => "Kusinjan",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ],
            [
                "name" => "Nyaminjan",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            ,
            [
                "name" => "KUSINJAN",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            ,
            [
                "name" => "Stadium",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ],
            [
                "name" => "NYEMINJAN",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            ,
            [
                "name" => "ZONGO EXTENSION",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            ,
            [
                "name" => "NANYUA",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]

            ,
            [
                "name" => "NABULO",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ],
            [
                "name" => "Dolibzon",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            , [
                "name" => "Kasana",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            ,
            [
                "name" => "BAWIASIBELLE",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            ,
            [
                "name" => "SANTIJAN",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            ,
            [
                "name" => "NITALU",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]


        ];

        Community::insert($list);


    }
}
