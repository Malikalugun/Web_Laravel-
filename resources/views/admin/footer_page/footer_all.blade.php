@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<div class="page-container">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<h4 class="cardititle">Footer Page</h4><hr>
<form method="POST" action="{{route('update.footer')}}">
    @csrf
    <input type="hidden" name="id" value="{{ $footerpage->id }}">

    <div class="row mb-3">
    <label for="example-text-input" class="col-sm-2 col-form-label">Number</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="number" name="number" aria-describedby="emailHelp" value="{{$footerpage->number}}">
    </div>
    </div>
        <div class="row mb-3">
        <label for="example-text-input" class="col-sm-2 col-form-label">Short Description</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="short_description" name="short_description" aria-describedby="emailHelp" value="{{$footerpage->short_description}}">
        </div>
        </div>
    <div class="row mb-3">
    <label for="example-text-input" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="address" name="address" aria-describedby="emailHelp" value="{{$footerpage->address}}">
    </div>
    </div>
    <div class="row mb-3">
        <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{$footerpage->email}}">
        </div>
        </div>
        <div class="row mb-3">
            <label for="example-text-input" class="col-sm-2 col-form-label">Facebook</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="facebook" name="facebook" aria-describedby="emailHelp" value="{{$footerpage->facebook}}">
            </div>
            </div>
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Twitter</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="twitter" name="twitter" aria-describedby="emailHelp" value="{{$footerpage->twitter}}">
                </div>
                </div>
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Google</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="google" name="google" aria-describedby="emailHelp" value="{{$footerpage->google}}">
                    </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Instragram</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="instragram" name="instragram" aria-describedby="emailHelp" value="{{$footerpage->instragram}}">
                        </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Copyright</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="copyright" name="copyright" aria-describedby="emailHelp" value="{{$footerpage->copyright}}">
                            </div>
                            </div>
<input type="submit" value="Update Footer" class="btn btn-warning  wave-effect-light"> 


</form>
</div>
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