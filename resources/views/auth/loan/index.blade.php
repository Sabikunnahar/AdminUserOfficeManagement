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
          <h5 class="mb-0">Loan Application</h5>
          <nav aria-label="breadcrumb">
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Loan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Loan</li>
             </ul>
          </nav>
       </div>
       @include('auth.topbar.menu')
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
                        <form class="form-horizontal" action="{{ route('loan_store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email">Loan Application Reason</label>
                                <textarea class="form-control" name="loan_reason" value="{{ old('loan_reason') }}" rows="2" placeholder="Event Name Here"></textarea>
                                @error('loan_reason')
                                <span class="invalid-feedback" role="alert"></span>
                                <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Loan Amount</label>
                                <input type="text" class="form-control" name="loan_amount" value="{{ old('loan_amount') }}" placeholder="Contact English">
                                @error('loan_amount')
                                <span class="invalid-feedback" role="alert"></span>
                                <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Loan Needed Amount</label>
                                    <input type="date" class="form-control" name="loan_date" value="{{ old('loan_date') }}" placeholder="Faculties English">
                                    @error('loan_date')
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
