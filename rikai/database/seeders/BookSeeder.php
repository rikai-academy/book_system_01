<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book')->insert([
            [
                'title' => 'Harry Potter',
                'publish_at' => '1999-07-08',
                'author' => 'JK Rolling',
                'image' => 'https://picsum.photos/200',
                'num_of_page' => 100,
                'quantity' => 10,
                'status' => 1,
                'price' => 10,
            ],
            [
                'title' => 'The Wandering Inn',
                'publish_at' => '2018-01-05',
                'author' => 'Reir',
                'image' => 'https://picsum.photos/200',
                'num_of_page' => 200,
                'quantity' => 13,
                'status' => 1,
                'price' => 12,
            ],
            [
                'title' => 'You dont know JS',
                'publish_at' => '2020-07-08',
                'author' => 'GitHub',
                'image' => 'https://picsum.photos/200',
                'num_of_page' => 35,
                'quantity' => 22,
                'status' => 1,
                'price' => 5,
            ],
            [
                'title' => 'Dagon',
                'publish_at' => '2021-07-08',
                'author' => 'John',
                'image' => 'https://picsum.photos/200',
                'num_of_page' => 200,
                'quantity' => 10,
                'status' => 1,
                'price' => 17,
            ],
            [
                'title' => 'BookA',
                'publish_at' => '2018-11-10',
                'author' => 'A',
                'image' => 'https://picsum.photos/200',
                'num_of_page' => 123,
                'quantity' => 12,
                'status' => 1,
                'price' => 23,
            ]
        ]);
    }
}
