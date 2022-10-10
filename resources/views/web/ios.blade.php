@extends('web.layouts.layout')

@section('content')
    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content">
                <h2> برمجة وتصميم تطبيقات ايفون </h2>
                <ul>
                    <li>
                        <a href="{{url("/")}}">الرئيسية</a>
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
                            <a href="contact.html" class="default-btn wow fadeInDown" data-wow-delay="200ms"
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
                                    <img src="{{asset('romoz_design')}}/assets/images/services-details/ios.jpg" alt="image">
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
                                    <h3> أحدث تكنولوجيا التصميم </h3>
                                    <p> التصميم هو عملنا الأساسي وتطويره هو جزء من سياستنا نحو أحدث التكنولوجيات
                                        المتطورة في مجالات تصميم وبرمجة وتطوير تطبيقات الجوال الذكي والأجهزة اللوحية
                                    </p>
                                </div>
                                <div class="details">
                                    <h3> التطوير </h3>
                                    <p> يتطور تصميم تطبيقات الجوال باستمرار ، حتى العملاء يفضلون التسوق والتفاعل مع
                                        علامتهم التجارية المفضلة
                                        من خلال الموبايل والتطبيقات سهلة الاستخدام وفق التقنية المستخدمة في تصميم وتطوير
                                        تطبيقات الجوال
                                        والمنصة المتوفرة عليها سواء كانت جوجل بلاي أو آبل ستور </p>
                                    <ul class="overview-list">
                                        <li><i class="ri-check-line"></i>
                                            <h6> أفضل الأسعار التنافسية </h6>
                                            <p> من خلال باقتنا المتنوعة والمناسبة لجميع فئات الشركات الصغيرة والمتوسطة
                                                والمؤسسات يمكنك اختيار الأفضل حسب ميزانية عملك لضمان أفضل خدمة وأفضل سعر
                                                في آن واحد </p>
                                        </li>
                                        <li><i class="ri-check-line"></i>
                                            <h6> التطوير المستمر للتطبيق </h6>
                                            <p> سيقوم فريق تطوير برمجيات الجوال على التطوير المستمر للتطبيق فور نزول
                                                التحديثات الجديدة لبقاء التطبيق في المقدمة </p>
                                        </li>
                                        <li><i class="ri-check-line"></i>
                                            <h6>تطبيقات NATIVE </h6>
                                            <p> تعتبر برمجة تطبيقات الجوال بنظام النيتف native هي الأفضل على الإطلاق
                                                بمميزاتها المتعددة حيث أن التطبيقات تعمل بسلاسة أكثر وخاصة الرسوم
                                                والتصميمات المتحركة ، </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- tab -->
                        <div class="tab-pane fade" id="portfolio" role="tabpanel" aria-labelledby="portfolio-tab">
                            <!-- projects -->
                            <div class="cases-area">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-cases">
                                            <div class="cases-image">
                                                <a href="portfolio-details.html">
                                                    <img src="{{asset('romoz_design')}}/assets/images/cases-study/1.jpg">
                                                </a>
                                            </div>
                                            <div class="cases-content">
                                                <div class="tag-1"> اندرويد </div>
                                                <div class="tag-2"> ايفون </div>
                                                <h3>
                                                    <a href="portfolio-details.html"> Equipment Experts | خبراء المعدات
                                                    </a>
                                                </h3>
                                                <p>حققت شركة “ رموز ” لبرمجة وتصميم التطبيقات نجاحا مبهرا في السعودية،
                                                    حيث أن
                                                    تطبيق ذوق يضم
                                                    ثلاثة مستخدمين (تطبيقات)، هما (العميل-الأسرة المنتجة-المندوب) فكرة
                                                    هذا
                                                    التطبيق مختلفة
                                                    وجديدة، حيث أنه يضم 1000 أسرة منتجة تطهي الطعام في المنزل ويتم بيع
                                                    الطعام من
                                                    خلال
                                                    التطبيق.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-cases">
                                            <div class="cases-image">
                                                <a href="portfolio-details.html">
                                                    <img src="{{asset('romoz_design')}}/assets/images/cases-study/2.jpg">
                                                </a>
                                            </div>
                                            <div class="cases-content">
                                                <div class="tag-1"> اندرويد </div>
                                                <div class="tag-2"> ايفون </div>
                                                <h3>
                                                    <a href="portfolio-details.html"> ماوان </a>
                                                </h3>
                                                <p>حققت شركة “ رموز ” لبرمجة وتصميم التطبيقات نجاحا مبهرا في السعودية،
                                                    حيث أن
                                                    تطبيق ذوق يضم
                                                    ثلاثة مستخدمين (تطبيقات)، هما (العميل-الأسرة المنتجة-المندوب) فكرة
                                                    هذا
                                                    التطبيق مختلفة
                                                    وجديدة، حيث أنه يضم 1000 أسرة منتجة تطهي الطعام في المنزل ويتم بيع
                                                    الطعام من
                                                    خلال
                                                    التطبيق.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-cases">
                                            <div class="cases-image">
                                                <a href="portfolio-details.html">
                                                    <img src="{{asset('romoz_design')}}/assets/images/cases-study/3.jpg">
                                                </a>
                                            </div>
                                            <div class="cases-content">
                                                <div class="tag-1"> اندرويد </div>
                                                <div class="tag-2"> ايفون </div>
                                                <h3>
                                                    <a href="portfolio-details.html"> DR CARE </a>
                                                </h3>
                                                <p>حققت شركة “ رموز ” لبرمجة وتصميم التطبيقات نجاحا مبهرا في السعودية،
                                                    حيث أن
                                                    تطبيق ذوق يضم
                                                    ثلاثة مستخدمين (تطبيقات)، هما (العميل-الأسرة المنتجة-المندوب) فكرة
                                                    هذا
                                                    التطبيق مختلفة
                                                    وجديدة، حيث أنه يضم 1000 أسرة منتجة تطهي الطعام في المنزل ويتم بيع
                                                    الطعام من
                                                    خلال
                                                    التطبيق.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-cases">
                                            <div class="cases-image">
                                                <a href="portfolio-details.html">
                                                    <img src="{{asset('romoz_design')}}/assets/images/cases-study/4.jpg">
                                                </a>
                                            </div>
                                            <div class="cases-content">
                                                <div class="tag-1"> اندرويد </div>
                                                <div class="tag-2"> ايفون </div>
                                                <h3>
                                                    <a href="portfolio-details.html"> Daystar Market </a>
                                                </h3>
                                                <p>حققت شركة “ رموز ” لبرمجة وتصميم التطبيقات نجاحا مبهرا في السعودية،
                                                    حيث أن
                                                    تطبيق ذوق يضم
                                                    ثلاثة مستخدمين (تطبيقات)، هما (العميل-الأسرة المنتجة-المندوب) فكرة
                                                    هذا
                                                    التطبيق مختلفة
                                                    وجديدة، حيث أنه يضم 1000 أسرة منتجة تطهي الطعام في المنزل ويتم بيع
                                                    الطعام من
                                                    خلال
                                                    التطبيق.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-cases">
                                            <div class="cases-image">
                                                <a href="portfolio-details.html">
                                                    <img src="{{asset('romoz_design')}}/assets/images/cases-study/5.jpg">
                                                </a>
                                            </div>
                                            <div class="cases-content">
                                                <div class="tag-1"> اندرويد </div>
                                                <div class="tag-2"> ايفون </div>
                                                <h3>
                                                    <a href="portfolio-details.html"> أبوسريع </a>
                                                </h3>
                                                <p>حققت شركة “ رموز ” لبرمجة وتصميم التطبيقات نجاحا مبهرا في السعودية،
                                                    حيث أن
                                                    تطبيق ذوق يضم
                                                    ثلاثة مستخدمين (تطبيقات)، هما (العميل-الأسرة المنتجة-المندوب) فكرة
                                                    هذا
                                                    التطبيق مختلفة
                                                    وجديدة، حيث أنه يضم 1000 أسرة منتجة تطهي الطعام في المنزل ويتم بيع
                                                    الطعام من
                                                    خلال
                                                    التطبيق.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-cases">
                                            <div class="cases-image">
                                                <a href="portfolio-details.html">
                                                    <img src="{{asset('romoz_design')}}/assets/images/cases-study/6.jpg">
                                                </a>
                                            </div>
                                            <div class="cases-content">
                                                <div class="tag-1"> اندرويد </div>
                                                <div class="tag-2"> ايفون </div>
                                                <h3>
                                                    <a href="portfolio-details.html"> Reservation </a>
                                                </h3>
                                                <p>حققت شركة “ رموز ” لبرمجة وتصميم التطبيقات نجاحا مبهرا في السعودية،
                                                    حيث أن
                                                    تطبيق ذوق يضم
                                                    ثلاثة مستخدمين (تطبيقات)، هما (العميل-الأسرة المنتجة-المندوب) فكرة
                                                    هذا
                                                    التطبيق مختلفة
                                                    وجديدة، حيث أنه يضم 1000 أسرة منتجة تطهي الطعام في المنزل ويتم بيع
                                                    الطعام من
                                                    خلال
                                                    التطبيق.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="pagination-area">
                                            <a href="#" class="prev page-numbers"><i
                                                    class="ri-arrow-right-line"></i></a>
                                            <span class="page-numbers current" aria-current="page">1</span>
                                            <a href="#" class="page-numbers">2</a>
                                            <a href="#" class="page-numbers">3</a>
                                            <a href="#" class="page-numbers">4</a>
                                            <a href="#" class="next page-numbers"><i class="ri-arrow-left-line"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="cases-shape-1" data-speed="0.04" data-revert="true">
                                    <img src="{{asset('romoz_design')}}/assets/images/cases-study/shape-1.png">
                                </div>
                                <div class="cases-shape-2" data-speed="0.04" data-revert="true">
                                    <img src="{{asset('romoz_design')}}/assets/images/cases-study/shape-2.png">
                                </div>
                                <div class="cases-shape-3" data-speed="0.04" data-revert="true">
                                    <img src="{{asset('romoz_design')}}/assets/images/cases-study/shape-3.png">
                                </div>
                                <div class="cases-shape-4" data-speed="0.04" data-revert="true">
                                    <img src="{{asset('romoz_design')}}/assets/images/cases-study/shape-4.png">
                                </div>
                                <div class="cases-shape-5" data-speed="0.04" data-revert="true">
                                    <img src="{{asset('romoz_design')}}/assets/images/cases-study/shape-5.png">
                                </div>
                                <div class="cases-shape-6" data-speed="0.04" data-revert="true">
                                    <img src="{{asset('romoz_design')}}/assets/images/cases-study/shape-4.png">
                                </div>
                                <div class="cases-shape-7" data-speed="0.04" data-revert="true">
                                    <img src="{{asset('romoz_design')}}/assets/images/cases-study/shape-5.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services-details-information  d-md-none">
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
