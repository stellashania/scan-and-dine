<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Menu;
use App\Models\CartDetail;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CartItemController extends Controller
{
    public function addItem(Request $request)
    {
        $rules = Validator::make($request->all(), [
            'quantity' => ['required', 'gt:0']
        ]);
        $rules->validate();

        $cart_id = Auth()->user()->cart->id;
        $cart = Cart::find($cart_id);
        $menu_id = $request->menu_id;
        $quantity = $request->quantity;
        // $menu = Menu::find($menu_id);

        $cart_item = CartItem::where('cart_id', '=', $cart_id)->where('menu_id', '=', $menu_id)->first();

        if (!empty($cart_item)) {
            // update
            $cart->menus()->wherePivot('cart_id', '=', $cart_id)->updateExistingPivot($menu_id, ['quantity' => $quantity]);
        } else {
            // add
            $cart->menus()->attach($menu_id, ['quantity' => $quantity]);
        }


        return redirect()->back();
    }

    public function deleteItem(Request $request)
    {
        $cart = Cart::find($request->cart_id);
        $cart->menus()->wherePivot('menu_id', '=', $request->menu_id)->detach();

        return redirect()->back();
    }

    public function getUpdateItemPage(Request $request)
    {
        $cart_id = $request->cart_id;
        $menu_id = $request->menu_id;

        $selectedCartItem = CartItem::where([
            ['cart_id', '=', $cart_id],
            ['menu_id', '=', $menu_id]
        ])->first();

        $qty = $selectedCartItem->quantity;

        $selectedMenu = Menu::where('id', $menu_id)->first();

        $data = [
            'cart_id' => $cart_id,
            'menu' => $selectedMenu,
            'qty' => $qty
        ];

        return view('edit-cart', $data);
    }

    public function updateItem(Request $request)
    {
        $rules = Validator::make($request->all(), [
            'quantity' => ['required', 'gt:0']
        ]);
        $rules->validate();

        $cart_id = $request->cart_id;
        $cart = Cart::find($cart_id);
        $cart->menus()->wherePivot('cart_id', '=', $cart_id)->updateExistingPivot($request->menu_id, ['quantity' => $request->quantity]);

        // redirect to my cart
        // $user_id = Auth()->user()->id;
        return redirect()->route('cart');
    }
}
