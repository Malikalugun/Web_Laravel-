@extends('frontend.main_master')
@section('main')

@section('title')
About | Coaching
@endsection
<!--====== PAGE BANNER PART START ======-->

<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(/frontend/assets/images/page-banner-1.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>About Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div> <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== ABOUT PART START ======-->

<section id="about-page" class="pt-70 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title mt-50">
                    <h5>About us</h5>
                    <h2>{{$aboutpage->title}}</h2>
                </div> <!-- section title -->
                <div class="about-cont">
                    <p>{{$aboutpage->description}}</p>
                </div>
            </div> <!-- about cont -->
            <div class="col-lg-7">
                <div class="about-image mt-50">
                    <img src="{{asset('frontend/assets/images/about/about-2.jpg')}}" alt="About">
                </div> <!-- about imag -->
            </div>
        </div> <!-- row -->
        <div class="about-items pt-60">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="about-singel-items mt-30">
                        <span>01</span>
                        <h4>Why Choose us</h4>
                        <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit sollicitudirem quibibendum auci</p>
                    </div> <!-- about singel -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="about-singel-items mt-30">
                        <span>02</span>
                        <h4>Our Mission</h4>
                        <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit sollicitudirem quibibendum auci</p>
                    </div> <!-- about singel -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="about-singel-items mt-30">
                        <span>03</span>
                        <h4>Our vission</h4>
                        <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit sollicitudirem quibibendum auci</p>
                    </div> <!-- about singel -->
                </div>
            </div> <!-- row -->
        </div> <!-- about items -->
    </div> <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->

<!--====== COUNTER PART START ======-->

<div id="counter-part" class="bg_cover pt-65 pb-110" data-overlay="8" style="background-image: url(/frontend/assets/images/bg-2.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="singel-counter text-center mt-40">
                    <span><span class="counter">30,000</span>+</span>
                    <p>Students enrolled</p>
                </div> <!-- singel counter -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="singel-counter text-center mt-40">
                    <span><span class="counter">41,000</span>+</span>
                    <p>Courses Uploaded</p>
                </div> <!-- singel counter -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="singel-counter text-center mt-40">
                    <span><span class="counter">11,000</span>+</span>
                    <p>People certifie</p>
                </div> <!-- singel counter -->
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="singel-counter text-center mt-40">
                    <span><span class="counter">39,000</span>+</span>
                    <p>Global Teachers</p>
                </div> <!-- singel counter -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div>

<!--====== COUNTER PART ENDS ======-->


<!--====== TEASTIMONIAL PART START ======-->
@include('frontend.testimonial')

<!--====== TEASTIMONIAL PART ENDS ======-->

<!--====== PATNAR LOGO PART START ======-->
@php $aboutpage = App\Models\About::find(1);
$allMultiImage = App\Models\MultiImage_table::all();
@endphp
    
<div id="patnar-logo" class="pt-40 pb-80 gray-bg">
    <div class="container">
        <div class="row patnar-slied">
            @foreach($allMultiImage as $Image)
        
            <div class="col-lg-12">
                <div class="singel-patnar text-center mt-40">
                    <img src="{{asset($Image->multi_image)}}" alt="Logo" style="width:200px;height:150px;">
                </div>
            </div>
          @endforeach
            
        </div> <!-- row -->
    </div> <!-- container -->
</div>

<!--====== PATNAR LOGO PART ENDS ======-->

@endsection