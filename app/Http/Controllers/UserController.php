<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\user;
use App\Services\FileHandlerService;
use App\Services\MailSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    use MailSender;
    use FileHandlerService;

    public function index()
    {
        abort_if(Gate::none(['user::list']), Response::HTTP_FORBIDDEN);

        $users = User::paginate(10);
        return view('backend.users.index',compact('users'));
    }

    public function create()
    {
        abort_if(Gate::none(['user::create']), Response::HTTP_FORBIDDEN);

        $roles = Role::all();
        return view('backend.users.form',compact('roles'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show(user $user)
    {
        //
    }

    public function edit(user $user)
    {
        abort_if(Gate::none(['user::edit']), Response::HTTP_FORBIDDEN);

        abort_if(auth()->user()->role_id !== 1 && $user->role_id === 1, Response::HTTP_FORBIDDEN);

        $roles = Role::roles();
        return view('backend.users.edit',compact('roles','user'));
    }

    public function update(Request $request, user $user)
    {
        abort_if(Gate::none(['user::edit']), Response::HTTP_FORBIDDEN);

        $request->validate([
            'name'      => 'required|string',
            'email'     => 'required|string',
            'password'  => 'confirmed',
            'role_id'   => 'required'
        ]);

        $image = $this->handleFile($request->profile_pic, 'backend/images/users/', $user->profile_photo_path);

        $user->update([
            'name'      => $request->name,
            'email'     => $request->email,
            'phone_no'  => $request->phone_number,
            'status'    => $request->status,
            'role_id'   => $request->role_id,
            'profile_photo_path'   => $image,
        ]);

        return redirect()->route('users.index');
    }


    public function destroy(user $user)
    {
        abort_if(Gate::none(['user::destroy']), Response::HTTP_FORBIDDEN);

        if ($user->profile_photo_path && file_exists(public_path($user->profile_photo_path))) {
            unlink(public_path($user->profile_photo_path));
        }

        $user->delete();
        return redirect()->route('users.index');
    }
}
