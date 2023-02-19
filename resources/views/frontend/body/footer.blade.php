<?php
$footerpage = App\Models\Footer::find(1);
?>
<footer id="footer-part">
    <div class="footer-top pt-40 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-about mt-40">
                        <div class="logo">
                            <a href="#"><img src="{{asset('logo/logo1.png')}}" alt="Logo"></a>
                        </div>
                        <p>{{$footerpage->short_description}}</p>
                        <ul class="mt-20">
                            <li><a href="{{$footerpage->facrbook}}"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="{{$footerpage->twitter}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{$footerpage->google}}"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="{{$footerpage->instragram}}"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div> <!-- footer about -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-link mt-40">
                        <div class="footer-title pb-25">
                            <h6>Sitemap</h6>
                        </div>
                        <ul>
                            <li><a href="{{url('/')}}"><i class="fa fa-angle-right"></i>Home</a></li>
                            <li><a href="{{route('home.about')}}"><i class="fa fa-angle-right"></i>About us</a></li>
                            {{-- <li><a href="{{asset('fontend/')}}courses.html"><i class="fa fa-angle-right"></i>Courses</a></li> --}}
                            <li><a href="{{route('frontend.home_all.blog')}}"><i class="fa fa-angle-right"></i>Blogs</a></li>
                            {{-- <li><a href="{{asset('fontend/events.html')}}"><i class="fa fa-angle-right"></i>Event</a></li> --}}
                        </ul>
                        <ul>
                            <li><a href="{{route('gallery.image')}}"><i class="fa fa-angle-right"></i>Gallery</a></li>
                            {{-- <li><a href="{{asset('fontend/shop.html')}}"><i class="fa fa-angle-right"></i>Shop</a></li> --}}
                            {{-- <li><a href="{{asset('fontend/teachers.html')}}"><i class="fa fa-angle-right"></i>Teachers</a></li> --}}
                            <li><a href="#"><i class="fa fa-angle-right"></i>Support</a></li>
                            <li><a href="{{route('contact.me')}}"><i class="fa fa-angle-right"></i>Contact</a></li>
                        </ul>
                    </div> <!-- footer link -->
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-link support mt-40">
                        <div class="footer-title pb-25">
                            <h6>Support</h6>
                        </div>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i>FAQS</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Privacy</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Policy</a></li>
                            {{-- <li><a href="#"><i class="fa fa-angle-right"></i>Support</a></li> --}}
                            {{-- <li><a href="#"><i class="fa fa-angle-right"></i>Documentation</a></li> --}}
                        </ul>
                    </div> <!-- support -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-address mt-40">
                        <div class="footer-title pb-25">
                            <h6>Contact Us</h6>
                        </div>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="cont">
                                    <p>{{$footerpage->address}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="cont">
                                    <p>{{$footerpage->number}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="cont">
                                    <p>{{$footerpage->email}}</p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- footer address -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer top -->
    
    <div class="footer-copyright pt-10 pb-25">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright text-md-left text-center pt-15">
                        <p><a target="_blank" href="#" class="text-center">{{$footerpage->copyright}}</a> </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="copyright text-md-right text-center pt-15">
                       
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer copyright -->
</footer>