@extends('layouts.user_master')
@section('benefit')
    active show-sub
@endsection
@section('create')
    active
@endsection
@section('user_content')
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
          <h5 class="mb-0">Travel Information EDIT</h5>
          <nav aria-label="breadcrumb">
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Travel Edit</a></li>
                <li class="breadcrumb-item active" aria-current="page">Travel Edit</li>
             </ul>
          </nav>
       </div>
       @include('auth.topbar.menu')
    </div>
</div>
<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
        <div class="col-lg-12">
      </div>
          <div class="col-sm-12 col-lg-12">
             <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title">Edit</h4>
                   </div>
                </div>
                <div class="iq-card-body">
                   <form class="form-horizontal" action="{{ route('travel_update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $edit->id }}">


                    <div class="row">
                     <div class="col-lg-12">
                        <div class="form-group">
                           <label for="">Traveling Place Name:</label>
                           <input type="text" class="form-control" name="travel_place" value="{{ $edit->travel_place }}">
                           @error('travel_place')
                           <span class="invalid-feedback" role="alert"></span>
                           <strong class="text-danger">{{ $message }}</strong>
                           @enderror
                       </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group">
                           <label for="email">Travel Start date:</label>
                              <input type="date" class="form-control" name="travel_start_date" value="{{ $edit->travel_start_date }}">
                              @error('travel_start_date')
                              <span class="invalid-feedback" role="alert"></span>
                              <strong class="text-danger">{{ $message }}</strong>
                              @enderror
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group">
                           <label for="email">Travel End date:</label>
                              <input type="date" class="form-control" name="travel_end_date" value="{{ $edit->travel_end_date }}">
                              @error('travel_end_date')
                              <span class="invalid-feedback" role="alert"></span>
                              <strong class="text-danger">{{ $message }}</strong>
                              @enderror
                        </div>
                     </div>
                    </div>
                      <div class="form-group">
                            <button type="submit" class="btn btn-success" style="font-size: 18px">update</button>
                      </div>
                   </form>
                </div>
             </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
