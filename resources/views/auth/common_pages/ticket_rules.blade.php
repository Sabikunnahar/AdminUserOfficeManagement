@extends('layouts.user_master')

@section('user_content')
<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
       <div class="iq-sidebar-logo">
          <div class="top-logo">
             <a href="index.html" class="logo">
             <img src="images/logo.png" class="img-fluid" alt="">
             <span>Tickets</span>
             </a>
          </div>
       </div>
       <div class="navbar-breadcrumb">
          <h5 class="mb-0">tickets BOARD</h5>
          <nav aria-label="breadcrumb">
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tickets Board</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tickets Board</li>
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
                <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Tickets Rules</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="mx-auto border border-dark p-5 m-3" style="width: 800px;">
                        <h2 class="text-center pb-5">NOtice Rules </h2>
                        <h4>Dear {{Auth::user()->name}},</h4>
                        <p style="line-height: 3; font-size:17px;">Whenever you assign tasks in an email to someone, those 3Ws are mandatory. If you miss out on any one of them, you’ll increase the chance that you’ll miscommunicate on what needs to be done.</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
