@extends('layouts.main')
@section('title', trans('About'))
@section('content')
    @include('layouts.inc.main-header')
    <section class="about mb-5">
        <div class="bg-light py-3 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0"><a href="{{ route('main.index') }}">{{ __('Home') }}</a> <span
                            class="mx-2 mb-0">/</span> <strong class="text-black">{{ __('About') }}</strong></div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('front/images/about/About.jpg') }}" alt="{{ __('about') }}">
                    </div>
                    <div class="col-md-6">
                        <h2 class="title">{{ __('About') }}</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur. Ut diam ut scelerisque orci imperdiet potenti. Nunc fringilla velit aliquam libero. Metus felis eu a rhoncus sodales viverra nullam. Morbi mauris orci sed pellentesque nec enim sed ac laoreet. Tellus velit amet at posuere porttitor sapien est. Et hendrerit purus curabitur purus lorem.
                        </p>
                        <p>
                            Vitae amet eu eu praesent nam tellus. Bibendum erat volutpat quis mauris integer ante dui. Sed et pulvinar felis eu. Varius ac mauris in neque et. Cursus sagittis sed hendrerit eu venenatis. Sit diam tempus sit id neque laoreet leo orci amet. Egestas non sociis vulputate tristique amet aliquam pellentesque. Tortor tincidunt vulputate cras auctor. Maecenas condimentum lorem orci donec. At enim varius augue accumsan amet amet quam. Et erat interdum dignissim donec. Tortor lacinia felis quis nulla eget.
                        </p>
                        <a href="#" class="btn-main my-3">See My Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.inc.main-footer')
@endsection
