<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            [
                'title' => 'novel',
                'description' => 'an invented prose narrative of considerable length and a certain complexity that deals imaginatively with human experience'
            ],
            [
                'title' => 'science',
                'description' => ' the pursuit and application of knowledge and understanding of the natural and social world following a systematic methodology based on evidence'
            ],
            [
                'title' => 'book',
                'description' => 'book'
            ]
        ]);
    }
}
