<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */

use App\Bar;
use Faker\Generator as Faker;
use App\Campus;
use App\Snack;
use App\Menu;
use App\Buzon;


$factory->define(Bar::class, function (Faker $faker) {
    return [
        'campus_id' => $faker->optional()->randomDigit,
        'nombre' => $faker->text,
        'abierto' => $faker->boolean,
        //campus BelongsTo Campus campus_id
        //snack HasMany Snack id
        //menu HasMany Menu id
        //buzon HasMany Buzon id
    ];
});
