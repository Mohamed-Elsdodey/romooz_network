@extends('web.layouts.layout')

@section('content')
    @php

    $settings=\App\Models\Setting::first();

    @endphp
    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content">
                <h2> {{trans('frontend.Programming and web design')}} </h2>
                <ul>
                    <li>
                        <a href="{{ url('/') }}">{{trans('frontend.home')}}</a>
                    </li>
                    <li>{{trans('frontend.Service details')}} </li>
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
    <section class="services-details-area py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 p-2">
                    <div class=" nav row  justify-content-between nav-pills " role="tablist"
                         aria-orientation="vertical">
                        <button class="nav-link col-6  col-md-12 mb-md-2  active" id="info-tab" data-bs-toggle="pill"
                                data-bs-target="#info" type="button" role="tab" aria-controls="info" aria-selected="true">
                            {{trans('frontend.Service details')}}</button>

                    </div>
                    <div class="services-details-information d-none d-md-block">
                        <div class="services-contact-info">
                            <h3 class="mb-5"> {{trans('frontend.Start your website now and implement your idea with us')}} </h3>
                            <a href="https://wa.me/+966{{$settings->whatsapp}}?text={{get_file($service->title)}}" target="_blank" class="default-btn wow fadeInDown" data-wow-delay="200ms"
                               data-wow-duration="1000ms"> {{trans('frontend.Request service')}} <i class="fas fa-headset"></i> <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 p-2">
                    <div class="tab-content">
                        <!-- tab -->
                        <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                            <div class="services-details-overview-content ">
                                <div class="overview-image mt-0 mb-5">
                                    <img src="{{asset('romoz_design')}}/assets/images/services-details/web.jpg" alt="image">
                                    <div class="shape-1" data-speed="0.08" data-revert="true">
                                        <img src="{{asset('romoz_design')}}/assets/images/services-details/shape-1.png" alt="image">
                                    </div>
                                    <div class="shape-2" data-speed="0.08" data-revert="true">
                                        <img src="{{asset('romoz_design')}}/assets/images/services-details/shape-2.png" alt="image">
                                    </div>
                                    <div class="shape-3" data-speed="0.08" data-revert="true">
                                        <img src="{{asset('romoz_design')}}/assets/images/services-details/shape-3.png" alt="image">
                                    </div>
                                </div>
                                <div class="details">
                                    <h3> {{$service->title}} </h3>
                                    <p>
                                    {{$service->desc}}
                                    </p>

                                </div>

                            </div>
                        </div>
                        <!-- tab -->
                        <div class="tab-pane fade" id="portfolio" role="tabpanel" aria-labelledby="portfolio-tab">


                        </div>
                    </div>
{{--                    <div class="services-details-information  d-md-none">--}}
{{--                        <div class="services-contact-info">--}}
{{--                            <h3 class="mb-5"> {{trans('frontend.Start your website now and implement your idea with us')}} </h3>--}}
{{--                            <a href=href="https://api.whatsapp.com/send?phone={{$settings->whatsapp}}" class="default-btn wow fadeInDown" data-wow-delay="200ms"--}}
{{--                               data-wow-duration="1000ms"> اطلب الخدمة <i class="fas fa-headset"></i> <span></span></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
@endsection
