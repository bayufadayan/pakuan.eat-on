<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $data = User::where('username', 'LIKE', '%' . $request->search . '%')
                ->orWhere('email', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = User::paginate(5);
        }

        $searchNotFound = null;
        if ($data->isEmpty()) {
            $searchNotFound = "Pencarian tidak ditemukan";
        }

        return view('admin.user-settings', compact('data', 'searchNotFound'));
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

        try {
            $data->update($validatedData);
        } catch (\Illuminate\Database\QueryException $exception) {
            return redirect()->back()->with('error', 'Gagal update data! Email atau username telah dimiliki yang lain');
        }

        return redirect('/admin/user-settings')->with('success', 'Data with ID ' . $id . ' edited successfully');
    }

    public function delete_user($id)
    {
        $data = User::find($id);
        $data->delete();

        return redirect('/admin/user-settings')->with('success', 'Data with ID ' . $id . ' deleted successfully');
    }
}
