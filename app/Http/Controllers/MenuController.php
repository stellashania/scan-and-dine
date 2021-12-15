<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
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
        $menuData = Menu::where(
            'category_id',
            '=',
            $request->catId
        )->get();
        $data = [
            'menus' => $menuData
        ];
        return view('locked-menu', $data);
    }
}
