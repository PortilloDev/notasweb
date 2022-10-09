<?php

namespace Database\Seeders;

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
            UserSeeder::class,
            ImagesSeeder::class,
            TagSeeder::class,
            CategorySeeder::class,
            PostSeeder::class,
            PostTagSeeder::class,
            DocumentationSeeder::class,
        ]);
    }
}
