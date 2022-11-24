<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
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
}
