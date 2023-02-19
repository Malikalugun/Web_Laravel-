@extends('admin.admin_master')
@section('admin')
<div class="page-container">
    <div class="container-fluid">
    <div class="row">
        
        <div class="col-md-12 col-xl-6">
            
            <hr>
            <div class="card mb-3"><br><br>
                <center>
                <img class="rounded-circle shadow-4-strong" src="{{(!empty($adminData->profile_image))?url('upload/admin_images/'.$adminData->profile_image):url('upload/no-image.png')}}" height="150px" width="150px" alt="Card image cap">
                </center>
                <div class="card-body">
                    <h5 class="card-title">Name  : {{$adminData->name}}</h5><hr>  
                    <h5 class="card-title">Email  : {{$adminData->email}}</h5>   <hr>              
                    <h5 class="card-title">Username  : {{$adminData->username}}</h5><hr>
                    <a href="{{route('edit.profile')}}" class="btn  btn-outline-info">Edit Profile</a>
                  
                </div>
            </div>
        </div>
    </div>
	
    </div>
</div>
@endsection