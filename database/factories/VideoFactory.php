<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Institution;
use App\User;
use App\Video;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'short_content' => $faker->paragraph,
        'institution_id' => $faker->randomElement(Institution::all()->pluck('id')->toArray()),
        'user_id' => User::first()->id,
    ];
});
