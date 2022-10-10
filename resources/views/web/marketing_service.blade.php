@extends('web.layouts.layout')

@section('content')
    <!-- slogan -->
    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content">
                <h2> التسويق الالكترونى </h2>
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
                <div class="col-md-9 p-2 m-auto">
                    <div class="services-details-overview-content ">
                        <div class="overview-image mt-0 mb-5">
                            <img src="{{asset('romoz_design')}}/assets/images/services-details/marketing.jpg" alt="image">
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
                            <h6>التسويق الإلكتروني والحملات الإعلانية الناجحة هي تلك التي يتم فيها تحديد الجمهور
                                المستهدف بعناية ، ثم أفضل طريقة للوصول إليهم خلال الفترة الزمنية المحددة للحملة
                                التسويق الإلكتروني (بالإنجليزية: E-Sales): يُعرف أيضًا باسم التسويق الرقمي
                                (بالإنجليزية: Digital Sales) أو التسويق الشبكي (بالإنجليزية: GMT Marketing) أو
                                (التسويق عبر الإنترنت) ، ويشمل جميع الأساليب والممارسات المتعلقة بعالم التسويق
                                عبر شبكة (الإنترنت): الاتصال عبر الإنترنت ، وتحسين التجارة الإلكترونية</h6>
                        </div>
                        <div class="details">
                            <h3> ضمان وصول محتوي موقعك أو إعلان منتجك </h3>
                            <p>إلي نتائج البحث الأولى فى محركات البحث بالمناطق والدول التى تحددها والحصول علي
                                عدد زيارات أكبر بتكلفة أقل لكل زيارة فنرشح لك خدمة إدارة إعلانات جوجل أدورد
                                Google Adword: وجوجل أدوردز واحدة من أكبر وأقدم منصات الإعلانات التي تديرها شركة
                                جوجل. ودائما ماتحقق إعلانات أدوردز الهدف المطلوب منها بكفاءة، من حيث الوصول إلى
                                السوق المستهدف والعملاء المحتملين بسهولة. </p>
                            <ul class="overview-list">
                                <li><i class="ri-check-line"></i>
                                    <h6>استهداف كامل </h6>
                                    <p> ليس مجرد أي زائر، بل حدد نوع وبلد وجنس الزائر. </p>
                                </li>
                                <li><i class="ri-check-line"></i>
                                    <h6>الاحدث والافضل </h6>
                                    <p>استخدام افضل واحدث التقنيات البرمجية وتطبيق اقصى طرق الحماية . </p>
                                </li>
                                <li><i class="ri-check-line"></i>
                                    <h6>خطة اعلانية </h6>
                                    <p> وضع خطة للإعلان واختيار أفضل الكلمات المفتاحية لإعلانك </p>
                                </li>
                                <li><i class="ri-check-line"></i>
                                    <h6>إدارة ومتابعة </h6>
                                    <p> إدارة ذكية ومتابعة لإحصائيات الحملة دوريا. </p>
                                </li>
                                <li><i class="ri-check-line"></i>
                                    <h6> نتائج مذهلة </h6>
                                    <p>زيادة المبيعات وشهرة العلامة التجارية. </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="services-details-information ">
                        <div class="services-contact-info">
                            <h3 class="mb-5"> ابدأ موقعك الان ونفذ فكرتك معنا </h3>
                            <a href="{{url('contact')}}" class="default-btn wow fadeInDown" data-wow-delay="200ms"
                                data-wow-duration="1000ms"> اطلب الخدمة <i class="fas fa-headset"></i> <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
@endsection
