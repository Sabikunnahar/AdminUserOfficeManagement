<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;


class notificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    //index
    public function index(){

        $notify = Notification::orderBy('id','ASC')->paginate(10);

        return view('admin.notification.index',compact('notify'));
    }

    /// Store
    public function store(Request $request){

        $request->validate([
            'notify_text' =>'required',
            'notify_date' =>'required',
        ]);

        Notification::insert([
            'notify_text'=>$request->notify_text,
            'notify_date'=>$request->notify_date,
            'created_at' =>Carbon::now(),
            
        ]);
        $notification=array(
            'message'=>'Created Success',
            'alert-type'=>'success'
             );
        return redirect()->back()->with($notification);
    }
    // Destroy
    public function destroy($id){
        Notification::findOrFail($id)->delete();

        $notification=array(
            'message'=>'Delete Success',
            'alert-type'=>'success'
            );
        return redirect()->back()->with($notification);
    }
}
