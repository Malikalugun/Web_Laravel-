@php
   $homeslider = App\Models\HomeSlider::find(1);
   
@endphp
<section id="slider-part" class="slider-active">
    <div class="single-slider bg_cover pt-150" style="background-image: url({{ $homeslider -> home_slider}})" data-overlay="4">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-9">
                    <div class="slider-cont">
                        <h1 data-animation="bounceInLeft" data-delay="1s">{{ $homeslider -> title}}</h1>
                        <p data-animation="fadeInUp" data-delay="1.3s">{{ $homeslider -> short_title}}</p>
                        <ul>
                            <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">Read More</a></li>
                            <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="#">Get Started</a></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- single slider --> 
</section>