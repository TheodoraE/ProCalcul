<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert(
            [
                [
                    "type" => "Légume",
                    "active" => true
                ],
                [
                    "type" => "Fruit",
                    "active" => true
                ],
                [
                    "type" => "Jus de légume",
                    "active" => true
                ],
                [
                    "type" => "Jus de fruit",
                    "active" => true
                ],
                [
                    "type" => "Divers",
                    "active" => true
                ],
                [
                    "type" => "Produits spéciaux",
                    "active" => true
                ],
                [
                    "type" => "Repas faits maison",
                    "active" => true
                ],
            ]
        );
    }
}
