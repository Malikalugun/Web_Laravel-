@extends("admin.admin_master")
@section('admin')
<div class="page-container">
    <div class="container-fluid">
        <div class="row">         
          
            <!-- [ Hover-table ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5><span class="d-block m-3">Category</span></h5><br>
                        <a href="{{route('add.category')}}" class="btn btn-success">Add Blog</a>
                        
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Title</th>
                                        <th>Language</th>                                     
                                        <th>Action</th>                                        
                                    </tr>
                                </thead>
                                    @php($i = 1)
                                    @foreach ($Category as $cat)
                                <tbody>
                                                                   
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$cat->title}}</td>                                   
                                        <td>{{$cat->language}}</td>
                                        <td><a href="{{route('edit.category',$cat->id)}}" class="btn btn-info sm" title="Edit Data"><i class="fas fa-edit"></i></a>
                                            <a href="{{route('delete.category',$cat->id)}}" id="delete" class="btn btn-danger sm" title="Delete Data"><i class="fas fa-trash"></i></a></td>
                                        
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