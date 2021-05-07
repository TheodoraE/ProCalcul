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
                    'proteinDose' => 4.00,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Asperge',
                    'proteins_100g' => 2.50,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Aubergine',
                    'proteins_100g' => 0.80,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Avocat',
                    'proteins_100g' => 2.00,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Bette',
                    'proteins_100g' => 2.00,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Betterave rouge',
                    'proteins_100g' => 1.67,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Bolet rude',
                    'proteins_100g' => 5.00,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Bolet orange',
                    'proteins_100g' => 2.22,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Brocoli',
                    'proteins_100g' => 3.33,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Carotte',
                    'proteins_100g' => 0.90,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Céleri',
                    'proteins_100g' => 0.71,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Céleri rave',
                    'proteins_100g' => 1.67,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Cêpe',
                    'proteins_100g' => 6.67,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Champignon',
                    'proteins_100g' => 3.33,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Chanterelle',
                    'proteins_100g' => 2.50,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Chicon',
                    'proteins_100g' => 0.90,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Chou blanc',
                    'proteins_100g' => 1.43,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Chou de Bruxelles',
                    'proteins_100g' => 4.00,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Choucroute',
                    'proteins_100g' => 1.52,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Chou chinois',
                    'proteins_100g' => 1.25,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Chou fleur',
                    'proteins_100g' => 2.00,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Chou frisé',
                    'proteins_100g' => 3.33,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Chou navet',
                    'proteins_100g' => 1.16,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Chou rave',
                    'proteins_100g' => 1.82,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Chou romanesco',
                    'proteins_100g' => 3.33,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Chou rouge',
                    'proteins_100g' => 1.54,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Chou vert',
                    'proteins_100g' => 3.33,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Citrouille',
                    'proteins_100g' => 1.00,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Coeur de palmier',
                    'proteins_100g' => 2.50,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Concombre',
                    'proteins_100g' => 0.71,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Courgette',
                    'proteins_100g' => 1.25,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Cresson',
                    'proteins_100g' => 2.50,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Endive',
                    'proteins_100g' => 0.90,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Epinard',
                    'proteins_100g' => 3.33,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Fenouil',
                    'proteins_100g' => 1.43,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Germe de soja',
                    'proteins_100g' => 2.00,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Girolle',
                    'proteins_100g' => 2.50,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Haricot vert',
                    'proteins_100g' => 2.50,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Laitue',
                    'proteins_100g' => 1.25,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Mâche',
                    'proteins_100g' => 2.00,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Maïs épi',
                    'proteins_100g' => 2.86,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Morille',
                    'proteins_100g' => 1.66,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Navet',
                    'proteins_100g' => 0.90,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Oignon',
                    'proteins_100g' => 0.90,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Olive verte',
                    'proteins_100g' => 1.38,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Oseille',
                    'proteins_100g' => 2.00,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Panais',
                    'proteins_100g' => 1.33,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Patate douce',
                    'proteins_100g' => 1.63,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Persil',
                    'proteins_100g' => 3.33,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Petits pois',
                    'proteins_100g' => 6.67,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Pissenlit',
                    'proteins_100g' => 3.33,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Pleurotes',
                    'proteins_100g' => 2.00,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Poivron',
                    'proteins_100g' => 0.90,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Poireau',
                    'proteins_100g' => 1.54,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Pois gourmands',
                    'proteins_100g' => 2.86,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Potimarron',
                    'proteins_100g' => 1.00,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Pommes de terre nature',
                    'proteins_100g' => 2.04,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Pommes de terre chips',
                    'proteins_100g' => 5.48,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Pommes de terre frites',
                    'proteins_100g' => 4.20,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Pourpier',
                    'proteins_100g' => 1.25,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Radis',
                    'proteins_100g' => 0.71,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Raifort',
                    'proteins_100g' => 2.86,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Rhubarbe',
                    'proteins_100g' => 0.60,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Salsifis',
                    'proteins_100g' => 1.43,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Tomate',
                    'proteins_100g' => 0.90,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Tomate concentrée',
                    'proteins_100g' => 4.00,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Tomate en coulis',
                    'proteins_100g' => 1.67,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Topinambour',
                    'proteins_100g' => 2.00,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Truffe',
                    'proteins_100g' => 5.53,
                    'type_id' => 1,
                    'active' => true
                ],
                [
                    'name' => 'Abricot',
                    'proteins_100g' => 1.43,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Abricot au sirop',
                    'proteins_100g' => 0.65,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Airelle',
                    'proteins_100g' => 0.28,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Airelles au sirop',
                    'proteins_100g' => 0.54,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Ananas',
                    'proteins_100g' => 0.54,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Ananas au sirop',
                    'proteins_100g' => 0.35,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Arachide fraîche',
                    'proteins_100g' => 25.45,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Arachide grillée',
                    'proteins_100g' => 25.63,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Baie de sureau',
                    'proteins_100g' => 0.71,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Banane',
                    'proteins_100g' => 1.11,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Cassis',
                    'proteins_100g' => 1.43,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Carambole',
                    'proteins_100g' => 1.05,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Cerise',
                    'proteins_100g' => 1.05,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Cerise au sirop',
                    'proteins_100g' => 0.67,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Chataigne',
                    'proteins_100g' => 1.67,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Citron',
                    'proteins_100g' => 0.71,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Coing',
                    'proteins_100g' => 0.40,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Figue',
                    'proteins_100g' => 0.77,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Figue sèche',
                    'proteins_100g' => 3.54,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Figue au sirop',
                    'proteins_100g' => 0.63,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Fraise',
                    'proteins_100g' => 0.67,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Fraise au sirop',
                    'proteins_100g' => 0.57,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Framboise',
                    'proteins_100g' => 1.25,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Framboise au sirop',
                    'proteins_100g' => 0.71,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Fruit de la passion',
                    'proteins_100g' => 2.22,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Goyave',
                    'proteins_100g' => 2.50,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Grenade',
                    'proteins_100g' => 0.95,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Griotte',
                    'proteins_100g' => 0.90,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Groseille à maquereau',
                    'proteins_100g' => 0.80,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Groseilles rouges',
                    'proteins_100g' => 1.43,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Groseilles blanches',
                    'proteins_100g' => 0.90,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Kaki',
                    'proteins_100g' => 0.59,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Kiwi',
                    'proteins_100g' => 1.18,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Lime',
                    'proteins_100g' => 0.71,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Litchi',
                    'proteins_100g' => 1.00,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Litchi au sirop',
                    'proteins_100g' => 1.54,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Mandarine',
                    'proteins_100g' => 0.71,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Mandarine au sirop',
                    'proteins_100g' => 0.40,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Mangue',
                    'proteins_100g' => 0.51,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Melon',
                    'proteins_100g' => 0.83,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Mirabelle',
                    'proteins_100g' => 0.74,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Mûres',
                    'proteins_100g' => 1.43,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Myrtilles',
                    'proteins_100g' => 0.71,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Myrtilles au sirop',
                    'proteins_100g' => 0.71,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Nectarine',
                    'proteins_100g' => 1.05,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Noisettes',
                    'proteins_100g' => 14.10,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Noix',
                    'proteins_100g' => 17.00,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Noix de cajou',
                    'proteins_100g' => 17.50,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Noix de coco',
                    'proteins_100g' => 3.92,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Laix de coco',
                    'proteins_100g' => 0.25,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Orange',
                    'proteins_100g' => 0.80,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Pamplemousse',
                    'proteins_100g' => 0.65,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Pamplemousse au sirop',
                    'proteins_100g' => 0.57,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Papaye',
                    'proteins_100g' => 0.60,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Pastèque',
                    'proteins_100g' => 0.60,
                    'type_id' => 2,
                    'active' => true
                ],[
                    'name' => 'Pêche',
                    'proteins_100g' => 0.91,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Pêche au sirop',
                    'proteins_100g' => 0.45,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Poire',
                    'proteins_100g' => 0.38,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Poire au sirop',
                    'proteins_100g' => 0.20,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Pomme',
                    'proteins_100g' => 0.27,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Compote de pomme',
                    'proteins_100g' => 0.22,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Prune',
                    'proteins_100g' => 0.71,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Prune au sirop',
                    'proteins_100g' => 0.57,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Pruneau',
                    'proteins_100g' => 2.30,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Raisin',
                    'proteins_100g' => 0.71,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Raisins au sirop',
                    'proteins_100g' => 0.50,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Raisins secs',
                    'proteins_100g' => 2.46,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Reine Claude',
                    'proteins_100g' => 0.79,
                    'type_id' => 2,
                    'active' => true
                ],
                [
                    'name' => 'Jus ananas',
                    'proteins_100g' => 0.40,
                    'type_id' => 4,
                    'active' => true
                ],
                [
                    'name' => 'Jus baies de sureau',
                    'proteins_100g' => 2.02,
                    'type_id' => 4,
                    'active' => true
                ],
                [
                    'name' => 'Jus citron',
                    'proteins_100g' => 0.40,
                    'type_id' => 4,
                    'active' => true
                ],
                [
                    'name' => 'Jus framboise frais',
                    'proteins_100g' => 0.31,
                    'type_id' => 4,
                    'active' => true
                ],
                [
                    'name' => 'Jus mandarine',
                    'proteins_100g' => 0.90,
                    'type_id' => 4,
                    'active' => true
                ],
                [
                    'name' => 'Jus orange frais',
                    'proteins_100g' => 0.72,
                    'type_id' => 4,
                    'active' => true
                ],
                [
                    'name' => 'Jus orange commerce',
                    'proteins_100g' => 0.68,
                    'type_id' => 4,
                    'active' => true
                ],
                [
                    'name' => 'Jus oranges concentrées',
                    'proteins_100g' => 2.38,
                    'type_id' => 4,
                    'active' => true
                ],
                [
                    'name' => 'Jus pamplemousse',
                    'proteins_100g' => 0.55,
                    'type_id' => 4,
                    'active' => true
                ],
                [
                    'name' => 'Jus pamplemousse com.',
                    'proteins_100g' => 0.53,
                    'type_id' => 4,
                    'active' => true
                ],
                [
                    'name' => 'Jus pomme',
                    'proteins_100g' => 0.07,
                    'type_id' => 4,
                    'active' => true
                ],
                [
                    'name' => 'Jus raisin',
                    'proteins_100g' => 0.21,
                    'type_id' => 4,
                    'active' => true
                ],
                [
                    'name' => 'Jus de carottes',
                    'proteins_100g' => 0.63,
                    'type_id' => 3,
                    'active' => true
                ],
                [
                    'name' => 'Jus tomates',
                    'proteins_100g' => 0.76,
                    'type_id' => 3,
                    'active' => true
                ],
                [
                    'name' => 'Lait de vache',
                    'proteins_100g' => 3.33,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Crème fraiche',
                    'proteins_100g' => 2.31,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Chocolat au lait',
                    'proteins_100g' => 9.20,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Chocolat fondant',
                    'proteins_100g' => 5.30,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Confiture',
                    'proteins_100g' => 0.33,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Fufu',
                    'proteins_100g' => 1.57,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Gelée de fruits',
                    'proteins_100g' => 0.01,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Massepain',
                    'proteins_100g' => 8.00,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Miel',
                    'proteins_100g' => 0.38,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Sirop de Liège',
                    'proteins_100g' => 2.00,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Levure chimique',
                    'proteins_100g' => 0.20,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Levure de boulanger',
                    'proteins_100g' => 16.70,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Levure sèche',
                    'proteins_100g' => 47.90,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Moutarde',
                    'proteins_100g' => 5.90,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Mayonnaise',
                    'proteins_100g' => 1.49,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Ketchup',
                    'proteins_100g' => 1.00,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Pickels',
                    'proteins_100g' => 1.00,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Gelatine',
                    'proteins_100g' => 84.20,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Cube bouillon légumes',
                    'proteins_100g' => 0.50,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Cube bouillon poisson',
                    'proteins_100g' => 0.40,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Cube bouillon poule',
                    'proteins_100g' => 0.40,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Cube bouillon viande',
                    'proteins_100g' => 0.30,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Beurre',
                    'proteins_100g' => 0.67,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Margarine',
                    'proteins_100g' => 0.20,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Minarine',
                    'proteins_100g' => 1.60,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Saindoux',
                    'proteins_100g' => 0.01,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Corn flakes',
                    'proteins_100g' => 7.70,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Fécule de pommes de terre',
                    'proteins_100g' => 0.61,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Maïzena',
                    'proteins_100g' => 0.60,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Riz cru',
                    'proteins_100g' => 7.78,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Riz complet cru',
                    'proteins_100g' => 7.22,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Pain normal',
                    'proteins_100g' => 8.00,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Blé (Ebly)',
                    'proteins_100g' => 12.10,
                    'type_id' => 5,
                    'active' => true
                ],
                [
                    'name' => 'Biscottes Aproten',
                    'proteins_100g' => 1.40,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Biscuits Aproten',
                    'proteins_100g' => 1.00,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Pâtes Aproten',
                    'proteins_100g' => 0.60,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Farine Noproten',
                    'proteins_100g' => 0.30,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Pain Aproten',
                    'proteins_100g' => 1.00,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Cracottes Aproten',
                    'proteins_100g' => 1.60,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Biscuits chocolat Aproten',
                    'proteins_100g' => 1.60,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Biscuits fruits Aproten',
                    'proteins_100g' => 1.00,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Gauffrette vanille Aproten',
                    'proteins_100g' => 1.00,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Chicchi Aproten',
                    'proteins_100g' => 1.00,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Biscuits caramel Harifen',
                    'proteins_100g' => 0.35,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Biscuits fourrés fraise Harifen',
                    'proteins_100g' => 0.30,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Galettes Harifen',
                    'proteins_100g' => 0.35,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Coockies cacao chips Harifen',
                    'proteins_100g' => 0.55,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Riz Harifen',
                    'proteins_100g' => 0.40,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Alphabets Harifen',
                    'proteins_100g' => 0.35,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Toast Harifen',
                    'proteins_100g' => 0.45,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Burger Taranis',
                    'proteins_100g' => 4.20,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Snackybillie Emmental Taranis',
                    'proteins_100g' => 0.15,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Crackers goût tomate Taranis',
                    'proteins_100g' => 0.80,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Crackers herbes provence Taranis',
                    'proteins_100g' => 0.80,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Petits pains Taranis',
                    'proteins_100g' => 0.70,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Biscottes Taranis',
                    'proteins_100g' => 1.00,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Pâtes Taranis',
                    'proteins_100g' => 0.40,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Couscous, semoule, spaguetti Taranis',
                    'proteins_100g' => 0.35,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Pâte à tartiner noisette Taranis',
                    'proteins_100g' => 0.50,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Cake (citron, abricot, poire) Taranis',
                    'proteins_100g' => 0.20,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Biscuits sablés Taranis',
                    'proteins_100g' => 0.50,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Cookies pépites de chocolat Taranis',
                    'proteins_100g' => 0.50,
                    'type_id' => 6,
                    'active' => true
                ],[
                    'name' => 'Bicuits pépites de chocolat Taranis',
                    'proteins_100g' => 0.50,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Dessert à boire Taranis',
                    'proteins_100g' => 1.90,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Choquito Taranis',
                    'proteins_100g' => 2.50,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Entremets vanille-choco Taranis',
                    'proteins_100g' => 1.80,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Cerecal plus fruits rouges Taranis',
                    'proteins_100g' => 0.20,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Cerecal plus vanille Taranis',
                    'proteins_100g' => 0.20,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Prépa pain pâtisserie Taranis',
                    'proteins_100g' => 0.30,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => "Substitut d'oeufs Taranis",
                    'proteins_100g' => 0.30,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Sauce fromage Taranis',
                    'proteins_100g' => 1.20,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Sauce provencale Taranis',
                    'proteins_100g' => 0.74,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Substitut fromage en tr Taranis',
                    'proteins_100g' => 0.20,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Dalia poudre Taranis',
                    'proteins_100g' => 2.00,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Dalia boisson Taranis',
                    'proteins_100g' => 0.20,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Ciabatta Proceli',
                    'proteins_100g' => 1.05,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Baguette médi Proceli',
                    'proteins_100g' => 1.10,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Baguette prêt à manger Proceli',
                    'proteins_100g' => 1.40,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Vienes panini Proceli',
                    'proteins_100g' => 1.30,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Croissants Proceli',
                    'proteins_100g' => 1.60,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Pains pour hamburger Proceli',
                    'proteins_100g' => 1.70,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Pâte précuite pizza Proceli',
                    'proteins_100g' => 0.40,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Pain pita Proceli',
                    'proteins_100g' => 0.30,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Prépa pâtisserie Valpi',
                    'proteins_100g' => 0.80,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Biscuits nappés choco Valpi',
                    'proteins_100g' => 2.40,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Potage instantané tomates Orgran',
                    'proteins_100g' => 0.50,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => 'Poudre crème anglaise Orgran',
                    'proteins_100g' => 0.50,
                    'type_id' => 6,
                    'active' => true
                ],
                [
                    'name' => "Substitut d'oeufs Orgran",
                    'proteins_100g' => 0.06,
                    'type_id' => 6,
                    'active' => true
                ]
            ]
        );
    }
}
