@extends('layouts.user_master')
@section('leave_create')
    active show-sub
@endsection
@section('leave')
    active
@endsection
@section('user_content')
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
          <h5 class="mb-0">Personal Information EDIT</h5>
          <nav aria-label="breadcrumb">
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="">infos Edit</a></li>
                <li class="breadcrumb-item active" aria-current="page">infos Edit</li>
             </ul>
          </nav>
       </div>
       @include('auth.topbar.menu')
    </div>
</div>
<div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
        <div class="col-lg-12">
      </div>
          <div class="col-sm-12 col-lg-12">
             <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title">Edit</h4>
                   </div>
                </div>
                <div class="iq-card-body">
                   <form class="form-horizontal" action="{{ route('user_info_update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $edit->id }}">
                    <div class="form-group">
                  <section>
                     <div class="col-md-12 col-sm-12 mt-3">
                         <div id="myDIV" class="tab-list">
                             <ul class="nav our-item">
                                 <li>
                                 <a href="#our-tab-content1" data-toggle="tab" class="tab_active tab_butttons">Personal</a>
                                 </li>
                                 <li>
                                 <a href="#our-tab-content2" data-toggle="tab" class="tab_butttons" >Contact</a>
                                 </li>
                                 <li>
                                 <a href="#our-tab-content3" data-toggle="tab" class="tab_butttons" >Educations & Skills</a>
                                 </li>
                                 <li>
                                 <a href="#our-tab-content4" data-toggle="tab" class="tab_butttons" >Work Informations</a>
                                 </li>
                                 <li>
                                 <a href="#our-tab-content5" data-toggle="tab" class="tab_butttons" >Documentations</a>
                                 </li>
                             </ul>
                         </div> 
                         <!-- tab-list -->
                         <div class="tab-content">
                                 <div class="tab-pane fade show active" id="our-tab-content1">
                                     <div class="tab_desk_1">
                                     <div class="container-fluid">
                                         <div class="iq-card-body">
                                             <div class="mt-5 mx-auto">
                                                 <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="">Father's Name:</label>
                                                            <input type="text" class="form-control" name="fathers_name" value="{{ $edit->fathers_name }}">
                                                            @error('fathers_name')
                                                            <span class="invalid-feedback" role="alert"></span>
                                                            <strong class="text-danger">{{ $message }}</strong>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="">Mother's Name</label>
                                                            <input type="text" class="form-control" name="mothers_name" value="{{ $edit->mothers_name }}">
                                                            @error('mothers_name')
                                                            <span class="invalid-feedback" role="alert"></span>
                                                            <strong class="text-danger">{{ $message }}</strong>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                     <div class="col-lg-4">
                                                         <div class="form-group">
                                                             <label for="">Birth of certificate</label>
                                                             <input type="text" class="form-control" name="date_of_birth" value="{{ $edit->date_of_birth }}">
                                                             @error('date_of_birth')
                                                             <span class="invalid-feedback" role="alert"></span>
                                                             <strong class="text-danger">{{ $message }}</strong>
                                                             @enderror
                                                         </div>
                                                     </div>
                                                     <div class="col-lg-4">
                                                         <div class="form-group">
                                                             <label for="">Age</label>
                                                             <input type="text" class="form-control" name="age" value="{{ $edit->age }}">
                                                             @error('age')
                                                             <span class="invalid-feedback" role="alert"></span>
                                                             <strong class="text-danger">{{ $message }}</strong>
                                                             @enderror
                                                         </div>
                                                     </div>
                                                     <div class="col-lg-4">
                                                         <div class="form-group">
                                                            <label for="">Marital Status</label><br/>
                                                            <select style="width: 250px;"  name="marital_status" value="{{ $edit->marital_status }}">
                                                                <option name="name">Married</option>
                                                                <option name="name">Unmarried</option>
                                                            </select>
                                                            @error('marital_status')
                                                            <span class="invalid-feedback" role="alert"></span>
                                                            <strong class="text-danger">{{ $message }}</strong>
                                                            @enderror
                                                        </div>
                                                     </div>
                                                     <div class="col-lg-4">
                                                         <div class="form-group">
                                                            <label for="">Gender</label><br/>
                                                            <select style="width: 250px;"  name="gender" value="{{ $edit->gender }}">
                                                                <option name="name">Male</option>
                                                                <option name="name">Female</option>
                                                            </select>
                                                            @error('gender')
                                                            <span class="invalid-feedback" role="alert"></span>
                                                            <strong class="text-danger">{{ $message }}</strong>
                                                            @enderror
                                                        </div>
                                                     </div>
                                                     <div class="col-lg-4">
                                                         <div class="form-group">
                                                            <label for="">Blood Group:</label><br/>
                                                            <select style="width: 250px;"  name="blood_group" value="{{ $edit->blood_group }}">
                                                                <option name="name">B+</option>
                                                                <option name="name">B-</option>
                                                                <option name="name">A+</option>
                                                                <option name="name">A-</option>
                                                                <option name="name">AB+</option>
                                                                <option name="name">AB-</option>
                                                                <option name="name">O+</option>
                                                                <option name="name">O-</option>
                                                                
                                                            </select>
                                                            @error('blood_group')
                                                            <span class="invalid-feedback" role="alert"></span>
                                                            <strong class="text-danger">{{ $message }}</strong>
                                                            @enderror
                                                        </div>
                                                     </div>
                                                     <div class="col-lg-4">
                                                         <div class="form-group">
                                                             <label for="">Place Of Birth:</label>
                                                             <input type="text" class="form-control" name="place_of_birth" value="{{ $edit->place_of_birth }}">
                                                             @error('place_of_birth')
                                                             <span class="invalid-feedback" role="alert"></span>
                                                             <strong class="text-danger">{{ $message }}</strong>
                                                             @enderror
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                                 </div> 
                                 <!--end tab 1 -->
                                 <div class="tab-pane fade" id="our-tab-content2">
                                     <div class="container-fluid">
                                         <div class="iq-card-body">
                                             <div class="mt-5 mx-auto">
                                                 <div class="row">
                                                     <div class="col-lg-6">
                                                         <div class="form-group">
                                                             <label for="">Phone Number:</label>
                                                             <input type="text" class="form-control" name="phone" value="{{ $edit->phone }}">
                                                             @error('phone')
                                                             <span class="invalid-feedback" role="alert"></span>
                                                             <strong class="text-danger">{{ $message }}</strong>
                                                             @enderror
                                                         </div>
                                                     </div>
                                                     <div class="col-lg-6">
                                                         <div class="form-group">
                                                             <label for="">Home Address</label>
                                                             <input type="text" class="form-control" name="addresss" value="{{ $edit->addresss }}">
                                                             @error('addresss')
                                                             <span class="invalid-feedback" role="alert"></span>
                                                             <strong class="text-danger">{{ $message }}</strong>
                                                             @enderror
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div> 
                                 <!-- end tab 2-->
                                 <div class="tab-pane fade" data-toggle="collapse" id="our-tab-content3">
                                     <div class="container-fluid">
                                         <div class="iq-card-body">
                                             <div class="mt-5 mx-auto">
                                                 <div class="row">
                                                     <div class="col-lg-8">
                                                         <div class="form-group">
                                                             <label for="">School Name:</label>
                                                             <input type="text" class="form-control" name="school" value="{{ $edit->school }}">
                                                             @error('school')
                                                             <span class="invalid-feedback" role="alert"></span>
                                                             <strong class="text-danger">{{ $message }}</strong>
                                                             @enderror
                                                         </div>
                                                     </div>
                                                     <div class="col-lg-4">
                                                         <div class="form-group">
                                                             <label for="">SSC CGPA</label>
                                                             <input type="text" class="form-control" name="school_cgpa" value="{{ $edit->school_cgpa }}">
                                                             @error('school_cgpa')
                                                             <span class="invalid-feedback" role="alert"></span>
                                                             <strong class="text-danger">{{ $message }}</strong>
                                                             @enderror
                                                         </div>
                                                     </div>
                                                     <div class="col-lg-8">
                                                         <div class="form-group">
                                                             <label for="">Collage Name:</label>
                                                             <input type="text" class="form-control" name="collage" value="{{ $edit->collage }}">
                                                             @error('collage')
                                                             <span class="invalid-feedback" role="alert"></span>
                                                             <strong class="text-danger">{{ $message }}</strong>
                                                             @enderror
                                                         </div>
                                                     </div>
                                                     <div class="col-lg-4">
                                                         <div class="form-group">
                                                             <label for="">HSC CGPA</label>
                                                             <input type="text" class="form-control" name="collage_cgpa" value="{{ $edit->collage_cgpa }}">
                                                             @error('collage_cgpa')
                                                             <span class="invalid-feedback" role="alert"></span>
                                                             <strong class="text-danger">{{ $message }}</strong>
                                                             @enderror
                                                         </div>
                                                     </div>
                                                     <div class="col-lg-8">
                                                         <div class="form-group">
                                                             <label for="">University Name:</label>
                                                             <input type="text" class="form-control" name="university" value="{{ $edit->university }}">
                                                             @error('university')
                                                             <span class="invalid-feedback" role="alert"></span>
                                                             <strong class="text-danger">{{ $message }}</strong>
                                                             @enderror
                                                         </div>
                                                     </div>
                                                     <div class="col-lg-4">
                                                         <div class="form-group">
                                                             <label for="">University CGPA</label>
                                                             <input type="text" class="form-control" name="univeristy_cgpa" value="{{ $edit->univeristy_cgpa }}">
                                                             @error('univeristy_cgpa')
                                                             <span class="invalid-feedback" role="alert"></span>
                                                             <strong class="text-danger">{{ $message }}</strong>
                                                             @enderror
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- end tab 3-->
                                 <div class="tab-pane fade" id="our-tab-content4">
                                     <div class="container-fluid">
                                         <div class="iq-card-body">
                                             <div class="mt-5 mx-auto">
                                                 <div class="row">
                                                     <div class="col-lg-12">
                                                         <div class="form-group">
                                                             <label for="">Company Name:</label>
                                                             <input type="text" class="form-control" name="company_name" value="{{ $edit->company_name }}">
                                                             @error('company_name')
                                                             <span class="invalid-feedback" role="alert"></span>
                                                             <strong class="text-danger">{{ $message }}</strong>
                                                             @enderror
                                                         </div>
                                                     </div>
                                                     <div class="col-lg-6">
                                                         <div class="form-group">
                                                             <label for="">Company Address</label>
                                                             <input type="text" class="form-control" name="company_addresss" value="{{ $edit->company_addresss }}">
                                                             @error('company_addresss')
                                                             <span class="invalid-feedback" role="alert"></span>
                                                             <strong class="text-danger">{{ $message }}</strong>
                                                             @enderror
                                                         </div>
                                                     </div>
                                                     <div class="col-lg-6">
                                                         <div class="form-group">
                                                             <label for="">Job Title:</label>
                                                             <input type="text" class="form-control" name="job_title" value="{{ $edit->job_title }}">
                                                             @error('job_title')
                                                             <span class="invalid-feedback" role="alert"></span>
                                                             <strong class="text-danger">{{ $message }}</strong>
                                                             @enderror
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div> 
                                 <!-- end tab 4-->
                                 <div class="tab-pane fade" id="our-tab-content5">
                                     <div class="container-fluid">
                                         <div class="iq-card-body">
                                             <div class="mt-5 mx-auto">
                                                 <div class="row">
                                                     <div class="col-lg-4">
                                                         <div class="form-group">
                                                             <label for="">Documats Name:</label>
                                                             <input type="text" class="form-control" name="document_name" value="{{ $edit->document_name }}">
                                                             @error('document_name')
                                                             <span class="invalid-feedback" role="alert"></span>
                                                             <strong class="text-danger">{{ $message }}</strong>
                                                             @enderror
                                                         </div>
                                                     </div>
                                                     <div class="col-lg-8">
                                                         <div class="form-group">
                                                             <label for="email">Gallery Image</label>
                                                                <input type="file" class="form-control" name="document_img" value="{{ $edit->document_img }}">
                                                                @error('document_img')
                                                                <span class="invalid-feedback" role="alert"></span>
                                                                <strong class="text-danger">{{ $message }}</strong>
                                                                @enderror
                                                          </div>
                                                     </div>

                                                 </div>
                                             </div>
                                             <div class="row justify-content-between mt-3">
                                                 <div id="user-list-page-info" class="col-md-6">
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div> 
                                 <!-- end tab 5-->
                         </div>
                     </div>
                 </section>
                 <!-- Tabe Area End Here -->






                      <div class="form-group">
                            <button type="submit" class="btn btn-success" style="font-size: 18px">update</button>
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
