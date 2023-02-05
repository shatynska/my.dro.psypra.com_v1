<?php

namespace Database\Seeders;

use App\Models\Duration;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $durations = ["разові консультації", "короткотривала психотерапія", "середньотривала психотерапія", "довготривала психотерапія"];

        foreach ($durations as $duration) {
            Duration::create(['title' => $duration]);
        }

    }
}
