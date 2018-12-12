<?php

use Illuminate\Database\Seeder;

class cancerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	$data = ['pulmon','estomago','piel'];

    	foreach ($data as $key => $value) {
    		 DB::table('cancer')->insert(
    		 	[
    		 		'tipo' => $value,
    		 	]);
    	}

    }
}
