<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\PermissionModule;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        // Dashboard
        $dashboardModule = PermissionModule::updateOrCreate([
            'name' => "Admin Dashboard"
        ]);

        Permission::updateOrCreate([
            'module_id' => $dashboardModule->id,
            'name' => 'Access Dashboard',
            'action' => 'dashboard',
        ]);

        // Role Management
        $roleModule = PermissionModule::updateOrCreate([
            'name' => "Role Management"
        ]);

        Permission::updateOrCreate([
            'module_id' => $roleModule->id,
            'name' => 'Role List',
            'action' => 'role::list',
        ]);

        Permission::updateOrCreate([
            'module_id' => $roleModule->id,
            'name' => 'Role Create',
            'action' => 'role::create',
        ]);

        Permission::updateOrCreate([
            'module_id' => $roleModule->id,
            'name' => 'Role Edit',
            'action' => 'role::edit',
        ]);

        Permission::updateOrCreate([
            'module_id' => $roleModule->id,
            'name' => 'Role Delete',
            'action' => 'role::destroy',
        ]);

        // User Management
        $userModule = PermissionModule::updateOrCreate([
            'name' => "Member Management"
        ]);

        Permission::updateOrCreate([
            'module_id' => $userModule->id,
            'name' => 'Member List',
            'action' => 'user::list',
        ]);

        Permission::updateOrCreate([
            'module_id' => $userModule->id,
            'name' => 'Member Create',
            'action' => 'user::create',
        ]);

        Permission::updateOrCreate([
            'module_id' => $userModule->id,
            'name' => 'Member Edit',
            'action' => 'user::edit',
        ]);

        Permission::updateOrCreate([
            'module_id' => $userModule->id,
            'name' => 'Member Delete',
            'action' => 'user::destroy',
        ]);

        Permission::updateOrCreate([
            'module_id' => $userModule->id,
            'name' => 'Member Accept',
            'action' => 'user::user-accept',
        ]);

        // Deposit Management
        $userModule = PermissionModule::updateOrCreate([
            'name' => "Deposit Management"
        ]);

        Permission::updateOrCreate([
            'module_id' => $userModule->id,
            'name' => 'Deposit List',
            'action' => 'deposit::list',
        ]);

        Permission::updateOrCreate([
            'module_id' => $userModule->id,
            'name' => 'Deposit Create',
            'action' => 'deposit::create',
        ]);

        Permission::updateOrCreate([
            'module_id' => $userModule->id,
            'name' => 'Deposit Edit',
            'action' => 'deposit::edit',
        ]);

        Permission::updateOrCreate([
            'module_id' => $userModule->id,
            'name' => 'Deposit Delete',
            'action' => 'deposit::destroy',
        ]);

        // Adjustment Management
        $userModule = PermissionModule::updateOrCreate([
            'name' => "Adjustment Management"
        ]);

        Permission::updateOrCreate([
            'module_id' => $userModule->id,
            'name' => 'Adjustment List',
            'action' => 'adjustment::list',
        ]);

        Permission::updateOrCreate([
            'module_id' => $userModule->id,
            'name' => 'Adjustment Create',
            'action' => 'adjustment::create',
        ]);

        Permission::updateOrCreate([
            'module_id' => $userModule->id,
            'name' => 'Adjustment Edit',
            'action' => 'adjustment::edit',
        ]);

        Permission::updateOrCreate([
            'module_id' => $userModule->id,
            'name' => 'Adjustment Delete',
            'action' => 'adjustment::destroy',
        ]);
    }
}
