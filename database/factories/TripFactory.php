<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Car;
use App\Models\Trip;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Trip::class, function (Faker $faker) {

    $user_id=User::inRandomOrder()->first()->id;
   

    return [
        'user_id' => $user_id,  
        'start_trip_milleage' => $faker->randomNumber(4),
        'start_trip_fuel_guage' => $faker->numberBetween(0,5),
        'start_trip_time' => $faker->dateTime,
        'start_trip_gps_coordinates_long' => $faker->longitude,
        'start_trip_gps_coordinates_lat' => $faker->latitude,
        'passenger_name' => $faker->name,
        'end_trip_milleage' => $faker->randomNumber(4),
        'end_trip_fuel_guage' => $faker->numberBetween(0,5),
        'end_trip_time' => $faker->dateTime,
        'end_trip_gps_coordinates_long' => $faker->longitude,
        'end_trip_gps_coordinates_lat' => $faker->latitude,
	'toll_balance' => $faker->randomNumber,
        'remarks' => $faker->word,
    ];
});
