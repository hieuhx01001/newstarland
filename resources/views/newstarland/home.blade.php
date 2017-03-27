@extends('layouts.newstarland.index')

@section('title')
    {{ $webName }}
@stop

@section('page-css')
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/newstarland/css/index.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/newstarland/css/sliderHomePage.css') }}" />
@endsection

@section('content')
    <!--Block silde-->
    <div class="jumbotron  jumbotron--with-captions">
        <div class="carousel  slide  js-jumbotron-slider" id="headerCarousel"
             data-interval="5000">

            <!-- Wrapper for slides -->
            <div class="carousel-inner" style="height:auto !important;">

                <div class="item active">
                    <img srcset="http://newstarland.com/wp-content/uploads/2014/10/aaaa-480x145.png 480w, http://newstarland.com/wp-content/uploads/2014/10/aaaa-960x290.png 960w, http://newstarland.com/wp-content/uploads/2014/10/aaaa-1281x580.png 1281w"
                         sizes="100vw" style="height:auto !important;"
                         alt="VINPEARL - VILLAS &amp; CONDOTEL">
                    <div class="container">
                        <div class="carousel-content">
                            <div class="jumbotron__title">
                                <h1>VINPEARL - VILLAS &amp; CONDOTEL</h1>
                            </div>
                            <div class="jumbotron__content">
                                <p style="text-align: center;"><strong><span
                                                style="color: #ffcc00;">NEWSTARLAND PHÂN PHỐI ĐỘC QUYỀN BIỆT THỰ NGHỈ DƯỠNG</span></strong>
                                </p>
                                <p style="text-align: center;"><strong><span
                                                style="color: #ffcc00;">VINPEARL GOLF LAND RESORT &amp; VILLAS</span></strong>
                                </p>
                                <p style="text-align: center;"><span
                                            style="color: #ffffff;">Chia sẻ lợi nhuận 85%, tối thiểu 8% GTBT/năm bằng USD&nbsp; hoặc 10% GTBT/năm bằng VND trong 10 năm</span>
                                </p>
                                <p style="text-align: center;"><span
                                            style="color: #ffffff;">Tặng 15 đêm nghỉ/năm trên hệ thống Vinpearl toàn quốc –&nbsp;</span><span
                                            style="color: #ffffff;">Vay 65% GTBT lãi suất 0% trong 12 tháng</span>
                                </p>
                                <p style="text-align: center;"><a
                                            class="btn  btn-primary"
                                            href="#"
                                            target="_blank">CHI TIẾT</a></p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <img srcset="http://newstarland.com/wp-content/uploads/2016/01/0010-480x145.jpg 480w, http://newstarland.com/wp-content/uploads/2016/01/0010-960x290.jpg 960w, http://newstarland.com/wp-content/uploads/2016/01/0010-1920x580.jpg 1920w"
                         sizes="100vw" style="height:auto !important;"
                         alt="Vinhomes Central Park">
                    <div class="container">
                        <div class="carousel-content">
                            <div class="jumbotron__title">
                                <h1>Vinhomes Central Park</h1>
                            </div>
                            <div class="jumbotron__content">
                                <h4 style="text-align: center;">&nbsp;<span
                                            style="color: #ffcc00;"><strong>LANDMARK
                                            PLUS</strong></span></h4>
                                <h5 style="text-align: center;"><strong><span
                                                style="color: #ffffff;">TÒA THÁP ĐÔI CH DỊCH VỤ</span>
                                        <span style="color: #ffcc00;">DUY NHẤT</span>
                                        <span style="color: #ffffff;">VINHOMES CENTRAL PARK</span></strong>
                                </h5>
                                <p style="text-align: center;"><strong>Cam kết lợi
                                        nhuận tối thiểu <span
                                                style="color: #ffcc00;">10%</span>/năm</strong>
                                </p>
                                <p style="text-align: center;"><a
                                            class="btn  btn-primary"
                                            href="#"
                                            target="_blank">CHI TIẾT</a></p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <img srcset="http://newstarland.com/wp-content/uploads/2014/10/007-Ba-Son-v19-B-480x145.jpg 480w, http://newstarland.com/wp-content/uploads/2014/10/007-Ba-Son-v19-B-960x290.jpg 960w, http://newstarland.com/wp-content/uploads/2014/10/007-Ba-Son-v19-B-1500x580.jpg 1500w"
                         sizes="100vw" style="height:auto !important;"
                         alt="Vinhomes Golden River">
                    <div class="container">
                        <div class="carousel-content">
                            <div class="jumbotron__category">
                                <h6>Đỉnh cao của cuộc sống thượng lưu</h6>
                            </div>
                            <div class="jumbotron__title">
                                <h1>Vinhomes Golden River</h1>
                            </div>
                            <div class="jumbotron__content">
                                <h4 style="text-align: center;"><strong>CƠ HỘI CUỐI
                                        CÙNG SỞ HỮU CĂN HỘ ĐẲNG CẤP BẬC NHẤT Q.1</strong>
                                </h4>
                                <div style="text-align: center;">
                                    <p><strong>Tòa căn hộ phân khu THE AQUA</strong>
                                    </p>
                                    <p>Vị trí “kim cương” tại trung tâm Q.1 –
                                        TP.HCM</p>
                                    <a class="btn  btn-primary"
                                       href="#"
                                       target="_blank">CHI TIẾT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End slide-->

            <!-- Controls -->
            <a class="left  carousel-control"
               href="#headerCarousel" role="button"
               data-slide="prev">
                <i class="fa  fa-angle-left"></i>
            </a>
            <a class="right  carousel-control" href="#headerCarousel" role="button" data-slide="next">
                <i class="fa  fa-angle-right"></i>
            </a>

        </div>
    </div>
    <!--End block silde-->

    <!--block content-->
    <div class="master-container">
        <div class="container post-7 page type-page status-publish hentry"
             role="main">
            <div id="pl-7">
                <div class="panel-grid" id="pg-7-0">
                    <div class="panel-grid-cell panel-grid-cell-empty"
                         id="pgc-7-0-0"></div>
                </div>
                <div class="panel-grid" id="pg-7-1">
                    <ul id="slider-0">
                        @foreach($listPostHome as $item)
                            <li>
                                <div class="chpcs_foo_content" style="width:260px; height:380px;">
                                    <span class="chpcs_img">
                                        @if ($item[0]->pagetype == 'project')
                                            <a href="{{ route('projects', [$item[1]->alias, $item[0]->alias]) }}">
                                                <img src="{{ asset('uploads/images/'.$item[0]->image) }}">
                                            </a>
                                        @else
                                            <a href="{{ route('news', [$item[0]->alias]) }}">
                                                <img src="{{ asset('uploads/images/'.$item[0]->image) }}">
                                            </a>
                                        @endif
                                    </span><br>
                                    <span class="chpcs_title">
                                        @if ($item[0]->pagetype == 'project')
                                        <a style=" text-decoration:none;" href="{{ route('projects', [$item[1]->alias, $item[0]->alias]) }}">
                                            {{ $item[0]->title }}
                                        </a>
                                        @else
                                            <a style=" text-decoration:none;" href="{{ route('news', [$item[1]->alias, $item[0]->alias]) }}">
                                                {{ $item[0]->title }}
                                            </a>
                                        @endif
                                    </span><br>
                                    <p>
                                        @php
                                        $content = mb_strtolower(str_limit(strip_tags($item[0]->note), 150), 'UTF-8');
                                        @endphp
                                        <span class="chpcs_foo_con">{!! $content !!}</span>
                                    </p><br>
                                    <span class="chpcs_more">
                                        @if ($item[0]->pagetype == 'project')
                                        <a href="{{ route('projects', [$item[1]->alias, $item[0]->alias]) }}">CHI TIẾT</a>
                                        @else
                                        <a href="{{ route('news', [$item[1]->alias, $item[0]->alias]) }}">CHI TIẾT</a>
                                        @endif
                                    </span>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="panel-grid" id="pg-7-2">
                    <div id="exTab3" class="container">
                        <ul  class="nav nav-pills header-slider-1">
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
                </div>
                <div class="panel-grid" id="pg-7-3">
                    <div class="panel-grid-cell" id="pgc-7-3-0">
                        <div id="fsb-social-bar" class="fsb-social-bar"
                             data-post-id="7" data-socialite="true">

                            <div class="fsb-share-facebook fsb-hide-count"><a
                                        href="http://www.facebook.com/sharer.php?u=http://newstarland.com/"
                                        class="socialite facebook fsb-facebook"
                                        data-fsb-service="facebook"
                                        data-href="http://newstarland.com/"
                                        data-send="false" data-layout="button_count"
                                        data-width="60" data-show-faces="false"
                                        rel="nofollow" target="_blank"><span
                                            class="fsb-service-title">Facebook</span><span
                                            class="fsb-count">0</span></a></div>
                            <div class="fsb-share-twitter fsb-hide-count"><a
                                        href="https://twitter.com/share?original_referer=http%3A%2F%2Fnewstarland.com%2F&amp;source=tweetbutton&amp;text=Front+Page&amp;url=http%3A%2F%2Fnewstarland.com%2F&amp;via="
                                        class="socialite twitter fsb-twitter"
                                        data-fsb-service="twitter" rel="nofollow"
                                        target="_blank"
                                        title="Be the first one to tweet this article!"><span
                                            class="fsb-service-title">Twitter</span><span
                                            class="fsb-count">0</span></a></div>
                            <div class="fsb-share-google fsb-hide-count"><a
                                        href="https://plus.google.com/share?url=http://newstarland.com/"
                                        class="socialite googleplus fsb-google"
                                        data-fsb-service="google" data-size="medium"
                                        data-href="http://newstarland.com/"
                                        rel="nofollow" target="_blank"><span
                                            class="fsb-service-title">Google+</span><span
                                            class="fsb-count">0</span></a></div>
                            <div class="fsb-share-linkedin fsb-hide-count"><a
                                        href="https://www.linkedin.com/cws/share?url=http://newstarland.com/"
                                        class="socialite linkedin fsb-linkedin"
                                        data-fsb-service="linkedin" data-size="medium"
                                        data-href="http://newstarland.com/"
                                        rel="nofollow" target="_blank"><span
                                            class="fsb-service-title">LinkedIn</span><span
                                            class="fsb-count">0</span></a></div>
                            <div class="fsb-share-pinterest fsb-hide-count"><a
                                        href="http://pinterest.com/pin/create/button/?url=http://newstarland.com/&amp;description=Front+Page&amp;media=http://newstarland.com/wp-content/uploads/2015/09/11986513_676351775833469_1926452232560230068_n-300x216.jpg"
                                        class="socialite pinit fsb-pinterest"
                                        data-fsb-service="pinterest" target="_blank"
                                        rel="nofollow"><span class="fsb-service-title">Pinterest</span><span
                                            class="fsb-count">0</span></a></div>
                        </div>
                        <div class="fsb-clear"></div>
                        <div class="so-panel widget widget_sticky-posts widget_ultimate_posts panel-first-child panel-last-child"
                             id="panel-7-3-0-0" data-index="2">
                            <h3 class="widget-title">Tin tức nổi bật</h3>
                            <div class="upw-posts hfeed">
                                @foreach($hotNews as $item)
                                <article class="post-4895 post type-post status-publish format-standard has-post-thumbnail hentry">
                                    <header>
                                        <div class="entry-image">
                                            <a href="{{ route('news', [$item->alias]) }}">
                                                <img width="100" height="75" src="{{ asset('uploads/images/'.$item['image']) }}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="">
                                            </a>
                                        </div>

                                        <h4 class="entry-title">
                                            <a href="{{ route('news', [$item->alias]) }}">
                                                {!! $item->title !!}
                                            </a>
                                        </h4>
                                    </header>

                                    <div class="entry-summary">
                                        @php
                                        $content = str_limit(strip_tags($item->note), 150)
                                        @endphp
                                        <p>
                                            {!! $content !!}
                                            <a href="{{ route('news', [$item->alias]) }}" class="more-link">Chi tiết</a>
                                        </p>
                                    </div>
                                </article>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="panel-grid-cell" id="pgc-7-3-1">
                        <div class="so-panel widget widget_pt_testimonials widget-testimonials panel-first-child panel-last-child"
                             id="panel-7-3-1-0" data-index="3">
                            <div class="testimonial">
                                <h2 class="widget-title">

                                    Khách hàng nói về chúng tôi </h2>
                                <div id="carousel-testimonials-widget-3-1-0"
                                     class="carousel slide">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <div class="row">
                                                <div class="col-xs-12  col-sm-6">
                                                    <blockquote
                                                            class="testimonial__quote">
                                                        Căn hộ Vinhomes Central Park
                                                        là căn hộ thu hút tôi nhất từ
                                                        trước đến nay, với mức giá
                                                        hiện nay tôi thấy là phù hợp
                                                        và chấp nhận được
                                                    </blockquote>
                                                    <cite class="testimonial__author">
                                                        Anh Hoàng Đức Minh ở Minh
                                                        Khai, Hai Bà Trưng </cite>

                                                    <div class="testimonial__rating">
                                                        <i class="fa  fa-star"></i><i
                                                                class="fa  fa-star"></i><i
                                                                class="fa  fa-star"></i><i
                                                                class="fa  fa-star"></i><i
                                                                class="fa  fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12  col-sm-6">
                                                    <blockquote
                                                            class="testimonial__quote">
                                                        Không gian sống yên tĩnh, hài
                                                        hòa giữa cảnh quan môi trường
                                                        và thiên nhiên. Tôi thực sự
                                                        hài lòng với chất lượng cuộc
                                                        sống tại Vinhomes Riverside
                                                    </blockquote>
                                                    <cite class="testimonial__author">
                                                        Chị Lan Anh ở Ba Đình, Hà
                                                        Nội </cite>

                                                    <div class="testimonial__rating">
                                                        <i class="fa  fa-star"></i><i
                                                                class="fa  fa-star"></i><i
                                                                class="fa  fa-star"></i><i
                                                                class="fa  fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12  col-sm-6">
                                                    <blockquote
                                                            class="testimonial__quote">
                                                        Giá mua biệt thự tại đây rất
                                                        hợp lý, ngoài ra giá quản lý
                                                        dịch vụ nơi đây cũng ngang
                                                        bằng với một số căn hộ ở các
                                                        khu chung cư cao cấp khác ở
                                                        Hà Nội
                                                    </blockquote>
                                                    <cite class="testimonial__author">
                                                        Chị Thu Hằng ở Nguyễn Văn Cừ,
                                                        Long Biên, Hà Nội </cite>

                                                    <div class="testimonial__rating">
                                                        <i class="fa  fa-star"></i><i
                                                                class="fa  fa-star"></i><i
                                                                class="fa  fa-star"></i><i
                                                                class="fa  fa-star"></i><i
                                                                class="fa  fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="panel-grid" id="pg-7-4">
                    <div class="panel-grid-cell" id="pgc-7-4-0">
                        <div class="so-panel widget widget_text panel-first-child"
                             id="panel-7-4-0-0" data-index="4">
                            <div class="textwidget"></div>
                        </div>
                        <div class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-last-child"
                             id="panel-7-4-0-1" data-index="5"><h3
                                    class="widget-title">Thế mạnh</h3>
                            <div class="textwidget"><h5><span
                                            style="color: #fcc71f;"><br>
    <span class="icon-container"><span class="fa fa-check"></span></span></span><span
                                            style="color: #333333;">UY TÍN LÀ THƯƠNG HIỆU</span>
                                </h5>
                                <p>Hiểu rõ được tầm quan trọng của việc giữ chữ tín.
                                    Bởi vậy, mọi hoạt động của Vietstarland đều lấy
                                    chữ tín làm đầu. Mang lại cho khách hàng cảm giác
                                    thoải mái, yên tâm khi hợp tác với
                                    Vietstarland.</p>
                                <h5><span style="color: #fcc71f;"><br>
    <span class="icon-container"><span class="fa fa-check"></span></span></span><span
                                            style="color: #333333;">SẢN PHẨM ĐỘC QUYỀN</span>
                                </h5>
                                <p>Chúng tôi được phân phối độc quyền các căn hộ Tòa
                                    R3 chung cư Royal City, T11 chung cư Time City,
                                    các căn hộ tại các tòa chung cư khác của hai dự
                                    án và đặc biệt nhiều khu biệt thự tại Vinhome
                                    Riverside.</p>
                                <h5><span style="color: #fcc71f;"><br>
    <span class="icon-container"><span class="fa fa-check"></span></span></span><span
                                            style="color: #fcc71f;">&nbsp; </span>DỊCH VỤ
                                    CHUYÊN NGHIỆP</h5>
                                <p>Chỉ cần quý khách nhấc máy lên và gọi cho chúng
                                    tôi, đội ngũ chuyên viên tư vấn cùng với kinh
                                    nghiệm chuyên sâu về các dự án sẽ giải đáp mọi
                                    thắc mắc của quý khách, giúp quý khách an tâm đưa
                                    ra những quyết định đúng đắn khi chọn cho mình
                                    một căn nhà thân yêu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel-grid-cell" id="pgc-7-4-1">
                        <div class="so-panel widget widget_text panel-first-child"
                             id="panel-7-4-1-0" data-index="6">
                            <div class="textwidget"></div>
                        </div>
                        <div class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-last-child" id="panel-7-4-1-1" data-index="7">
                            <h3 class="widget-title">Về chúng tôi</h3>
                            <div class="textwidget">
                                <p><img class="alignleft size-medium wp-image-2704" src="http://newstarland.com/wp-content/uploads/2015/08/anh-12-300x200.jpg" alt="anh-12" width="300" height="200">
                                </p>
                                <p style="text-align: justify;">Newstarland với tiền
                                    thân là Vietstarland - khởi nghiệp từ 03/2013 với
                                    chức năng: kinh doanh, tư vấn, cho thuê, môi giới
                                    và tiếp thị bất động sản. Trải qua bao biến động,
                                    thăng trầm của thị trường bất động sản đầy tiềm
                                    năng và thử thách, với chiến lược phù hợp cùng tư
                                    duy quản trị đúng đắn và tinh thần đoàn kết, nỗ
                                    lực của toàn công ty, Newstarland liên tục gặt
                                    hái những thành công và không ngừng phát
                                    triển.
                                </p>
                                <h5>
                                    <strong><a href="{{ route('news', ['thu-ngo']) }}">Chi tiết</a></strong></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-grid" id="pg-7-5">
                    <div class="panel-grid-cell" id="pgc-7-5-0">
                        <div class="so-panel widget widget_text panel-first-child panel-last-child"
                             id="panel-7-5-0-0" data-index="8"><h3
                                    class="widget-title">Khách hàng / Đối tác</h3>
                            <div class="textwidget">
                                <div class="logo-panel">
                                    <div class="row">
                                        <div class="col-xs-6  col-sm-2">
                                            <img alt="Vingroup"
                                                 src="http://newstarland.com/wp-content/uploads/2015/08/vingroup.png">
                                        </div>
                                        <div class="col-xs-6  col-sm-2">
                                            <img alt="Vinhomes"
                                                 src="http://newstarland.com/wp-content/uploads/2015/08/vinhomes.png">
                                        </div>
                                        <div class="col-xs-6  col-sm-2">
                                            <img alt="Vinhomes Royal city"
                                                 src="http://newstarland.com/wp-content/uploads/2015/08/royal-city.png">
                                        </div>
                                        <div class="col-xs-6  col-sm-2">
                                            <img alt="Vinhomes Times City"
                                                 src="http://newstarland.com/wp-content/uploads/2015/08/times-city.png">
                                        </div>
                                        <div class="col-xs-6  col-sm-2">
                                            <img alt="Vinhomes Riverside"
                                                 src="http://newstarland.com/wp-content/uploads/2015/08/vinhomes-riverside.png">
                                        </div>
                                        <div class="col-xs-6  col-sm-2">
                                            <img alt="Vinhomes Central Park"
                                                 src="http://newstarland.com/wp-content/uploads/2015/08/vinhomescentral-park.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end block content-->
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