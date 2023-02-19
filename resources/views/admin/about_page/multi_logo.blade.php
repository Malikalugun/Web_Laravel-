@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<div class="page-container">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<h4 class="cardititle">Add Multi logo</h4><hr>
<form method="POST" action="{{route('store.multilogo')}}" enctype="multipart/form-data">
    @csrf
    {{-- <input type="hidden" name="id" value="{{ $multiimage->id }}"> --}}
  
        <div class="row mb-3">
        <label for="example-text-input" class="col-sm-2 col-form-label">Multi Logo</label>
        <div class="col-sm-10">
        <input type="file" class="form-control" id="multi_image" name="multi_image[]" aria-describedby="imageHelp" multiple="">
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
    <input type="submit" value="Add Multi logo" class="btn btn-warning  wave-effect-light"> 
    
</form>
</div>
</div>
</div>

</div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
$('#multi_image').change(function(e){
var reader = new FileReader();
reader.onload = function (e){
    $('#showImage').attr('src',e.target.result);
}
reader.readAsDataURL(e.target.files['0'])
});
    });
</script>
@endsection