<?php

namespace Database\Seeders;

use App\Models\Academy;
use App\Models\Argument;
use App\Models\ArgumentCategory;
use App\Models\Personil;
use App\Models\Tutor;
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
        Academy::factory(1)->create();
        ArgumentCategory::factory(1)->create();
        Argument::factory(1)->create();
        Tutor::factory(1)->create();
        Personil::factory(1)->create();

        $this->call([
            AboutSeeder::class,
            GuidelineSeeder::class,
            ServiceSeeder::class,
        ]);

        User::insert([
            [
                'name' => 'Test User',
                'email' => 'testing@testing.com',
                'password' => bcrypt('testing'),
                'isAdmin' => true,
                'email_verified_at' => now(),
            ],
            [
                'name' => 'adptra01',
                'email' => 'm.a.syaputra.94@gmail.com',
                'password' => bcrypt('Ad1 putra'),
                'isAdmin' => true,
                'email_verified_at' => now(),
            ]
        ]);
        
    }
}
