<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(RolesTableSeeder::class);
        //role en premier car role doit exister d abaord si on veut les attacher aux utilisateurs 
        $this->call(UsersTableSeeder::class);

        $this->call(FruitTableSeeder::class);

        $this->call(ProducteurTableSeeder::class);

        $this->call(RecompenseTableSeeder::class);

        $this->call(ConfitureTableSeeder::class);
    }
}
