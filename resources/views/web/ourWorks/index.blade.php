@extends('web.layouts.layout')

@section('content')
    <!-- slogan -->
    <div class="overview-area py-5">
        <div class="container">
            <div class="overview-box">
                <div class="overview-content">
                    <h3> {{trans('frontend.Our quality is the basis of our success')}} </h3>
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
                <p>
                    {{trans('frontend.romoz Mobile Applications and Information Technology has witnessed several successes through a unique precedent, we will discuss in detail each application separately in order to highlight to you the successes of our company.')}}
                </p>
            </div>

            <div class="filterHeader">
                <button data-type="" class=" filterType filter active " id=""> {{trans('frontend.All')}} </button>
                @foreach(\App\Models\Type::get() as $type)
                <button data-type="{{$type->id}}" class=" filterType filter " id=""> {{$type->title}} </button>
                @endforeach
{{--                <button data-type="2" class=" filterType filter " id="">{{trans('frontend.Android')}} </button>--}}
{{--                <button data-type="3" class=" filterType filter " id="">{{trans('frontend.ios')}}</button>--}}
            </div>

            <div class="row" id="filterItems">

                @include('web.ourWorks.parts.workComponent')


            </div>

            {{--------------   load more  -----------------}}
            <div style="{{$last_page == $current_page ?"display:none !important;":""}}"
                 class="d-flex align-items-center justify-content-center py-5 register-submit" id="buttonOfFilter">
                <button id="load_more_button" data-type="" class="customBtn btn btn-success" type="button">
                    {{__('frontend.load more')}}
                </button>
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
@section('js')

    <script>
        var loader_html = `
  <div class="col-sm-6 col-md-6 col-lg-4 p-2 loader_html ">
                  <div class="wrapper">
                    <div class="wrapper-cell row">
                       <div class="col-12">
                        <div class="image"></div>
                       </div>
                        <div class="col-12">
                            <div class="text">
                                <div class="text-line"></div>
                                <div class="text-line price"></div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
 <div class="col-sm-6 col-md-6 col-lg-4 p-2 loader_html">
                  <div class="wrapper">
                    <div class="wrapper-cell row">
                       <div class="col-12">
                        <div class="image"></div>
                       </div>
                        <div class="col-12">
                            <div class="text">
                                <div class="text-line"></div>
                                <div class="text-line price"></div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

        <div class="col-sm-6 col-md-6 col-lg-4 p-2 loader_html">
                  <div class="wrapper">
                    <div class="wrapper-cell row">
                       <div class="col-12">
                        <div class="image"></div>
                       </div>
                        <div class="col-12">
                            <div class="text">
                                <div class="text-line"></div>
                                <div class="text-line price"></div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

            <div class="col-sm-6 col-md-6 col-lg-4 p-2 loader_html">
                  <div class="wrapper">
                    <div class="wrapper-cell row">
                       <div class="col-12">
                        <div class="image"></div>
                       </div>
                        <div class="col-12">
                            <div class="text">
                                <div class="text-line"></div>
                                <div class="text-line price"></div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-4 p-2 loader_html">
                  <div class="wrapper">
                    <div class="wrapper-cell row">
                       <div class="col-12">
                        <div class="image"></div>
                       </div>
                        <div class="col-12">
                            <div class="text">
                                <div class="text-line"></div>
                                <div class="text-line price"></div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-4 p-2 loader_html">
                  <div class="wrapper">
                    <div class="wrapper-cell row">
                       <div class="col-12">
                        <div class="image"></div>
                       </div>
                        <div class="col-12">
                            <div class="text">
                                <div class="text-line"></div>
                                <div class="text-line price"></div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>`;

        var new_page = 1;
        var type='';
        var url = '{{route('web.ourWorks')}}';
        var link_only = '{{route('web.ourWorks')}}';


        $(document).unbind("click").on('click', '#load_more_button', function (e) {
            e.preventDefault()
            ++new_page
            type=$(this).attr('data-type');
            // console.log("new page" , new_page)
            loadMoreData(new_page,type);

        })//end fun

        function loadMoreData(new_page,type) {

            url = link_only+"?page="+new_page+"&&type="+type;
            $.ajax({
                url: url,
                type: 'GET',
                beforeSend: function () {
                    $('#filterItems').append(loader_html);
                    $('#load_more_button').html(`<div class="spinner-border mt-1 mb-2" role="status"> </div>`);
                },
                complete: function () {

                },
                success: function (data) {
                    console.log(data.last_page , data.current_page)
                    if (data.last_page == data.current_page) {
                        document.getElementById("load_more_button").remove();
                    }

                    setTimeout(function () {
                        var elements = document.getElementsByClassName("loader_html");
                        while (elements.length > 0) elements[0].remove();
                        var elements = document.getElementsByClassName("loader_html");
                        while (elements.length > 0) elements[0].remove();
                        $('#filterItems').append(data.html);
                        $('#load_more_button').html("{{__('frontend.load more')}}")
                    }, 100);
                },
                error: function (data) {
                    alert('Something went wrong.');
                },//end error method

                cache: false,
                contentType: false,
                processData: false
            });

        }//end fun




    </script>

