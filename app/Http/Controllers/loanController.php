<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //create/index
    public function index(){

        $loan = Loan::orderBy('id','ASC')->paginate(10);

        return view('auth.loan.index',compact('loan'));
    }
    /// Store
    public function store(Request $request){

        $request->validate([
            'loan_reason' =>'required',
            'loan_date' =>'required',
            'loan_amount' =>'required',
        ]);

        Loan::insert([
            'loan_reason'=>$request->loan_reason,
            'loan_date'=>$request->loan_date,
            'loan_amount'=>$request->loan_amount,
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

        $edit =Loan::findOrFail($id);

        return view('auth.loan.edit',compact('edit'));
    }
    // Update
    public function update(Request $request){

        $id= $request->id;
        $request->validate([
            'loan_reason' =>'required',
            'loan_date' =>'required',
            'loan_amount' =>'required',
        ]);
        Loan::findOrFail($id)->update([
            'loan_reason'=>$request->loan_reason,
            'loan_date'=>$request->loan_date,
            'loan_amount'=>$request->loan_amount,
            'updated_at' =>Carbon::now(),
        ]);
        $notification=array(
            'message'=>'update Success',
            'alert-type'=>'success'
                );
        return redirect()->route('loan_view')->with($notification);
    }
    //view
    public function view(){

        $loan = Loan::orderBy('id','ASC')->paginate(10);

        return view('auth.loan.view',compact('loan'));
    }
}
