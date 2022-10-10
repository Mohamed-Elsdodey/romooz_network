@extends('web.layouts.layout')

@section('content')
    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content">
                <h2> برمجة وتصميم المواقع الإلكترونية </h2>
                <ul>
                    <li>
                        <a href="{{ url('/') }}">الرئيسية</a>
                    </li>
                    <li>تفاصيل الخدمة </li>
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
                            تفاصيل الخدمة </button>
                        <button class="nav-link col-6  col-md-12 mb-md-2" id="portfolio-tab" data-bs-toggle="pill"
                            data-bs-target="#portfolio" type="button" role="tab" aria-controls="portfolio"
                            aria-selected="false"> اعمالنا </button>
                    </div>
                    <div class="services-details-information d-none d-md-block">
                        <div class="services-contact-info">
                            <h3 class="mb-5"> ابدأ موقعك الان ونفذ فكرتك معنا </h3>
                            <a href="{{ url('contact') }}" class="default-btn wow fadeInDown" data-wow-delay="200ms"
                                data-wow-duration="1000ms"> اطلب الخدمة <i class="fas fa-headset"></i> <span></span></a>
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
                                    <h3> التصميم </h3>
                                    <p> نقدم لكم خدمة تصميم المواقع بتصميم جذاب وحديث متوافق مع معايير تجربة المستخدم ،
                                        تصميم موقع له تأثير كبير على نجاح الشركة أو المؤسسة التي تسعى إلى إنشاء موقع
                                        يعطي
                                        معلومات عن المؤسسة وأهدافها وتعريف الخدمات
                                        لذلك نساعدك في تصميم موقع بأحدث التقنيات التي تسهل وصول علامتك التجارية بطريقة
                                        بسيطة
                                        وواضحة لتكون نافذتك على العالم </p>
                                    <ul class="overview-list">
                                        <li><i class="ri-check-line"></i> تصميم موقع شركة </li>
                                        <li><i class="ri-check-line"></i> تصميم موقع تدريب </li>
                                        <li><i class="ri-check-line"></i> تصميم موقع سياحي </li>
                                        <li><i class="ri-check-line"></i> تصميم موقع تعريفي </li>
                                        <li><i class="ri-check-line"></i> تصميم متجر إلكتروني </li>
                                        <li><i class="ri-check-line"></i> تصميم موقع شخصي او مدونة شخصية </li>
                                        <li><i class="ri-check-line"></i> تصميم موقع إخباري </li>
                                        <li><i class="ri-check-line"></i> تصميم موقع رياضي </li>
                                        <li><i class="ri-check-line"></i> تصميم موقع سيارات </li>
                                        <li><i class="ri-check-line"></i> تصميم موقع عقاري </li>
                                        <li><i class="ri-check-line"></i> تصميم موقع طبي </li>
                                        <li><i class="ri-check-line"></i> تصميم موقع مدرسة </li>
                                        <li><i class="ri-check-line"></i> تصميم موقع مطعم </li>
                                    </ul>
                                </div>
                                <div class="details">
                                    <h3> التطوير </h3>
                                    <p>نحن في رموز نملك فريقاً برمجياً على استعداد تام لتلبية كافة البرمجيات التي يطلبها
                                        العميل وبأفضل شكل حيث نستخدم لغات البرمجة المتعددة وخاصة لغة PHP التي تعتبر
                                        الأكثر
                                        استخداماً
                                        في التطبيقات البرمجية ونسعى بكافة السبل والتقنيات المتاحة لتقديم الموقع بأفضل
                                        شكل يصبو
                                        اليه
                                        العميل
                                    </p>
                                    <ul class="overview-list">
                                        <li><i class="ri-check-line"></i>
                                            <h6>الاحدث والافضل </h6>
                                            <p>استخدام افضل واحدث التقنيات البرمجية وتطبيق اقصى طرق الحماية . </p>
                                        </li>
                                        <li><i class="ri-check-line"></i>
                                            <h6>راحة وأمان </h6>
                                            <p> توفير وسائل وخصائص برمجية تمنح للعميل الراحة وسهولة الاستخدام . </p>
                                        </li>
                                        <li><i class="ri-check-line"></i>
                                            <h6>تعديل وتطوير </h6>
                                            <p> سهولة التعديل والاضافة على البرمجيات ودمج ال unit test الذى يساعد على
                                                اكتشاف الاخطاء بشكل تلقائي </p>
                                        </li>
                                        <li><i class="ri-check-line"></i>
                                            <h6>التوافق الكامل </h6>
                                            <p> التوافق مع جميع المتصفحات والاجهزة والتوافق مع محركات البحث . </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- tab -->
                        <div class="tab-pane fade" id="portfolio" role="tabpanel" aria-labelledby="portfolio-tab">


                        </div>
                    </div>
                    <div class="services-details-information  d-md-none">
                        <div class="services-contact-info">
                            <h3 class="mb-5"> ابدأ موقعك الان ونفذ فكرتك معنا </h3>
                            <a href="{{url("contact")}}" class="default-btn wow fadeInDown" data-wow-delay="200ms"
                                data-wow-duration="1000ms"> اطلب الخدمة <i class="fas fa-headset"></i> <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
