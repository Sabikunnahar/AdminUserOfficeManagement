<div class="wrapper">
    <!-- Sidebar  -->
      <div class="iq-sidebar">
         <img src="" class="img-fluid" alt="">
         <div style="width: 100%; text-align:center;">
            <h6>Name: {{ Auth::guard('admin')->user()->name }}</h6>
            <h6>Admin Code: E-0{{ Auth::guard('admin')->user()->id }}</h6>
         </div>
          <div class="iq-sidebar-logo d-flex justify-content-between">
             <a href="{{ url('admin/dashboard') }}">

             <span>Dashboard</span>
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
                   <li class="iq-menu-title"><i class="ri-separator"></i><span>Main</span></li>

                   {{-- <li class="@yield('navbar')" >
                      <a href="#dashboard" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Navbar</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                      <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                         <li class="@yield('create_navbar')" ><a href="{{ route('main_navbar') }}">Main Navbar</a></li>
                      </ul>
                   </li> --}}

                   {{-- <li class="@yield('navbar')" >
                     <a href="#stuffs" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Stuffes</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="stuffs" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('users')" ><a href="#">All users</a></li>
                     </ul>
                  </li> --}}

                  <li class="@yield('notice_board')" >
                     <a href="#notice_board" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Notice Board</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="notice_board" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('create')" ><a href="{{ route('notice_board') }}">Create</a></li>
                     </ul>
                  </li>

                  <li class="@yield('event_create')" >
                     <a href="#event_create" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Tickets</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="event_create" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('create')" ><a href="{{ route('view_tickets') }}">Create</a></li>
                     </ul>
                  </li>
                  <li class="@yield('admin_leave')" >
                     <a href="#admin_leave" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>All Leaves</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="admin_leave" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('create')" ><a href="{{ route('admin_create_leaves') }}">Manage</a></li>
                     </ul>
                  </li>

                  <li class="@yield('event_create')" >
                     <a href="#event_create" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Events</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="event_create" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('create')" ><a href="{{ route('event_create') }}">Create</a></li>
                     </ul>
                  </li>

                  <li class="@yield('notification')" >
                     <a href="#notification" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Notificatios</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="notification" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('create')" ><a href="{{ route('notify') }}">Manage</a></li>
                     </ul>
                  </li>

                  <li class="@yield('all_users')" >
                     <a href="#all_users" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-user-line"></i><span>All Users</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     
                     <ul id="all_users" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('view')" ><a href="{{route('create_users')}}">Create User</a></li>
                     </ul>
                     <ul id="all_users" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('view')" ><a href="{{ route('all_users') }}">View User</a></li>
                     </ul>
                  </li>
                   <li>
                      <a href="#user-info" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-user-line"></i><span>Profile</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                      <ul id="user-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                         {{-- <li><a href="profile.html">Admin Profile</a></li> --}}
                         <li><a href="{{ route('admin_profile') }}">Admin Profile</a></li>
                         <li><a href="{{ route('profile_settings') }}">Admin Profile Edit</a></li>
                         {{-- <li><a href="{{ route('admin_profile') }}">User List</a></li> --}}
                      </ul>
                   </li>
             </nav>
             <div class="p-3"></div>
          </div>
       </div>
  </div>
