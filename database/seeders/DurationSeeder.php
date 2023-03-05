<?php

namespace Database\Seeders;

use App\Models\Duration;
use Illuminate\Database\Seeder;

class DurationSeeder extends Seeder
{
    public function run(): void
    {
        $durations = ["разові консультації", "короткотривала психотерапія", "середньотривала психотерапія", "довготривала психотерапія"];

        foreach ($durations as $duration) {
            Duration::create(['title' => $duration]);
        }
    }
}
