<header id="topnav">
<div class="navbar-custom" style="background-color: white; co;color:black  ">
        <div class="container-fluid">
             <div class="logo-box topnav-menu  mb-0">
             <a  class="logo text-center">
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="" height="72">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="" height="52">
                    </span>
                </a>
            </div>
            <div class="logo-box topnav-menu  mb-0">
             <a  class="logo text-center">
                   <label style="font-size:30px"> PT Home's </label>
                </a>
            </div>
            <ul class="list-unstyled topnav-menu float-right mb-0">
            
                <li class="d-none d-sm-block">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Tìm kiếm...">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">
                                        <i class="fe-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>
                <li class="nav-link">{{Auth('canho')->user()->name}}</li>
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="nc-icon nc-brll"></i>
                        <span class="notification">5</span>
                        <span class="d-lg-none" style="color:White">Notification</span>
                    </a>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href="#">Notification 1</a>
                        <a class="dropdown-item" href="#">Notification 2</a>
                        <a class="dropdown-item" href="#">Notification 3</a>
                        <a class="dropdown-item" href="#">Notification 4</a>
                        <a class="" href="#">Another notification</a>
                    </ul>
                </li>
                <li class="button">
                    <a href="/log-in" class="nav-link  nav-user mr-0 waves-effect" >
                        Đăng xuất
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
       <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    
                    <li class="has-submenu">
                            <a href="#
                            ">
                                Thông báo
                            </a>
                        </li>
                        <li class="has-submenu">
                            <a href="#">
                                Hóa đơn
                            </a>
                        </li>
                        <li class="has-submenu">
                            <a href="#">
                                Phương tiện
                            </a>
                        </li>
                        <li class="has-submenu">
                            <a href="#">
                                Phản ánh
                            </a>
                        </li>
                        <li class="has-submenu">
                            <a href="#">
                                <i class="nc-icon nc-icon nc-paper-2"></i>
                                Dịch vụ
                            </a>
                        </li>
                        
                </ul>
            </div>
        </div>
    </div>
</header>

