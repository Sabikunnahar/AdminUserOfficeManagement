@extends('layouts.admin_master')
@section('all_users')
    active show-sub
@endsection
@section('view')
    active
@endsection
@section('admin_content')
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
          <h5 class="mb-0">Users</h5>
          <nav aria-label="breadcrumb">
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Users</a></li>
                {{-- <li class="breadcrumb-item active" aria-current="page">Events Edit</li> --}}
             </ul>
          </nav>
       </div>
       @include('admin.topbar.menu')
    </div>
</div>
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="iq-card">




        <div class="iq-card-body">
            <div class="table-responsive">
                <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Gender</th>
                        <th>Job Role</th>
                        <th>Total Leaves</th>
                        <th>Leaves</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $users = App\Models\User::orderBy('id','ASC')->get();
                    @endphp
                    @foreach ($users as $item)
                    <tr>
                        {{-- <td>{{ $users->firstItem()+$loop->index}}</td> --}}
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->addresss}}</td>
                        <td>{{ $item->phone}}</td>
                        <td>{{ $item->gender}}</td>
                        <td>{{ $item->job_title}}</td>
                        <td>{{ $item->leave_total}}</td>
                        <td>{{ $item->leave_count}}</td>
                        <td>
                            <a type="button" class="btn btn-info mt-0" href="{{ url('admin/all_users/profile/'.$item->id) }}">View</a>
                        </td>


                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            <div class="row justify-content-between mt-3">
                <div id="user-list-page-info" class="col-md-6">
                </div>
            </div>
        </div>
      </div>
    </div>
 </div>
@endsection
