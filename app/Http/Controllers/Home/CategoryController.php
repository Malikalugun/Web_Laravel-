<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    public function AllCategory()
    {
        $Category = Category::latest()->get();
        return view('admin.category.category_all', compact('Category'));
    }
    public function AddCategory()
    {
        return view('admin.category.add_category');
    }
    public function StoreBlog(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'language' => 'required',

        ], [
            //custome error we can write here
            'tilte.required' => 'Title is Required',
            'language.required' => 'language  is Required',
        ]);
        //Model name-> About
        Category::insert([
            'title' => $request->title,
            'language' => $request->language,

        ]);
        $notification = array(
            'message' => 'Category Name Inserted  Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.category')->with($notification);
    }
    public function EditCategory($id)
    {
        $category = Category::findOrFail($id);
        return view("admin.category.edit_category", compact('category'));
    }
    public function UpdateCategory(Request $request)
    {
        $category_id = $request->id;
        Category::findOrFail($category_id)->update([
            'title' => $request->title,
            'language' => $request->language,
        ]);
        $notification = array(
            'message' => 'category updated successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('all.category')->with($notification);
    }
    public function DeleteCategory($id)
    {

        Category::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Multi Image Deleted  Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.category')->with($notification);
    }
}
