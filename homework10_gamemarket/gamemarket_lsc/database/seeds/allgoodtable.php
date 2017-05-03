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
            $good->price = $faker->word;
            $good->category_id = rand(1,10);
            $good->save();
        }
    }
}
