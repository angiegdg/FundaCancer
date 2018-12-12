<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class userAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name'     => 'Admin',
        	'email'    => 'admin@admin.com',
        	'rol'      => 'Admin',
        	'password' => bcrypt('1234567'),
            'ciudad_id' => '0'
        ]);
    }
}