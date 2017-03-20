@extends('layouts.newstarland.index')

@section('content')
    <div class="main-title">
        <div class="container">
            <h1 class="main-title__primary">Tin tức dự án</h1>
        </div>
    </div>

    <div class="breadcrumbs " id="project-navigation-anchor">
        <div class="container">
            <!-- Breadcrumb NavXT 5.6.0 -->
            <span typeof="v:Breadcrumb">
                <a href="{{ route('index') }}" class="home">{{ $webName }}</a>
            </span> &gt;
            <span typeof="v:Breadcrumb">
                <span property="v:title">Tin tức dự án</span>
            </span>
        </div>
    </div>

    <!--block content-->
    <div class="master-container">
        <div class="container">
            <div class="row">
                <div class="row panel-grid">
                    <h3 class="cat-title">
                        <a href="#"></a>
                    </h3>
                    <div class="col-md-3 panel-grid-cell">
                        <div class="panel">
                            <div class="category-box">
                                <a href="{{ route('news.project.detail') }}" class="page-box__picture">
                                    <img width="360" height="240" src="http://placehold.it/360x240" class="attachment-360x240 size-360x240 wp-post-image" alt="">                            </a>

                                <div class="page-box__content">
                                    <h5 class="page-box__title  text-uppercase"> <a href="{{ route('news.project.detail') }}">VINHOMES RIVERSIDE CÔNG BỐ 3 GÓI CHÍNH SÁCH BÁN HÀNG ĐẶC BIỆT</a></h5>
                                    <div class="excerp"><p>Nhằm tối ưu hóa lợi ích cho khách hàng, từ 15/3/2016, Vinhomes Riverside áp dụng ba gói chính sách bán hàng đặc biệt ưu đãi, dành cho khách mua biệt thự tại khu đô thị này. Các gói chính sách được thiết kế ưu việt, đáp ứng nhu cầu chuyên biệt: để ở,&nbsp; đầu tư …</p>
                                    </div>
                                    <p><a class="read-more  read-more--page-box" href="{{ route('news.project.detail') }}">Chi tiết </a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xs-12">
                        <nav class="pagination text-center"></nav>
                    </div>
                </div>

            </div>
        </div><!-- /container -->
    </div>
@endsection