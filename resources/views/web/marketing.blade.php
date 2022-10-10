@extends('web.layouts.layout')

@section('content')
<!-- slogan -->
<div class="overview-area py-5">
    <div class="container">
        <div class="overview-box">
            <div class="overview-content">
                <h3> {{trans('frontend.You are my partner in everything')}} </h3>
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
<div class="technology-area ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="technology-content">
                    <h3> {{trans('frontend.About romoz')}} </h3>
                    <p>{{trans('frontend.About romoz romoz is one of the companies working in the field of software, and
  You can implement your website or mobile applications')}} </p>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="technology-image">
                    <img src="{{asset('romoz_design')}}/assets/images/technology/technology-1.jpg">
                    <a href="https://www.youtube.com/watch?v=ODfy2YIKS1M" class="video-btn popup-youtube">
                        <i class="ri-play-line"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="technology-shape-1" data-speed="0.02" data-revert="true">
        <img src="{{asset('romoz_design')}}/assets/images/technology/shape-1.png">
    </div>
    <div class="technology-shape-2" data-speed="0.03" data-revert="true">
        <img src="{{asset('romoz_design')}}/assets/images/technology/shape-2.png">
    </div>
    <div class="technology-shape-3" data-speed="0.04" data-revert="true">
        <img src="{{asset('romoz_design')}}/assets/images/technology/shape-1.png">
    </div>
    <div class="technology-shape-4" data-speed="0.05" data-revert="true">
        <img src="{{asset('romoz_design')}}/assets/images/technology/shape-2.png">
    </div>
    <div class="technology-shape-5" data-speed="0.06" data-revert="true">
        <img src="{{asset('romoz_design')}}/assets/images/technology/shape-3.png">
    </div>
    <div class="technology-shape-6" data-speed="0.07" data-revert="true">
        <img src="{{asset('romoz_design')}}/assets/images/technology/shape-4.png">
    </div>
    <div class="technology-shape-7" data-speed="0.08" data-revert="true">
        <img src="{{asset('romoz_design')}}/assets/images/technology/shape-3.png">
    </div>
    <div class="technology-shape-8" data-speed="0.09" data-revert="true">
        <img src="{{asset('romoz_design')}}/assets/images/technology/shape-4.png">
    </div>
</div>
<section class="py-5">
    <div class="container p-md-5 ">
        <div class="section-title">
            <h2> {{trans('frontend.How to be a partner of romoz')}} </h2>
            <p>{{trans('frontend.How to be a partner for romoz romoz has introduced a new system called the "marketer partnership" system directed to everyone who works in the field of marketing and everyone who wants to increase his income during his spare time')}}</p>
        </div>
        <div class="Roles row align-items-center justify-content-center mx-md-5">
            <img src="{{asset('romoz_design')}}/assets/images/roales/1.jpg" class="col-md-6 p-2 ">
            <div class="col-md-6 p-2 " >
                <h4>{{trans('frontend.What is my role if I want to enter this system?')}}</h4>
                <p> <span>{{trans('frontend.The only role is to search for clients for romoz Company')}} </span>{{trans('frontend.Start searching for people in your surroundings or on the Internet and social media platforms who need websites or mobile applications.')}}</p>
            </div>
        </div>
        <div class="Roles row align-items-center justify-content-center mx-md-5">
            <img src="{{asset('romoz_design')}}/assets/images/roales/2.jpg" class="col-md-6 p-2 order-md-last ">
            <div class="col-md-6 p-2 order-md-first" >
                <h4>{{trans('frontend.What are the details of this partnership and do you need to pay?')}} </h4>
                <p> <span>{{trans('frontend.Our motto is with the marketer, you are our partner in everything')}}</span>{{trans('frontend.As soon as you bring the customer and start the contract with him, he is lost')}}
                   {{trans('frontend.Become a partner in this project with 15% of the value of any financial proceeds obtained by the company from this project. For example, if the client paid 20,000, the value of your dues is 3,000 without any effort from you.')}}</p>
            </div>
        </div>
        <div class="Roles row align-items-center justify-content-center mx-md-5">
            <img src="{{asset('romoz_design')}}/assets/images/roales/3.jpg" class="col-md-6 p-2 ">
            <div class="col-md-6 p-2 " >
                <h4>{{trans('frontend.Is that all there is to it?')}} </h4>
                <p><span>{{trans('frontend.Partnership ratio doubled')}} </span>{{trans('frontend.In the event that you bring another client who wants the same project, your partnership percentage has increased to 30%, meaning if the service costs 20,000, the value of your financial dues will become 6000 while you are at home.')}}</p>
            </div>
        </div>
        <div class="Roles row align-items-center justify-content-center mx-md-5">
            <img src="{{asset('romoz_design')}}/assets/images/roales/4.jpg" class="col-md-6 p-2 order-md-last ">
            <div class="col-md-6 p-2 order-md-first" >
                <h4>{{trans('frontend.Does anyone working as a programmer have a role in this partnership?')}} </h4>
                <p> <span>{{trans('frontend.Programmer Partnership System')}}</span> {{trans('frontend.If you are a programmer, you are also welcome ... If you can get a project and submit it to romoz, you are also our partner in this project by 10% in addition to the value of the role you will implement in the project. But we have one condition in this matter, which is that it be of good quality. The customer comes first')}} </p>
            </div>
        </div>
        <div class="Roles row align-items-center justify-content-center mx-md-5">
            <img src="{{asset('romoz_design')}}/assets/images/roales/5.jpg" class="col-md-6 p-2 ">
            <div class="col-md-6 p-2 " >
                <h4>{{trans('frontend.How do I guarantee my right?')}} </h4>
                <p> <span>{{trans('frontend.Marketer contract + follow up on everything that happens within the group on WhatsApp')}}</span>
                    {{trans("frontend.To guarantee the right of the marketer, romoz Company makes a contract called the project partnership contract to ensure that you get your partnership percentage of the project's financial dues. And we add the marketer in the technical group to follow what happens during the construction of the project. We are also adding it to the project's financial accounting group. To follow up his dues and the percentage of his partnership in
The project itself")}} </p>
            </div>
        </div>
        <div class="Roles row align-items-center justify-content-center mx-md-5">
            <img src="{{asset('romoz_design')}}/assets/images/roales/6.jpg" class="col-md-6 p-2 order-md-last ">
            <div class="col-md-6 p-2 order-md-first" >
                <h4>{{trans('frontend.What if the company made a mistake, which led to the anger of the customer?')}}</h4>
                <p> <span>{{trans("frontend.We bear our mistakes")}} </span> {{trans("frontend.If the company made a mistake, which led to the customer's anger and the failure to complete the project, the marketer should not bear the error, so we bear this mistake and compensate in an appropriate manner.")}}</p>
            </div>
        </div>
    </div>
</section>
@endsection
