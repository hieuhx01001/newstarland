@extends('layouts.newstarland.index')

@section('content')
    <div class="main-title" style="">
        <div class="container">
            <h2 class="main-title__primary">{{ $newsDetail['title'] }}</h2>
        </div>
    </div>
    <div class="breadcrumbs " id="project-navigation-anchor">
        <div class="container">
            <!-- Breadcrumb NavXT 5.6.0 -->
            <span typeof="v:Breadcrumb">
                <a  href="{{ route('index') }}" class="home">{{ $webName }}</a>
            </span> &gt;
            <span typeof="v:Breadcrumb">
                <a href="{{ route('listNews') }}" class="taxonomy category">Tin tức</a>
            </span> &gt;
            <span typeof="v:Breadcrumb">
                <a href="{{ route('news',['tin-tuc-noi-bo']) }}" class="taxonomy category">Tin nội bộ</a>
            </span> &gt;
            <span typeof="v:Breadcrumb">
                <span property="v:title">{{ $newsDetail['title'] }}</span>
            </span>
            <!-- breadcrumbs -->

        </div>
    </div>
    <div class="master-container">
        <div class="container">
            <div class="row">
                <main class="col-xs-12  col-md-9  col-md-push-3" role="main">
                    <article>
                        <a href="{{ route('news', ['tin-tuc-noi-bo', $newsDetail['alias']]) }}">
                            <img width="848" height="480" src="{{ asset('uploads/images/'.$newsDetail['image']) }}" class="img-responsive wp-post-image" alt="">
                        </a>
                        <div class="meta-data">
                            <time datetime="2016-03-23T11:53:22+00:00" class="meta-data__date">{{ $newsDetail['created'] }}</time>
                            <span class="meta-data__author">{{ ucwords($byUser) }}</span>
                        </div>
                        <h1 class="hentry__title">{{ $newsDetail['title'] }}</h1>
                        <div class="hentry__content">
                            {!! $newsDetail['note'] !!}
                        </div>
                        <div class="clearfix"></div>
                    </article>
                </main>

                <div class="col-xs-12  col-md-3  col-md-pull-9">
                    <div class="sidebar">
                        <div class="widget  widget_nav_menu  push-down-30">
                            <h4 class="sidebar__headings">Về chúng tôi</h4>
                            <div class="menu-about-us-container">
                                <ul id="menu-about-us" class="menu">
                                    <li id="menu-item-2777" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2777">
                                        <a href="{{ route('news', ['ve-chung-toi']) }}">Về chúng tôi</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-2779" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2779">
                                                <a href="{{ route('news', ['hinh-thanh-va-phat-trien']) }}">Hình thành và phát triển</a></li>
                                            <li id="menu-item-2780"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2780">
                                                <a href="{{ route('news', ['thu-ngo']) }}">Thư ngỏ</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="related-posts"><h4 class="sidebar__headings">Tin liên quan</h4>
                            <ul>
                                @foreach($news as $internalNews)
                                <li id="post-5298" class="post-5298 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc category-tin-tuyen-dung">
                                    <a href="{{ route('news', ['tin-tuc-noi-bo', $internalNews['alias']]) }}">
                                        <img width="848" height="480" src="{{ asset('uploads/images/'.$internalNews['image']) }}" class="img-responsive wp-post-image" alt="">
                                    </a>
                                    <h3>
                                        <a href="{{ route('news', ['tin-tuc-noi-bo', $internalNews['alias']]) }}">{{ $internalNews['title'] }}</a>
                                    </h3>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection