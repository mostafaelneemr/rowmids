@extends('layouts.admin.master')

@section('title')
    Careers
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12 ">

           @include('admin.message')

            <div class="card">
                <div class="card-header">
                    <h3> Careers
                        <a href="{{route('career-position.create')}}" class="btn btn-primary text-white float-start m-4">Add career</a>
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
                            <th>Publish</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($careers as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->desc}}</td>
                                <td class={{$item->is_publish == 'active' ? 'text-success':'text-danger'}}>{{$item->is_publish == 'active' ? 'published' : 'draft'}}</td>
                                <td width="18%">
                                    <a href="{{route('career-position.edit', $item->id)}}" class="btn btn-info btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0);" onclick="deleteSlider( '{{route('career-position.destroy', $item->id )}}')" class="btn btn-danger btn-sm" title="delete" role="button" aria-pressed="true"><i class="fa fa-trash"></i></a>
                                    @if($item->is_publish == 'active')
                                        <a href="{{ route('inactive.career', $item->id) }}" class="btn btn-sm btn-danger" title="InActive Now"><i class="fa fa-arrow-down"></i></a>
                                    @else
                                        <a href="{{ route('active.career', $item->id) }}" class="btn btn-sm btn-success" title="Active Now"><i class="fa fa-arrow-up"></i></a>
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
