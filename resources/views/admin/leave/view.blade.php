@extends('layouts.admin_master')
@section('admin_leave')
    active show-sub
@endsection
@section('create')
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
          <h5 class="mb-0">Leave Application</h5>
          <nav aria-label="breadcrumb">
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Leaves</a></li>
                <li class="breadcrumb-item active" aria-current="page">Leaves</li>
             </ul>
          </nav>
       </div>
       @include('admin.topbar.menu')
    </div>
</div>
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Leaves</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="table-responsive">
                        <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Leave List</th>
                                <th>Leave Dates</th>
                                <th>Status</th>
                                <th>Approvement</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($leaves as $item)
                            <tr>
                                <td>{{ $leaves->firstItem()+$loop->index}}</td>
                                <td>{{ $item->leave_reason }}</td>
                                <td>{{ $item->leave_date }}</td>
                                {{-- <td>{{ $item->status }}</td> --}}
                                <td>
                                    <a href="{{url('admin/approved', $item->id)}}" class="btn btn-success">Approve</a>
                                </td>
                                <td>
                                    @if ($item->status == 1)
                                        <span class="badge badge-success">Approved</span>
                                        @else
                                        <span class="badge badge-danger">Not Approved</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="flex align-items-center list-user-action">
                                        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="{{ url('admin/leaves/controller/edit/'.$item->id) }}">Edit<i class="ri-pencil-line"></i></a>

                                        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" id="delete" href="{{ url('admin/leaves/controller/delete/'.$item->id) }}">Delete<i class="ri-delete-bin-line"></i></a>

                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                    <div class="row justify-content-between mt-3">
                        <div id="user-list-page-info" class="col-md-6">
                        {{-- <span>Showing 1 to 5 of 5 entries</span> --}}
                        </div>
                        <div class="col-md-6">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end mb-0">
                                    {{ $leaves->links() }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
