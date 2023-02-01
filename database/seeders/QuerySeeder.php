<?php

namespace Database\Seeders;

use App\Models\Query;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $queries = ["депресія", "стреси", "конфлікти", "самооцінка", "страхи", "головні болі", "втрата", "підлітки"];

        foreach ($queries as $query) {
            Query::create(['title' => $query]);
        }
    }
}
