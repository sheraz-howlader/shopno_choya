<?php

namespace Database\Seeders;

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
            'password' => Hash::make('correct3!3'),
            'status' => true,
        ]);
    }
}
