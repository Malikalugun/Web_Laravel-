<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;

class TestimonialController extends Controller
{
    public function TestimonialSetup()
    {
        $testimonial = Testimonial::orderby('name', 'ASC')->get();
        return view('admin.Testimonial.testionial_all', compact('testimonial'));
    }
    public function TestimonailAdd()
    {
        return view('admin.Testimonial.testimonial_add');
    }
    public function TestimonialStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'short_description' => 'required',
            'photo' => 'required',

        ], [
            //custome error we can write here
            'name.required' => 'Name is Required',
            'designation.required' => 'designation  is Required',
            'short_description.required' => 'Short Description is Required',
            'photo.required' => 'Photo is Required',
        ]);


        $image = $request->file('photo');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();  //what ever the formate 3434343443.jpg

        Image::make($image)->resize(90, 90)->save('upload/testimonial/' . $name_gen);

        $save_url = 'upload/testimonial/' . $name_gen;
        //Model name-> About
        Testimonial::insert([
            'name' => $request->name,
            'designation' => $request->designation,
            'short_description' => $request->short_description,
            'photo' => $save_url,
            'created_at' => Carbon::now(),

        ]);
        $notification = array(
            'message' => 'Testimonial Data Inserted  Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('testimonial.setup')->with($notification);
    }
    public function TestimonialEdit($id)
    {
        $test = Testimonial::findOrFail($id);
        return view('admin.Testimonial.testimonial_edit', compact('test'));
    }
    public function TestimonialUpdate(Request $request)
    {
        $test_id = $request->id;
        // name='home_slider'---form
        if ($request->file('photo')) {
            $image = $request->file('photo');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();  //what ever the formate 3434343443.jpg

            Image::make($image)->resize(90, 90)->save('upload/testimonial/' . $name_gen);

            $save_url = 'upload/testimonial/' . $name_gen;

            Testimonial::findOrFail($test_id)->update([

                'name' => $request->name,
                'designation' => $request->designation,
                'short_description' => $request->short_description,
                'photo' => $save_url,

            ]);
            $notification = array(
                'message' => 'Testimonial Updated with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('testimonial.setup')->with($notification);
        } else {

            Testimonial::findOrFail($test_id)->update([

                'name' => $request->name,

                'designation' => $request->designation,

                'short_description' => $request->short_description,
                'created_at' => Carbon::now(),

            ]);
            $notification = array(
                'message' => 'Testimonial  Updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('testimonial.setup')->with($notification);
        } // end Else

    }
    public function TestimonialDelete($id)
    {
        //we are getting scefic id form db->table_name
        $test = Testimonial::findOrFail($id);
        //we can access fill data
        $img = $test->photo;
        unlink($img);
        Testimonial::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Testimonial Data Deleted  Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('testimonial.setup')->with($notification);
    }
}
