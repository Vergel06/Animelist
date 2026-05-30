<?php

namespace App\Http\Controllers;

use App\Models\User; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login'); 
    }

   
    public function showRegister() 
    {
        return view('registration'); 
    }

    
    public function register(Request $request) 
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed', 
        ]);

        User::create([
            'fullname' => $request->fullname,
            'email'    => $request->email,
            'password' => Hash::make($request->password), 
            'role'     => 'User', 
        ]);

        return redirect()->route('login')->with('success', 'Registration Successful! Please log in.');
    }

    public function login(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); 
            
            $user = Auth::user();

            
            if ($user->role === 'Admin') {
                return redirect()->intended('/admin/users'); 
            } else {
                return redirect()->intended('/dashboard');
            }
        }

    
        return back()->withErrors([
            'loginError' => 'The email or password you entered is incorrect.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}