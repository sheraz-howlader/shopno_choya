<?php

namespace App\Http\Controllers;

use App\Models\PermissionModule;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class RoleController extends Controller
{
    public function index()
    {
        abort_if(Gate::none(['role::list']), Response::HTTP_FORBIDDEN);

        $roles = Role::withCount('permissions')->roles(); // roles() is a scope
        return view('backend.roles.index', compact('roles'));
    }

    public function create()
    {
        abort_if(Gate::none(['role::create']), Response::HTTP_FORBIDDEN);

        $modules = PermissionModule::all();
        return view('backend.roles.create', compact('modules'));
    }

    public function show(Role $role)
    {
    }

    public function store(Request $request)
    {
        abort_if(Gate::none(['role::create']), Response::HTTP_FORBIDDEN);

        $role = Role::create([
            'name' => $request->role_name,
            'slug' => Str::slug($request->role_name),
        ]);

        $role->permissions()->sync($request->permissions);
        return redirect()->route('roles.index')->with('success', 'Role create & permission sync successfully.');
    }

    function edit(Role $role)
    {
        abort_if(Gate::none(['role::edit']), Response::HTTP_FORBIDDEN);

        $modules = PermissionModule::all();
        return view('backend.roles.edit', compact('role', 'modules'));
    }

    public function update(Request $request, Role $role)
    {
        abort_if(Gate::none(['role::edit']), Response::HTTP_FORBIDDEN);

        $role->permissions()->sync($request->permissions);
        return back()->with('success', 'Role permission sync successfully.');
    }

    public function destroy(Role $role)
    {
        abort_if(Gate::none(['role::destroy']), Response::HTTP_FORBIDDEN);

        $role->delete();
        return redirect()->back()->with('success', 'Role delete & permission remove successfully.');
    }
}
