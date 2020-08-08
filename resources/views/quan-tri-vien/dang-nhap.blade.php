<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>
        @section('title')
            Homes
        @show
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/light-bootstrap-dashboard.css?v=2.0.0 ') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/demo.css" rel="stylesheet') }}" />
</head>
<header >
    <div class="navbar-custom" style="background-color: green">
        <div class="container-fluid">
            <ul class="list-unstyled topnav-menu  mb-0">
                <!-- LOGO -->
                <div class="logo-box">
                    <a  class="logo text-center">
                    <label style="color:White; font-size:50px">PT Home's</label>
                    </a>
                </div>
            </ul>
        </div>
    </div>
</header>
<body class="authentication-bg authentication-bg-pattern">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="account-pages mt-5 mb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card">
                                <div class="card-body p-4">
                                    <h5 class="auth-title">Đăng nhập</h5>
                                     <form action="/getLogin" method="POST">
                                        @csrf
                                    <div>
                                        <label >Tên đăng nhập</label>
                                        <input class="form-control" type="text" id="ten_dang_nhap" name="username"  placeholder="Nhập tên đăng nhập">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Mật khẩu</label>
                                        <input class="form-control" type="password" id="mat_khau" name="password" placeholder="Nhập mật khẩu">
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-danger btn-block" >Đăng nhập</button>
                                    </div>

                                </form>
                                </div> 
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
</body>
</html>