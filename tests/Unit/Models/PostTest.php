<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{

    public function test_belongs_to_user()
    {
        $posts = Post::all();
        $post = Post::factory()->create();
        $current_posts = Post::all();
        
        $this->assertInstanceOf(User::class, $post->user);
        $this->assertEquals(($posts->count() + 1), $current_posts->count());
    }
}
