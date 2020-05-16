<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\OrderDetail;
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

$factory->define(OrderDetail::class, function (Faker $faker) {
    $orderId = App\Models\Order::pluck('id')->toArray();
    $productId = App\Models\Product::pluck('id')->toArray();
    return [
        'name' => $faker->name,
        'price' => 100,
        'quantity' => 1,
        'order_id' => $faker->randomElement($orderId),
        'product_id' => $faker->randomElement($productId)
    ];
});
