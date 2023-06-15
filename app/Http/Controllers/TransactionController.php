<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function add_transaction($id)
    {

        $item = Item::find($id);
        $user = User::find($id);

        return view('confirmorder', compact('user', 'item'));
    }

    public function make_transaction(Request $request)
    {
        $validatedData = $request->validate([
            'id_user' => 'required',
            'id_item' => 'required',
            'order_option' => 'required',
            'notes' => 'nullable',
            'payment_option' => 'required',
            'total' => 'required',
        ]);

        if ($validatedData['notes'] === null) {
            $validatedData['notes'] = 'no notes';
        }

        Transaction::create($validatedData);
        return redirect('/')->with('success', 'Your transaction is successful. Please wait for your order. Thank you!');
    }
}
