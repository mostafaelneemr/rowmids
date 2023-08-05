@extends('layouts.admin.master')

@section('title')
    Gallery
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12 ">

           @include('admin.message')

            <div class="card">
                <div class="card-header">
                    <h3> Gallery
                        <a href="{{route('gallery.create')}}" class="btn btn-primary text-white float-start m-4">Add Picture</a>
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
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($galleries as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img src="{{asset($item->image)}}" style="width: 150px; height: 100px" alt=""></td>
                                <td>{{$item->title}}</td>
                                <td>
                                    <a href="{{route('gallery.edit', $item->id)}}" class="btn btn-info btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0);" onclick="deleteSlider( '{{route('gallery.destroy', $item->id )}}')" class="btn btn-danger btn-sm" title="delete" role="button" aria-pressed="true"><i class="fa fa-trash"></i></a>
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
        function deleteSlider($routeName,$reload){

            if(!confirm("Do you want to delete this Slider?")){ return false; }

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
                            toastr.success($data.message, 'Success !', {"closeButton": true});
                            $('#table_id').ajax.reload();
                        }else{
                            toastr.error($data.message, 'Error !', {"closeButton": true});
                        }
                    }
                }
            )
        }
    </script>
@endpush
