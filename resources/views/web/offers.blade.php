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
                            <th></th>
                            <th>
                                <span class="desc-1"> {{trans('frontend.rival')}} <span> 10 % </span> </span>
                                <span class="desc-2">{{trans('frontend.Silver Package')}} </span>
                            </th>
                            <th>
                                <span class="desc-1"> {{trans('frontend.rival')}} <span> 15 % </span> </span>
                                <span class="desc-2">{{trans('frontend.Golden Package')}} </span>
                            </th>
                            <th>
                                <span class="desc-1"> {{trans('frontend.rival')}} <span> 20 % </span> </span>
                                <span class="desc-2">{{trans('frontend.Diamond Package')}} </span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> {{trans('frontend.number of features')}} </td>
                            <td>4</td>
                            <td>7</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td><a href="#">{{trans('frontend.Project Analysis')}}</a></td>
                            <td class="item-check"><i class='ri-check-line'></i></td>
                            <td class="item-check"><i class='ri-check-line'></i></td>
                            <td class="item-check"><i class='ri-check-line'></i></td>
                        </tr>
                        <tr>
                            <td><a href="#"> {{trans('frontend.Website design')}} </a></td>
                            <td class="item-check"><i class='ri-check-line'></i></td>
                            <td class="item-check"><i class='ri-check-line'></i></td>
                            <td class="item-check"><i class='ri-check-line'></i></td>
                        </tr>
                        <tr>
                            <td><a href="#"> {{trans('frontend.Website development')}} </a></td>
                            <td class="item-check"><i class='ri-check-line'></i></td>
                            <td class="item-check"><i class='ri-check-line'></i></td>
                            <td class="item-check"><i class='ri-check-line'></i></td>
                        </tr>
                        <tr>
                            <td><a href="#">{{trans('frontend.Android app design')}}</a></td>
                            <td class="item-none"><i class='ri-close-line'></i></td>
                            <td class="item-check"><i class='ri-check-line'></i></td>
                            <td class="item-check"><i class='ri-check-line'></i></td>
                        </tr>
                        <tr>
                            <td><a href="#">{{trans('frontend.Android app development')}}</a></td>
                            <td class="item-none"><i class='ri-close-line'></i></td>
                            <td class="item-check"><i class='ri-check-line'></i></td>
                            <td class="item-check"><i class='ri-check-line'></i></td>
                        </tr>
                        <tr>
                            <td><a href="#">{{trans('frontend.iPhone app design')}}</a></td>
                            <td class="item-none"><i class='ri-close-line'></i></td>
                            <td class="item-none"><i class='ri-close-line'></i></td>
                            <td class="item-check"><i class='ri-check-line'></i></td>
                        </tr>
                        <tr>
                            <td><a href="#">{{trans('frontend.iPhone app development')}}</a></td>
                            <td class="item-none"><i class='ri-close-line'></i></td>
                            <td class="item-none"><i class='ri-close-line'></i></td>
                            <td class="item-check"><i class='ri-check-line'></i></td>
                        </tr>
                        <tr>
                            <td><a href="#"> SEO </a></td>
                            <td class="item-check"><i class='ri-check-line'></i></td>
                            <td class="item-check"><i class='ri-check-line'></i></td>
                            <td class="item-check"><i class='ri-check-line'></i></td>
                        </tr>
                        <tr>
                            <td><a href="#">{{trans('frontend.hosting service')}} </a></td>
                            <td class="item-none"><i class='ri-close-line'></i></td>
                            <td class="item-none"><i class='ri-close-line'></i></td>
                            <td class="item-check"><i class='ri-check-line'></i></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- footer -->
@endsection
