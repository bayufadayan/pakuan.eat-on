<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use \App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'email' => 'admin@eat-on.com',
            'username' => 'admin01',
            'role' => 'ADMIN',
            'password' => bcrypt('@admin01'),
            'confirmpassword' => bcrypt('@admin01'),
        ]);

        User::create([
            'email' => 'operator@eat-on.com',
            'username' => 'admin02',
            'role' => 'ADMIN',
            'password' => bcrypt('@admin02'),
            'confirmpassword' => bcrypt('@admin02'),
        ]);

        User::create([
            'email' => 'bayufadayan@gmail.com',
            'username' => 'bayufadayan',
            'role' => 'USER',
            'password' => bcrypt('12345'),
            'confirmpassword' => bcrypt('12345'),
        ]);

    }
}
