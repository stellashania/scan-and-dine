<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class paymentController extends Controller
{
    public function payForm(){
        $user_id = Auth()->user()->id;
        $user = User::find($user_id);
        $cart_id = $user->cart->id;
        $chosen_cart = Cart::find($cart_id);

        $cart = $chosen_cart::with('menus')->get();
        
        return view('payment', compact('cart'));
    }
}
