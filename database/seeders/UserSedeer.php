<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //ini hanya menampilkan data fake saja
        User::factory(5)->create();

        User::create([

            'name' => 'muhamad',
            'email' => 'muhamad@gmail.com',
            'email_verified_at' => now(),
            'role' => 'admin',
            'password' => Hash::make('123456'),
        ]);
        User::create([

            'name' => 'superuser',
            'email' => 'superuser@gmail.com',
            'email_verified_at' => now(),
            'role' => 'superadmin',
            'password' => Hash::make('123456'),
        ]);
    }
}
