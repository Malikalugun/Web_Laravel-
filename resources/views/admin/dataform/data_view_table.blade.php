@php
$dataform = App\Models\DataForm::latest()->get();
@endphp
<div class="col-xl-12 col-md-12">
    <div class="card table-card">
        <div class="card-header">
            <label><a class="btn btn-outline-info" href="{{route('add.data')}}">ADD</a></label>
            <div class="card-header-right">
                <div class="btn-group card-option">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="feather icon-more-horizontal"></i>
                    </button>
                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                        <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                        <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                        <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">                  
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                        @php ($i=1)
                        @foreach ($dataform as $dataform)
                            <td>{{$i++}}</td>
                            <td>
                               
                                <div class="d-inline-block align-middle">
                                    <img src="{{asset($dataform->profile_image)}}" alt="user image" class="wid-30">                                           
                                </div>
                            </td>
                            <td>{{$dataform->name}}</td>
                            <td>{{$dataform->address}}</td>
                            <td class="text-right"><label><a class="btn btn-info" href="{{route('edit.data',$dataform->id)}}">EDIT</a></label>
                                <label><a class="btn btn-danger" href="{{route('delete.data',$dataform->id)}}">DELETE</a></label></td>
                        </tr>
                        {{-- {{route('delete.data',$dataform->id)}} --}}
                       
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>  