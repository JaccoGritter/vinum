<?php

use Illuminate\Database\Seeder;

class WinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wines = [
            [
                'id' => 1,
                'brand' => 'Lindemans',
                'name' => 'Bin 65',
                'variety' => 'Wit',
                'grapes' => 'Chardonnay',
                'country' => 'Zuid-Afrika',
                'alcperc' => 12.4,
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.',
                'units' => 12,
                'price' => 8.75,
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'brand' => 'Lindemans',
                'name' => 'Cabernet Merlot',
                'variety' => 'Rood',
                'grapes' => 'Cabernet Merlot',
                'country' => 'Zuid-Afrika',
                'alcperc' => 13.5,
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.',
                'units' => 10,
                'price' => 7.85,
                'created_at' => new DateTime,
                'updated_at' => null,
                
            ],
            [
                'id' => 3,
                'brand' => 'Lindemans',
                'name' => 'Bin 85',
                'variety' => 'Wit',
                'grapes' => 'Pinot Grigio',
                'country' => 'Zuid-Afrika',
                'alcperc' => 13.0,
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.',
                'units' => 22,
                'price' => 6.50,
                'created_at' => new DateTime,
                'updated_at' => null,
                
            ],
            [
                'id' => 4,
                'brand' => 'Lindemans',
                'name' => 'Western Cape Rosé',
                'variety' => 'Rosé',
                'grapes' => 'Pinotage',
                'country' => 'Zuid-Afrika',
                'alcperc' => 12.7,
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.',
                'units' => 31,
                'price' => 4.99,
                'created_at' => new DateTime,
                'updated_at' => null,
               
            ],
            [
                'id' => 5,
                'brand' => 'Monkey Business',
                'name' => 'Yummy',
                'variety' => 'Rood',
                'grapes' => 'Shiraz',
                'country' => 'Australië',
                'alcperc' => 13.5,
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.',
                'units' => 10,
                'price' => 6.45,
                'created_at' => new DateTime,
                'updated_at' => null,
                
            ],
            [
                'id' => 6,
                'brand' => 'Torres',
                'name' => 'Natureo',
                'variety' => 'Rood',
                'grapes' => 'Merlot',
                'country' => 'Spanje',
                'alcperc' => 12.5,
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.',
                'units' => 10,
                'price' => 4.95,
                'created_at' => new DateTime,
                'updated_at' => null,
                
            ],
            [
                'id' => 7,
                'brand' => 'Les Dauphins',
                'name' => 'Cote du Rhone',
                'variety' => 'Rood',
                'grapes' => 'Grenach',
                'country' => 'Frankrijk',
                'alcperc' => 13.5,
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.',
                'units' => 10,
                'price' => 6.45,
                'created_at' => new DateTime,
                'updated_at' => null,
                
            ],
            [
                'id' => 8,
                'brand' => 'Ogio',
                'name' => 'Pinot Grigio',
                'variety' => 'Wit',
                'grapes' => 'Pinot Grigio',
                'country' => 'Italië',
                'alcperc' => 12.5,
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.',
                'units' => 10,
                'price' => 9.95,
                'created_at' => new DateTime,
                'updated_at' => null,
                
            ],
            [
                'id' => 9,
                'brand' => 'Oveja Negra',
                'name' => 'Chardonnay Viognier',
                'variety' => 'Wit',
                'grapes' => 'Chardonnay Viognier',
                'country' => 'Chili',
                'alcperc' => 12.2,
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.',
                'units' => 10,
                'price' => 3.95,
                'created_at' => new DateTime,
                'updated_at' => null,
                
            ],
            [
                'id' => 10,
                'brand' => 'Slurp',
                'name' => 'Rosé',
                'variety' => 'Rosé',
                'grapes' => 'Grenache',
                'country' => 'Frankrijk',
                'alcperc' => 11,
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.',
                'units' => 10,
                'price' => 6.85,
                'created_at' => new DateTime,
                'updated_at' => null,
                
            ],
            [
                'id' => 11,
                'brand' => 'Miss Piggy',
                'name' => 'Pink & Fresh',
                'variety' => 'Rosé',
                'grapes' => 'Grenache',
                'country' => 'Australië',
                'alcperc' => 10.7,
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.',
                'units' => 10,
                'price' => 4.75,
                'created_at' => new DateTime,
                'updated_at' => null,
                
            ]
        ];

        DB::table('wines')->insert($wines);
 
    }
}
