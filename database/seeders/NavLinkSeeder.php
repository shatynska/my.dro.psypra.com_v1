<?php

namespace Database\Seeders;

use App\Models\NavLink;
use Illuminate\Database\Seeder;

class NavLinkSeeder extends Seeder
{
    public function run(): void
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
