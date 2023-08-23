@extends('layouts.admin.master')

@section('title')
    Key Service
@endsection

@section('content')


@php
$pictures = App\Models\admin\ArchitecturePicture::get();
@endphp

    @include('admin.message')
    <div class="row">

        @if(count($pictures) >= 1)
        <div class="col-md-12">
        @else
        <div class="col-md-8">
        @endif

            <div class="card">
                <div class="card-header">
                    <h3> Service Background</h3>
                </div>



                <div class="card-body ">
                        <table class="table table-striped table-bordered p-0 text-center table-hover">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($pictures as $item)
                                <tr>
                                    <td><img src="{{asset($item->image)}}" style="width: 200px; height: 100px" alt=""></td>
                                    <td>
                                        <a href="javascript:void(0);" onclick="deletePicture( '{{route('architecture-picture.destroy', $item->id )}}')" class="btn btn-danger btn-sm" title="delete" role="button" aria-pressed="true"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>

        @if (count($pictures) < 1)
            
        <div class="col-md-4 mb-30">
            <div class="card">

                <div class="card-header">
                    <h3> Add background Service </h3>
                </div>

                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <form class="form" action="{{route('architecture-picture.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label>Image</label>
                                <label id="projectinput7" class="file center-block">
                                    <input type="file" id="file" name="image" required>
                                    <span class="file-custom"></span>
                                </label>
                                @error('image') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success"><i class="la la-check-square-o"></i>save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endif
        
    </div>

    <div class="row mt-4">
        <div class="col-md-12 ">

            @include('admin.message')

            <div class="card">
                <div class="card-header">
                    <h3> Services
                        <a href="{{route('architecture.create')}}" class="btn btn-primary text-white float-start m-4">Add service</a>
                    </h3>
                </div>

                <div class="card-body ">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered p-0 text-center table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Icon</th>
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Publish</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($architectures as $architecture)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img src="{{asset($architecture->icon)}}" style="width: 50px; height: 50px" alt=""></td>
                                <td>{{$architecture->title}}</td>
                                <td>{{$architecture->desc}}</td>
                                <td class={{$architecture->is_publish == 'active' ? 'text-success':'text-danger'}}>{{$architecture->is_publish == 'active' ? 'published' : 'draft'}}</td>
                                <td width="10%">
                                    <a href="{{route('architecture.edit', $architecture->id)}}" class="btn btn-info btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0);" onclick="deleteArchitecture( '{{route('architecture.destroy', $architecture->id )}}')" class="btn btn-danger btn-sm" title="delete" role="button" aria-pressed="true"><i class="fa fa-trash"></i></a>
                                   @if($architecture->is_publish == 'active')
                                       <a href="{{ route('inactive.arc', $architecture->id) }}" class="btn btn-sm btn-danger" title="InActive Now"><i class="fa fa-arrow-down"></i></a>
                                   @else
                                       <a href="{{ route('active.arc', $architecture->id) }}" class="btn btn-sm btn-success" title="Active Now"><i class="fa fa-arrow-up"></i></a>
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
        function deletePicture($routeName,$reload){

            if(!confirm("Do you want to delete this Picture?")){ return false; }

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

    <script type="text/javascript">
        function deleteArchitecture($routeName,$reload){

            if(!confirm("Do you want to delete this architecture?")){ return false; }

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
