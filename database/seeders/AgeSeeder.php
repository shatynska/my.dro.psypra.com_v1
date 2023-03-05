<?php

namespace Database\Seeders;

use App\Models\Age;
use Illuminate\Database\Seeder;

class AgeSeeder extends Seeder
{
    public function run(): void
    {
        $ages = ["3+", "6+", "12+", "18+", "30+", "60+"];

        foreach ($ages as $age) {
            Age::create(['title' => $age]);
        }
    }
}
