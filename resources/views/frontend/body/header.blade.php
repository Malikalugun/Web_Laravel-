<?php
$footerpage = App\Models\Footer::find(1);
$route = Route::current()->getName();
?>
<header id="header-part">
       
    <div class="header-top d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-contact text-lg-left text-center">
                        <ul>
                            <li><img src="{{asset('frontend/assets/images/all-icon/map.png')}}" alt="icon"><span>{{$footerpage->address}}</span></li>
                            <li><img src="{{asset('frontend/assets/images/all-icon/email.png')}}" alt="icon"><span>{{$footerpage->email}}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-opening-time text-lg-right text-center">
                        <p>Opening Hours : Monday to Saturay - 10 Am to 6 Pm</p>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header top -->
    
    <div class="header-logo-support pt-30 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="logo">
                        <a href="index-2.html">
                            <img src="{{asset('logo/logo.png')}}" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="support-button float-right d-none d-md-block">
                        <div class="support float-left">
                            <div class="icon">
                                <img src="{{asset('frontend/assets/images/all-icon/support.png')}}" alt="icon">
                            </div>
                            <div class="cont">
                                <p>Need Help? call us free</p>
                                <span>{{$footerpage->number}}</span>
                            </div>
                        </div>
                        <div class="button float-left">
                            <a href="{{route('contact.me')}}" class="main-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header logo support -->
    
    <div class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="{{($route == 'home')? 'active' : ''}}" href="{{route('home')}}">Home</a>
                                    {{-- <ul class="sub-menu">
                                        <li><a class="active" href="#">Home 01</a></li>
                                        <li><a href="{{asset('fontend/')}}index-3.html">Home 02</a></li>
                                        <li><a href="{{asset('fontend/')}}index-4.html">Home 03</a></li>
                                    </ul> --}}
                                </li>
                                <li class="nav-item">
                                    <a class="{{($route == 'home.about')? 'active' : ''}}" href="{{route('home.about')}}">About us</a>
                                </li>                              
                              
                                <li class="nav-item">
                                    <a class="{{($route == 'frontend.home_all.blog')? 'active' : ''}}" href="{{route('frontend.home_all.blog')}}">Blog</a>
                                   
                                </li>
                                <li class="nav-item">
                                    <a class="{{($route == 'gallery.image')? 'active' : ''}}" href="{{route('gallery.image')}}">Gallery</a>                                   
                                </li>
                                <li class="nav-item">
                                    <a class="{{($route == 'contact.me')? 'active' : ''}}" href="{{route('contact.me')}}">Contact</a>
                                    
                                </li>
                            </ul>
                        </div>
                    </nav> <!-- nav -->
                </div>
               
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    
</header>