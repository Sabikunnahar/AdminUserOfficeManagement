<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('public/assets') }}/resources/img/all_logo/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets') }}/vendors/css/normalize.css">
    <link rel="stylesheet" href="{{ asset('public/assets') }}/vendors/css/grid.css">
    <link rel="stylesheet" href="{{ asset('public/assets') }}/vendors/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('public/assets') }}/vendors/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('public/assets') }}/vendors/css/uikit.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <!-- Resource CSS-->
    <link rel="stylesheet" href="{{ asset('public/assets') }}/resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('public/assets') }}/resources/css/style.css">
    <link rel="stylesheet" href="{{ asset('public/assets') }}/resources/css/responsive.css">
    <title>Office Management System</title>
    <style>
        .custom_navbar{
            padding: 20px 0;
        }
        .custom_navbar ul li{
            margin-right: 30px;
            border: 1px solid rgb(163, 162, 162)
        }
        .custom_navbar ul li:hover{
            border-bottom: 1px solid #000;
        }
        .homepage_body img{
            width: 100%;
            height: 600px;
        }
        .homepage_body{
            position: relative;
            text-align: center;
        }
        .homepage_body h2{
            position: absolute;
            top: 50%;
            left: 35%;
            color: #fff;
            font-size: 30px;
            font-weight: 700;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="custom_navbar collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Stuff Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Stuff Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin') }}">Admin Login</a>
                </li>
            </ul>
        </div>
      </nav>
      <div class="homepage_body">
        <img src="{{ asset('public/assets') }}/resources/img/school.jpg" alt="">
        <h2>Office Management System</h2>
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
