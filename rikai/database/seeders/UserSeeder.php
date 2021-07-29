<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            'name' => 'test1',
            'email' => 'test1@gmail.com',
            'image' => 'https://picsum.photos/200',
            'password' => Hash::make('123456789'),
        ],[
            'name' => 'test2',
            'email' => 'test2@gmail.com',
            'image' => 'https://picsum.photos/200',
            'password' => Hash::make('123456789'),
        ]]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'image' => 'https://picsum.photos/200',
            'password' => Hash::make('123456789'),
            'role' => 'admin'
        ]);
    }
}
