<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Support\Str;
use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {


    $name = $faker->sentence();
    $slug = Str::slug($name);
    $slug_base = $slug;

    $post_if_exist = Post::where('slug' , $slug)->first();
    $j = 1;
    while ($post_if_exist) {
        $slug = $slug_base .'-'.$j;
        $j++;
        $post_if_exist = Post::where('slug' , $slug)->first();
    }
    return [
        'name'=> $name,
        'user_id'=> $faker->numberBetween(1 , 10),
        'description' => $faker->text(),
        'slug' => $slug,
        'price' => $faker->numberBetween(1 , 45),
    ];
});
