<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function search_item(Request $request)
    {
        if ($request->has('search')) {
            $data = Item::where('name', 'LIKE', '%' . $request->search . '%')->paginate(20);
        } else {
            $data = Item::paginate(20);
        }

        $searchNotFound = null;
        if ($data->isEmpty()) {
            $searchNotFound = "Pencarian tidak ditemukan";
        }

        return view('searchpage', compact('data', 'searchNotFound'));
    }

    public function view_history(Request $request)
    {
        if ($request->has('search')) {
            $data = Transaction::join('users', 'transactions.id_user', '=', 'users.id')
            ->join('items', 'transactions.id_item', '=', 'items.id')
            ->where(function ($query) use ($request) {
                $query->where('users.username', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('items.name', 'LIKE', '%' . $request->search . '%');
            })
            ->paginate(20);
        } else {
            $data = Transaction::paginate(20);
        }

        $searchNotFound = null;
        if ($data->isEmpty()) {
            $searchNotFound = "Pencarian tidak ditemukan";
        }

        return view('admin.transaction-history', compact('data', 'searchNotFound'));
    }
}
