<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\NoticeBoardController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\dashboardUserController;
use App\Http\Controllers\leaveController;
use App\Http\Controllers\ticketControlle;
use App\Http\Controllers\Admin\adminTicketControlle;
use App\Http\Controllers\Admin\adminLeaveController;
use App\Http\Controllers\attendanceController;
use App\Http\Controllers\Admin\notificationController;
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
    return view('layouts.user_master');
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
    
    
    /// Notice Board
    Route::get('notice-board',[NoticeBoardController::class,'index'])->name('notice_board');
    Route::post('notice-board/store',[NoticeBoardController::class,'store'])->name('notice_board_store');
    Route::get('notice-board/edit/{id}',[NoticeBoardController::class,'edit']);
    Route::post('notice-board/update',[NoticeBoardController::class,'update'])->name('notice_board_update');
    Route::get('notice-board/delete/{id}',[NoticeBoardController::class,'destroy']);
    
    /// Events
    Route::get('events',[EventController::class,'index'])->name('event_create');
    Route::post('events/store',[EventController::class,'store'])->name('event_store');
    Route::get('events/edit/{id}',[EventController::class,'edit']);
    Route::post('events/update',[EventController::class,'update'])->name('event_update');
    Route::get('events/delete/{id}',[EventController::class,'destroy']);

    /// Tickets
    Route::get('tickets/controller',[adminTicketControlle::class,'index'])->name('view_tickets');
    Route::post('tickets/controller/store',[adminTicketControlle::class,'store'])->name('admin_ticket_store');
    Route::get('tickets/controller/edit/{id}',[adminTicketControlle::class,'edit']);
    Route::post('tickets/controller/update',[adminTicketControlle::class,'update'])->name('admin_ticket_update');
    Route::get('tickets/delete/{id}',[adminTicketControlle::class,'destroy']);

    /// leaves
    Route::get('leaves/controller',[adminLeaveController::class,'index'])->name('admin_create_leaves');
    Route::post('leaves/controller/store',[adminLeaveController::class,'store'])->name('admin_leave_store');
    Route::get('leaves/controller/edit/{id}',[adminLeaveController::class,'edit']);
    Route::post('leaves/controller/update',[adminLeaveController::class,'update'])->name('admin_leave_update');
    Route::get('leaves/controller/delete/{id}',[adminLeaveController::class,'destroy']);
    Route::get('approved/{id}',[adminLeaveController::class,'approve']);

    
    //Notification
    Route::get('notification',[notificationController::class,'index'])->name('notify');
    Route::post('notification/store',[notificationController::class,'store'])->name('notify_store');
    // Route::get('notification/edit/{id}',[notificationController::class,'edit']);
    // Route::post('notification/update',[notificationController::class,'update'])->name('notify_update');
    Route::get('notification/delete/{id}',[notificationController::class,'destroy']);
    
    });

    //*******************************user controlls****************************

    
    Route::get('all_notices',[dashboardUserController::class,'view_notices'])->name('all_notices');
    Route::get('all_events',[dashboardUserController::class,'view_events'])->name('all_events');
    Route::get('all_notifications',[dashboardUserController::class,'view_notifications'])->name('all_notify');
    Route::get('markasdone/{id}',[dashboardUserController::class,'notification_read']);


    /// leaves
    Route::get('leaves',[leaveController::class,'index'])->name('create_leaves');
    Route::post('leaves/store',[leaveController::class,'store'])->name('leave_store');
    Route::get('leaves/edit/{id}',[leaveController::class,'edit']);
    Route::post('leaves/update',[leaveController::class,'update'])->name('leave_update');

    //Tickets
    Route::get('tickets',[ticketControlle::class,'index'])->name('create_tickets');
    Route::post('tickets/store',[ticketControlle::class,'store'])->name('ticket_store');
    Route::get('tickets/edit/{id}',[ticketControlle::class,'edit']);
    Route::post('tickets/update',[ticketControlle::class,'update'])->name('ticket_update');

    //Attendance
    Route::get('start-attendance/',[attendanceController::class,'start_attendance']);
    Route::get('end-attendance/{id}',[attendanceController::class,'ends_attendance']);