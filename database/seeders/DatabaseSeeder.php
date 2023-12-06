<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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

        // User::create([
        //     [
        //         'name' => 'Abraham',
        //         'email' => 'abraham@gmail.com',
        //         'password' => bcrypt('123456')
        //     ],
        //     [
        //         'name' => 'Damar',
        //         'email' => 'damar@gmail.com',
        //         'password' => bcrypt('123123')
        //     ],
        //     [
        //         'name' => 'Grahita',
        //         'email' => 'grahita@gmail.com',
        //         'password' => bcrypt('111111')
        //     ]
        // ]);

        $this->call([
            OrganizerSeeder::class,
            EventSeeder::class,
            EventDetailSeeder::class,
            TransactionSeeder::class,
            CategorySeeder::class
        ]);
    }
}
