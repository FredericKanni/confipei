<?php

use App\Producteur;
use Illuminate\Database\Seeder;

class ProducteurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Producteur::class, 10)->create();
    }
}
