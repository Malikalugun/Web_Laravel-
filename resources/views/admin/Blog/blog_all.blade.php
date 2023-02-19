@extends("admin.admin_master")
@section('admin')
<div class="page-container">
    <div class="container-fluid">
        <div class="row">         
          
            <!-- [ Hover-table ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5><span class="d-block m-t-5">All <code>Blogs</code></span></h5><br>
                        <a href="{{route('blog.add')}}" class="btn btn-success">Add Blog</a>
                        
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Category Title</th>
                                        <th>Title</th>
                                        {{-- <th>Date</th> --}}
                                        <th>Username</th>
                                        {{-- <th>Tag</th>
                                        <th>Description</th> --}}
                                        <th>Blog Image</th>
                                        <th>Action</th>                                        
                                    </tr>
                                </thead>
                                {{-- inselized --}}
                            
                                @foreach ($Blog as $key => $item_blog)                                   
                               
                                <tbody>
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        {{-- category method name and title is from category --}}
                                        <td>{{$item_blog['categories']['title']}}</td>
                                        <td>{{$item_blog->title}}</td>                                        
                                        <td>{{$item_blog->username}}</td>
                                        {{-- <td>{{$Blog->tag}}</td> --}}
                                        {{-- <td>{{$Blog->description}}</td> --}}
                                    
                                        <td><img src="{{asset($item_blog->blog_image)}}" style="width: 60px;height:50px"></td>
                                        <td><a href="{{route('blog.edit',$item_blog->id)}}" class="btn btn-info sm" title="Edit Data"><i class="fas fa-edit"></i></a>
                                            <a href="{{route('delete.blog',$item_blog->id)}}" id="delete" class="btn btn-danger sm" title="Delete Data"><i class="fas fa-trash"></i></a></td>
                                        
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