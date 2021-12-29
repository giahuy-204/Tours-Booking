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
        $this->call(TypeToursSeeder::class);
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
                    'description' => $faker -> paragraph($nbSentences = 3, $variableNbSentences = true),
                    'price'=> $faker -> numberBetween($min = 1000000, $max = 5000000),       
                    'id_type' => $faker -> numberBetween($min = 1, $max = 4),
                ],
            ]);
        }
    }
}
