@extends('layouts.newstarland.index')

@section('page-css')
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/newstarland/css/index.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('frontend/newstarland/css/project.css') }}" />
@endsection

@section('content')
    <div class="main-title" style="background-color: #f2f2f2; ">
        <div class="container">
            <h1 class="main-title__primary">Dự án phân phối</h1>
        </div>
    </div>

    <div class="breadcrumbs " id="project-navigation-anchor">
        <div class="container">
            <!-- Breadcrumb NavXT 5.6.0 -->
            <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Go to NEWSTARLAND - NGÔI SAO MỚI." href="http://newstarland.com/" class="home">NEWSTARLAND - NGÔI SAO MỚI</a></span> &gt; <span typeof="v:Breadcrumb"><span property="v:title">Dự án phân phối</span></span>	</div>
    </div>

    <div class="master-container">
        <div class="container">
            <div class="row">
                <main class="col-xs-12" role="main">
                    <div class="row">


                        <div class="col-xs-12">
                            <article
                                    class="post-2435 page type-page status-publish hentry">
                                <div id="fsb-social-bar" class="fsb-social-bar"
                                     data-post-id="2435" data-socialite="true">
                                    <style type="text/css">            #fsb-social-bar {
                                            width: 100%;
                                            border-bottom: 1px solid #dbdbdb;
                                            border-top: 1px solid #dbdbdb;
                                            padding: 10px 0;
                                            margin: 0px 0 20px 0;
                                            float: left;
                                            background: #fff;
                                            position: relative;
                                            clear: both;
                                        }

                                        #fsb-social-bar a {
                                            border: 0px !important
                                        }

                                        #fsb-social-bar.fsb-fixed {
                                            position: fixed;
                                            top: -2px;
                                            z-index: 99999;
                                        }

                                        #fsb-social-bar .fsb-title {
                                            display: block;
                                            float: left;
                                            margin: 3px 20px 0 0;
                                            font-size: 16px;
                                            font-family: Arial, Helvetica, sans-serif;
                                            text-decoration: none;
                                            color: #333;
                                        }

                                        #fsb-social-bar .fsb-share-facebook {
                                            width: 120px;
                                            float: left;
                                            padding: 3px 0 2px;
                                            height: 25px;
                                        }

                                        #fsb-social-bar .fsb-share-facebook.fsb-hide-count {
                                            width: 44px;
                                            overflow: hidden;
                                            margin-right: 30px;
                                        }

                                        #fsb-social-bar .fsb-share-twitter {
                                            float: left;
                                            width: 135px;
                                            padding: 3px 0 2px;
                                            height: 25px;
                                        }

                                        #fsb-social-bar .fsb-share-twitter.fsb-hide-count {
                                            width: 61px;
                                            overflow: hidden;
                                            margin-right: 30px;
                                        }

                                        #fsb-social-bar .fsb-share-google {
                                            float: left;
                                            width: 105px;
                                            padding: 3px 0 2px;
                                            height: 25px;
                                        }

                                        #fsb-social-bar .fsb-share-google.fsb-hide-count {
                                            width: 33px;
                                            overflow: hidden;
                                            margin-right: 30px;
                                        }

                                        #fsb-social-bar .fsb-share-linkedin {
                                            float: left;
                                            width: 135px;
                                            padding: 3px 0 2px;
                                            height: 25px;
                                        }

                                        #fsb-social-bar .fsb-share-linkedin.fsb-hide-count {
                                            width: 61px;
                                            overflow: hidden;
                                            margin-right: 30px;
                                        }

                                        #fsb-social-bar .fsb-share-pinterest {
                                            float: left;
                                            width: 115px;
                                            padding: 3px 0 2px;
                                            height: 25px;
                                        }

                                        #fsb-social-bar .fsb-share-pinterest.fsb-hide-count {
                                            width: 43px;
                                            overflow: hidden;
                                            margin-right: 30px;
                                        }

                                        #fsb-social-bar .socialite {
                                            display: block;
                                            position: relative;
                                            background: url(http://newstarland.com/wp-content/plugins/floating-social-bar/images/fsb-sprite.png) no-repeat scroll 0 0;
                                        }

                                        #fsb-social-bar .socialite-loaded {
                                            background: none !important;
                                        }

                                        #fsb-social-bar .fsb-service-title {
                                            display: none;
                                        }

                                        #fsb-social-bar a {
                                            color: #333;
                                            text-decoration: none;
                                            font-size: 12px;
                                            font-family: Arial, Helvetica, sans-serif;
                                        }

                                        #fsb-social-bar .fsb-twitter {
                                            width: 105px;
                                            height: 25px;
                                            background-position: -13px -10px;
                                            line-height: 25px;
                                            vertical-align: middle;
                                        }

                                        #fsb-social-bar .fsb-twitter .fsb-count {
                                            width: 30px;
                                            text-align: center;
                                            display: inline-block;
                                            margin: 0px 0 0 69px;
                                            color: #333;
                                        }

                                        #fsb-social-bar .fsb-google {
                                            width: 75px;
                                            height: 25px;
                                            background-position: -136px -10px;
                                            line-height: 25px;
                                            vertical-align: middle;
                                        }

                                        #fsb-social-bar .fsb-google .fsb-count {
                                            width: 30px;
                                            text-align: center;
                                            display: inline-block;
                                            margin: 0px 0 0 41px;
                                            color: #333;
                                        }

                                        #fsb-social-bar .fsb-google .socialite-button {
                                            margin: 0 !important;
                                        }

                                        #fsb-social-bar .fsb-share-google .socialite-loaded .socialite-button {
                                            padding: 2px 0 0
                                        }

                                        #fsb-social-bar .fsb-facebook {
                                            width: 89px;
                                            height: 25px;
                                            background-position: -231px -10px;
                                            line-height: 25px;
                                            vertical-align: middle;
                                        }

                                        #fsb-social-bar .fsb-facebook .fsb-count {
                                            width: 30px;
                                            text-align: center;
                                            display: inline-block;
                                            margin: 0px 0 0 52px;
                                            color: #333;
                                        }

                                        #fsb-social-bar .fsb-facebook .socialite-button {
                                            margin: 0 !important;
                                        }

                                        #fsb-social-bar .fsb-share-facebook .socialite-loaded .socialite-button {
                                            padding: 2px 0 0
                                        }

                                        #fsb-social-bar .fsb-linkedin {
                                            width: 105px;
                                            height: 25px;
                                            background-position: -347px -10px;
                                            line-height: 25px;
                                            vertical-align: middle;
                                        }

                                        #fsb-social-bar .fsb-linkedin .fsb-count {
                                            width: 30px;
                                            text-align: center;
                                            display: inline-block;
                                            margin: 0px 0 0 70px;
                                            color: #333;
                                        }

                                        #fsb-social-bar .fsb-linkedin .socialite-button {
                                            margin: 0 !important;
                                        }

                                        #fsb-social-bar .fsb-pinterest {
                                            width: 88px;
                                            height: 25px;
                                            background-position: -484px -10px;
                                            line-height: 25px;
                                            vertical-align: middle;
                                        }

                                        #fsb-social-bar .fsb-pinterest .fsb-count {
                                            width: 30px;
                                            text-align: center;
                                            display: inline-block;
                                            margin: 0px 0 0 50px;
                                            color: #333;
                                        }

                                        #fsb-social-bar .fsb-pinterest .socialite-button {
                                            margin: 0 !important;
                                        }

                                        .fsb-clear {
                                            clear: both;
                                        }

                                        .fsb-clear:after {
                                            clear: both;
                                            content:;
                                            display: block;
                                            height: 0;
                                            line-height: 0;
                                            overflow: auto;
                                            visibility: hidden;
                                            zoom: 1;
                                        }

                                        @media (max-width: 768px) {
                                            #fsb-social-bar.fsb-fixed {
                                                position: relative !important;
                                                top: auto !important;
                                            }
                                        }        </style>
                                    <div class="fsb-share-facebook fsb-hide-count"><a
                                                href="http://www.facebook.com/sharer.php?u=http://newstarland.com/du-an-phan-phoi/"
                                                class="socialite facebook fsb-facebook"
                                                data-fsb-service="facebook"
                                                data-href="http://newstarland.com/du-an-phan-phoi/"
                                                data-send="false"
                                                data-layout="button_count"
                                                data-width="60" data-show-faces="false"
                                                rel="nofollow" target="_blank"><span
                                                    class="fsb-service-title">Facebook</span><span
                                                    class="fsb-count">0</span></a></div>
                                    <div class="fsb-share-twitter fsb-hide-count"><a
                                                href="https://twitter.com/share?original_referer=http%3A%2F%2Fnewstarland.com%2F&amp;source=tweetbutton&amp;text=D%E1%BB%B1+%C3%A1n+ph%C3%A2n+ph%E1%BB%91i&amp;url=http%3A%2F%2Fnewstarland.com%2Fdu-an-phan-phoi%2F&amp;via="
                                                class="socialite twitter fsb-twitter"
                                                data-fsb-service="twitter" rel="nofollow"
                                                target="_blank"
                                                title="Be the first one to tweet this article!"><span
                                                    class="fsb-service-title">Twitter</span><span
                                                    class="fsb-count">0</span></a></div>
                                    <div class="fsb-share-google fsb-hide-count"><a
                                                href="https://plus.google.com/share?url=http://newstarland.com/du-an-phan-phoi/"
                                                class="socialite googleplus fsb-google"
                                                data-fsb-service="google"
                                                data-size="medium"
                                                data-href="http://newstarland.com/du-an-phan-phoi/"
                                                rel="nofollow" target="_blank"><span
                                                    class="fsb-service-title">Google+</span><span
                                                    class="fsb-count">0</span></a></div>
                                    <div class="fsb-share-linkedin fsb-hide-count"><a
                                                href="https://www.linkedin.com/cws/share?url=http://newstarland.com/du-an-phan-phoi/"
                                                class="socialite linkedin fsb-linkedin"
                                                data-fsb-service="linkedin"
                                                data-size="medium"
                                                data-href="http://newstarland.com/du-an-phan-phoi/"
                                                rel="nofollow" target="_blank"><span
                                                    class="fsb-service-title">LinkedIn</span><span
                                                    class="fsb-count">0</span></a></div>
                                    <div class="fsb-share-pinterest fsb-hide-count">
                                        <a href="http://pinterest.com/pin/create/button/?url=http://newstarland.com/du-an-phan-phoi/&amp;description=D%E1%BB%B1+%C3%A1n+ph%C3%A2n+ph%E1%BB%91i&amp;media="
                                           class="socialite pinit fsb-pinterest"
                                           data-fsb-service="pinterest"
                                           target="_blank" rel="nofollow"><span
                                                    class="fsb-service-title">Pinterest</span><span
                                                    class="fsb-count">0</span></a></div>
                                </div>
                                <div class="fsb-clear"></div>
                                <style type="text/css">a.eg-henryharrison-element-1, a.eg-henryharrison-element-2 {
                                        -webkit-transition: all .4s linear;
                                        -moz-transition: all .4s linear;
                                        -o-transition: all .4s linear;
                                        -ms-transition: all .4s linear;
                                        transition: all .4s linear
                                    }

                                    .eg-jimmy-carter-element-11 i:before {
                                        margin-left: 0px;
                                        margin-right: 0px
                                    }

                                    .eg-harding-element-17 {
                                        letter-spacing: 1px
                                    }

                                    .eg-harding-wrapper .esg-entry-media {
                                        overflow: hidden;
                                        box-sizing: border-box;
                                        -webkit-box-sizing: border-box;
                                        -moz-box-sizing: border-box;
                                        padding: 30px 30px 0px 30px
                                    }

                                    .eg-harding-wrapper .esg-entry-media img {
                                        overflow: hidden;
                                        border-radius: 50%;
                                        -webkit-border-radius: 50%;
                                        -moz-border-radius: 50%
                                    }

                                    .eg-ulysses-s-grant-wrapper .esg-entry-media {
                                        overflow: hidden;
                                        box-sizing: border-box;
                                        -webkit-box-sizing: border-box;
                                        -moz-box-sizing: border-box;
                                        padding: 30px 30px 0px 30px
                                    }

                                    .eg-ulysses-s-grant-wrapper .esg-entry-media img {
                                        overflow: hidden;
                                        border-radius: 50%;
                                        -webkit-border-radius: 50%;
                                        -moz-border-radius: 50%
                                    }

                                    .eg-richard-nixon-wrapper .esg-entry-media {
                                        overflow: hidden;
                                        box-sizing: border-box;
                                        -webkit-box-sizing: border-box;
                                        -moz-box-sizing: border-box;
                                        padding: 30px 30px 0px 30px
                                    }

                                    .eg-richard-nixon-wrapper .esg-entry-media img {
                                        overflow: hidden;
                                        border-radius: 50%;
                                        -webkit-border-radius: 50%;
                                        -moz-border-radius: 50%
                                    }

                                    .eg-herbert-hoover-wrapper .esg-entry-media img {
                                        filter: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");
                                        filter: gray;
                                        -webkit-filter: grayscale(100%)
                                    }

                                    .eg-herbert-hoover-wrapper:hover .esg-entry-media img {
                                        filter: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");
                                        -webkit-filter: grayscale(0%)
                                    }

                                    .eg-lyndon-johnson-wrapper .esg-entry-media img {
                                        filter: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");
                                        filter: gray;
                                        -webkit-filter: grayscale(100%)
                                    }

                                    .eg-lyndon-johnson-wrapper:hover .esg-entry-media img {
                                        filter: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");
                                        -webkit-filter: grayscale(0%)
                                    }

                                    .esg-overlay.eg-ronald-reagan-container {
                                        background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                        background: -webkit-gradient(linear, left top, left bottom, color-stop(50%, rgba(0, 0, 0, 0)), color-stop(99%, rgba(0, 0, 0, 0.83)), color-stop(100%, rgba(0, 0, 0, 0.85)));
                                        background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                        background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                        background: -ms-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                        background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#d9000000', GradientType=0)
                                    }

                                    .eg-georgebush-wrapper .esg-entry-cover {
                                        background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                        background: -webkit-gradient(linear, left top, left bottom, color-stop(50%, rgba(0, 0, 0, 0)), color-stop(99%, rgba(0, 0, 0, 0.83)), color-stop(100%, rgba(0, 0, 0, 0.85)));
                                        background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                        background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                        background: -ms-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                        background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#d9000000', GradientType=0)
                                    }

                                    .eg-jefferson-wrapper {
                                        -webkit-border-radius: 5px !important;
                                        -moz-border-radius: 5px !important;
                                        border-radius: 5px !important;
                                        -webkit-mask-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA5JREFUeNpiYGBgAAgwAAAEAAGbA+oJAAAAAElFTkSuQmCC) !important
                                    }

                                    .eg-monroe-element-1 {
                                        text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1)
                                    }

                                    .eg-lyndon-johnson-wrapper .esg-entry-cover {
                                        background: -moz-radial-gradient(center, ellipse cover, rgba(0, 0, 0, 0.35) 0%, rgba(18, 18, 18, 0) 96%, rgba(19, 19, 19, 0) 100%);
                                        background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(0, 0, 0, 0.35)), color-stop(96%, rgba(18, 18, 18, 0)), color-stop(100%, rgba(19, 19, 19, 0)));
                                        background: -webkit-radial-gradient(center, ellipse cover, rgba(0, 0, 0, 0.35) 0%, rgba(18, 18, 18, 0) 96%, rgba(19, 19, 19, 0) 100%);
                                        background: -o-radial-gradient(center, ellipse cover, rgba(0, 0, 0, 0.35) 0%, rgba(18, 18, 18, 0) 96%, rgba(19, 19, 19, 0) 100%);
                                        background: -ms-radial-gradient(center, ellipse cover, rgba(0, 0, 0, 0.35) 0%, rgba(18, 18, 18, 0) 96%, rgba(19, 19, 19, 0) 100%);
                                        background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.35) 0%, rgba(18, 18, 18, 0) 96%, rgba(19, 19, 19, 0) 100%);
                                        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#59000000', endColorstr='#00131313', GradientType=1)
                                    }

                                    .eg-wilbert-wrapper .esg-entry-cover {
                                        background: -moz-radial-gradient(center, ellipse cover, rgba(0, 0, 0, 0.35) 0%, rgba(18, 18, 18, 0) 96%, rgba(19, 19, 19, 0) 100%);
                                        background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(0, 0, 0, 0.35)), color-stop(96%, rgba(18, 18, 18, 0)), color-stop(100%, rgba(19, 19, 19, 0)));
                                        background: -webkit-radial-gradient(center, ellipse cover, rgba(0, 0, 0, 0.35) 0%, rgba(18, 18, 18, 0) 96%, rgba(19, 19, 19, 0) 100%);
                                        background: -o-radial-gradient(center, ellipse cover, rgba(0, 0, 0, 0.35) 0%, rgba(18, 18, 18, 0) 96%, rgba(19, 19, 19, 0) 100%);
                                        background: -ms-radial-gradient(center, ellipse cover, rgba(0, 0, 0, 0.35) 0%, rgba(18, 18, 18, 0) 96%, rgba(19, 19, 19, 0) 100%);
                                        background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.35) 0%, rgba(18, 18, 18, 0) 96%, rgba(19, 19, 19, 0) 100%);
                                        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#59000000', endColorstr='#00131313', GradientType=1)
                                    }

                                    .eg-wilbert-wrapper .esg-entry-media img {
                                        -webkit-transition: 0.4s ease-in-out;
                                        -moz-transition: 0.4s ease-in-out;
                                        -o-transition: 0.4s ease-in-out;
                                        transition: 0.4s ease-in-out;
                                        filter: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");
                                        filter: gray;
                                        -webkit-filter: grayscale(100%)
                                    }

                                    .eg-wilbert-wrapper:hover .esg-entry-media img {
                                        filter: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");
                                        -webkit-filter: grayscale(0%)
                                    }

                                    .eg-phillie-element-3:after {
                                        content: " ";
                                        width: 0px;
                                        height: 0px;
                                        border-style: solid;
                                        border-width: 5px 5px 0 5px;
                                        border-color: #000 transparent transparent transparent;
                                        left: 50%;
                                        margin-left: -5px;
                                        bottom: -5px;
                                        position: absolute
                                    }

                                    .eg-howardtaft-wrapper .esg-entry-media img, .eg-howardtaft-wrapper .esg-media-poster {
                                        filter: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'/></filter></svg>#grayscale");
                                        -webkit-filter: grayscale(0%)
                                    }

                                    .eg-howardtaft-wrapper:hover .esg-entry-media img, .eg-howardtaft-wrapper:hover .esg-media-poster {
                                        filter: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");
                                        filter: gray;
                                        -webkit-filter: grayscale(100%)
                                    }

                                    .myportfolio-container .added_to_cart.wc-forward {
                                        font-family: "Open Sans";
                                        font-size: 13px;
                                        color: #fff;
                                        margin-top: 10px
                                    }

                                    .esgbox-title.esgbox-title-outside-wrap {
                                        font-size: 15px;
                                        font-weight: 700;
                                        text-align: center
                                    }

                                    .esgbox-title.esgbox-title-inside-wrap {
                                        padding-bottom: 10px;
                                        font-size: 15px;
                                        font-weight: 700;
                                        text-align: center
                                    }

                                    "rnrna.eg-henryharrison-element-1,rna.eg-henryharrison-element-2{rn -webkit-transition:all .4s linear; rn  -moz-transition:all .4s linear; rn  -o-transition:all .4s linear; rn  -ms-transition:all .4s linear; rn  transition:all .4s linear; rn}rnrnrn.eg-jimmy-carter-element-11 i:before{margin-left:0px; margin-right:0px}rnrnrnrn.eg-harding-element-17{letter-spacing:1px}rn.eg-harding-wrapper .esg-entry-media{overflow:hidden; rn   box-sizing:border-box;rn   -webkit-box-sizing:border-box;rn   -moz-box-sizing:border-box;rn   padding:30px 30px 0px 30px;rn}rnrn.eg-harding-wrapper .esg-entry-media img{overflow:hidden; rn   border-radius:50%;rn   -webkit-border-radius:50%;rn   -moz-border-radius:50%;rn}rnrnrn.eg-ulysses-s-grant-wrapper .esg-entry-media{overflow:hidden; rn   box-sizing:border-box;rn   -webkit-box-sizing:border-box;rn   -moz-box-sizing:border-box;rn   padding:30px 30px 0px 30px;rn}rnrn.eg-ulysses-s-grant-wrapper .esg-entry-media img{overflow:hidden; rn   border-radius:50%;rn   -webkit-border-radius:50%;rn   -moz-border-radius:50%;rn}rnrnrn.eg-richard-nixon-wrapper .esg-entry-media{overflow:hidden; rn   box-sizing:border-box;rn   -webkit-box-sizing:border-box;rn   -moz-box-sizing:border-box;rn   padding:30px 30px 0px 30px;rn}rnrn.eg-richard-nixon-wrapper .esg-entry-media img{overflow:hidden; rn   border-radius:50%;rn   -webkit-border-radius:50%;rn   -moz-border-radius:50%;rn}rnrnrnrn.eg-herbert-hoover-wrapper .esg-entry-media img{rn  filter:url("
                                    data:image

                                    /
                                    svg + xml

                                    ;
                                    utf8, u003Csvg xmlns

                                    =
                                    'http://www.w3.org/2000/svg'
                                    u003Eu003Cfilter id

                                    =
                                    'grayscale'
                                    u003Eu003CfeColorMatrix type

                                    =
                                    'matrix'
                                    values

                                    =
                                    '0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'
                                    /u003Eu003C/
                                    filteru003Eu003C

                                    /
                                    svgu003E#grayscale

                                    "); rn  filter:gray; rn  -webkit-filter:grayscale(100%); rn}rnrn.eg-herbert-hoover-wrapper:hover .esg-entry-media img{rn  filter:url("
                                    data:image

                                    /
                                    svg + xml

                                    ;
                                    utf8, u003Csvg xmlns

                                    =
                                    'http://www.w3.org/2000/svg'
                                    u003Eu003Cfilter id

                                    =
                                    'grayscale'
                                    u003Eu003CfeColorMatrix type

                                    =
                                    'matrix'
                                    values

                                    =
                                    '1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'
                                    /u003Eu003C/
                                    filteru003Eu003C

                                    /
                                    svgu003E#grayscale

                                    ");rn  -webkit-filter:grayscale(0%)}rnrnrnrn.eg-lyndon-johnson-wrapper .esg-entry-media img{rn  filter:url("
                                    data:image

                                    /
                                    svg + xml

                                    ;
                                    utf8, u003Csvg xmlns

                                    =
                                    'http://www.w3.org/2000/svg'
                                    u003Eu003Cfilter id

                                    =
                                    'grayscale'
                                    u003Eu003CfeColorMatrix type

                                    =
                                    'matrix'
                                    values

                                    =
                                    '0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'
                                    /u003Eu003C/
                                    filteru003Eu003C

                                    /
                                    svgu003E#grayscale

                                    "); rn  filter:gray; rn  -webkit-filter:grayscale(100%); rn}rnrn.eg-lyndon-johnson-wrapper:hover .esg-entry-media img{rn  filter:url("
                                    data:image

                                    /
                                    svg + xml

                                    ;
                                    utf8, u003Csvg xmlns

                                    =
                                    'http://www.w3.org/2000/svg'
                                    u003Eu003Cfilter id

                                    =
                                    'grayscale'
                                    u003Eu003CfeColorMatrix type

                                    =
                                    'matrix'
                                    values

                                    =
                                    '1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'
                                    /u003Eu003C/
                                    filteru003Eu003C

                                    /
                                    svgu003E#grayscale

                                    ");rn  -webkit-filter:grayscale(0%)}rnrnrnrn.esg-overlay.eg-ronald-reagan-container{background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); rnbackground:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); rnbackground:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); rnbackground:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); rnbackground:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); rnbackground:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); rnfilter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}rnrnrn.eg-georgebush-wrapper .esg-entry-cover{background:-moz-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); rnbackground:-webkit-gradient(linear,left top,left bottom,color-stop(50%,rgba(0,0,0,0)),color-stop(99%,rgba(0,0,0,0.83)),color-stop(100%,rgba(0,0,0,0.85))); rnbackground:-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); rnbackground:-o-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); rnbackground:-ms-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); rnbackground:linear-gradient(to bottom,rgba(0,0,0,0) 50%,rgba(0,0,0,0.83) 99%,rgba(0,0,0,0.85) 100%); rnfilter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000',endColorstr='#d9000000',GradientType=0 )}rnrnrnrnrn.eg-jefferson-wrapper{-webkit-border-radius:5px !important; -moz-border-radius:5px !important; border-radius:5px !important; -webkit-mask-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA5JREFUeNpiYGBgAAgwAAAEAAGbA+oJAAAAAElFTkSuQmCC) !important}rnrnrn.eg-monroe-element-1{text-shadow:0px 1px 3px rgba(0,0,0,0.1)}rnrnrn.eg-lyndon-johnson-wrapper .esg-entry-cover{background:-moz-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); rnbackground:-webkit-gradient(radial,center center,0px,center center,100%,color-stop(0%,rgba(0,0,0,0.35)),color-stop(96%,rgba(18,18,18,0)),color-stop(100%,rgba(19,19,19,0))); rnbackground:-webkit-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); rnbackground:-o-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); rnbackground:-ms-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); rnbackground:radial-gradient(ellipse at center,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); rnfilter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#59000000',endColorstr='#00131313',GradientType=1 ); rn}rnrnrn.eg-wilbert-wrapper .esg-entry-cover{background:-moz-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); rnbackground:-webkit-gradient(radial,center center,0px,center center,100%,color-stop(0%,rgba(0,0,0,0.35)),color-stop(96%,rgba(18,18,18,0)),color-stop(100%,rgba(19,19,19,0))); rnbackground:-webkit-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); rnbackground:-o-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); rnbackground:-ms-radial-gradient(center,ellipse cover,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); rnbackground:radial-gradient(ellipse at center,rgba(0,0,0,0.35) 0%,rgba(18,18,18,0) 96%,rgba(19,19,19,0) 100%); rnfilter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#59000000',endColorstr='#00131313',GradientType=1 ); rn}rn.eg-wilbert-wrapper .esg-entry-media img{rn -webkit-transition:0.4s ease-in-out;rn  -moz-transition:0.4s ease-in-out;rn  -o-transition:0.4s ease-in-out;rn  transition:0.4s ease-in-out;rn  filter:url("
                                    data:image

                                    /
                                    svg + xml

                                    ;
                                    utf8, u003Csvg xmlns

                                    =
                                    'http://www.w3.org/2000/svg'
                                    u003Eu003Cfilter id

                                    =
                                    'grayscale'
                                    u003Eu003CfeColorMatrix type

                                    =
                                    'matrix'
                                    values

                                    =
                                    '0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'
                                    /u003Eu003C/
                                    filteru003Eu003C

                                    /
                                    svgu003E#grayscale

                                    "); rn  filter:gray; rn  -webkit-filter:grayscale(100%); rn}rnrn.eg-wilbert-wrapper:hover .esg-entry-media img{rn  filter:url("
                                    data:image

                                    /
                                    svg + xml

                                    ;
                                    utf8, u003Csvg xmlns

                                    =
                                    'http://www.w3.org/2000/svg'
                                    u003Eu003Cfilter id

                                    =
                                    'grayscale'
                                    u003Eu003CfeColorMatrix type

                                    =
                                    'matrix'
                                    values

                                    =
                                    '1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'
                                    /u003Eu003C/
                                    filteru003Eu003C

                                    /
                                    svgu003E#grayscale

                                    ");rn  -webkit-filter:grayscale(0%)}rnrnrn.eg-phillie-element-3:after{rncontent:"
                                    ";rnwidth:0px;rnheight:0px;rnborder-style:solid;rnborder-width:5px 5px 0 5px;rnborder-color:#000 transparent transparent transparent;rnleft:50%;rnmargin-left:-5px; bottom:-5px; position:absolute}rnrnrn.eg-howardtaft-wrapper .esg-entry-media img,.eg-howardtaft-wrapper .esg-media-poster{rn  filter:url("
                                    data:image

                                    /
                                    svg + xml

                                    ;
                                    utf8, u003Csvg xmlns

                                    =
                                    'http://www.w3.org/2000/svg'
                                    u003Eu003Cfilter id

                                    =
                                    'grayscale'
                                    u003Eu003CfeColorMatrix type

                                    =
                                    'matrix'
                                    values

                                    =
                                    '1 0 0 0 0,0 1 0 0 0,0 0 1 0 0,0 0 0 1 0'
                                    /u003Eu003C/
                                    filteru003Eu003C

                                    /
                                    svgu003E#grayscale

                                    ");rn  -webkit-filter:grayscale(0%);rn}rnrn.eg-howardtaft-wrapper:hover .esg-entry-media img,.eg-howardtaft-wrapper:hover .esg-media-poster{rn  filter:url("
                                    data:image

                                    /
                                    svg + xml

                                    ;
                                    utf8, u003Csvg xmlns

                                    =
                                    'http://www.w3.org/2000/svg'
                                    u003Eu003Cfilter id

                                    =
                                    'grayscale'
                                    u003Eu003CfeColorMatrix type

                                    =
                                    'matrix'
                                    values

                                    =
                                    '0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'
                                    /u003Eu003C/
                                    filteru003Eu003C

                                    /
                                    svgu003E#grayscale

                                    "); rn  filter:gray; rn  -webkit-filter:grayscale(100%); rn}rnrnrn.myportfolio-container .added_to_cart.wc-forward{font-family:"
                                    Open Sans

                                    "; font-size:13px; color:#fff; margin-top:10px}rnrnrn.esgbox-title.esgbox-title-outside-wrap{font-size:15px; font-weight:700; text-align:center}rn.esgbox-title.esgbox-title-inside-wrap{padding-bottom:10px; font-size:15px; font-weight:700; text-align:center}"</style>
                                <!-- CACHE FOUND FOR: 1 -->
                                <style type="text/css">.buildpress .navigationbuttons, .buildpress .esg-pagination, .buildpress .esg-filters {
                                        text-transform: uppercase;
                                        text-align: center
                                    }

                                    .buildpress .esg-filterbutton, .buildpress .esg-navigationbutton, .buildpress .esg-sortbutton, .buildpress .esg-cartbutton {
                                        position: relative;
                                        color: #999999;
                                        cursor: pointer;
                                        z-index: 2;
                                        padding: 14px 30px;
                                        border: none;
                                        font-size: 12px;
                                        font-weight: 700;
                                        font-family: 'Montserrat', Helvetica, Arial, sans-serif;
                                        display: block
                                    }

                                    .buildpress .esg-navigationbutton {
                                        position: relative;
                                        padding: 12px 0;
                                        text-align: center;
                                        width: 50%;
                                        background-color: #333333
                                    }

                                    .buildpress .esg-navigationbutton.esg-right {
                                        z-index: 0;
                                        border-bottom-right-radius: 2px;
                                        -moz-border-bottom-right-radius: 2px;
                                        -webkit-border-bottom-right-radius: 2px;
                                        border-top-right-radius: 2px;
                                        -moz-border-top-right-radius: 2px;
                                        -webkit-border-top-right-radius: 2px
                                    }

                                    .buildpress .esg-navigationbutton.esg-left {
                                        border-bottom-left-radius: 2px;
                                        -moz-border-bottom-left-radius: 2px;
                                        -webkit-border-bottom-left-radius: 2px;
                                        border-top-left-radius: 2px;
                                        -moz-border-top-left-radius: 2px;
                                        -webkit-border-top-left-radius: 2px
                                    }

                                    .buildpress .esg-navigationbutton.esg-left::after {
                                        position: absolute;
                                        content: "";
                                        height: 48px;
                                        width: 1px;
                                        background-color: #454545;
                                        right: 0;
                                        top: -3px;
                                        transform: rotate(30deg);
                                        -moz-transform: rotate(30deg);
                                        -webkit-transform: rotate(30deg)
                                    }

                                    .buildpress .esg-navigationbutton * {
                                        color: #999999
                                    }

                                    .buildpress .esg-pagination-button:last-child {
                                        margin-right: 0
                                    }

                                    .buildpress .esg-sortbutton-wrapper, .buildpress .esg-cartbutton-wrapper {
                                        display: inline-block
                                    }

                                    .buildpress .esg-sortbutton-order, .buildpress .esg-cartbutton-order {
                                        display: inline-block;
                                        vertical-align: top;
                                        border: none;
                                        width: 40px;
                                        line-height: 40px;
                                        border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        -webkit-border-radius: 5px;
                                        font-size: 12px;
                                        font-weight: 700;
                                        color: #999;
                                        cursor: pointer;
                                        margin-left: 5px
                                    }

                                    .buildpress .esg-cartbutton {
                                        color: #fff;
                                        cursor: default !important
                                    }

                                    .buildpress .esg-cartbutton .esgicon-basket {
                                        color: #fff;
                                        font-size: 15px;
                                        line-height: 15px;
                                        margin-right: 10px
                                    }

                                    .buildpress .esg-cartbutton-wrapper {
                                        cursor: default !important
                                    }

                                    .buildpress .esg-sortbutton, .buildpress .esg-cartbutton {
                                        display: inline-block;
                                        position: relative;
                                        cursor: pointer;
                                        margin-right: 0px;
                                        border-radius: 5px;
                                        -moz-border-radius: 5px;
                                        -webkit-border-radius: 5px
                                    }

                                    .buildpress .esg-filterbutton:hover, .buildpress .esg-sortbutton:hover, .buildpress .esg-sortbutton-order:hover, .buildpress .esg-cartbutton-order:hover, .buildpress .esg-filterbutton.selected {
                                        color: #ffffff;
                                        background: #454545;
                                        transform: none;
                                        -moz-transform: none;
                                        -webkit-transform: none
                                    }

                                    .buildpress .esg-navigationbutton:hover span, .buildpress .esg-filterbutton:hover span, .buildpress .esg-sortbutton:hover span, .buildpress .esg-sortbutton-order:hover span, .buildpress .esg-cartbutton-order:hover span, .buildpress .esg-filterbutton.selected span {
                                        display: inline-block;
                                        transform: none;
                                        -moz-transform: none;
                                        -webkit-transform: none;
                                        border-bottom: 3px solid #f7c525;
                                        padding-bottom: 3px;
                                        padding-top: 6px
                                    }

                                    .buildpress .esg-navigationbutton span, .buildpress .esg-filterbutton span, .buildpress .esg-sortbutton span, .buildpress .esg-sortbutton-order span, .buildpress .esg-cartbutton-order span {
                                        display: inline-block;
                                        transform: none;
                                        -moz-transform: none;
                                        -webkit-transform: none;
                                        border-bottom: 3px solid transparent;
                                        padding-bottom: 3px;
                                        padding-top: 6px
                                    }

                                    .buildpress .esg-filterbutton:hover::after, .buildpress .esg-sortbutton:hover::after, .buildpress .esg-sortbutton-order:hover::after, .buildpress .esg-cartbutton-order:hover::after, .buildpress .esg-filterbutton.selected::after {
                                        display: none
                                    }

                                    .buildpress .esg-navigationbutton:hover * {
                                        color: #ffffff
                                    }

                                    .buildpress .esg-sortbutton-order.tp-desc:hover {
                                        color: #333
                                    }

                                    .buildpress .esg-filter-checked {
                                        padding: 1px 3px;
                                        color: #cbcbcb;
                                        background: #cbcbcb;
                                        margin-left: 7px;
                                        font-size: 9px;
                                        font-weight: 300;
                                        line-height: 9px;
                                        vertical-align: middle
                                    }

                                    .buildpress .esg-filterbutton.selected .esg-filter-checked, .buildpress .esg-filterbutton:hover .esg-filter-checked {
                                        padding: 1px 3px 1px 3px;
                                        color: #fff;
                                        background: #000;
                                        margin-left: 7px;
                                        font-size: 9px;
                                        font-weight: 300;
                                        line-height: 9px;
                                        vertical-align: middle
                                    }

                                    .buildpress .esg-filter-wrapper {
                                        background-color: #333333;
                                        width: 100%;
                                        border-bottom-left-radius: 2px;
                                        -moz-border-bottom-left-radius: 2px;
                                        -webkit-border-bottom-left-radius: 2px;
                                        border-bottom-right-radius: 2px;
                                        -moz-border-bottom-right-radius: 2px;
                                        -webkit-border-bottom-right-radius: 2px
                                    }

                                    @media (min-width: 992px) {
                                        .buildpress .esg-filterbutton::after, .buildpress .esg-sortbutton::after, .buildpress .esg-cartbutton::after {
                                            position: absolute;
                                            content: "";
                                            height: 66px;
                                            width: 1px;
                                            background-color: #454545;
                                            right: 0;
                                            top: -4px;
                                            transform: rotate(30deg);
                                            -moz-transform: rotate(30deg);
                                            -webkit-transform: rotate(30deg)
                                        }

                                        .buildpress .esg-filterbutton, .buildpress .esg-navigationbutton, .buildpress .esg-sortbutton, .buildpress .esg-cartbutton {
                                            display: inline-block
                                        }

                                        .buildpress .esg-navigationbutton:hover span, .buildpress .esg-filterbutton:hover span, .buildpress .esg-sortbutton:hover span, .buildpress .esg-sortbutton-order:hover span, .buildpress .esg-cartbutton-order:hover span, .buildpress .esg-filterbutton.selected span {
                                            transform: skewX(30deg);
                                            -moz-transform: skewX(30deg);
                                            -webkit-transform: skewX(30deg)
                                        }

                                        .buildpress .esg-filterbutton:hover, .buildpress .esg-sortbutton:hover, .buildpress .esg-sortbutton-order:hover, .buildpress .esg-cartbutton-order:hover, .buildpress .esg-filterbutton.selected {
                                            transform: skewX(-30deg);
                                            -moz-transform: skewX(-30deg);
                                            -webkit-transform: skewX(-30deg)
                                        }

                                        .buildpress .esg-navigationbutton {
                                            width: 80px
                                        }

                                        .buildpress .esg-filter-wrapper {
                                            text-align: center
                                        }
                                    }

                                    .buildpress .esg-pagination-button.selected {
                                        transform: none;
                                        -moz-transform: none;
                                        -webkit-transform: none
                                    }

                                    .buildpress .esg-pagination-button:hover {
                                        transform: none;
                                        -moz-transform: none;
                                        -webkit-transform: none
                                    }</style>
                                <!-- ESSENTIAL GRID SKIN CSS -->
                                <style type="text/css">.eg-buildpress-item-skin-element-1 {
                                        font-size: 16px;
                                        line-height: 24px;
                                        color: #ffffff;
                                        font-weight: 700;
                                        display: inline-block;
                                        float: none;
                                        clear: both;
                                        margin: 0px 0px 0px 0px;
                                        padding: 4px 12px 3px 12px;
                                        border-radius: 0px 0px 0px 0px;
                                        background-color: rgba(255, 255, 255, 0);
                                        position: relative;
                                        z-index: 2 !important;
                                        font-family: "Source Sans Pro", Helvetica, Arial, sans-serif;
                                        text-transform: capitalize
                                    }

                                    .eg-buildpress-item-skin-element-0 {
                                        font-size: 12px !important;
                                        line-height: 30px !important;
                                        color: #454545 !important;
                                        font-weight: 800 !important;
                                        padding: 3px 10px 2px 10px !important;
                                        border-radius: 2px 2px 2px 2px !important;
                                        background-color: rgba(247, 197, 30, 1.00) !important;
                                        z-index: 2 !important;
                                        display: block;
                                        font-family: "Source Sans Pro", Helvetica, Arial, sans-serif !important;
                                        text-transform: uppercase !important
                                    }</style>
                                <style type="text/css">.eg-buildpress-item-skin-element-0:hover {
                                        font-size: 12px !important;
                                        line-height: 30px !important;
                                        color: #333333 !important;
                                        font-weight: 800 !important;
                                        border-radius: 2px 2px 2px 2px !important;
                                        background-color: rgba(232, 185, 28, 1.00) !important;
                                        font-family: "Source Sans Pro", Helvetica, Arial, sans-serif !important;
                                        text-transform: uppercase !important
                                    }</style>
                                <style type="text/css">.eg-buildpress-item-skin-element-0-a {
                                        display: inline-block !important;
                                        float: none !important;
                                        clear: both !important;
                                        margin: 0px 0px 0px 0px !important;
                                        position: relative !important
                                    }</style>
                                <style type="text/css">.eg-buildpress-item-skin-container {
                                        background-color: rgba(10, 10, 10, 0.75)
                                    }</style>
                                <style type="text/css">.eg-buildpress-item-skin-content {
                                        background-color: #ffffff;
                                        padding: 0px 0px 0px 0px;
                                        border-width: 0px 0px 0px 0px;
                                        border-radius: 0px 0px 0px 0px;
                                        border-color: transparent;
                                        border-style: none;
                                        text-align: center
                                    }</style>
                                <style type="text/css">.esg-grid .mainul li.eg-buildpress-item-skin-wrapper {
                                        background-color: #ffffff;
                                        padding: 0px 0px 0px 0px;
                                        border-width: 0px 0px 0px 0px;
                                        border-radius: 2px 2px 2px 2px;
                                        border-color: #000000;
                                        border-style: none;
                                        overflow: hidden;
                                        -webkit-mask-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAA5JREFUeNpiYGBgAAgwAAAEAAGbA+oJAAAAAElFTkSuQmCC) !important
                                    }</style>
                                <!-- ESSENTIAL GRID END SKIN CSS -->

                                <style type="text/css"></style>
                                <!-- THE ESSENTIAL GRID 2.0.5 -->

                                <!-- GRID WRAPPER FOR CONTAINER SIZING - HERE YOU CAN SET THE CONTAINER SIZE AND CONTAINER SKIN -->
                                <article class="myportfolio-container buildpress"
                                         id="esg-grid-1-1-wrap"
                                         style="position: relative; z-index: 0; min-height: 100px; height: auto;">

                                    <!-- THE GRID ITSELF WITH FILTERS, PAGINATION, SORTING ETC... -->
                                    <div class="esg-container-fullscreen-forcer"
                                         style="position:relative;left:0px;top:0px;width:100%;height:auto;">
                                        <div id="esg-grid-1-1"
                                             class="esg-grid esg-layout-even esg-container"
                                             style="background-color: transparent; padding: 0px 0px 25px; box-sizing: border-box; display: block; visibility: inherit; opacity: 1;">
                                            <article
                                                    class="esg-filters esg-singlefilters"
                                                    style="margin-bottom: 30px; text-align: left; ">
                                                <!-- THE FILTERING, SORTING AND WOOCOMMERCE BUTTONS -->
                                                <!-- THE FILTER BUTTONS -->
                                                <div class="esg-filter-wrapper  esg-fgc-1"
                                                     style="margin-left: 0px; margin-right: 0px;">
                                                    <div class="esg-filterbutton selected esg-allfilter"
                                                         data-filter="filterall"
                                                         data-fid="-1"><span>Toàn quốc</span>
                                                    </div>
                                                    <div class="esg-filterbutton"
                                                         data-fid="86"
                                                         data-filter="filter-ha-noi">
                                                        <span>Hà Nội</span><span
                                                                class="esg-filter-checked"><i
                                                                    class="eg-icon-ok-1"></i></span>
                                                    </div>
                                                    <div class="esg-filterbutton"
                                                         data-fid="93"
                                                         data-filter="filter-hai-phong">
                                                        <span>Hải Phòng</span><span
                                                                class="esg-filter-checked"><i
                                                                    class="eg-icon-ok-1"></i></span>
                                                    </div>
                                                    <div class="esg-filterbutton"
                                                         data-fid="85"
                                                         data-filter="filter-da-nang">
                                                        <span>Đà Nẵng</span><span
                                                                class="esg-filter-checked"><i
                                                                    class="eg-icon-ok-1"></i></span>
                                                    </div>
                                                    <div class="esg-filterbutton"
                                                         data-fid="82"
                                                         data-filter="filter-nha-trang">
                                                        <span>Nha Trang</span><span
                                                                class="esg-filter-checked"><i
                                                                    class="eg-icon-ok-1"></i></span>
                                                    </div>
                                                    <div class="esg-filterbutton"
                                                         data-fid="81"
                                                         data-filter="filter-phu-quoc">
                                                        <span>Phú Quốc</span><span
                                                                class="esg-filter-checked"><i
                                                                    class="eg-icon-ok-1"></i></span>
                                                    </div>
                                                    <div class="esg-filterbutton"
                                                         data-fid="122"
                                                         data-filter="filter-tp-ho-chi-minh">
                                                        <span>Tp Hồ Chí Minh</span><span
                                                                class="esg-filter-checked"><i
                                                                    class="eg-icon-ok-1"></i></span>
                                                    </div>
                                                    <div class="eg-clearfix"></div>
                                                </div>
                                            </article>
                                            <div class="esg-clear-no-height"></div>
                                            <!-- ############################ -->
                                            <!-- THE GRID ITSELF WITH ENTRIES -->
                                            <!-- ############################ -->
                                            <div class="esg-overflowtrick"
                                                 style="width: 100%; height: 197px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.00083, 0, 0, 0, 1);">
                                                <ul class="mainul"
                                                    style="height: 197px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.00083, 0, 0, 0, 1);">
                                                    <!-- PORTFOLIO ITEM 45 -->
                                                    <li class="filterall filter-hai-phong eg-buildpress-item-skin-wrapper eg-post-id-2475 tp-esg-item itemtoshow esg-hovered isvisiblenow"
                                                        data-excerpt=""
                                                        style="opacity: 1; visibility: inherit; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.00083, 0, 0, 0.1, 0.999917); height: 197px; width: 263px; display: block; top: 0px; left: 0px; transform-origin: center center 0px;">
                                                        <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
                                                        <div class="esg-media-cover-wrapper">
                                                            <!-- THE MEDIA OF THE ENTRY -->
                                                            <div class="esg-entry-media-wrapper"
                                                                 style="width:100%;height:100%; overflow:hidden;position:relative;">
                                                                <div class="esg-entry-media">
                                                                    <img src="./Dự án phân phối _ NEWSTARLAND - NGÔI SAO MỚI_files/shophouse-360x240.jpg"
                                                                         data-lazysrc="http://newstarland.com/wp-content/uploads/2015/08/shophouse-360x240.jpg"
                                                                         alt=""
                                                                         style="top: 0%; left: -6.25%; width: auto; height: 101%; visibility: visible; display: block; position: absolute;"
                                                                         class="coverremoved">
                                                                </div>
                                                            </div>

                                                            <!-- THE CONTENT OF THE ENTRY -->
                                                            <div class="esg-entry-cover"
                                                                 style="transform-style: flat; height: 197px;">

                                                                <!-- THE COLORED OVERLAY -->
                                                                <div class="esg-overlay esg-fade eg-buildpress-item-skin-container"
                                                                     data-delay="0"
                                                                     style="visibility: hidden; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.001, 0, 0, -0.002, 1);"></div>

                                                                <div class="esg-cc eec"
                                                                     style="top: 63px;">
                                                                    <div class="esg-center eg-post-2475 eg-buildpress-item-skin-element-1 esg-flipdown"
                                                                         data-delay="0"
                                                                         style="visibility: hidden; opacity: 0; transform-origin: 50% 0% 0px; transform: matrix3d(1, 0, 0, 0, 0, 0, -1, 0.001, 0, 1, 0, 0, 0, 0, 0.001, 0.999999);">
                                                                        Vincom
                                                                        Shophouse Hải
                                                                        Phòng
                                                                    </div>
                                                                    <div class="esg-center eg-buildpress-item-skin-element-9 esg-none esg-clear"
                                                                         style="height: 5px; visibility: inherit; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.001, 0, 0, 0, 1);"></div>
                                                                    <div class="esg-center eg-post-2475 eg-buildpress-item-skin-element-0-a esg-slideup"
                                                                         data-delay="0"
                                                                         style="visibility: hidden; opacity: 0; transform-origin: 50% 50% 0px; transform: translate(0%, 50%) matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.001, 0, 0, 0, 1);">
                                                                        <a class="eg-buildpress-item-skin-element-0 eg-post-2475"
                                                                           href="http://newstarland.com/essential_grid/vincom-shophouse-hai-phong/"
                                                                           target="_self">View
                                                                            Project</a>
                                                                    </div>
                                                                    <div></div>
                                                                </div>


                                                            </div>
                                                            <!-- END OF THE CONTENT IN THE ENTRY -->
                                                        </div>
                                                        <!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

                                                    </li>
                                                    <!-- END OF PORTFOLIO ITEM -->
                                                    <!-- PORTFOLIO ITEM 45 -->
                                                    <li class="filterall filter-ha-noi eg-buildpress-item-skin-wrapper eg-post-id-2164 tp-esg-item itemtoshow esg-hovered isvisiblenow"
                                                        data-excerpt=""
                                                        style="opacity: 1; visibility: inherit; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.00083, 0, 0, 0.1, 0.999917); height: 197px; width: 263px; display: block; top: 0px; left: 293px; transform-origin: center center 0px;">
                                                        <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
                                                        <div class="esg-media-cover-wrapper">
                                                            <!-- THE MEDIA OF THE ENTRY -->
                                                            <div class="esg-entry-media-wrapper"
                                                                 style="width:100%;height:100%; overflow:hidden;position:relative;">
                                                                <div class="esg-entry-media">
                                                                    <img src="./Dự án phân phối _ NEWSTARLAND - NGÔI SAO MỚI_files/slide-banner-vinhomes-royal-city-360x240.jpg"
                                                                         data-lazysrc="http://newstarland.com/wp-content/uploads/2014/10/slide-banner-vinhomes-royal-city-360x240.jpg"
                                                                         alt=""
                                                                         style="top: 0%; left: -6.25%; width: auto; height: 101%; visibility: visible; display: block; position: absolute;"
                                                                         class="coverremoved">
                                                                </div>
                                                            </div>

                                                            <!-- THE CONTENT OF THE ENTRY -->
                                                            <div class="esg-entry-cover"
                                                                 style="transform-style: flat; height: 197px;">

                                                                <!-- THE COLORED OVERLAY -->
                                                                <div class="esg-overlay esg-fade eg-buildpress-item-skin-container"
                                                                     data-delay="0"
                                                                     style="visibility: hidden; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.001, 0, 0, -0.002, 1);"></div>

                                                                <div class="esg-cc eec"
                                                                     style="top: 63px;">
                                                                    <div class="esg-center eg-post-2164 eg-buildpress-item-skin-element-1 esg-flipdown"
                                                                         data-delay="0"
                                                                         style="visibility: hidden; opacity: 0; transform-origin: 50% 0% 0px; transform: matrix3d(1, 0, 0, 0, 0, 0, -1, 0.001, 0, 1, 0, 0, 0, 0, 0.001, 0.999999);">
                                                                        Vinhomes
                                                                        Royal City
                                                                    </div>
                                                                    <div class="esg-center eg-buildpress-item-skin-element-9 esg-none esg-clear"
                                                                         style="height: 5px; visibility: inherit; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.001, 0, 0, 0, 1);"></div>
                                                                    <div class="esg-center eg-post-2164 eg-buildpress-item-skin-element-0-a esg-slideup"
                                                                         data-delay="0"
                                                                         style="visibility: hidden; opacity: 0; transform-origin: 50% 50% 0px; transform: translate(0%, 50%) matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.001, 0, 0, 0, 1);">
                                                                        <a class="eg-buildpress-item-skin-element-0 eg-post-2164"
                                                                           href="http://newstarland.com/essential_grid/vinhomes-royal-city/"
                                                                           target="_self">View
                                                                            Project</a>
                                                                    </div>
                                                                    <div></div>
                                                                </div>


                                                            </div>
                                                            <!-- END OF THE CONTENT IN THE ENTRY -->
                                                        </div>
                                                        <!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

                                                    </li>
                                                    <!-- END OF PORTFOLIO ITEM -->
                                                    <!-- PORTFOLIO ITEM 45 -->
                                                    <li class="filterall filter-ha-noi eg-buildpress-item-skin-wrapper eg-post-id-2167 tp-esg-item itemtoshow isvisiblenow"
                                                        data-excerpt=""
                                                        style="opacity: 1; visibility: inherit; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.00083, 0, 0, 0.1, 0.999917); height: 197px; width: 263px; display: block; top: 0px; left: 586px; transform-origin: center center 0px;">
                                                        <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
                                                        <div class="esg-media-cover-wrapper">
                                                            <!-- THE MEDIA OF THE ENTRY -->
                                                            <div class="esg-entry-media-wrapper"
                                                                 style="width:100%;height:100%; overflow:hidden;position:relative;">
                                                                <div class="esg-entry-media">
                                                                    <img src="./Dự án phân phối _ NEWSTARLAND - NGÔI SAO MỚI_files/parkhill-360x240.jpg"
                                                                         data-lazysrc="http://newstarland.com/wp-content/uploads/2015/08/parkhill-360x240.jpg"
                                                                         alt=""
                                                                         style="top: 0%; left: -6.25%; width: auto; height: 101%; visibility: visible; display: block; position: absolute;"
                                                                         class="coverremoved">
                                                                </div>
                                                            </div>

                                                            <!-- THE CONTENT OF THE ENTRY -->
                                                            <div class="esg-entry-cover"
                                                                 style="transform-style: flat; height: 197px;">

                                                                <!-- THE COLORED OVERLAY -->
                                                                <div class="esg-overlay esg-fade eg-buildpress-item-skin-container"
                                                                     data-delay="0"
                                                                     style="visibility: hidden; opacity: 0; transform-style: flat; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.00083, 0, 0, 0, 1);"></div>

                                                                <div class="esg-cc eec"
                                                                     style="top: 63px;">
                                                                    <div class="esg-center eg-post-2167 eg-buildpress-item-skin-element-1 esg-flipdown"
                                                                         data-delay="0"
                                                                         style="visibility: hidden; opacity: 0; transform-origin: 50% 0% 0px; transform-style: flat; transform: matrix3d(1, 0, 0, 0, 0, 0, -1, 0.00083, 0, 1, 0, 0, 0, 0, 0, 1);">
                                                                        Vinhomes
                                                                        Times City
                                                                    </div>
                                                                    <div class="esg-center eg-buildpress-item-skin-element-9 esg-none esg-clear"
                                                                         style="height: 5px; visibility: inherit; opacity: 1; transform-style: flat; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.00083, 0, 0, 1, 0.999167);"></div>
                                                                    <div class="esg-center eg-post-2167 eg-buildpress-item-skin-element-0-a esg-slideup"
                                                                         data-delay="0"
                                                                         style="visibility: hidden; opacity: 0; transform-origin: 50% 50% 0px; transform-style: flat; transform: translate(0%, 50%) matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.00083, 0, 0, 0, 1);">
                                                                        <a class="eg-buildpress-item-skin-element-0 eg-post-2167"
                                                                           href="http://newstarland.com/essential_grid/vinhomes-times-city/"
                                                                           target="_self">View
                                                                            Project</a>
                                                                    </div>
                                                                    <div></div>
                                                                </div>


                                                            </div>
                                                            <!-- END OF THE CONTENT IN THE ENTRY -->
                                                        </div>
                                                        <!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

                                                    </li>
                                                    <!-- END OF PORTFOLIO ITEM -->
                                                    <!-- PORTFOLIO ITEM 45 -->
                                                    <li class="filterall filter-ha-noi eg-buildpress-item-skin-wrapper eg-post-id-2169 tp-esg-item itemtoshow esg-hovered isvisiblenow"
                                                        data-excerpt=""
                                                        style="opacity: 1; visibility: inherit; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.00083, 0, 0, 0.1, 0.999917); height: 197px; width: 263px; display: block; top: 0px; left: 879px; transform-origin: center center 0px;">
                                                        <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
                                                        <div class="esg-media-cover-wrapper">
                                                            <!-- THE MEDIA OF THE ENTRY -->
                                                            <div class="esg-entry-media-wrapper"
                                                                 style="width:100%;height:100%; overflow:hidden;position:relative;">
                                                                <div class="esg-entry-media">
                                                                    <img src="./Dự án phân phối _ NEWSTARLAND - NGÔI SAO MỚI_files/vinhomesriverside-360x240.jpg"
                                                                         data-lazysrc="http://newstarland.com/wp-content/uploads/2015/08/vinhomesriverside-360x240.jpg"
                                                                         alt=""
                                                                         style="top: 0%; left: -6.25%; width: auto; height: 101%; visibility: visible; display: block; position: absolute;"
                                                                         class="coverremoved">
                                                                </div>
                                                            </div>

                                                            <!-- THE CONTENT OF THE ENTRY -->
                                                            <div class="esg-entry-cover"
                                                                 style="transform-style: flat; height: 197px;">

                                                                <!-- THE COLORED OVERLAY -->
                                                                <div class="esg-overlay esg-fade eg-buildpress-item-skin-container"
                                                                     data-delay="0"
                                                                     style="visibility: hidden; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.001, 0, 0, -0.002, 1);"></div>

                                                                <div class="esg-cc eec"
                                                                     style="top: 63px;">
                                                                    <div class="esg-center eg-post-2169 eg-buildpress-item-skin-element-1 esg-flipdown"
                                                                         data-delay="0"
                                                                         style="visibility: hidden; opacity: 0; transform-origin: 50% 0% 0px; transform: matrix3d(1, 0, 0, 0, 0, 0, -1, 0.001, 0, 1, 0, 0, 0, 0, 0.001, 0.999999);">
                                                                        Vinhomes
                                                                        Riverside
                                                                    </div>
                                                                    <div class="esg-center eg-buildpress-item-skin-element-9 esg-none esg-clear"
                                                                         style="height: 5px; visibility: inherit; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.001, 0, 0, 0, 1);"></div>
                                                                    <div class="esg-center eg-post-2169 eg-buildpress-item-skin-element-0-a esg-slideup"
                                                                         data-delay="0"
                                                                         style="visibility: hidden; opacity: 0; transform-origin: 50% 50% 0px; transform: translate(0%, 50%) matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.001, 0, 0, 0, 1);">
                                                                        <a class="eg-buildpress-item-skin-element-0 eg-post-2169"
                                                                           href="http://newstarland.com/essential_grid/vinhomes-riverside/"
                                                                           target="_self">View
                                                                            Project</a>
                                                                    </div>
                                                                    <div></div>
                                                                </div>


                                                            </div>
                                                            <!-- END OF THE CONTENT IN THE ENTRY -->
                                                        </div>
                                                        <!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

                                                    </li>
                                                    <!-- END OF PORTFOLIO ITEM -->
                                                    <!-- PORTFOLIO ITEM 45 -->
                                                    <li class="filterall filter-da-nang filter-nha-trang filter-phu-quoc eg-buildpress-item-skin-wrapper eg-post-id-2171 tp-esg-item itemonotherpage fitsinfilter esg-hovered"
                                                        data-excerpt=""
                                                        style="opacity: 0; visibility: hidden; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.00083, 0, 0, 0.01, 0.999992);">
                                                        <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
                                                        <div class="esg-media-cover-wrapper">
                                                            <!-- THE MEDIA OF THE ENTRY -->
                                                            <div class="esg-entry-media-wrapper"
                                                                 style="width:100%;height:100%; overflow:hidden;position:relative;">
                                                                <div class="esg-entry-media">
                                                                    <img src="./Dự án phân phối _ NEWSTARLAND - NGÔI SAO MỚI_files/300x200transparent.png"
                                                                         data-lazysrc="http://newstarland.com/wp-content/uploads/2014/10/slide-banner-vinpearl-premium-360x240.jpg"
                                                                         alt=""
                                                                         style="top: 0px; left: 0px; width: 100%; height: auto; visibility: visible; display: block;">
                                                                </div>
                                                            </div>

                                                            <!-- THE CONTENT OF THE ENTRY -->
                                                            <div class="esg-entry-cover"
                                                                 style="transform-style: flat;">

                                                                <!-- THE COLORED OVERLAY -->
                                                                <div class="esg-overlay esg-fade eg-buildpress-item-skin-container"
                                                                     data-delay="0"
                                                                     style="visibility: hidden; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.001, 0, 0, -0.002, 1);"></div>

                                                                <div class="esg-cc eec">
                                                                    <div class="esg-center eg-post-2171 eg-buildpress-item-skin-element-1 esg-flipdown"
                                                                         data-delay="0"
                                                                         style="visibility: hidden; opacity: 0; transform-origin: 50% 0% 0px; transform: matrix3d(1, 0, 0, 0, 0, 0, -1, 0.001, 0, 1, 0, 0, 0, 0, 0.001, 0.999999);">
                                                                        Vinpearl
                                                                        Resort &amp;
                                                                        Villas
                                                                    </div>
                                                                    <div class="esg-center eg-buildpress-item-skin-element-9 esg-none esg-clear"
                                                                         style="height: 5px; visibility: inherit; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.001, 0, 0, 0, 1);"></div>
                                                                    <div class="esg-center eg-post-2171 eg-buildpress-item-skin-element-0-a esg-slideup"
                                                                         data-delay="0"
                                                                         style="visibility: hidden; opacity: 0; transform-origin: 50% 50% 0px; transform: translate(0%, 50%) matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.001, 0, 0, 0, 1);">
                                                                        <a class="eg-buildpress-item-skin-element-0 eg-post-2171"
                                                                           href="http://newstarland.com/essential_grid/vinpearl-resort-villas/"
                                                                           target="_self">View
                                                                            Project</a>
                                                                    </div>
                                                                    <div></div>
                                                                </div>


                                                            </div>
                                                            <!-- END OF THE CONTENT IN THE ENTRY -->
                                                        </div>
                                                        <!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

                                                    </li>
                                                    <!-- END OF PORTFOLIO ITEM -->
                                                    <!-- PORTFOLIO ITEM 45 -->
                                                    <li class="filterall filter-tp-ho-chi-minh eg-buildpress-item-skin-wrapper eg-post-id-3200 tp-esg-item itemonotherpage fitsinfilter esg-hovered"
                                                        data-excerpt=""
                                                        style="opacity: 0; visibility: hidden; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.00083, 0, 0, 0.01, 0.999992);">
                                                        <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
                                                        <div class="esg-media-cover-wrapper">
                                                            <!-- THE MEDIA OF THE ENTRY -->
                                                            <div class="esg-entry-media-wrapper"
                                                                 style="width:100%;height:100%; overflow:hidden;position:relative;">
                                                                <div class="esg-entry-media">
                                                                    <img src="./Dự án phân phối _ NEWSTARLAND - NGÔI SAO MỚI_files/300x200transparent.png"
                                                                         data-lazysrc="http://newstarland.com/wp-content/uploads/2015/09/11986513_676351775833469_1926452232560230068_n-360x240.jpg"
                                                                         alt=""
                                                                         style="top: 0px; left: 0px; width: 100%; height: auto; visibility: visible; display: block;">
                                                                </div>
                                                            </div>

                                                            <!-- THE CONTENT OF THE ENTRY -->
                                                            <div class="esg-entry-cover"
                                                                 style="transform-style: flat;">

                                                                <!-- THE COLORED OVERLAY -->
                                                                <div class="esg-overlay esg-fade eg-buildpress-item-skin-container"
                                                                     data-delay="0"
                                                                     style="visibility: hidden; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.001, 0, 0, -0.002, 1);"></div>

                                                                <div class="esg-cc eec">
                                                                    <div class="esg-center eg-post-3200 eg-buildpress-item-skin-element-1 esg-flipdown"
                                                                         data-delay="0"
                                                                         style="visibility: hidden; opacity: 0; transform-origin: 50% 0% 0px; transform: matrix3d(1, 0, 0, 0, 0, 0, -1, 0.001, 0, 1, 0, 0, 0, 0, 0.001, 0.999999);">
                                                                        Vinhomes
                                                                        Central Park
                                                                    </div>
                                                                    <div class="esg-center eg-buildpress-item-skin-element-9 esg-none esg-clear"
                                                                         style="height: 5px; visibility: inherit; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.001, 0, 0, 0, 1);"></div>
                                                                    <div class="esg-center eg-post-3200 eg-buildpress-item-skin-element-0-a esg-slideup"
                                                                         data-delay="0"
                                                                         style="visibility: hidden; opacity: 0; transform-origin: 50% 50% 0px; transform: translate(0%, 50%) matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.001, 0, 0, 0, 1);">
                                                                        <a class="eg-buildpress-item-skin-element-0 eg-post-3200"
                                                                           href="http://newstarland.com/essential_grid/vinhomes-central-park/"
                                                                           target="_self">View
                                                                            Project</a>
                                                                    </div>
                                                                    <div></div>
                                                                </div>


                                                            </div>
                                                            <!-- END OF THE CONTENT IN THE ENTRY -->
                                                        </div>
                                                        <!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->

                                                    </li>
                                                    <!-- END OF PORTFOLIO ITEM -->
                                                </ul>
                                            </div>
                                            <!-- ############################ -->
                                            <!--      END OF THE GRID         -->
                                            <!-- ############################ -->
                                            <article
                                                    class="esg-filters esg-singlefilters"
                                                    style="margin-top: 30px; text-align: center; ">
                                                <div class="esg-navigationbutton esg-left  esg-fgc-1"
                                                     style="display: inline-block; margin-left: 0px !important; margin-right: 0px !important; visibility: visible;">
                                                    <i class="eg-icon-left-open"></i>
                                                </div>
                                                <div class="esg-navigationbutton esg-right  esg-fgc-1"
                                                     style="display: inline-block; margin-left: 0px !important; margin-right: 0px !important; visibility: visible;">
                                                    <i class="eg-icon-right-open"></i>
                                                </div>
                                            </article>
                                            <div class="esg-clear-no-height"></div>
                                        </div>
                                    </div><!-- END OF THE GRID -->

                                    <div class="esg-loader spinner3"
                                         style="visibility: hidden; opacity: 0;">
                                        <div class="dot1"
                                             style="background-color: rgb(255, 255, 255);"></div>
                                        <div class="dot2"
                                             style="background-color: rgb(255, 255, 255);"></div>
                                        <div class="bounce1"
                                             style="background-color: rgb(255, 255, 255);"></div>
                                        <div class="bounce2"
                                             style="background-color: rgb(255, 255, 255);"></div>
                                        <div class="bounce3"
                                             style="background-color: rgb(255, 255, 255);"></div>
                                    </div>
                                    <div class="esg-relative-placeholder"
                                         style="width:100%;height:auto"></div>
                                </article>
                                <!-- END OF THE GRID WRAPPER -->

                                <div class="clear"></div>

                            </article>
                        </div><!-- /blogpost -->


                    </div>
                </main>


            </div>
        </div><!-- /container -->
    </div>
@stop
