<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaxProteinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('max_proteins')->insert(
            [
                [
                    'max_proteins' => 20.00
                ]
            ]
        );
    }
}
