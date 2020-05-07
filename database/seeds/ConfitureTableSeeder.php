<?php

use App\Confiture;
use App\Fruit;
use App\Recompense;
use Illuminate\Database\Seeder;

class ConfitureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Confiture::class, 10)->create() 
        ->each(function ($confiture) {
            $randomRecompence = Recompense::all()->random();
            $randomFruit = Fruit::all()->random();
            $confiture->recompenses()->attach($randomRecompence);
            $confiture->fruits()->attach($randomFruit);
        });
    }
}
