<?php

namespace Database\Seeders;

use App\Models\Contacts\ContactType;
use Illuminate\Database\Seeder;

class ContactTypeSeeder extends Seeder
{
    public function run(): void
    {
        ContactType::create(
            [
                'title' => 'телефон',
                'database' => 'phone_numbers',
                'details' => 'формат: 89078976847',
            ]
        );

        ContactType::create(
            [
                'title' => 'e-mail',
                'database' => 'emails',
                'details' => 'формат: mail@example.com',

            ]
        );

        ContactType::create(
            [
                'title' => 'вебсайт',
                'database' => 'websites',
                'details' => 'формат: 89078976847',

            ]
        );

        ContactType::create(
            [
                'title' => 'адреса',
                'database' => 'addresses',
                'details' => 'формат: Дрогобич, вул. Лесі Українки 36',

            ]
        );

        ContactType::create(
            [
                'title' => 'online',
                'database' => 'online_contacts',
                'details' => 'формат: Viber',

            ]
        );
    }
}
