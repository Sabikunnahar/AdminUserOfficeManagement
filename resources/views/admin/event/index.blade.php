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
          <h5 class="mb-0">Events</h5>
          <nav aria-label="breadcrumb">
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Events</a></li>
                <li class="breadcrumb-item active" aria-current="page">Events</li>
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
                            <h4 class="card-title">Create New Events</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <form class="form-horizontal" action="{{ route('event_store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email">Event Name:</label>
                                <textarea class="form-control" name="events" rows="2" placeholder="Event Name Here"></textarea>
                                @error('events')
                                <span class="invalid-feedback" role="alert"></span>
                                <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Event Date:</label>
                                    <input type="date" class="form-control" name="event_time" value="{{ old('event_time') }}" placeholder="Faculties English">
                                    @error('event_time')
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
