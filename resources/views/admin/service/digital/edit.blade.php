@extends('layouts.admin.master')

@section('title')
    edit digital
@endsection

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">Edit digital</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">dashboard</a></li>
                    <li class="breadcrumb-item active">edit digital section</li>
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
                    <form class="form" action="{{route('digitals.update', $digitals->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <input type="hidden" name="id" value="{{ $digitals->id }}">
                        <input type="hidden" name="old_image" value="{{ $digitals->image }}">

                        <div class="form-group">
                            <label> Digit icon</label>
                            <label id="projectinput8" class="file center-block">
                                <input type="file" id="file" name="icon" >
                                <span class="file-custom"></span>
                            </label>
                            @error('icon') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label> Digit image</label>
                            <label id="projectinput7" class="file center-block">
                                <input type="file" id="file" name="image" >
                                <span class="file-custom"></span>
                            </label>
                            @error('image') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>title </label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $digitals->title }}" >
                                    @error('title') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label>description </label>
                                    <textarea name="desc" class="form-control" id="desc" rows="5">{{ $digitals->desc }}</textarea>
                                    @error('desc') <div class="alert alert-danger">{{ $message }}</div> @enderror
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
