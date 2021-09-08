<?php

namespace Database\Seeders;

use Activity;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // UserSeeder::class,
            BookSeeder::class,
            CategorySeeder::class,
            BookCategorySeeder::class,
            ActivityTypeSeeder::class,
            PermissionSeeder::class,
        ]);
    }
}
