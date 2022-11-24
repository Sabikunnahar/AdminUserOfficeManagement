<div class="wrapper">
    <!-- Sidebar  -->
      <div class="iq-sidebar">
         <img src="{{ asset('/admin') }}/images/user/logo.png" class="img-fluid">
         <div style="width: 100%; text-align:center;">
            <h6>Name: {{ Auth::user()->name }}</h6>
            <h6>Employee Code: E-0{{ Auth::user()->id }}</h6>
         </div>
          <div class="iq-sidebar-logo d-flex justify-content-between">
             <a href="{{ url('/dashboard') }}">
             <span style="">Dashboard</span>
             </a>
             <div class="iq-menu-bt align-self-center">
                <div class="wrapper-menu">
                   <div class="line-menu half start"></div>
                   <div class="line-menu"></div>
                   <div class="line-menu half end"></div>
                </div>
             </div>
          </div>
          <div id="sidebar-scrollbar">
             <nav class="iq-sidebar-menu">
                <ul id="iq-sidebar-toggle" class="iq-menu">
                   <li class="iq-menu-title"><i class="ri-separator"></i><span>Menus</span></li>

                  <li class="@yield('notice_create')" >
                     <a href="#notice_create" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Notice Board</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="notice_create" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('create')" ><a href="{{ route('all_notices') }}">View</a></li>
                     </ul>
                  </li>
                  <li class="@yield('event_create')" >
                     <a href="#event_create" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Events Board</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="event_create" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('create')" ><a href="{{ route('all_events') }}">View</a></li>
                     </ul>
                  </li>
                  
                  <li class="@yield('create_tickets')" >
                     <a href="#create_tickets" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Create Tickets</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="create_tickets" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('create')" ><a href="{{ route('create_tickets') }}">Create</a></li>
                     </ul>
                  </li>

                  <li class="@yield('tickets')" >
                     <a href="#tickets" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Your Tickets</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="tickets" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('tickets')" ><a href="{{ route('create_tickets') }}">View</a></li>
                     </ul>
                  </li>

                  <li class="@yield('leave')" >
                     <a href="#leave" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Apply For Leave</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="leave" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('leave')" ><a href="{{ route('create_leaves') }}">Create</a></li>
                     </ul>
                  </li>

                  <li class="@yield('notify')" >
                     <a href="#notify" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Notification</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="notify" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('tickets')" ><a href="{{ route('all_notify') }}">View</a></li>
                     </ul>
                  </li>
             </nav>
             <div class="p-3"></div>
          </div>
       </div>
  </div>
