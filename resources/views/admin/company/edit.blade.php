@extends('layouts.admin_master')
@section('event_create')
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
          <h5 class="mb-0">Events EDIT</h5>
          <nav aria-label="breadcrumb">
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Events Edit</a></li>
                <li class="breadcrumb-item active" aria-current="page">Events Edit</li>
             </ul>
          </nav>
       </div>
       @include('admin.topbar.menu')
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
                   <form class="form-horizontal" action="{{ route('company_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $edit->id }}">
                    <input type="hidden" name="old_img" value="{{ $edit->company_logo }}">
                     <div class="col-lg-12">
                        <div class="form-group">
                           <label for="email">Company Name</label>
                              <input type="text" class="form-control" name="company_name" value="{{ $edit->company_name }}">
                              @error('company_name')
                              <span class="invalid-feedback" role="alert"></span>
                              <strong class="text-danger">{{ $message }}</strong>
                              @enderror
                        </div>
                    </div>

                    <div class="col-lg-12">
                     <div class="form-group">
                        <label for="email">Company Name</label>
                           <input type="file" class="form-control" name="company_logo" value="{{ $edit->company_logo }}">
                           @error('company_logo')
                           <span class="invalid-feedback" role="alert"></span>
                           <strong class="text-danger">{{ $message }}</strong>
                           @enderror
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
