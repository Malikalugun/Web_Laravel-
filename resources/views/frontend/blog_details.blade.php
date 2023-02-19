@extends('frontend.main_master')
@section('main')

@section('title')
Blog Details | Coaching
@endsection
    <!--====== SEARCH BOX PART START ======-->

    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword" />
                <button><i class="fa fa-search"></i></button>
            </form>
        </div>
        <!-- serach form -->
    </div>

    <!--====== SEARCH BOX PART ENDS ======-->

    <!--====== PAGE BANNER PART START ======-->

    <section
        id="page-banner"
        class="pt-105 pb-130 bg_cover"
        data-overlay="8"
        style="background-image: url(images/page-banner-4.jpg)"
    >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2> {{$blogs->title}}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Blog</a>
                                </li>
                                <li
                                    class="breadcrumb-item active"
                                    aria-current="page"
                                >
                                {{$blogs->title}}
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <!-- page banner cont -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== BLOG PART START ======-->

    <section id="blog-singel" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details mt-30">
                        <div class="thum">
                            <img
                                src="{{asset($blogs->blog_image)}}"
                                alt="Blog Details"
                               />
                        </div>
                        <div class="cont">
                            <h3>
                                {{$blogs->title}}
                            </h3>
                            <ul>
                                <li>
                                    <a href="#"
                                        ><i class="fa fa-calendar"></i>{{$blogs->date}}
                                        </a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                        ><i class="fa fa-user"></i>
                                        {{$blogs->username}}</a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                        ><i class="fa fa-tags"></i
                                        >{{$blogs->tag}}</a
                                    >
                                </li>
                            </ul>
                            <p>
                               {!! Str::limit($blogs->description,200)!!}
                            </p>
                            <ul class="share">
                                <li class="title">Share :</li>
                                <li>
                                    <a href="#"
                                        ><i class="fa fa-facebook-f"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href="#"
                                        ><i class="fa fa-twitter"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href="#"
                                        ><i class="fa fa-google-plus"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href="#"
                                        ><i class="fa fa-instagram"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href="#"
                                        ><i class="fa fa-linkedin"></i
                                    ></a>
                                </li>
                            </ul>
                          
                        </div>
                        <!-- cont -->
                    </div>
                    <!-- blog details -->
                </div>
                <div class="col-lg-4">
                    <div class="saidbar">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="saidbar-search mt-30">
                                    <form action="#">
                                        <input
                                            type="text"
                                            placeholder="Search"
                                        />
                                        <button type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                                <!-- saidbar search -->
                                <div class="categories mt-30">
                                    <h4>Categories</h4>
                                    <ul>
                                        @foreach ($category as $cat)
                                        <li><a href="{{route('blog.details',$cat->id)}}">{{$cat->title}}</a></li>
                                     @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- categories -->
                            <div class="col-lg-12 col-md-6">
                                <div class="saidbar-post mt-30">
                                    <h4>Popular Posts</h4>
                                   
                                    <ul>
                                        @foreach ($allblogs as $all)
                                        <li>
                                            <a href="#">
                                                <div class="singel-post">
                                                    <div class="thum">
                                                        <img
                                                            src="{{asset($all->blog_image)}}"
                                                            alt="Blog"
                                                        />
                                                    </div>
                                                    <div class="cont">
                                                        <a href="{{route('blog.details',$all->id)}}"><h6>{{$all->title}}</h6></a>
                                                        {{-- <h6> --}}
                                                           {{-- {{$all->title}} --}}
                                                        {{-- </h6> --}}
                                                        <span class="date">{{Carbon\Carbon::parse($all->created_at)->diffForHumans()}}</span>
                                                    </div>
                                                </div>
                                                <!-- singel post -->
                                            </a>
                                        </li>
                                       @endforeach
                                    </ul>
                                </div>
                                <!-- saidbar post -->
                            </div>
                        </div>
                        <!-- row -->
                    </div>
                    <!-- saidbar -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>

    <!--====== BLOG PART ENDS ======-->

@endsection