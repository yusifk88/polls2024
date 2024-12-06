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
                "name" => "CHALLU/PIEN",
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
            ],

            [
                "name" => "BASSISAN",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]

            ,
            [
                "name" => "PINA",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ], [
                "name" => "KUNCHUGU",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ],

            [
                "name" => "NANCHALA",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ],
            [
                "name" => "WURU",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ],

            [
                "name" => "DIMAJAN",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            , [
                "name" => "TAFFIASI",
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
                "name" => "YIGANTU",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ],

            [
                "name" => "SIMBORU",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            ,

            [
                "name" => "KASSANA",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ],

            [
                "name" => "DIDUORIJAN",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            , [
                "name" => "KASSAPOURI",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            , [
                "name" => "KATINIA",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            ,

            [
                "name" => "LILIXIA",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ],
            [
                "name" => "NAHADAKUI",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ],
            [
                "name" => "DANGI",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ],
            [
                "name" => "BAKUALA",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ],


            [
                "name" => "SAKAI",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ],
            [
                "name" => "NANKPAWIE",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ],
            [
                "name" => "KOWIE",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ], [
                "name" => "HALAMBOI",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ],

            [
                "name" => "NAVROWIE",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ],
            [
                "name" => "SAKALU",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ], [
                "name" => "JIJEN",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ],

            [
                "name" => "JANA",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            ,
            [
                "name" => "TIMBAKA",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ] ,  [
                "name" => "BENDEI",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ] ,

            [
                "name" => "SENTIE",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            , [
                "name" => "TANLA",
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
            ]  ,

            [
                "name" => "KUNSOLA",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            , [
                "name" => "TANVIEL",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            ,

            [
                "name" => "KPAVIALA/ YALIA",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            , [
                "name" => "CHINCHAN",
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
            ]
            , [
                "name" => "DAGBASU",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            ,

            [
                "name" => "BUGUBELLE",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            ,  [
                "name" => "KULUFUO",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]  ,  [
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
            ] ,  [
                "name" => "BUCHEMBOI",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ] ,
            [
                "name" => "KUROBOI",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ] ,
            [
                "name" => "FACHOBOI",
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
                "name" => "TUMU",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ] ,
            [
                "name" => "NYEMINJAN",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            ,
            [
                "name" => "STADIUM RESIDENTIAL",
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
            ]
            , [
                "name" => "KALAXSI",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            ,
            [
                "name" => "GBENEWISE",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]
            ,  [
                "name" => "GUOSI",
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
  ,
            [
                "name" => "KOMOR",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]


        ];

        Community::insert($list);


    }
}
