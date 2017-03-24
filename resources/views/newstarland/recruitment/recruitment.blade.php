@extends('layouts.newstarland.index')

@section('content')
    <div class="main-title">
        <div class="container">
            <h1 class="main-title__primary">TUYỂN DỤNG</h1>
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
                <span property="v:title">TUYỂN DỤNG</span>
            </span>
        </div>
    </div>
    <div class="master-container">
        <div class="container">
            <div class="row">
                <h1 class="cat-title">TUYỂN DỤNG</h1>
                <div class="row panel-grid">
                    @foreach($listNews as $news)
                    <div class="col-md-3 panel-grid-cell">
                        <div class="panel">
                            <div class="category-box">
                                <a href="{{ route('news', ['tin-tuyen-dung', $news['alias']]) }}" class="page-box__picture">
                                    <img width="360" height="240" src="{{ asset('uploads/images/'.$news['image']) }}" class="attachment-360x240 size-360x240 wp-post-image" alt=""></a>
                                <div class="page-box__content">
                                    <h5 class="page-box__title  text-uppercase"> <a href="{{ route('news', ['tin-tuyen-dung', $news['alias']]) }}">{{ $news['title'] }}</a></h5>
                                    <div class="excerp"><p>{!! $news['note'] !!}</p>
                                    </div>
                                    <p><a class="read-more  read-more--page-box" href="{{ route('news', ['tin-tuyen-dung', $news['alias']]) }}">Chi tiết </a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach
                    <div class="col-xs-12">
                        <nav class="pagination  text-center"></nav>
                    </div>
                </div>

            </div>
        </div><!-- /container -->
    </div>
@endsection