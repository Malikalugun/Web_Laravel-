@php
   $blog = App\Models\Blog::latest()->limit(2)->get();
//    we will get all data from here
@endphp
@extends('frontend.main_master')
@section('main')

@section('title')
Blog | Coaching
@endsection
{{-- page banner --}}
<section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(/frontend/assets/images/page-banner-4.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Blog</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>  <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
{{-- end page banner --}}
{{-- blog start --}}
<section id="blog-page" class="pt-90 pb-120 gray-bg">
    <div class="container">
        <div class="col-lg-12">
            <div class="saidbar">
             <div class="categories mt-30">
                 <h4 class="p-3 m-2">Categories</h4>                        
            <hr>
                <div class="row">
                 
                <div class="col-lg-2 col-md-6">
                 Fronted
                </div>
                <div class="col-lg-2 col-md-6">
                 Backend
                </div>
                <div class="col-lg-2 col-md-6">
                 Photography
                </div>
                <div class="col-lg-2 col-md-6">
                 Teachnology
                </div>
                <div class="col-lg-2 col-md-6">
                 GMET
                </div>
                <div class="col-lg-2 col-md-6">
                 Language
                </div> 
            </div> <!-- saidbar -->
         </div> <!-- row -->
        </div>
    </div> <!-- row -->
       <div class="row">
        @foreach ($blog as $blog)
           <div class="col-lg-6">
           
                
           
               <div class="singel-blog mt-30">
               
                   <div class="blog-thum">
                       <img src="{{asset($blog->blog_image)}}" alt="Blog">
                   </div>
                   <div class="blog-cont">                    
                       
                       <span class="date">{{Carbon\Carbon::parse($blog->created_at)->diffForHumans()}}</span>
                       <ul>
                           <li><a href="#"><i class="fa fa-calendar"></i>{{$blog->date}}</a></li>
                           <li><a href="#"><i class="fa fa-user"></i>{{$blog->username}}</a></li>
                           <li><a href="#"><i class="fa fa-tags"></i>{{$blog->tag}}</a></li>
                       </ul>
                       {{-- blade syntex --}}
                       <a href="{{route('blog.details',$blog->id)}}"><h3>{{$blog->title}}</h3></a>
                       {{-- <a href="#" class="read_more">Read More</a> --}}
                   </div>
                  
               </div> <!-- singel blog -->
             
              
           </div>
           @endforeach
          
    </div> <!-- container -->
     <!-- singel blog -->
     
     
        {{ $allblogs->links('vendor.pagination.custom') }}
    

</section>

{{-- blog end --}}
@endsection