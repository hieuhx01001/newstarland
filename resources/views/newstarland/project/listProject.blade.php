@extends('layouts.newstarland.index')

@section('title')
    Dự án phân phối
@stop

@section('page-css')
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/newstarland/css/index.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/newstarland/css/sliderHomePage.css') }}" />
@endsection

@section('content')
    <div class="main-title" style="background-color: #f2f2f2; ">
        <div class="container">
            <h1 class="main-title__primary">Dự án phân phối</h1>
        </div>
    </div>

    <div class="breadcrumbs " id="project-navigation-anchor">
        <div class="container">
            <!-- Breadcrumb NavXT 5.6.0 -->
            <span typeof="v:Breadcrumb">
                <a  href="{{ route('index') }}" class="home">{{ $webName }}</a>
            </span> &gt;
            <span typeof="v:Breadcrumb">
                <span>Dự án phân phối</span>
            </span>
        </div>
    </div>

    <div class="master-container">
        <div class="container">
            <div class="row">
                <main class="col-xs-12" role="main">
                    <div class="row">
                        <article class="post-2435 page type-page status-publish hentry">
                                <div id="fsb-social-bar" class="fsb-social-bar" data-post-id="2435" data-socialite="true">
                                    <div class="fsb-share-facebook fsb-hide-count"><a
                                                href="http://www.facebook.com/sharer.php?u=http://newstarland.com/du-an-phan-phoi/"
                                                class="socialite facebook fsb-facebook"
                                                data-fsb-service="facebook"
                                                data-href="http://newstarland.com/du-an-phan-phoi/"
                                                data-send="false"
                                                data-layout="button_count"
                                                data-width="60" data-show-faces="false"
                                                rel="nofollow" target="_blank"><span
                                                    class="fsb-service-title">Facebook</span><span
                                                    class="fsb-count">0</span></a></div>
                                    <div class="fsb-share-twitter fsb-hide-count"><a
                                                href="https://twitter.com/share?original_referer=http%3A%2F%2Fnewstarland.com%2F&amp;source=tweetbutton&amp;text=D%E1%BB%B1+%C3%A1n+ph%C3%A2n+ph%E1%BB%91i&amp;url=http%3A%2F%2Fnewstarland.com%2Fdu-an-phan-phoi%2F&amp;via="
                                                class="socialite twitter fsb-twitter"
                                                data-fsb-service="twitter" rel="nofollow"
                                                target="_blank"
                                                title="Be the first one to tweet this article!"><span
                                                    class="fsb-service-title">Twitter</span><span
                                                    class="fsb-count">0</span></a></div>
                                    <div class="fsb-share-google fsb-hide-count"><a
                                                href="https://plus.google.com/share?url=http://newstarland.com/du-an-phan-phoi/"
                                                class="socialite googleplus fsb-google"
                                                data-fsb-service="google"
                                                data-size="medium"
                                                data-href="http://newstarland.com/du-an-phan-phoi/"
                                                rel="nofollow" target="_blank"><span
                                                    class="fsb-service-title">Google+</span><span
                                                    class="fsb-count">0</span></a></div>
                                    <div class="fsb-share-linkedin fsb-hide-count"><a
                                                href="https://www.linkedin.com/cws/share?url=http://newstarland.com/du-an-phan-phoi/"
                                                class="socialite linkedin fsb-linkedin"
                                                data-fsb-service="linkedin"
                                                data-size="medium"
                                                data-href="http://newstarland.com/du-an-phan-phoi/"
                                                rel="nofollow" target="_blank"><span
                                                    class="fsb-service-title">LinkedIn</span><span
                                                    class="fsb-count">0</span></a></div>
                                    <div class="fsb-share-pinterest fsb-hide-count">
                                        <a href="http://pinterest.com/pin/create/button/?url=http://newstarland.com/du-an-phan-phoi/&amp;description=D%E1%BB%B1+%C3%A1n+ph%C3%A2n+ph%E1%BB%91i&amp;media="
                                           class="socialite pinit fsb-pinterest"
                                           data-fsb-service="pinterest"
                                           target="_blank" rel="nofollow"><span
                                                    class="fsb-service-title">Pinterest</span><span
                                                    class="fsb-count">0</span></a></div>
                                </div>
                                <div class="fsb-clear"></div>

                                <div id="exTab3" class="container" style="background: none">
                                    <ul  class="nav nav-pills header-slider-1" style="background: #333333; color: #dddddd">
                                        <li class="active tab-location" data-num="slider-1">
                                            <a href="#1b" data-toggle="tab"><span>TOÀN QUỐC</span></a>
                                        </li>
                                        <li class="tab-location" data-num="slider-2"><a href="#2b" data-toggle="tab"><span>HÀ NỘI</span></a>
                                        </li>
                                        <li class="tab-location" data-num="slider-3"><a href="#3b" data-toggle="tab"><span>HẢI PHÒNG</span></a>
                                        </li>
                                        <li class="tab-location" data-num="slider-4"><a href="#4b" data-toggle="tab"><span>ĐÀ NẴNG</span></a>
                                        </li>
                                        <li class="tab-location" data-num="slider-5"><a href="#5b" data-toggle="tab"><span>NHA TRANG</span></a>
                                        </li>
                                        <li class="tab-location" data-num="slider-6"><a href="#6b" data-toggle="tab"><span>PHÚ QUỐC</span></a>
                                        </li>
                                        <li class="tab-location" data-num="slider-7"><a href="#7b" data-toggle="tab"><span>TP HỒ CHÍ MINH</span></a>
                                        </li>
                                    </ul>

                                    <div class="tab-content clearfix">
                                        <div class="tab-pane active" id="1b">
                                            <ul id="slider-1">
                                                @foreach($toanQuoc as $item)
                                                    <li>
                                                        <a href="{{ route('projects', [$item['category'], $item['post']->alias]) }}">
                                                            <img class="image-location" src="{{ asset('uploads/images/'.$item['post']->image) }}">
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="2b">
                                            <ul id="slider-2">
                                                @foreach($haNoi as $item)
                                                    <li>
                                                        <a href="{{ route('projects', [$item['category'], $item['post']->alias]) }}">
                                                            <img class="image-location" src="{{ asset('uploads/images/'.$item['post']->image) }}">
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="3b">
                                            <ul id="slider-3">
                                                @foreach($haiPhong as $item)
                                                    <li>
                                                        <a href="{{ route('projects', [$item['category'], $item['post']->alias]) }}">
                                                            <img class="image-location" src="{{ asset('uploads/images/'.$item['post']->image) }}">
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="4b">
                                            <ul id="slider-4">
                                                @foreach($daNang as $item)
                                                    <li>
                                                        <a href="{{ route('projects', [$item['category'], $item['post']->alias]) }}">
                                                            <img class="image-location" src="{{ asset('uploads/images/'.$item['post']->image) }}">
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="5b">
                                            <ul id="slider-5">
                                                @foreach($nhaTrang as $item)
                                                    <li>
                                                        <a href="{{ route('projects', [$item['category'], $item['post']->alias]) }}">
                                                            <img class="image-location" src="{{ asset('uploads/images/'.$item['post']->image) }}">
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="6b">
                                            <ul id="slider-6">
                                                @foreach($phuQuoc as $item)
                                                    <li>
                                                        <a href="{{ route('projects', [$item['category'], $item['post']->alias]) }}">
                                                            <img class="image-location" src="{{ asset('uploads/images/'.$item['post']->image) }}">
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="7b">
                                            <ul id="slider-7">
                                                @foreach($hoChiMinh as $item)
                                                    <li>
                                                        <a href="{{ route('projects', [$item['category'], $item['post']->alias]) }}">
                                                            <img class="image-location" src="{{ asset('uploads/images/'.$item['post']->image) }}">
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="text-center" >
                                        <div class="navigation-slider">
                                            <i id="goToPrevSlide" class="fa fa-chevron-left" aria-hidden="true"></i>
                                            <i id="goToNextSlide" class="fa fa-chevron-right" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="clear"></div>

                            </article>
                    </div>
                </main>


            </div>
        </div><!-- /container -->
    </div>
