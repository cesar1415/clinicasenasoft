<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name'      => 'Cesar',
            'email'     => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'remember_token' => Str::random(10),
        ]);
//         App\User::create([
//             'name'      => 'Secretary',
//             'email'     => 'secretary@gmail.com',
//             'email_verified_at' => now(),
//             'password' => Hash::make('123456789'),
//             'remember_token' => Str::random(10),
//         ]);
        App\User::create([
            'name'      => 'Camila',
            'email'     => 'enfermera@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'remember_token' => Str::random(10),
        ]);
         App\User::create([
             'name'      => 'Stiven',
             'email'     => 'patient@gmail.com',
             'email_verified_at' => now(),
             'password' => Hash::make('123456789'),
             'remember_token' => Str::random(10),
         ]);
    }
}
