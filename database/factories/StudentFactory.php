<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Student;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        //
        'fname' => $faker->firstName,
        'lname' => $faker->lastName,
        'address' => $faker->address,
        'course' => $faker->text
    ];
});
