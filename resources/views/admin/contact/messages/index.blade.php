@extends('layouts.admin.master')

@section('title')
   Contact Messages 
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12 ">

            @include('admin.message')

            <div class="card">
              
                <div class="card-body ">
                    <div class="table-responsive">
                        <table id="table_id" class="table table-striped table-bordered p-0 text-center table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($messages as $message)
                            <tr id="{{$message->id}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$message->name}}</td>
                                <td>{{$message->email}}</td>
                                <td>{{$message->phone}}</td>
                                <td >{{$message->message}}</td>
                                <td>
                                    <a href="javascript:void(0);" onclick="deleteSlider( '{{route('deletemessage', $message->id )}}')" class="btn btn-danger btn-sm" title="delete" role="button" aria-pressed="true"><i class="fa fa-trash"></i></a>
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
                    '_method':'POST',
                    '_token':$('meta[name="csrf-token"]').attr('content'),
                },
                function(response){
                    removeLoading();
                    if(response){
                       var $data = response;
                        if($data.status == true){
                            toastr.success($data.message, 'Success !', {"closeButton": true});
                            // $('#table_id').DataTable().ajax.reload();
                            $('#'+$data.id).remove();
                        }else{
                            toastr.error($data.message, 'Error !', {"closeButton": true});
                        }
                    }
                }
            )
        }
    </script>
@endpush
