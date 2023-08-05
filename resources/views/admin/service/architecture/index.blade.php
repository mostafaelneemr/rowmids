@extends('layouts.admin.master')

@section('title')
    Architectures
@endsection

@section('content')

    @include('admin.message')
    <div class="row">
        <div class="col-md-8 ">

            <div class="card">
                <div class="card-header">
                    <h3> Architectures Picture</h3>
                </div>

                @php
                    $pictures = App\Models\admin\ArchitecturePicture::get();
                @endphp

                <div class="card-body ">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered p-0 text-center table-hover">
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
                                        <a href="javascript:void(0);" onclick="deleteSlider( '{{route('testimonials.destroy', $item->id )}}')" class="btn btn-danger btn-sm" title="delete" role="button" aria-pressed="true"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-30">
            <div class="card">

                <div class="card-header">
                    <h3> Add background Architectures </h3>
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
    </div>

    <div class="row mt-4">
        <div class="col-md-12 ">

            @include('admin.message')

            <div class="card">
                <div class="card-header">
                    <h3> Architectures
                        <a href="{{route('architecture.create')}}" class="btn btn-primary text-white float-start m-4">Add architecture</a>
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
                            <th>Sub Title</th>
                            <th>Publish</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($architectures as $architecture)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img src="{{asset($architecture->icon)}}" style="width: 150px; height: 100px" alt=""></td>
                                <td>{{$architecture->title}}</td>
                                <td>{{$architecture->desc}}</td>
                                <td class={{$architecture->is_publish == 'active' ? 'text-success':'text-danger'}}>{{$architecture->is_publish == 'active' ? 'published' : 'draft'}}</td>
                                <td>
                                    <a href="{{route('architecture.edit', $architecture->id)}}" class="btn btn-info btn-sm" title="Edit" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0);" onclick="deleteSlider( '{{route('architecture.destroy', $architecture->id )}}')" class="btn btn-danger btn-sm" title="delete" role="button" aria-pressed="true"><i class="fa fa-trash"></i></a>
                                    @if($architecture->is_publish == 'active')
                                        <a href="{{ route('inactive.slider', $architecture->id) }}" class="btn btn-sm btn-danger" title="InActive Now"><i class="fa fa-arrow-down"></i></a>
                                    @else
                                        <a href="{{ route('active.slider', $architecture->id) }}" class="btn btn-sm btn-success" title="Active Now"><i class="fa fa-arrow-up"></i></a>
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
