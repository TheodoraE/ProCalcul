<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AlimentSeeder::class,
            CalculUserSeeder::class,
            MaxProteinSeeder::class
        ]);
    }
}
