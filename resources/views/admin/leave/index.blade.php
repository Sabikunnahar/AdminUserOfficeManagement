@extends('layouts.admin_master')
@section('admin_leave')
    active show-sub
@endsection
@section('create')
    active
@endsection
@section('admin_content')
<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
       <div class="iq-sidebar-logo">
          <div class="top-logo">
             <a href="index.html" class="logo">
             <img src="images/logo.png" class="img-fluid" alt="">
             <span>Office Management</span>
             </a>
          </div>
       </div>
       <div class="navbar-breadcrumb">
          <h5 class="mb-0">Leave Application</h5>
          <nav aria-label="breadcrumb">
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Leaves</a></li>
                <li class="breadcrumb-item active" aria-current="page">Leaves</li>
             </ul>
          </nav>
       </div>
       @include('admin.topbar.menu')
    </div>
</div>
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Create</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <form class="form-horizontal" action="{{ route('admin_leave_store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email">Leaves Application</label>
                                <textarea class="form-control" name="leave_reason" value="{{ old('leave_reason') }}" rows="2" placeholder="Event Name Here"></textarea>
                                @error('leave_reason')
                                <span class="invalid-feedback" role="alert"></span>
                                <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">From Date</label>
                                    <input type="date" class="form-control" name="leave_start_date" value="{{ old('leave_start_date') }}">
                                    @error('leave_start_date')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">To Date</label>
                                    <input type="date" class="form-control" name="leave_end_date" value="{{ old('leave_end_date') }}">
                                    @error('leave_end_date')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                   <label for="">Leave Type:</label><br/>
                                   <select style="width: 250px;"  name="leave_type" value="{{ old('leave_type') }}">
                                    <option label="Choose">
                                        <option name="name">Sick</option>
                                        <option name="name">Casual</option>
                                        <option name="name">Others</option>
                                    </option>
                                   </select>
                                   @error('leave_type')
                                   <span class="invalid-feedback" role="alert"></span>
                                   <strong class="text-danger">{{ $message }}</strong>
                                   @enderror
                               </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success" style="font-size: 18px">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
