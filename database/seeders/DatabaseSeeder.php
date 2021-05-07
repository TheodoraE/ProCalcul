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
            TypeSeeder::class,
            AlimentSeeder::class,

            UserSeeder::class,
            // CalculUserSeeder::class,
        ]);
    }
}
