<?php

namespace Database\Seeders;

use App\Models\Comic;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++) {
            $newComic = new Comic();
            $newComic->title = $faker->sentence(3);
            $newComic->description = $faker->paragraphs(3, true);
            $newComic->path_img = "https://picsum.photos/id/" . $faker->numberBetween(1, 700) . "/540/960";
            $newComic->price = $faker->randomFloat(3, 0.99, 999.99);
            $newComic->sale_date = $faker->dateTime('january 1, 2018');
            $newComic->save();
        }
    }
}
