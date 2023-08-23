@extends('layouts.admin.master')

@section('title')
    Edit Corporate
@endsection

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">edit corporate social responsibility</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">dashboard</a></li>
                    <li class="breadcrumb-item active">edit corporate section</li>
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
                    <form class="form" action="{{route('corporate.update', $corporates->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <input type="hidden" name="id" value="{{ $corporates->id }}">
                        <input type="hidden" name="old_image" value="{{ $corporates->icon }}">

                        <div class="form-group">
                            <div class="text-center">
                                <img src="{{asset($corporates->image)}}"
                                     class="rounded-circle  h-25 w-25" alt="image">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <label id="projectinput7" class="file center-block">
                                <input type="file" id="file" name="image">
                                <span class="file-custom"></span>
                            </label>
                            @error('image') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-body">
                            <div class="form-group col-md-12">
                                <label>Description</label>
                                <textarea name="desc" class="form-control" id="desc" rows="5">{!! $corporates->desc !!}</textarea>
                                @error('desc') <div class="alert alert-danger">{{ $message }}</div> @enderror
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

@section('js')

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        $(document).ready(function () {
            CKEDITOR.replace('desc');
        });
    </script>

@endsection