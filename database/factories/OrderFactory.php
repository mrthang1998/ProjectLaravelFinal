<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Order;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Order::class, function (Faker $faker) {
    $ID = App\Models\Customer::pluck('id')->toArray();
    return [
        'customers_id' => $faker->randomElement($ID)
    ];
});
