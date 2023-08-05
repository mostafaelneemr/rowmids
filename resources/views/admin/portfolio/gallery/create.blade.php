@extends('layouts.admin.master')

@section('title')
    Add Picture
@endsection

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">Create Brand</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">dashboard</a></li>
                    <li class="breadcrumb-item active">create picture</li>
                </ol>
            </div>
        </div>
    </div>

   @include('admin.message')

    <!-- main body -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <form class="form" action="{{route('gallery.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Picture </label>
                            <label id="projectinput7" class="file center-block">
                                <input type="file" id="file" name="image" required>
                                <span class="file-custom"></span>
                            </label>
                            @error('image') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Title </label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required>
                                    @error('title') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>

                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="button" class="btn btn-warning mr-1" onclick="history.back();"><i class="ft-x"></i>back</button>
                            <button type="submit" class="btn btn-success"><i class="la la-check-square-o"></i>save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
