@extends('frontend.main_master')
@section('main')

@section('title')
Home | Coaching
@endsection
<!--====== SLIDER PART START ======-->

@include('frontend.home_all.home_slider')

<!--====== SLIDER PART ENDS ======-->

<!--====== CATEGORY PART START ======-->

<section id="category-part">
    <div class="container">
        <div class="category pt-40 pb-80">
            <div class="row">
                <div class="col-lg-4">
                    <div class="category-text pt-40">
                        <h2>Best platform to learn everything</h2>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-8 offset-2">
                    <div class="row category-slied mt-40">
                        <div class="col-lg-4">
                            <a href="#">
                                <span class="singel-category text-center color-1">
                                    <span class="icon">
                                        <img src="{{asset('frontend/assets/images/all-icon/ctg-1.png')}}" alt="Icon">
                                    </span>
                                    <span class="cont">
                                        <span>Language</span>
                                    </span>
                                </span> <!-- singel category -->
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#">
                                <span class="singel-category text-center color-2">
                                    <span class="icon">
                                        <img src="{{asset('frontend/assets/images/all-icon/ctg-2.png')}}" alt="Icon">
                                    </span>
                                    <span class="cont">
                                        <span>Business</span>
                                    </span>
                                </span> <!-- singel category -->
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#">
                                <span class="singel-category text-center color-3">
                                    <span class="icon">
                                        <img src="{{asset('frontend/assets/images/all-icon/ctg-3.png')}}" alt="Icon">
                                    </span>
                                    <span class="cont">
                                        <span>Literature</span>
                                    </span>
                                </span> <!-- singel category -->
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#">
                                <span class="singel-category text-center color-1">
                                    <span class="icon">
                                        <img src="{{asset('frontend/assets/images/all-icon/ctg-1.png')}}" alt="Icon">
                                    </span>
                                    <span class="cont">
                                        <span>Language</span>
                                    </span>
                                </span> <!-- singel category -->
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#">
                                <span class="singel-category text-center color-2">
                                    <span class="icon">
                                        <img src="{{asset('frontend/assets/images/all-icon/ctg-2.png')}}" alt="Icon">
                                    </span>
                                    <span class="cont">
                                        <span>Business</span>
                                    </span>
                                </span> <!-- singel category -->
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="#">
                                <span class="singel-category text-center color-3">
                                    <span class="icon">
                                        <img src="{{asset('frontend/assets/images/all-icon/ctg-3.png')}}" alt="Icon">
                                    </span>
                                    <span class="cont">
                                        <span>Literature</span>
                                    </span>
                                </span> <!-- singel category -->
                            </a>
                        </div>
                    </div> <!-- category slied -->
                </div>
            </div> <!-- row -->
        </div> <!-- category -->
    </div> <!-- container -->
</section>

<!--====== CATEGORY PART ENDS ======-->

<!--====== ABOUT PART START ======-->

@include('frontend.about_all.about_page')

<!--====== ABOUT PART ENDS ======-->

<!--====== APPLY PART START ======-->

<section id="apply-aprt" class="pb-120">
    <div class="container">
        <div class="apply">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="apply-cont apply-color-1">
                        <h3>Apply for fall 2019</h3>
                        <p>Gravida nibh vel velit auctor aliquetn sollicitudirem sem quibibendum auci elit cons equat ipsutis sem nibh id elituis sed odio sit amet nibh vulputate cursus equat ipsutis.</p>
                        <a href="#" class="main-btn">Apply Now</a>
                    </div> <!-- apply cont -->
                </div>
                <div class="col-lg-6">
                    <div class="apply-cont apply-color-2">
                        <h3>Apply for scholarship</h3>
                        <p>Gravida nibh vel velit auctor aliquetn sollicitudirem sem quibibendum auci elit cons equat ipsutis sem nibh id elituis sed odio sit amet nibh vulputate cursus equat ipsutis.</p>
                        <a href="#" class="main-btn">Apply Now</a>
                    </div> <!-- apply cont -->
                </div> 
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== APPLY PART ENDS ======-->


<!--====== Gallery PART START ======-->

@php $gallery = App\Models\Gallery::latest()->limit(4)->get();

@endphp

<section id="shop-page" class="pt-120 pb-120 gray-bg">
    <div class="container">
       
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="shop-grid" role="tabpanel" aria-labelledby="shop-grid-tab">
                  <div class="row justify-content-center">
                    @foreach ($gallery as $item)
                      <div class="col-lg-3 col-md-6 col-sm-8">
                          <div class="singel-publication mt-30">
                              <div class="image">
                                  <img src="{{asset($item->gallery)}}" alt="Publication">
                                 
                              </div>
                              <div class="cont">
                                  {{-- <div class="name">
                                      <a href="shop-singel.html"><h6>{{$item->title}}</h6></a>
                                     
                                  </div> --}}
                                  <div class="button text-center">
                                    <a href="shop-singel.html"><h6>{{$item->title}}</h6></a>
                                  </div>
                              </div>
                          </div> <!-- singel publication -->
                      </div>
                     @endforeach
                  </div> <!-- row -->
              </div>
             
          </div> <!-- tab content -->
      
    </div> <!-- container -->
</section>

<!--====== GalleryPART ENDS ======-->

<!--====== TEASTIMONIAL PART START ======-->
@include('frontend.testimonial')
<!--====== TEASTIMONIAL PART ENDS ======-->

<!--====== NEWS PART START ======-->
@php
   $blog = App\Models\Blog::latest()->limit(2)->get();
//    we will get all data from here
@endphp
<section id="news-part" class="pt-115 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-50">
                    <h5>Latest Blog</h5>
                    <h2>From the Blog</h2>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            @foreach ($blog as $blog)
               <div class="col-lg-6">
               
                    
               
                   <div class="singel-blog mt-30">
                   
                       <div class="blog-thum">
                           <img src="{{asset($blog->blog_image)}}" alt="Blog" style="width:772px;height:318px;">
                       </div>
                       <div class="blog-cont">                    
                           <a href="blog-singel.html"><h3>{{$blog->title}}</h3></a>
                           <span class="date">{{Carbon\Carbon::parse($blog->created_at)->diffForHumans()}}</span>
                           <ul>
                               <li><a href="#"><i class="fa fa-calendar"></i>{{$blog->date}}</a></li>
                               <li><a href="#"><i class="fa fa-user"></i>{{$blog->username}}</a></li>
                               <li><a href="#"><i class="fa fa-tags"></i>{{$blog->tag}}</a></li>
                           </ul>
                           {{-- blade syntex --}}
                           <p>{{$blog->description}}</p>
                       </div>
                      
                   </div> <!-- singel blog -->
                 
                  
               </div>
               @endforeach
               
        </div><!-- row -->
    </div> <!-- container -->
</section>

<!--====== NEWS PART ENDS ======-->
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