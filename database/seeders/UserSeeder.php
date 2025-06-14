<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin@admin.com'), // ganti password sesuai kebutuhan
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Penulis',
            'email' => 'penulis@penulis.com',
            'password' => Hash::make('penulis@penulis.com'),
            'role' => 'penulis',
        ]);

        User::create([
            'name' => 'Pembaca',
            'email' => 'pembaca@pembaca.com',
            'password' => Hash::make('pembaca@pembaca.com'),
            'role' => 'pembaca',
        ]);
    }
}
