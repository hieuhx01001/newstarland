@extends('layouts.newstarland.index')

@section('content')
    <div class="main-title" style="background-color: #f2f2f2; ">
        <div class="container">
            <h1 class="main-title__primary">Về chúng tôi</h1>
        </div>
    </div>
    <div class="breadcrumbs " id="project-navigation-anchor">
        <div class="container">
            <!-- Breadcrumb NavXT 5.6.0 -->
            <span typeof="v:Breadcrumb">
                <a href="{{ route('aboutUs') }}" class="home">{{ $webName }}</a>
            </span> &gt;
            <span typeof="v:Breadcrumb">
                <span property="v:title">Về chúng tôi</span>
            </span>
        </div>
    </div>
    <div class="master-container">
        <div class="container">
            <div class="row">
                <main class="col-xs-12  col-md-9  col-md-push-3" role="main">
                    <div class="row">
                        <div class="col-xs-12">
                            <article class="post-2440 page type-page status-publish hentry">
                                <div id="pl-2440">
                                    <div class="panel-grid" id="pg-2440-0">
                                        <div class="panel-grid-cell col-lg-4" id="pgc-2440-0-0">
                                            <div class="so-panel widget widget_pt_featured_page widget-featured-page panel-first-child panel-last-child" id="panel-2440-0-0-0" data-index="0">
                                                <div class="page-box page-box--block post-2442 page type-page status-publish has-post-thumbnail hentry">
                                                    <a class="page-box__picture" href="{{ route('letter') }}"><img width="360" height="219" src="{{ asset('uploads/images/'.$letter['image']) }}" class="attachment-page-box size-page-box wp-post-image" alt=""></a>
                                                    <div class="page-box__content">
                                                        <h5 class="page-box__title  text-uppercase">
                                                            <a href="{{ route('letter') }}">{{ $letter['title'] }}</a>
                                                        </h5>
                                                        @php
                                                         $letterEncode = str_limit($letter['note'], 800);
                                                        @endphp
                                                        {!! $letterEncode !!}
                                                        <p>
                                                            <a href="{{ route('letter') }}" class="read-more  read-more--page-box">Read more</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-grid-cell col-lg-4" id="pgc-2440-0-1">
                                            <div class="so-panel widget widget_pt_featured_page widget-featured-page panel-first-child panel-last-child" id="panel-2440-0-1-0" data-index="1">
                                                <div class="page-box page-box--block post-2445 page type-page status-publish has-post-thumbnail hentry">
                                                    <a class="page-box__picture" href="{{ route('develop') }}">
                                                        <img width="360" height="240" src="{{ asset('uploads/images/'.$develop['image']) }}" class="attachment-page-box size-page-box wp-post-image" alt="" sizes="(max-width: 360px) 100vw, 360px">
                                                    </a>
                                                    <div class="page-box__content">
                                                        <h5 class="page-box__title  text-uppercase">
                                                            <a href="{{ route('develop') }}">{{ $develop['title'] }}</a>
                                                        </h5>
                                                        @php
                                                        $developEncode = str_limit($develop['note'], 800);
                                                        @endphp
                                                        {!! $developEncode !!}
                                                        <p>
                                                            <a href="{{ route('develop') }}" class="read-more  read-more--page-box">Read more</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div><!-- /blogpost -->
                    </div>
                </main>

                <div class="col-xs-12  col-md-3  col-md-pull-9">
                    <div class="sidebar">
                    </div>
                </div>

            </div>
        </div><!-- /container -->
    </div>
@endsection