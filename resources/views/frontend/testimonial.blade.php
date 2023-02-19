@php $testimonial = App\Models\Testimonial::latest()->limit(4)->get();

@endphp
<section id="testimonial" class="bg_cover pt-115 pb-115" data-overlay="8" style="background-image: url(images/bg-2.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-40">
                    <h5>Testimonial</h5>
                    <h2>What they say</h2>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row testimonial-slied mt-40">
            @foreach ($testimonial as $test)
            <div class="col-lg-6">
                <div class="singel-testimonial">
                    <div class="testimonial-thum">
                        <img src="{{asset($test -> photo)}}" alt="Testimonial">
                        <div class="quote">
                            <i class="fa fa-quote-right"></i>
                        </div>
                    </div>
                    <div class="testimonial-cont">
                        <p>{{$test -> short_description}}</p>
                        <h6>{{$test -> name}}</h6>
                        <span>{{$test -> degination}}</span>
                    </div>
                </div> <!-- singel testimonial -->
            </div>
            @endforeach
        </div> <!-- testimonial slied -->
    </div> <!-- container -->
</section>
