<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataForm;
use Intervention\Image\Facades\Image;
// use Illuminate\Support\Carbon;

class DataController extends Controller
{
    public function AllData()
    {
        return view('admin.dataform.data_all');
    }
    public function AddData()
    {

        return view('admin.dataform.data_add');
    }
    public function StoreDataform(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'profile_image' => 'required',
        ], [
            //custome error we can write here
            'name.required' => 'Name is Required',
            'address.required' => 'address  is Required',
        ]);

        $image = $request->file('profile_image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();  //what ever the formate 3434343443.jpg

        Image::make($image)->resize(636, 852)->save('upload/form_image/' . $name_gen);

        $save_url = 'upload/form_image/' . $name_gen;
        //Model name-> About
        DataForm::insert([
            'name' => $request->name,
            'address' => $request->address,
            'profile_image' => $save_url,

        ]);
        $notification = array(
            'message' => 'Data Form Inserted  Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.data')->with($notification);
    } // End Method 
    public function Editdata($id)
    {
        //Model name with the variable
        $dataform = DataForm::findOrFail($id);
        return view('admin.dataform.edit_data', compact('dataform'));
        //it just like add page(multi_logo.blade.php)
    }
    public function UpdateData(Request $request)
    {
        $data_id = $request->id;
        // name='home_slider'---form
        if ($request->file('profile_image')) {
            $image = $request->file('profile_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();  //what ever the formate 3434343443.jpg

            Image::make($image)->resize(636, 852)->save('upload/form_image/' . $name_gen);

            $save_url = 'upload/form_image/' . $name_gen;
            //Model name-> About
            DataForm::findOrFail($data_id)->update([
                'name' => $request->name,
                'address' => $request->address,
                'profile_image' => $save_url,

            ]);
            $notification = array(
                'message' => 'Data Updated with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.data')->with($notification);
        } else {
            //Model Name ->About
            DataForm::findOrFail($data_id)->update([
                'name' => $request->name,
                'address' => $request->address,
                // 'video_url' => $request->video_url,  

            ]);
            $notification = array(
                'message' => 'Data Updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.data')->with($notification);
        } // end Else
    } // End Method 
    public function DeleteData($id)
    {
        //we are getting scefic id form db
        $data = DataForm::findOrFail($id);
        //we can access fill data
        $img = $data->profile_image;
        unlink($img);
        DataForm::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Data Deleted  Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.data')->with($notification);
    }
}
