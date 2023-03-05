<?php

namespace Database\Seeders;

use App\Models\Quantity;
use Illuminate\Database\Seeder;

class QuantitySeeder extends Seeder
{
    public function run(): void
    {
        $quantities = ["індивідуальна", "парна", "сімейна", "групова"];

        foreach ($quantities as $quantity) {
            Quantity::create(['title' => $quantity]);
        }
    }
}
