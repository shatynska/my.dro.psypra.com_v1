<?php

namespace Database\Seeders;

use App\Models\Age;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ages = ["3+", "6+", "12+", "18+", "30+", "60+"];

        foreach ($ages as $age) {
            Age::create(['title' => $age]);
        }
    }
}
