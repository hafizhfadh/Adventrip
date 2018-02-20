<?php

use Faker\Generator as Faker;

$factory->define(App\Station::class, function (Faker $faker) {
  DB::table('stations')->delete();
    return [
        'nama_st' => $faker->name,
        'alamat_st' => $faker->address,
        'tlp_st' => $faker->phoneNumber,
        'keterangan' => $faker->realText,
    ];
});
