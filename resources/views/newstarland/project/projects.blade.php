@extends('layouts.newstarland.index')

@section('content')
    <div class="main-title">
        <div class="container">
            <h1 class="main-title__primary">{{ $projects->name }}</h1>
        </div>
    </div>

    <div class="breadcrumbs " id="project-navigation-anchor">
        <div class="container">
            <!-- Breadcrumb NavXT 5.6.0 -->
            <span typeof="v:Breadcrumb">
                <a href="{{ route('index') }}" class="home">{{ $webName }}
                </a>
            </span> &gt;
            <span typeof="v:Breadcrumb">
                <a href="{{ route('projects', [$projectFather->alias]) }}" class="taxonomy category">{{ $projectFather->name }}</a>
            </span> &gt;
            <span typeof="v:Breadcrumb">
                <span property="v:title">{{ $projects->name }}</span>
            </span>
        </div>
    </div>

    <!--block content-->
    <div class="master-container">
        <div class="container">
            <div class="row">
                <h1 class="cat-title">{{ $projects->name }}</h1>
                <div class="row panel-grid">
                    @foreach($listChild as $child)
                        {!! SiteHelpers::getPageOfProjectChild($child->category_id) !!}
                    @endforeach
                    <div class="col-xs-12">
                        <nav class="pagination  text-center">
                        </nav>
                    </div>
                </div>

            </div>
        </div><!-- /container -->
    </div>
@endsection