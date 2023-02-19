<?php
$contact = App\Models\Footer::find(1);
?>
@extends('frontend.main_master')
@section('main')

@section('title')
Contact | Coaching
@endsection
 <!--====== PAGE BANNER PART START ======-->
    
 <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(/frontend/assets/images/page-banner-1.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Contact</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>  <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== CONTACT PART START ======-->

<section id="contact-page" class="pt-90 pb-120 gray-bg">
    <div class="container">
        <form method="post" action="{{route('store.message')}}" class="contact_form">
            @csrf
        <div class="row">
            <div class="col-lg-7">
                <div class="contact-from mt-30">
                    <div class="section-title">
                        <h5>Contact Us</h5>
                        <h2>Keep in touch</h2>
                    </div> <!-- section title -->
                    <div class="main-form pt-45">
                        <form id="contact-form" action="#" method="post" data-toggle="validator">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <input name="name" type="text" placeholder="Your name" name="name" data-error="Name is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <input type="email" placeholder="Email" name="email" data-error="Valid email is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <input  type="text" placeholder="Subject" name="subject" data-error="Subject is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form --> 
                                </div>
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <input type="text" placeholder="Phone" name="phone" data-error="Phone is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="singel-form form-group">
                                        <textarea type="text" placeholder="Message" name="message" data-error="Please,leave us a message." required="required"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="singel-form">
                                        <button type="submit" class="main-btn">Send</button>
                                    </div> <!-- singel form -->
                                </div> 
                            </div> <!-- row -->
                        </form>
                    </div> <!-- main form -->
                </div> <!--  contact from -->
            </div>
            <div class="col-lg-5">
                <div class="contact-address mt-30">
                    <ul>
                        <li>
                            <div class="singel-address">
                                <div class="icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="cont">
                                    <p>{{$contact->address}}</p>
                                </div>
                            </div> <!-- singel address -->
                        </li>
                        <li>
                            <div class="singel-address">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="cont">
                                    <p>{{$contact->number}}</p>
                                    
                                </div>
                            </div> <!-- singel address -->
                        </li>
                        <li>
                            <div class="singel-address">
                                <div class="icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="cont">
                                    <p>{{$contact->email}}</p>
                                   
                                </div>
                            </div> <!-- singel address -->
                        </li>
                    </ul>
                </div> <!-- contact address -->
                <div class="map mt-30">
                    <div id="contact-map"></div>
                </div> <!-- map -->
            </div>
        </div> <!-- row -->
        </form>
    </div> <!-- container -->
</section>

<!--====== CONTACT PART ENDS ======-->
@endsection