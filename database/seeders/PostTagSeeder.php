<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_tag')->insert([
            [
                'id' => 1,
                'post_id'=> 1,
                'tag_id'=> 1,
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id' => 2,
                'post_id'=> 1,
                'tag_id'=> 2,
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id' => 3,
                'post_id'=> 1,
                'tag_id'=> 3,
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id' => 4,
                'post_id'=> 1,
                'tag_id'=> 5,
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id' => 5,
                'post_id'=> 2,
                'tag_id'=> 5,
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id' => 6,
                'post_id'=> 2,
                'tag_id'=> 10,
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id' => 7,
                'post_id'=> 3,
                'tag_id'=> 11,
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id' => 8,
                'post_id'=> 3,
                'tag_id'=> 20,
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id' => 9,
                'post_id'=> 3,
                'tag_id'=> 14,
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'id' => 10,
                'post_id'=> 3,
                'tag_id'=> 1,
                'updated_at' => date("Y-m-d H:i:s"), 
                'created_at' => date("Y-m-d H:i:s")
            ],
            
        ]);
    }
}
