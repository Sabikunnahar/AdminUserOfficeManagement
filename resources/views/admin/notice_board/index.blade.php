@extends('layouts.admin_master')
@section('notice_board')
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
             <span>NIPSOM</span>
             </a>
          </div>
       </div>
       <div class="navbar-breadcrumb">
          <h5 class="mb-0">NOTICE BOARD</h5>
          <nav aria-label="breadcrumb">
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Notice Board</a></li>
                <li class="breadcrumb-item active" aria-current="page">Notice Board</li>
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
                            <h4 class="card-title">Create New Notices for all users:</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <form class="form-horizontal" action="{{ route('notice_board_store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email">Notice Title:</label>
                                <textarea class="form-control" name="notice_board" rows="2" placeholder="notice board"></textarea>
                                @error('notice_board')
                                <span class="invalid-feedback" role="alert"></span>
                                <strong class="text-danger">{{ $message }}</strong>
                                @enderror
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
