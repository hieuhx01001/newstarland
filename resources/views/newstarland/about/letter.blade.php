@extends('layouts.newstarland.index')

@section('content')
    <div class="main-title">
        <div class="container">
            <h1 class="main-title__primary">Thư ngỏ</h1>
        </div>
    </div>
    <div class="breadcrumbs " id="project-navigation-anchor">
        <div class="container">
            <!-- Breadcrumb NavXT 5.6.0 -->
            <span typeof="v:Breadcrumb">
                <a href="{{ route('index') }}" class="home">{{ $webName }}</a>
            </span> &gt;
            <span typeof="v:Breadcrumb">
                <a href="{{ route('aboutUs') }}" property="v:title">Về chúng tôi</a>
            </span>	&gt;
            <span typeof="v:Breadcrumb">
                <span property="v:title">Thư ngỏ</span>
            </span>
        </div>
    </div>

    <!--block content-->
    <div class="master-container">
        <div class="container">
            <div class="row">

                <main class="col-xs-12  col-md-9  col-md-push-3" role="main">
                    <p style="color: #000;">
                        {!! $letter['note'] !!}
                    </p>
                    <div class="clearfix"></div>
                </main>

                <div class="col-xs-12  col-md-3  col-md-pull-9">
                    <div class="sidebar">
                        <div class="widget  widget_nav_menu  push-down-30">
                            <h4 class="sidebar__headings">Về chúng tôi</h4>
                            <div class="menu-du-an-menu-container">
                                <ul id="menu-du-an-menu" class="menu">
                                    <li id="menu-item-2486" class="menu-item menu-item-type-post_type menu-item-object-essential_grid menu-item-2486"><a href="{{ route('aboutUs') }}">Về chúng tôi</a></li>
                                    <li id="menu-item-2487" class="menu-item menu-item-type-post_type menu-item-object-essential_grid menu-item-2487 current-menu-item"><a href="{{ route('letter') }}">Thư ngỏ</a></li>
                                    <li id="menu-item-2485" class="menu-item menu-item-type-post_type menu-item-object-essential_grid menu-item-2485"><a href="{{ route('develop') }}">Hình thành và phát triển</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection