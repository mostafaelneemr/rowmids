@extends('layouts.admin.master')

@section('title')
    Teams
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12 ">

            @include('admin.message')

            <div class="card">
                <div class="card-header">
                    <h3> Teams
                        <a href="{{route('teams.create')}}" class="btn btn-primary text-white float-start m-4">Add team</a>
                    </h3>
                </div>

                <div class="card-body ">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered p-0 text-center table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>name</th>
                            <th>Title</th>
                            <th>facebook</th>
                            <th>twitter</th>
                            <th>instagram</th>
                            <th>Publish</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($teams as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img src="{{asset($item->image)}}" style="width: 150px; height: 100px" alt=""></td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->facebook}}</td>
                                <td>{{$item->twitter}}</td>
                                <td>{{$item->instagram}}</td>
                                <td class={{$item->is_publish == 'active' ? 'text-success':'text-danger'}}>{{$item->is_publish == 'active' ? 'published' : 'draft'}}</td>
                                <td width="18%">
                                    <a href="{{route('teams.edit', $item->id)}}" class="btn btn-info btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0);" onclick="deleteTeam( '{{route('teams.destroy', $item->id )}}')" class="btn btn-danger btn-sm" title="delete" role="button" aria-pressed="true"><i class="fa fa-trash"></i></a>
                                    @if($item->is_publish == 'active')
                                        <a href="{{ route('inactive.team', $item->id) }}" class="btn btn-sm btn-danger" title="InActive Now"><i class="fa fa-arrow-down"></i></a>
                                    @else
                                        <a href="{{ route('active.team', $item->id) }}" class="btn btn-sm btn-success" title="Active Now"><i class="fa fa-arrow-up"></i></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection

@push('script')
    <script type="text/javascript">
        function deleteTeam($routeName,$reload){

            if(!confirm("Do you want to delete this Team?")){ return false; }

            if($reload == undefined){ $reload = 3000; }
            addLoading();

            $.post(
                $routeName,
                {
                    '_method':'DELETE',
                    '_token':$('meta[name="csrf-token"]').attr('content'),
                },
                function(response){
                    removeLoading();
                    if(isJSON(response)){
                        $data = response;
                        if($data.status == true){
                            location.reload();
                            toastr.success($data.message, 'Success !', {"closeButton": true});
                        }else{
                            toastr.error($data.message, 'Error !', {"closeButton": true});
                        }
                    }
                }
            )
        }
    </script>
@endpush
