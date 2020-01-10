<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Driver-Log;
use Faker\Generator as Faker;

$factory->define(Driver-Log::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'journey_to' => $faker->word,
        'journey_from' => $faker->word,
        'initial_kilometer' => $faker->randomDigitNotNull,
        'final_kilometer' => $faker->randomDigitNotNull,
        'total_kilometer_covered' => $faker->randomDigitNotNull,
        'petrol_position' => $faker->word,
        'petrol_purchases' => $faker->word,
        'oil_purchases' => $faker->word,
        'officers_remarks_and_initials' => $faker->word,
        'status' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
