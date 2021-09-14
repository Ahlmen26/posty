<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('auth.register');
    }

    public function store(Request $request) 
    {

        // validate inputs
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'username' => 'required:max:255',
            'password' => 'required|confirmed'
        ]);

        // insert user to DB
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        // redirect to login
        return redirect()->route('dashboard');


    }
}
