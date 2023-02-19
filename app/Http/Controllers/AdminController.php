<?php

namespace App\Http\Controllers;

use App\Models\User;
//user is table name
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class AdminController extends Controller
{
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        $notification = array(
            'message' => 'User Logout Successfully',
            'alert-type' => 'success'
        );
        return redirect('/login')->with($notification);
    }
    //End Method
    public function profile()
    {
        //which user is login we get from here
        $id = Auth::user()->id;
        //we get data form user table
        $adminData = User::find($id);
        //this type of file i want to create
        return view('admin.admin_profile_view', compact(('adminData')));
    }
    public function EditProfile()
    {
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('admin.admin_profile_edit', compact(('editData')));
    }
    public function StoreProfile(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        //db ->name form->name=name
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;
        //for upload images
        if ($request->file('profile_image')) {
            $file = $request->file('profile_image');
            //different type of date and time is generated
            $filename = date('TmdHi') . $file->getClientOriginalName();
            //move the file public upload->admin_images and we have to pass from here
            $file->move(public_path('upload/admin_images'), $filename);
            // db name and changes name
            $data['profile_image'] =  $filename;
        }
        $data->save();
        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.profile')->with($notification);
    }
    public function ChangePassword()
    {
        return view('admin.admin_change_password');
    }
    public function UpdatePassword(Request $request)
    {
        $validateData = $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',
        ]);
        $hashPassword = Auth::user()->password;
        if (Hash::check($request->old_password, $hashPassword)) {
            $users = User::find(Auth::id());
            //changes password
            $users->password = bcrypt(($request->new_password));
            $users->save();
            session()->flash('message', 'Password Updated Successfully');
            return redirect()->back();
        } else {
            session()->flash('message', 'Old Password is not Matched');
            return redirect()->back();
        }
    }
}
