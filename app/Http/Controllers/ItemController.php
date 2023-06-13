<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Category;
use App\Models\Resto;

class ItemController extends Controller
{
    public function index(Request $request)
    {

        if ($request->has('search')) {
            $data = Item::where('name', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Item::paginate(5);
        }

        $searchNotFound = null;
        if ($data->isEmpty()) {
            $searchNotFound = "Pencarian tidak ditemukan";
        }

        return view('admin.item-settings', compact('data', 'searchNotFound'));
    }

    public function add_item()
    {
        $categories = Category::all();
        $restos = Resto::all();
        return view('admin.add-item', compact('categories', 'restos'));
    }

    public function insert_item(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'category' => 'required',
            'price' => 'required',
            'description' => 'required',
            'resto' => 'required'
        ]);
        Item::create($validatedData);

        return redirect('/admin/item-settings')->with('success', 'Data added successfully');
    }

    public function edit_item($id)
    {
        $categories = Category::all();
        $restos = Resto::all();
        $data = Item::find($id);

        return view('admin.edit-item', compact('data', 'categories', 'restos'));
    }

    public function update_item(Request $request, $id)
    {
        $data = Item::find($id);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'category' => 'required',
            'price' => 'required',
            'description' => 'required',
            'resto' => 'required'
        ]);
        $data->update($validatedData);

        return redirect('/admin/item-settings')->with('success', 'Data with ID ' . $id . ' edited successfully');
    }

    public function delete_item($id)
    {
        $data = Item::find($id);
        $data->delete();

        return redirect('/admin/item-settings')->with('success', 'Data with ID ' . $id . ' deleted successfully');
    }

    public function ondashboard_minum()
    {
        $data = Item::where('category', 1)->get();

        return view('product-minuman', compact('data'));
    }

    public function ondashboard_makan()
    {
        $data = Item::where('category', 2)->get();

        return view('product-makanan', compact('data'));
    }

    public function ondashboard_fastfood()
    {
        $data = Item::where('category', 3)->get();

        return view('product-fastfood', compact('data'));
    }

    public function ondashboard_snack()
    {
        $data = Item::where('category', 4)->get();

        return view('product-snack', compact('data'));
    }
}
