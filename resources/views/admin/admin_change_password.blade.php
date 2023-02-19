@extends('admin.admin_master')
@section('admin')
<div class="page-container">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<h4 class="cardititle">Change Password Page</h4><br><hr>
@if(count($errors))
@foreach ($errors->all() as $error)
<p class="alert alert-danger alert-dismissable fade show">{{$error}}</p>
    
@endforeach

@endif


<form method="POST" action="{{route('update.password')}}">
    @csrf
    <div class="row mb-3">
    <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
    <div class="col-sm-10">
    <input type="password" class="form-control" id="old_password" name="old_password" >
    </div>
    </div>
        <div class="row mb-3">
        <label for="example-text-input" class="col-sm-2 col-form-label">New Pawword</label>
        <div class="col-sm-10">
        <input type="password" class="form-control" id="new_password" name="new_password">
        </div>
        </div>
    <div class="row mb-3">
    <label for="example-text-input" class="col-sm-2 col-form-label">Confirm Password</label>
    <div class="col-sm-10">
    <input type="password" class="form-control" id="confirm_password" name="confirm_password">
    </div>
    </div>   
    <label></label>
    <input type="submit" value="Change Password" class="btn btn-info  wave-effect-light"> 
    
</form>
</div>
</div>
</div>

</div>
</div>
</div>

@endsection