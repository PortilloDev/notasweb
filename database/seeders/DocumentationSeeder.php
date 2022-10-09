<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('documentations')->insert([
            [
                'id'=> '1',
                'title'=> 'Slim',
                'slug'=> 'slim',
                'description'=> 'Documentación Slim',
                'url'=> 'https://www.slimframework.com/',
                'image'=> 'public/descarga.png',
            ],
            [
                'id'=> '2',
                'title'=> 'Laravel',
                'slug'=> 'laravel',
                'description'=> 'Documentación Laravel',
                'url'=> 'https://laravel.com/docs/9.x',
                'image'=> 'public/laravel_documentación.png',
            ],
        ]);
    }
}
