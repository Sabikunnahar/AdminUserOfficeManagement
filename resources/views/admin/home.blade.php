@extends('layouts.admin_master')

@section('admin_content')
 <!-- Right Sidebar Panel Start-->
 <div class="right-sidebar-mini">
    <div class="right-sidebar-toggle">
       <i class="ri-arrow-left-line side-left-icon"></i>
       <i class="ri-arrow-right-line side-right-icon"></i>
    </div>
    <div class="right-sidebar-panel p-0">

             <div class="iq-card shadow-none">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h6 class="card-title">Active Users</h6>
                   </div>
                   <div class="iq-card-header-toolbar d-flex align-items-center">
                      <div class="dropdown">
                         <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" >
                         <i class="ri-more-2-fill"></i>
                         </span>
                         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="iq-card-body">
                   <div class="media align-items-center mb-4">
                      <div class="iq-profile-avatar status-online">
                         <img class="rounded-circle avatar-60" src="images/user/01.jpg" alt="">
                      </div>
                      <div class="media-body ml-3">
                         <h6 class="mb-0"><a href="#">Anna Sthesia</a></h6>
                         <p class="mb-0">Admin</p>
                      </div>
                   </div>
                   <div class="media align-items-center mb-4">
                      <div class="iq-profile-avatar status-online">
                         <img class="rounded-circle avatar-60" src="images/user/02.jpg" alt="">
                      </div>
                      <div class="media-body ml-3">
                         <h6 class="mb-0"><a href="#">Paul Molive</a></h6>
                         <p class="mb-0">Admin</p>
                      </div>
                   </div>
                   <div class="media align-items-center mb-4">
                      <div class="iq-profile-avatar status-online">
                         <img class="rounded-circle avatar-60" src="images/user/03.jpg" alt="">
                      </div>
                      <div class="media-body ml-3">
                         <h6 class="mb-0"><a href="#">Anna Mull</a></h6>
                         <p class="mb-0">Admin</p>
                      </div>
                   </div>
                   <div class="media align-items-center mb-4">
                      <div class="iq-profile-avatar status-online">
                         <img class="rounded-circle avatar-60" src="images/user/04.jpg" alt="">
                      </div>
                      <div class="media-body ml-3">
                         <h6 class="mb-0"><a href="#">Paige Turner</a></h6>
                         <p class="mb-0">Admin</p>
                      </div>
                   </div>
                   <div class="media align-items-center mb-4">
                      <div class="iq-profile-avatar status-online">
                         <img class="rounded-circle avatar-60" src="images/user/01.jpg" alt="">
                      </div>
                      <div class="media-body ml-3">
                         <h6 class="mb-0"><a href="#">Bob Frapples</a></h6>
                         <p class="mb-0">Admin</p>
                      </div>
                   </div>
                   <div class="media align-items-center mb-4">
                      <div class="iq-profile-avatar status-online">
                         <img class="rounded-circle avatar-60" src="images/user/02.jpg" alt="">
                      </div>
                      <div class="media-body ml-3">
                         <h6 class="mb-0"><a href="#">Barb Ackue</a></h6>
                         <p class="mb-0">Admin</p>
                      </div>
                   </div>
                   <div class="media align-items-center mb-4">
                      <div class="iq-profile-avatar status-online">
                         <img class="rounded-circle avatar-60" src="images/user/03.jpg" alt="">
                      </div>
                      <div class="media-body ml-3">
                         <h6 class="mb-0"><a href="#">Greta Life</a></h6>
                         <p class="mb-0">Admin</p>
                      </div>
                   </div>
                   <div class="media align-items-center mb-4">
                      <div class="iq-profile-avatar status-away">
                         <img class="rounded-circle avatar-60" src="images/user/04.jpg" alt="">
                      </div>
                      <div class="media-body ml-3">
                         <h6 class="mb-0"><a href="#">Ira Membrit</a></h6>
                         <p class="mb-0">Admin</p>
                      </div>
                   </div>
                   <div class="media align-items-center mb-4">
                      <div class="iq-profile-avatar status-away">
                         <img class="rounded-circle avatar-60" src="images/user/01.jpg" alt="">
                      </div>
                      <div class="media-body ml-3">
                         <h6 class="mb-0"><a href="#">Pete Sariya</a></h6>
                         <p class="mb-0">Admin</p>
                      </div>
                   </div>
                   <div class="media align-items-center">
                      <div class="iq-profile-avatar">
                         <img class="rounded-circle avatar-60" src="images/user/02.jpg" alt="">
                      </div>
                      <div class="media-body ml-3">
                         <h6 class="mb-0"><a href="#">Monty Carlo</a></h6>
                         <p class="mb-0">Admin</p>
                      </div>
                   </div>
                </div>
             </div>

    </div>
 </div>
    <!-- Right Sidebar Panel End-->
    <div id="content-page" class="content-page">
       <div class="container-fluid">
          <div class="row row-eq-height">
             <!-- Content Top Banner Start -->
             <div class="col-lg-4 col-md-12">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                   <div class="iq-card-body">
                      <div class="row">
                         <div class="col">
                            <h5 class="card-title text-uppercase text-secondary mb-0 d-block">Live Users</h5>
                            {{-- <h2 class="mb-0 d-block">350</h2> --}}
                         </div>
                         <div class="col-auto">
                            <div class="icon iq-icon-box rounded-circle iq-bg-primary rounded-circle">
                               <i class="ri-add-box-line"></i>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div id="chart-9"></div>
                </div>
             </div>
             {{-- <div class="col-lg-2 col-md-6">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height wow zoomIn">
                   <div class="iq-card-body">
                      <div class="row">
                         <div class="col-lg-12 mb-2 d-flex justify-content-between">
                            <div class="icon iq-icon-box rounded-circle iq-bg-warning rounded-circle">
                               <i class="ri-account-box-line"></i>
                            </div>
                         </div>
                         <div class="col-lg-12 mt-3">
                            <h6 class="card-title text-uppercase text-secondary mb-0">USERS</h6>
                            <span class="h2 text-dark mb-0 counter">850,789</span>
                         </div>
                      </div>
                      <p class="mb-0 text-muted mt-3">
                         <span class="text-success mr-2"><i class="ri-arrow-up-fill"></i> 3.48%</span>
                      </p>
                   </div>
                </div>
             </div> --}}
             {{-- <div class="col-lg-2 col-md-6">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height wow zoomIn">
                   <div class="iq-card-body">
                      <div class="row">
                         <div class="col-lg-12 mb-2 d-flex justify-content-between">
                            <div class="icon iq-icon-box rounded-circle iq-bg-danger rounded-circle">
                               <i class="ri-account-box-line"></i>
                            </div>
                         </div>
                         <div class="col-lg-12 mt-3">
                            <h6 class="card-title text-uppercase text-secondary mb-0">SESSIONS</h6>
                            <span class="h2 text-dark mb-0 counter">810,084</span>
                         </div>
                      </div>
                      <p class="mb-0 text-muted mt-3">
                         <span class="text-danger mr-2"><i class="ri-arrow-down-fill"></i> 10%</span>
                      </p>
                   </div>
                </div>
             </div> --}}
             {{-- <div class="col-lg-2 col-md-6">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height wow zoomIn">
                   <div class="iq-card-body">
                      <div class="row">
                         <div class="col-lg-12 mb-2 d-flex justify-content-between">
                            <div class="icon iq-icon-box rounded-circle iq-bg-success rounded-circle">
                               <i class="ri-timer-2-line"></i>
                            </div>
                         </div>
                         <div class="col-lg-12 mt-3">
                            <h6 class="card-title text-uppercase text-secondary mb-0">BOUNCE RATE</h6>
                            <span class="h2 text-dark mb-0 counter">47.6</span>
                         </div>
                      </div>
                      <p class="mb-0 text-muted mt-3">
                         <span class="text-success mr-2"><i class="ri-arrow-up-fill"></i> 6.48%</span>
                      </p>
                   </div>
                </div>
             </div> --}}
             {{-- <div class="col-lg-2 col-md-6">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height wow zoomIn">
                   <div class="iq-card-body">
                      <div class="row">
                         <div class="col-lg-12 mb-2 d-flex justify-content-between">
                            <div class="icon iq-icon-box rounded-circle iq-bg-primary rounded-circle">
                               <i class="ri-timer-2-line"></i>
                            </div>
                         </div>
                         <div class="col-lg-12 mt-3">
                            <h6 class="card-title text-uppercase text-secondary mb-0">DURATION</h6>
                            <span class="h2 text-dark mb-0 counter">3.25</span>
                         </div>
                      </div>
                      <p class="mb-0 text-muted mt-3">
                         <span class="text-success mr-2"><i class="ri-arrow-up-fill"></i> 5.48%</span>
                      </p>
                   </div>
                </div>
             </div> --}}
          </div>

       </div>
    </div>
 </div>
 <!-- Wrapper END -->
@endsection
