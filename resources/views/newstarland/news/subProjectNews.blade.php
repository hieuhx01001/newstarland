@extends('layouts.newstarland.index')

@section('content')
    <div class="main-title">
        <div class="container">
            <h1 class="main-title__primary">{{ $categoryByAlias->name }}</h1>
        </div>
    </div>

    <div class="breadcrumbs " id="project-navigation-anchor">
        <div class="container">
            <!-- Breadcrumb NavXT 5.6.0 -->
            <span typeof="v:Breadcrumb">
                <a href="{{ route('index') }}" class="home">{{ $webName }}</a>
            </span> &gt;
            <span typeof="v:Breadcrumb">
                <a href="{{ route('listNews') }}" class="home">Tin tức</a>
            </span> &gt;
            <span typeof="v:Breadcrumb">
                <a href="{{ route('news', ['tin-tuc-du-an']) }}" class="home">Tin tức dự án</a>
            </span> &gt;
            <span typeof="v:Breadcrumb">
                <span property="v:title">{{ $categoryByAlias->name }}</span>
            </span>
        </div>
    </div>

    <!--block content-->
    <div class="master-container">
        <div class="container">
            <div class="row">
                <div class="row panel-grid">
                    <h3 class="cat-title">
                        <a href="{{ route('news', ['tin-tuc-du-an', $categoryByAlias->alias] ) }}">{{ $categoryByAlias->name }}</a>
                    </h3>
                    @foreach($listNews as $item)
                    <div class="col-md-3 panel-grid-cell">
                        <div class="panel">
                            <div class="category-box">
                                <a href="{{ route('news', [$categoryByAlias->alias, $item->alias]) }}" class="page-box__picture">
                                    <img width="360" height="240" src="{{ asset('uploads/images/'.$item['image']) }}" class="attachment-360x240 size-360x240 wp-post-image" alt="">
                                </a>

                                <div class="page-box__content">
                                    <h5 class="page-box__title  text-uppercase">
                                        <a href="{{ route('news', [$categoryByAlias->alias, $item->alias]) }}">{{ $item->title }}</a>
                                        </h5>
                                    <div class="excerp">
                                        {{ strip_tags($item->note ) }}
                                    </div>
                                    <p><a class="read-more  read-more--page-box" href="{{ route('news', [$categoryByAlias->alias, $item->alias]) }}">Chi tiết </a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach
                    <div class="col-xs-12">
                        <nav class="pagination  text-center">
                        </nav>            </div>
                </div>

            </div>
        </div><!-- /container -->
    </div>
@endsection