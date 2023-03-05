<?php

namespace Database\Seeders;

use App\Models\Specialty;
use Illuminate\Database\Seeder;

class SpecialtySeeder extends Seeder
{
    public function run(): void
    {
        $specialties = ["психолог", "психотерапевт", "психіатр"];

        foreach ($specialties as $specialty) {
            Specialty::create(['title' => $specialty]);
        }
    }
}
