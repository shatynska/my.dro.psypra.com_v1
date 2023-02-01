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
        $types = ['телефон', 'email', 'вебсайт', 'адреса'];

        foreach ($types as $type) {
            ContactType::create(
                ['title' => $type]
            );
        }
    }
}
