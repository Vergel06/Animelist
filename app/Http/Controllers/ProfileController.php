<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\User;

class ProfileController extends Controller
{
    
    public function index()
    {
        $user = Auth::user(); 
        return view('profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

    
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email,' . $user->id,
            'profile_image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        if ($request->hasFile('profile_image')) {
            
            if ($user->profile_pic && File::exists(public_path('uploads/' . $user->profile_pic))) {
                File::delete(public_path('uploads/' . $user->profile_pic));
            }

            $image = $request->file('profile_image');
            $new_img_name = 'user_' . $user->id . '_' . time() . '.' . $image->getClientOriginalExtension();
            
            $image->move(public_path('uploads'), $new_img_name);
            
            $user->profile_pic = $new_img_name;
        }

        $user->fullname = $request->fullname;
        $user->email    = $request->email;
        $user->phone    = $request->phone;
        $user->location = $request->location;
        $user->bio      = $request->bio;
        $user->save();


        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}