<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Alfonso Carrasco',
            'email' => 'dev@alfonsoCarrasco.com',
            'password' => Hash::make('Hiring Me!!'),
            'about' => "Hi, I’m Alfonso Carrasco, Fullstack developer",
        ]);
    }
}
