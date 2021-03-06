<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->delete();

    	$users = [
    		'name'			=> 'Профимак Админ',
    		'email'			=> 'profimak@ecommerce.com',
    		'password'		=> '$2y$10$5jbrTNbrdtbcPZyTEK4xju42J/.C3qHlX9gXOje1rsZQihrRMALUG', // Encrypted password is: profimak@admin
    		'salutation'	=> 'Mr.',
    		'first_name'	=> 'Admin',
    		'last_name'		=> 'Ecommerce',
    		'birthday'		=> \Carbon\Carbon::now()->toDateString(),
    		'gender'		=> 1,
    		'active'		=> 1,
    	];

    	DB::table('users')->insert($users);
    }
}
