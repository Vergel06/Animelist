<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::check() && Auth::user()->role !== 'Admin') {
            return redirect()->route('dashboard')->with('error', 'Access denied.');
        }

        $users = User::orderBy('id', 'DESC')->get();

        $totalOnline = User::where('status', 'Active')->count();

        return view('manage-user', compact('users', 'totalOnline'));
    }

    public function store(Request $request)
    {
 
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'role' => 'required|in:Admin,User'
        ]);

        $plain_password = ($request->role === 'Admin') ? "admin1234" : "user1234";

        User::create([
            'fullname' => $request->fullname,
            'email'    => $request->email,
            'role'     => $request->role,
            'status'   => 'Active', 
            'password' => Hash::make($plain_password), 
        ]);

        return redirect()->back()->with('success', "New user added! Default password is: $plain_password");
    }

    public function update(Request $request)
    {
        $request->validate([
            'user_id'  => 'required|exists:users,id',
            'fullname' => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email,' . $request->user_id,
            'role'     => 'required'
        ]);

        $user = User::find($request->user_id);
        
        if ($user) {
            $user->update([
                'fullname' => $request->fullname,
                'email'    => $request->email,
                'role'     => $request->role,
            ]);
            return redirect()->back()->with('success', 'User updated successfully!');
        }

        return redirect()->back()->with('error', 'User not found.');
    }

    public function destroy(Request $request)
    {
        if (Auth::id() == $request->user_id) {
            return redirect()->back()->with('error', 'You cannot delete your own account!');
        }

        $user = User::find($request->user_id);

        if ($user) {
            $user->delete();
            return redirect()->back()->with('success', 'User deleted successfully!');
        }

        return redirect()->back()->with('error', 'Error deleting user.');
    }
}