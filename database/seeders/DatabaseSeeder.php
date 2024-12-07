<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            "name"=>"Admin",
            "email"=>"admin@radfordfmnews.com",
            "password"=>Hash::make('Pa$$word@EH#24'),
        ]);

        $this->call(ConstituenciesSeeder::class);
        $this->call(PartySeeder::class);
        $this->call(CandidateSeeder::class);
        $this->call(CommunitySeeder::class);
        $this->call(CommunitySWSeeder::class);
        $this->call(PollingStationsSeeder::class);
        $this->call(PollingSWSeeder::class);


    }
}
