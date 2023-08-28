@extends('layouts.admin.master')

@section('title')
    Edit User
@stop

@section('Page Title')
    Edit User 
@stop


@section('content')
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">Edit user {{ $user->name }}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">Home</a></li>
                <li class="breadcrumb-item"><a href="#" onclick="history.back()">back</a></li>
            </ol>
        </div>
    </div>
</div>


@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif




<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Name</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control', 'required' => 'required')) !!}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Email</strong>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control', 'required' => 'required')) !!}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Password</strong>
            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control', 'required' => 'required')) !!}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Confirm Password</strong>
            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control', 'required' => 'required')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-success">Update</button>
    </div>
</div>
{!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection