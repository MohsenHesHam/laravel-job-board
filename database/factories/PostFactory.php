<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;
class PostFactory extends Factory
{
    protected $model=Post::class;

    public function definition(): array
    {
        return [
            'id'=>Str::uuid()->toString(),
            'title'=>$this->faker->title,
            'body'=>$this->faker->paragraph(3,true),
            'published'=>$this->faker->boolean,
            'auther'=>$this->faker->name

        ];
    }
}
