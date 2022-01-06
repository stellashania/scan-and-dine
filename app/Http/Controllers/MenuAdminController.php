<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuAdminController extends Controller
{
    public function viewMenus()
    {
        $menus = Menu::all();
        $list = [
            'menus' => $menus
        ];

        return view('manage-menu', $list);
    }

    public function addMenuForm()
    {
        $allCategories = Category::all();
        $list = [
            'categories' => $allCategories
        ];
        return view('add-menu', $list);
    }

    public function addMenu(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|unique:App\Models\Menu,name|min:3',
            'description' => 'required|min:5',
            'price' => 'required|gt:0|numeric',
            'category_id' => 'exists:App\Models\Category,id',
            'image' => 'required|file|mimes:jpg'
        ]);

        $menu = new Menu();
        $menu->name = $validate['name'];
        $menu->description = $validate['description'];
        $menu->price = $validate['price'];
        $menu->category_id = $validate['category_id'];
        $file = $request->file('image');
        $fileName = $request->name . "." . $file->getClientOriginalExtension();
        Storage::putFileAs("public/assets/menus", $file, $fileName);
        $menu->image = $fileName;
        $menu->save();

        return redirect('manage-menu');
    }

    public function editMenuForm(Request $request)
    {
        $id = $request->id;
        $selectedMenu = Menu::where('id', $id)->first();
        $categories = Category::all();

        $list = [
            'selectedMenu' => $selectedMenu,
            'categories' => $categories
        ];

        return view('edit-menu-admin', $list);
    }

    public function updateMenu(Request $request)
    {
        $menu = Menu::where('id', $request->id)->first();

        if ($menu->name != $request->name) {
            $validating = $request->validate([
                'name' => 'required|unique:App\Models\Menu,name|min:3',
                'description' => 'required|min:5',
                'price' => 'required|gt:0|numeric',
                'category_id' => 'exists:App\Models\Category,id',
                'image' => 'required|file|mimes:jpg'
            ]);
        } else {
            $validating = $request->validate([
                'name' => 'required|min:3',
                'description' => 'required|min:5',
                'price' => 'required|gt:0|numeric',
                'category_id' => 'exists:App\Models\Category,id',
                'image' => 'file|mimes:jpg'
            ]);
        }

        if ($request->image != NULL) {
            $file = $request->file('image');
            $fileName = $request->name . "." . $file->getClientOriginalExtension();
            Storage::delete("public/assets/menus/" . $menu->image);
            Storage::putFileAs("public/assets/menus", $file, $fileName);

            $validating['image'] = $fileName;
        }

        Menu::where('id', $request->id)->update($validating);

        return redirect('manage-menu');
    }

    public function deleteMenu(Request $request){
        $menu = Menu::where('id', $request->id)->first();
        Storage::delete("public/assets/menus/" . $menu->image);
        Menu::where('id', $request->id)->delete();

        return redirect('manage-menu');
    }
}
