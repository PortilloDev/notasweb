<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'id' => 1,
                'imageable_id' => 1,
                'imageable_type' => 'App/Model/User',
                'url' => 'public/blog/profile.jpg',
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id' => 2,
                'imageable_id' => 1,
                'imageable_type' => 'App/Model/Post',
                'url' => 'public/articleocw-5865402b2882d.jpg',
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id' => 3,
                'imageable_id' => 2,
                'imageable_type' => 'App/Model/Post',
                'url' => 'public/descarga.png',
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id' => 4,
                'imageable_id' => 3,
                'imageable_type' => 'App/Model/Post',
                'url' => 'public/descarga.png',
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id' => 5,
                'imageable_id' => 1,
                'imageable_type' => 'App/Model/Documentation',
                'url' => 'public/descarga.png',
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id' => 6,
                'imageable_id' => 2,
                'imageable_type' => 'App/Model/Documentation',
                'url' => 'public/laravel_documentación.png',
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
        ]);
    }
}
