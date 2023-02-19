<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;

class GalleyController extends Controller
{
    public function GalleryImage()
    {
        $gall = Gallery::latest()->paginate(1);
        return view('frontend.gallery', compact('gall'));
    }
    public function GallerySetup()
    {
        $gallery = Gallery::latest()->get();

        return view('admin.Gallery.gallery_all', compact('gallery'));
    }
    public function GalleryAdd()
    {
        return view('admin.Gallery.gallery_add');
    }
    public function GalleryStore(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'gallery' => 'required',

        ], [
            //custome error we can write here
            'gallery.required' => 'Image is Required',
            'title.required' => 'title  is Required',
        ]);

        $image = $request->file('gallery');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();  //what ever the formate 3434343443.jpg

        Image::make($image)->resize(636, 852)->save('upload/gallery/' . $name_gen);

        $save_url = 'upload/gallery/' . $name_gen;
        //Model name-> About
        Gallery::insert([
            'title' => $request->title,
            'gallery' => $save_url,
            'created_at' => Carbon::now(),

        ]);
        $notification = array(
            'message' => 'Gallery Data Inserted  Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('gallery.setup')->with($notification);
    }
    public function GalleryEdit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.Gallery.gallery_edit', compact('gallery'));
    }
    public function GalleryUpdate(Request $request)
    {
        $gallery_id = $request->id;
        // name='home_slider'---form
        if ($request->file('gallery')) {
            $image = $request->file('gallery');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();  //what ever the formate 3434343443.jpg

            Image::make($image)->resize(772, 318)->save('upload/blog_image/' . $name_gen);

            $save_url = 'upload/blog_image/' . $name_gen;

            Gallery::findOrFail($gallery_id)->update([
                'title' => $request->title,
                'gallery' => $save_url,

            ]);
            $notification = array(
                'message' => 'Gallery Updated with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('gallery.setup')->with($notification);
        } else {

            Gallery::findOrFail($gallery_id)->update([
                'title' => $request->title,
                'created_at' => Carbon::now(),

            ]);
            $notification = array(
                'message' => 'Gallery Updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('gallery.setup')->with($notification);
        } // end Else

    }
    public function GalleryDelete($id)
    {
        //we are getting scefic id form db->table_name
        $gallery = Gallery::findOrFail($id);
        //we can access fill data
        $img = $gallery->gallery;
        unlink($img);
        Gallery::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Gallery Image Deleted  Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('gallery.setup')->with($notification);
    }
}
