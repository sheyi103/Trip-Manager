<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    
    return [
        
        'make' => $faker->randomElement(['Toyota','Honda','Kia']),
        'model' => $faker->year,
	'plate_number'=>$faker->randomNumber,
        'car_image' => $faker->imageUrl,
        'status' => $faker->numberBetween(0,1),
    ];
});