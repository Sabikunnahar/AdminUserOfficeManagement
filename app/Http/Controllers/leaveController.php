<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class leaveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        $leaves = Leave::orderBy('id','ASC')->paginate(10);

        return view('auth.leave.index',compact('leaves'));
    }

    /// Store
    public function store(Request $request){

        $request->validate([
            'leave_reason' =>'required',
            'leave_start_date' =>'required',
            'leave_end_date' =>'required',
            'leave_type' =>'required',
        ]);

        Leave::insert([
            'leave_reason'=>$request->leave_reason,
            'leave_start_date'=>$request->leave_start_date,
            'leave_end_date'=>$request->leave_end_date,
            'leave_type'=>$request->leave_type,
            'user_id' =>Auth::user()->id,
            'user_name' =>Auth::user()->name,
            'created_at' =>Carbon::now(),
        ]);

        //counting leave starts
        $leaves = Leave::get('user_id');
        echo ".....leave id......", $leaves;

        foreach($leaves as $item){
            if($item->user_id == Auth::user()->id){
                $leave_id = Leave::where('user_id', Auth::user()->id)->count();
                $data =User::findOrFail(Auth::user()->id);
                $data-> leave_count= $leave_id;
                $data->save();

            }
        }
        //counting leave ends
        $notification=array(
            'message'=>'Created Success',
            'alert-type'=>'success'
             );
        return redirect()->back()->with($notification);
    }

    // Edit
    public function edit($id){

        $edit =Leave::findOrFail($id);

        return view('auth.leave.edit',compact('edit'));
    }

    // Update
    public function update(Request $request){

        $id= $request->id;
        $request->validate([
            'leave_reason' =>'required',
            'leave_start_date' =>'required',
            'leave_end_date' =>'required',
            'leave_type' =>'required',
        ]);
        Leave::findOrFail($id)->update([
            'leave_reason'=>$request->leave_reason,
            'leave_start_date'=>$request->leave_start_date,
            'leave_end_date'=>$request->leave_end_date,
            'leave_type'=>$request->leave_type,
            'created_at' =>Carbon::now(),
        ]);
        $notification=array(
            'message'=>'update Success',
            'alert-type'=>'success'
                );
        return redirect()->route('leave_view')->with($notification);
    }
    //view
    public function leave_view(){

        $leaves = Leave::orderBy('id','ASC')->paginate(10);

        return view('auth.leave.view',compact('leaves'));
    }

}
