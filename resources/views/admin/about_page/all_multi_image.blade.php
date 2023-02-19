@extends("admin.admin_master")
@section('admin')
<div class="page-container">
    <div class="container-fluid">
        <div class="row">         
          
            <!-- [ Hover-table ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Multi Image all</h5>
                        <span class="d-block m-t-5">All <code>Multi Image</code></span>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>About Multi Image</th>
                                        <th>Action</th>                                        
                                    </tr>
                                </thead>
                                {{-- inselized --}}
                                @php($i = 1)
                                @foreach ($allMultiImage as $Image)                                   
                               
                                <tbody>
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td><img src="{{asset($Image->multi_image)}}" style="width: 60px;height:50px"></td>
                                        <td><a href="{{route('edit.multi.image',$Image->id)}}" class="btn btn-info sm" title="Edit Data"><i class="fas fa-edit"></i></a>
                                            <a href="{{route('delete.multi.image',$Image->id)}}" id="delete" class="btn btn-danger sm" title="Delete Data"><i class="fas fa-trash"></i></a></td>
                                        
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