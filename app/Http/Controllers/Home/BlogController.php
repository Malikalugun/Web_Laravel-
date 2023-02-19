<?php

namespace App\Http\Controllers\Home;

use App\Models\Blog;
use App\Http\Controllers\Controller;
//use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;
use App\Models\Category;

class BlogController extends Controller
{

    public function AllBlog()
    {
        $Blog = Blog::latest()->get();

        return view('admin.Blog.blog_all', compact('Blog'));
    }
    public function BlogAdd()
    {
        $category = Category::orderBy('title', 'ASC')->GET();
        return view('admin.Blog.blog_add', compact('category'));
    }
    public function BlogStore(Request $request)
    {
        $request->validate([
            'category_title_id' => 'required',
            'blog_image' => 'required',

        ], [

            'category_title_id.required' => 'Category Title Id is Required',
            'blog_image.required' => 'Blog Image  is Required',
        ]);

        $image = $request->file('blog_image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();  //what ever the formate 3434343443.jpg

        Image::make($image)->resize(722, 318)->save('upload/blog_image/' . $name_gen);

        $save_url = 'upload/blog_image/' . $name_gen;
        //Model name-> About
        Blog::insert([
            'category_title_id' => $request->category_title_id,
            'title' => $request->title,
            'date' => $request->date,
            'username' => $request->username,
            'tag' => $request->tag,
            'description' => $request->description,
            'blog_image' => $save_url,
            'created_at' => Carbon::now(),

        ]);
        $notification = array(
            'message' => 'Blog Data Inserted  Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.blog')->with($notification);
    }
    public function BlogEdit($id)
    {
        $blog = Blog::findOrFail($id);
        $category = Category::orderBy('title', 'ASC')->GET();
        return view('admin.Blog.blog_edit', compact('blog', 'category'));
    }
    public function UpdateBlog(Request $request)
    {
        $blog_id = $request->id;
        // name='home_slider'---form
        if ($request->file('blog_image')) {
            $image = $request->file('blog_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();  //what ever the formate 3434343443.jpg

            Image::make($image)->resize(722, 318)->save('upload/blog_image/' . $name_gen);

            $save_url = 'upload/blog_image/' . $name_gen;

            Blog::findOrFail($blog_id)->update([
                'category_title_id' => $request->category_title_id,
                'title' => $request->title,
                'date' => $request->date,
                'username' => $request->username,
                'tag' => $request->tag,
                'description' => $request->description,
                'blog_image' => $save_url,

            ]);
            $notification = array(
                'message' => 'Blog Updated with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        } else {

            Blog::findOrFail($blog_id)->update([
                'category_title_id' => $request->category_title_id,
                'title' => $request->title,
                'date' => $request->date,
                'username' => $request->username,
                'tag' => $request->tag,
                'description' => $request->description,
                'created_at' => Carbon::now(),

            ]);
            $notification = array(
                'message' => 'Blog  Updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.blog')->with($notification);
        } // end Else

    }
    public function DeleteBlog($id)
    {
        //we are getting scefic id form db->table_name
        $blog = Blog::findOrFail($id);
        //we can access fill data
        $img = $blog->blog_image;
        unlink($img);
        Blog::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Multi Image Deleted  Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.blog')->with($notification);
    }
    public function BlogDetails($id)
    {
        $allblogs = Blog::latest()->limit(2)->get();
        $blogs = Blog::findOrFail($id);
        $category = Category::orderBy('title', 'ASC')->GET();
        return view('frontend.blog_details', compact('blogs', 'allblogs', 'category'));
    }
    public function Blog()
    {
        $allblogs = Blog::latest()->paginate(2);
        return view('frontend.home_all.blog', compact('allblogs'));
    }
}
