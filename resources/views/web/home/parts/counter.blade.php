<div class="fun-facts-area ptb-100">
    @if (count($statistics) == 4)
        <div class="container">

            <div class="fun-facts-box">
                <div class="row">
                    @foreach($statistics as $statistic)
                        <div class="col-lg-3 col-6 p-1">
                            <div class="single-fun-fact">
                                <div class="icon">
                                    <i class=" fa {{$statistic->icon}}"></i>
                                </div>
                                <h3>
                                    <span class="odometer" data-count="{{$statistic->number}}">00</span>
                                    <span class="sign-icon">+</span>
                                </h3>
                                <p>
                                    {{$statistic->title}}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    @else
        <div class="container">
            <div class="fun-facts-box">
                <div class="row">
                    <div class="col-lg-3 col-6 p-1">
                        <div class="single-fun-fact">
                            <div class="icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <h3>
                                <span class="odometer" data-count="209">00</span>
                                <span class="sign-icon">+</span>
                            </h3>
                            <p>عميل</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 p-1">
                        <div class="single-fun-fact">
                            <div class="icon">
                                <i class="fas fa-browser"></i>
                            </div>
                            <h3>
                                <span class="odometer" data-count="174">00</span>
                                <span class="sign-icon">+</span>
                            </h3>
                            <p>موقع ويب</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 p-1">
                        <div class="single-fun-fact">
                            <div class="icon">
                                <i class="fab fa-android"></i>
                            </div>
                            <h3>
                                <span class="odometer" data-count="63">00</span>
                                <span class="sign-icon">+</span>
                            </h3>
                            <p>تطبيق اندرويد</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 p-1">
                        <div class="single-fun-fact">
                            <div class="icon">
                                <i class="fab fa-apple"></i>
                            </div>
                            <h3>
                                <span class="odometer" data-count="32">00</span>
                                <span class="sign-icon">+</span>
                            </h3>
                            <p>تطبيق ايفون</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="fun-facts-shape-1" data-speed="0.09" data-revert="true">
        <img src="{{asset('romoz_design')}}/assets/images/fun-facts/shape-1.png" alt="image">
    </div>
    <div class="fun-facts-shape-2" data-speed="0.05" data-revert="true">
        <img src="{{asset('romoz_design')}}/assets/images/fun-facts/shape-2.png" alt="image">
    </div>
    <div class="fun-facts-shape-3" data-speed="0.09" data-revert="true">
        <img src="{{asset('romoz_design')}}/assets/images/fun-facts/shape-3.png" alt="image">
    </div>
    <div class="fun-facts-shape-4" data-speed="0.05" data-revert="true">
        <img src="{{asset('romoz_design')}}/assets/images/fun-facts/shape-4.png" alt="image">
    </div>
</div>
