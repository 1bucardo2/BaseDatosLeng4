<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Docente;
use Faker\Generator as Faker;

$factory->define(Docente::class, function (Faker $faker) {
    return [
        'grado_id'=>$faker->numberBetween(1,100),
        'nombre'=>$faker->firstName,
        'apellido'=>$faker->lastName,
        'genero'=>$faker->randomElement(['M','F']),
        'num_telef'=>$faker->phoneNumber,
        'pais'=>$faker->country,
        'correo_elect'=>$faker->email,

    ];
});
