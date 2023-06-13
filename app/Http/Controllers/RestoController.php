<?php

namespace App\Http\Controllers;

use App\Models\Resto;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRestoRequest;
use App\Http\Requests\UpdateRestoRequest;

class RestoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $data = Resto::where('name', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Resto::paginate(5);
        }

        $searchNotFound = null;
        if ($data->isEmpty()) {
            $searchNotFound = "Pencarian tidak ditemukan";
        }

        return view('admin.resto-settings', compact('data', 'searchNotFound'));
    }

    public function edit_resto($id)
    {
        $data = Resto::find($id);

        return view('admin.edit-resto', compact('data'));
    }

    public function update_resto(Request $request, $id)
    {
        $data = Resto::find($id);
        $validatedData = $request->validate([
            'name' => 'required|min:4|max:255',
        ]);

        try {
            $data->update($validatedData);
        } catch (\Illuminate\Database\QueryException $exception) {
            return redirect()->back()->with('error', 'Gagal update data! Nama Resto sudah dimiliki yang lain');
        }

        return redirect('/admin/resto-settings')->with('success', 'Data with ID ' . $id . ' edited successfully');
    }

    public function add_resto()
    {
        return view('admin.add-resto');
    }

    public function insert_resto(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:restos|min:4|max:255',
        ]);
        Resto::create($validatedData);

        return redirect('/admin/resto-settings')->with('success', 'Data added successfully');
    }

    public function delete_resto($id)
    {
        $data = Resto::find($id);
        $data->delete();

        return redirect('/admin/resto-settings')->with('success', 'Data with ID ' . $id . ' deleted successfully');
    }
}
