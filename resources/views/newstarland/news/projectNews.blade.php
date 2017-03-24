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
            {!! SiteHelpers::generateNewsProject() !!}
        </div><!-- /container -->
    </div>
@endsection