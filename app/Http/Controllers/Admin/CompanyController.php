<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    //index
    public function index(){

        $create = Company::orderBy('id','ASC')->paginate(10);

        return view('admin.company.index',compact('create'));
    }
    /// Store
    public function store(Request $request){

        $request->validate([
            'company_name' =>'required',
            'company_logo' =>'required',
        ]);

        $img =$request->file('company_logo');
        $img_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
        Image::make($img)->save('admin/images/company'.$img_gen);
        $save_url='admin/images/company'.$img_gen;

        Company::insert([
            'company_name'=>$request->company_name,
            'company_logo'=>$save_url,
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
        $edit =Company::findOrFail($id);

        return view('admin.company.edit',compact('edit'));
    }

    // Update
    public function update(Request $request){

        $id= $request->id;
        $request->validate([
            'company_name' =>'required',
            'company_logo' =>'required',
        ]);

        $old_img = $request->old_img;

        unlink($old_img);
        $image= $request->file('company_logo');
        $img_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->save('admin/images/company'.$img_gen);
        $img_url = 'admin/images/company'.$img_gen;


        Company::findOrFail($id)->update([
            'company_name'=>$request->company_name,
            'company_logo'=>$img_url,
            'created_at' =>Carbon::now(),
        ]);
        $notification=array(
            'message'=>'update Success',
            'alert-type'=>'success'
             );
        return redirect()->route('company_create')->with($notification);
    }
    // Destroy
    public function destroy($id){
        Company::findOrFail($id)->delete();

        $notification=array(
            'message'=>'Delete Success',
            'alert-type'=>'success'
             );
        return redirect()->back()->with($notification);
    }

}
