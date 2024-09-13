<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\user;
use App\Services\FileHandlerService;
use App\Services\MailSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    use MailSender;
    use FileHandlerService;

    public function index()
    {
        abort_if(Gate::none(['user::list']), Response::HTTP_FORBIDDEN);

        $search   = request()->get('search');
        $filters  = request()->get('filter');

        $users = User::query()->with('role')
            ->when(isset($search), function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orwhere('email', 'like', '%' . $search . '%')
                    ->orwhere('phone_no', 'like', '%' . $search . '%');
            })
            ->when(isset($filters['status']), function ($query) use ($filters) {
                $query->where('status', $filters['status']);
            })
            ->orderBy('name')
            ->paginate(10)
            ->withQueryString();

        return view('backend.users.index',compact('users', 'search', 'filters'));
    }

    public function create()
    {
        //
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
        abort_if(Gate::none(['user::update']), Response::HTTP_FORBIDDEN);

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
            'password'   => $request->pass ? Hash::make($request->pass): $user->password,
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

    public function updateProfile()
    {
        return view('backend.users.update-profile');
    }

    public function acceptUser($id)
    {
        abort_if(!request()->ajax(), Response::HTTP_FORBIDDEN);
        abort_if(Gate::none(['user::user-accept']), Response::HTTP_FORBIDDEN);

        $user = User::findOrFail($id);
        $user->update([
            'status' => 1
        ]);

        $data = [
            'subject'   => 'Your account has been activated',
            'template'  => 'emails.user_approved',
            'name'      => $user->name,
            'approve_by'=> auth()->user()->name,
            'mail_to'   => $user->email,
        ];

        $this->emailSend($data);

        return response()->json(['status' => 'success', 'message' => 'Member has been approved successfully.']);
    }
}
