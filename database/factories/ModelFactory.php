<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'role' => 'Contractor',
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Contractor::class, function (Faker\Generator $faker) {
    $score1 = $faker->numberBetween($min=1, $max=10);
    $score2 = $faker->numberBetween($min=1, $max=10);
    $score3 = $faker->numberBetween($min=1, $max=10);
    return [
        // Personal information
        'title' => 'software '.$faker->word.$faker->randomLetter.' '.$faker->randomDigit,
        'city' => $faker->city,
        'state' => $faker->stateAbbr,
        'postcode' => $faker->postcode,
        'country' => 'US',
        'photo' => $faker->imageUrl($width = 640, $height = 480, 'nature'),
        'tel' => $faker->phoneNumber,
        'looking' => $faker->boolean($chanceOfGettingTrue = 80),

        // Work/skills related

        // Internal use
        'skill1' => $faker->randomSkill,
        'skill2' => $faker->randomSkill,
        'skill3' => $faker->randomSkill,
        'score1' => $score1,
        'score2' => $score2,
        'score3' => $score3,
        'has_score' => true,
        'general_score' => ($score1 + $score2 + $score3) / 3
    ];
});