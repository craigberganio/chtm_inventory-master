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
        DB::table('users')->insert([
        	'username'=>Str::random(10),
        	'first_name'=>Str::random(10),
        	'middle_initial'=>Str::random(1),
        	'last_name' => Str::random(10),
        	'password'=> bcrypt('admin')
        ]);

        DB::table('users')->insert([
        	'username'=>Str::random(10),
        	'first_name'=>Str::random(10),
        	'middle_initial'=>Str::random(1),
        	'last_name' => Str::random(10),
        	'password'=> bcrypt('admin')
        ]);

		DB::table('users')->insert([
        	'username'=>Str::random(10),
        	'first_name'=>Str::random(10),
        	'middle_initial'=>Str::random(1),
        	'last_name' => Str::random(10),
        	'password'=> bcrypt('admin')
        ]);

    }
}
