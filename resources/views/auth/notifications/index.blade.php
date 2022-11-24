@extends('layouts.user_master')

@section('user_content')
<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
       <div class="iq-sidebar-logo">
          <div class="top-logo">
             <a href="index.html" class="logo">
             <img src="images/logo.png" class="img-fluid" alt="">
             <span>Notifications</span>
             </a>
          </div>
       </div>
       <div class="navbar-breadcrumb">
          <h5 class="mb-0">Ntifications</h5>
          <nav aria-label="breadcrumb">
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Notifications</a></li>
                <li class="breadcrumb-item active" aria-current="page">Notification</li>
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
                        <h4 class="card-title">Notifications</h4>
                    </div>
                </div>
                @php
                $notify = App\Models\Notification::orderBy('id','ASC')->get();
                @endphp


                <div class="" style="width:80%; padding:40px 0; margin: 0 auto;">
                    @foreach ($notify as $item)
                    <div class="alert alert-primary w-100 py-4" role="alert">
                        {{ $item->notify_text }}
                        <div class="marks_done"  style="text-align: right; width: 90%;">
                            @if ($item->status == 0)
                                <a href="{{url('markasdone', $item->id)}}" class="bg-white" style="padding: 10px; width: 90%;"> Mark  Done</a>
                            @else
                            <a href="#" class="badge badge-success " style="padding: 10px;">Already Readed</a>
                            @endif
                            
                        </div>

                      </div>
                    @endforeach

                </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
