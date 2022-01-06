<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function viewCategories()
    {
        $categories = Category::all();
        $list = [
            'categories' => $categories
        ];
        return view('manage-category', $list);
    }

    public function addForm()
    {
        return view('add-category');
    }

    public function addCategory(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|unique:App\Models\Category,name|min:2',
            'image' => 'file|mimes:jpg'
        ]);

        $category = new Category();
        $category->name = $validate['name'];
        $file = $request->file('image');
        $fileName = $request->name . "." . $file->getClientOriginalExtension();
        Storage::putFileAs("public/assets/categories", $file, $fileName);
        $category->image = $fileName;
        $category->save();

        return redirect('manage-category');
    }

    public function editCategory(Request $request)
    {
        $id = $request->id;
        $selectedCategory = Category::where('id', $id)->first();
        $list = [
            'selectedCategory' => $selectedCategory
        ];
        return view('edit-category', $list);
    }

    public function updateCategory(Request $request)
    {
        $category = Category::where('id', $request->id)->first();

        if ($category->name != $request->name) {
            $validate = $request->validate([
                'name' => 'required|unique:App\Models\Category,name|min:2',
                'image' => 'file|mimes:jpg'
            ]);
        } else {
            $validate = $request->validate([
                'name' => 'required|min:2',
                'image' => 'file|mimes:jpg'
            ]);
        }

        $category->name = $validate['name'];

        if ($request->image != NULL) {
            $file = $request->file('image');
            $fileName = $request->name . "." . $file->getClientOriginalExtension();
            Storage::delete("public/assets/categories/".$category->image);
            Storage::putFileAs("public/assets/categories", $file, $fileName);

            $validate['image'] = $fileName;
        }
        Category::where('id', $request->id)->update($validate);

        return redirect('manage-category');
    }

    public function deleteCategory(Request $request){
        Category::where('id', $request->id)->delete();

        return redirect('manage-category');
    }
}
