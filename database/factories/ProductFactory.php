<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'ProductName' => $name = $faker->sentence,
        'ctype' => ['red', 'blue','green'],
        'stype' => ['xl', 'sm'],
        'PriceRange' => str_pricerange($name),
        'date' => str_date($name), 
    ];
});
