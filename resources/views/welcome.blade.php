
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('admin') }}/images/office.jpg" type="image/x-icon">
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

    <title>Office Management System</title>
    <style>


    </style>
</head>
<div class="container nav bg-dark">

</div>
@php
$company = App\Models\Company::orderBy('id','ASC')->get();
@endphp

    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="collapse navbar-collapse " id="navbarText">
            @foreach ($company as $item)
            <img src="{{ asset($item->company_logo)}}" width="100" height="100" class="ml-5 mr-2 my-2" style="border-radius:50%; border: 5px solid #fff">
            <h3 class="text-light my-auto mx-2">{{$item->company_name}}</h3><br>
            @endforeach

        </div>
        <div class="navbar-text" >
            <ul class="navbar-nav text-light">
                <li class="nav-item active">
                    <a class="nav-link text-light" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('login') }}">Stuff Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('register') }}">Stuff Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('admin.login') }}">Admin Login</a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link text-light" href="{{ route('admin.register') }}">Admin Registration</a> --}}
                </li>
            </ul>

        </div>
    </nav>







      <div class="homepage_body">
        <img src="{{ asset('admin') }}/images/office.jpg" alt="">
        <h2> Computerized Office Management System</h2>
      </div>



    <!-- JS FILES -->
    <script src="assets/resources/js/jquery-3.6.0.min.js"></script>
    <script src="assets/resources/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/042b6d566d.js" crossorigin="anonymous"></script>
    <script src="assets/vendors/js/html5shiv.min.js"></script>
    <script src="assets/vendors/js/respond.min.js"></script>
    <script src="assets/vendors/js/selectivizr.js"></script>
    <script src="assets/vendors/js/owl.carousel.min.js"></script>
    <script src="assets/resources/js/main.js"></script>
</body>
</html>
