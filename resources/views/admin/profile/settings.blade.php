@extends('layouts.admin_master')

@section('admin_content')
<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
       <div class="iq-sidebar-logo">
          <div class="top-logo">
             <a href="index.html" class="logo">
             <img src="images/logo.png" class="img-fluid" alt="">
             <span>Sofbox</span>
             </a>
          </div>
       </div>
       <div class="navbar-breadcrumb">
          <h5 class="mb-0">PROFILE SETTINGS</h5>
          <nav aria-label="breadcrumb">
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">profile settings</li>
             </ul>
          </nav>
       </div>
       @include('admin.topbar.menu')
    </div>
</div>
 <!-- Page Content  -->
 <div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-lg-12">
             <div class="iq-card">
                <div class="iq-card-body p-0">
                   <div class="iq-edit-list">
                      <ul class="iq-edit-profile d-flex nav nav-pills">
                         <li class="col-md-3 p-0">
                            <a class="nav-link active" data-toggle="pill" href="#personal-information">
                               Personal Information
                            </a>
                         </li>
                         {{-- <li class="col-md-3 p-0">
                            <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                               Change Password
                            </a>
                         </li> --}}
                      </ul>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-lg-12">
             <div class="iq-edit-list-data">
                <div class="tab-content">
                   <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                       <div class="iq-card">
                         <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                               <h4 class="card-title">Personal Information</h4>
                            </div>
                         </div>
                         <div class="iq-card-body">
                            <form action="{{ route('update_profile') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="old_img" value="{{ $admin->image }}">
                               <div class="form-group row align-items-center">
                                  <div class="col-md-12 mb-5">
                                     <div class="profile-img-edit">
                                        <img class="profile-pic img-fluid" src="{{ asset($admin->image) }}" alt="profile-pic">
                                        <div class="p-image">
                                          <i class="ri-pencil-line upload-button"></i>
                                          <input class="file-upload" name="image" type="file" accept="image/*"/>
                                       </div>
                                     </div>
                                  </div>
                               </div>
                               <div class=" row align-items-center">
                                  <div class="form-group col-sm-4">
                                     <label for="fname">Name:</label>
                                     <input type="text" class="form-control" name="name" value="{{ $admin->name }}">
                                     @error('name')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                  </div>
                                  <div class="form-group col-sm-4">
                                     <label for="lname">Email:</label>
                                     <input type="text" class="form-control" name="email" value="{{ $admin->email }}">
                                     @error('email')
                                     <span class="invalid-feedback" role="alert"></span>
                                     <strong class="text-danger">{{ $message }}</strong>
                                     @enderror
                                  </div>
                                  <div class="form-group col-sm-4">
                                     <label for="uname">Phone:</label>
                                     <input type="text" class="form-control"  name="phone" value="{{ $admin->phone }}">
                                     @error('phone')
                                     <span class="invalid-feedback" role="alert"></span>
                                     <strong class="text-danger">{{ $message }}</strong>
                                     @enderror
                                  </div>
                                  <div class="form-group col-sm-12">
                                     <label>Address:</label>
                                     <textarea class="form-control" name="address" rows="5">{{ $admin->address }}</textarea>
                                     @error('address')
                                     <span class="invalid-feedback" role="alert"></span>
                                     <strong class="text-danger">{{ $message }}</strong>
                                     @enderror

                                  </div>
                               </div>
                               <button type="submit" class="btn btn-success mr-2" style="font-size: 18px">Update Profile</button>
                            </form>
                         </div>
                      </div>
                   </div>
                   <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                       <div class="iq-card">
                         <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                               <h4 class="card-title">Change Password</h4>
                            </div>
                         </div>
                         <div class="iq-card-body">
                            <form action="{{ route('profile_password_update') }}" method="POST">
                                @csrf
                               <div class="form-group">
                                  <label for="cpass">Current Password:</label>
                                  <a href="javascripe:void();" class="float-right">Forgot Password</a>
                                     <input type="Password" class="form-control" name="old_password" placeholder="Current Password" id="cpass" value="">
                                     @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                  </div>
                               <div class="form-group">
                                  <label for="npass">New Password:</label>
                                  <input type="Password" class="form-control" name="new_password" placeholder="New Password" value="">
                                  @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                               <div class="form-group">
                                  <label for="vpass">Confirm Password:</label>
                                     <input type="Password" class="form-control" name="confirmation_password" placeholder="Re-type Password">
                                     @error('confirmation_password')
                                     <span class="text-danger">{{ $message }}</span>
                                     @enderror
                               </div>
                               <button type="submit" class="btn btn-primary mr-2" style="font-size: 18px">Update Password</button>
                            </form>
                         </div>
                      </div>
                   </div>

                </div>
             </div>
          </div>
       </div>
    </div>
 </div>


@endsection
