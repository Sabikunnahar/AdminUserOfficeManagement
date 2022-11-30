@extends('layouts.admin_master')
@section('admin_attendance')
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
          <h5 class="mb-0">Events EDIT</h5>
          <nav aria-label="breadcrumb">
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Events Edit</a></li>
                <li class="breadcrumb-item active" aria-current="page">Events Edit</li>
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
                        <th>Entry Date & Time</th>
                        <th>Exit Date & Time</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $loan = App\Models\Attendance::orderBy('id','ASC')->get();
                    @endphp
                    @foreach ($loan as $item)
                    <tr>
                        <td>{{ $item->user_name }}</td>
                        <td>{{ $item->start_attendance }}</td>
                        <td>{{ $item->end_attendance }}</td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            <div class="row justify-content-between mt-3">
                <div id="user-list-page-info" class="col-md-6">
                {{-- <span>Showing 1 to 5 of 5 entries</span> --}}
                </div>
                {{-- <div class="col-md-6">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end mb-0">
                            {{ $notice_board->links() }}
                        </ul>
                    </nav>
                </div> --}}
            </div>
        </div>
      </div>
    </div>
 </div>
@endsection
