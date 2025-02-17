<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>{{config('app.name')}} | {{Auth::user()->username}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Munashe Chapata - Assessment1." />
    <meta name="author" content="Munachaps" />

    <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico"
        type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/bootstrap.min.css ')}}">

    <link rel="stylesheet" href="{{asset('admin_assets/css/waves.min.css')}}" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/feather.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/font-awesome-n.min.css')}}">

    <link rel="stylesheet" href="{{asset('admin_assets/css/chartist.css ')}}" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/widget.css')}}">
</head>

<body>

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a href="{{route('admin/home')}}">
                            <img class="img-fluid" src="" alt="Propertybook" />
                        </a>
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu icon-toggle-right"></i>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">

                        <ul class="nav-right">
                            <li class="header-notification">

                            </li>
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-message-square"></i>
                                        <span class="badge bg-c-green"></span>
                                    </div>
                                </div>
                            </li>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{asset('admin_assets/jpg/avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image">
                                        <span>{{Auth::user()->username}}</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="{{route('admin/logout')}}">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="p-fixed users-main">
                        <div class="user-box">
                            <div class="chat-search-box">
                                <a class="back_friendlist">
                                    <i class="feather icon-x"></i>
                                </a>
                                <div class="right-icon-control">
                                    <div class="input-group input-group-button">
                                        <input type="text" id="search-friends" name="footer-email"
                                            class="form-control" placeholder="Search Friend">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary waves-effect waves-light" type="button"><i
                                                    class="feather icon-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="feather icon-x"></i> Josephin Doe
                    </a>
                </div>
                <div class="main-friend-chat">
                    <div class="media chat-messages">
                        <a class="media-left photo-table" href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="{{asset('admin_assets/jpg/avatar-2.jpg')}}"
                                alt="Generic placeholder image">
                        </a>
                        <div class="media-body chat-menu-content">
                            <div class="">
                                <p class="chat-cont">I'm just looking around. Will you tell me something about
                                    yourself?</p>
                            </div>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media chat-messages">
                        <div class="media-body chat-menu-reply">
                            <div class="">
                                <p class="chat-cont">Ohh! very nice</p>
                            </div>
                            <p class="chat-time">8:22 a.m.</p>
                        </div>
                    </div>
                    <div class="media chat-messages">
                        <a class="media-left photo-table" href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="{{asset('admin_assets/jpg/avatar-2.jpg')}}"
                                alt="Generic placeholder image">
                        </a>
                        <div class="media-body chat-menu-content">
                            <div class="">
                                <p class="chat-cont">can you come with me?</p>
                            </div>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="chat-reply-box">
                    <div class="right-icon-control">
                        <div class="input-group input-group-button">
                            <input type="text" class="form-control" placeholder="Write hear . . ">
                            <div class="input-group-append">
                                <button class="btn btn-primary waves-effect waves-light" type="button"><i
                                        class="feather icon-message-circle"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                   @include('layouts.admin_sidenav')

                   <div class="pcoded-content">
                    <div class="page-header card">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <i class="feather icon-home bg-c-blue"></i>
                                    <div class="d-inline">
                                        <h5>Propertybook Dashboard</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index.html"><i class="feather icon-home"></i></a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#!">Dashboard </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-xl-6 col-md-6">
                                            <div class="card prod-p-card card-red">
                                                <div class="card-body">
                                                    <div class="row align-items-center m-b-30">
                                                        <div class="col">
                                                            <h6 class="m-b-5 text-white">Banner Section</h6>
                                                            <h3 class="m-b-0 f-w-700 text-white">

                                                            </h3>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-money-bill-alt text-c-red f-18"></i>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6">
                                            <div class="card prod-p-card card-blue">
                                                <div class="card-body">
                                                    <div class="row align-items-center m-b-30">
                                                        <div class="col">
                                                            <h6 class="m-b-5 text-white">About Section</h6>
                                                            <h3 class="m-b-0 f-w-700 text-white">

                                                            </h3>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-database text-c-blue f-18"></i>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-md-6">
                                            <div class="card prod-p-card card-green">
                                                <div class="card-body">
                                                    <div class="row align-items-center m-b-30">
                                                        <div class="col">
                                                            <h6 class="m-b-5 text-white">
                                                               Features
                                                            </h6>
                                                            <h3 class="m-b-0 f-w-700 text-white">

                                                            </h3>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-dollar-sign text-c-green f-18"></i>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6">
                                            <div class="card prod-p-card card-yellow">
                                                <div class="card-body">
                                                    <div class="row align-items-center m-b-30">
                                                        <div class="col">
                                                            <h6 class="m-b-5 text-white">Testimonials</h6>
                                                            <h3 class="m-b-0 f-w-700 text-white">

                                                            </h3>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-tags text-c-yellow f-18"></i>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <div id="styleSelector">
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade
            <br/>to any of the following web browsers to access this website.
        </p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="../files/assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="../files/assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="../files/assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
<![endif]-->


    <script data-cfasync="false" src=" {{asset('admin_assets/js/email-decode.min.js')}}"></script>
    <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{asset('admin_assets/js/jquery.min.js ')}}"></script>
    <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{asset('admin_assets/js/jquery-ui.min.js')}}"></script>
    <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src=" {{asset('admin_assets/js/popper.min.js ')}}"></script>
    <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src=" {{asset('admin_assets/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('admin_assets/js/waves.min.js ')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

    <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{asset('admin_assets/js/jquery.slimscroll.js')}}"></script>

    <script src="{{asset('admin_assets/js/jquery.flot.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
    <script src=" {{asset('admin_assets/js/jquery.flot.categories.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
    <script src=" {{asset('admin_assets/js/curvedlines.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
    <script src="{{asset('admin_assets/js/jquery.flot.tooltip.min.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

    <script src=" {{asset('admin_assets/js/chartist.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

    <script src="{{asset('admin_assets/js/amcharts.js ')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
    <script src="{{asset('admin_assets/js/serial.js ')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
    <script src="{{asset('admin_assets/js/light.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

    <script src="{{asset('admin_assets/js/pcoded.min.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
    <script src="{{asset('admin_assets/js/vertical-layout.min.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
    <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{asset('admin_assets/js/custom-dashboard.min.js')}}"></script>
    <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{asset('admin_assets/js/script.min.js')}}"></script>


    {{-- <script type="d2d1d6e2f87cbebdf4013b26-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script> --}}
    <script src="{{asset('admin_assets/js/rocket-loader.min.js ')}}" data-cf-settings="d2d1d6e2f87cbebdf4013b26-|49" defer=""></script>
</body>



</html>
