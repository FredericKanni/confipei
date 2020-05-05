<?php

use App\Confiture;
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
        factory(Confiture::class, 10)->create();
    }
}
