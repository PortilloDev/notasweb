<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'category_id' => 1,
            'name' => 'Jacinto Ruiz',
            'slug' => Str::slug('Jacinto Ruiz'),
            'excerpt' => "Un texto cualquiera",
            'body' => "Un texto cualquiera, en el body",
            'status' => 1,
        ];
    }
}
