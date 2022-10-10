<!-- spinner -->
@php

$settings=\App\Models\Setting::first();

@endphp
<div class="preloader-area">
    <div class="spinner">
        <div class="inner">
            <div class="disc"></div>
            <div class="disc"></div>
            <div class="disc"></div>
        </div>
    </div>
</div>
<!-- navbar -->
<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="{{url("/")}}">
                        <img src="{{get_file($settings->header_logo)}}" />
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{url("/")}}">
                    <img src="{{get_file($settings->header_logo)}}" />

                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link active"> {{trans('frontend.home')}} </a>
                        </li>



                        <li class="nav-item">
                            <a href="{{ route('web.ourWorks') }}" class="nav-link">{{trans('frontend.our work')}}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('marketing') }}" class="nav-link">{{trans('frontend.Marketing')}}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('web.contactUs') }}" class="nav-link">{{trans('frontend.Connect with us')}}</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{trans('frontend.More')}}
                                <i class="ri-add-line"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{route('web.questions')}}" class="nav-link"> {{trans('frontend.common questions')}} </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('offers') }}" class="nav-link"> {{trans('frontend.Offers')}}                  </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('web.termsCondition') }}" class="nav-link"> {{trans('frontend.Terms and Conditions')}} </a>
                                </li>
                            </ul>

                        </li>

                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                            @if($properties['native']=='English')
                                @if(LaravelLocalization::getCurrentLocale()=="ar")
                                    <li class="nav-item ">
                                        <a class="ms-2  nav-link " rel="alternate"
                                           hreflang="{{ $localeCode }}"
                                           href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">

                                            {{trans('frontend.eng')}}
                                        </a>
                                    </li>
                                @endif

                            @elseif($properties['native']=='العربية')
                                @if(LaravelLocalization::getCurrentLocale()=="en")
                                    <li class="nav-item ">
                                        <a rel="alternate" class="ms-2  nav-link "
                                           hreflang="{{ $localeCode }}"
                                           href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">

                                            {{trans('frontend.arb')}}
                                        </a>
                                    </li>
                                @endif

                            @endif

                        @endforeach


                    </ul>
                    <div class="others-options d-flex align-items-center">
                        <!-- <div class="option-item">
                          <i class="search-btn ri-search-line"></i>
                          <i class="close-btn ri-close-line"></i>
                          <div class="search-overlay search-popup">
                            <div class='search-box'>
                              <form class="search-form">
                                <input class="search-input" name="search" placeholder="بحث ..." type="text">
                                <button class="search-button" type="submit">
                                  <i class="ri-search-line"></i>
                                </button>
                              </form>
                            </div>
                          </div>
                        </div> -->
                        <div class="option-item">
                            <a href="{{ route('web.contactUs') }}" class="default-btn"> {{trans('frontend.Connect with us')}} <i class="ri-message-line"></i><span></span></a>
                        </div>
                        <div class="option-item">
                            <div class="side-menu-btn">
                                <i class="ri-menu-4-line" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="option-inner">
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <a href="{{route('web.contactUs')}}" class="default-btn"> {{trans('frontend.Connect with us')}} <i class="ri-message-line"></i><span></span></a>
                        </div>
                        <div class="option-item">
                            <div class="side-menu-btn">
                                <i class="ri-menu-4-line" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal"><i class="ri-close-line"></i></button>
            <div class="modal-body">
                <div class="title">
                    <a href="{{url("/")}}">
                        <img src="{{isset($settings->tap_logo)?get_file($settings->tap_logo):asset('39a6d186-91a6-477b-9a9b-217b49230b91.jpg')}}">
                    </a>
                </div>
                <div class="sidebar-content">
                    <h3>{{trans('frontend.Abstract')}} </h3>
                    <p>{{$settings->our_service_desc}}</p>
                </div>
                <div class="sidebar-contact-info">
                    <h3> {{trans('frontend.Contact Information')}} </h3>
                    <ul class="info-list">
                        <li>
                            <i class="ri-customer-service-line"></i>
                            <a href="tel:{{$settings->phone1}}">{{$settings->phone1}}</a>
                        </li>
                        <li>
                            <i class="ri-customer-service-line"></i>
                            <a href="tel:{{$settings->phone2}}">{{$settings->phone2}}</a>
                        </li>
                        <li>
                            <i class="ri-global-line"></i>
                            <a href="mailto:{{$settings->email1}}"><span>{{$settings->email1}}</span></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.google.com/maps/search/?api=1&query={{$settings->latitude}},{{$settings->longitude}}">
                                <i class="ri-map-pin-line"></i>
                                {{$settings->address1}} </a>
                        </li>
                    </ul>
                </div>
                <ul class="sidebar-social-list">
                    <li>
                        <a href="{{$settings->facebook}}" target="_blank">
                            <i class="ri-facebook-line"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{$settings->twitter}}" target="_blank">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
