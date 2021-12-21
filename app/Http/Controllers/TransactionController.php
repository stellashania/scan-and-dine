<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Reservation;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function checkout(Request $request)
    {
        // create new transaction
        $transaction = new Transaction();
        $transaction->user_id = Auth()->user()->id;
        $currTime = Carbon::now();
        $transaction->date = $currTime->format('Y-m-d');
        $transaction->payment_method = $request->payment;
        $transaction->save();

        // add the cart detail to transaction detail
        $cart_id = Auth()->user()->cart->id;
        $cart = Cart::find($cart_id);

        $menus = $cart->menus()->get(['menu_id']);
        $quantity = $cart->menus()->get(['quantity']);

        // dd($products);

        for ($i = 0; $i < sizeof($menus); $i++) {
            // dd($products[2]);
            $menu_id = $menus[$i];
            $qty = $quantity[$i];
            // dd($qty);
            $transaction->menus()->attach($menu_id->menu_id, ['quantity' => $qty->quantity]);
        }

        //delete cart detail (detach)
        $cart->menus()->detach();

        if ($request->session()->has('reservation_id')) {
            $reservation_id = $request->session()->get('reservation_id');
            $reservation = Reservation::where('id', $reservation_id)->first();
            $reservation->delete();
            $request->session()->forget('reservation_id');
        }

        // redirect to transaction history
        return redirect()->route('history-transaction');
    }

    public function displayAll()
    {
        $user = Auth::user();
        $transactions = $user->transactions()->get();

        return view('history-transaction', compact('transactions'));
    }
}
