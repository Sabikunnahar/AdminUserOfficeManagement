<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class attendanceController extends Controller
{
    //Approval
    public function start_attendance(){
        Attendance::insert([
            'user_id' =>Auth::user()->id,
            'user_name' =>Auth::user()->name,
            'start_attendance' =>Carbon::now(),
            'created_at' =>Carbon::now(),

        ]);
        $notification=array(
            'message'=>'Attendance Store Successfully',
            'alert-type'=>'success'
            );
        return redirect()->back()->with($notification);
    }

    //end attendance
    public function ends_attendance($id){
        // $data= Attendance::latest($id);
        $data= Attendance::findOrFail($id);
        $data -> end_attendance= Carbon::now();
        $data-> save();
        return redirect()-> back();

        $notification=array(
            'message'=>'Attendance Store Successfully',
            'alert-type'=>'success'
            );
        return redirect()->back()->with($notification);
    }

    //  // Update
    //  public function ends_attendance(Request $request){

    //     $id= $request->id;
    //     Attendance::findOrFail($id)->update([
    //         'end_attendance' =>Carbon::now(),
    //         'created_at' =>Carbon::now(),
    //     ]);
    //     $notification=array(
    //         'message'=>'update Success',
    //         'alert-type'=>'success'
    //          );
    //     return redirect()->route('admin_create_leaves')->with($notification);
    // }
    
}
