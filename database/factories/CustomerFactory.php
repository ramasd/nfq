<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'specialist_id' => factory('App\Specialist')->create()->id,
        'created_at' => Carbon::now()->addSeconds(rand(1,60))->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->addSeconds(rand(61,120))->format('Y-m-d H:i:s'),
    ];
});
