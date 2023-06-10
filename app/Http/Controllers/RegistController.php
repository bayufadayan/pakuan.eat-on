<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistController extends Controller
{
    public function index(){
        return view('signup');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email:dns|unique:users|max:255',
            'username' => 'required|unique:users|min:4|max:255',
            'password' => 'required|min:5|max:255',
            'confirmpassword' => 'required|same:password'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['confirmpassword'] = bcrypt($validatedData['confirmpassword']);
        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
