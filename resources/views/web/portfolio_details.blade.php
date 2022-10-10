@extends('web.layouts.layout')

@section('content')
    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content">
                <h2>تفاصيل المشروع</h2>
                <ul>
                    <li>
                        <a href="{{url("/")}}">الرئيسية</a>
                    </li>
                    <li>
                        <a href="{{url("portfolio")}}">اعمالنا</a>
                    </li>
                    <li>تفاصيل المشروع</li>
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
    <div class="case-details-area my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 m-auto">
                    <div class="case-details-image">
                        <img src="{{asset('romoz_design')}}/assets/images/cases-study/1.jpg" alt="image">
                    </div>
                    <div class="case-details-content">
                        <h3>Equipment Experts | خبراء المعدات</h3>
                        <p>حققت شركة “ رموز ” لبرمجة وتصميم التطبيقات نجاحا مبهرا في السعودية، حيث أن تطبيق ذوق يضم
                            ثلاثة مستخدمين (تطبيقات)، هما (العميل-الأسرة المنتجة-المندوب) فكرة هذا التطبيق مختلفة
                            وجديدة، حيث أنه يضم 1000 أسرة منتجة تطهي الطعام في المنزل ويتم بيع الطعام من خلال
                            التطبيق.</p>
                    </div>
                    <div class="case-details-content-two">
                        <h3> وصف المشروع </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus elit bibendum adipiscing
                            tincidunt mattis orci consequat egestas mattis. Convallis massa feugiat sapien urna egestas
                            elit vitae, ipsum. In pulvinar urna, viverra quam habitasse blandit eget. Quis semper
                            consectetur sed a purus id ac, auctor. Sem sed eleifend eu iaculis enim.</p>
                        <p>Urna tellus, duis nec consectetur tempor venenatis risus volutpat. Sit sem ornare eget auctor
                            amet vitae. Eu nulla facilisi posuere tellus massa dignissim. Ut amet viverra non amet enim
                            at venenatis viverra mauris. Malesuada Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Faucibus elit bibendum adipiscing tincidunt mattis orci consequat egestas mattis.
                            Convallis massa feugiat sapien urna egestas elit vitae, ipsum. In pulvinar urna, viverra
                            quam habitasse blandit eget. Quis semper consectetur sed a purus id ac, auctor. Sem sed
                            eleifend eu iaculis enim.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus elit bibendum adipiscing
                            tincidunt mattis orci consequat egestas mattis. Convallis massa feugiat sapien urna egestas
                            elit vitae, ipsum. In pulvinar urna,</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
