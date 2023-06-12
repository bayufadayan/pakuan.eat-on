<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('admin.user-settings', compact('data'));
    }

    public function add_user()
    {
        return view('admin.add-user');
    }

    public function insert_data(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email:dns|unique:users|max:255',
            'username' => 'required|unique:users|min:4|max:255',
            'role' => 'required|in:ADMIN,USER',
            'password' => 'required|min:5|max:255',
            'confirmpassword' => 'required|same:password'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['confirmpassword'] = bcrypt($validatedData['confirmpassword']);
        User::create($validatedData);

        return redirect('/admin/user-settings')->with('success', 'Data added successfully');
    }

    public function edit_user($id)
    {
        $data = User::find($id);
        
        return view('admin.edit-user', compact('data'));
    }

    public function update_user(Request $request, $id)
    {
        $data = User::find($id);
        $validatedData = $request->validate([
            'email' => 'required|email:dns|max:255',
            'username' => 'required|min:4|max:255',
            'role' => 'required|in:ADMIN,USER',
        ]);
        $data->update($validatedData);

        return redirect('/admin/user-settings')->with('success', 'Data with ID '.$id. ' edited successfully');
    }

    public function delete_user($id)
    {
        $data = User::find($id);
        $data->delete();

        return redirect('/admin/user-settings')->with('success', 'Data with ID '.$id. ' deleted successfully');
    }
}
