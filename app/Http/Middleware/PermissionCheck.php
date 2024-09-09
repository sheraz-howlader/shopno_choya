<?php

namespace App\Http\Middleware;

use App\Models\Permission;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class PermissionCheck
{
    public function handle(Request $request, Closure $next): Response
    {
        $permissions = Permission::all();
        foreach ($permissions as $permission) {
            Gate::define($permission->action, function ($user) use ($permission) {
                return $user->role->permissions()->pluck('action')->contains($permission->action);
            });
        }

        return $next($request);
    }
}
