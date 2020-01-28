<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Models\Car;
use App\Models\Maintainance;
use App\Models\Workshop;
use Faker\Generator as Faker;

$factory->define(Maintainance::class, function (Faker $faker) {
    $car_id= Car::inRandomOrder()->first()->id;

    return [
        'car_id' => $car_id,
        'workshop_id'=> $faker->numberBetween(1,3),
        'milleage' => $faker->randomNumber(4),
        'maintainance_cost' => $faker->numberBetween(200,10000),
        'maintainance_gps_coordinates_long' => $faker->longitude,
        'maintainance_gps_coordinates_lat' => $faker->latitude
    ];
});
