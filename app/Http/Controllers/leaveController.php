<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
            'leave_date' =>'required',
        ]);

        Leave::insert([
            'leave_reason'=>$request->leave_reason,
            'leave_date'=>$request->leave_date,
            'created_at' =>Carbon::now(),
        ]);
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
                'leave_date' =>'required',
            ]);
            Leave::findOrFail($id)->update([
                'leave_reason'=>$request->leave_reason,
                'leave_date'=>$request->leave_date,
                'created_at' =>Carbon::now(),
            ]);
            $notification=array(
                'message'=>'update Success',
                'alert-type'=>'success'
                 );
            return redirect()->route('create_leaves')->with($notification);
        }

}
