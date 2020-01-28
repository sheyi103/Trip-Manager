<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Car;
use App\Models\Incident_Report;
use Faker\Generator as Faker;

$factory->define(Incident_Report::class, function (Faker $faker) {

   
    $car_id= Car::inRandomOrder()->first()->id;
    return [
        'car_id' => $car_id,    
        'remarks' => $faker->sentence(6),
        'incident_image_path_1' => $faker->imageUrl,
        
    ];
});
