<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Car;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;




$factory->define(User::class, function (Faker $faker) {

    $passwordHash = Hash::make('secret');
    $rememberToken =Str::random(10);
    $car_id= Car::inRandomOrder()->first()->id;


    return [
        'name' => $faker->name,
        'role_id' => $faker->numberBetween(1,3),
        'car_id' =>$car_id,
        'email' => $faker->unique()->safeEmail,
        'profile_image_path' => $faker->imageUrl,
        'password' => $passwordHash,
        'remember_token' => $rememberToken,
       
    ];
});

