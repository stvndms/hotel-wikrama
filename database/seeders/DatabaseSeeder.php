<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'email' => 'fadhiilabiyyitamsil@gmail.com',
            'password' => Hash::make('password'),
            'role'=> 'guest'
        ]);

        User::create([
            'email' => 'fadhiilreceptionist@gmail.com',
            'password' => Hash::make('password-receptionist'),
            'role'=> 'receptionist'
        ]);

        User::create([
            'email' => 'fadhiiladmin@gmail.com',
            'password' => Hash::make('password-admin'),
            'role'=> 'admin'
        ]);

        User::create([
            'email' => 'fadhiilsuperadmin@gmail.com',
            'password' => Hash::make('password-superadmin'),
            'role'=> 'superadmin'
        ]);
    }
}
