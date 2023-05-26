<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            AboutSeeder::class,
            GuidelineSeeder::class,
            ServiceSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'testing@testing.com',
            'password' => bcrypt('testing'),
            // 'isAdmin' => true,
        ]);
    }
}
