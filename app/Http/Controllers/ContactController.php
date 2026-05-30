<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index() {
        return view('contact');
    }

    public function send(Request $request) {
        
        $request->validate([
            'u_name' => 'required',
            'u_email' => 'required|email',
            'u_message' => 'required',
        ]);

        DB::table('contact')->insert([
            'name' => $request->u_name,
            'email' => $request->u_email,
            'message' => $request->u_message,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return back()->with('success', 'Thank you! Your message has been sent successfully.');
    }
}