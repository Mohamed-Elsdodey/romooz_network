<div class="clients-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2> {{trans("frontend.Our customers' opinions")}} </h2>
            <p> {{trans('frontend.Please see what they say about us')}} </p>
        </div>
        <div class="clients-slides owl-carousel owl-theme">
            @foreach($reviews as $review)
                <div class="clients-item">

                    <p>
                        {{$review->message}}
                    </p>
                    <div class="title-name">
                        <h3>  {{$review->user_name}} </h3>
                        <span> {{trans('frontend.Application')}} {{$review->work->title??''}} </span>
                    </div>
                    <div class="star-rating">
                        <?php
                        $counter = 0;
                        for($i = 0;$i < $review->evaluation;$i++)
                        {
                        ++$counter;
                        ?>
                        <i class="ri-star-fill"></i>
                        <?php
                        }
                        for ($i = $counter;$i <5;$i++){
                        ?>
                        <i class="ri-star-fill text-muted"></i>
                        <?php
                        }?>


                    </div>

                    <div class="shape-1">
                        <img src="{{asset('romoz_design')}}/assets/images/clients/shape-4.png">
                    </div>
                    <div class="shape-2">
                        <img src="{{asset('romoz_design')}}/assets/images/clients/shape-5.png">
                    </div>
                    <div class="shape-3">
                        <img src="{{asset('romoz_design')}}/assets/images/clients/shape-6.png">
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="clients-shape-1" data-speed="0.08" data-revert="true">
        <img src="{{asset('romoz_design')}}/assets/images/clients/shape-1.png">
    </div>
    <div class="clients-shape-2" data-speed="0.08" data-revert="true">
        <img src="{{asset('romoz_design')}}/assets/images/clients/shape-2.png">
    </div>
    <div class="clients-shape-3" data-speed="0.08" data-revert="true">
        <img src="{{asset('romoz_design')}}/assets/images/clients/shape-3.png">
    </div>
</div>
