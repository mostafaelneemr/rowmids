@extends('errors.layout')

@section('content')

    <div class="error-not-found">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="error-inner text-center">
                    <div class="image mb--55">
                        <img src="{{asset('website/img/icons/image_404.png')}}" alt="Multipurpose imaages">
                    </div>
                    <h3 class="heading heading-h3 text-white">Looks like you are lost.</h3>
                    <div class="error-text mt--20">
                        <p class="text-white"> It looks like nothing was found at this location. You can either go back to the last page or go to homepage.</p>
                        <div class="error-button-group mt--40">
                            <a class="brook-btn bk-btn-theme btn-sd-size btn-rounded space-between" onclick="history.back()">Go back</a>
                            <a class="brook-btn bk-btn-white btn-sd-size btn-rounded space-between" href="{{ route('home')}}">Homepage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection