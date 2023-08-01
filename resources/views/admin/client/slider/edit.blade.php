@extends('layouts.admin.master')

@section('title')
    edit slider
@endsection

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">edit slider</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">dashboard</a></li>
                    <li class="breadcrumb-item active">edit slider section</li>
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
                    <form class="form" action="{{route('client-slider.update', $sliders->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <input type="hidden" name="id" value="{{ $sliders->id }}">
                        <input type="hidden" name="old_image" value="{{ $sliders->image }}">

                        <div class="form-group">
                            <div class="text-center">
                                <img src="{{asset($sliders->image)}}"
                                     class="rounded-circle  h-25 w-25" alt="image slider">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>slider image</label>
                            <label class="file center-block">
                                <input type="file" id="file" name="image">
                                <span class="file-custom"></span>
                            </label>
                            @error('image') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>title </label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $sliders->title }}" required>
                                    @error('title') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label>sub title </label>
                                    <input type="text" name="sub_title" class="form-control @error('sub_title') is-invalid @enderror" value="{{ $sliders->sub_title }}">
                                    @error('sub_title') <div class="alert alert-danger">{{ $message }}</div> @enderror
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
