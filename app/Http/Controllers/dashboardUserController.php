<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardUserController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:user');
    // }
    //index
    public function view_notices(){

        return view('auth.notice_board.index');
    }
    public function view_events(){

        return view('auth.event.index');
    }
    public function view_notifications(){

        return view('auth.notifications.index');
    }

    //Approval
    public function notification_read($id){
        $data= Notification::findOrFail($id);
        $data -> read_by= Auth::user()->name;
        $data -> status= 1;
        $data-> save();
        return redirect()-> back();
        $notification=array(
            'message'=>'Attendance Store Successfully',
            'alert-type'=>'success'
            );
        return redirect()->back()->with($notification);
    }
}
