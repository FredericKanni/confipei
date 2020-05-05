<?php

use App\Recompense;
use Illuminate\Database\Seeder;

class RecompenseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Recompense::class, 10)->create();
    }
}
