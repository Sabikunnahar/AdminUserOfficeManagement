<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\User;
use Carbon\Carbon;

class adminTicketControlle extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    //index
    public function index(){

        $ticket = Ticket::orderBy('id','ASC')->paginate(10);

        return view('admin.tickets.index',compact('ticket'));
    }
    /// Store
    public function store(Request $request){

        $request->validate([
            'ticket_des' =>'required',
        ]);

        Ticket::insert([
            'ticket_des'=>$request->ticket_des,
            'ticket_assigned'=>$request->ticket_assigned,
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

            return view('admin.tickets.edit',compact('edit'));
        }

    // Update
    public function update(Request $request){

            $id= $request->id;
            $request->validate([
                'ticket_des' =>'required',
                'ticket_assigned' =>'required',
            ]);
            Ticket::findOrFail($id)->update([
                'ticket_des'=>$request->ticket_des,
                'ticket_assigned' => $request->ticket_assigned,
                'created_at' =>Carbon::now(),
            ]);
            $notification=array(
                'message'=>'update Success',
                'alert-type'=>'success'
                    );
            return redirect()->route('admin_view_tickets')->with($notification);
        }
    //index
    public function view(){

        $ticket = Ticket::orderBy('id','ASC')->paginate(10);

        return view('admin.tickets.view',compact('ticket'));
    }


}
