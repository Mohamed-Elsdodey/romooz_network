@extends('web.layouts.layout')

@section('content')
    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content">
                <h2>تواصل معنا </h2>
                <ul>
                    <li>
                        <a href="{{url("/")}}">الرئيسية</a>
                    </li>
                    <li>تواصل معنا</li>
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
                                <input type="text" name="name" id="name" class="form-control" required
                                       data-error=" ادخل الاسم " placeholder="الاسم *">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" required
                                       data-error=" من فضلك ادخل البريد الالكترونى " placeholder="البريد الالكترونى *">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="phone" id="phone_number" required
                                       data-error=" من فضلك ادخل رقم الهاتف " class="form-control"
                                       placeholder="رقم الهاتف">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="subject" id="msg_subject" class="form-control" required
                                       data-error=" من فضلك ادخل الموضوع" placeholder="الموضوع">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control" id="message" cols="30" rows="5" required
                                          data-error="اكتب رسالتك " placeholder="الرسالة"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                            <button type="submit" id="send_contact" class="default-btn"> ارسال <i
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
                        <h3> معلومات التواصل </h3>
                        <p> تواصل معنا في اي وقت وسيتم الرد عليك سريعا </p>
                        <ul class="address-info">
                            <li>
                                <i class="ri-customer-service-line"></i>
                                <a href="tel:+201096846530">01096846530</a>
                            </li>
                            <li>
                                <i class="ri-customer-service-line"></i>
                                <a href="tel:+201552842999">01552842999</a>
                            </li>
                            <li>
                                <i class="ri-global-line"></i>
                                <a href="mailto:romozsoftgroup@gmail.com"><span>romozsoftgroup@gmail.com</span></a>
                            </li>
                            <li>
                                <i class="ri-map-pin-line"></i>
                                مصر / المنوفية / شبين الكوم
                            </li>
                        </ul>
                        <ul class="address-social">
                            <li>
                                <a href="https://www.facebook.com/romoz-103912268771452" target="_blank">
                                    <i class="ri-facebook-line"></i>
                                </a>
                            </li>
                            {{-- <li>
                                 <a href="#" target="_blank">
                                     <i class="ri-twitter-fill"></i>
                                 </a>
                             </li>--}}
                            {{--   <li>
                                   <a href="#" target="_blank">
                                       <i class="ri-linkedin-fill"></i>
                                   </a>
                               </li>--}}
                            <li>
                                <a href="https://api.whatsapp.com/send?phone=00201552842999" target="_blank">
                                    <i class="ri-messenger-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://api.whatsapp.com/send?phone=00201096846530" target="_blank">
                                    <i class="ri-messenger-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27484.135744127816!2d31.02617455875683!3d30.562948478567883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7d68b68933ea3%3A0x77434af2db2fa06f!2z2LTYqNmK2YYg2KfZhNmD2YjZhdiMINmC2LPZhSDYtNio2YrZhiDYp9mE2YPZiNmF2Iwg2KfZhNmF2YbZiNmB2YrYqQ!5e0!3m2!1sar!2seg!4v1636786240043!5m2!1sar!2seg"></iframe>
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
