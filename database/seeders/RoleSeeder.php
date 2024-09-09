<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $all_permission = Permission::all();

        Role::updateOrCreate([
            'name' => 'Developer',
            'slug' => 'developer',
            'deletable' => false,
        ])->permissions()->sync($all_permission->pluck('id'));

        Role::updateOrCreate([
            'name' => 'Admin',
            'slug' => 'admin',
            'deletable' => false,
        ]);

        Role::updateOrCreate([
            'name' => 'Cashier',
            'slug' => 'cashier',
        ]);

        Role::updateOrCreate([
            'name' => 'Member',
            'slug' => 'member',
        ]);
    }
}
