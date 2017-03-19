@extends('layouts.newstarland.index')

@section('content')
    <div class="main-title">
        <div class="container">
            <h1 class="main-title__primary">Tin tức</h1>
        </div>
    </div>

    <div class="breadcrumbs " id="project-navigation-anchor">
        <div class="container">
            <!-- Breadcrumb NavXT 5.6.0 -->
            <span typeof="v:Breadcrumb">
                <a  href="{{ route('index') }}" class="home">{{ $webName }}</a>
            </span> &gt;
            <span typeof="v:Breadcrumb">
                <span>Tin tức</span>
            </span>
        </div>
    </div>

    <div class="master-container">
        <div class="container">
            <div class="row">
                <div class="row panel-grid">
                    <h3 class="cat-title">
                        <a href="{{ route('news.internal') }}">Tin nội bộ</a>
                    </h3>
                    @foreach($internal as $newsInternal)
                    <div class="col-md-3 panel-grid-cell">
                        <div class="panel">
                            <div class="category-box">
                                <a href="{{ route('internal.detail', [$newsInternal['alias']]) }}" class="page-box__picture">
                                    <img width="360" height="240" src="{{ asset('uploads/images/'.$newsInternal['image']) }}" class="attachment-360x240 size-360x240 wp-post-image" alt="">
                                </a>
                                <div class="page-box__content">
                                    <h5 class="page-box__title  text-uppercase">
                                        <a href="{{ route('internal.detail', [$newsInternal['alias']]) }}">{{ $newsInternal['title'] }}</a>
                                    </h5>
                                    <div class="excerp">
                                        <p>{!! $newsInternal['note'] !!}}</p>
                                    </div>
                                    <p>
                                        <a class="read-more  read-more--page-box" href="{{ route('internal.detail', [$newsInternal['alias']]) }}">Chi tiết </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row panel-grid">
                    <h3 class="cat-title"><a href="{{ route('recruitment') }}">TUYỂN DỤNG</a></h3>
                    @foreach($recruitment as $newsRecruitment)
                    <div class="col-md-3 panel-grid-cell">
                        <div class="panel">
                            <div class="category-box">
                                <a href="{{ route('recruitment.detail', [$newsRecruitment['alias']]) }}" class="page-box__picture">
                                    <img width="360" height="240" src="{{ asset('uploads/images/'.$newsRecruitment['image']) }}" class="attachment-360x240 size-360x240 wp-post-image" alt="">
                                </a>

                                <div class="page-box__content">
                                    <h5 class="page-box__title  text-uppercase">
                                        <a href="{{ route('recruitment.detail', [$newsRecruitment['alias']]) }}">{{ $newsRecruitment['title'] }}</a>
                                    </h5>
                                    <div class="excerp"><p>{!! $newsRecruitment['note'] !!}</p>
                                    </div>
                                    <p>
                                        <a class="read-more read-more--page-box" href="{{ route('recruitment.detail', [$newsRecruitment['alias']]) }}">Chi tiết </a>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row panel-grid">
                    <h3 class="cat-title"><a href="http://newstarland.com/tin-tuc/cap-nhat-tien-do-du-an/">Cập nhật tiến độ dự án</a></h3>
                    <div class="col-md-3 panel-grid-cell">
                        <div class="panel">
                            <div class="category-box">
                                <a href="http://newstarland.com/cap-nhat-tien-do-du-an-d-capitale-ngay-1822017/"
                                   class="page-box__picture">
                                    <img width="360" height="240"
                                         src="./Tin Tức _ NEWSTARLAND - NGÔI SAO MỚI_files/SMALL_DJI_0057-copy-360x240.jpg"
                                         class="attachment-360x240 size-360x240 wp-post-image"
                                         alt=""> </a>

                                <div class="page-box__content">
                                    <h5 class="page-box__title  text-uppercase"><a
                                                href="http://newstarland.com/cap-nhat-tien-do-du-an-d-capitale-ngay-1822017/">Cập
                                            nhật tiến độ dự án D’.Capitale – Ngày
                                            18/2/2017</a></h5>
                                    <div class="excerp"><p>D’.Capitale hội tụ những
                                            “ông lớn” đầu ngành trong lĩnh vực bất động
                                            sản, tài chính mang đến một tiền lệ chưa từng
                                            có của thị trường bất động sản. Thông tin
                                            tổng quan: Tên dự án:D’. Capitale Chủ đầu tư:&nbsp;Tập
                                            đoàn Tân Hoàng Minh Phân phối&nbsp;và vận
                                            hành quản lý:&nbsp;Vinhomes Tài trợ vốn:&nbsp;Ngân
                                            hàngTechcombank …</p>
                                    </div>
                                    <p><a class="read-more  read-more--page-box"
                                          href="http://newstarland.com/cap-nhat-tien-do-du-an-d-capitale-ngay-1822017/">Chi
                                            tiết </a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div><!-- /container -->
    </div>

@endsection