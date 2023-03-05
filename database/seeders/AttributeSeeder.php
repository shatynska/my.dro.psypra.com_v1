<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    public function run(): void
    {
        Attribute::insert(
            [
                [
                    'title' => 'спеціальності',
                    'database' => 'specialties',
                    'is_extendable' => '1',
                    'is_main_attribute' => '1',
                ],
                [
                    'title' => 'фахівці',
                    'database' => 'specialists',
                    'is_extendable' => '0',
                    'is_main_attribute' => '0',

                ],
                [
                    'title' => 'форми роботи',
                    'database' => 'quantities',
                    'is_extendable' => '1',
                    'is_main_attribute' => '1',
                ],
                [
                    'title' => 'вікові групи',
                    'database' => 'ages',
                    'is_extendable' => '1',
                    'is_main_attribute' => '1',
                ],
                [
                    'title' => 'тривалість',
                    'database' => 'durations',
                    'is_extendable' => '1',
                    'is_main_attribute' => '1',
                ],
                [
                    'title' => 'напрямки терапії',
                    'database' => 'directions',
                    'is_extendable' => '1',
                    'is_main_attribute' => '1',
                ],
                [
                    'title' => 'вартість',
                    'database' => 'prices',
                    'is_extendable' => '0',
                    'is_main_attribute' => '0',
                ],
                [
                    'title' => 'запити',
                    'database' => 'queries',
                    'is_extendable' => '1',
                    'is_main_attribute' => '0',
                ],
                [
                    'title' => 'місця',
                    'database' => 'places',
                    'is_extendable' => '0',
                    'is_main_attribute' => '0',
                ],
                [
                    'title' => 'години',
                    'database' => 'hours',
                    'is_extendable' => '0',
                    'is_main_attribute' => '0',
                ],
                [
                    'title' => 'контакти',
                    'database' => 'contacts',
                    'is_extendable' => '0',
                    'is_main_attribute' => '0',
                ],
            ]
        );
    }
}
