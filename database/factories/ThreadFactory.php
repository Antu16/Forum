<?php
use App\User;
use App\Thread;
use Faker\Generator as Faker;

$factory->define(App\Thread::class, function(Faker $faker){
    return [
        'user_id' => function () {
            return factory('App\User')->create()->id;
        },
        'title' => $faker->title,
        'body' => $faker->paragraph
    ];
});

