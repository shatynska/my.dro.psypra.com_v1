<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Day;
use App\Models\City;
use App\Models\Hour;
use App\Models\User;
use App\Models\Place;
use App\Models\Price;
use App\Models\Program;
use App\Models\Specialist;
use Illuminate\Support\Str;
use Database\Seeders\AgeSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\QuerySeeder;
use Database\Seeders\NavLinkSeeder;
use Database\Seeders\DurationSeeder;
use Database\Seeders\QuantitySeeder;
use Database\Seeders\AttributeSeeder;
use Database\Seeders\DirectionSeeder;
use Database\Seeders\SpecialtySeeder;
use Database\Seeders\ContactTypeSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Helen',
            'email' => 'test@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Olya',
            'email' => 'olya@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        Specialist::create(
            [
                'user_id' => '1',
                'name' => 'Олена',
                'last_name' => 'Шатинська',
            ]
        );

        Specialist::create(
            [
                'user_id' => '2',
                'name' => 'Оля',
                'last_name' => 'Петришин',
            ]
        );

        $this->call([
            AgeSeeder::class,
            AttributeSeeder::class,
            DirectionSeeder::class,
            DurationSeeder::class,
            SpecialtySeeder::class,
            NavLinkSeeder::class,
            ContactTypeSeeder::class,
            QuantitySeeder::class,
            QuerySeeder::class,
        ]);

        $cities = ["Дрогобич", "Трускавець", "Борислав", "on-line"];

        foreach ($cities as $city) {
            City::create(['title' => $city]);
        }


        $places = ["Лесі Українки 26", "Пилипа Орлика 42", "Сагайдачного 142/1", "Дрогобицька 48"];

        foreach ($places as $place) {
            Place::create(['title' => $place]);
        }


        $programs = ["Viber", "WhatApp", "Messenger", "Telegram", "Zoom", "Skype", "GoogleMeet"];

        foreach ($programs as $program) {
            Program::create(['title' => $program]);
        }


        $prices = ["0", "100", "200", "300", "400", "500", "600", "700", "800", "900", "1000"];

        foreach ($prices as $price) {
            Price::create(['title' => $price]);
        }

        $days = ["понеділок", "вівторок", "середа", "четвер", "п`ятниця", "субота", "неділя"];

        foreach ($days as $day) {
            Day::create(['title' => $day]);
        }

        $hours = ["06", "07", "08", "09", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24"];

        foreach ($hours as $hour) {
            Hour::create(['title' => $hour, 'day_id' => '1']);
        }



        $helen = Specialist::withoutGlobalScope('user')->find('1');
        $olga = Specialist::withoutGlobalScope('user')->find('2');

        $helen->specialties()->attach('1');
        $helen->specialties()->attach('2');
        $olga->specialties()->attach('2');

        $helen->quantities()->attach('1');
        $helen->quantities()->attach('2');
        $helen->quantities()->attach('3');
        $helen->quantities()->attach('4');
        $olga->quantities()->attach('1');
        $olga->quantities()->attach('4');

        $helen->ages()->attach('4');
        $helen->ages()->attach('5');
        $olga->ages()->attach('3');
        $olga->ages()->attach('4');
        $olga->ages()->attach('5');

        $helen->durations()->attach('1');
        $helen->durations()->attach('2');
        $helen->durations()->attach('3');
        $helen->durations()->attach('4');
        $olga->durations()->attach('1');
        $olga->durations()->attach('2');
        $olga->durations()->attach('3');
        $olga->durations()->attach('4');

        $helen->directions()->attach('1');
        $olga->directions()->attach('1');
    }
}
