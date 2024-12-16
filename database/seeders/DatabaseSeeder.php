<?php

namespace Database\Seeders;

use App\Models\Talk;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Conference;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()
        ->has(Talk::factory()->count(5))
        ->create([
            'name' => 'Alex Bean',
            'email' => 'mralexbean@gmail.com',
        ]);

        Conference::factory()->count(5)->create();
    }
}
