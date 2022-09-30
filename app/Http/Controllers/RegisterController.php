<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'login',
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:200',
            'username' => ['required', 'min:3', 'max:200', 'unique:users'],
            'email' => ' required|email:dns|unique:users',
            'password' => 'required|min:5|max:200'
        ]);

        // $validateData['password'] = bcrypt($validateData['password']);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        // $request->session()->flash('success', 'Registration successful! Please Login');

        return redirect('/login')->with('success', 'Registration successful! Please Login');
    }
}
