@php
   $aboutpage = App\Models\About::find(1);
   
@endphp
<section id="about-part" class="pt-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title mt-50">
                    <h5>About us</h5>
                    <h2>{{$aboutpage->title}} </h2>
                </div> <!-- section title -->
                <div class="about-cont">
                    <p>{{$aboutpage->description}}</p>
                    <a href="#" class="main-btn mt-55">Learn More</a>
                </div>
            </div> <!-- about cont -->
            <div class="col-lg-6 offset-lg-1">
                <div class="about-event mt-50">
                    <div class="event-title">
                        <h3>Upcoming events</h3>
                    </div> <!-- event title -->
                    <ul>
                        <li>
                            <div class="singel-event">
                                <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                                <a href="{{asset('fontend/')}}events-singel.html"><h4>Campus clean workshop</h4></a>
                                <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                            </div>
                        </li>
                        <li>
                            <div class="singel-event">
                                <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                                <a href="{{asset('fontend/')}}events-singel.html"><h4>Tech Summit</h4></a>
                                <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                            </div>
                        </li>
                        <li>
                            <div class="singel-event">
                                <span><i class="fa fa-calendar"></i> 2 December 2018</span>
                                <a href="{{asset('fontend/')}}events-singel.html"><h4>Enviroement conference</h4></a>
                                <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span>
                                <span><i class="fa fa-map-marker"></i> Rc Auditorim</span>
                            </div>
                        </li>
                    </ul> 
                </div> <!-- about event -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
    <div class="about-bg">
        <img src="{{$aboutpage->about_image}}" alt="About">
    </div>
</section>