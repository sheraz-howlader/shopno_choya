<?php

namespace Database\Seeders;

use App\Models\Mess;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id' => 1,
            'name' => 'Sheraz Howlader',
            'email' => 'mdsherazhowlader@gmail.com',
            'phone_no' => '01728692643',
            'password' => Bcrypt('Pa$$w0rd!'),
            'status' => true,
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Tanvir Rahman',
            'email' => 'tanvir@gmail.com',
            'phone_no' => '01745465465',
            'password' => Bcrypt('Pa$$w0rd!'),
            'status' => true,
        ]);

        User::create([
            'role_id' => 3,
            'name' => 'Nayem',
            'email' => 'nayem@gmail.com',
            'phone_no' => '01745465448',
            'password' => Bcrypt('Pa$$w0rd!'),
            'status' => true,
        ]);
    }
}
