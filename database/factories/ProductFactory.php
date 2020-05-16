<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Product;
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

$factory->define(Product::class, function (Faker $faker) {
    $ID = App\Models\Brand::pluck('id')->toArray();
    return [
        'name' => $faker->name,
        'desc' => $faker->name,
        'price' => 100,
        'brand_id' => $faker->randomElement($ID)
    ];
});
