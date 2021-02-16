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
                ],
                [
                    'name' => 'Litchi au sirop',
                    'proteins_100g' => 1.54,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Mandarine',
                    'proteins_100g' => 0.71,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Mandarine au sirop',
                    'proteins_100g' => 0.40,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Mangue',
                    'proteins_100g' => 0.51,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Melon',
                    'proteins_100g' => 0.83,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Mirabelle',
                    'proteins_100g' => 0.74,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Mûres',
                    'proteins_100g' => 1.43,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Myrtilles',
                    'proteins_100g' => 0.71,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Myrtilles au sirop',
                    'proteins_100g' => 0.71,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Nectarine',
                    'proteins_100g' => 1.05,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Noisettes',
                    'proteins_100g' => 14.10,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Noix',
                    'proteins_100g' => 17.00,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Noix de cajou',
                    'proteins_100g' => 17.50,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Noix de coco',
                    'proteins_100g' => 3.92,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Laix de coco',
                    'proteins_100g' => 0.25,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Orange',
                    'proteins_100g' => 0.80,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Pamplemousse',
                    'proteins_100g' => 0.65,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Pamplemousse au sirop',
                    'proteins_100g' => 0.57,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Papaye',
                    'proteins_100g' => 0.60,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Pastèque',
                    'proteins_100g' => 0.60,
                    'type' => 'Fruit'
                ],[
                    'name' => 'Pêche',
                    'proteins_100g' => 0.91,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Pêche au sirop',
                    'proteins_100g' => 0.45,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Poire',
                    'proteins_100g' => 0.38,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Poire au sirop',
                    'proteins_100g' => 0.20,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Pomme',
                    'proteins_100g' => 0.27,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Compote de pomme',
                    'proteins_100g' => 0.22,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Prune',
                    'proteins_100g' => 0.71,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Prune au sirop',
                    'proteins_100g' => 0.57,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Pruneau',
                    'proteins_100g' => 2.30,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Raisin',
                    'proteins_100g' => 0.71,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Raisins au sirop',
                    'proteins_100g' => 0.50,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Raisins secs',
                    'proteins_100g' => 2.46,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Reine Claude',
                    'proteins_100g' => 0.79,
                    'type' => 'Fruit'
                ],
                [
                    'name' => 'Jus ananas',
                    'proteins_100g' => 0.40,
                    'type' => 'Jus de fruits'
                ],
                [
                    'name' => 'Jus baies de sureau',
                    'proteins_100g' => 2.02,
                    'type' => 'Jus de fruits'
                ],
                [
                    'name' => 'Jus citron',
                    'proteins_100g' => 0.40,
                    'type' => 'Jus de fruits'
                ],
                [
                    'name' => 'Jus framboise frais',
                    'proteins_100g' => 0.31,
                    'type' => 'Jus de fruits'
                ],
                [
                    'name' => 'Jus mandarine',
                    'proteins_100g' => 0.90,
                    'type' => 'Jus de fruits'
                ],
                [
                    'name' => 'Jus orange frais',
                    'proteins_100g' => 0.72,
                    'type' => 'Jus de fruits'
                ],
                [
                    'name' => 'Jus orange commerce',
                    'proteins_100g' => 0.68,
                    'type' => 'Jus de fruits'
                ],
                [
                    'name' => 'Jus oranges concentrées',
                    'proteins_100g' => 2.38,
                    'type' => 'Jus de fruits'
                ],
                [
                    'name' => 'Jus pamplemousse',
                    'proteins_100g' => 0.55,
                    'type' => 'Jus de fruits'
                ],
                [
                    'name' => 'Jus pamplemousse com.',
                    'proteins_100g' => 0.53,
                    'type' => 'Jus de fruits'
                ],
                [
                    'name' => 'Jus pomme',
                    'proteins_100g' => 0.07,
                    'type' => 'Jus de fruits'
                ],
                [
                    'name' => 'Jus raisin',
                    'proteins_100g' => 0.21,
                    'type' => 'Jus de fruits'
                ],
                [
                    'name' => 'Jus de carottes',
                    'proteins_100g' => 0.63,
                    'type' => 'Jus de légumes'
                ],
                [
                    'name' => 'Jus tomates',
                    'proteins_100g' => 0.76,
                    'type' => 'Jus de légumes'
                ],
                [
                    'name' => 'Lait de vache',
                    'proteins_100g' => 3.33,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Crème fraiche',
                    'proteins_100g' => 2.31,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Chocolat au lait',
                    'proteins_100g' => 9.20,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Chocolat fondant',
                    'proteins_100g' => 5.30,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Confiture',
                    'proteins_100g' => 0.33,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Fufu',
                    'proteins_100g' => 1.57,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Gelée de fruits',
                    'proteins_100g' => 0.01,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Massepain',
                    'proteins_100g' => 8.00,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Miel',
                    'proteins_100g' => 0.38,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Sirop de Liège',
                    'proteins_100g' => 2.00,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Levure chimique',
                    'proteins_100g' => 0.20,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Levure de boulanger',
                    'proteins_100g' => 16.70,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Levure sèche',
                    'proteins_100g' => 47.90,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Moutarde',
                    'proteins_100g' => 5.90,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Mayonnaise',
                    'proteins_100g' => 1.49,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Ketchup',
                    'proteins_100g' => 1.00,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Pickels',
                    'proteins_100g' => 1.00,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Gelatine',
                    'proteins_100g' => 84.20,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Cube bouillon légumes',
                    'proteins_100g' => 0.50,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Cube bouillon poisson',
                    'proteins_100g' => 0.40,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Cube bouillon poule',
                    'proteins_100g' => 0.40,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Cube bouillon viande',
                    'proteins_100g' => 0.30,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Beurre',
                    'proteins_100g' => 0.67,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Margarine',
                    'proteins_100g' => 0.20,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Minarine',
                    'proteins_100g' => 1.60,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Saindoux',
                    'proteins_100g' => 0.01,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Corn flakes',
                    'proteins_100g' => 7.70,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Fécule de pommes de terre',
                    'proteins_100g' => 0.61,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Maïzena',
                    'proteins_100g' => 0.60,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Riz cru',
                    'proteins_100g' => 7.78,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Riz complet cru',
                    'proteins_100g' => 7.22,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Pain normal',
                    'proteins_100g' => 8.00,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Blé (Ebly)',
                    'proteins_100g' => 12.10,
                    'type' => 'Divers'
                ],
                [
                    'name' => 'Biscottes Aproten',
                    'proteins_100g' => 1.40,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Biscuits Aproten',
                    'proteins_100g' => 1.00,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Pâtes Aproten',
                    'proteins_100g' => 0.60,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Farine Noproten',
                    'proteins_100g' => 0.30,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Pain Aproten',
                    'proteins_100g' => 1.00,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Cracottes Aproten',
                    'proteins_100g' => 1.60,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Biscuits chocolat Aproten',
                    'proteins_100g' => 1.60,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Biscuits fruits Aproten',
                    'proteins_100g' => 1.00,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Gauffrette vanille Aproten',
                    'proteins_100g' => 1.00,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Chicchi Aproten',
                    'proteins_100g' => 1.00,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Biscuits caramel Harifen',
                    'proteins_100g' => 0.35,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Biscuits fourrés fraise Harifen',
                    'proteins_100g' => 0.30,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Galettes Harifen',
                    'proteins_100g' => 0.35,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Coockies cacao chips Harifen',
                    'proteins_100g' => 0.55,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Riz Harifen',
                    'proteins_100g' => 0.40,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Alphabets Harifen',
                    'proteins_100g' => 0.35,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Toast Harifen',
                    'proteins_100g' => 0.45,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Burger Taranis',
                    'proteins_100g' => 4.20,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Snackybillie Emmental Taranis',
                    'proteins_100g' => 0.15,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Crackers goût tomate Taranis',
                    'proteins_100g' => 0.80,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Crackers herbes provence Taranis',
                    'proteins_100g' => 0.80,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Petits pains Taranis',
                    'proteins_100g' => 0.70,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Biscottes Taranis',
                    'proteins_100g' => 1.00,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Pâtes Taranis',
                    'proteins_100g' => 0.40,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Couscous, semoule, spaguetti Taranis',
                    'proteins_100g' => 0.35,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Pâte à tartiner noisette Taranis',
                    'proteins_100g' => 0.50,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Cake (citron, abricot, poire) Taranis',
                    'proteins_100g' => 0.20,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Biscuits sablés Taranis',
                    'proteins_100g' => 0.50,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Cookies pépites de chocolat Taranis',
                    'proteins_100g' => 0.50,
                    'type' => 'Produits spéciaux'
                ],[
                    'name' => 'Bicuits pépites de chocolat Taranis',
                    'proteins_100g' => 0.50,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Dessert à boire Taranis',
                    'proteins_100g' => 1.90,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Choquito Taranis',
                    'proteins_100g' => 2.50,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Entremets vanille-choco Taranis',
                    'proteins_100g' => 1.80,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Cerecal plus fruits rouges Taranis',
                    'proteins_100g' => 0.20,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Cerecal plus vanille Taranis',
                    'proteins_100g' => 0.20,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Prépa pain pâtisserie Taranis',
                    'proteins_100g' => 0.30,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => "Substitut d'oeufs Taranis",
                    'proteins_100g' => 0.30,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Sauce fromage Taranis',
                    'proteins_100g' => 1.20,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Sauce provencale Taranis',
                    'proteins_100g' => 0.74,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Substitut fromage en tr Taranis',
                    'proteins_100g' => 0.20,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Dalia poudre Taranis',
                    'proteins_100g' => 2.00,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Dalia boisson Taranis',
                    'proteins_100g' => 0.20,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Ciabatta Proceli',
                    'proteins_100g' => 1.05,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Baguette médi Proceli',
                    'proteins_100g' => 1.10,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Baguette prêt à manger Proceli',
                    'proteins_100g' => 1.40,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Vienes panini Proceli',
                    'proteins_100g' => 1.30,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Croissants Proceli',
                    'proteins_100g' => 1.60,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Pains pour hamburger Proceli',
                    'proteins_100g' => 1.70,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Pâte précuite pizza Proceli',
                    'proteins_100g' => 0.40,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Pain pita Proceli',
                    'proteins_100g' => 0.30,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Prépa pâtisserie Valpi',
                    'proteins_100g' => 0.80,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Biscuits nappés choco Valpi',
                    'proteins_100g' => 2.40,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Potage instantané tomates Orgran',
                    'proteins_100g' => 0.50,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => 'Poudre crème anglaise Orgran',
                    'proteins_100g' => 0.50,
                    'type' => 'Produits spéciaux'
                ],
                [
                    'name' => "Substitut d'oeufs Orgran",
                    'proteins_100g' => 0.06,
                    'type' => 'Produits spéciaux'
                ]
            ]
        );
    }
}
