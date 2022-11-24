<!doctype html>
<html lang="en">
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>User DASHBOARD</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('admin') }}/images/favicon/favicon.png" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('admin') }}/css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{ asset('admin') }}/css/typography.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{ asset('admin') }}/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{ asset('admin') }}/css/responsive.css">
   </head>
   <body>
       @guest
        @else
      <!-- loader Start -->
      {{-- <div id="loading">
         <div id="loading-center">
            <div class="loader">
               <div class="cube">
                  <div class="sides">
                     <div class="top"></div>
                     <div class="right"></div>
                     <div class="bottom"></div>
                     <div class="left"></div>
                     <div class="front"></div>
                     <div class="back"></div>
                  </div>
               </div>
            </div>
         </div>
      </div> --}}
      <!-- loader END -->
      <!-- Wrapper Start -->
      @include('auth.inc.leftbar')
            <div class="iq-top-navbar">
                <div class="iq-navbar-custom">
                <div class="iq-sidebar-logo">
                    <div class="top-logo">
                        <a href="{{ url('/dashboard') }}" class="logo">
                        <img src="{{ asset('public/admin') }}/images/logo.png" class="img-fluid" alt="">
                        <span>Sofbox</span>
                        </a>
                    </div>
                </div>
                <div class="navbar-breadcrumb">
                    <h5 class="mb-0">USER DASHBOARD</h5>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/user/home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ul>
                    </nav>
                </div>
                @include('auth.topbar.menu')
                </div>
            </div>
         @endguest
         @yield('user_content')
         <!-- Footer -->
         @guest
         @else
         <footer class="bg-white iq-footer">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-lg-6">
                         <ul class="list-inline mb-0">
                             <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                             <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 text-right">
                            Copyright 2022 <a href="#">Sofbox</a> All Rights Reserved.
                        </div>
                    </div>
                </div>
            </footer>
            @endguest

      <!-- Footer END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="{{ asset('admin') }}/js/jquery.min.js"></script>
      <script src="{{ asset('admin') }}/js/popper.min.js"></script>
      <script src="{{ asset('admin') }}/js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="{{ asset('admin') }}/js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="{{ asset('admin') }}/js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="{{ asset('admin') }}/js/waypoints.min.js"></script>
      <script src="{{ asset('admin') }}/js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="{{ asset('admin') }}/js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{ asset('admin') }}/js/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="{{ asset('admin') }}/js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="{{ asset('admin') }}/js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="{{ asset('admin') }}/js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{ asset('admin') }}/js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{ asset('admin') }}/js/smooth-scrollbar.js"></script>
      <!-- lottie JavaScript -->
      <script src="{{ asset('admin') }}/js/lottie.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{{ asset('admin') }}/js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="{{ asset('admin') }}/js/custom.js"></script>
      <script src="https://kit.fontawesome.com/042b6d566d.js" crossorigin="anonymous"></script>
      <script src="{{ asset('admin/login') }}/js/main.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
   </body>

   <script>

    @if(Session::has('message'))

        var type ="{{Session::get('alert-type','info')}}"
        switch(type){
            case 'info':
                toastr.info(" {{Session::get('message')}} ");
                break;

            case 'success':
                toastr.success(" {{Session::get('message')}} ");
                break;

            case 'warning':
                toastr.warning(" {{Session::get('message')}} ");
                break;

            case 'error':
                toastr.error(" {{Session::get('message')}} ");
                break;
        }
    @endif
  </script>

