<!DOCTYPE html>
<html lang="en" class="app">

<head>
    <meta charset="utf-8" />
    <title>Metro New | Smart Karaoke Skin</title>
    <meta name="description" content="Metro New" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
    <link rel="stylesheet" href="js/jPlayer/jplayer.flat.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/simple-line-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/font.css" type="text/css" />
    <link rel="stylesheet" href="css/iziToast.min.css" type="text/css" />
    <link rel="stylesheet" href="css/powerange.min.css" type="text/css" />
    <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css">    
    <link rel="stylesheet" href="css/app.css" type="text/css" />
    <link rel="stylesheet" href="css/custom.css" type="text/css" />
    <link rel="stylesheet" href="css/custom-responsive.css" type="text/css" />
    <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>

<body class="">
    <section class="vbox">
        <header class="bg-gradient header header-md navbar navbar-fixed-top-xs">
            <div class="navbar-header aside nav-xs">
                <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
                    <i class="icon-list"></i>
                </a>
                <a href="index.html" class="navbar-brand visible-xs">
                    <img src="images/logo-smart.png" alt="." class="img-responsive">
                </a>
                <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
                    <i class="icon-user icon"></i>
                </a>
            </div>
            <ul class="nav navbar-nav hidden-xs">
                <li>
                    <a href="#nav,.navbar-header" data-toggle="class:nav-xs,nav-xs" class="text-muted" id="toggle-header">
                        <img src="images/toggle-header.png">
                    </a>
                </li>
            </ul>
            <div class="navbar-left">
                <div class="nav navbar-nav hidden-xs nav-user user">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle clear inline-table" data-toggle="dropdown">
                            <div class="thumb-md avatar">
                                <img src="images/laska.png" alt="...">
                            </div>
                        </a>
                        <div class="user-detail">
                            <strong>Guest</strong>
                            <br><a href="signin.html"> Please Login</a>
                        </div>                                                
                        <ul class="dropdown-menu animated fadeInUp">
                            <li>
                                <a href="#">Settings</a>
                            </li>
                            <li>
                                <a href="#">Profile</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="badge bg-danger pull-right">3</span> Notifications
                                </a>
                            </li>
                            <li>
                                <a href="#">Help</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="modal.lockme.new.html" data-toggle="ajaxModal">Logout</a>
                            </li>
                        </ul>
                    </li>
                </div>
            </div>
            <form class="navbar-form navbar-left hidden-xs search-header" role="search">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control search-song" placeholder="Search Artists or Song">
                        <span class="input-group-btn">
              <button type="submit" class="no-background"><img src="images/search-ico.png" alt="..."></button>
            </span>
                    </div>
                </div>
            </form>
            <div class="navbar-right hidden-xs">
                <div class="nav navbar-nav hidden-xs nav-menu menus">
                    <li class="menu" id="home">
                        <a href="index.php" class="center">
                            <div class="thumb-lg">
                                <img src="images/home-ico.png" alt="...">
                            </div>
                            <p class="menu-title">MAIN PAGE</p>
                        </a>
                    </li>
                    <li class="menu" id="newrelease">
                        <a href="#" class="center">
                            <div class="thumb-lg">
                                <img src="images/new-release-ico.png" alt="...">
                            </div>
                            <p class="menu-title">NEW RELEASE</p>
                        </a>
                    </li>                    
                    <li class="menu" id="tophits">
                        <a href="tophits.php" class="center">
                            <div class="thumb-lg">
                                <img src="images/top-hits-ico.png" alt="...">
                            </div>
                            <p class="menu-title">TOP HITS</p>
                        </a>
                    </li>
                    <li class="menu" id="mysong">
                        <a href="#" class="center">
                            <div class="thumb-lg">
                                <img src="images/my-music-ico.png" alt="...">
                            </div>
                            <p class="menu-title">GENRES</p>
                        </a>
                    </li>                    
                    <li class="menu" id="playlist-menu">
                        <a href="#" class="center">
                            <div class="thumb-lg">
                                <img src="images/playlist-ico.png" alt="...">
                            </div>
                            <p class="menu-title">PLAYLIST</p>
                        </a>
                    </li>
                </div>
            </div>
        </header>
