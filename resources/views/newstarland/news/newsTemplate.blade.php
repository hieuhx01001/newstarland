@extends('layouts.newstarland.index')

@section('title')
    {{ $news->name }}
@stop


@section('content')
    <div class="main-title">
        <div class="container">
            <h1 class="main-title__primary">{{ $news->name }}</h1>
        </div>
    </div>

    <div class="breadcrumbs " id="project-navigation-anchor">
        <div class="container">
            {!! SiteHelpers::generateBreadcrumb($news->category_id, 'news') !!}
        </div>
    </div>

    <!--block content-->
    <div class="master-container">
        <div class="container">
            <div class="row">
                <h1 class="cat-title">{{ $news->name }}</h1>
                <div class="row panel-grid">
                    @php
                    $i = 0;
                    @endphp
                    @foreach($newsData as $item)
                    <div class="col-md-3 panel-grid-cell">
                        <div class="panel">
                            <div class="category-box">
                                <a href="{{ route('news', [$news->alias, $item->alias]) }}" class="page-box__picture">
                                    <img width="360" height="240" style="width: 100%; max-height: 180px" src="{{ asset('uploads/images/'.$item['image']) }}" class="attachment-360x240 size-360x240 wp-post-image" alt="">
                                </a>

                                <div class="page-box__content">
                                    <h5 class="page-box__title  text-uppercase">
                                        <a href="{{ route('news', ['tin-noi-bo', $item['alias']]) }}">{{ $item['title'] }}</a>
                                    </h5>
                                    <div class="excerp">
                                        <p>{{ strip_tags($item['note']) }}</p>
                                    </div>
                                    <p><a class="read-more  read-more--page-box" href="{{ route('news', ['tin-noi-bo', $item['alias']]) }}">Chi tiết </a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    @php
                    $i++;
                    @endphp
                    @endforeach
                </div>
            </div>
        </div><!-- /container -->
        @if($i > 12)
        @include('layouts.newstarland.pagination', ['paging' => $newsData])
        @endif
    </div>
@endsection