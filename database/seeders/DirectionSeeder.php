<?php

namespace Database\Seeders;

use App\Models\Direction;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DirectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $directions = ["гештальт-терапія", "психоаналітична", "клієнт-центрована", "позитивна", "ЕМДР", "системно-сімейна"];

        foreach ($directions as $direction) {
            Direction::create(['title' => $direction]);
        }
    }
}
