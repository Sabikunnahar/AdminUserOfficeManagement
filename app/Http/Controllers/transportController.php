<?php

namespace App\Http\Controllers;

use App\Models\Transport;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class transportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //create/index
    public function index(){

        $transport = Transport::orderBy('id','ASC')->paginate(10);

        return view('auth.transport.index',compact('transport'));
    }
    /// Store
    public function store(Request $request){

        $request->validate([
            'trasport_reason' =>'required',
            'transport_date' =>'required',
            'transport_hour' =>'required',
        ]);

        Transport::insert([
            'trasport_reason'=>$request->trasport_reason,
            'transport_date'=>$request->transport_date,
            'transport_hour'=>$request->transport_hour,
            'user_id' =>Auth::user()->id,
            'user_name' =>Auth::user()->name,
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

        $edit =Transport::findOrFail($id);

        return view('auth.transport.edit',compact('edit'));
    }
    // Update
    public function update(Request $request){

        $id= $request->id;
        $request->validate([
            'trasport_reason' =>'required',

        ]);
        Transport::findOrFail($id)->update([
            'trasport_reason'=>$request->trasport_reason,
            'transport_date'=>$request->transport_date,
            'transport_hour'=>$request->transport_hour,
            'updated_at' =>Carbon::now(),
        ]);
        $notification=array(
            'message'=>'update Success',
            'alert-type'=>'success'
                );
        return redirect()->route('trasport_view')->with($notification);
    }
    //view
    public function view(){

        $transport = Transport::orderBy('id','ASC')->paginate(10);

        return view('auth.transport.view',compact('transport'));
    }

}
