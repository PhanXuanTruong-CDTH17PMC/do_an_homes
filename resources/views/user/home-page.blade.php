<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>
        Tin Tức
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/light-bootstrap-dashboard.css?v=2.0.0 ') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet') }}" />
    <link rel="stylesheet" href="fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link href="{{ asset('css/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<header >
    <div class="navbar-custom" style="background-color: green">
        <div class="container-fluid">
                <!-- LOGO -->
                <div class="logo-box">
                    <a  class="logo text-center">
                    <label style="color:White; font-size:50px">PT Home's</label>
                    </a>
                </div>
                <ul class="list-unstyled topnav-menu float-right mb-0">
                <li class="button">
                    
                    <a href="/log-in" class="nav-link  nav-user mr-0 waves-effect " style=" color: white">
                        Đăng nhập
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
<body class="authentication-bg authentication-bg-pattern" data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<img  class="img-fluid" name="image" style="height:100vh; width:100%; " src="{{asset('assets/images/img/sile-1.jpg') }}" alt="err">
   <div class="site-section pb-0">
      <div class="container md-8">
          <h1  style="margin:auto;padding-bottom: 50px;Color green;display: block;text-align: center;"><b>Tin Tức - Sự Kiện</b></h1>
      </div>
      <div class="container">
          <div class="row">
          @if (count($tintuc) >0)
              @foreach ($tintuc as $tin_tuc )
              <div class="col-lg-4 mb-5">
                  <div class="news-entry-item">
                      <a href="#" class="thumbnail">
                        <img  class="img-fluid" style="height:150px;weight:150px;" src="{{asset('assets/images/'.$tin_tuc->anh_dai_dien) }}" alt="err">
                      </a>
                      <h3 class="mb-0"><a href="#"><u>Tin tức {{$tin_tuc->id}}</u></a></h3>
                      <div class="mb-3">
                            <label><b>Title:</b> {{$tin_tuc->tieu_de}}</label>
                            <br/>
                            <label><b>Date:</b> {{$tin_tuc->created_at}}</label>
                      </div>
                    </div>
                </div>
              @endforeach    
            @endif  
        </div>
      </div>
    </div>
    <div class="pb-5">
      <div class="container">
        <div class="row">
          <div class="col-lg">
            <div class="custom-pagination">
              <a href="#">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
 <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
<script src="{{ asset('assets/js/app.min.js') }}"</script>
<script src="{{ asset('assets/libs/sweetale>rt2/sweetalert2.min.js') }}"></script>
<script type="text/javascript">
    window.onload = function(){
      setTimeout("switch_Image()", 3000);
    }
    var current = 1;
    var num_image = 3;
    function switch_Image(){
        current++;
        document.images['image'].src ='assets/images/img/sile-' + current + '.jpg';
      if(current < num_image){
        setTimeout("switch_Image()", 3000);
      }else if(current == num_image){
        current = 0;
        setTimeout("switch_Image()", 3000);
      }
  }
</script>
</html>
