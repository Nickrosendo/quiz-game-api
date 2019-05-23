<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Leaderboard;
use Faker\Generator as Faker;

$factory->define(Leaderboard::class, function (Faker $faker) {
    return [
        'wins'
    ];
});
