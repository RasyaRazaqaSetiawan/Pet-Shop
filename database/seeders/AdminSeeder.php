<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //akun untuk admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'is_admin' => 1,
        ]);

        //akun untuk user
        User::create([
            'name' => 'Rasya',
            'email' => 'rasya@gmail.com',
            'password' => Hash::make('12345678'),
            'is_admin' => 0,
        ]);
    }
}
