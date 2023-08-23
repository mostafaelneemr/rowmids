@extends('layouts.admin.master')

@section('title')
    About US
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12 ">

           @include('admin.message')

            <div class="card">
                <div class="card-header">
                    <h3> About US
                        <a href="{{route('digitals.create')}}" class="btn btn-primary text-white float-start m-4">Add Section</a>
                    </h3>
                </div>

                <div class="card-body ">
                    <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered p-0 text-center table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Publish</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($digitals as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img src="{{asset($item->image)}}" style="width: 150px; height: 100px" alt=""></td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->desc}}</td>
                                <td class={{$item->is_publish == 'active' ? 'text-success':'text-danger'}}>{{$item->is_publish == 'active' ? 'published' : 'draft'}}</td>
                                <td width="18%">
                                    <a href="{{route('digitals.edit', $item->id)}}" class="btn btn-info btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0);" onclick="deleteSection( '{{route('digitals.destroy', $item->id )}}')" class="btn btn-danger btn-sm" title="delete" role="button" aria-pressed="true"><i class="fa fa-trash"></i></a>
                                    @if($item->is_publish == 'active')
                                        <a href="{{ route('inactive.digital', $item->id) }}" class="btn btn-sm btn-danger" title="InActive Now"><i class="fa fa-arrow-down"></i></a>
                                    @else
                                        <a href="{{ route('active.digital', $item->id) }}" class="btn btn-sm btn-success" title="Active Now"><i class="fa fa-arrow-up"></i></a>
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
        function deleteSection($routeName,$reload){

            if(!confirm("Do you want to delete this Digital Service?")){ return false; }

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
