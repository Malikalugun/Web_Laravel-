@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<style type="text/css">
    .bootstrap-tagsinput .tag{
       margin-right: 2px;
       color: #b70000;
       font-weight: 700px;
    }
    </style>
<div class="page-container">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<h4 class="cardititle">Add Category</h4><hr>
<form method="POST" action="{{route('store.blog')}}" enctype="multipart/form-data">
    @csrf   

    <div class="row mb-3">
    <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">    
    @error('title')
    <span class="text-danger">{{ $message}}</span> 
 @enderror
</div>
    </div> 
    <div class="row mb-3">
        <label for="example-text-input" class="col-sm-2 col-form-label">Language</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="language" name="language" value="Laravel,php" data-role="tagsinput" aria-describedby="emailHelp">    
        @error('language')
        <span class="text-danger">{{ $message}}</span> 
     @enderror
    </div>
        </div> 
   
    <label></label>
    <input type="submit" value="Insert Category" class="btn btn-warning  wave-effect-light"> 
    
</form>
</div>
</div>
</div>

</div>
</div>
</div>

@endsection