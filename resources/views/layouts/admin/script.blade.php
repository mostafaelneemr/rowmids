<!-- jquery -->

<script src="{{ URL::asset('backend/assets/js/jquery-3.3.1.min.js') }}"></script>
<!-- plugins-jquery -->
<script src="{{ URL::asset('backend/assets/js/plugins-jquery.js') }}"></script>
<script src="{{ URL::asset('backend/assets/js/jquery.blockUI.js') }}"></script>
{{--<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>--}}

<!-- plugin_path -->
<script type="text/javascript">var plugin_path = '{{ asset('backend/assets/js') }}/';</script>
<!-- chart -->
<script src="{{ URL::asset('backend/assets/js/chart-init.js') }}"></script>
{{-- <link href="{{ asset('backend/assets/css/fontawesome/js/all.js')}}" rel="stylesheet"> --}}
<!-- calendar -->
<script src="{{ URL::asset('backend/assets/js/calendar.init.js') }}"></script>
<!-- charts sparkline -->
<script src="{{ URL::asset('backend/assets/js/sparkline.init.js') }}"></script>
<!-- charts morris -->
<script src="{{ URL::asset('backend/assets/js/morris.init.js') }}"></script>
<!-- datepicker -->
<script src="{{ URL::asset('backend/assets/js/datepicker.js') }}"></script>
<!-- sweetalert2 -->
<script src="{{ URL::asset('backend/assets/js/sweetalert2.js') }}"></script>
<!-- toastr -->
<script src="{{ URL::asset('backend/assets/js/toastr.js') }}"></script>
<!-- validation -->
<script src="{{ URL::asset('backend/assets/js/validation.js') }}"></script>
<!-- lobilist -->
<script src="{{ URL::asset('backend/assets/js/lobilist.js') }}"></script>
<!-- custom -->
<script src="{{ URL::asset('backend/assets/js/custom.js') }}"></script>
<script src="{{ URL::asset('backend/assets/js/node.js') }}" type="text/javascript"></script>

<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}"
    switch (type){
        case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;
        case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;
        case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;
        case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
    }
    @endif
</script>

{{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
<script type="text/javascript">
    $(function (){
        $(document).on('click','#delete',function(e){
            e.preventDefault();
            var link = $(this).attr("href");

    Swal.fire({
        title: 'Are you sure?',
        text: "Delete This Data?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = link
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success' )
            }
            })
        });
    });
</script>
@yield('js')
