<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NoticeBoard;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PHPUnit\Framework\Error\Notice;

class NoticeBoardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    //index
    public function index(){

        $notice_board = NoticeBoard::orderBy('id','ASC')->paginate(10);

        return view('admin.notice_board.index',compact('notice_board'));
    }

    /// Store
    public function store(Request $request){

        $request->validate([
            'notice_board' =>'required',
        ]);

        NoticeBoard::insert([
            'notice_board'=>$request->notice_board,
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
        $edit =NoticeBoard::findOrFail($id);

        return view('admin.notice_board.edit',compact('edit'));
    }

    // Update
    public function update(Request $request){

        $id= $request->id;
        $request->validate([
            'notice_board' =>'required',
        ]);
        NoticeBoard::findOrFail($id)->update([
            'notice_board'=>$request->notice_board,
            'created_at' =>Carbon::now(),
        ]);
        $notification=array(
            'message'=>'update Success',
            'alert-type'=>'success'
             );
        return redirect()->route('admin_notice_view')->with($notification);
    }

    // Destroy
    public function destroy($id){
        NoticeBoard::findOrFail($id)->delete();

        $notification=array(
            'message'=>'Delete Success',
            'alert-type'=>'success'
             );
        return redirect()->back()->with($notification);
    }
    //index
    public function view(){

        $notice_board = NoticeBoard::orderBy('id','ASC')->paginate(10);

        return view('admin.notice_board.view',compact('notice_board'));
    }
}
