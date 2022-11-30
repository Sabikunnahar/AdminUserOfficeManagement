<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\NoticeBoardController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\dashboardUserController;

use App\Http\Controllers\Admin\adminTicketControlle;
use App\Http\Controllers\Admin\adminLeaveController;
use App\Http\Controllers\Admin\notificationController;
use App\Http\Controllers\attendanceController;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\leaveController;
use App\Http\Controllers\ticketControlle;
use App\Http\Controllers\loanController;
use App\Http\Controllers\travelController;
use App\Http\Controllers\transportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('auth.notifications.index');
})->middleware(['auth', 'verified'])->name('layouts.user_master');

require __DIR__.'/auth.php';

//Admin auth
Route::get('/admin/dashboard', function () {
    return view('admin.home');
})->middleware(['auth:admin', 'verified'])->name('admin.home');

require __DIR__.'/adminauth.php';


// Route::get('slider',[SliderController::class,'index'])->name('sliders');

// Main
Route::group(['prefix'=>'admin'], function(){
    // Route::get('navbar',[NavbarController::class,'navbar'])->name('main_navbar');

    // /// Admin Profile Settings
    Route::get('my-profile',[ProfileController::class,'index'])->name('admin_profile');
    Route::get('profile-settings',[ProfileController::class,'profileSettings'])->name('profile_settings');
    Route::post('profile-update',[ProfileController::class,'profileUpdate'])->name('update_profile');
    Route::post('profile-password',[ProfileController::class,'profilePasswordUpdate'])->name('profile_password_update');
    
    // // User Create
    Route::get('/create_users', [UserManagementController::class, 'user_create'])->name('create_users');
    Route::get('/all_users', [UserManagementController::class, 'view_users'])->name('all_users');
    Route::get('/user_loans', [UserManagementController::class, 'user_loans'])->name('user_loans');
    Route::get('/travel_view', [UserManagementController::class, 'travel_view'])->name('admin_travel_view');
    Route::get('/user_loans', [UserManagementController::class, 'user_loans'])->name('user_loans');
    Route::get('/transport_view', [UserManagementController::class, 'transport_view'])->name('admin_transport_view');
    Route::get('/attendance', [UserManagementController::class, 'attendance_view'])->name('admin_attendance_view');
    
    
    /// Notice Board
    Route::get('notice-board',[NoticeBoardController::class,'index'])->name('notice_board');
    Route::post('notice-board/store',[NoticeBoardController::class,'store'])->name('notice_board_store');
    Route::get('notice-board/edit/{id}',[NoticeBoardController::class,'edit']);
    Route::post('notice-board/update',[NoticeBoardController::class,'update'])->name('notice_board_update');
    Route::get('notice-board/delete/{id}',[NoticeBoardController::class,'destroy']);
    Route::get('notice-board/view',[NoticeBoardController::class,'view'])->name('admin_notice_view');
    
    /// Events
    Route::get('events',[EventController::class,'index'])->name('event_create');
    Route::post('events/store',[EventController::class,'store'])->name('event_store');
    Route::get('events/edit/{id}',[EventController::class,'edit']);
    Route::post('events/update',[EventController::class,'update'])->name('event_update');
    Route::get('events/delete/{id}',[EventController::class,'destroy']);
    Route::get('events/view',[EventController::class,'view'])->name('admin_event_view');
    

    /// Tickets
    Route::get('tickets/controller',[adminTicketControlle::class,'index'])->name('admin_ticket');
    Route::post('tickets/controller/store',[adminTicketControlle::class,'store'])->name('admin_ticket_store');
    Route::get('tickets/controller/edit/{id}',[adminTicketControlle::class,'edit']);
    Route::post('tickets/controller/update',[adminTicketControlle::class,'update'])->name('admin_ticket_update');
    Route::get('tickets/delete/{id}',[adminTicketControlle::class,'destroy']);
    Route::get('tickets/view',[adminTicketControlle::class,'view'])->name('admin_view_tickets');

    /// leaves
    Route::get('leaves/controller',[adminLeaveController::class,'index'])->name('admin_create_leaves');
    Route::post('leaves/controller/store',[adminLeaveController::class,'store'])->name('admin_leave_store');
    Route::get('leaves/controller/edit/{id}',[adminLeaveController::class,'edit']);
    Route::post('leaves/controller/update',[adminLeaveController::class,'update'])->name('admin_leave_update');
    Route::get('leaves/controller/delete/{id}',[adminLeaveController::class,'destroy']);
    Route::get('approved/{id}',[adminLeaveController::class,'approve']);
    Route::get('leaves/view',[adminLeaveController::class,'view'])->name('admin_view_leaves');

    
    //Notification
    Route::get('notification',[notificationController::class,'index'])->name('notify');
    Route::post('notification/store',[notificationController::class,'store'])->name('notify_store');
    // Route::get('notification/edit/{id}',[notificationController::class,'edit']);
    // Route::post('notification/update',[notificationController::class,'update'])->name('notify_update');
    Route::get('notification/delete/{id}',[notificationController::class,'destroy']);
    Route::get('notification/view',[notificationController::class,'view'])->name('admin_view_notify');
    
    });

    //*******************************user controlls****************************

    //common views
    Route::get('all_notices',[dashboardUserController::class,'view_notices'])->name('all_notices');
    Route::get('all_events',[dashboardUserController::class,'view_events'])->name('all_events');
    Route::get('all_notifications',[dashboardUserController::class,'view_notifications'])->name('all_notify');
    Route::get('markasdone/{id}',[dashboardUserController::class,'notification_read']);
    Route::get('notice/rules',[dashboardUserController::class,'notice_rules'])->name('notice_rules');
    Route::get('ticket/assesment',[dashboardUserController::class,'ticket_rules'])->name('ticket_rules');


    /// leaves
    Route::get('leaves',[leaveController::class,'index'])->name('create_leaves');
    Route::post('leaves/store',[leaveController::class,'store'])->name('leave_store');
    Route::get('leaves/edit/{id}',[leaveController::class,'edit']);
    Route::post('leaves/update',[leaveController::class,'update'])->name('leave_update');
    Route::get('leaves/view',[leaveController::class,'leave_view'])->name('leave_view');

    //Tickets
    Route::get('tickets',[ticketControlle::class,'index'])->name('create_tickets');
    Route::post('tickets/store',[ticketControlle::class,'store'])->name('ticket_store');
    Route::get('tickets/edit/{id}',[ticketControlle::class,'edit']);
    Route::post('tickets/update',[ticketControlle::class,'update'])->name('ticket_update');
    Route::get('tickets/view',[ticketControlle::class,'ticket_view'])->name('ticket_view');
    Route::get('tickets/assigned',[ticketControlle::class,'ticket_assigned'])->name('user_ticket_assigned');

    /// loans
    Route::get('loan',[loanController::class,'index'])->name('create_loan');
    Route::post('loan/store',[loanController::class,'store'])->name('loan_store');
    Route::get('loan/edit/{id}',[loanController::class,'edit']);
    Route::post('loan/update',[loanController::class,'update'])->name('loan_update');
    Route::get('loan/view',[loanController::class,'view'])->name('loan_view');

    /// travel
    Route::get('travel',[travelController::class,'index'])->name('create_travel');
    Route::post('travel/store',[travelController::class,'store'])->name('travel_store');
    Route::get('travel/edit/{id}',[travelController::class,'edit']);
    Route::post('travel/update',[travelController::class,'update'])->name('travel_update');
    Route::get('travel/view',[travelController::class,'view'])->name('travel_view');


    /// trasport
    Route::get('trasport',[transportController::class,'index'])->name('trasport_travel');
    Route::post('trasport/store',[transportController::class,'store'])->name('trasport_store');
    Route::get('trasport/edit/{id}',[transportController::class,'edit']);
    Route::post('trasport/update',[transportController::class,'update'])->name('trasport_update');
    Route::get('trasport/view',[transportController::class,'view'])->name('trasport_view');

    //Attendance
    Route::get('start-attendance/',[attendanceController::class,'start_attendance']);
    Route::get('end-attendance/{id}',[attendanceController::class,'ends_attendance']);

    //User infon system
    Route::get('info',[UserInfoController::class,'index'])->name('user_info');
    Route::get('info/edit/{id}',[UserInfoController::class,'edit']);
    Route::post('info/update',[UserInfoController::class,'update'])->name('user_info_update');