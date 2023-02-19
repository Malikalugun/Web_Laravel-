<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeSlider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;






class HomeSliderControlller extends Controller
{
    public function HomeSlider()
    {
        $homeslider = HomeSlider::find(1);
        return view('admin.home_slider.home_slider_all', compact('homeslider'));
    }
    public function UpdateSlider(Request $request)
    {

        $slide_id = $request->id;
        // name='home_slider'---form
        if ($request->file('home_slider')) {
            $image = $request->file('home_slider');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();  //what ever the formate 3434343443.jpg

            Image::make($image)->resize(636, 852)->save('upload/home_slider/' . $name_gen);

            $save_url = 'upload/home_slider/' . $name_gen;

            HomeSlider::findOrFail($slide_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                // 'video_url' => $request->video_url,
                'home_slider' => $save_url,

            ]);
            $notification = array(
                'message' => 'Home Slide Updated with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        } else {

            HomeSlider::findOrFail($slide_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                // 'video_url' => $request->video_url,  

            ]);
            $notification = array(
                'message' => 'Home Slide Updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        } // end Else

    } // End Method 

    // public function FormData()
    // {
    //     return view('admin.dataform.data_master');
    // }
    // public function DataMaster()
    // {
    //     return view('admin.dataform.data_form');
    // }
    public function HomeMain()
    {
        return view('frontend.index');
    }
}
