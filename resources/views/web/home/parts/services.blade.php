<div class="services-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2> {{trans('frontend.Our services')}} </h2>
            <p>{{trans('frontend.We provide you with software design and development for companies and individuals and provide all the services you will need to create your website or application from A to Z starting from designing and programming your site to marketing it electronically.')}}</p>
        </div>
        <div class="row justify-content-center">

            @if(count($services)>0)
                @foreach($services as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="icon bg-509aff">
                            <i class="fas {{$service->icon2}}"></i>
                        </div>
                        <h3>
                            <a href="{{route('web.showService',$service->id)}}">{{$service->title}}</a>
                        </h3>
                        <p>
                            {{$service->desc}}
                        </p>
                        <a href="{{route('web.showService',$service->id)}}" class="services-btn">{{trans('frontend.Read more')}}<i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
                @endforeach

            @else

            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="icon bg-509aff">
                        <i class="fas fa-browser"></i>
                    </div>
                    <h3>
                        <a href="{{url("web")}}">برمجة وتصميم المواقع الإلكترونية</a>
                    </h3>
                    <p>تعتبر شركتنا من الشركات الرائدة في مجال البرمجيات وخدمات تصميم المواقع للشركات والمؤسسات
                        والأفراد، حيث تقوم الشركة بتصميم مواقع فريده ذات طابع خاص وتصميمات جذابة مبهرة وخدمات متطورة
                    </p>
                    <a href="{{url("web")}}" class="services-btn">قراءة المزيد<i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="icon bg-36CC72">
                        <i class="fab fa-android"></i>
                    </div>
                    <h3>
                        <a href="{{ url('android') }}">برمجة وتصميم تطبيقات اندرويد</a>
                    </h3>
                    <p>تقدم شركة romoz للبرمجة والتطوير خدمة تصميم وبرمجة تطبيقات الهواتف الذكية بكفائة عالية وعلى
                        جميع الأنظمة المعروفة مثل اندرويد </p>
                    <a href="{{ url('android') }}" class="services-btn">قراءة المزيد<i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="icon bg-FF6D3D">
                        <i class="fab fa-apple"></i>
                    </div>
                    <h3>
                        <a href="{{ url('ios') }}">برمجة وتصميم تطبيقات ايفون</a>
                    </h3>
                    <p>تقدم شركة romoz للبرمجة والتطوير خدمة تصميم وبرمجة تطبيقات الهواتف الذكية بكفائة عالية وعلى
                        جميع الأنظمة المعروفة مثل IOS </p>
                    <a href="{{ url('ios') }}" class="services-btn">قراءة المزيد<i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="icon bg-FF414B">
                        <i class="fas fa-megaphone"></i>
                    </div>
                    <h3>
                        <a href="{{url("marketing-service")}}">التسويق الالكترونى</a>
                    </h3>
                    <p>تقدم توكان التسويق الالكتروني و كذلك ادارة حسابات التواصل الاجتماعي مثال ذلك الانستقرام ،
                        فيسبوك ، تويتر و ايضا يوتيوب .</p>
                    <a href="{{url("marketing-service")}}" class="services-btn">قراءة المزيد<i
                            class="ri-arrow-right-line"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="icon bg-8932F8">
                        <i class="ri-cloud-line"></i>
                    </div>
                    <h3>
                        <a href="{{url('domain-reservation')}}">حجز النطاقات</a>
                    </h3>
                    <p>إمكانية حجز النطاقات من حسابك في الموقع والإستفادة من العروض الشهرية التي نُقدمها في هذا
                        المجال. حيث إن بعد شرائك سيكون لديك تحكم كامل بنطاقك. </p>
                    <a href="{{url('domain-reservation')}}" class="services-btn">قراءة المزيد<i
                            class="ri-arrow-right-line"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-services">
                    <div class="icon bg-FFCA40">
                        <i class="ri-layout-row-line"></i>
                    </div>
                    <h3>
                        <a href="{{url("design")}}">خدمات التصميم</a>
                    </h3>
                    <p>لسنا شركة تصميم عادية من اعمالنا تضح الانجازات , لدينا عديد من المبدعين والموهبين في هذا
                        المجال </p>
                    <a href="{{url("design")}}" class="services-btn">قراءة المزيد<i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
            @endif
        </div>
    </div>
    <div class="services-shape-1" data-speed="0.02" data-revert="true">
        <img src="{{asset('romoz_design')}}/assets/images/services/shape-1.png">
    </div>
    <div class="services-shape-2" data-speed="0.02" data-revert="true">
        <img src="{{asset('romoz_design')}}/assets/images/services/shape-2.png">
    </div>
    <div class="services-shape-3" data-speed="0.02" data-revert="true">
        <img src="{{asset('romoz_design')}}/assets/images/services/shape-3.png">
    </div>
    <div class="services-shape-4" data-speed="0.02" data-revert="true">
        <img src="{{asset('romoz_design')}}/assets/images/services/shape-4.png">
    </div>
</div>


