<?php

namespace Database\Seeders;

use App\Models\Kategoria;
use App\Models\Recept;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Kategoria::create(['nev' => 'főétel']);
        Kategoria::create(['nev' => 'leves']);
        Kategoria::create(['nev' => 'édesség']);
        Kategoria::create(['nev' => 'saláta']);

        Recept::factory(10)->create();
    }
}
