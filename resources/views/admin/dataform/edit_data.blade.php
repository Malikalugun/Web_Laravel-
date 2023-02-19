@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<div class="page-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="cardititle">Edit Data Table</h4>
                        <hr>
                        <form method="POST" action="{{route('update.data')}}" enctype="multipart/form-data">
                            @csrf
                        
                            <input type="hidden" name="id" value="{{$dataform->id}}">
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="{{$dataform->name}}">
                                    @error('name')
                                    <span class="text-danger">{{$message}}</span>                                        
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="address" name="address" aria-describedby="emailHelp" value="{{$dataform->address}}">
                                   
                                    @error('address')
                                    <span class="text-danger">{{$message}}</span>                                        
                                    @enderror
                                </div>
                            </div>                  
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="profile_image" name="profile_image" aria-describedby="imageHelp">
                   
                                    @error('profile_image')
                                    <span class="text-danger">{{$message}}</span>                                        
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <!-- {{-- viewing image --}} -->
                                <div class="col-sm-10">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <img class="rounded" id="showImage" src="{{(!empty($dataform->profile_image))? url($dataform->profile_image):url('upload/no-image.png')}}" height="150px" width="150px" alt="Card image cap">
                                </div> 
                            </div>
                            <label></label>
                            <input type="submit" value="Update Data" class="btn btn-warning  wave-effect-light">

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#profile_image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0'])
        });
    });
</script>
@endsection