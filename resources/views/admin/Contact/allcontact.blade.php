@extends('admin.admin_master')
@section('admin')
<div class="col-xl-12 col-md-12">
    <div class="card table-card">
        <div class="card-header">
            <h4 class="cardititle">Contact Message Data</h4>
            <hr>
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
                            <th>Sl.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                        @php ($i=1)
                        @foreach ($contact as $cont)
                            <td>{{$i++}}</td>
                           <td>{{$cont->name}}</td>
                            <td>{{$cont->email}}</td>
                            <td>{{$cont->subject}}</td>
                            <td>{{$cont->phone}}</td>
                            <td>{{$cont->message}}</td>
                            <td>{{Carbon\Carbon::parse($cont->created_at)->diffForHumans()}}</td>
                            <td class="text-right">
                                <label><a class="btn btn-danger" title="Delete Data" href="{{route('delete.message',$cont->id)}}">DELETE</a></label></td>
                        </tr>
                        {{-- {{route('delete.data',$dataform->id)}} --}}
                       
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>  
@endsection