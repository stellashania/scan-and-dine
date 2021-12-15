<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function displayAll(Request $request)
    {
        // $user = User::find($request->id);
        $user_id = Auth()->user()->id;
        $user = User::find($user_id);
        $cart_id = $user->cart->id;
        $chosen_cart = Cart::find($cart_id);

        $cart = $chosen_cart::with('menus')->get();

        // dd(cart);

        return view('cart', compact('cart'));
    }
}
