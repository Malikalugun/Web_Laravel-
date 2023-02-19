@extends('frontend.main_master')
@section('main')

@section('title')
Gallery | Coaching
@endsection
 <!--====== PAGE BANNER PART START ======-->
    
 <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(/frontend/assets/images/page-banner-1.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Galley</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                        </ol>
                    </nav>
                </div>  <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== SHOP PART START ======-->
@php $gallery = App\Models\Gallery::latest()->limit(4)->get();

@endphp

<section id="shop-page" class="pt-120 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-top-search">
                    <div class="shop-bar">
                        <ul class="nav" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="shop-grid-tab" data-toggle="tab" href="#shop-grid" role="tab" aria-controls="shop-grid" aria-selected="true"><i class="fa fa-th-large"></i></a>
                            </li>
                            <li class="nav-item">
                                <a id="shop-list-tab" data-toggle="tab" href="#shop-list" role="tab" aria-controls="shop-list" aria-selected="false"><i class="fa fa-th-list"></i></a>
                            </li>
                            <li class="nav-item">Showning 4 0f 24 Results</li>
                        </ul> <!-- nav -->
                    </div><!-- shop bar -->
                    <div class="shop-select">
                       <select>
                            <option value="1">Sort by</option>
                            <option value="1">Sort by 01</option>
                            <option value="2">Sort by 02</option>
                            <option value="3">Sort by 03</option>
                            <option value="4">Sort by 04</option>
                            <option value="5">Sort by 05</option>
                        </select>
                    </div> <!-- shop select -->
                </div> <!-- shop top search -->
            </div>
        </div> <!-- row -->
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
        <div class="row">
            <div class="col-lg-12">
                {{ $gall->links('vendor.pagination.custom') }}
    
            </div>
        </div>  <!-- row -->
    </div> <!-- container -->
</section>

<!--====== COURSES PART ENDS ======-->
@endsection