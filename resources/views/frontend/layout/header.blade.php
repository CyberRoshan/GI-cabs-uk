<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{url($setting->fav_icon)}}">
    <link href="{{url('/public/frontend/')}}/assets/css/stylee209.css?v=1.0.0" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <title>@if($title != ""){{ $title }} | @endif {{$setting->sitename}} </title>
  </head>
  <body>
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="page-loading">
            <div class="page-loading-inner">
              <div></div>
              <div></div>
              <div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <header class="header red-header sticky-bar">  
      <div class="container-fluid box-header-home4">
        <div class="main-header">
          <div class="header-left">
            <div class="header-logo">
              <a class="d-flex" href="{{url('/')}}">
                <img alt="Luxride" src="{{isset($setting->footer_logo)?url($setting->footer_logo):url('/public/frontend/')/assets/imgs/template/Gi_Express_Final.svg}}"></a>
              </div>
            <div class="header-nav">
              <nav class="nav-main-menu d-none d-xl-block">
                <ul class="main-menu">
                  <li class=""><a class="active" href="{{url('/')}}">Home</a>
                  </li>
                  <li><a href="{{route('about')}}">About</a></li>
                  <li class=""><a href="{{route('feet')}}">Our Fleet</a>
                  </li>
                  <li class=""><a href="{{route('service')}}">Services</a>
                  </li>
                  <li class=""><a href="{{route('blog')}}">Blog</a>
                  </li>
                  <li><a href="{{route('service')}}">Booking Now</a></li>
                  <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
              </nav>
              <div class="burger-icon burger-icon-white"><span class="burger-icon-mid">
              </span><span class="burger-icon-bottom"></span></div>
            </div>
            <div class="header-right">
              <div class="d-none d-xxl-inline-block align-middle mr-10">
                <a class="text-14-medium call-phone color-white hover-up" href="tel:+41227157000">+41 22 715 7000</a></div>
              <div class="d-none d-xxl-inline-block box-dropdown-cart align-middle
               mr-10"><span class="text-14-medium icon-list icon-account">
                <span class="text-14-medium color-white arrow-down">EN</span></span>
                <div class="dropdown-account">
                  <ul>
                    <li><a class="font-md" href="#"><img src="{{url('/public/frontend/')}}/assets/imgs/template/icons/en.png" alt="Luxride">
                        English</a></li>
                    <li><a class="font-md" href="#"><img src="{{url('/public/frontend/')}}/assets/imgs/template/icons/fr.png" alt="Luxride">
                        French</a></li>
                    <li><a class="font-md" href="#"><img src="{{url('/public/frontend/')}}/assets/imgs/template/icons/cn.png" alt="Luxride">
                        Chiness</a></li>
                  </ul>
                </div>
              </div>
              <div class="box-button-login d-inline-block mr-10 align-middle">
                <a class="btn btn-default hover-up" href="login.php">Log In</a></div>
              <div class="box-button-login d-none2 d-inline-block align-middle">
                <a class="btn btn-white hover-up" href="register.php">Sign Up</a></div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
      <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
          <div class="perfect-scroll">
            <div class="mobile-menu-wrap mobile-header-border">
              <nav class="mt-15">
                <ul class="mobile-menu font-heading">
                  <li class=""><a class="active" href="{{url('/')}}">Home</a>
                  </li>
                  <li><a href="{{route('about')}}">About</a></li>
                  <li class=""><a href="fleet-list.php">Our Fleet</a>
                  </li>
                  <li class="">
                  <a href="{{route('about')}}">Services</a>
                  </li>
                  <li class=""><a href="{{route('about')}}">Blog</a>
                  </li>
                  <li><a href="{{route('about')}}p">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>