@stop

@section('page-script')
    <script type="text/javascript">
        $(document).ready(function () {
            initSlider('slider-1');

            $('.tab-location').click(function () {
                var id = $(this).data('num');
                initSlider(id);
            });

            function initSlider(sliderId) {
                var slider = $("#"+sliderId).lightSlider({
                    item: 4,
                    autoWidth: false,
                    slideMove: 4, // slidemove will be 1 if loop is true
                    slideMargin: 10,

                    addClass: '',
                    mode: "slide",
                    useCSS: true,
                    cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
                    easing: 'linear', //'for jquery animation',////

                    speed: 400, //ms'
                    auto: false,
                    loop: false,
                    slideEndAnimation: true,
                    pause: 2000,

                    keyPress: false,
                    controls: false,
                    prevHtml: '',
                    nextHtml: '',

                    rtl: false,
                    adaptiveHeight: false,

                    vertical: false,
                    verticalHeight: 500,
                    vThumbWidth: 100,

                    thumbItem: 10,
                    pager: false,
                    gallery: false,
                    galleryMargin: 5,
                    thumbMargin: 5,
                    currentPagerPosition: 'middle',

                    enableTouch: true,
                    enableDrag: true,
                    freeMove: true,
                    swipeThreshold: 40,

                    responsive: [
                        {
                            breakpoint:1200,
                            settings: {
                                item:3,
                                slideMove:1,
                            }
                        },
                        {
                            breakpoint:992,
                            settings: {
                                item:3,
                                slideMove:1,

                            }
                        },
                        {
                            breakpoint:720,
                            settings: {
                                item:2,
                                slideMove:1,

                            }
                        },
                        {
                            breakpoint:480,
                            settings: {
                                item:1,
                                slideMove:1
                            }
                        }
                    ],

                    onBeforeStart: function (el) {
                    },
                    onSliderLoad: function (el) {
                    },
                    onBeforeSlide: function (el) {
                    },
                    onAfterSlide: function (el) {
                    },
                    onBeforeNextSlide: function (el) {
                    },
                    onBeforePrevSlide: function (el) {
                    }
                });
                $('#goToPrevSlide').on('click', function () {
                    slider.goToPrevSlide();
                });
                $('#goToNextSlide').on('click', function () {
                    slider.goToNextSlide();
                });
            };

            $("#slider-0").lightSlider({
                item: 4,
                autoWidth: false,
                slideMove: 4, // slidemove will be 1 if loop is true
                slideMargin: 10,

                addClass: '',
                mode: "slide",
                useCSS: true,
                cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
                easing: 'linear', //'for jquery animation',////

                speed: 400, //ms'
                auto: false,
                loop: false,
                slideEndAnimation: true,
                pause: 2000,

                keyPress: false,
                controls: true,
                prevHtml: '<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>',
                nextHtml: '<i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i>',

                rtl: false,
                adaptiveHeight: false,

                vertical: false,
                verticalHeight: 500,
                vThumbWidth: 100,

                thumbItem: 10,
                pager: false,
                gallery: false,
                galleryMargin: 5,
                thumbMargin: 5,
                currentPagerPosition: 'middle',

                enableTouch: true,
                enableDrag: true,
                freeMove: true,
                swipeThreshold: 40,

                responsive: [
                    {
                        breakpoint:1200,
                        settings: {
                            item:3,
                            slideMove:1,
                        }
                    },
                    {
                        breakpoint:992,
                        settings: {
                            item:2,
                            slideMove:1
                        }
                    },
                    {
                        breakpoint:594,
                        settings: {
                            item:1,
                            slideMove:1
                        }
                    }
                ],

                onBeforeStart: function (el) {
                },
                onSliderLoad: function (el) {
                },
                onBeforeSlide: function (el) {
                },
                onAfterSlide: function (el) {
                },
                onBeforeNextSlide: function (el) {
                },
                onBeforePrevSlide: function (el) {
                }
            });
        })

    </script>

@stop
