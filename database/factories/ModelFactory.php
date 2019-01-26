<?php
use Faker\Generator as Faker;


$factory->define(App\Post::class, function (Faker $faker) {

    $user = \App\User::inRandomOrder()->first();

    return [
        'user_id' => $user->id,
        'title' => $faker->sentence,
        'body' => $faker->text,
    ];
});