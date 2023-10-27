<?php

namespace Database\Seeders;

use App\Models\Work;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use Faker\Generator as Faker;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i < 10; $i++) {
            $work = new Work();
            $work->title = $faker->catchPhrase();
            $work->description = $faker->paragraph(3, true);
            $work->link = $faker->url();
            $work->slug = Str::slug($work->title);
            $work->save();
        }
    }
}
