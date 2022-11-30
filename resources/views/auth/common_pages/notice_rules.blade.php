@extends('layouts.user_master')

@section('user_content')
<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
       <div class="iq-sidebar-logo">
          <div class="top-logo">
             <a href="index.html" class="logo">
             <img src="images/logo.png" class="img-fluid" alt="">
             <span>Notice</span>
             </a>
          </div>
       </div>
       <div class="navbar-breadcrumb">
          <h5 class="mb-0">NOtice BOARD</h5>
          <nav aria-label="breadcrumb">
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Notice Board</a></li>
                <li class="breadcrumb-item active" aria-current="page">Notice Board</li>
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
                        <h4 class="card-title">Notice Rules</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="mx-auto border border-dark p-5 m-3" style="width: 800px;">
                        <h2 class="text-center pb-5">NOtice Rules </h2>
                        <h4>Dear {{Auth::user()->name}},</h4>
                        <p style="line-height: 3; font-size:17px;">

                            Please accept this letter as notice that I will be resigning from my job here at Acme Corp. two weeks from today’s date. My final day of work with be August 21.
                            
                            Thank you for the support and the opportunities you have provided me over the course of the last six years. You and our team have created a climate that makes it a pleasure to come to work each morning, and I will miss you all.
                            
                            If I can do anything to help with your transition in finding and training my replacement, please let me know.
                            
                            Sincerely,
                            
                            Kathy Leonard (signature hard copy letter)
                            
                            Kathy Leonard</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
