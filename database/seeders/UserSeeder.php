<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create regular users using the factory
        User::factory(5)->create();

        // Create an admin user
        User::create([
            'role' => 'admin',
            'name' => \Faker\Factory::create()->name,
            'phone' => \Faker\Factory::create()->unique()->phoneNumber,
            'email' => 'admin@example.com', // Replace with your desired admin email
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
        ]);
    }
}
