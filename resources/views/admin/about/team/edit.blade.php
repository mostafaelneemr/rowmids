@extends('layouts.admin.master')

@section('title')
    Edit teams
@endsection

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">Edit teams {{ $teams->name }}</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">dashboard</a></li>
                    <li class="breadcrumb-item active">edit team section</li>
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
                    <form class="form" action="{{route('teams.update', $teams->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <input type="hidden" name="id" value="{{ $teams->id }}">
                        <input type="hidden" name="old_image" value="{{ $teams->image }}">

                        <div class="form-group">
                            <div class="text-center">
                                <img src="{{asset($teams->image)}}"
                                     class="rounded-circle  h-25 w-25" alt="image slider">
                            </div>
                        </div>

                        <div class="form-group">
                            <label> person image</label>
                            <label id="projectinput7" class="file center-block">
                                <input type="file" id="file" name="image">
                                <span class="file-custom"></span>
                            </label>
                            @error('image') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-body">
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label>Name </label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $teams->name }}" required>
                                    @error('name') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Title </label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $teams->title }}" required>
                                    @error('title') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Facebook </label>
                                    <input type="text" name="facebook" class="form-control @error('facebook') is-invalid @enderror" placeholder="facebook link" value="{{ $teams->facebook }}" required>
                                    @error('facebook') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Twitter </label>
                                    <input type="text" name="twitter" class="form-control @error('twitter') is-invalid @enderror" placeholder="twitter link" value="{{ $teams->twitter }}" required>
                                    @error('twitter') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Instagram </label>
                                    <input type="text" name="instagram" class="form-control @error('instagram') is-invalid @enderror" placeholder="instagram link" value="{{ $teams->instagram }}" required>
                                    @error('instagram') <div class="alert alert-danger">{{ $message }}</div> @enderror
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
