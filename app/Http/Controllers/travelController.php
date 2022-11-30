<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class travelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //create/index
    public function index(){

        $travel = Travel::orderBy('id','ASC')->paginate(10);

        return view('auth.travel.index',compact('travel'));
    }
    /// Store
    public function store(Request $request){

        $request->validate([
            'travel_place' =>'required',
            'travel_start_date' =>'required',
            'travel_end_date' =>'required',
        ]);

        Travel::insert([
            'travel_place'=>$request->travel_place,
            'travel_start_date'=>$request->travel_start_date,
            'travel_end_date'=>$request->travel_end_date,
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

        $edit =Travel::findOrFail($id);

        return view('auth.travel.edit',compact('edit'));
    }
    // Update
    public function update(Request $request){

        $id= $request->id;
        $request->validate([
            'travel_place' =>'required',

        ]);
        Travel::findOrFail($id)->update([
            'travel_place'=>$request->travel_place,
            'travel_start_date'=>$request->travel_start_date,
            'travel_end_date'=>$request->travel_end_date,
            'updated_at' =>Carbon::now(),
        ]);
        $notification=array(
            'message'=>'update Success',
            'alert-type'=>'success'
                );
        return redirect()->route('travel_view')->with($notification);
    }
    //view
    public function view(){

        $travel = Travel::orderBy('id','ASC')->paginate(10);

        return view('auth.travel.view',compact('travel'));
    }
}
