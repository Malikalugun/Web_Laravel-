<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function FooterSetup()
    {
        $footerpage = Footer::find(1);
        return view('admin.footer_page.footer_all', compact('footerpage'));
    }
    public function UpdateFooter(Request $request)
    {
        $footer_id = $request->id;
        // name='home_slider'---form
        {
            //Model Name ->About
            Footer::findOrFail($footer_id)->update([
                'number' => $request->number,
                'short_description' => $request->short_description,
                'address' => $request->address,
                'email' => $request->email,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'google' => $request->google,
                'instragram' => $request->instragram,
                'copyright' => $request->copyright,


            ]);
            $notification = array(
                'message' => 'Footer page Updated Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        } // end Else

    }
}
