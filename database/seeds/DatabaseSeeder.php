<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(userAdminSeeder::class);
         $this->call(ciudadesSeeder::class);
         $this->call(cancerSeeder::class);
    }
}
