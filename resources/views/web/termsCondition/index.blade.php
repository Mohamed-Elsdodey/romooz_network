@extends('web.layouts.layout')

@section('content')
    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content">
                <h2> {{trans('frontend.Terms and Conditions')}} </h2>
                <ul>
                    <li>
                        <a href="{{ url('/') }}"> {{trans('frontend.home')}} </a>
                    </li>
                    <li> {{trans('frontend.Terms and Conditions')}} </li>
                </ul>
            </div>
        </div>
        <div class="page-banner-shape-1" data-speed="0.08" data-revert="true">
            <img src="{{asset('romoz_design')}}/assets/images/page-banner/shape-1.png" alt="image">
        </div>
        <div class="page-banner-shape-2" data-speed="0.08" data-revert="true">
            <img src="{{asset('romoz_design')}}/assets/images/page-banner/shape-2.png" alt="image">
        </div>
        <div class="page-banner-shape-3" data-speed="0.08" data-revert="true">
            <img src="{{asset('romoz_design')}}/assets/images/page-banner/shape-3.png" alt="image">
        </div>
        <div class="page-banner-shape-4" data-speed="0.08" data-revert="true">
            <img src="{{asset('romoz_design')}}/assets/images/page-banner/shape-4.png" alt="image">
        </div>
    </div>
    <div class="terms-of-service-area  py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 m-auto col-md-12">
                    <div class="terms-of-service-content">
                        <img src="{{asset('romoz_design')}}/assets/images/terms-of-service.jpg" alt="image">
                        {!! $settings->terms_condition !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
