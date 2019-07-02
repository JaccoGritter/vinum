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
                'brand' => 'Lindemans',
                'name' => 'Bin 65',
                'variety' => 'Wit',
                'grapes' => 'Chardonnay',
                'country' => 'South Africa',
                'alcperc' => 12.4,
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.',
                'units' => 12,
                'price' => 8.75,
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'brand' => 'Lindemans',
                'name' => 'Cabernet Merlot',
                'variety' => 'Rood',
                'grapes' => 'Cabernet Merlot',
                'country' => 'South Africa',
                'alcperc' => 13.5,
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.',
                'units' => 10,
                'price' => 7.85,
                'created_at' => new DateTime,
                'updated_at' => null,
                
            ],
            [
                'brand' => 'Lindemans',
                'name' => 'Bin 85',
                'variety' => 'Wit',
                'grapes' => 'Pinot Grigio',
                'country' => 'South Africa',
                'alcperc' => 13.0,
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.',
                'units' => 22,
                'price' => 6.50,
                'created_at' => new DateTime,
                'updated_at' => null,
                
            ],
            [
                'brand' => 'Lindemans',
                'name' => 'Western Cape Rosé',
                'variety' => 'Rosé',
                'grapes' => 'Pinotage',
                'country' => 'South Africa',
                'alcperc' => 12.7,
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.',
                'units' => 31,
                'price' => 4.99,
                'created_at' => new DateTime,
                'updated_at' => null,
               
            ]
        ];

        DB::table('wines')->insert($wines);
 
    }
}
