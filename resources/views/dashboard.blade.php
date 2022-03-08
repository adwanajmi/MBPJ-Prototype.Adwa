
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>MBPJ - Sistem Kutipan </title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="assets/js/config.js"></script>
    <script src="vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="vendors/overlayscrollbars/OverlayScrollbars.min.css" rel="stylesheet">
    <link href="assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>


  <body>

    {{-- @if (auth()-> user()->role =="admin"|| auth()-> user()->role =="admin") --}}

    {{-- @if (auth()-> user()->role =="Admin") --}}



    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container" data-layout="container">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        <nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
          <script>
            var navbarStyle = localStorage.getItem("navbarStyle");
            if (navbarStyle && navbarStyle !== 'transparent') {
              document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
            }
          </script>
          <div class="d-flex align-items-center">
            <div class="toggle-icon-wrapper">

              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>

            </div><a class="navbar-brand" href="/dashboard">
              <div class="d-flex align-items-center py-3"><img class="me-2" src="mbpj.jpeg" alt="" width="50%" /><span class="font-sans-serif">MBPJ</span>
              </div>
            </a>
          </div>


          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">

                <li class="nav-item">
                <!-- parent pages--><a class="nav-link dropdown-indicator" href="/dashboard" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1">Dashboard</span>
                    </div>
                  </a>




                @if (auth()-> user()->role =="Penyelia" || auth()-> user()->role =="Admin")

                <a class="nav-link" href="/audit" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><svg class="svg-inline--fa fa-comments fa-w-18"  ></svg></span><span class="nav-link-text ps-1">Audit Trail</span>
                    </div>
                  </a>

                <!-- parent pages--><a class="nav-link dropdown-indicator" href="#user" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="user">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-user"></span></span><span class="nav-link-text ps-1">Penyelia</span>
                    </div>
                    </a>

                    <ul class="nav collapse false" id="user">
                        <li class="nav-item"><a class="nav-link" href="/kutipan">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Manage Kutipan</span>
                            </div>

                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="/transaksi">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Transaksi Pembayaran</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="/laporan">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Laporan</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>

                        <li class="nav-item"><a class="nav-link" href="/bilMajlis">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bil Majlis</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>

                        <li class="nav-item"><a class="nav-link" href="/bilAgensiLuar">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bil Agensi Luar</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                    </ul>
                </li>

            </ul>

                @endif

                @if (auth()-> user()->role =="Pelanggan")


                <!-- parent pages--><a class="nav-link dropdown-indicator" href="#user" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="user">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-user"></span></span><span class="nav-link-text ps-1">Pelanggan</span>
                    </div>
                    </a>

                    <ul class="nav collapse false" id="user">
                        <li class="nav-item"><a class="nav-link" href="/pembayaran/create">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pembayaran</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="/penyelenggaraan">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Penyelenggaraan</span>
                            </div>
                          </a>
                          <!-- more inner pages-->
                        </li>

                    </ul>

                @endif



            </div>
          </div>
        </nav>


        <div class="content">
          <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand">

            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="index.html">
              <div class="d-flex align-items-center"><img class="me-2" src="mbpj.jpeg" alt="" width="40" /><span class="font-sans-serif">MBPJ</span>
              </div>
            </a>
            <ul class="navbar-nav align-items-center d-none d-lg-block">
              <li class="nav-item">

              </li>
            </ul>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif


                @if(Auth::check() && Auth::user()->role == "Admin")

                <div class="btn btn-success btn-lg">
                    Admin Access
                </div>

                @endif

                @if(Auth::check() && Auth::user()->role == "Penyelia")

                <div class="btn btn-success btn-lg">
                    Penyelia Access
                </div>

                @endif

                {{-- @if(Auth::check() && Auth::user()->role == "Pelanggan")

                <div class="btn btn-success btn-lg">
                    Pelanggan
                </div>

                @endif --}}

            </div>


            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
              <li class="nav-item">
                <div class="theme-control-toggle fa-icon-wait px-2">
                  <input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark" />
                  <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label>
                  <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label>
                </div>
              </li>
              <li class="nav-item">


              </li>


              <li class="nav-item dropdown"><a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="assets/img/team/3-thumb.png" alt="" />

                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                    <div class="bg-white dark__bg-1000 rounded-2 py-2">


                      <a class="dropdown-item" href="pages/user/profile.html">Profile &amp; account</a>

                      <a class="dropdown-item" href="/pages/authentication/card/logout.html">
                        <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form></a>
                    </div>
                  </div>
              </li>
            </ul>
          </nav>

            @if (auth()-> user()->role =="Pelanggan")
          <div class="row mb-3">
            <div class="col">
              <div class="card bg-100 shadow-none border">
                <div class="row gx-0 flex-between-center">
                  <div class="col-sm-auto d-flex align-items-center"><img class="ms-n2" src="../assets/img/illustrations/crm-bar-chart.png" alt="" width="90" />
                    <div>
                      <h6 class="text-primary fs--1 mb-0">Welcome  </h6>
                      <h4 class="text-primary fw-bold mb-0">{{ auth()->user()->name }} to  <span class="text-info fw-medium">MBPJ - Sistem Kutipan</span></h4>
                    </div><img class="ms-n4 d-md-none d-lg-block" src="../assets/img/illustrations/crm-line-chart.png" alt="" width="150" />
                  </div>
                </div>
              </div>
            </div>
          </div>

            <div class="card mb-3"><img class="card-img-top" src="../../assets/img/MBPJ-1.jpeg" alt="">
                <div class="card-body">
                  <div class="row justify-content-between align-items-center">
                    <div class="col">
                      <div class="d-flex">
                        <div class="calendar me-2"><span class="calendar-month">Dec</span><span class="calendar-day">31 </span></div>
                        <div class="flex-1 fs--1">
                          <h5 class="fs-0">Promosi Diskaun 50% daripada MBPJ</h5>
                          <p class="mb-0">by <a href="/dashboard">MBPJ</a></p><span class="fs-0 text-warning fw-semi-bold">RM49.99 – RM89.99</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-auto mt-4 mt-md-0">
                      <button class="btn btn-falcon-default btn-sm me-2" type="button"><svg class="svg-inline--fa fa-heart fa-w-16 text-danger me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path></svg><!-- <span class="fas fa-heart text-danger me-1"></span> Font Awesome fontawesome.com -->235</button>
                      <button class="btn btn-falcon-default btn-sm me-2" type="button"><svg class="svg-inline--fa fa-share-alt fa-w-14 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z"></path></svg><!-- <span class="fas fa-share-alt me-1"></span> Font Awesome fontawesome.com -->Share</button>
                      <button class="btn btn-falcon-primary btn-sm px-4 px-sm-5" type="button" href="/pembayaran/create">Bayar</button>
                    </div>
                  </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body overflow-hidden p-lg-6">
                  <div class="row align-items-center">
                    <div class="col-lg-6"><img class="img-fluid" src="../assets/img/MBPJ-1.jpeg" alt=""></div>
                    <div class="col-lg-6 ps-lg-4 my-5 text-center text-lg-start">
                      <h3 class="text-primary">Semak Penyelenggaraan!</h3>
                      <p class="lead"></p><a class="btn btn-falcon-primary" href="/penyelenggaraan">Semak</a>
                    </div>
                  </div>
                </div>
            </div>
            @endif

            @if (auth()-> user()->role =="Admin")
            <div class="col-12">
                <div class="card bg-transparent-50 overflow-hidden">
                  <div class="card-header position-relative">
                    <div class="bg-holder d-none d-md-block bg-card z-index-1" style="background-image:url(../assets/img/MBPJ-2.jpeg);background-size:100;background-position:right bottom;z-index:-1;">
                    </div>
                    <!--/.bg-holder-->

                    <div class="position-relative z-index-2">
                      <div>
                        <h3 class="text-primary mb-1">Hello, {{ auth()->user()->name }}!</h3>
                        <p></p>
                      </div>
                      <div class="d-flex py-3">
                        <div class="pe-3">
                          <p class="text-600 fs--1 fw-medium">Today's visit </p>
                          <h4 class="text-800 mb-0">14,209</h4>
                        </div>
                        <div class="ps-3">
                          <p class="text-600 fs--1">Today’s Kutipan </p>
                          <h4 class="text-800 mb-0">RM 21,349.29 </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class="card-body fs--1">
            </div>

            <div class="card mb-3 mb-lg-0">
                <div class="card-header bg-light d-flex justify-content-between">
                  <h5 class="mb-0">Here's what happening today</h5>
                  <form>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                      <option selected="selected">Select Category</option>
                      <option>Health &amp; Wellness</option>
                      <option>Business &amp; Professional</option>

                    </select>
                  </form>
                </div>
            </div>


            <div class="card">
                 <!-- Styles -->
                <style>
                    #chartdiv {
                    width: 100%;
                    height: 500px;
                    }
                    </style>

                    <!-- Resources -->
                    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

                    <!-- Chart code -->
                    <script>
                    am5.ready(function() {

                    // Data
                    var allData = {
                    "2002": {
                        "Friendster": 0,
                        "Facebook": 0,
                        "Flickr": 0,
                        "Google Buzz": 0,
                        "Google+": 0,
                        "Hi5": 0,
                        "Instagram": 0,
                        "MySpace": 0,
                        "Orkut": 0,
                        "Pinterest": 0,
                        "Reddit": 0,
                        "Snapchat": 0,
                        "TikTok": 0,
                        "Tumblr": 0,
                        "Twitter": 0,
                        "WeChat": 0,
                        "Weibo": 0,
                        "Whatsapp": 0,
                        "YouTube": 0
                    },
                    "2003": {
                        "Friendster": 4470000,
                        "Facebook": 0,
                        "Flickr": 0,
                        "Google Buzz": 0,
                        "Google+": 0,
                        "Hi5": 0,
                        "Instagram": 0,
                        "MySpace": 0,
                        "Orkut": 0,
                        "Pinterest": 0,
                        "Reddit": 0,
                        "Snapchat": 0,
                        "TikTok": 0,
                        "Tumblr": 0,
                        "Twitter": 0,
                        "WeChat": 0,
                        "Weibo": 0,
                        "Whatsapp": 0,
                        "YouTube": 0
                    },
                    "2004": {
                        "Friendster": 5970054,
                        "Facebook": 0,
                        "Flickr": 3675135,
                        "Google Buzz": 0,
                        "Google+": 0,
                        "Hi5": 0,
                        "Instagram": 0,
                        "MySpace": 980036,
                        "Orkut": 4900180,
                        "Pinterest": 0,
                        "Reddit": 0,
                        "Snapchat": 0,
                        "TikTok": 0,
                        "Tumblr": 0,
                        "Twitter": 0,
                        "WeChat": 0,
                        "Weibo": 0,
                        "Whatsapp": 0,
                        "YouTube": 0
                    },
                    "2005": {
                        "Friendster": 7459742,
                        "Facebook": 0,
                        "Flickr": 7399354,
                        "Google Buzz": 0,
                        "Google+": 0,
                        "Hi5": 9731610,
                        "Instagram": 0,
                        "MySpace": 19490059,
                        "Orkut": 9865805,
                        "Pinterest": 0,
                        "Reddit": 0,
                        "Snapchat": 0,
                        "TikTok": 0,
                        "Tumblr": 0,
                        "Twitter": 0,
                        "WeChat": 0,
                        "Weibo": 0,
                        "Whatsapp": 0,
                        "YouTube": 1946322
                    },
                    "2006": {
                        "Friendster": 8989854,
                        "Facebook": 0,
                        "Flickr": 14949270,
                        "Google Buzz": 0,
                        "Google+": 0,
                        "Hi5": 19932360,
                        "Instagram": 0,
                        "MySpace": 54763260,
                        "Orkut": 14966180,
                        "Pinterest": 0,
                        "Reddit": 248309,
                        "Snapchat": 0,
                        "TikTok": 0,
                        "Tumblr": 0,
                        "Twitter": 0,
                        "WeChat": 0,
                        "Weibo": 0,
                        "Whatsapp": 0,
                        "YouTube": 19878248
                    },
                    "2007": {
                        "Friendster": 24253200,
                        "Facebook": 0,
                        "Flickr": 29299875,
                        "Google Buzz": 0,
                        "Google+": 0,
                        "Hi5": 29533250,
                        "Instagram": 0,
                        "MySpace": 69299875,
                        "Orkut": 26916562,
                        "Pinterest": 0,
                        "Reddit": 488331,
                        "Snapchat": 0,
                        "TikTok": 0,
                        "Tumblr": 0,
                        "Twitter": 0,
                        "WeChat": 0,
                        "Weibo": 0,
                        "Whatsapp": 0,
                        "YouTube": 143932250
                    },
                    "2008": {
                        "Friendster": 51008911,
                        "Facebook": 100000000,
                        "Flickr": 30000000,
                        "Google Buzz": 0,
                        "Google+": 0,
                        "Hi5": 55045618,
                        "Instagram": 0,
                        "MySpace": 72408233,
                        "Orkut": 44357628,
                        "Pinterest": 0,
                        "Reddit": 1944940,
                        "Snapchat": 0,
                        "TikTok": 0,
                        "Tumblr": 0,
                        "Twitter": 0,
                        "WeChat": 0,
                        "Weibo": 0,
                        "Whatsapp": 0,
                        "YouTube": 294493950
                    },
                    "2009": {
                        "Friendster": 28804331,
                        "Facebook": 276000000,
                        "Flickr": 41834525,
                        "Google Buzz": 0,
                        "Google+": 0,
                        "Hi5": 57893524,
                        "Instagram": 0,
                        "MySpace": 70133095,
                        "Orkut": 47366905,
                        "Pinterest": 0,
                        "Reddit": 3893524,
                        "Snapchat": 0,
                        "TikTok": 0,
                        "Tumblr": 0,
                        "Twitter": 0,
                        "WeChat": 0,
                        "Weibo": 0,
                        "Whatsapp": 0,
                        "YouTube": 413611440
                    },
                    "2010": {
                        "Friendster": 0,
                        "Facebook": 517750000,
                        "Flickr": 54708063,
                        "Google Buzz": 166029650,
                        "Google+": 0,
                        "Hi5": 59953290,
                        "Instagram": 0,
                        "MySpace": 68046710,
                        "Orkut": 49941613,
                        "Pinterest": 0,
                        "Reddit": 0,
                        "Snapchat": 0,
                        "TikTok": 0,
                        "Tumblr": 0,
                        "Twitter": 43250000,
                        "WeChat": 0,
                        "Weibo": 19532900,
                        "Whatsapp": 0,
                        "YouTube": 480551990
                    },
                    "2011": {
                        "Friendster": 0,
                        "Facebook": 766000000,
                        "Flickr": 66954600,
                        "Google Buzz": 170000000,
                        "Google+": 0,
                        "Hi5": 46610848,
                        "Instagram": 0,
                        "MySpace": 46003536,
                        "Orkut": 47609080,
                        "Pinterest": 0,
                        "Reddit": 0,
                        "Snapchat": 0,
                        "TikTok": 0,
                        "Tumblr": 0,
                        "Twitter": 92750000,
                        "WeChat": 47818400,
                        "Weibo": 48691040,
                        "Whatsapp": 0,
                        "YouTube": 642669824
                    },
                    "2012": {
                        "Friendster": 0,
                        "Facebook": 979750000,
                        "Flickr": 79664888,
                        "Google Buzz": 170000000,
                        "Google+": 107319100,
                        "Hi5": 0,
                        "Instagram": 0,
                        "MySpace": 0,
                        "Orkut": 45067022,
                        "Pinterest": 0,
                        "Reddit": 0,
                        "Snapchat": 0,
                        "TikTok": 0,
                        "Tumblr": 146890156,
                        "Twitter": 160250000,
                        "WeChat": 118123370,
                        "Weibo": 79195730,
                        "Whatsapp": 0,
                        "YouTube": 844638200
                    },
                    "2013": {
                        "Friendster": 0,
                        "Facebook": 1170500000,
                        "Flickr": 80000000,
                        "Google Buzz": 170000000,
                        "Google+": 205654700,
                        "Hi5": 0,
                        "Instagram": 117500000,
                        "MySpace": 0,
                        "Orkut": 0,
                        "Pinterest": 0,
                        "Reddit": 0,
                        "Snapchat": 0,
                        "TikTok": 0,
                        "Tumblr": 293482050,
                        "Twitter": 223675000,
                        "WeChat": 196523760,
                        "Weibo": 118261880,
                        "Whatsapp": 300000000,
                        "YouTube": 1065223075
                    },
                    "2014": {
                        "Friendster": 0,
                        "Facebook": 1334000000,
                        "Flickr": 0,
                        "Google Buzz": 170000000,
                        "Google+": 254859015,
                        "Hi5": 0,
                        "Instagram": 250000000,
                        "MySpace": 0,
                        "Orkut": 0,
                        "Pinterest": 0,
                        "Reddit": 135786956,
                        "Snapchat": 0,
                        "TikTok": 0,
                        "Tumblr": 388721163,
                        "Twitter": 223675000,
                        "WeChat": 444232415,
                        "Weibo": 154890345,
                        "Whatsapp": 498750000,
                        "YouTube": 1249451725
                    },
                    "2015": {
                        "Friendster": 0,
                        "Facebook": 1516750000,
                        "Flickr": 0,
                        "Google Buzz": 170000000,
                        "Google+": 298950015,
                        "Hi5": 0,
                        "Instagram": 400000000,
                        "MySpace": 0,
                        "Orkut": 0,
                        "Pinterest": 0,
                        "Reddit": 163346676,
                        "Snapchat": 0,
                        "TikTok": 0,
                        "Tumblr": 475923363,
                        "Twitter": 304500000,
                        "WeChat": 660843407,
                        "Weibo": 208716685,
                        "Whatsapp": 800000000,
                        "YouTube": 1328133360
                    },
                    "2016": {
                        "Friendster": 0,
                        "Facebook": 1753500000,
                        "Flickr": 0,
                        "Google Buzz": 0,
                        "Google+": 398648000,
                        "Hi5": 0,
                        "Instagram": 550000000,
                        "MySpace": 0,
                        "Orkut": 0,
                        "Pinterest": 143250000,
                        "Reddit": 238972480,
                        "Snapchat": 238648000,
                        "TikTok": 0,
                        "Tumblr": 565796720,
                        "Twitter": 314500000,
                        "WeChat": 847512320,
                        "Weibo": 281026560,
                        "Whatsapp": 1000000000,
                        "YouTube": 1399053600
                    },
                    "2017": {
                        "Friendster": 0,
                        "Facebook": 2035750000,
                        "Flickr": 0,
                        "Google Buzz": 0,
                        "Google+": 495657000,
                        "Hi5": 0,
                        "Instagram": 750000000,
                        "MySpace": 0,
                        "Orkut": 0,
                        "Pinterest": 195000000,
                        "Reddit": 297394200,
                        "Snapchat": 0,
                        "TikTok": 239142500,
                        "Tumblr": 593783960,
                        "Twitter": 328250000,
                        "WeChat": 921742750,
                        "Weibo": 357569030,
                        "Whatsapp": 1333333333,
                        "YouTube": 1495657000
                    },
                    "2018": {
                        "Friendster": 0,
                        "Facebook": 2255250000,
                        "Flickr": 0,
                        "Google Buzz": 0,
                        "Google+": 430000000,
                        "Hi5": 0,
                        "Instagram": 1000000000,
                        "MySpace": 0,
                        "Orkut": 0,
                        "Pinterest": 246500000,
                        "Reddit": 355000000,
                        "Snapchat": 0,
                        "TikTok": 500000000,
                        "Tumblr": 624000000,
                        "Twitter": 329500000,
                        "WeChat": 1000000000,
                        "Weibo": 431000000,
                        "Whatsapp": 1433333333,
                        "YouTube": 1900000000
                    }
                    };


                    // Create root element
                    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
                    var root = am5.Root.new("chartdiv");

                    root.numberFormatter.setAll({
                    numberFormat: "#a",

                    // Group only into M (millions), and B (billions)
                    bigNumberPrefixes: [
                        { number: 1e6, suffix: "M" },
                        { number: 1e9, suffix: "B" }
                    ],

                    // Do not use small number prefixes at all
                    smallNumberPrefixes: []
                    });

                    var stepDuration = 2000;


                    // Set themes
                    // https://www.amcharts.com/docs/v5/concepts/themes/
                    root.setThemes([am5themes_Animated.new(root)]);


                    // Create chart
                    // https://www.amcharts.com/docs/v5/charts/xy-chart/
                    var chart = root.container.children.push(am5xy.XYChart.new(root, {
                    panX: true,
                    panY: true,
                    wheelX: "none",
                    wheelY: "none"
                    }));


                    // We don't want zoom-out button to appear while animating, so we hide it at all
                    chart.zoomOutButton.set("forceHidden", true);


                    // Create axes
                    // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
                    var yRenderer = am5xy.AxisRendererY.new(root, {
                    minGridDistance: 20,
                    inversed: true
                    });
                    // hide grid
                    yRenderer.grid.template.set("visible", false);

                    var yAxis = chart.yAxes.push(am5xy.CategoryAxis.new(root, {
                    maxDeviation: 0,
                    categoryField: "network",
                    renderer: yRenderer
                    }));

                    var xAxis = chart.xAxes.push(am5xy.ValueAxis.new(root, {
                    maxDeviation: 0,
                    min: 0,
                    strictMinMax: true,
                    extraMax: 0.1,
                    renderer: am5xy.AxisRendererX.new(root, {})
                    }));

                    xAxis.set("interpolationDuration", stepDuration / 10);
                    xAxis.set("interpolationEasing", am5.ease.linear);


                    // Add series
                    // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
                    var series = chart.series.push(am5xy.ColumnSeries.new(root, {
                    xAxis: xAxis,
                    yAxis: yAxis,
                    valueXField: "value",
                    categoryYField: "network"
                    }));

                    // Rounded corners for columns
                    series.columns.template.setAll({ cornerRadiusBR: 5, cornerRadiusTR: 5 });

                    // Make each column to be of a different color
                    series.columns.template.adapters.add("fill", function (fill, target) {
                    return chart.get("colors").getIndex(series.columns.indexOf(target));
                    });

                    series.columns.template.adapters.add("stroke", function (stroke, target) {
                    return chart.get("colors").getIndex(series.columns.indexOf(target));
                    });

                    // Add label bullet
                    series.bullets.push(function () {
                    return am5.Bullet.new(root, {
                        locationX: 1,
                        sprite: am5.Label.new(root, {
                        text: "{valueXWorking.formatNumber('#.# a')}",
                        fill: root.interfaceColors.get("alternativeText"),
                        centerX: am5.p100,
                        centerY: am5.p50,
                        populateText: true
                        })
                    });
                    });

                    var label = chart.plotContainer.children.push(am5.Label.new(root, {
                    text: "2002",
                    fontSize: "8em",
                    opacity: 0.2,
                    x: am5.p100,
                    y: am5.p100,
                    centerY: am5.p100,
                    centerX: am5.p100
                    }));

                    // Get series item by category
                    function getSeriesItem(category) {
                    for (var i = 0; i < series.dataItems.length; i++) {
                        var dataItem = series.dataItems[i];
                        if (dataItem.get("categoryY") == category) {
                        return dataItem;
                        }
                    }
                    }

                    // Axis sorting
                    function sortCategoryAxis() {
                    // sort by value
                    series.dataItems.sort(function (x, y) {
                        return y.get("valueX") - x.get("valueX"); // descending
                        //return x.get("valueX") - y.get("valueX"); // ascending
                    });

                    // go through each axis item
                    am5.array.each(yAxis.dataItems, function (dataItem) {
                        // get corresponding series item
                        var seriesDataItem = getSeriesItem(dataItem.get("category"));

                        if (seriesDataItem) {
                        // get index of series data item
                        var index = series.dataItems.indexOf(seriesDataItem);
                        // calculate delta position
                        var deltaPosition =
                            (index - dataItem.get("index", 0)) / series.dataItems.length;
                        // set index to be the same as series data item index
                        if (dataItem.get("index") != index) {
                            dataItem.set("index", index);
                            // set deltaPosition instanlty
                            dataItem.set("deltaPosition", -deltaPosition);
                            // animate delta position to 0
                            dataItem.animate({
                            key: "deltaPosition",
                            to: 0,
                            duration: stepDuration / 2,
                            easing: am5.ease.out(am5.ease.cubic)
                            });
                        }
                        }
                    });
                    // sort axis items by index.
                    // This changes the order instantly, but as deltaPosition is set, they keep in the same places and then animate to true positions.
                    yAxis.dataItems.sort(function (x, y) {
                        return x.get("index") - y.get("index");
                    });
                    }

                    var year = 2002;

                    // update data with values each 1.5 sec
                    var interval = setInterval(function () {
                    year++;

                    if (year > 2018) {
                        clearInterval(interval);
                        clearInterval(sortInterval);
                    }

                    updateData();
                    }, stepDuration);

                    var sortInterval = setInterval(function () {
                    sortCategoryAxis();
                    }, 100);

                    function setInitialData() {
                    var d = allData[year];

                    for (var n in d) {
                        series.data.push({ network: n, value: d[n] });
                        yAxis.data.push({ network: n });
                    }
                    }

                    function updateData() {
                    var itemsWithNonZero = 0;

                    if (allData[year]) {
                        label.set("text", year.toString());

                        am5.array.each(series.dataItems, function (dataItem) {
                        var category = dataItem.get("categoryY");
                        var value = allData[year][category];

                        if (value > 0) {
                            itemsWithNonZero++;
                        }

                        dataItem.animate({
                            key: "valueX",
                            to: value,
                            duration: stepDuration,
                            easing: am5.ease.linear
                        });
                        dataItem.animate({
                            key: "valueXWorking",
                            to: value,
                            duration: stepDuration,
                            easing: am5.ease.linear
                        });
                        });

                        yAxis.zoom(0, itemsWithNonZero / yAxis.dataItems.length);
                    }
                    }

                    setInitialData();
                    setTimeout(function () {
                    year++;
                    updateData();
                    }, 50);

                    // Make stuff animate on load
                    // https://www.amcharts.com/docs/v5/concepts/animations/
                    series.appear(1000);
                    chart.appear(1000, 100);

                    }); // end am5.ready()
                    </script>

                    <!-- HTML -->
                    <div id="chartdiv"></div>
              </div>

            <div class="card-body fs--1">
            </div>

            <div class="card mb-3 mb-lg-0">
                <div class="card-header bg-light d-flex justify-content-between">
                  <h5 class="mb-0">Events</h5>
                </div>
                <div class="card-body fs--1">
                  <div class="row">
                    <div class="col-md-6 h-100">
                      <div class="d-flex btn-reveal-trigger">
                        <div class="flex-1 position-relative ps-3">
                          <h6 class="fs-0 mb-0"><a href="/audit">Audit Trail</a></h6>
                          <p class="mb-1">Organized by <a href="#!" class="text-700">AID MIT</a></p>
                          <p class="text-1000 mb-0">Access Audit Trail</p>
                          <p class="text-1000 mb-0">Make adjustment</p>The Liberty Warehouse, New Yourk
                          <div class="border-dashed-bottom my-3"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 h-100">
                      <div class="d-flex btn-reveal-trigger">
                        <div class="flex-1 position-relative ps-3">
                          <h6 class="fs-0 mb-0"><a href="/user">Manage User</a></h6>
                          <p class="mb-1">Organized by <a href="#!" class="text-700">American Nuclear Society</a></p>
                          <p class="text-1000 mb-0">Manage Pelanggan</p>
                          <p class="text-1000 mb-0">Manage Admin</p>Place: Workbar - Central Square, Cambridge
                          <div class="border-dashed-bottom my-3"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 h-100">
                      <div class="d-flex btn-reveal-trigger">
                        <div class="flex-1 position-relative ps-3">
                          <h6 class="fs-0 mb-0"><a href="/audit">Newmarket Nights</a></h6>
                          <p class="mb-1">Organized by <a href="#!" class="text-700">University of Oxford</a></p>
                          <p class="text-1000 mb-0">Time: 6:00AM</p>
                          <p class="text-1000 mb-0">Duration: 6:00AM - 5:00PM</p>Place: Cambridge Boat Club, Cambridge
                          <div class="border-dashed-bottom my-3"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 h-100">
                      <div class="d-flex btn-reveal-trigger">
                        <div class="flex-1 position-relative ps-3">
                          <h6 class="fs-0 mb-0"><a href="../../app/events/event-detail.html">31st Night Celebration</a></h6>
                          <p class="mb-1">Organized by <a href="#!" class="text-700">Chamber Music Society</a></p>
                          <p class="text-1000 mb-0">Time: 11:00PM</p>
                          <p class="text-1000 mb-0">280 people interested</p>Place: Tavern on the Greend, New York
                          <div class="border-dashed-bottom my-3"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>


            @endif

            @if (auth()-> user()->role =="Penyelia")

            <div class="col-xxl-6 col-lg-12">
                <div class="card h-100">
                  <div class="bg-holder bg-card" style="background-image:url(../assets/img/icons/spot-illustrations/corner-3.png);">
                  </div>
                  <!--/.bg-holder-->

                  <div class="card-header z-index-1">
                    <h5 class="text-primary">Welcome {{ auth()->user()->name }} to MBPJ - Sistem Kutipan! </h5>
                    <h6 class="text-600">Here are some quick links for you to start </h6>
                  </div>
                  <div class="card-body z-index-1">
                    <div class="row g-2 h-100 align-items-end">
                      <div class="col-sm-6 col-md-5">
                        <div class="d-flex position-relative">
                          <div class="icon-item icon-item-sm border rounded-3 shadow-none me-2"><svg class="svg-inline--fa fa-chess-rook fa-w-12 text-primary" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chess-rook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M368 32h-56a16 16 0 0 0-16 16v48h-48V48a16 16 0 0 0-16-16h-80a16 16 0 0 0-16 16v48H88.1V48a16 16 0 0 0-16-16H16A16 16 0 0 0 0 48v176l64 32c0 48.33-1.54 95-13.21 160h282.42C321.54 351 320 303.72 320 256l64-32V48a16 16 0 0 0-16-16zM224 320h-64v-64a32 32 0 0 1 64 0zm144 128H16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h352a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z"></path></svg><!-- <span class="fas fa-chess-rook text-primary"></span> Font Awesome fontawesome.com --></div>
                          <div class="flex-1"><a class="stretched-link" href="/kutipan">
                              <h6 class="text-800 mb-0">Kutipan</h6>
                            </a>
                            <p class="mb-0 fs--2 text-500">Manage Kutipan</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-5">
                        <div class="d-flex position-relative">
                          <div class="icon-item icon-item-sm border rounded-3 shadow-none me-2"><svg class="svg-inline--fa fa-crown fa-w-20 text-warning" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="crown" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M528 448H112c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h416c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm64-320c-26.5 0-48 21.5-48 48 0 7.1 1.6 13.7 4.4 19.8L476 239.2c-15.4 9.2-35.3 4-44.2-11.6L350.3 85C361 76.2 368 63 368 48c0-26.5-21.5-48-48-48s-48 21.5-48 48c0 15 7 28.2 17.7 37l-81.5 142.6c-8.9 15.6-28.9 20.8-44.2 11.6l-72.3-43.4c2.7-6 4.4-12.7 4.4-19.8 0-26.5-21.5-48-48-48S0 149.5 0 176s21.5 48 48 48c2.6 0 5.2-.4 7.7-.8L128 416h384l72.3-192.8c2.5.4 5.1.8 7.7.8 26.5 0 48-21.5 48-48s-21.5-48-48-48z"></path></svg><!-- <span class="fas fa-crown text-warning"></span> Font Awesome fontawesome.com --></div>
                          <div class="flex-1"><a class="stretched-link" href="/laporan">
                              <h6 class="text-800 mb-0">Laporan</h6>
                            </a>
                            <p class="mb-0 fs--2 text-500">Access Laporan </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-5">
                        <div class="d-flex position-relative">
                          <div class="icon-item icon-item-sm border rounded-3 shadow-none me-2"><svg class="svg-inline--fa fa-video fa-w-18 text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="video" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M336.2 64H47.8C21.4 64 0 85.4 0 111.8v288.4C0 426.6 21.4 448 47.8 448h288.4c26.4 0 47.8-21.4 47.8-47.8V111.8c0-26.4-21.4-47.8-47.8-47.8zm189.4 37.7L416 177.3v157.4l109.6 75.5c21.2 14.6 50.4-.3 50.4-25.8V127.5c0-25.4-29.1-40.4-50.4-25.8z"></path></svg><!-- <span class="fas fa-video text-success"></span> Font Awesome fontawesome.com --></div>
                          <div class="flex-1"><a class="stretched-link" href="/transaksi">
                              <h6 class="text-800 mb-0">Transasksi Pembayaran</h6>
                            </a>
                            <p class="mb-0 fs--2 text-500">View Transaksi Pembayaran</p>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
            </div>

            <div class="card-body fs--1">
            </div>


            <div class="card-header bg-light d-flex justify-content-between">
                <h5 class="mb-0">Transaksi Pembayaran dari Jan-Dec 2021</h5>
            </div>

            <div class="card">
                  <!-- Styles -->
                    <style>
                        #chartdiv {
                        width: 100%;
                        height: 500px;
                        }
                    </style>

                        <!-- Resources -->
                        <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
                        <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
                        <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

                        <!-- Chart code -->
                        <script>
                        am5.ready(function() {

                        // Create root element
                        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
                        var root = am5.Root.new("chartdiv");


                        // Set themes
                        // https://www.amcharts.com/docs/v5/concepts/themes/
                        root.setThemes([
                        am5themes_Animated.new(root)
                        ]);


                        // Create chart
                        // https://www.amcharts.com/docs/v5/charts/xy-chart/
                        var chart = root.container.children.push(am5xy.XYChart.new(root, {
                        panX: false,
                        panY: false,
                        wheelX: "panX",
                        wheelY: "zoomX",
                        layout: root.verticalLayout
                        }));

                        var colors = chart.get("colors");

                        var data = [{
                        country: "JAN",
                        visits: 725
                        }, {
                        country: "FEB",
                        visits: 625
                        }, {
                        country: "MAC",
                        visits: 602
                        }, {
                        country: "APR",
                        visits: 509
                        }, {
                        country: "MAY",
                        visits: 322
                        }, {
                        country: "JUN",
                        visits: 214
                        }, {
                        country: "JUL",
                        visits: 204
                        }, {
                        country: "AUG",
                        visits: 198
                        }, {
                        country: "SEP",
                        visits: 165
                        }, {
                        country: "OCT",
                        visits: 130
                        }, {
                        country: "NOV",
                        visits: 93
                        }, {
                        country: "DEC",
                        visits: 41
                        }];

                        prepareParetoData();

                        function prepareParetoData() {
                        var total = 0;

                        for (var i = 0; i < data.length; i++) {
                            var value = data[i].visits;
                            total += value;
                        }

                        var sum = 0;
                        for (var i = 0; i < data.length; i++) {
                            var value = data[i].visits;
                            sum += value;
                            data[i].pareto = sum / total * 100;
                        }
                        }



                        // Create axes
                        // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
                        var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
                        categoryField: "country",
                        renderer: am5xy.AxisRendererX.new(root, {
                            minGridDistance: 30
                        })
                        }));

                        xAxis.get("renderer").labels.template.setAll({
                        paddingTop: 20
                        });

                        xAxis.data.setAll(data);

                        var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                        renderer: am5xy.AxisRendererY.new(root, {})
                        }));

                        var paretoAxisRenderer = am5xy.AxisRendererY.new(root, {opposite:true});
                        var paretoAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                        renderer: paretoAxisRenderer,
                        min:0,
                        max:100,
                        strictMinMax:true
                        }));

                        paretoAxisRenderer.grid.template.set("forceHidden", true);
                        paretoAxis.set("numberFormat", "#'%");


                        // Add series
                        // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
                        var series = chart.series.push(am5xy.ColumnSeries.new(root, {
                        xAxis: xAxis,
                        yAxis: yAxis,
                        valueYField: "visits",
                        categoryXField: "country"
                        }));

                        series.columns.template.setAll({
                        tooltipText: "{categoryX}: {valueY}",
                        tooltipY: 0,
                        strokeOpacity: 0,
                        cornerRadiusTL: 6,
                        cornerRadiusTR: 6
                        });

                        series.columns.template.adapters.add("fill", function(fill, target) {
                        return chart.get("colors").getIndex(series.dataItems.indexOf(target.dataItem));
                        })


                        // pareto series
                        var paretoSeries = chart.series.push(am5xy.LineSeries.new(root, {
                        xAxis: xAxis,
                        yAxis: paretoAxis,
                        valueYField: "pareto",
                        categoryXField: "country",
                        stroke: root.interfaceColors.get("alternativeBackground"),
                        maskBullets:false
                        }));

                        paretoSeries.bullets.push(function() {
                        return am5.Bullet.new(root, {
                            locationY: 1,
                            sprite: am5.Circle.new(root, {
                            radius: 5,
                            fill: series.get("fill"),
                            stroke:root.interfaceColors.get("alternativeBackground")
                            })
                        })
                        })

                        series.data.setAll(data);
                        paretoSeries.data.setAll(data);

                        // Make stuff animate on load
                        // https://www.amcharts.com/docs/v5/concepts/animations/
                        series.appear();
                        chart.appear(1000, 100);

                        }); // end am5.ready()
                        </script>

                        <!-- HTML -->
                <div id="chartdiv"></div>
            </div>

            <div class="card-body fs--1">
            </div>

            //letak pape

            <div class="card-body fs--1">
            </div>


            <div class="row g-3">
                <div class="col-xxl-8">
                  <div class="card overflow-hidden h-100">
                    <div class="card-body p-0 management-calendar">
                      <div class="row g-3">
                        <div class="col-md-7">
                          <div class="p-card">
                            <div class="d-flex justify-content-between">
                              <div class="order-md-1">
                                <button class="btn btn-sm border me-1 shadow-sm" type="button" data-event="prev" data-bs-toggle="tooltip" title="Previous"><span class="fas fa-chevron-left"></span></button>
                                <button class="btn btn-sm text-secondary border px-sm-4 shadow-sm" type="button" data-event="today">Today</button>
                                <button class="btn btn-sm border ms-1 shadow-sm" type="button" data-event="next" data-bs-toggle="tooltip" title="Next"><span class="fas fa-chevron-right"></span></button>
                              </div>
                              <button class="btn btn-sm text-primary border order-md-0" type="button" data-bs-toggle="modal" data-bs-target="#addEventModal"> <span class="fas fa-plus me-2"></span>New Schedule</button>
                            </div>
                          </div>
                          <div class="calendar-outline px-3" id="managementAppCalendar" data-calendar-option='{"title":"management-calendar-title","day":"management-calendar-day","events":"management-calendar-events"}'></div>
                        </div>
                        <div class="col-md-5 bg-light pt-3">
                          <div class="px-3">
                            <h4 class="mb-0 fs-0 fs-sm-1 fs-lg-2" id="management-calendar-title"></h4>
                            <p class="text-500 mb-0" id="management-calendar-day"></p>
                            <ul class="list-unstyled mt-3 scrollbar management-calendar-events" id="management-calendar-events"></ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-4">
                  <div class="card h-100">
                    <div class="card-header">
                      <h6 class="mb-0">To Do List</h6>
                    </div>
                    <div class="card-body p-0 scrollbar to-do-list-body-height">
                      <div class="d-flex justify-content-between border-top hover-actions-trigger btn-reveal-trigger px-card border-200 todo-list-item">
                        <div class="form-check mb-0 d-flex align-items-center">
                          <input class="form-check-input rounded-circle form-check-line-through p-2 form-check-input-primary" type="checkbox" id="checkbox-todo-0" />
                          <label class="form-check-label mb-0 p-3" for="checkbox-todo-0">Design a facebook ad</label>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="hover-actions">
                            <button class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-clock"></span></button>
                            <button class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-user-plus"> </span></button>
                          </div>
                          <div class="dropdown font-sans-serif btn-reveal-trigger">
                            <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none" type="button" id="management-to-do-list-0" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                            <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="management-to-do-list-0"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between border-top hover-actions-trigger btn-reveal-trigger px-card border-200 todo-list-item">
                        <div class="form-check mb-0 d-flex align-items-center">
                          <input class="form-check-input rounded-circle form-check-line-through p-2 form-check-input-secondary" type="checkbox" id="checkbox-todo-1" />
                          <label class="form-check-label mb-0 p-3" for="checkbox-todo-1">Analyze Data</label>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="hover-actions">
                            <button class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-clock"></span></button>
                            <button class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-user-plus"> </span></button>
                          </div>
                          <div class="dropdown font-sans-serif btn-reveal-trigger">
                            <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none" type="button" id="management-to-do-list-1" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                            <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="management-to-do-list-1"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between border-top hover-actions-trigger btn-reveal-trigger px-card border-200 todo-list-item">
                        <div class="form-check mb-0 d-flex align-items-center">
                          <input class="form-check-input rounded-circle form-check-line-through p-2 form-check-input-success" type="checkbox" id="checkbox-todo-2" />
                          <label class="form-check-label mb-0 p-3" for="checkbox-todo-2">Youtube campaign</label>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="hover-actions">
                            <button class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-clock"></span></button>
                            <button class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-user-plus"> </span></button>
                          </div>
                          <div class="dropdown font-sans-serif btn-reveal-trigger">
                            <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none" type="button" id="management-to-do-list-2" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                            <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="management-to-do-list-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between border-top hover-actions-trigger btn-reveal-trigger px-card border-200 todo-list-item">
                        <div class="form-check mb-0 d-flex align-items-center">
                          <input class="form-check-input rounded-circle form-check-line-through p-2 form-check-input-warning" type="checkbox" id="checkbox-todo-3" />
                          <label class="form-check-label mb-0 p-3" for="checkbox-todo-3">Assign 10 employee</label>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="hover-actions">
                            <button class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-clock"></span></button>
                            <button class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-user-plus"> </span></button>
                          </div>
                          <div class="dropdown font-sans-serif btn-reveal-trigger">
                            <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none" type="button" id="management-to-do-list-3" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                            <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="management-to-do-list-3"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between border-top hover-actions-trigger btn-reveal-trigger px-card border-200 todo-list-item">
                        <div class="form-check mb-0 d-flex align-items-center">
                          <input class="form-check-input rounded-circle form-check-line-through p-2 form-check-input-danger" type="checkbox" id="checkbox-todo-4" />
                          <label class="form-check-label mb-0 p-3" for="checkbox-todo-4">Meeting at 12</label>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="hover-actions">
                            <button class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-clock"></span></button>
                            <button class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-user-plus"> </span></button>
                          </div>
                          <div class="dropdown font-sans-serif btn-reveal-trigger">
                            <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none" type="button" id="management-to-do-list-4" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                            <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="management-to-do-list-4"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between border-top hover-actions-trigger btn-reveal-trigger px-card border-200 todo-list-item border-bottom">
                        <div class="form-check mb-0 d-flex align-items-center">
                          <input class="form-check-input rounded-circle form-check-line-through p-2 form-check-input-info" type="checkbox" id="checkbox-todo-5" />
                          <label class="form-check-label mb-0 p-3" for="checkbox-todo-5">Meeting at 10</label>
                        </div>
                        <div class="d-flex align-items-center">
                          <div class="hover-actions">
                            <button class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-clock"></span></button>
                            <button class="btn btn-light icon-item rounded-3 me-2 fs--2 icon-item-sm"><span class="fas fa-user-plus"> </span></button>
                          </div>
                          <div class="dropdown font-sans-serif btn-reveal-trigger">
                            <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal-sm transition-none" type="button" id="management-to-do-list-5" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                            <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="management-to-do-list-5"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link d-block py-2" href="#!"><span class="fas fa-plus me-1 fs--2"></span>Add New Task</a></div>
                  </div>
                </div>
            </div>




            @endif



        </div>

      </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
    {{-- @endif --}}

    <div class="modal fade modal-fixed-right modal-theme overflow-hidden" id="settings-modal" tabindex="-1" role="dialog" aria-labelledby="settings-modal-label" aria-hidden="true">
      <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content border-0 vh-100 scrollbar-overlay">
          <div class="modal-header modal-header-settings bg-shape">
            <div class="z-index-1 py-1 light">
              <h5 class="text-white" id="settings-modal-label"> <span class="fas fa-palette me-2 fs-0"></span>Settings</h5>
              <p class="mb-0 fs--1 text-white opacity-75"> Set your own customized style</p>
            </div>
            <button class="btn-close btn-close-white z-index-1 mt-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body px-card" id="themeController">
            <h5 class="fs-0">Color Scheme</h5>
            <p class="fs--1">Choose the perfect color mode for your app.</p>
            <div class="btn-group d-block w-100 btn-group-navbar-style">
              <div class="row gx-2">
                <div class="col-6">
                  <input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="theme" />
                  <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="assets/img/generic/falcon-mode-default.jpg" alt=""/></span><span class="label-text">Light</span></label>
                </div>
                <div class="col-6">
                  <input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="theme" />
                  <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="assets/img/generic/falcon-mode-dark.jpg" alt=""/></span><span class="label-text"> Dark</span></label>
                </div>
              </div>
            </div>
            <hr />
            <div class="d-flex justify-content-between">
              <div class="d-flex align-items-start"><img class="me-2" src="assets/img/icons/left-arrow-from-left.svg" width="20" alt="" />
                <div class="flex-1">
                  <h5 class="fs-0">RTL Mode</h5>
                  <p class="fs--1 mb-0">Switch your language direction </p><a class="fs--1" href="documentation/customization/configuration.html">RTL Documentation</a>
                </div>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input ms-0" id="mode-rtl" type="checkbox" data-theme-control="isRTL" />
              </div>
            </div>
            <hr />
            <div class="d-flex justify-content-between">
              <div class="d-flex align-items-start"><img class="me-2" src="assets/img/icons/arrows-h.svg" width="20" alt="" />
                <div class="flex-1">
                  <h5 class="fs-0">Fluid Layout</h5>
                  <p class="fs--1 mb-0">Toggle container layout system </p><a class="fs--1" href="documentation/customization/configuration.html">Fluid Documentation</a>
                </div>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input ms-0" id="mode-fluid" type="checkbox" data-theme-control="isFluid" />
              </div>
            </div>
            <hr />
            <div class="d-flex align-items-start"><img class="me-2" src="assets/img/icons/paragraph.svg" width="20" alt="" />
              <div class="flex-1">
                <h5 class="fs-0 d-flex align-items-center">Navigation Position </h5>
                <p class="fs--1 mb-2">Select a suitable navigation system for your web application </p>
                <div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" id="option-navbar-vertical" type="radio" name="navbar" value="vertical" data-page-url="modules/components/navs-and-tabs/vertical-navbar.html" data-theme-control="navbarPosition" />
                    <label class="form-check-label" for="option-navbar-vertical">Vertical</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" id="option-navbar-top" type="radio" name="navbar" value="top" data-page-url="modules/components/navs-and-tabs/top-navbar.html" data-theme-control="navbarPosition" />
                    <label class="form-check-label" for="option-navbar-top">Top</label>
                  </div>
                  <div class="form-check form-check-inline me-0">
                    <input class="form-check-input" id="option-navbar-combo" type="radio" name="navbar" value="combo" data-page-url="modules/components/navs-and-tabs/combo-navbar.html" data-theme-control="navbarPosition" />
                    <label class="form-check-label" for="option-navbar-combo">Combo</label>
                  </div>
                </div>
              </div>
            </div>
            <hr />
            <h5 class="fs-0 d-flex align-items-center">Vertical Navbar Style</h5>
            <p class="fs--1 mb-0">Switch between styles for your vertical navbar </p>
            <p> <a class="fs--1" href="modules/components/navs-and-tabs/vertical-navbar.html#navbar-styles">See Documentation</a></p>
            <div class="btn-group d-block w-100 btn-group-navbar-style">
              <div class="row gx-2">
                <div class="col-6">
                  <input class="btn-check" id="navbar-style-transparent" type="radio" name="navbarStyle" value="transparent" data-theme-control="navbarStyle" />
                  <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-transparent"> <img class="img-fluid img-prototype" src="assets/img/generic/default.png" alt="" /><span class="label-text"> Transparent</span></label>
                </div>
                <div class="col-6">
                  <input class="btn-check" id="navbar-style-inverted" type="radio" name="navbarStyle" value="inverted" data-theme-control="navbarStyle" />
                  <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-inverted"> <img class="img-fluid img-prototype" src="assets/img/generic/inverted.png" alt="" /><span class="label-text"> Inverted</span></label>
                </div>
                <div class="col-6">
                  <input class="btn-check" id="navbar-style-card" type="radio" name="navbarStyle" value="card" data-theme-control="navbarStyle" />
                  <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-card"> <img class="img-fluid img-prototype" src="assets/img/generic/card.png" alt="" /><span class="label-text"> Card</span></label>
                </div>
                <div class="col-6">
                  <input class="btn-check" id="navbar-style-vibrant" type="radio" name="navbarStyle" value="vibrant" data-theme-control="navbarStyle" />
                  <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-vibrant"> <img class="img-fluid img-prototype" src="assets/img/generic/vibrant.png" alt="" /><span class="label-text"> Vibrant</span></label>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div><a class="card setting-toggle" href="#settings-modal" data-bs-toggle="modal">
      <div class="card-body d-flex align-items-center py-md-2 px-2 py-1">
        <div class="bg-soft-primary position-relative rounded-start" style="height:34px;width:28px">
          <div class="settings-popover"><span class="ripple"><span class="fa-spin position-absolute all-0 d-flex flex-center"><span class="icon-spin position-absolute all-0 d-flex flex-center">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path>
                  </svg></span></span></span></div>
        </div><small class="text-uppercase text-primary fw-bold bg-soft-primary py-2 pe-2 ps-1 rounded-end">customize</small>
      </div>
    </a>


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/echarts/echarts.min.js"></script>
    <script src="vendors/progressbar/progressbar.min.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="assets/js/theme.js"></script>

  </body>

</html>
