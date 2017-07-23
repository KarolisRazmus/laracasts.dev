<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Task::class, function (Faker\Generator $faker) {
    return [
        'body' => $faker->text(rand(15,25)),
        'completed' => random_int(0, 1),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'body' => $faker->text(rand(70,90)),
        'title' => $faker->text(rand(20,30)),
    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    return [
        'post_id' => App\Post::find(random_int(0, 10)),
        'body' => $faker->text(rand(20,30)),
    ];
});