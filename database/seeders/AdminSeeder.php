<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'bethe', 
            'email' => 'bethe@gmail.com',
            'password' => Hash::make('bethe1234')
        ]);
        $admin ->assignRole('admin');

        // Creating Admin User
        $userr = User::create([
            'name' => 'bee', 
            'email' => 'bee@gmail.com',
            'password' => Hash::make('bee12345')
        ]);
        $userr->assignRole('userr');
    }
}
