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
            {!! SiteHelpers::generateBreadcrumb($projects->category_id, 'projects') !!}
        </div>
    </div>

    <!--block content-->
    <div class="master-container">
        <div class="container">
            <div class="row">
                <main class="col-xs-12  col-md-9  col-md-push-3" role="main">
                    <article class="post-inner post-2167 essential_grid type-essential_grid status-publish has-post-thumbnail hentry essential_grid_category-ha-noi">
                        <a href="{{ route('projects', [$projects->alias]) }}">
                            <img width="848" height="480" src="{{ asset('uploads/images/'.$contentProject->image) }}" class="img-responsive wp-post-image" alt="">						</a>
                        <div class="meta-data">
                            <time datetime="2015-08-16T11:34:05+00:00" class="meta-data__date">{{ $contentProject->created }}</time>
                            <span class="meta-data__author">{{ ucwords($byUser->username) }}</span>
                        </div>
                        <h1 class="hentry__title">{{ $projects->name }}</h1>
                        <div class="hentry__content">
                            {!! $contentProject->note !!}
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
                                        @if($item->category_id == $contentProject->category_id)
                                            <li class="menu-item menu-item-type-post_type menu-item-object-essential_grid current-menu-item menu-item-2486"><a href="{{ $item->alias }}">{{ $item->name }}</a></li>
                                        @else
                                            <li class="menu-item menu-item-type-post_type menu-item-object-essential_grid menu-item-2487"><a href="{{ $item->alias }}">{{ $item->name }}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="related-posts">
                            <h4 class="sidebar__headings">Dự án liên quan</h4>
                            <ul>
                                {!! SiteHelpers::listProjectInvolve() !!}
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
