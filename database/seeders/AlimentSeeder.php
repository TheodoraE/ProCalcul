<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aliments')->insert(
            [
                [
                    'name' => 'Artichaut',
                    'proteins_100g' => 4.00,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Asperge',
                    'proteins_100g' => 2.50,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Aubergine',
                    'proteins_100g' => 0.80,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Avocat',
                    'proteins_100g' => 2.00,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Bette',
                    'proteins_100g' => 2.00,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Betterave rouge',
                    'proteins_100g' => 1.67,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Bolet rude',
                    'proteins_100g' => 5.00,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Bolet orange',
                    'proteins_100g' => 2.22,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Brocoli',
                    'proteins_100g' => 3.33,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Carotte',
                    'proteins_100g' => 0.90,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Céleri',
                    'proteins_100g' => 0.71,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Céleri rave',
                    'proteins_100g' => 1.67,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Cêpe',
                    'proteins_100g' => 6.67,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Champignon',
                    'proteins_100g' => 3.33,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Chanterelle',
                    'proteins_100g' => 2.50,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Chicon',
                    'proteins_100g' => 0.90,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Chou blanc',
                    'proteins_100g' => 1.43,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Chou de Bruxelles',
                    'proteins_100g' => 4.00,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Choucroute',
                    'proteins_100g' => 1.52,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Chou chinois',
                    'proteins_100g' => 1.25,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Chou fleur',
                    'proteins_100g' => 2.00,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Chou frisé',
                    'proteins_100g' => 3.33,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Chou navet',
                    'proteins_100g' => 1.16,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Chou rave',
                    'proteins_100g' => 1.82,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Chou romanesco',
                    'proteins_100g' => 3.33,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Chou rouge',
                    'proteins_100g' => 1.54,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Chou vert',
                    'proteins_100g' => 3.33,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Citrouille',
                    'proteins_100g' => 1.00,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Coeur de palmier',
                    'proteins_100g' => 2.50,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Concombre',
                    'proteins_100g' => 0.71,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Courgette',
                    'proteins_100g' => 1.25,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Cresson',
                    'proteins_100g' => 2.50,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Endive',
                    'proteins_100g' => 0.90,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Epinard',
                    'proteins_100g' => 3.33,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Fenouil',
                    'proteins_100g' => 1.43,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Germe de soja',
                    'proteins_100g' => 2.00,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Girolle',
                    'proteins_100g' => 2.50,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Haricot vert',
                    'proteins_100g' => 2.50,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Laitue',
                    'proteins_100g' => 1.25,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Mâche',
                    'proteins_100g' => 2.00,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Maïs épi',
                    'proteins_100g' => 2.86,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Morille',
                    'proteins_100g' => 1.66,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Navet',
                    'proteins_100g' => 0.90,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Oignon',
                    'proteins_100g' => 0.90,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Olive verte',
                    'proteins_100g' => 1.38,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Oseille',
                    'proteins_100g' => 2.00,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Panais',
                    'proteins_100g' => 1.33,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Patate douce',
                    'proteins_100g' => 1.63,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Persil',
                    'proteins_100g' => 3.33,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Petits pois',
                    'proteins_100g' => 6.67,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Pissenlit',
                    'proteins_100g' => 3.33,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Pleurotes',
                    'proteins_100g' => 2.00,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Poivron',
                    'proteins_100g' => 0.90,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Poireau',
                    'proteins_100g' => 1.54,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Pois gourmands',
                    'proteins_100g' => 2.86,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Potimarron',
                    'proteins_100g' => 1.00,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Pommes de terre nature',
                    'proteins_100g' => 2.04,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Pommes de terre chips',
                    'proteins_100g' => 5.48,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Pommes de terre frites',
                    'proteins_100g' => 4.20,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Pourpier',
                    'proteins_100g' => 1.25,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Radis',
                    'proteins_100g' => 0.71,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Raifort',
                    'proteins_100g' => 2.86,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Rhubarbe',
                    'proteins_100g' => 0.60,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Salsifis',
                    'proteins_100g' => 1.43,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Tomate',
                    'proteins_100g' => 0.90,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Tomate concentrée',
                    'proteins_100g' => 4.00,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Tomate en coulis',
                    'proteins_100g' => 1.67,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Topinambour',
                    'proteins_100g' => 2.00,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Truffe',
                    'proteins_100g' => 5.53,
                    'type' => 'Légume'
                ],
                [
                    'name' => 'Abricot',
                    'proteins_100g' => 1.43,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Abricot au sirop',
                    'proteins_100g' => 0.65,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Airelle',
                    'proteins_100g' => 0.28,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Airelles au sirop',
                    'proteins_100g' => 0.54,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Ananas',
                    'proteins_100g' => 0.54,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Ananas au sirop',
                    'proteins_100g' => 0.35,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Arachide fraîche',
                    'proteins_100g' => 25.45,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Arachide grillée',
                    'proteins_100g' => 25.63,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Baie de sureau',
                    'proteins_100g' => 0.71,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Banane',
                    'proteins_100g' => 1.11,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Cassis',
                    'proteins_100g' => 1.43,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Carambole',
                    'proteins_100g' => 1.05,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Cerise',
                    'proteins_100g' => 1.05,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Cerise au sirop',
                    'proteins_100g' => 0.67,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Chataigne',
                    'proteins_100g' => 1.67,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Citron',
                    'proteins_100g' => 0.71,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Coing',
                    'proteins_100g' => 0.40,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Figue',
                    'proteins_100g' => 0.77,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Figue sèche',
                    'proteins_100g' => 3.54,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Figue au sirop',
                    'proteins_100g' => 0.63,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Fraise',
                    'proteins_100g' => 0.67,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Fraise au sirop',
                    'proteins_100g' => 0.57,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Framboise',
                    'proteins_100g' => 1.25,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Framboise au sirop',
                    'proteins_100g' => 0.71,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Fruit de la passion',
                    'proteins_100g' => 2.22,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Goyave',
                    'proteins_100g' => 2.50,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Grenade',
                    'proteins_100g' => 0.95,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Griotte',
                    'proteins_100g' => 0.90,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Groseille à maquereau',
                    'proteins_100g' => 0.80,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Groseilles rouges',
                    'proteins_100g' => 1.43,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Groseilles blanches',
                    'proteins_100g' => 0.90,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Kaki',
                    'proteins_100g' => 0.59,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Kiwi',
                    'proteins_100g' => 1.18,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Lime',
                    'proteins_100g' => 0.71,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Litchi',
                    'proteins_100g' => 1.00,
                    'type' => 'Fruit'
                ]
            ]
        );
    }
}
