@extends("admin.admin_master")
@section('admin')
<div class="page-container">
    <div class="container-fluid">
        <div class="row">         
          
            <!-- [ Hover-table ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5><span class="d-block m-t-5">All <code>Testimonaial</code></span></h5><br>
                        <a href="{{route('testimonail.add')}}" class="btn btn-success">Add Testimonail</a>
                        
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        {{-- <th>Short Description</th> --}}
                                        <th>Photo</th>
                                       
                                        <th>Action</th>                                        
                                    </tr>
                                </thead>
                                {{-- inselized --}}
                                @php($i = 1)
                                @foreach ($testimonial as $test)                                   
                               
                                <tbody>
                                    <tr>
                                        <td>{{$i++}}</td>
                                  
                                        <td>{{$test->name}}</td> 
                                        <td>{{$test->designation}}</td> 
                                        {{-- <td>{{$test->short_description}}</td>                                                                       --}}
                                        
                                        <td><img src="{{asset($test->photo)}}" style="width: 60px;height:50px"></td>
                                        <td><a href="{{route('testimonial.edit',$test->id)}}" class="btn btn-info sm" title="Edit Data"><i class="fas fa-edit"></i></a>
                                            <a href="{{route('testimonial.delete',$test->id)}}" id="delete" class="btn btn-danger sm" title="Delete Data"><i class="fas fa-trash"></i></a></td>
                                        
                                    </tr> 
                                 
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Hover-table ] end -->
          
        </div>
    </div>
</div>

@endsection