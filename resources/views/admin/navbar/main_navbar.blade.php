@extends('layouts.admin_master')

@section('navbar')
    active show-sub
@endsection
@section('create_navbar')
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
          <h5 class="mb-0">MAIN NAVBAR</h5>
          <nav aria-label="breadcrumb">
             <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Back</a></li>
                <li class="breadcrumb-item active" aria-current="page">Navbar item</li>
             </ul>
          </nav>
       </div>
       @include('admin.topbar.menu')
    </div>
</div>
 <!-- Page Content  -->
 <div id="content-page" class="content-page">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12 col-lg-12">
             <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title"> Create Main Navbar</h4>
                   </div>
                </div>
                <div class="iq-card-body">
                   <form class="" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                       <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">Home English</label>
                                    <input type="text" class="form-control" name="home_en" value="{{ old('home_en') }}" placeholder="Home English">
                                    @error('home_en')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">Home Bangla</label>
                                    <input type="text" class="form-control" name="home_bn" value="{{ old('home_bn') }}" placeholder="Home Bangla">
                                    @error('home_bn')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">faculties Enlish</label>
                                    <input type="text" class="form-control" name="faculties_en" value="{{ old('faculties_en') }}" placeholder="Faculties English">
                                    @error('faculties_en')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">faculties Bangla</label>
                                    <input type="text" class="form-control" name="faculties_bn" value="{{ old('faculties_en') }}" placeholder="Faculties bangla">
                                    @error('faculties_en')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">academic English</label>
                                    <input type="text" class="form-control" name="academic_en" value="{{ old('academic_en') }}" placeholder="Academic English">
                                    @error('academic_en')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">academic Bangla</label><br>
                                    <input type="text" class="form-control" data-role="academic_bn" name="academic_bn" value="{{ old('product_tags_en') }}" placeholder="Academic Bangla">
                                    @error('academic_bn')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">publication English</label><br>
                                    <input type="text" class="form-control" data-role="tagsinput" name="publication_en" value="{{ old('publication_en') }}" placeholder="Publication English">
                                    @error('publication_en')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">publication Bangla</label><br>
                                    <input type="text" class="form-control" name="publication_bn" data-role="tagsinput" value="{{ old('publication_bn') }}" placeholder="Publication Bangla">
                                    @error('publication_bn')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">activities English</label><br>
                                    <input type="text" class="form-control" data-role="tagsinput" name="activities_en" value="{{ old('activities_en') }}" placeholder="Activities English">
                                    @error('activities_en')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">activities Bangla</label><br>
                                    <input type="text" class="form-control" name="activities_bn" data-role="tagsinput" value="{{ old('activities_bn') }}" placeholder="Acitivities Bangla">
                                    @error('activities_bn')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">facilities English</label><br>
                                    <input type="text" class="form-control text-danger" data-role="tagsinput" name="facilities_en" value="{{ old('product_color_bn') }}" placeholder="Facilities English">
                                    @error('facilities_en')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>facilities Bangla</label>
                                    <input type="text" class="form-control text-danger" style="color: red;" data-role="tagsinput" name="facilities_bn" value="{{ old('facilities_bn') }}" placeholder="Facilities Bangla">
                                    @error('facilities_bn')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">alumni English</label>
                                    <input type="text" class="form-control" name="alumni_en" value="{{ old('alumni_en') }}" placeholder="Alumni English">
                                    @error('alumni_en')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">alumni Bangla</label>
                                    <input type="text" class="form-control" name="alumni_bn" value="{{ old('alumni_bn') }}" placeholder="Alumni Bangla">
                                    @error('alumni_bn')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">gallery English</label>
                                    <input type="text" class="form-control" name="gallery_en" value="{{ old('gallery_en') }}" placeholder="Gallery English">
                                    @error('gallery_en')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">gallery Bangla</label>
                                    <input type="text" class="form-control" name="gallery_bn" value="{{ old('gallery_bn') }}" placeholder="Gallery Bangla">
                                    @error('gallery_bn')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">Contact English</label>
                                    <input type="text" class="form-control" name="contact_en" value="{{ old('contact_en') }}" placeholder="Contact English">
                                    @error('contact_en')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">Contact Bangla</label>
                                    <input type="text" class="form-control" name="contact_bn" value="{{ old('contact_bn') }}" placeholder="Contact Bangla">
                                    @error('contact_bn')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">Webmail English</label>
                                    <input type="text" class="form-control" name="webmail_en" value="{{ old('webmail_en') }}" placeholder="Webmail English">
                                    @error('webmail_en')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="">Webmail Bangla</label>
                                    <input type="text" class="form-control" name="webmail_bn" value="{{ old('webmail_bn') }}" placeholder="Webmail Bangla">
                                    @error('webmail_bn')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong class="text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-success btn-lg mt-2" style="font-size: 18px">Create Navbar</button>
                            </div>
                        </div>
                    </form>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
