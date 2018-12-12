<?php

use Illuminate\Database\Seeder;

class ciudadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {

    	$data = ['Valencia','Caracas','Trujillo'];

    	foreach ($data as $key => $value) {
    		 DB::table('ciudad')->insert(
    		 	[
    		 		'nombre' => $value,
    		 	]);
    	}
        
    }
}
