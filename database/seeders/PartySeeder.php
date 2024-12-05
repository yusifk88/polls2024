<?php

namespace Database\Seeders;

use App\Models\Party;
use Illuminate\Database\Seeder;

class PartySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $politicalParties = [
            [
                "name" => "New Patriotic Party (NPP)",
                "color_code" => "#0000FF",
                "acronym" => "NPP",
                "logo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/npp.png"
            ],
            [
                "name" => "National Democratic Congress (NDC)",
                "color_code" => "#008000",
                "acronym" => "NDC",
                "logo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/NDC.png"

            ],
            [
                "name" => "Convention People’s Party (CPP)",
                "color_code" => "#581845",
                "acronym" => "CPP",
                "logo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/cpp.jpg"
            ],
            [
                "name" => "Progressive People’s Party (PPP)",
                "color_code" => "#008000",
                "acronym" => "PPP",
                "logo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/ppp.jpg"

            ],

            [
                "name" => "People’s National Convention (PNC)",
                "color_code" => "#FFC300",
                "acronym" => "PNC",
                "logo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/pnc.gif"

            ],
            [
                "name" => "Ghana Union Movement (GUM)",
                "color_code" => "#4a235a",
                "acronym" => "GUM",
                "logo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/GUM.png"

            ],
            [
                "name" => "Liberal Party of Ghana (LPG)",
                "color_code" => "#CCCCFF",
                "acronym" => "LPG",
                "logo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/LPG.jpeg"
            ],
            [
                "name" => "All People’s Congress (APC)",
                "color_code" => "#FF7F50",
                "acronym" => "APC",
                "logo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/APC.png"
            ],
            [
                "name" => "Great Consolidated Popular Party (GCPP)",
                "color_code" => "#008000",
                "acronym" => "GCPP",
                "logo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/GCPP_Logo.jpg"
            ],
            [
                "name" => "National Democratic Party (NDP)",
                "color_code" => "#808000",
                "acronym" => "NDP",
                "logo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/Screenshot%202024-12-02%20at%202.19.20%E2%80%AFPM.png"
            ]
            ,
            [
                "name" => "Movement For Change(MFC)",
                "color_code" => "#FFFF00",
                "acronym" => "MFC",
                "logo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/MFC.jpg"
            ] ,
            [
                "name" => "The New Force(TNF)",
                "color_code" => "#873600",
                "acronym" => "TNF",
                "logo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/TNF.jpg"
            ]
            ,
            [
                "name" => "Independent(IND)",
                "color_code" => "#000000",
                "acronym" => "IND",
                "logo_url" => "https://lrj6a9vl4is6.objectstorage.uk-london-1.oci.customer-oci.com/n/lrj6a9vl4is6/b/MyBucket/o/Screenshot%202024-12-02%20at%204.43.24%E2%80%AFPM.png"
            ]


        ];


        Party::where("id", ">", 0)->delete();

        Party::insert($politicalParties);


    }
}
