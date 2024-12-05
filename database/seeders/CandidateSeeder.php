<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\Constituency;
use App\Models\Party;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $candidates = [
            [
                "name" => "Mahamudu Bawumia",
                "party_id" => Party::where("acronym", "NPP")->first()->id,
                "type" => "pr",
                "constituency_id"=>null,
                "photo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/bawumia.png",
                "uuid" => Str::uuid()
            ],

            [
                "name" => "Daniel Augustus Lartey",
                "party_id" => Party::where("acronym", "GCPP")->first()->id,
                "type" => "pr",
                "constituency_id"=>null,
                "photo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/Daniel-2-GBC.webp",
                "uuid" => Str::uuid()
            ]
//
            ,

            [
                "name" => "Christian Kwabena Andrews",
                "party_id" => Party::where("acronym", "GUM")->first()->id,
                "type" => "pr",
                "constituency_id"=>null,
                "photo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/IMG-20240703-WA00101.jpg",
                "uuid" => Str::uuid()
            ]
            ,
            [
                "name" => "Kofi Akpaloo",
                "party_id" => Party::where("acronym", "LPG")->first()->id,
                "type" => "pr",
                "constituency_id"=>null,
                "photo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/kofi-akpaloo.jpg",
                "uuid" => Str::uuid()
            ]
            ,
            [
                "name" => "Nana Akosua Frimpomaa",
                "party_id" => Party::where("acronym", "CPP")->first()->id,
                "type" => "pr",
                "constituency_id"=>null,
                "photo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/mohammed.jpg",
                "uuid" => Str::uuid()
            ]
            ,
            [
                "name" => "John Dramani Mahama",
                "party_id" => Party::where("acronym", "NDC")->first()->id,
                "type" => "pr",
                "constituency_id"=>null,
                "photo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/JDM.avif",
                "uuid" => Str::uuid()
            ]
            ,
            [
                "name" => "Hassan Abdulai Ayariga",
                "party_id" => Party::where("acronym", "APC")->first()->id,
                "type" => "pr",
                "constituency_id"=>null,
                "photo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/IMG-20240703-WA00101.jpg",
                "uuid" => Str::uuid()
            ]
            ,
            [
                "name" => "Kofi Koranteng",
                "party_id" => Party::where("acronym", "IND")->first()->id,
                "type" => "pr",
                "constituency_id"=>null,
                "photo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/ind.jpg",
                "uuid" => Str::uuid()
            ]
            ,
            [
                "name" => "George Twum Barima",
                "party_id" => Party::where("acronym", "IND")->first()->id,
                "type" => "pr",
                "constituency_id"=>null,
                "photo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/twumbee.jpg",
                "uuid" => Str::uuid()
            ],
            [
                "name" => "Nana Kwame Bediako",
                "party_id" => Party::where("acronym", "TNF")->first()->id,
                "type" => "pr",
                "constituency_id"=>null,
                "photo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/Nana-Kwame-Bediako.png",
                "uuid" => Str::uuid()
            ]
            ,
            [
                "name" => "Alan John Kwadwo Kyerematen",
                "party_id" => Party::where("acronym", "MFC")->first()->id,
                "type" => "pr",
                "constituency_id"=>null,
                "photo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/Alan.jpg",
                "uuid" => Str::uuid()
            ]

            ,
            [
                "name" => "Issah Mohamed Bataglia",
                "party_id" => Party::where("acronym", "NDC")->first()->id,
                "type" => "mp",
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
                "photo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/bat.jpg",
                "uuid" => Str::uuid()
            ]
            ,
            [
                "name" => "Amidu Chinnia Issahaku",
                "party_id" => Party::where("acronym", "NPP")->first()->id,
                "type" => "mp",
                "constituency_id" => Constituency::where("name", "Sissala East")->first()->id,
                "photo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/amidu.jpg",
                "uuid" => Str::uuid()
            ]
            ,
            [
                "name" => "Salifu Naliwie Baliwie",
                "party_id" => Party::where("acronym", "NPP")->first()->id,
                "type" => "mp",
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
                "photo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/naliwie.jpg",
                "uuid" => Str::uuid()
            ]
            ,
            [
                "name" => "Mohammed Adams Supkaru",
                "party_id" => Party::where("acronym", "NDC")->first()->id,
                "type" => "mp",
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
                "photo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/MOHAMMED_ADAMS_SUKPARU.jpg",
                "uuid" => Str::uuid()
            ]
            ,
            [
                "name" => "Yussif Shaibu",
                "party_id" => Party::where("acronym", "PNC")->first()->id,
                "type" => "mp",
                "constituency_id" => Constituency::where("name", "Sissala West")->first()->id,
                "photo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/Yussif-Shaibu.jpg",
                "uuid" => Str::uuid()
            ]


        ];

        Candidate::insert($candidates);
    }
}
