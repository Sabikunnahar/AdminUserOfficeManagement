<div class="wrapper">
    <!-- Sidebar  -->
      <div class="iq-sidebar">
         <img src="{{ asset('/admin') }}/images/user/logo.png" class="img-fluid">
         <div style="width: 100%; text-align:center;">
            <h6>Name: {{ Auth::user()->name }}</h6>
            <h6>Employee Code: AD-0{{ Auth::user()->id }}</h6>
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
                  {{-- company start --}}
                  <li class="@yield('company')" >
                     <a href="#company" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="fas fa-exclamation-triangle"></i><span>Company Name & Logo</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="company" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('create')" ><a href="{{ route('company_create') }}"><i class="fas fa-angle-right"></i>Create New</a></li>
                        <li class="@yield('create')" ><a href="{{ route('company_create') }}"><i class="fas fa-angle-right"></i>View</a></li>
                        
                     </ul>
                  </li>

                   {{-- noticeboard start --}}
                  <li class="@yield('notice_board')" >
                     <a href="#notice_board" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="fas fa-exclamation-triangle"></i><span>Notice Management</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="notice_board" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('create')" ><a href="#"><i class="fas fa-angle-right"></i>Notice Rules</a></li>
                        <li class="@yield('create')" ><a href="{{ route('notice_board') }}"><i class="fas fa-angle-right"></i>Create New Notices</a></li>
                        <li class="@yield('create')" ><a href="{{ route('admin_notice_view') }}"><i class="fas fa-angle-right"></i>View All Notices</a></li>
                        
                     </ul>
                  </li>
                  {{-- event --}}
                  <li class="@yield('event_create')" >
                     <a href="#event_create" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="fas fa-calendar-alt"></i><span>Event Management</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="event_create" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('create')" ><a href="{{ route('event_create') }}">Create New Events</a></li>
                        <li class="@yield('create')" ><a href="{{ route('admin_event_view') }}">View All Events</a></li>
                     </ul>
                  </li>
                  {{-- ticket --}}
                  <li class="@yield('admin_ticket')" >
                     <a href="#admin_ticket" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="fas fa-ticket-alt"></i><span>Ticket Management</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="admin_ticket" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('create')" ><a href="#">Ticket Assesment</a></li>
                        <li class="@yield('create')" ><a href="{{ route('admin_ticket') }}">Create New tickets</a></li>
                        <li class="@yield('create')" ><a href="{{ route('admin_view_tickets') }}">View all Tickets</a></li>
                     </ul>
                  </li>
                  {{-- Leave --}}
                  <li class="@yield('admin_leave')" >
                     <a href="#admin_leave" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="fas fa-power-off"></i><span>Leave Management</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="admin_leave" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('create')" ><a href="#">Leave Procedure</a></li>
                        <li class="@yield('create')" ><a href="{{ route('admin_create_leaves') }}">Create New Leaves</a></li>
                        <li class="@yield('create')" ><a href="{{ route('admin_view_leaves') }}">Approve Leaves</a></li>
                     </ul>
                  </li>
                  {{-- notification --}}
                  <li class="@yield('notification')" >
                     <a href="#notification" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="fas fa-bell"></i><span>Notificatios Management</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="notification" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('create')" ><a href="{{ route('notify') }}">Create New Notifications</a></li>
                        <li class="@yield('create')" ><a href="{{ route('admin_view_notify') }}">View/Edit Notification</a></li>
                     </ul>
                  </li>
                  {{-- user --}}
                  <li class="@yield('all_users')" >
                     <a href="#all_users" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="fas fa-users"></i><span>User Management</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     
                     <ul id="all_users" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('view')" ><a href="{{route('create_users')}}">Create New Users</a></li>
                        <li class="@yield('view')" ><a href="{{ route('all_users') }}">View All Users</a></li>
                     </ul>
                  </li>

                  {{-- benefit --}}
                  <li class="@yield('admin_benefit')" >
                     <a href="#admin_benefit" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="fas fa-id-card"></i><span>Employee Benifit Request</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     
                     <ul id="admin_benefit" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('view')" ><a href="{{route('user_loans')}}">Requested Loans</a></li>
                        <li class="@yield('view')" ><a href="{{route('admin_travel_view')}}">Requested Travels</a></li>
                        <li class="@yield('view')" ><a href="{{route('admin_transport_view')}}">Requested Transport</a></li>
                     </ul>
                  </li>
                  {{-- attendence --}}
                  <li class="@yield('admin_attendance')" >
                     <a href="#admin_attendance" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="fas fa-user-clock"></i><span>Attendance Management</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     
                     <ul id="admin_attendance" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('view')" ><a href="{{ route('admin_attendance_view') }}">View All Attandance</a></li>
                     </ul>
                  </li>

                  
                  {{-- profile --}}
                   <li>
                      <a href="#user-info" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="fas fa-user"></i><span>Profiles</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                      <ul id="user-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                         <li><a href="{{ route('admin_profile') }}">Admin Profile</a></li>
                         <li><a href="{{ route('profile_settings') }}">Admin Profile Edit</a></li>
                      </ul>
                   </li>
             </nav>
             <div class="p-3"></div>
          </div>
       </div>
  </div>
