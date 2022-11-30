
<nav class="navbar navbar-expand-lg navbar-light p-0">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="ri-menu-3-line"></i>
    </button>
    <div class="iq-menu-bt align-self-center">
       <div class="wrapper-menu">
          <div class="line-menu half start"></div>
          <div class="line-menu"></div>
          <div class="line-menu half end"></div>
       </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto navbar-list">
           <li class="nav-item">
              <a href="#" class="search-toggle iq-waves-effect">
              </a>
              <div class="iq-sub-dropdown">
                 <div class="iq-card shadow-none m-0">
                    <div class="iq-card-body p-0 ">
                    </div>
                 </div>
              </div>
           </li>
           <li class="nav-item iq-full-screen"><a href="#" class="iq-waves-effect" id="btnFullscreen"><i class="ri-fullscreen-line"></i></a></li>
        </ul>
     </div>
@php
    $notification = App\Models\Notification::where('status', 0)->count(); 
@endphp


     <a class="btn btn-danger text-capitalize" href="{{ route('all_notify') }}">Notifications 
      <span class="notification">{{$notification}}</span></a>
     <a class="btn btn-success text-capitalize ml-3" href="{{url('/start-attendance')}}">Start the attendance time</a>
     <a class="btn btn-secondary text-capitalize ml-3 mr-3" href="{{url('/end-attendance', Auth::user()->id)}}">end the attendance time</a>
    <ul class="navbar-list">
       <li>
          <a href="#" class="search-toggle iq-waves-effect bg-primary text-white">
              <img src="{{ asset('/admin') }}/images/user/logo.png" class="img-fluid rounded" alt="Profile"></a>

          <div class="iq-sub-dropdown iq-user-dropdown">
             <div class="iq-card shadow-none m-0">
                <div class="iq-card-body p-0 ">
                   <div class="bg-primary p-3">
                      <h5 class="mb-0 text-white line-height">{{ Auth::user()->name }}</h5>
                      <span class="text-white font-size-12">Available</span>
                   </div>
                   <a href="{{ route('admin_profile') }}" class="iq-sub-card iq-bg-primary-hover">
                      <div class="media align-items-center">
                         <div class="rounded iq-card-icon iq-bg-primary">
                            <i class="ri-file-user-line"></i>
                         </div>
                         <div class="media-body ml-3">
                            <h6 class="mb-0 ">My Profile</h6>
                            <p class="mb-0 font-size-12">View personal profile details.</p>
                         </div>
                      </div>
                   </a>
                   <a href="{{ route('profile_settings') }}" class="iq-sub-card iq-bg-primary-success-hover">
                      <div class="media align-items-center">
                         <div class="rounded iq-card-icon iq-bg-success">
                            <i class="ri-profile-line"></i>
                         </div>
                         <div class="media-body ml-3">
                            <h6 class="mb-0 ">Settings</h6>
                            <p class="mb-0 font-size-12">Modify your personal details.</p>
                         </div>
                      </div>
                   </a>
                   <div class="d-inline-block w-100 text-center p-3">
                       <form method="POST" action="{{ route('logout') }}">
                        @csrf
                      <a class="iq-bg-danger iq-sign-btn" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                             this.closest('form').submit();" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                             </form>
                   </div>
                </div>
             </div>
          </div>
       </li>
    </ul>
 </nav>
