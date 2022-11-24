<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    //index
    public function index(){

        $events = Event::orderBy('id','ASC')->paginate(10);

        return view('admin.event.index',compact('events'));
    }
    /// Store
    public function store(Request $request){

        $request->validate([
            'events' =>'required',
            'event_time' =>'required',
        ]);

        Event::insert([
            'events'=>$request->events,
            'event_time'=>$request->event_time,
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
        $edit =Event::findOrFail($id);

        return view('admin.event.edit',compact('edit'));
    }

    // Update
    public function update(Request $request){

        $id= $request->id;
        $request->validate([
            'events' =>'required',
            'event_time' =>'required',
        ]);
        Event::findOrFail($id)->update([
            'events'=>$request->events,
            'event_time'=>$request->event_time,
            'created_at' =>Carbon::now(),
        ]);
        $notification=array(
            'message'=>'update Success',
            'alert-type'=>'success'
             );
        return redirect()->route('event_create')->with($notification);
    }
    // Destroy
    public function destroy($id){
        Event::findOrFail($id)->delete();

        $notification=array(
            'message'=>'Delete Success',
            'alert-type'=>'success'
             );
        return redirect()->back()->with($notification);
    }
}
