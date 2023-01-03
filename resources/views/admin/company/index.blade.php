@extends('layouts.admin_master')
@section('company')
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
             <span>Sofbox</span>
             </a>
          </div>
       </div>
       <div class="navbar-breadcrumb">
          <h5 class="mb-0">LATEST NEWS</h5>
          <nav aria-label="breadcrumb">
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Latest News</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Latest News</li>
             </ul>
          </nav>
       </div>
       @include('admin.topbar.menu')
    </div>
</div>
<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="iq-card">
               <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                     <h4 class="card-title">Latest News</h4>
                  </div>
               </div>
               <div class="iq-card-body">
                  <div class="table-responsive">
                     <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                       <thead>
                           <tr>
                              <th>Sl</th>
                              <th>Company Name</th>
                              <th>Company Logo</th>
                              <th>Action</th>
                           </tr>
                       </thead>
                        <tbody>
                           @foreach ($create as $item)
                           <tr>
                            <td>{{ $create->firstItem()+$loop->index}}</td>
                              <td>{{ $item->company_name }}</td>
                              <td><img src="{{ asset($item->company_logo) }}" width="50" alt=""></td>
                              <td>
                                 <div class="flex align-items-center list-user-action">
                                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="{{ url('admin/company/edit/'.$item->id) }}"><i class="ri-pencil-line"></i>Edit</a>
                                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" id="delete" href="{{ url('admin/company/delete/'.$item->id) }}"><i class="ri-delete-bin-line"></i>Delete</a>
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
                                {{ $create->links() }}
                              </ul>
                           </nav>
                        </div>
                     </div>
               </div>
            </div>
        </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-lg-12">
             <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title">Create</h4>
                   </div>
                </div>
                <div class="iq-card-body">
                   <form class="form-horizontal" action="{{ route('company_store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                     <div class="col-lg-4">
                        <div class="form-group">
                            <label for="email">Company Name:</label>
                               <input type="text" class="form-control" name="company_name" value="{{ old('company_name') }}">
                               @error('company_name')
                               <span class="invalid-feedback" role="alert"></span>
                               <strong class="text-danger">{{ $message }}</strong>
                               @enderror
                         </div>
                     </div>
                     <div class="col-lg-8">
                        <div class="form-group">
                            <label for="email">Company Logo:</label>
                               <input type="file" class="form-control" name="company_logo" value="{{ old('company_logo') }}">
                               @error('company_logo')
                               <span class="invalid-feedback" role="alert"></span>
                               <strong class="text-danger">{{ $message }}</strong>
                               @enderror
                         </div>
                    </div>



                     <div class="col-lg-4">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success" style="font-size: 18px">Create</button>
                      </div>
                     </div>
                   </form>
                </div>
             </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
