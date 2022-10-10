@extends('web.layouts.layout')

@section('content')
    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content">
                <h2>{{trans('frontend.Connect with us')}} </h2>
                <ul>
                    <li>
                        <a href="{{url("/")}}">{{trans('frontend.home')}}</a>
                    </li>
                    <li>{{trans('frontend.Connect with us')}}</li>
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
    <div class="contact-area ptb-100">
        <div class="container">
            <div class="contact-form">
                <form id="contactForm" method="post" action="{{route('contact.store')}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" data-validation="required" name="name" id="name" class="form-control" required
                                       data-error=" ادخل الاسم " placeholder="{{trans('frontend.name')}} *">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="email" data-validation="required" name="email" id="email" class="form-control" required
                                       data-error=" من فضلك ادخل البريد الالكترونى " placeholder="{{trans('frontend.email')}} *">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" data-validation="required"  name="phone" id="phone_number" required
                                       data-error=" من فضلك ادخل رقم الهاتف " class="form-control"
                                       placeholder="{{trans('frontend.phone')}} ">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" data-validation="required" name="subject" id="msg_subject" class="form-control" required
                                       data-error=" من فضلك ادخل الموضوع" placeholder="{{trans('frontend.subject')}}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea name="message" data-validation="required" class="form-control" id="message" cols="30" rows="5" required
                                          data-error="اكتب رسالتك " placeholder="{{trans('frontend.message')}}"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <button type="submit" id="send_contact" class="default-btn"> {{trans('frontend.send')}} <i
                                        class="ri-arrow-right-line"></i><span></span></button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group" id="alert_div">

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="contact-info-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="contact-address">
                        <h3> {{trans('frontend.Contact Information')}} </h3>
                        <p> {{trans('frontend.Contact us at any time and we will respond to you quickly')}} </p>
                        <ul class="address-info">
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
                        <ul class="address-social">
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
                            {{--   <li>
                                   <a href="#" target="_blank">
                                       <i class="ri-linkedin-fill"></i>
                                   </a>
                               </li>--}}
{{--                            <li>--}}
{{--                                <a href="https://api.whatsapp.com/send?phone=00201552842999" target="_blank">--}}
{{--                                    <i class="ri-messenger-line"></i>--}}
{{--                                </a>--}}
{{--                            </li>--}}
                            <li>
                                <a href="https://api.whatsapp.com/send?phone={{$settings->whatsapp}}" target="_blank">
                                    <i class="ri-messenger-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div id="map">
                        <iframe class="googleMap wow fadeInUp "
                                src="https://maps.google.com/maps?q={{$settings->latitude}},{{$settings->longitude}}&hl=ar&z=14&amp;output=embed">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

    <script>
        $("#send_contact").on("click", function (e) {
            e.preventDefault();
            var form = document.getElementById('contactForm');
            var isValidForm = form.checkValidity();
            if (!isValidForm) {
                $("#alert_div").html('<div class="alert alert-danger">\n' +
                    '  <strong>خطأ!</strong>  تأكد من ادخال جميع البيانات  \n' +
                    '</div>');
            } else {
                var dataString = $("#contactForm").serialize();
                $.ajax({
                    type: 'post',
                    url: "{{route('contact.store')}}",
                    data: dataString,
                    dataType: 'json',
                    cache: false,
                    processData: false,
                    success: function (result) {
                        console.log(200);
                        // console.log(result);
                        $("#alert_div").html('<div class="alert alert-success">\n' +
                            '  <strong>تم بنجاح!</strong> تم ارسال رسالتك بنجاح .\n' +
                            '</div>');
                    },
                    error: function (error) {
                        console.log(500);
                        console.log(error.responseText);
                    }
                });
            }

        })
    </script>


@endsection
