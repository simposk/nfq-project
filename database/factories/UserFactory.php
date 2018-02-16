<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Order::class, function (Faker $faker) {
    $colors = ["Auksinė", "Kosmine pilka", "Rausvojo aukso", "Sidabrinė"];
    $batteries = [32, 128];

    $color = $colors[rand(0, 3)];
    $battery = $batteries[rand(0, 1)];
    $quantity = rand(1, 15);

    if($battery == 32) 
    {
        $price = 359;
    } else {
        $price = 469;
    }

    $total = $price * $quantity;

    return [
        'quantity' => $quantity,
        'color' => $color,
        'battery' => $battery,
        'price' => $total,
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'email' => $faker->email,
        'city' => $faker->city,
        'address' => $faker->streetName,        
        'postalcode' => $faker->postcode,
        'phonenumber' => $faker->phoneNumber,
        'created_at' => $faker->date()
    ];
});