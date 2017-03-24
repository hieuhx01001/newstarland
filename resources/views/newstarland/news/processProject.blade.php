@extends('layouts.newstarland.index')

@section('content')
    <div class="main-title">
        <div class="container">
            <h1 class="main-title__primary">Cập Nhật Tiến Độ Dự Án</h1>
        </div>
    </div>

    <div class="breadcrumbs " id="project-navigation-anchor">
        <div class="container">
            <!-- Breadcrumb NavXT 5.6.0 -->
            <span typeof="v:Breadcrumb">
                <a href="{{ route('index') }}" class="home">{{ $webName }}</a>
            </span> &gt;
            <span typeof="v:Breadcrumb">
                <a href="{{ route('listNews') }}" class="taxonomy category">Tin tức</a>
            </span> &gt;
            <span typeof="v:Breadcrumb">
                <span property="v:title">Cập nhật tiến độ dự án</span>
            </span>
        </div>
    </div>

    <!--block content-->
    <div class="master-container">
        <div class="container">
            <div class="row">
                <h1 class="cat-title">Cập nhật tiến độ dự án</h1>
                <div class="row panel-grid">
                    @foreach($news as $key => $processNews)
                    <div class="col-md-3 panel-grid-cell">
                        <div class="panel">
                            <div class="category-box">
                                <a href="{{ route('news', ['cap-nhat-tien-do-du-an', $processNews['alias']]) }}" class="page-box__picture">
                                    <img width="360" height="240" style="width: auto; max-height: 180px" src="{{ asset('uploads/images/'.$processNews['image']) }}" class="attachment-360x240 size-360x240 wp-post-image" alt="">
                                </a>

                                <div class="page-box__content">
                                    <h5 class="page-box__title  text-uppercase">
                                        <a href="{{ route('news', ['cap-nhat-tien-do-du-an', $processNews['alias']]) }}">{{ $processNews['title'] }}</a>
                                    </h5>
                                    <div class="excerp">
                                        <p>{!! $processNews['note'] !!}</p>
                                    </div>
                                    <p><a class="read-more  read-more--page-box" href="{{ route('news', ['cap-nhat-tien-do-du-an', $processNews['alias']]) }}">Chi tiết </a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                        @if($key % 4 == 3)
                          <div class="clearfix"></div>
                        @endif
                    @endforeach
                </div>

            </div>
        </div><!-- /container -->
    </div>
@endsection