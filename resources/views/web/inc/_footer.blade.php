<section class="footer-area pt-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <div class="widget-logo">
                        <a href="{{url("/")}}">
                            <img src="{{get_file($settings->footer_logo)}}">
                        </a>
                    </div>
                    <p>{{trans('frontend.The best solution for your IT startup')}} </p>
                    <ul class="widget-info">
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

                            <a href="mailto:{{$settings->email2}}"><span>{{$settings->email2}}</span></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.google.com/maps/search/?api=1&query={{$settings->latitude}},{{$settings->longitude}}">
                                <i class="ri-map-pin-line"></i>
                                {{$settings->address1}} </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-6">
                <div class="single-footer-widget">
                    <h3>{{trans('frontend.romoz network')}}</h3>
                    <ul class="footer-links-list">
                        <li>
                            <a href="{{ route('web.ourWorks') }}" class="nav-link">{{trans('frontend.our work')}}</a>

                        </li>
                        <li>
                            <a href="{{ url('marketing') }}" class="nav-link">{{trans('frontend.Marketing')}}</a>
                        </li>
                        <li>
                            <a href="{{ url('offers') }}" class="nav-link"> {{trans('frontend.Offers')}}                  </a>
                        </li>
                        <li><a href="{{url("web")}}"> {{trans('frontend.Programming and web design')}} </a></li>

                        <li>
                            <a href="{{route('web.termsCondition') }}" class="nav-link"> {{trans('frontend.Terms and Conditions')}} </a>
                        </li>
                        <li>
                            <a href="{{route('web.contactUs') }}" class="nav-link">{{trans('frontend.Connect with us')}}</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-3 col-6">
                <div class="single-footer-widget">
                    <h3> {{trans('frontend.contact mail')}}</h3>
                    <ul class="footer-links-list">
                        <li><a href="mailto:{{$settings->email1}}"> <i class="fad fa-mailbox me-2"></i> الدعم الفني </a></li>
                        <li><a href="mailto:{{$settings->email1}}"> <i class="fad fa-mailbox me-2"></i> الموارد البشرية </a></li>
                        <li><a href="mailto:{{$settings->email1}}"> <i class="fad fa-mailbox me-2"></i> التسويق والمبيعات </a></li>


                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3> {{trans('frontend.Follow us')}} </h3>


                    <ul class="widget-social">
                        <li>
                            <a href="{{$settings->facebook}}" target="_blank">
                                <i class="ri-facebook-line"></i>

                            </a>


                            {{--                        </li>--}}
                            {{--<li>
                                <a href="#" target="_blank">
                                    <i class="ri-twitter-fill me-2"></i>
                                    twitter
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="ri-linkedin-fill me-2"></i>
                                    linkedin
                                </a>
                            </li>--}}
                            {{--                        <li>--}}
                            <a href="{{$settings->twitter}}" target="_blank">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </li>
                        {{--                        <li>--}}
                        {{--                            <a href="https://api.whatsapp.com/send?phone=00201552842999" target="_blank">--}}
                        {{--                                <i class="ri-whatsapp-line me-2"></i>--}}
                        {{--                                  whatsapp--}}
                        {{--                            </a>--}}
                        {{--                        </li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <p>
                    {{trans('frontend.Copyrights')}} © {{date("Y")}} {{trans('frontend.all rights are save')}} <a href="#">{{trans('frontend.romoz network')}}</a>

                </p>
            </div>
        </div>
    </div>
    <div class="footer-shape-1" data-speed="0.08" data-revert="true">
        <img src="{{asset('romoz_design')}}/assets/images/footer/shape-1.png">
    </div>
    <div class="footer-shape-2" data-speed="0.08" data-revert="true">
        <img src="{{asset('romoz_design')}}/assets/images/footer/shape-2.png">
    </div>
    <div class="footer-shape-3" data-speed="0.08" data-revert="true">
        <img src="{{asset('romoz_design')}}/assets/images/footer/shape-3.png">
    </div>
    <div class="footer-shape-4" data-speed="0.08" data-revert="true">
        <img src="{{asset('romoz_design')}}/assets/images/footer/shape-4.png">
    </div>
    <div class="footer-shape-5" data-speed="0.08" data-revert="true">
        <img src="{{asset('romoz_design')}}/assets/images/footer/shape-5.png">
    </div>
</section>

<a href="#" class="go-top">
    <i class="ri-arrow-up-s-line"></i>
</a>
