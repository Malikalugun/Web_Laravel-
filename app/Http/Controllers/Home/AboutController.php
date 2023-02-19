<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\About;
use App\Models\MultiImage_table;
use Illuminate\Support\Carbon;

class AboutController extends Controller
{
    public function AboutPage()
    {
        //database About is Model name
        $aboutpage = About::find(1);
        return view('admin.about_page.about_page_all', compact('aboutpage'));
    }
    public function UpdateAbout(Request $request)
    {
        $about_id = $request->id;
        // name='home_slider'---form
        if ($request->file('about_image')) {
            $image = $request->file('about_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();  //what ever the formate 3434343443.jpg

            Image::make($image)->resize(636, 852)->save('upload/about_image/' . $name_gen);

            $save_url = 'upload/about_image/' . $name_gen;
            //Model name-> About
            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'description' => $request->description,
                // 'video_url' => $request->video_url,
                'about_image' => $save_url,

            ]);
            $notification = array(
                'message' => 'About Page Updated with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        } else {
            //Model Name ->About
            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'description' => $request->description,
                // 'video_url' => $request->video_url,  

            ]);
            $notification = array(
                'message' => 'Home Slide Updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        } // end Else

    } // End Method 

    public function HomeAbout()

    {
        $aboutpage = About::find(1);
        return view('frontend.about_page', compact('aboutpage'));
    }
    public function AboutMultiLogo()
    {

        return view('admin.about_page.multi_logo');
    }
    public function StoreMultiImage(Request $request)
    {
        //for multipal image
        $image = $request->file('multi_image');
        foreach ($image as $multi_image) {
            $name_gen = hexdec(uniqid()) . '.' . $multi_image->getClientOriginalExtension();  //what ever the formate 3434343443.jpg

            Image::make($multi_image)->resize(636, 852)->save('upload/multi_logo/' . $name_gen);

            $save_url = 'upload/multi_logo/' . $name_gen;
            //Model name-> About
            MultiImage_table::insert([
                'multi_image' => $save_url,
                'created_at' => carbon::now()

            ]);
        } //end of for loop
        $notification = array(
            'message' => 'Updated Multipal Image Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.multi.image')->with($notification);
    }
    public function AllMultiImage()
    {
        $allMultiImage = MultiImage_table::all();
        return view('admin.about_page.all_multi_image', compact('allMultiImage'));
    }
    public function EditMultiImage($id)
    {
        //Model name with the variable
        $multiImage = MultiImage_table::findOrFail($id);
        return view('admin.about_page.edit_multi_image', compact('multiImage'));
        //it just like add page(multi_logo.blade.php)

    }
    public function UpdatetMultiImage(Request $request)
    {
        $multiimage_id = $request->id;
        // name='home_slider'---form
        if ($request->file('multi_image')) {
            $image = $request->file('multi_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();  //what ever the formate 3434343443.jpg

            Image::make($image)->resize(636, 852)->save('upload/multi_logo/' . $name_gen);

            $save_url = 'upload/multi_logo/' . $name_gen;
            //Model name-> About
            MultiImage_table::findOrFail($multiimage_id)->update([
                //fied name
                'multi_image' => $save_url,

            ]);
            $notification = array(
                'message' => 'Multi Image Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.multi.image')->with($notification);
        }
    } // End Method 
    //here we get requested $id
    public function DeleteMultiImage($id)
    {
        //we are getting scefic id form db
        $multi = MultiImage_table::findOrFail($id);
        //we can access fill data
        $img = $multi->multi_image;
        unlink($img);
        MultiImage_table::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Multi Image Deleted  Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.multi.image')->with($notification);
    }
}
