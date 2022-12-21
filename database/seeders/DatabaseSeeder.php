<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Age;
use App\Models\Day;
use App\Models\City;
use App\Models\Hour;
use App\Models\Place;
use App\Models\Price;
use App\Models\Query;
use App\Models\Contact;
use App\Models\Program;
use App\Models\Duration;
use App\Models\Quantity;
use App\Models\Direction;
use App\Models\Specialty;
use App\Models\Specialist;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Specialist::create(
            [
                'name' => 'Альона',
                'last_name' => 'Шатинська',
            ]
        );

        Specialist::create(
            [
                'name' => 'Ольга',
                'last_name' => 'Петришин',
            ]
        );

        $specialties = ["психолог", "психотерапевт", "психіатр"];

        foreach ($specialties as $specialty) {
            Specialty::create(['title' => $specialty]);
        }


        $quantities = ["індивідуальна", "парна", "сімейна", "групова"];

        foreach ($quantities as $quantity) {
            Quantity::create(['title' => $quantity]);
        }


        $ages = ["3+", "6+", "12+", "18+", "30+", "60+"];

        foreach ($ages as $age) {
            Age::create(['title' => $age]);
        }


        $queries = ["депресія", "стреси", "конфлікти", "самооцінка", "страхи", "головні болі", "втрата", "підлітки"];

        foreach ($queries as $query) {
            Query::create(['title' => $query]);
        }


        $directions = ["гештальт-терапія", "психоаналітична", "клієнт-центрована", "позитивна", "ЕМДР", "системно-сімейна"];

        foreach ($directions as $direction) {
            Direction::create(['title' => $direction]);
        }


        $durations = ["разові консультації", "короткотривала психотерапія", "середньотривала психотерапія", "довготривала психотерапія"];

        foreach ($durations as $duration) {
            Duration::create(['title' => $duration]);
        }

        foreach (Specialist::all() as $specialist) {
            foreach (Duration::all() as $duration) {
                $specialist->durations()->attach($duration->id);
            }
        }


        $cities = ["Дрогобич", "Трускавець", "Борислав", "on-line"];

        foreach ($cities as $city) {
            City::create(['title' => $city]);
        }


        $places = ["Лесі Українки 26", "Пилипа Орлика 42", "Сагайдачного 142/1", "Дрогобицька 48"];

        foreach ($places as $place) {
            Place::create(['title' => $place]);
        }


        $programs = ["телефон", "e-mail", "сайт", "Viber", "WhatApp", "Messenger", "Telegram", "Zoom", "Skype", "GoogleMeet"];

        foreach ($programs as $program) {
            Program::create(['title' => $program]);
        }


        $contacts = ["+380978976847", "shatynska@gmail.com", "+380673492432", "shatynska.in.ua"];

        foreach ($contacts as $contact) {
            Contact::create(['title' => $contact, 'specialist_id' => '1', 'program_id' => '1']);
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




        $helen = Specialist::find('1');
        $olga = Specialist::find('2');

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

        $helen->directions()->attach('1');
        $olga->directions()->attach('1');
    }
}
