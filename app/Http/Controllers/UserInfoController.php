<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

class UserInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //index
    public function index(){

        $info = User::orderBy('id','ASC')->paginate(10);

        return view('auth.user_info.index',compact('info'));
    }

    // Edit
    public function edit($id){
        $edit =User::findOrFail($id);

        return view('auth.user_info.edit',compact('edit'));
    }

    // Update
    public function update(Request $request){

        $id= $request->id;
        $save =User::findOrFail($id);

        if ($request->hasFile('document_img')) {
            $image= $request->file('document_img');
            $img_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('admin/images/user'.$img_gen);
            $img_url = 'admin/images/user'.$img_gen;
            $save['document_img'] = $img_url;
        }

        if ($request->hasFile('profile_picture')) {
            $image= $request->file('profile_picture');
            $img_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('admin/images/user/profilePicture'.$img_gen);
            $img_url = 'admin/images/user/profilePicture'.$img_gen;
            $save['profile_picture'] = $img_url;
        }

        $save -> fathers_name= $request->fathers_name;
        $save -> mothers_name= $request->mothers_name;
        $save -> date_of_birth= $request->date_of_birth;
        $save -> age= $request->age;
        $save -> marital_status= $request->marital_status;
        $save -> gender= $request->gender;
        $save -> blood_group= $request->blood_group;
        $save -> place_of_birth= $request->place_of_birth;
        $save -> phone= $request->phone;
        $save -> addresss= $request->addresss;
        $save -> school= $request->school;
        $save -> school_cgpa= $request->school_cgpa;
        $save -> collage= $request->collage;
        $save -> collage_cgpa= $request->collage_cgpa;
        $save -> university= $request->university;
        $save -> univeristy_cgpa= $request->univeristy_cgpa;
        $save -> company_name= $request->company_name;
        $save -> company_addresss= $request->company_addresss;
        $save -> job_title= $request->job_title;
        $save -> document_name= $request->document_name;
        $save-> save();

        $notification=array(
            'message'=>'Info update Success',
            'alert-type'=>'success'
                );
        return redirect()->route('user_info')->with($notification);
    }
}
