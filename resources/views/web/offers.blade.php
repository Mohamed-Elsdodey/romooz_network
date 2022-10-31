@extends('web.layouts.layout')

@section('content')
    <!-- slogan -->
    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content">
                <h2>{{trans('frontend.offers')}}</h2>
                <ul>
                    <li>
                        <a href="{{url("/")}}">{{trans('frontend.home')}}</a>
                    </li>
                    <li>{{trans('frontend.offers')}}</li>
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
    <div class="membership-levels-area ptb-100">
        <div class="container">
            <div class="membership-levels-table table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                <span class="desc-1"> {{trans('frontend.Web site name')}}  </span>
                            </th>
                            <th>
                                <span class="desc-1"> {{trans('frontend.website price')}}  </span>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach(\App\Models\Offer::get() as $offer)
                            <td style="text-align: center">{{$offer->title}}</td>
                            <td>{{$offer->price}}</td>
                            @endforeach
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- footer -->
@endsection
