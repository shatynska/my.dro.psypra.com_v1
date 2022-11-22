<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Listing;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        
        Listing::create([
            'title' => 'LAravel Senior Developer',
            'tags' => 'laravel, javascript',
            'company' => 'Acme Corp',
            'location' => 'Boston, MA',
            'email' => 'email@email.com',
            'website' => 'https://www.acme.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum repellendus consequuntur, obcaecati tempore repudiandae placeat consectetur fuga praesentium blanditiis ut!'
        ]);

        Listing::create([
            'title' => 'Full-Stack Engineer',
            'tags' => 'laravel, backend, api',
            'company' => 'Get a Nifty Website',
            'location' => 'Drohobych, Ukrain',
            'email' => 'email@getaniftywebsite',
            'website' => 'https://getaniftywebsite',
            'description' => 'Dolor sit amet consectetur adipisicing elit. Rerum repellendus consequuntur, obcaecati tempore repudiandae placeat consectetur fuga praesentium.'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
