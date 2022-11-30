<?php

namespace App\Http\Controllers\Admin;

use App\Models\Leave;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class adminLeaveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    //index
    public function index(){

        $leaves = Leave::orderBy('id','ASC')->paginate(10);

        return view('admin.leave.index',compact('leaves'));
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

        return view('admin.leave.edit',compact('edit'));
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
            return redirect()->route('admin_view_leaves')->with($notification);
        }
        
    //Approval
    public function approve($id){
        $data= Leave::findOrFail($id);
        $data -> status= 1;
        $data-> save();
        return redirect()-> back();
    }

    //delete
    public function destroy($id){
        Leave::findOrFail($id)->delete();

        $notification=array(
            'message'=>'Delete Success',
            'alert-type'=>'success'
            );
        return redirect()->back()->with($notification);
    }
    //index
    public function view(){

        $leaves = Leave::orderBy('id','ASC')->paginate(10);

        return view('admin.leave.view',compact('leaves'));
    }
}
