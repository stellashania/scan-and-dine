<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Reservation;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    //

    public function viewCategory()
    {
        $categoryData = Category::all();

        $data = [
            'categories' => $categoryData
        ];
        return view('category', $data);
    }

    public function viewMenuBasedOnCategory(Request $request)
    {
        // dd($request->catId);
        $catId = $request->catId;
        $menus = Menu::where(
            'category_id',
            '=',
            $request->catId
        )->get();
        $data = [
            'menus' => $menus,
            'catId' => $catId
        ];
        return view('locked-menu', $data);
        // return view('locked-menu', compact('catId', 'menus'));
    }

    public function unlockMenu(Request $request)
    {
        // dd($request->catId);
        // dd($request);
        $code = Reservation::where(
            'code',
            '=',
            $request->code
        )->get();
        $menus = Menu::where(
            'category_id',
            '=',
            $request->catId
        )->get();
        if ($code->first()) {
            $data = [
                'error' => "Invalid Code!",
                'menus' => $menus,
            ];
            return view('menu', $data);
        } else {
            $data = [
                'error' => "Invalid Code!",
                'menus' => $menus,
                'catId' => $request->catId
            ];
            return view('locked-menu', $data);
        }
    }
}
