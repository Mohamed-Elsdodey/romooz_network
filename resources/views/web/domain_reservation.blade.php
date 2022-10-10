@extends('web.layouts.layout')

@section('content')
    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content">
                <h2> حجز النطاقات </h2>
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
                <div class="col-md-9 p-2 m-auto">
                    <div class="services-details-overview-content ">
                        <div class="overview-image mt-0 mb-5">
                            <img src="{{asset('romoz_design')}}/assets/images/services-details/domain.jpg" alt="image">
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
                        <div class="marketingCaption">
                            <h6> تقدم خدمات رموز لحلول الويب عرض استضافة المواقع

                                تمتاز استضافتنا بأمان واستقرار غير مسبوقين معدة خصيصًا لراحة بالك وقد تصل إلى 99٪ من
                                الاتصال

                                ولدينا العديد من خطط الاستضافة التي تناسب العديد من المواقع والأعمال الخاصة بأسعار
                                مناسبة تناسب جميع الطلبات. </h6>
                        </div>
                        <div class="details">
                            <h3> خطوتك الأولى في بدء مشروعك علي الإنترنت </h3>
                            <p> تتميز الإستضافة لدينا بأمان وإستقرار غير مسبوق معد خصيصا لراحة بالك قد تصل إلى 99% على
                                اتصال و لدينا العديد من خطط الإستضافة التي تناسب العديد والمواقع والعمل الخاص بأسعار
                                معقولة تناسب كافة الطلبات </p>
                            <ul class="overview-list">
                                <li><i class="fad fa-check-double"></i>
                                    <h6>متابعة مستمرة                                    </h6>
                                    <p> متابعة مستمرة لأداء موقعك والإستضافه لضمان عدم التوقف فى أى وقت                                    </p>
                                </li>
                                <li><i class="fad fa-check-double"></i>
                                    <h6>الحماية والأمان                                    </h6>
                                    <p> تتمتع سيرفراتنا بنظام آمان عال المستوى يضمن عملها دون توقف مع وجود برامج حماية توقف أي محاولة للاختراق أو الهجمات                                    </p>
                                </li>
                                <li><i class="fad fa-check-double"></i>
                                    <h6> شهادات SSL                                    </h6>
                                    <p> تركيب شهادات SSL مجاناً لكل المواقع التى نقوم باستضافتها                                    </p>
                                </li>
                                <li><i class="fad fa-check-double"></i>
                                    <h6>نسخ أحتياطي                                    </h6>
                                    <p> تقوم بعمل باك أب يومي واسبوعي وشهري اضافه لنسخة علي هارد ديسك خارجي حفاظا علي الموقع                                    </p>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="plans-area  pb-5">
                        <div class="container">


                            <div  class="wrapper-full">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-6 p-2">
                                        <div class="single-plans-table">
                                            <div class="plans-header">
                                                <h3>المواقع الصغيرة </h3>
                                            </div>
                                            <div class="price">$49 <span>/ شهريا </span></div>
                                            <div class="plans-btn">
                                                <a href="#" class="default-btn"> اطلب الآن <i
                                                        class="ri-arrow-left-line"></i><span></span></a>
                                            </div>
                                            <ul class="plans-features-list">
                                                <li><i class="fad fa-check-double"></i> مساحة الإستضافة 1 جيجا                                                 </li>
                                                <li><i class="fad fa-check-double"></i> سعة الباندويث / 10جيجابايت شهرياً                                                </li>
                                                <li><i class="fad fa-check-double"></i> لوحة التحكم / سي بنل عربية و إنكليزية                                                </li>
                                                <li><i class="fad fa-check-double"></i> 3 عدد قواعد البيانات                                                </li>
                                                <li><i class="fad fa-check-double"></i> 3 عدد بريد إلكتروني                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 p-2">
                                        <div class="single-plans-table active-box">
                                            <div class="plans-header">
                                                <h3>مواقع الشركات                                                </h3>
                                            </div>
                                            <div class="price">$69 <span>/ شهريا </span></div>
                                            <div class="plans-btn">
                                                <a href="#" class="default-btn"> اطلب الآن <i
                                                        class="ri-arrow-left-line"></i><span></span></a>
                                            </div>
                                            <ul class="plans-features-list">
                                                <li><i class="fad fa-check-double"></i> مساحة الأستضافة 2 جيجا                                                </li>
                                                <li><i class="fad fa-check-double"></i> سعة الباندويث / 20 جيجابايت شهرياً                                                </li>
                                                <li><i class="fad fa-check-double"></i> لوحة التحكم / سي بنل عربية و انكليزية                                                </li>
                                                <li><i class="fad fa-check-double"></i> 5 عدد قواعد البيانات                                                </li>
                                                <li><i class="fad fa-check-double"></i> 5 بريد إلكتروني                                                </li>
                                            </ul>
                                            <div class="popular-tag">
                                                <span>الاكثر طلباً                                                 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 p-2">
                                        <div class="single-plans-table">
                                            <div class="plans-header">
                                                <h3>المواقع الكبيرة                                                </h3>
                                            </div>
                                            <div class="price">$79 <span>/ شهريا </span></div>
                                            <div class="plans-btn">
                                                <a href="#" class="default-btn"> اطلب الآن <i
                                                        class="ri-arrow-left-line"></i><span></span></a>
                                            </div>
                                            <ul class="plans-features-list">
                                                <li><i class="fad fa-check-double"></i> مساحة الاستضافة 5 جيجا                                                </li>
                                                <li><i class="fad fa-check-double"></i> سعة الباندويث / 50 جيجابايت شهرياً                                                </li>
                                                <li><i class="fad fa-check-double"></i> لوحة التحكم / سي بنل عربية و انكليزية                                                </li>
                                                <li><i class="fad fa-check-double"></i> عدد قواعد البيانات / عدد لانهائي                                                 </li>
                                                <li><i class="fad fa-check-double"></i> بريد إلكتروني / عدد لا نهائي                                                 </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="plans-shape-1" data-speed="0.08" data-revert="true">
                            <img src="{{asset('romoz_design')}}/assets/images/plans/shape-1.png" alt="image">
                        </div>
                        <div class="plans-shape-2" data-speed="0.08" data-revert="true">
                            <img src="{{asset('romoz_design')}}/assets/images/plans/shape-2.png" alt="image">
                        </div>
                        <div class="plans-shape-3" data-speed="0.08" data-revert="true">
                            <img src="{{asset('romoz_design')}}/assets/images/plans/shape-3.png" alt="image">
                        </div>
                        <div class="plans-shape-4" data-speed="0.08" data-revert="true">
                            <img src="{{asset('romoz_design')}}/assets/images/plans/shape-4.png" alt="image">
                        </div>
                        <div class="plans-shape-5" data-speed="0.08" data-revert="true">
                            <img src="{{asset('romoz_design')}}/assets/images/plans/shape-5.png" alt="image">
                        </div>
                    </div>


                    <div class="services-details-information ">
                        <div class="services-contact-info">
                            <h3 class="mb-5"> ابدأ موقعك الان ونفذ فكرتك معنا </h3>
                            <a href="contact.html" class="default-btn wow fadeInDown" data-wow-delay="200ms"
                                data-wow-duration="1000ms"> اطلب الخدمة <i class="fas fa-headset"></i> <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
