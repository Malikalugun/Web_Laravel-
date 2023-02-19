@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<div class="page-container">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">category
<h4 class="cardititle">Blog Page</h4><hr>
<form method="POST" action="{{route('blog.store')}}" id="myForm" enctype="multipart/form-data">
    @csrf
    
    <div class="row mb-3">
        <label for="example-text-input" class="col-sm-2 col-form-label">Category Title</label>
        <div class="col-sm-10">
            <select class="form-control" id="category_title_id" name="category_title_id">
                <option selected="">Select Category Title</option>
                @foreach ($category as $cat)
                <option value="{{$cat->id}}">{{$cat->title}}</option>    
                @endforeach               
             
            </select>
        @error('title')
        <span class="text-danger">{{ $message}}</span> 
     @enderror
    </div>
        </div> 
    <div class="row mb-3">
    <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10 form-group">
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
    
   
</div>
    </div> 
    <div class="row mb-3">
        <label for="example-text-input" class="col-sm-2 col-form-label">Date</label>
        <div class="col-sm-10 form-group">        
           <input type="date" class="form-control" id="date" name="date" aria-describedby="emailHelp">
            
        </div>
      
        </div> 
    <div class="row mb-3">
        <label for="example-text-input" class="col-sm-2 col-form-label">User Name</label>
        <div class="col-sm-10 form-group">
        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
        
    </div>
      
        </div>  
        <div class="row mb-3">
            <label for="example-text-input" class="col-sm-2 col-form-label">Tag</label>
            <div class="col-sm-10 form-group">
            <input type="text" class="form-control" id="tag" name="tag" aria-describedby="emailHelp">
            
            </div>

            </div>
        <div class="row mb-3">
        <label for="example-text-input" row="3" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10 form-group">        
        <textarea type="text" class="form-control" id="description" name="description" aria-describedby="emailHelp" ></textarea>
        </div>
        </div>
        <div class="row mb-3">
        <label for="example-text-input" class="col-sm-2 col-form-label">Blog Image</label>
        <div class="col-sm-10">
        <input type="file" class="form-control" id="image" name="blog_image" aria-describedby="imageHelp">
        @error('blog_image')
        <span class="text-danger">{{ $message}}</span> 
     @enderror    
    </div>
       
        </div>
    <div class="row mb-3">
    {{-- viewing image --}}
    <div class="col-sm-10">
        <label for="example-text-input" class="col-sm-2 col-form-label"></label>
        
        <img class="rounded" id="showImage" src="{{url('upload/no-image.png')}}" height="150px" width="150px" alt="Card image cap">
    </div>     
    </div>
    <label></label>
    <input type="submit" value="Insert Update Blog Page" class="btn btn-warning  wave-effect-light"> 
    
</form>
</div>
</div>
</div>

</div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
$('#image').change(function(e){
var reader = new FileReader();
reader.onload = function (e){
    $('#showImage').attr('src',e.target.result);
}
reader.readAsDataURL(e.target.files['0'])
});
    });
</script>
<script type="text/javascript">
    $(document).ready(function (){
          $('#myForm').validate({
              rules: {
                 
                  title: {
                      required : true,
                  }, 
                  date: {
                      required : true,
                  }, 
                  username: {
                      required : true,
                  }, 
                  tag: {
                      required : true,
                  }, 
                  description: {
                      required : true,
                  },
                 
              },
              messages :{
                 
                  title: {
                      required : 'Please Enter Blog Title',
                  },
                  date: {
                      required : 'Please Enter Date',
                  },
                  username: {
                      required : 'Please Enter Username',
                  },
                  tag: {
                      required : 'Please Enter Tag',
                  },
                  description: {
                      required : 'Please Enter Description',
                  },
                 
              },
              errorElement : 'span', 
              errorPlacement: function (error,element) {
                  error.addClass('invalid-feedback');
                  element.closest('.form-group').append(error);
              },
              highlight : function(element, errorClass, validClass){
                  $(element).addClass('is-invalid');
              },
              unhighlight : function(element, errorClass, validClass){
                  $(element).removeClass('is-invalid');
              },
          });
      });
      </script>
@endsection