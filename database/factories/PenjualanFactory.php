<?php

namespace Database\Factories;

use App\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Penjualan::class, function (Faker $faker) {
    return [
        // 'user_id' => function() {
        //     return factory(App\Penjualan::class)->create()->id;
        // },
        'idKaryawan' => function() {
            return factory(App\Karyawan::class)->create()->id;
        },
    ];
});
