<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Loan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function user_create()
    {
        return view('admin.manage_users.index');
    }
    public function view_users(Request $request)
    {
        return view('admin.manage_users.all_users');
    }
    public function user_loans(Request $request)
    {
        return view('admin.manage_users.loan_view');
    }
    
    public function travel_view(Request $request)
    {
        return view('admin.manage_users.travel_view');
    }
    public function transport_view(Request $request)
    {
        return view('admin.manage_users.transport_view');
    }
    public function attendance_view(Request $request)
    {
        return view('admin.manage_users.attendance_view');
    }
}
