<?php

namespace Database\Seeders;

use App\Models\NavLink;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NavLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NavLink::insert(
            [
                [
                    'title' => 'Головне',
                    'route' => 'main',
                    'ordering' => '1',
                ],
                [
                    'title' => 'Фото',
                    'route' => 'photos',
                    'ordering' => '2',
                ],
                [
                    'title' => 'Контакти',
                    'route' => 'contacts',
                    'ordering' => '3',
                ],
                [
                    'title' => 'Освіта',
                    'route' => 'education',
                    'ordering' => '4',
                ],
                [
                    'title' => 'Теми',
                    'route' => 'queries',
                    'ordering' => '5',
                ],
                [
                    'title' => 'Мій підхід',
                    'route' => 'method',
                    'ordering' => '6',
                ],
                [
                    'title' => 'Розклад',
                    'route' => 'schedule',
                    'ordering' => '7',
                ],
                [
                    'title' => 'Про себе',
                    'route' => 'about',
                    'ordering' => '8',
                ],
                [
                    'title' => 'Публікації',
                    'route' => 'posts',
                    'ordering' => '9',
                ],
            ]
        );
    }
}
