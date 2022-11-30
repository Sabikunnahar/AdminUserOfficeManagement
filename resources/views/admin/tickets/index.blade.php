@extends('layouts.admin_master')
@section('create_tickets')
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
          <h5 class="mb-0">Craete Tickets</h5>
          <nav aria-label="breadcrumb">
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tickets</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tickets</li>
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
                        <form class="form-horizontal" action="{{ route('admin_ticket_store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email">Ticek Description</label>
                                <textarea class="form-control" name="ticket_des" value="{{ old('ticket_des') }}" rows="2" placeholder="Please Enter Description Here"></textarea>
                                @error('ticket_des')
                                <span class="invalid-feedback" role="alert"></span>
                                <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>

                            @php
                            $users = App\Models\User::orderBy('id','ASC')->get();
                            @endphp

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Assign The ticket To</label>
                                
                                    <select  name="ticket_assigned" value="{{ old('ticket_assigned') }}">
                                        <option name="name">None</option>
                                        @foreach ($users as $item)
                                            <option name="name">{{ $item->name }}</option>
                                        @endforeach
                                </select>
                                    @error('ticket_assigned')
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
