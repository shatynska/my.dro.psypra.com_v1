<?php

namespace Database\Seeders;

use App\Models\Query;
use Illuminate\Database\Seeder;

class QuerySeeder extends Seeder
{
    public function run(): void
    {
        $queries = ["депресія", "стреси", "конфлікти", "самооцінка", "страхи", "головні болі", "втрата", "підлітки"];

        foreach ($queries as $query) {
            Query::create(['title' => $query]);
        }
    }
}
