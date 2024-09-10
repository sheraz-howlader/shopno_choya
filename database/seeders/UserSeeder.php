<?php

namespace Database\Seeders;

use App\Models\Mess;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'role_id' => 1,
            'name' => 'Sheraz Howlader',
            'email' => 'mdsherazhowlader@gmail.com',
            'phone_no' => '01728692643',
            'password' => Bcrypt('2147483647'),
            'status' => true,
        ]);
    }
}
