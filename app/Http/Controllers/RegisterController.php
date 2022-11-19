<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index' ,[
            'title' => 'register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request) {
        $validateddata = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $validateddata['password'] = bcrypt($validateddata['password']);
        $validateddata['password'] = hash::make($validateddata['password']);

        User::create($validateddata);
        // $request->session()->flash('success', 'Registration Success! Please Login');
        return redirect('/login')->with('success', 'Registration Success! Please Login');

    }
}
