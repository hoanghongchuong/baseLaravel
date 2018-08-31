<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('admins')->insert([
			'name' => 'Super Admin',
			'username' => 'admin',
			'email' => 'admin@gmail.com',
			'password' => Hash::make('12345678'),
			'active' => 1,
    	]);
    }
}
