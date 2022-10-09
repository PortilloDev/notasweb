<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'id'   => 1, 
                'slug' => "php",
                'name' => "PHP",
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id'   => 2, 
                'slug' => "javascript",
                'name' => "Javascript",
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id'   => 3, 
                'slug' => "css",
                'name' => "Css",
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id'   => 4, 
                'slug' => "tailwindcss",
                'name' => "TailwindCss",
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id'   => 5, 
                'slug' => "bases-de-datos",
                'name' => "Bases de datos",
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id'   => 6, 
                'slug' => "framework",
                'name' => "Framework",
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id'   => 7, 
                'slug' => "windows",
                'name' => "Windows",
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id'   => 8, 
                'slug' => "elasticsearch",
                'name' => "Elasticsearch",
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id'   => 9, 
                'slug' => "nodejs",
                'name' => "Node.js",
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id'   => 10, 
                'slug' => "mysql",
                'name' => "MySql",
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id'   => 11, 
                'slug' => "slim",
                'name' => "Slim",
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id'   => 12, 
                'slug' => "laravel",
                'name' => "Laravel",
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id'   => 13, 
                'slug' => "backend",
                'name' => "Backend",
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id'   => 14, 
                'slug' => "api-rest",
                'name' => "API Rest",
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id'   => 15, 
                'slug' => "frontend",
                'name' => "Frontend",
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id'   => 16, 
                'slug' => "patrones-de-diseno",
                'name' => "Patrones de diseño",
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id'   => 17, 
                'slug' => "programacion",
                'name' => "Programación",
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id'   => 18, 
                'slug' => "java",
                'name' => "Java",
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id'   => 19, 
                'slug' => "desafios",
                'name' => "Desafíos",
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id'   => 20, 
                'slug' => "symfony",
                'name' => "Symfony",
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id'   => 21, 
                'slug' => "c#",
                'name' => "C#",
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],

        ]);
    }
}
