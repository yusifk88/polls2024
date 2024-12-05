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
                "name" => "BAWIASIBELLE",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]

            ,[
                "name" => "TUMU",
                "latitude" => 10.8800,
                "longitude" => -1.9380,
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
            ]

//            ,  [
//                "name" => "KULFUO",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ]
//             ,[
//                "name" => "CHINCHAN",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ]


//            ,[
//                "name" => "SAKAI",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ]
//            ,[
//                "name" => "DIMAJAN",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ]
//
//            ,[
//                "name" => "YIGANTU",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ]

//            ,[
//                "name" => "DOLIBIZON",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ]
//            ,
//            [
//                "name" => "KUNCHUGU",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ],
//            [
//                "name" => "WURU",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ]
//
//            ,[
//                "name" => "PIEN",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ]
//
//            ,
//
//            [
//                "name" => "NANCHALA",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ]
//            ,
//            [
//                "name" => "NANKPAWIE",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ]
//
//, [
//                "name" => "SIMBORU",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "DIDUORIJAN",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "JANA",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "KASSANA",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "KASSAPOURI",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "KATINIA",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ],
//            [
//                "name" => "NAVROWIE",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "TANLA",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "TANVIEL",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "NITALU",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "LILIXIA",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "NAHADAKUI",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "KONG",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "DANGI",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "BAKUALA",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "KOWIE",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "HALAMBOI",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "SAKALU",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "JIJEN",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "SENTIE",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ],
//            [
//                "name" => "BENDEI",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "TIMBAKA",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "DAGBASU",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "KULUFUO",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "KUROBOI",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "BUCHEMBOI",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ],[
//                "name" => "FACHOBOI",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ],[
//                "name" => "SANTIJAN",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ],[
//                "name" => "GUOSI",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ],[
//                "name" => "GBENEWISE",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ],[
//                "name" => "KALAXSI",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ],
//
//            [
//                "name" => "Nabulo",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ],
//            [
//                "name" => "Nabugubelle",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ],
//            [
//                "name" => "TARSOR",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ],
//            [
//                "name" => "Sakalo",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "Bujan",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "Vamboi",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "Taffiasi",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "Bawiesiboi",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "Komor",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "Bichemboi",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ], [
//                "name" => "Duu East",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ],
//            [
//                "name" => "Zupiri",
//                "latitude" => 10.8800,
//                "longitude" => -1.9380,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//            ]
//,
//            [
//                "name" => "Banu",
//                "latitude" => 10.8445,
//                "longitude" => -1.8654,
//                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
//
//
//            ],
//            ["name" => "Bawiesibelle", "latitude" => 10.8954, "longitude" => -1.9003,"constituency_id" => Constituency::where("name", "Sissala East")->first()->id,],
//            ["name" => "Bawiesibelle", "latitude" => 10.8954, "longitude" => -1.9003,"constituency_id" => Constituency::where("name", "Sissala East")->first()->id,],
//            ["name" => "Kwapun", "latitude" => 10.9124, "longitude" => -1.8401,"constituency_id" => Constituency::where("name", "Sissala East")->first()->id,],
//            ["name" => "Wellembelle", "latitude" => 10.8143, "longitude" => -1.8119,"constituency_id" => Constituency::where("name", "Sissala East")->first()->id,],
//            ["name" => "Challu", "latitude" => 10.8867, "longitude" => -1.7722,"constituency_id" => Constituency::where("name", "Sissala East")->first()->id,],
//            ["name" => "Gbingbale", "latitude" => 10.8573, "longitude" => -1.7854,"constituency_id" => Constituency::where("name", "Sissala East")->first()->id,],
//            ["name" => "Pina", "latitude" => 10.8302, "longitude" => -1.8599,"constituency_id" => Constituency::where("name", "Sissala East")->first()->id,],
//            ["name" => "Sumboro", "latitude" => 10.8043, "longitude" => -1.9024,"constituency_id" => Constituency::where("name", "Sissala East")->first()->id,],
//            ["name" => "Bugubelle", "latitude" => 10.7901, "longitude" => -1.9507,"constituency_id" => Constituency::where("name", "Sissala East")->first()->id,],
//            ["name" => "Kupulima", "latitude" => 10.8687, "longitude" => -1.9274,"constituency_id" => Constituency::where("name", "Sissala East")->first()->id,],
//            ["name" => "Santie", "latitude" => 10.8545, "longitude" => -1.9432,"constituency_id" => Constituency::where("name", "Sissala East")->first()->id,],
//            ["name" => "MWANDUANU", "latitude" => 10.8384, "longitude" => -1.8956,"constituency_id" => Constituency::where("name", "Sissala East")->first()->id,]
//

        ];

        Community::insert($list);


    }
}
