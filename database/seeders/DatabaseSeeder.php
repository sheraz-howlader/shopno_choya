<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'role_id' => 1,
            'name' => 'Sheraz Howlader',
            'email' => 'mdsherazhowlader@gmail.com',
            'phone_no' => '01728692643',
            'password' => Bcrypt('Pa$$w0rd!'),
            'status' => true,
        ]);

        User::create([
            'role_id' => 1,
            'name' => 'Tanvir Rahman',
            'email' => 'tanvir@gmail.com',
            'phone_no' => '01745465465',
            'password' => Bcrypt('Pa$$w0rd!'),
            'status' => true,
        ]);
    }
}
