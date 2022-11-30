@extends('layouts.user_master')
@section('create_tickets')
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
          <h5 class="mb-0">Personal Information</h5>
          <nav aria-label="breadcrumb">
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">personal</a></li>
                <li class="breadcrumb-item active" aria-current="page">infos</li>
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
                <div class="iq-card-header d-flex justify-content-between text-center">

                        <div class="mx-auto py-5" style="width: 300px;">
                            <img src="{{ asset('admin') }}/images/user-5.jpg" alt="">
                            <h5 class="py-4">Employee Name: {{Auth::user()->name}}</h5>
                            <h5>Email Address: {{Auth::user()->email}}</h5>
                        </div>
                </div>
                <div class="iq-card-body">
                    <form class="form-horizontal" action="" method="POST">
                        @csrf
                     <!-- Tab Area Start Here -->
                    <section>
                        <div class="col-md-12 col-sm-12 mt-3">
                            <div id="myDIV" class="tab-list">
                                <ul class="nav our-item">
                                    <li>
                                    <a href="#our-tab-content1" data-toggle="tab" class="tab_active tab_butttons">Personal</a>
                                    </li>
                                    <li>
                                    <a href="#our-tab-content2" data-toggle="tab" class="tab_butttons" >Contact</a>
                                    </li>
                                    <li>
                                    <a href="#our-tab-content3" data-toggle="tab" class="tab_butttons" >Educations & Skills</a>
                                    </li>
                                    <li>
                                    <a href="#our-tab-content4" data-toggle="tab" class="tab_butttons" >Work Informations</a>
                                    </li>
                                    <li>
                                    <a href="#our-tab-content5" data-toggle="tab" class="tab_butttons" >Documentations</a>
                                    </li>
                                </ul>
                            </div> 
                            <!-- tab-list -->
                            @foreach ($info as $item)
                            <div class="tab-content">
                                    <div class="tab-pane fade show active" id="our-tab-content1">
                                        <div class="tab_desk_1">
                                        <div class="container-fluid">
                                            <div class="iq-card-body">
                                                <div class="mt-5 mx-auto border border-dark text-left py-3  pl-5" style="width: 785px;">
                                                    <p style="font-size: 18px;">Fothers Name:  <span  class="font-weight-bold">{{$item->fathers_name}}</span></p>
                                                    <p style="font-size: 18px;">Mothers Name:  <span  class="font-weight-bold">{{$item->mothers_name}}</span></p>
                                                    <p style="font-size: 18px;">Date of Birth:  <span  class="font-weight-bold">{{$item->date_of_birth}}</span></p>
                                                    <p style="font-size: 18px;">Age:  <span  class="font-weight-bold">{{$item->age}}</span></p>
                                                    <p style="font-size: 18px;">Gender:  <span  class="font-weight-bold">{{$item->gender}}</span></p>
                                                    <p style="font-size: 18px;">Matital Status:  <span  class="font-weight-bold">{{$item->marital_status}}</span></p>
                                                    <p style="font-size: 18px;">Blood Group:  <span  class="font-weight-bold">{{$item->blood_group}}</span></p>
                                                    <p style="font-size: 18px;">Place of Birth:  <span  class="font-weight-bold">{{$item->place_of_birth}}</span></p>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    </div> 
                                    <!--end tab 1 -->
                                    <div class="tab-pane fade" id="our-tab-content2">
                                        <div class="container-fluid">
                                            <div class="iq-card-body">
                                                <div class="mt-5 mx-auto border border-dark text-left py-3  pl-5" style="width: 785px;">
                                                    <p style="font-size: 18px;">Personal Phone Number:   <span  class="font-weight-bold">{{$item->phone}}</span></p>
                                                    <p style="font-size: 18px;">Home Address:  <span  class="font-weight-bold">{{$item->addresss}}</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <!-- end tab 2-->
                                    <div class="tab-pane fade" data-toggle="collapse" id="our-tab-content3">
                                        <div class="container-fluid">
                                            <div class="iq-card-body">
                                                <div class="mt-5 mx-auto border border-dark text-left py-3  pl-5" style="width: 785px;">
                                                    <p style="font-size: 18px;">School Name:  <span  class="font-weight-bold">{{$item->school}}</span></p>
                                                    <p style="font-size: 18px;">School CGPA:  <span  class="font-weight-bold">{{$item->school_cgpa}}</span></p>
                                                    <p style="font-size: 18px;">Collage Name:  <span  class="font-weight-bold">{{$item->collage}}</span></p>
                                                    <p style="font-size: 18px;">Collage CGPA:  <span  class="font-weight-bold">{{$item->collage_cgpa}}</span></p>
                                                    <p style="font-size: 18px;">University Name:  <span  class="font-weight-bold">{{$item->university}}</span></p>
                                                    <p style="font-size: 18px;">University CGPA:  <span  class="font-weight-bold">{{$item->univeristy_cgpa}}</span></p>
 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end tab 3-->
                                    <div class="tab-pane fade" id="our-tab-content4">
                                        <div class="container-fluid">
                                            <div class="iq-card-body">
                                                <div class="mt-5 mx-auto border border-dark text-left py-3  pl-5" style="width: 785px;">
                                                    <p style="font-size: 18px;">Company Name:  <span  class="font-weight-bold">{{$item->company_name}}</span></p>
                                                    <p style="font-size: 18px;">Company Address:  <span  class="font-weight-bold">{{$item->company_addresss}}</span></p>
                                                    <p style="font-size: 18px;">Job Title:  <span  class="font-weight-bold">{{$item->job_title}}</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <!-- end tab 4-->
                                    <div class="tab-pane fade" id="our-tab-content5">
                                        <div class="container-fluid">
                                            <div class="iq-card-body">
                                                <div class="mt-5 mx-auto border border-dark text-left py-3  pl-5" style="width: 785px;">
                                                    <p style="font-size: 18px;">Document Title:  <span  class="font-weight-bold">{{$item->document_name}}</span></p>
                                                    <p style="font-size: 18px;">Company Address:  </p><span  class="font-weight-bold">{{$item->document_img}}</span>
                                                </div>
                                                <div class="row justify-content-between mt-3">
                                                    <div id="user-list-page-info" class="col-md-6">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <!-- end tab 5-->
                            </div>
                            <div class="btn btn-success">
                                <a class="text-white" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="{{ url('info/edit/'.$item->id) }}">Click To Edit<i class="ri-pencil-line"></i></a>
                            </div>
                            @endforeach
                        </div>
                    </section>
                    <!-- Tabe Area End Here -->
                    </form>
                </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
<script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("myDIV");
    var btns = header.getElementsByClassName("tab_butttons");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("tab_active");
      current[0].className = current[0].className.replace(" tab_active", "");
      this.className += " tab_active";
      });
    }
    </script>