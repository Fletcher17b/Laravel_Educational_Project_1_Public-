<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Database\Factories\ListingsFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\User::factory(1)->create();
        /*
        Listing::create([
            'id' => '01',
            'title' => 'test',
            'tags' => 'tag 1 and 2',
            'company' => 'company name',
            'location' => 'adress 1',
            'email' => 'email 1',
            'website' => 'url',
            'description' => 'lorem'

        ]);*/

        Listing::factory(15)->create();
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
