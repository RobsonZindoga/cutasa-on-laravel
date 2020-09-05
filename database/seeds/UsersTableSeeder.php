<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'id' => 1,
            'name' => 'Admin Admin',
            'email' => 'admin@cutasa.com',
            'email_verified_at' => now(),
            'password' => Hash::make('pass1234'),
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}