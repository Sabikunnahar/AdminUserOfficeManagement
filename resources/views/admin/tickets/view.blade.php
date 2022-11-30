@extends('layouts.admin_master')
@section('create_tickets')
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
          <h5 class="mb-0">Craete Tickets</h5>
          <nav aria-label="breadcrumb">
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tickets</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tickets</li>
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
                        <h4 class="card-title">Tickets</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <div class="table-responsive">
                        <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Ticket List</th>
                                <th>Ticket Assign To</th>
                                <th>Created Dates</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ticket as $item)
                            <tr>
                                <td>{{ $ticket->firstItem()+$loop->index}}</td>
                                <td>{{ $item->ticket_des }}</td>
                                <td>{{ $item->ticket_assigned }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <div class="flex align-items-center list-user-action">
                                        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="{{ url('admin/tickets/controller/edit/'.$item->id) }}">Edit<i class="ri-pencil-line"></i></a>

                                        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" id="delete" href="{{ url('admin/tickets/delete/'.$item->id) }}">Delete<i class="ri-delete-bin-line"></i></a>
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
                                    {{ $ticket->links() }}
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
