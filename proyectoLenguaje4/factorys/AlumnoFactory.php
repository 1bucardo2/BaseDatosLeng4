<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Alumno;
use Faker\Generator as Faker;

$factory->define(Alumno::class, function (Faker $faker) {
    return [
        'grado_id'=>$faker->numberBetween(1,100),
        'nombre'=>$faker->firstName,
        'apellido'=>$faker->lastName,
        'genero'=>$faker->randomElement(['M','F']),
        'correo_elect'=>$faker->email,
    ];
});
