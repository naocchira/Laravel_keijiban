<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => 'タイトル',
        'body' => "本文　～～～～～～～～～～～～～～～～～～～～～～～～～～",
    ];
});