<script>
    $(document).on('click','.filterType',function (e){
        $('.filterType').removeClass("active");
        $(this).toggleClass("active");
        e.preventDefault();
        $('#filterItems').html('');
        var type=$(this).attr('data-type');

        $('#buttonOfFilter').html(`  <button data-type="${type}" id="load_more_button" class="customBtn btn btn-success" type="button">
                    {{__('frontend.load more')}}
        </button>`);
        new_page=1;
        url = link_only+"?page="+new_page+"&&type="+type;
        $.ajax({
            url: url,
            type: 'GET',
            beforeSend: function () {
                $('#filterItems').append(loader_html);
                $('#load_more_button').html(`<div class="spinner-border mt-1 mb-2" role="status"> </div>`);
            },
            complete: function () {

            },
            success: function (data) {
                console.log(data.last_page , data.current_page)
                if (data.last_page == data.current_page) {
                    document.getElementById("load_more_button").remove();
                }

                setTimeout(function () {
                    var elements = document.getElementsByClassName("loader_html");
                    while (elements.length > 0) elements[0].remove();
                    var elements = document.getElementsByClassName("loader_html");
                    while (elements.length > 0) elements[0].remove();
                    $('#filterItems').html(data.html);
                    $('#load_more_button').html("{{__('frontend.load more')}}")
                }, 100);
            },
            error: function (data) {
                alert('Something went wrong.');
            },//end error method

            cache: false,
            contentType: false,
            processData: false
        });


    })
</script>

@endsection




@section('styles')
    <style>
        .wrapper {
            margin: 30px;
            padding: 30px;
            background: #fff;
            width: 100%;
            height: 300px;
            display: flex;
            flex-direction: column;
            border-radius: 15px;
        }

        .wrapper-cell {
            /* display: flex; */
            margin-bottom: 30px;
        }

        @-webkit-keyframes placeHolderShimmer {
            0% {
                background-position: -468px 0;
            }

            100% {
                background-position: 468px 0;
            }
        }

        @keyframes placeHolderShimmer {
            0% {
                background-position: -468px 0;
            }

            100% {
                background-position: 468px 0;
            }
        }

        .animated-background,
        .text-line,
        .image {
            -webkit-animation-duration: 1.25s;
            animation-duration: 1.25s;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-name: placeHolderShimmer;
            animation-name: placeHolderShimmer;
            -webkit-animation-timing-function: linear;
            animation-timing-function: linear;
            background: #F6F6F6;
            background: linear-gradient(to right, #F6F6F6 8%, #F0F0F0 18%, #F6F6F6 33%);
            background-size: 800px 104px;
            height: 96px;
            position: relative;
        }

        .image {
            height: 200px;
            width: 100%;
        }

        .text {
            /* margin-left: 20px; */
        }

        .text-line {
            height: 10px;
            width: 100%;
            margin: 4px 0;
            margin-top: 10px;
        }

        .text-line.price {
            height: 40px;
            width: 100%;
            margin: auto;
            margin-top: 10px;
        }
    </style>
@endsection

