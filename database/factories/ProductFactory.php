<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'description'=>$faker->sentence(3,true),
        'price'=>$faker->numberBetween(10,1000),

    ];
});
