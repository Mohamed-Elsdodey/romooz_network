
<div class="process-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2> {{trans('frontend.Implementation steps')}} </h2>
            <p> {{trans('frontend.We work in an organized manner according to scientific theories to ensure the best customer service')}} </p>
        </div>
        <div class="process-inner-box px-3">
            <div class="row">
                <div class="col-lg-3 col-6 p-1">
                    <div class="single-process">
                        <i class="ri-pie-chart-line"></i>
                        <p> {{$steps->analysis}} </p>
                    </div>
                </div>
                <div class="col-lg-3 col-6 p-1">
                    <div class="single-process bg-36CC72">
                        <i class="ri-quill-pen-line"></i>
                        <p>{{$steps->design}}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6 p-1">
                    <div class="single-process bg-FF414B">
                        <i class="ri-hard-drive-line"></i>
                        <p>{{$steps->development}}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6 p-1">
                    <div class="single-process bg-FF6D3D">
                        <i class="ri-focus-line"></i>
                        <p>{{$steps->test}} </p>
                    </div>
                </div>
            </div>
            <div class="process-bar-shape">
                <img src="{{asset('romoz_design')}}/assets/images/process-bar.png" alt="image">
            </div>
        </div>
    </div>
</div>
