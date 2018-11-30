<!doctype html>
<html lang="zh-cn">
<head>
    <title>@yield('title')-后台管理</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('static/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('static/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('static/css/font-awesome.min.css')}}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('static/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('static/css/color_skins.css')}}">

</head>
<body class="theme-blue">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{asset('/static/images/thumbnail.png')}}" width="48" height="48" alt="Mplify"></div>
        <p>Please wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay" style="display: none;"></div>

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">

            <div class="navbar-brand">
                <a href="index.html">
                    <img src="{{asset('/static/images/logo-icon.svg')}}" alt="Mplify Logo" class="img-responsive logo">
                    <span class="name">LOGO</span>
                </a>
            </div>

            <div class="navbar-right">
                <ul class="list-unstyled clearfix mb-0">
                    <li>
                        <div class="navbar-btn btn-toggle-show">
                            <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                        </div>
                        <a href="javascript:void(0);" class="btn-toggle-fullwidth btn-toggle-hide"><i class="fa fa-bars"></i></a>
                    </li>

                    <li>
                        <div id="navbar-menu">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="{{route('index.index')}}" class="mega_menu icon-menu" title="访问前台"><i class="icon-globe"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="create_new icon-menu" title="清除缓存"><i class="icon-refresh"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                        <i class="icon-bell"></i>
                                        <span class="notification-dot"></span>
                                    </a>
                                    <ul class="dropdown-menu animated bounceIn notifications">
                                        <li class="header"><strong>You have 4 new Notifications</strong></li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <i class="icon-info text-warning"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text">Campaign <strong>Holiday Sale</strong> is nearly reach budget limit.</p>
                                                        <span class="timestamp">10:00 AM Today</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <i class="icon-like text-success"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text">Your New Campaign <strong>Holiday Sale</strong> is approved.</p>
                                                        <span class="timestamp">11:30 AM Today</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <i class="icon-pie-chart text-info"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text">Website visits from Twitter is 27% higher than last week.</p>
                                                        <span class="timestamp">04:00 PM Today</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <i class="icon-info text-danger"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text">Error on website analytics configurations</p>
                                                        <span class="timestamp">Yesterday</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="footer"><a href="javascript:void(0);" class="more">See all notifications</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                        <img class="rounded-circle" src="{{ Auth::user()->avatar }}" width="30" alt="">
                                    </a>
                                    <div class="dropdown-menu animated flipInY user-profile">
                                        <div class="d-flex p-3 align-items-center">
                                            <div class="drop-left m-r-10">
                                                <img src="{{ Auth::user()->avatar }}" class="rounded" width="50" alt="">
                                            </div>
                                            <div class="drop-right">
                                                <h4>{{ Auth::user()->name }}</h4>
                                                <p class="user-name">{{ Auth::user()->email }}</p>
                                            </div>
                                        </div>
                                        <div class="m-t-10 p-3 drop-list">
                                            <ul class="list-unstyled">
                                                <li><a href="page-profile.html"><i class="icon-user"></i>个人资料</a></li>
                                                <li class="divider"></li>
                                                <li><a href="page-login.html"><i class="icon-power"></i>注销登录</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="leftsidebar" class="sidebar">
        <div class="sidebar-scroll">
            <nav id="leftsidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                    <li class="heading">主页</li>
                    <li><a href="{{route('admin.index')}}"><i class="icon-home"></i><span>控制台</span></a></li>
                    <li class="heading">内容</li>
                    <li><a href="{{route('admin.posts')}}"><i class="icon-list"></i><span>帖子</span></a></li>
                    <li><a href="app-chat.html"><i class="icon-speech"></i><span>回复</span></a></li>
                    <li class="heading">用户</li>
                    <li><a href="{{route('admin.users')}}"><i class="icon-users"></i><span>用户</span></a></li>
                    @if(Auth::user()->hasRole('Founder'))<li><a href="{{route('roles.index')}}"><i class="icon-magic-wand"></i><span>角色</span></a></li>
                    <li><a href="{{route('permissions.index')}}"><i class="icon-lock"></i><span>权限</span></a></li>@endif
                    <li class="heading">系统</li>
                    <li><a href="app-inbox.html"><i class="icon-settings"></i><span>设置</span></a></li>
                </ul>
            </nav>
        </div>
    </div>




    <div id="main-content">
        @section('body')
            @show
    </div>

</div>

<!-- Javascript -->
<script src="{{asset('static/js/libscripts.bundle.js')}}"></script>
<script src="{{asset('static/js/vendorscripts.bundle.js')}}"></script>
<script src="{{asset('static/js/mainscripts.bundle.js')}}"></script>
<script src="{{asset('static/js/morrisscripts.bundle.js')}}"></script>
</body>
</html>
