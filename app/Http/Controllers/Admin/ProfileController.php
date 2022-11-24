<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    // Index
    public function index(){
        return view('admin.profile.index');
    }
    ///// Profile Settings
    public function profileSettings(){
        $admin = Admin::latest()->first();
        return view('admin.profile.settings',compact('admin'));
    }
    // Update Profile
    public function profileUpdate(Request $request){

        $request->validate([
            'name' =>'required',
            'email' =>'required',
            'phone' =>'required',
            'address' =>'required',
        ]);
        $old_img = $request->old_img;

        if(Admin::findOrFail(Auth::id())->image === 'public/admin/user.png'){

            $img =$request->file('image');
            $name_gen=hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(166,110)->save('public/admin/images/user/'.$name_gen);
            $save_url='public/admin/images/user/'.$name_gen;

            Admin::findOrFail(Auth::user()->id)->update([
              'name' =>$request->name,
              'email' =>$request->email,
              'phone' =>$request->phone,
              'address' =>$request->address,
              'image' =>$save_url,
              'updated_at' => Carbon::now(),
            ]);
            $notification=array(
                'message'=>'image soho update',
                'alert-type'=>'success'
                 );
            return redirect()->back()->with($notification);

        }else{
            if($request->file('image')){
                $img =$request->file('image');
                unlink($old_img);
                $name_gen=hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
                Image::make($img)->resize(166,110)->save('public/admin/images/user/'.$name_gen);
                $save_url='public/admin/images/user/'.$name_gen;

                Admin::findOrFail(Auth::user()->id)->update([
                'name' =>$request->name,
                'email' =>$request->email,
                'phone' =>$request->phone,
                'address' =>$request->address,
                'image' =>$save_url,
                'updated_at' => Carbon::now(),
                ]);
                $notification=array(
                    'message'=>'Profile Update Successfully',
                    'alert-type'=>'success'
                    );
                return redirect()->back()->with($notification);
            }else{
                Admin::findOrFail(Auth::user()->id)->update([
                    'name' =>$request->name,
                    'email' =>$request->email,
                    'phone' =>$request->phone,
                    'address' =>$request->address,
                    'updated_at' => Carbon::now(),
                    ]);
                    $notification=array(
                        'message'=>'Profile Update Successfully',
                        'alert-type'=>'success'
                        );
                    return redirect()->back()->with($notification);
            }
        }
    }

    //// Password Updated
    public function profilePasswordUpdate(Request $request){

        $request->validate([

            'old_password'=> 'required',
            'new_password'=> 'required',
            'confirmation_password'=> 'required',
        ]);

        $request->validate([

            'old_password'=> 'required',
            'new_password'=> 'required',
            'confirmation_password'=> 'required',
        ]);
        $db_pass = Auth::user()->password;
        $current_password = $request->old_password;
        $new_pass = $request->new_password;
        $confirm_pass = $request->confirmation_password;
        if (Hash::check($current_password,$db_pass)) {
        if ($new_pass=== $confirm_pass) {

            Admin::findOrFail(Auth::id())->update([
            'password' => Hash::make($new_pass)
            ]);
            Auth::logout();
            $notification=array(
        'message'=>'New Password Change Success and now login with new password',
        'alert-type'=>'success'
        );
        return Redirect()->route('login.admin')->with($notification);

        }else{
            $notification=array(
        'message'=>'New Password and confirm password not match',
        'alert-type'=>'error'
        );
        return Redirect()->back()->with($notification);
        }
        }else{
            $notification=array(
        'message'=>'Password Dose Not Match',
        'alert-type'=>'error'
        );
        return Redirect()->back()->with($notification);
        }
    }

}
