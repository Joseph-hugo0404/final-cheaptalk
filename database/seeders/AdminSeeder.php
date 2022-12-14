<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'                  => 'Joseph Hugo',
            'email'                 => 'admin@admin.com',
            'gender'                => 'Male',
            'email_verified_at'     =>  now(),
            'password' => bcrypt('password123'), // password
            'remember_token' => Str::random(10),
        ])->assignRole('writer', 'admin');

        $users = [
        [
            'name' => 'Ramboo Kog',
            'email' => 'Joseph@gmail.com',
            'gender' => 'Female',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ],

        [
            'name' => 'Sample Name',
            'email' => 'sample@gmail.com',
            'gender' => 'Female',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ],
    ];
    foreach($users as $user) {
        User::create($user)
        ->assignRole('user');
    }
    }
}
