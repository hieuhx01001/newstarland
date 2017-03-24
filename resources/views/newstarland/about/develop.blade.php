@extends('layouts.newstarland.index')

@section('page-css')
<link type="text/css" rel="stylesheet" href="{{ asset('frontend/newstarland/css/style-social.css') }}" />
@endsection

@section('content')
    <div class="main-title">
        <div class="container">
            <h1 class="main-title__primary">Hình thành và phát triển</h1>
        </div>
    </div>
    <div class="breadcrumbs " id="project-navigation-anchor">
        <div class="container">
            <!-- Breadcrumb NavXT 5.6.0 -->
            <span typeof="v:Breadcrumb">
                <a href="{{ route('index') }}" class="home">{{ $webName }}</a>
            </span> &gt;
            <span typeof="v:Breadcrumb">
                <a href="{{ route('news', ['ve-chung-toi']) }}" property="v:title">Về chúng tôi</a>
            </span>	&gt;
            <span typeof="v:Breadcrumb">
                <span property="v:title">Hình thành và phát triển</span>
            </span>
        </div>
    </div>

    <!--block content-->
    <div class="master-container">
        <div class="container">
            <div class="row">

                <main class="col-xs-12  col-md-9  col-md-push-3" role="main">
                    {!! SiteHelpers::generateUrlSocial() !!}
                    <p style="color: #000;">
                        {!! $develop['note'] !!}
                    </p>
                    <div class="clearfix"></div>
                </main>

                <div class="col-xs-12  col-md-3  col-md-pull-9">
                    <div class="sidebar">
                        <div class="widget  widget_nav_menu  push-down-30">
                            <h4 class="sidebar__headings">Về chúng tôi</h4>
                            <div class="menu-du-an-menu-container">
                                <ul id="menu-du-an-menu" class="menu">
                                    <li id="menu-item-2486" class="menu-item menu-item-type-post_type menu-item-object-essential_grid menu-item-2486"><a href="{{ route('news', ['ve-chung-toi']) }}">Về chúng tôi</a></li>
                                    <li id="menu-item-2487" class="menu-item menu-item-type-post_type menu-item-object-essential_grid menu-item-2487"><a href="{{ route('news', ['thu-ngo']) }}">Thư ngỏ</a></li>
                                    <li id="menu-item-2485" class="menu-item menu-item-type-post_type menu-item-object-essential_grid menu-item-2485 current-menu-item"><a href="{{ route('news', ['hinh-thanh-va-phat-trien']) }}">Hình thành và phát triển</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('page-script')
    <script type="text/javascript" id="st_insights_js" src="http://w.sharethis.com/button/buttons.js?publisher=90d7901a-4bf9-4acd-967c-a770c0fc6756"></script>
@endsection