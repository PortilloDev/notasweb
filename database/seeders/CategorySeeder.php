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
        DB::table('categories')->insert([
            [
                'id'   => 1, 
                'slug' => "documentacion",
                'name' => "Documentación",
                'body' => "Documentación" ,
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id'   => 2, 
                'slug' => "manuales",
                'name' => "Manuales",
                'body' => "Manuales" ,
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id'   => 3, 
                'slug' => "cursos",
                'name' => "Cursos",
                'body' => "Cursos" ,
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id'   => 4, 
                'slug' => "tutoriales",
                'name' => "Tutoriales",
                'body' => "Tutoriales" ,
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id'   => 5, 
                'slug' => "articulos",
                'name' => "Artículos",
                'body' => "Artículos" ,
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
        ]);
    }
}
