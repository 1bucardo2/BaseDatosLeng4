<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Grado;
use Faker\Generator as Faker;

$factory->define(Grado::class, function (Faker $faker) {
    return [
        'docente_id'=>$faker->numberBetween(1,100),
        'nombre'=>$faker->name,
        'cant_alumn'=>$faker->numberBetween( 1,900),
        'num_aula'=>$faker->randomDigit
    ];
});
