<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),  // My First Post 
        'slug' => \Str::slug($faker->sentence()), // my-first-post 
        'body' => $faker->paragraph(10), 
    ];
});
