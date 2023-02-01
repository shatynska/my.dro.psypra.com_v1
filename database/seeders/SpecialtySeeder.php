<?php

namespace Database\Seeders;

use App\Models\Specialty;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $specialties = ["психолог", "психотерапевт", "психіатр"];

        foreach ($specialties as $specialty) {
            Specialty::create(['title' => $specialty]);
        }
    }
}
