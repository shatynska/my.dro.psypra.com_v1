<?php

namespace Database\Seeders;

use App\Models\ContactType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactType::create(
            [
                'title' => 'телефон',
                'database' => 'phone_numbers',
            ]
        );

        ContactType::create(
            [
                'title' => 'e-mail',
                'database' => 'emails',
            ]
        );

        ContactType::create(
            [
                'title' => 'вебсайт',
                'database' => 'websites',
            ]
        );
    }
}
