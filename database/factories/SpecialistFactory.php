<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Specialist;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Specialist::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'counter' => $faker->unique()->numberBetween($min = 1, $max =20),
        'created_at' => Carbon::now()->addSeconds(rand(1,60))->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->addSeconds(rand(61,120))->format('Y-m-d H:i:s'),
    ];
});
