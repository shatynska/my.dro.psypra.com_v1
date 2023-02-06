<?php

namespace Database\Seeders;

use App\Models\Contacts\Address;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::insert(
            [
                [
                    'title' => 'Лесі Українки, 26',
                    'locality_id' => '1',
                    'google_link' => 'https://goo.gl/maps/tG1bX9GpsJWLTbvE6',
                ],
                [
                    'title' => 'Пилипа Орлика, 42',
                    'locality_id' => '2',
                    'google_link' => 'https://goo.gl/maps/tG1bX9GpsJWLTbvE7',
                ],
            ]
        );
    }
}
