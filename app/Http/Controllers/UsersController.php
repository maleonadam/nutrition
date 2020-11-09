<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;

class UsersController extends Controller
{
    public function getAllUsers()
    {
        // $users = User::get();
        $users = User::paginate(2);

        return view('admin.users.view', compact('users'));
    }

    public function getAssignRole($user_id)
    {
        $user = User::whereId($user_id)->first();

        return view('admin.users.assign', compact('user'));
    }

    public function getRemoveRole($user_id)
    {
        $user = User::whereId($user_id)->first();

        return view('admin.users.remove', compact('user'));
    }

    public function assignRole(Request $request, $user_id)
    {
        $this->validate($request, [
            'role' => 'required',
        ]);

        $user = User::whereId($user_id)->first();

        $role_name = $request->input('role');

        $role = Role::whereName($role_name)->first();

        if (!$user->hasRole($role_name)) {

            $user->assignRole($role);

        } else {

            return redirect()->back()->with('error', "Sorry, this role is already assigned to the user!");

        }
        return redirect('users')->with('success-message', 'The role has been successfully assigned...');
    }

    public function removeRole(Request $request, $user_id)
    {
        $this->validate($request, [
            'role' => 'required',
        ]);

        $user = User::whereId($user_id)->first();

        $role_name = $request->input('role');

        $role = Role::whereName($role_name)->first();

        if ($user->hasRole($role_name)) {

            $user->removeRole($role);

        } else {

            return redirect()->back()->with('error', "Sorry, this user does not have that role assigned to them!");

        }
        
        return redirect('users')->with('success-message', 'The role has been successfully removed...');
    }

    public function search(Request $request)
    {
        $this->validate($request, [
            'search' => 'required|min:1',
        ],
        [
            'search.required' => 'You need to search a user.',
        ]);

        $query = $request->input('search');

        $users = User::where('name', 'LIKE', '%' . $query . '%')
            ->orwhere('email', 'LIKE', '%' . $query . '%')
            ->get();

        return view('admin.users.view', compact('users'));
    }

}
