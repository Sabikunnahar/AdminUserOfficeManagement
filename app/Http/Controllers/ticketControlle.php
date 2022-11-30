<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ticketControlle extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //index
    public function index(){

        $ticket = Ticket::orderBy('id','ASC')->paginate(10);

        return view('auth.tickets.index',compact('ticket'));
    }
    /// Store
    public function store(Request $request){

        $request->validate([
            'ticket_des' =>'required',
        ]);

        Ticket::insert([
            'ticket_des'=>$request->ticket_des,
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
        $edit =Ticket::findOrFail($id);

        return view('auth.tickets.edit',compact('edit'));
    }
    
    // Update
    public function update(Request $request){

        $id= $request->id;
        $request->validate([
            'ticket_des' =>'required',
        ]);
        Ticket::findOrFail($id)->update([
            'ticket_des'=>$request->ticket_des,
            'created_at' =>Carbon::now(),
        ]);
        $notification=array(
            'message'=>'update Success',
            'alert-type'=>'success'
                );
        return redirect()->route('ticket_view')->with($notification);
    }
    // view
    public function ticket_view(){
        $ticket = Ticket::orderBy('id','ASC')->paginate(10);

        return view('auth.tickets.view',compact('ticket'));
    }
    // view
    public function ticket_assigned(){
        $ticket = Ticket::orderBy('id','ASC')->paginate(10);

        return view('auth.tickets.ticket_assigned',compact('ticket'));
    }

}
