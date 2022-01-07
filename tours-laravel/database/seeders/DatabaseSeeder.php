<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(TypeToursSeeder::class);
        $this->call(ToursSeeder::class);
    }
}

class TypeToursSeeder extends Seeder {
    public function run()
    {
        $faker = Faker::create();
        DB::table('type_tours')-> insert([
            [
                'id' => 1,
                'name' => 'Hoi An',
                'description' => 'tour to Hoi An',
                'image' => $faker -> imageUrl($width = 400, $height = 600),
            ],
            [
                'id' => 2,
                'name' => 'Hue',
                'description' => 'tour to Hue',
                'image' => $faker -> imageUrl($width = 400, $height = 600),
            ],
            [
                'id' => 3,
                'name' => 'Da Nang',
                'description' => 'tour to Da Nang',
                'image' => $faker -> imageUrl($width = 400, $height = 600),
            ],
            [
                'id' => 4,
                'name' => 'Combo',
                'description' => 'combo tour',
                'image' => $faker -> imageUrl($width = 400, $height = 600),
            ],
        ]);
    }
}

class ToursSeeder extends Seeder {
    public function run()
    {
        $faker = Faker::create();

        $limit = 20;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('tours')-> insert([
                [
                    'image' => $faker -> imageUrl($width = 400, $height = 600),
                    'name' => $faker -> unique() -> word,
                    'short_description' => $faker -> sentence($nbWords = 6, $variableNbWords = true),
                    'date_start' => $faker -> date($format = 'Y-m-d', $max = 'now'),
                    'number_days' => $faker -> numberBetween($min = 7, $max = 14), 
                    'seats' => $faker -> numberBetween($min = 10, $max = 15), 
                    'adult_price' => $faker -> numberBetween($min = 1000, $max = 2000), 
                    'children_price' => $faker -> numberBetween($min = 500, $max = 100), 
                    'youngchildren_price' => $faker -> numberBetween($min = 200, $max = 500), 
                    'long_description' => $faker -> paragraph($nbSentences = 3, $variableNbSentences = true),      
                    'id_type' => $faker -> numberBetween($min = 1, $max = 4),
                ],
            ]);
        }
    }
}
