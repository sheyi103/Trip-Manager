<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Car;
use App\Models\Fuel_Purchase;
use Faker\Generator as Faker;

$factory->define(Fuel_Purchase::class, function (Faker $faker) {

     $car_id= Car::inRandomOrder()->first()->id;
    return [
        'car_id' => $car_id, 
        'milleage' => $faker->randomNumber(4),
        'cost' => $faker->numberBetween(200,10000),
        'fuel_guage_before'=>$faker->numberBetween(0,5),
        'fuel_guage_after'=>$faker->numberBetween(0,5),
        'filling_station_gps_coordinates_long' => $faker->longitude,
        'filling_station_gps_coordinates_lat' => $faker->latitude,
       
    ];
});
