<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name('male'),
        'email' => $faker->email,
        'phone_number' => $faker->phoneNumber,
        'password' => bcrypt('secret'),
        'email_verified_at' => Carbon::now(),
    ];
});
