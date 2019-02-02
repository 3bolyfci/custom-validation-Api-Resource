<?php

use Faker\Generator as Faker;

$factory->define(App\Model\PodCast::class, function (Faker $faker) {
    $sen=$faker->sentence;
    return [
        'title' => $sen,
        'slug' => str_slug($sen),
        'description' =>$faker->realText(120),
        'file_mp3' => $faker->url,
        'file_ogg' => $faker->url,
    ];
});
