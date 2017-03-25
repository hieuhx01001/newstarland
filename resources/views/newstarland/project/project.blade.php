@extends('layouts.newstarland.index')

@section('content')
    <div class="main-title">
        <div class="container">
            <h1 class="main-title__primary">{{ $projects->name }}</h1>
        </div>
    </div>

    <div class="breadcrumbs " id="project-navigation-anchor">
        <div class="container">
            {!! SiteHelpers::generateBreadcrumb($projects->category_id, 'projects') !!}
        </div>
    </div>

    <!--block content-->
    <div class="master-container">
        <div class="container">
            <div class="row">
                <h1 class="cat-title">{{ $projects->name }}</h1>
                <div class="row panel-grid">
                    @foreach($childPost as $post)
                    <div class="col-md-3 panel-grid-cell">
                        <div class="panel">
                            <div class="category-box">
                                <a href="{{ route('projects', [$projectCategory->alias, $post->alias]) }}" class="page-box__picture">
                                    <img width="360" height="240" src="{{ asset('uploads/images/'.$post->image) }}" class="attachment-360x240 size-360x240 wp-post-image" alt="">                            </a>

                                <div class="page-box__content">
                                    <h5 class="page-box__title  text-uppercase"> <a href="{{ route('projects', [$projectCategory->alias, $post->alias]) }}">{{ $post->title }}</a></h5>
                                    <div class="excerp">
                                        <p>{{ strip_tags($post->note) }}</p>
                                    </div>
                                    <p><a class="read-more  read-more--page-box" href="{{ route('projects', [$projectCategory->alias, $post->alias]) }}">Chi tiết </a></p>
                                </div>
                            </div>

                        </div>
                    </div>
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