<?php

namespace Database\Seeders;

use App\Models\Quantity;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuantitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $quantities = ["індивідуальна", "парна", "сімейна", "групова"];

        foreach ($quantities as $quantity) {
            Quantity::create(['title' => $quantity]);
        }
    }
}
