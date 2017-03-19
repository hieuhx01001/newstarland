@extends('layouts.newstarland.index')

@section('content')
    <div class="main-title">
        <div class="container">
            <h1 class="main-title__primary">Liên hệ</h1>
        </div>
    </div>
    <div class="breadcrumbs  breadcrumbs--page-builder" id="project-navigation-anchor">
        <div class="container">
            <!-- Breadcrumb NavXT 5.6.0 -->
            <span typeof="v:Breadcrumb">
                <a href="{{ route('index') }}" class="home">{{ $webName }}</a>
            </span> &gt;
            <span typeof="v:Breadcrumb">
                <span property="v:title">Liên hệ</span>
            </span>
        </div>
    </div>

    <!--block content-->
    <div class="master-container">
        <div class="container post-29 page type-page status-publish hentry" role="main">
            <div id="pl-29">
                <div class="panel-grid" id="pg-29-0" style="margin-bottom: 50px">
                    <iframe
                            width= 100% height=600
                            frameborder="0" style="border:0"
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCiBA2Od3WYi1vEMBmDNzcB1RxuPWxIqTM&q=Space+Needle,Seattle+WA" allowfullscreen>
                    </iframe>
                </div>
                <div class="panel-grid" id="pg-29-1">
                    <div class="panel-grid-cell" id="pgc-29-1-0">
                        <div class="so-panel widget widget_text panel-first-child panel-last-child" id="panel-29-1-0-0" data-index="1">
                            <h3 class="widget-title">Liên hệ ngay với chúng tôi</h3>
                            <div class="textwidget"></div>
                        </div>
                    </div>
                </div>
                <div class="panel-grid" id="pg-29-2">
                    <div class="panel-grid-cell col-lg-4" id="pgc-29-2-0">
                        <div class="so-panel widget widget_text panel-first-child" id="panel-29-2-0-0" data-index="2">
                            <div class="textwidget">
                                <span class="icon-container">
                                    <span class="fa fa-home"></span>
                                </span>
                                <b>CÔNG TY TNHH PHÁT TRIỂN THƯƠNG MẠI BĐS NEWSTARLAND</b>
                                Sàn giao dịch BĐS tầng 3 Tower 1, KĐT Times CIty, 458
                                Minh Khai, Hai Bà Trưng, Hà Nội<br>
                            </div>
                        </div>
                        <div class="so-panel widget widget_text" id="panel-29-2-0-1" data-index="3">
                            <div class="textwidget">
                                <span class="icon-container">
                                    <span class="fa fa-home"></span>
                                </span>
                                <b>CÔNG TY TNHH ĐỊA ỐC NGÔI SAO MỚI</b><br>
                                Tầng 1, tòa D - Vinaconex 1, 289A Khuất Duy Tiến,
                                Thanh Xuân, HN<br>
                                Sàn giao dịch BĐS 11-L2-R4, KĐT Royal City, 72A
                                Nguyễn Trãi, Thanh Xuân, Hà Nội<br>
                                Sàn giao dịch BĐS Tầng 2 TTTM Vincom Long Biên, Hà
                                Nội<br>
                                <span class="icon-container">
                                    <span class="fa fa-phone"></span>
                                </span> <b>0946.355.655 - 0917.032.888</b><br>
                                <span class="icon-container">
                                    <span class="fa fa-envelope"></span>
                                </span>
                                <a href="mailto:info@newstarland.com">info@newstarland.com</a>
                                <br><br>
                                <span class="icon-container">
                                    <span class="fa fa-home"></span>
                                </span> <b>Thứ 2 - Chủ nhật 8.00 - 18.00</b><br>
                            </div>
                        </div>
                        <div class="so-panel widget widget_pt_social_icons widget-social-icons panel-last-child" id="panel-29-2-0-2" data-index="4">
                            <a class="social-icons__link" href="#" target="_blank"><i class="fa  fa-facebook"></i></a>
                        </div>
                    </div>
                    <div class="panel-grid-cell col-lg-8" id="pgc-29-2-1">
                        <div class="so-panel widget widget_text panel-first-child panel-last-child" id="panel-29-2-1-0" data-index="5">
                            <div class="textwidget">
                                <div role="form" class="wpcf7" id="wpcf7-f5-p29-o1" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response"></div>
                                    {{ Form::open(['route' => 'contact', 'class' => 'wpcf7-form']) }}
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-4">
                                                <p>
                                                    <span class="wpcf7-form-control-wrap your-name">
                                                        <input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Họ và tên">
                                                    </span>
                                                </p>
                                                <p>
                                                    <span class="wpcf7-form-control-wrap your-email">
                                                        <input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email">
                                                    </span>
                                                </p>
                                                <p>
                                                    <span class="wpcf7-form-control-wrap tel-13">
                                                        <input type="tel" name="phoneNumber" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false" placeholder="Số điện thoại">
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="col-xs-12 col-sm-8">
                                                <p>
                                                    <span class="wpcf7-form-control-wrap your-subject">
                                                        <input type="text" name="subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Tiêu đề">
                                                    </span>
                                                </p>
                                                <p>
                                                    <span class="wpcf7-form-control-wrap your-message">
                                                        <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Tin nhắn">
                                                        </textarea>
                                                    </span>
                                                </p>
                                                <p>
                                                    <input type="submit" value="Gửi đi" class="wpcf7-form-control wpcf7-submit">
                                                    <span class="ajax-loader"></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                                    {{ Form::close() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /container -->
    </div>
    <!--end block content-->
@endsection

@section('page-script')
    <script>
        function initMap() {
            var uluru = {lat: -25.363, lng: 131.044};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 4,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjJnQgWJ_VJ_Yw8XYxC1viAYZvReEkYAs&callback=initMap">
    </script>
@endsection