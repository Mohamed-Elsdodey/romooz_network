@extends('web.layouts.layout')

@section('content')
    <!-- slogan -->
    <div class="overview-area py-5">
        <div class="container">
            <div class="overview-box">
                <div class="overview-content">
                    <h3> جودتنا اساس نجاحنا </h3>
                </div>
            </div>
        </div>
        <div class="overview-shape-1" data-speed="0.08" data-revert="true">
            <img src="{{asset('romoz_design')}}/assets/images/overview/shape-1.png">
        </div>
        <div class="overview-shape-2" data-speed="0.08" data-revert="true">
            <img src="{{asset('romoz_design')}}/assets/images/overview/shape-2.png">
        </div>
        <div class="overview-shape-3" data-speed="0.08" data-revert="true">
            <img src="{{asset('romoz_design')}}/assets/images/overview/shape-3.png">
        </div>
        <div class="overview-shape-4" data-speed="0.08" data-revert="true">
            <img src="{{asset('romoz_design')}}/assets/images/overview/shape-4.png">
        </div>
        <div class="overview-shape-5" data-speed="0.08" data-revert="true">
            <img src="{{asset('romoz_design')}}/assets/images/overview/shape-5.png">
        </div>
    </div>





    <!-- projects -->
    <div class="cases-area">
        <div class="container">
            <div class="section-title">
                <p>لقد شهدت شركة رموز لبرمجة تطبيقات الجوال وتقنية المعلومات عدة نجاحات من خلال سابقة الأعمال الفريدة من
                    نوعها، سوف نتناول بالتفصيل كل تطبيق على حدا لكي نبرز لكم نجاحات شركتنا.</p>
            </div>

            <div class="filterHeader">
                <button class=" filter active " id="all"> الكل </button>
                <button class=" filter " id="web"> موقع الكتروني </button>
                <button class=" filter " id="android">اندرويد </button>
                <button class=" filter " id="ios">ايفون</button>
            </div>

            <div class="row" id="filterItems">

                <div class="col-lg-4 col-md-6 p-1 android">
                    <div class="single-cases ">
                        <div class="cases-image">
                            <a  target="_blank"  href="https://play.google.com/store/apps/details?id=com.equipmentexperts">
                                <img src="{{asset('romoz_design')}}/assets/images/cases-study/1.jpg">
                            </a>
                        </div>
                        <div class="cases-content">
                            <a href="https://play.google.com/store/apps/details?id=com.equipmentexperts" target="_blank"
                                class="tag-1"> اندرويد </a>
                            <h3>
                                <a target="_blank"  href="https://play.google.com/store/apps/details?id=com.equipmentexperts"> Equipment Experts | خبراء المعدات </a>
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
                <div class="col-lg-4 col-md-6 p-1 android ios web">
                    <div class="single-cases ">
                        <div class="cases-image">
                            <a target="_blank" href="https://mawansa.com">
                                <img src="{{asset('romoz_design')}}/assets/images/cases-study/2.jpg">
                            </a>
                        </div>
                        <div class="cases-content">
                            <a href="https://play.google.com/store/apps/details?id=com.mawan" target="_blank"
                                class="tag-1"> اندرويد </a>
                            <a href="https://mawansa.com/" target="_blank" class="tag-2"> موقع الكتروني </a>
                            <h3>
                                <a target="_blank" href="https://mawansa.com"> ماوان </a>
                            </h3>
                            <p>Download the app and enjoy all your kitchen needs from fresh vegetables, fresh fruits and
                                food commodities
                                <br>
                                حمل التطبيق واستمتع بجميع احتياجات مطبخك من الخضار الطازجة والفواكه الطازجة والسلع
                                الغذائية</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-1 android ios web">
                    <div class="single-cases ">
                        <div class="cases-image">
                            <a href="https://play.google.com/store/apps/details?id=com.day.star.apps.homecare">
                                <img src="{{asset('romoz_design')}}/assets/images/cases-study/3.jpg">
                            </a>
                        </div>
                        <div class="cases-content">
                            <a href="http://www.daystar-mea.com"
                                target="_blank" class="tag-1"> اندرويد </a>
                            <a href="http://www.daystar-mea.com"
                                target="_blank" class="tag-1"> موقع الكتروني </a>
                            <h3>
                                <a href="http://www.daystar-mea.com"> DR CARE </a>
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
                <div class="col-lg-4 col-md-6 p-1 android ios web">
                    <div class="single-cases ">
                        <div class="cases-image">
                            <a href="http://www.daystar-mea.com/market">
                                <img src="{{asset('romoz_design')}}/assets/images/cases-study/4.jpg">
                            </a>
                        </div>
                        <div class="cases-content">
                            <a href="https://play.google.com/store/apps/details?id=com.daystar.market" target="_blank"
                                class="tag-1"> اندرويد </a>
                            <a href="http://www.daystar-mea.com/market" target="_blank"
                                class="tag-1">  موقع الكتروني </a>
                            <h3>
                                <a href="http://www.daystar-mea.com/market"> Daystar Market </a>
                            </h3>
                            <p>
                                Online Medical,Pharma,Surgical,Research Equipments & Consumables at lowest price
                                <br>
                                على الإنترنت الطبية والأدوية والجراحية ومعدات البحث والمواد الاستهلاكية بأقل سعر
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 p-1 android">
                    <div class="single-cases ">
                        <div class="cases-image">
                            <a href="https://play.google.com/store/apps/details?id=com.meadev.abosreea">
                                <img src="{{asset('romoz_design')}}/assets/images/cases-study/5.jpg">
                            </a>
                        </div>
                        <div class="cases-content">
                            <a href="https://play.google.com/store/apps/details?id=com.meadev.abosreea" target="_blank" class="tag-1"> اندرويد </a>
                            <h3>
                                <a href="https://play.google.com/store/apps/details?id=com.meadev.abosreea"> أبوسريع </a>
                            </h3>
                            <p>
                                Orders Delivery App Delivers Everything
                                <br>
                                تطبيق توصيل الطلبات يسلم كل شيء
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-1 android ios">
                    <div class="single-cases ">
                        <div class="cases-image">
                            <a href="https://play.google.com/store/apps/details?id=com.Reservation.restaurant">
                                <img src="{{asset('romoz_design')}}/assets/images/cases-study/6.jpg">
                            </a>
                        </div>
                        <div class="cases-content">
                            <a href="https://play.google.com/store/apps/details?id=com.Reservation.restaurant" target="_blank" class="tag-1"> اندرويد </a>
                            <h3>
                                <a href="https://play.google.com/store/apps/details?id=com.Reservation.restaurant"> Reservation </a>
                            </h3>
                            <p>حققت شركة “ رموز ” لبرمجة وتصميم التطبيقات نجاحا مبهرا في السعودية، حيث أن تطبيق ذوق يضم
                                ثلاثة مستخدمين (تطبيقات)، هما (العميل-الأسرة المنتجة-المندوب) فكرة هذا التطبيق مختلفة
                                وجديدة، حيث أنه يضم 1000 أسرة منتجة تطهي الطعام في المنزل ويتم بيع الطعام من خلال
                                التطبيق.</p>
                        </div>
                    </div>
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
@endsection
