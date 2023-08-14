@extends('layouts.admin.master')

@section('title')
    Services
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12 ">

           @include('admin.message')

            <div class="card">
                <div class="card-header">
                    <h3> Services
                        <a href="{{route('service-home.create')}}" class="btn btn-primary text-white float-start m-4">Add Section</a>
                    </h3>
                </div>

                <div class="card-body ">
                    <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered p-0 text-center table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->desc}}</td>
                                <td width="18%">
                                    <a href="{{route('service-home.edit', $item->id)}}" class="btn btn-info btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0);" onclick="deleteService( '{{route('service-home.destroy', $item->id )}}')" class="btn btn-danger btn-sm" title="delete" role="button" aria-pressed="true"><i class="fa fa-trash"></i></a>
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
        function deleteService($routeName,$reload){

            if(!confirm("Do you want to delete this Service?")){ return false; }

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
