<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Shops;
use Faker\Generator as Faker;

$factory->define(Shops::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'user_id' => function () 
                    {
                        return App\User::inRandomOrder()->first()->id;
                    }
    ];
});
