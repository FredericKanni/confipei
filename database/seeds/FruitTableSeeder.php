<?php

use App\Fruit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FruitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('fruit')->insert([
        //     'name' => Str::random(10),
            
        // ]);


        factory(Fruit::class, 10)->create();
    }
}
