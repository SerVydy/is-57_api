<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'login' => 'admin',
            'email' => 'admin@prof.ru',
            'password' => 1111,
            'is_admin' => true
        ]);

        User::factory(10)->create();
    }
}
