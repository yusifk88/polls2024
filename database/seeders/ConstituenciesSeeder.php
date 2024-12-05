<?php

namespace Database\Seeders;

use App\Models\Constituency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConstituenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [
            [
            "name"=>"Sissala East",
            "description"=>"Sissala East",
        ],

            [
            "name"=>"Sissala West",
            "description"=>"Sissala West",
        ]

        ];

        Constituency::insert($list);

    }
}
