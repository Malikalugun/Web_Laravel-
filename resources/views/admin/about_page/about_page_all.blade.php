@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<div class="page-container">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<h4 class="cardititle">About Page</h4><hr>
<form method="POST" action="{{route('update.about')}}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $aboutpage->id }}">

    <div class="row mb-3">
    <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" value="{{$aboutpage->title}}">
    </div>
    </div>   
    
        <div class="row mb-3">
        <label for="example-text-input" row="3" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">        
        <textarea type="text" class="form-control" id="description" name="description" aria-describedby="emailHelp" >{{$aboutpage->description}}</textarea>
        </div>
        </div>
        <div class="row mb-3">
        <label for="example-text-input" class="col-sm-2 col-form-label">About Image</label>
        <div class="col-sm-10">
        <input type="file" class="form-control" id="image" name="about_image" aria-describedby="imageHelp">
        </div>
        </div>
    <div class="row mb-3">
    {{-- viewing image --}}
    <div class="col-sm-10">
        <label for="example-text-input" class="col-sm-2 col-form-label"></label>
        
        <img class="rounded" id="showImage" src="{{(!empty($aboutpage->about_image))? url($aboutpage->about_image):url('upload/no-image.png')}}" height="150px" width="150px" alt="Card image cap">
    </div>     
    </div>
    <label></label>
    <input type="submit" value="Update About Page" class="btn btn-warning  wave-effect-light"> 
    
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
@endsection