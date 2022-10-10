@extends('web.layouts.layout')

@section('content')
    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content">
                <h2> {{trans('frontend.common questions')}} </h2>
                <ul>
                    <li>
                        <a href="{{ url('/') }}">{{trans('frontend.home')}}</a>
                    </li>
                    <li> {{trans('frontend.common questions')}} </li>
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
    <div class="faq-area ptb-100">
        <div class="container">
            <div class="faq-accordion accordion-box">
                <div class="accordion">
                    @foreach($questions as $question)
                    <div class="accordion-item">
                        <div class="accordion-title ">
                            <i class="ri-add-line"></i>
                             {{$question->title}}
                        </div>
                        <div class="accordion-content ">
                            <ul>
                                <li>
                                    {{$question->desc}}
                                </li>

                            </ul>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="ticket-box">
                <h3>{{trans('frontend.Have any question? Please call us or email us')}}</h3>
                <div class="box-one">
                    <i class="ri-customer-service-line"></i>
                    <a href="tel:{{$settings->phone1}}">{{$settings->phone1}}</a>
                </div>
                <div class="box-two">
                    <i class="ri-earth-line"></i>
                    <a href="mailto:{{$settings->email1}}"> {{$settings->email1}} </a>
                </div>
            </div>
        </div>
        <div class="faq-shape-1" data-speed="0.08" data-revert="true">
            <img src="{{asset('romoz_design')}}/assets/images/faq/shape-1.png" alt="image">
        </div>
        <div class="faq-shape-2" data-speed="0.08" data-revert="true">
            <img src="{{asset('romoz_design')}}/assets/images/faq/shape-2.png" alt="image">
        </div>
        <div class="faq-shape-3" data-speed="0.08" data-revert="true">
            <img src="{{asset('romoz_design')}}/assets/images/faq/shape-3.png" alt="image">
        </div>

        <div class="faq-shape-5" data-speed="0.08" data-revert="true">
            <img src="{{asset('romoz_design')}}/assets/images/faq/shape-5.png" alt="image">
        </div>
    </div>
@endsection
