@extends('layouts.newstarland.index')

@section('title')
    {{ $post->title }}
@stop

@section('content')
    <div class="main-title" style="">
        <div class="container">
            <h2 class="main-title__primary">{{ $post->title }}</h2>
        </div>
    </div>
    <div class="breadcrumbs " id="project-navigation-anchor">
        <div class="container">
            {!! SiteHelpers::generateBreadcrumb($post->category_id, 'projects', $post->title) !!}
        </div>
    </div>
    <div class="master-container">
        <div class="container">
            <div class="row">
                <main class="col-xs-12  col-md-9  col-md-push-3" role="main">
                    <article class="post-inner post-5134 post type-post status-publish format-standard has-post-thumbnail hentry">
                        <a href="{{ route('projects', [$postCategory->alias, $post->alias]) }}">
                            <img width="848" height="480" src="{{ asset('uploads/images/'.$post->image) }}" class="img-responsive wp-post-image" alt="">
                        </a>
                        <div class="meta-data">
                            <time datetime="2016-03-23T11:53:22+00:00" class="meta-data__date">{{ $post->created }}</time>
                            <span class="meta-data__author">{{ ucwords($byUser->username) }}</span>
                        </div>
                        <h1 class="hentry__title">{{ $post->title }}</h1>
                        <div class="hentry__content">
                            {!! $post->note !!}
                        </div>
                        <div class="clearfix"></div>
                    </article>


                </main>

                <div class="col-xs-12  col-md-3  col-md-pull-9">
                    <div class="sidebar">
                        <div class="widget  widget_nav_menu  push-down-30">
                            <h4 class="sidebar__headings">Dự án phân phối</h4>
                            <div class="menu-du-an-menu-container">
                                <ul id="menu-du-an-menu" class="menu">
                                    @foreach($listProjectFather as $item)
                                        <li class="menu-item menu-item-type-post_type menu-item-object-essential_grid menu-item-2487"><a href="{{ route('projects', [$item->alias]) }}">{{ $item->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="related-posts">
                        <h4 class="sidebar__headings">Tin liên quan</h4>
                        <ul>
                            @foreach($postLike as $item)
                            <li id="post-7980" class="post-7980 post type-post status-publish format-standard has-post-thumbnail hentry">
                                <a href="{{ route('projects', [$postCategory->alias, $item->alias]) }}">
                                    <img width="848" height="456" src="{{ asset('uploads/images/'.$item->image) }}" class="img-responsive wp-post-image" alt="">
                                </a>
                                <h3>
                                    <a href="{{ route('projects', [$postCategory->alias, $item->alias]) }}" >{{ $item->title }}</a>
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