<div class="wrapper">
    <!-- Sidebar  -->
      <div class="iq-sidebar">
         <img src="{{Auth::user()->profile_picture}}" class="img-fluid">
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
                  {{-- notice --}}
                  <li class="@yield('notice_create')" >
                     <a href="#notice_create" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="fas fa-exclamation-triangle"></i><span>Important Notices</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="notice_create" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('create')" ><a href="{{ route('notice_rules') }}"><i class="fas fa-angle-right"></i>Notice Rules</a></li>
                        <li class="@yield('create')" ><a href="{{ route('all_notices') }}"><i class="fas fa-angle-right"></i>See New Notices</a></li>
                     </ul>
                  </li>
                  {{-- event --}}
                  <li class="@yield('event_create')" >
                     <a href="#event_create" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="fas fa-calendar-alt"></i><span>Upcoming Events</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="event_create" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('create')" ><a href="{{ route('all_events') }}"><i class="fas fa-angle-right"></i>See upcoming events</a></li>
                     </ul>
                  </li>
                  {{-- tickets --}}
                  <li class="@yield('tickets')" >
                     <a href="#create_tickets" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="fas fa-ticket-alt"></i><span>Ticket Managenet</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="create_tickets" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('create')" ><a href="{{ route('ticket_rules') }}"><i class="fas fa-angle-right"></i>Ticket Assesment</a></li>
                        <li class="@yield('create')" ><a href="{{ route('create_tickets') }}"><i class="fas fa-angle-right"></i>Create New Tickets</a></li>
                        <li class="@yield('create')" ><a href="{{ route('ticket_view') }}"><i class="fas fa-angle-right"></i>View Tickets</a></li>
                        <li class="@yield('create')" ><a href="{{ route('user_ticket_assigned') }}"><i class="fas fa-angle-right"></i>Assaigned Tickets</a></li>
                     </ul>
                  </li>
                  {{-- leave --}}
                  <li class="@yield('leave')" >
                     <a href="#leave" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="fas fa-power-off"></i><span>Leave Management</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="leave" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('leave')" ><a href="{{ route('create_leaves') }}"><i class="fas fa-angle-right"></i>Leave Procedure</a></li>
                        <li class="@yield('leave')" ><a href="{{ route('create_leaves') }}"><i class="fas fa-angle-right"></i>Apply For Leave</a></li>
                        <li class="@yield('leave')" ><a href="{{ route('leave_view') }}"><i class="fas fa-angle-right"></i>Your Leave Appplications</a></li>
                     </ul>
                  </li>
                  {{-- Notificationa --}}
                  <li class="@yield('notify')" >
                     <a href="#notify" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="fas fa-bell"></i><span>Notifications</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="notify" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('tickets')" ><a href="{{ route('all_notify') }}">See All notifications</a></li>
                     </ul>
                  </li>
                  {{-- benefit --}}
                  <li class="@yield('benefit')" >
                     <a href="#benefit" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="fas fa-id-card"></i><span>Benefit Management</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="benefit" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('create')" ><a href="{{ route('create_loan') }}"><i class="fas fa-angle-right"></i>Loan Request</a></li>
                        <li class="@yield('create')" ><a href="{{ route('create_travel') }}"><i class="fas fa-angle-right"></i>Travel Request</a></li>
                        <li class="@yield('create')" ><a href="{{ route('trasport_travel') }}"><i class="fas fa-angle-right"></i>Transport Request</a></li>
                        
                     </ul>
                  </li>
                  {{-- personal service starts --}}
                  <li class="@yield('service')" >
                     <a href="#service" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="fas fa-database"></i><span>Personal Services</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="service" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('create')" ><a href="{{ route('loan_view') }}"><i class="fas fa-angle-right"></i>Loan Applications</a></li>
                        <li class="@yield('create')" ><a href="{{ route('travel_view') }}"><i class="fas fa-angle-right"></i>Travel Aplications</a></li>
                        <li class="@yield('create')" ><a href="{{ route('trasport_view') }}"><i class="fas fa-angle-right"></i>Transport Applications</a></li>
                        
                     </ul>
                  </li>
                  {{-- personal Information --}}
                  <li class="@yield('personal')" >
                     <a href="#personal" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="fas fa-user"></i><span>Personal Informations</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="personal" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="@yield('create')" ><a href="{{ route('user_info') }}"><i class="fas fa-angle-right"></i>View Profile</a></li>
                        
                     </ul>
                  </li>


             </nav>
             <div class="p-3"></div>
          </div>
       </div>
  </div>
