<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Event;
use App\Models\EventDetail;
use App\Models\User;
use App\Models\Organizer;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::factory(5)->create();
        // Organizer::factory(5)->create();
        // Event::factory(8)->create();
        // EventDetail::factory(20)->create();

        $this->call([
            OrganizerSeeder::class,
            EventSeeder::class,
            EventDetailSeeder::class,
            CategorySeeder::class
        ]);
    }
}
