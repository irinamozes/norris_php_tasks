<?php

use Illuminate\Database\Seeder;

class allgoodtable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<30;$i++) {
            $faker =\Faker\Factory::create();
            $good = new \App\Allgood();
            $good->goodname = $faker->name;
            $good->image = $faker->name;
            $good->price = $faker->numberBetween(3, 10);
            $good->description = $faker->realText;
            $good->category_id = rand(1,5);
            $good->save();
        }
    }
}
