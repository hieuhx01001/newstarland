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
                        <a href="{{ route('news', ['tin-noi-bo']) }}">Tin nội bộ</a>
                    </h3>
                    @foreach($internal as $newsInternal)
                    <div class="col-md-3 panel-grid-cell">
                        <div class="panel">
                            <div class="category-box">
                                <a href="{{ route('news', ['tin-noi-bo', $newsInternal['alias']]) }}" class="page-box__picture">
                                    <img width="360" height="240" src="{{ asset('uploads/images/'.$newsInternal['image']) }}" class="attachment-360x240 size-360x240 wp-post-image" alt="">
                                </a>
                                <div class="page-box__content">
                                    <h5 class="page-box__title  text-uppercase">
                                        <a href="{{ route('news', ['tin-noi-bo', $newsInternal['alias']]) }}">{{ $newsInternal['title'] }}</a>
                                    </h5>
                                    <div class="excerp">
                                        <p>{!! $newsInternal['note'] !!}}</p>
                                    </div>
                                    <p>
                                        <a class="read-more  read-more--page-box" href="{{ route('news', ['tin-noi-bo', $newsInternal['alias']]) }}">Chi tiết </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row panel-grid">
                    <h3 class="cat-title"><a href="{{ route('news',['tin-tuyen-dung']) }}">TUYỂN DỤNG</a></h3>
                    @foreach($recruitment as $newsRecruitment)
                    <div class="col-md-3 panel-grid-cell">
                        <div class="panel">
                            <div class="category-box">
                                <a href="{{ route('news', ['tin-tuyen-dung', $newsRecruitment['alias']]) }}" class="page-box__picture">
                                    <img width="360" height="240" src="{{ asset('uploads/images/'.$newsRecruitment['image']) }}" class="attachment-360x240 size-360x240 wp-post-image" alt="">
                                </a>

                                <div class="page-box__content">
                                    <h5 class="page-box__title  text-uppercase">
                                        <a href="{{ route('news', ['tin-tuyen-dung', $newsRecruitment['alias']]) }}">{{ $newsRecruitment['title'] }}</a>
                                    </h5>
                                    <div class="excerp"><p>{!! $newsRecruitment['note'] !!}</p>
                                    </div>
                                    <p>
                                        <a class="read-more read-more--page-box" href="{{ route('news', ['tin-tuyen-dung', $newsRecruitment['alias']]) }}">Chi tiết </a>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row panel-grid">
                    <h3 class="cat-title"><a href="{{ route('news', ['cap-nhat-tien-do-du-an']) }}">Cập nhật tiến độ dự án</a></h3>
                    @foreach($process as $item)
                    <div class="col-md-3 panel-grid-cell">
                        <div class="panel">
                            <div class="category-box">
                                <a href="{{ route('news', ['cap-nhat-tien-do-du-an', $item->alias]) }}" class="page-box__picture">
                                    <img width="360" height="240" src="{{ asset('uploads/images/'.$item['image']) }}" class="attachment-360x240 size-360x240 wp-post-image" alt=""> </a>

                                <div class="page-box__content">
                                    <h5 class="page-box__title  text-uppercase">
                                        <a href="{{ route('news', ['cap-nhat-tien-do-du-an', $item->alias]) }}">{{ $item['title'] }}</a>
                                    </h5>
                                    <div class="excerp"><p>{!! $item['note'] !!}</p>
                                    </div>
                                    <p>
                                        <a class="read-more  read-more--page-box" href="{{ route('news', ['cap-nhat-tien-do-du-an', $item->alias]) }}">Chi tiết </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div><!-- /container -->
    </div>

@endsection