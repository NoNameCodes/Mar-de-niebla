<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'admin' => true,
            'aproved_at' => now(),
        ]);

        User::factory()->create([
            'name' => 'User',
            'email' => 'u@u',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'aproved_at' => now(),
        ]);

        User::factory()->create([
            'name' => 'Factoría F5',
            'email' => 'f@f',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'aproved_at' => now(),
        ]);

        User::factory()->create([
            'name' => 'Mar de Niebla',
            'email' => 'm@m',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'aproved_at' => now(),
        ]);

        User::factory()->create([
            'name' => 'Abierto hasta el amanecer',
            'email' => 'a@a',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'aproved_at' => now(),
        ]);
    }
}
