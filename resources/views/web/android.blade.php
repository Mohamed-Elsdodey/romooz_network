@extends('web.layouts.layout')

@section('content')
    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content">
                <h2> برمجة وتصميم تطبيقات اندرويد </h2>
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
                                    <img src="{{asset('romoz_design')}}/assets/images/services-details/android.jpg" alt="image">
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

                                <div class="row" id="filterItems">

                                    <div class=" col-md-6 p-1 android">
                                        <div class="single-cases ">
                                            <div class="cases-image">
                                                <a href="portfolio-details.html">
                                                    <img src="{{asset('romoz_design')}}/assets/images/cases-study/1.jpg">
                                                </a>
                                            </div>
                                            <div class="cases-content">
                                                <a href="https://play.google.com/store/apps/details?id=com.equipmentexperts" target="_blank"
                                                    class="tag-1"> اندرويد </a>
                                                <h3>
                                                    <a href="portfolio-details.html"> Equipment Experts | خبراء المعدات </a>
                                                </h3>
                                                <p>Equipment experts the best advertisement app. You will be able to sell and display
                                                    anything you can imagine
                                                    <br>
                                                    خبراء المعدات الثقيلة هو أفضل موقع للإعلانات. حيث ستتمكّن من بيع وعرض أي شيئ ممكن أن
                                                    تتخيله، من موبايلك القديم والمقاعد التي مللت منها أو حتى سيارتك، أو الشقة التي تسكن فيها
                                                    . والأفضل من ذلك، قد تتمكن من العثور على الخدمات وقطع الغيار ومعدات الحج ! هل تود عرض
                                                    شيء ما؟ خبراء المعدات الثقيلة هو أسهل وأسرع مكان لوضع إعلانك</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-md-6 p-1 android">
                                        <div class="single-cases ">
                                            <div class="cases-image">
                                                <a href="portfolio-details.html">
                                                    <img src="{{asset('romoz_design')}}/assets/images/cases-study/2.jpg">
                                                </a>
                                            </div>
                                            <div class="cases-content">
                                                <a href="https://play.google.com/store/apps/details?id=com.mawan" target="_blank"
                                                    class="tag-1"> اندرويد </a>
                                                <!-- <a href="#!" target="_blank" class="tag-2"> ايفون </a> -->
                                                <h3>
                                                    <a href="portfolio-details.html"> ماوان </a>
                                                </h3>
                                                <p>Download the app and enjoy all your kitchen needs from fresh vegetables, fresh fruits and
                                                    food commodities
                                                    <br>
                                                    حمل التطبيق واستمتع بجميع احتياجات مطبخك من الخضار الطازجة والفواكه الطازجة والسلع
                                                    الغذائية</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-md-6 p-1 android">
                                        <div class="single-cases ">
                                            <div class="cases-image">
                                                <a href="portfolio-details.html">
                                                    <img src="{{asset('romoz_design')}}/assets/images/cases-study/3.jpg">
                                                </a>
                                            </div>
                                            <div class="cases-content">
                                                <a href="https://play.google.com/store/apps/details?id=com.day.star.apps.homecare"
                                                    target="_blank" class="tag-1"> اندرويد </a>
                                                <h3>
                                                    <a href="portfolio-details.html"> DR CARE </a>
                                                </h3>
                                                <p>
                                                    Nursing home application - patients - the elderly - children - people with special needs

                                                    Applying sick and home care services, caring for the elderly, children, and people with
                                                    special needs
                                                    <br>
                                                    تطبيق الرعاية المنزليه تمريض - مرضى - كبار السن - اطفال - ذوى الاحتياجات الخاصة

                                                    تطبيق خدمات رعايه مرضي ورعايه منزليه رعايه كبار السن والاطفال وزوي الاحتياجات الخاصه

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-md-6 p-1 android">
                                        <div class="single-cases ">
                                            <div class="cases-image">
                                                <a href="portfolio-details.html">
                                                    <img src="{{asset('romoz_design')}}/assets/images/cases-study/4.jpg">
                                                </a>
                                            </div>
                                            <div class="cases-content">
                                                <a href="https://play.google.com/store/apps/details?id=com.daystar.market" target="_blank"
                                                    class="tag-1"> اندرويد </a>
                                                <h3>
                                                    <a href="portfolio-details.html"> Daystar Market </a>
                                                </h3>
                                                <p>
                                                    Online Medical,Pharma,Surgical,Research Equipments & Consumables at lowest price
                                                    <br>
                                                    على الإنترنت الطبية والأدوية والجراحية ومعدات البحث والمواد الاستهلاكية بأقل سعر
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-md-6 p-1 android">
                                        <div class="single-cases ">
                                            <div class="cases-image">
                                                <a href="portfolio-details.html">
                                                    <img src="{{asset('romoz_design')}}/assets/images/cases-study/5.jpg">
                                                </a>
                                            </div>
                                            <div class="cases-content">
                                                <a href="https://play.google.com/store/apps/details?id=com.meadev.abosreea" target="_blank" class="tag-1"> اندرويد </a>
                                                <h3>
                                                    <a href="portfolio-details.html"> أبوسريع </a>
                                                </h3>
                                                <p>
                                                    Orders Delivery App Delivers Everything
                                                    <br>
                                                    تطبيق توصيل الطلبات يسلم كل شيء
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-md-6 p-1 android">
                                        <div class="single-cases ">
                                            <div class="cases-image">
                                                <a href="portfolio-details.html">
                                                    <img src="{{asset('romoz_design')}}/assets/images/cases-study/6.jpg">
                                                </a>
                                            </div>
                                            <div class="cases-content">
                                                <a href="#!" target="_blank" class="tag-1"> اندرويد </a>
                                                <h3>
                                                    <a href="portfolio-details.html"> Reservation </a>
                                                </h3>
                                                <p>حققت شركة “ رموز ” لبرمجة وتصميم التطبيقات نجاحا مبهرا في السعودية، حيث أن تطبيق ذوق يضم
                                                    ثلاثة مستخدمين (تطبيقات)، هما (العميل-الأسرة المنتجة-المندوب) فكرة هذا التطبيق مختلفة
                                                    وجديدة، حيث أنه يضم 1000 أسرة منتجة تطهي الطعام في المنزل ويتم بيع الطعام من خلال
                                                    التطبيق.</p>
                                            </div>
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
