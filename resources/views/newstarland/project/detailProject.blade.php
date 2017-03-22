@extends('layouts.newstarland.index')

@section('content')
    <div class="main-title" style="">
        <div class="container">
            <h2 class="main-title__primary">{{ $post->title }}</h2>
        </div>
    </div>
    <div class="breadcrumbs " id="project-navigation-anchor">
        <div class="container">
            <!-- Breadcrumb NavXT 5.6.0 -->
            <span typeof="v:Breadcrumb">
                <a href="{{ route('index') }}" class="home">{{ $webName }}</a>
            </span> &gt;
            <span typeof="v:Breadcrumb">
                <a href="#" class="taxonomy category">chua lam </a>
            </span> &gt;
            <span typeof="v:Breadcrumb">
                <a href="#" class="taxonomy category">chua lam</a>
            </span> &gt;
            <span typeof="v:Breadcrumb">
                <span property="v:title">chua lam</span>
            </span>
        </div>
    </div>
    <div class="master-container">
        <div class="container">
            <div class="row">
                <main class="col-xs-12  col-md-9  col-md-push-3" role="main">
                    <article class="post-inner post-5134 post type-post status-publish format-standard has-post-thumbnail hentry">
                        <a href="{{ route('projects', [$post->alias]) }}">
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
                                        <li class="menu-item menu-item-type-post_type menu-item-object-essential_grid menu-item-2487"><a href="{{ $item->alias }}">{{ $item->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="related-posts">
                        <h4 class="sidebar__headings">Tin liên quan</h4>
                        <ul>
                            <li id="post-7980" class="post-7980 post type-post status-publish format-standard has-post-thumbnail hentry category-du-an-vinhomes-riverside category-the-harmony category-tin-tuc-du-an category-vinhomes-riverside">
                                <a href="http://newstarland.com/gan-1000-chuyen-vien-kinh-doanh-tham-du-chuong-trinh-dao-tao-dinh-huong-vinhomes-riverside-the-harmony/">
                                    <img width="848" height="456" src="http://placehold.it/848x456" class="img-responsive wp-post-image" alt="">                </a>
                                <h3><a href="http://newstarland.com/gan-1000-chuyen-vien-kinh-doanh-tham-du-chuong-trinh-dao-tao-dinh-huong-vinhomes-riverside-the-harmony/" rel="bookmark" title="Gần 1000 chuyên viên kinh doanh tham dự chương trình đào tạo định hướng Vinhomes Riverside – The Harmony">Gần 1000 chuyên viên kinh doanh tham dự chương trình đào tạo định hướng Vinhomes Riverside – The Harmony</a></h3>
                            </li>
                            <li id="post-7975" class="post-7975 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc-du-an category-vinhomes-green-bay">
                                <a href="http://newstarland.com/vinhomes-green-bay-sap-ra-mat-toa-can-ho-dau-tien/">
                                    <img width="500" height="281" src="./VINHOMES RIVERSIDE CÔNG BỐ 3 GÓI CHÍNH SÁCH BÁN HÀNG ĐẶC BIỆT _ NEWSTARLAND - NGÔI SAO MỚI_files/g1.png" class="img-responsive wp-post-image" alt="" srcset="http://newstarland.com/wp-content/uploads/2017/02/g1.png 500w, http://newstarland.com/wp-content/uploads/2017/02/g1-300x169.png 300w" sizes="(max-width: 500px) 100vw, 500px">                </a>
                                <h3><a href="http://newstarland.com/vinhomes-green-bay-sap-ra-mat-toa-can-ho-dau-tien/" rel="bookmark" title="Vinhomes Green Bay sắp ra mắt tòa căn hộ đầu tiên">Vinhomes Green Bay sắp ra mắt tòa căn hộ đầu tiên</a></h3>
                            </li>
                            <li id="post-7964" class="post-7964 post type-post status-publish format-standard has-post-thumbnail hentry category-du-an-vinhomes-riverside category-the-harmony category-vinhomes-riverside">
                                <a href="http://newstarland.com/ra-mat-mo-hinh-biet-thu-mau-vinhomes-riverside-the-harmony/">
                                    <img width="848" height="480" src="./VINHOMES RIVERSIDE CÔNG BỐ 3 GÓI CHÍNH SÁCH BÁN HÀNG ĐẶC BIỆT _ NEWSTARLAND - NGÔI SAO MỚI_files/4-848x480.jpg" class="img-responsive wp-post-image" alt="">                </a>
                                <h3><a href="http://newstarland.com/ra-mat-mo-hinh-biet-thu-mau-vinhomes-riverside-the-harmony/" rel="bookmark" title="Ra mắt mô hình biệt thự mẫu Vinhomes Riverside – The Harmony">Ra mắt mô hình biệt thự mẫu Vinhomes Riverside – The Harmony</a></h3>
                            </li>
                            <li id="post-7941" class="post-7941 post type-post status-publish format-standard has-post-thumbnail hentry category-du-an-vinhomes-central-park category-du-an-vinhomes-golden-river category-du-an-vinhomes-metropolis category-du-an-vinhomes-riverside category-du-an-vinhomes-thang-long category-du-an-vinpearl-resort-villas category-tin-tuc-du-an category-vinhomes-golden-river category-vinhomes-thang-long">
                                <a href="http://newstarland.com/loc-vang-may-man-dau-nam-gianh-cho-khach-hang-mua-bds-vinhomes/">
                                    <img width="434" height="312" src="./VINHOMES RIVERSIDE CÔNG BỐ 3 GÓI CHÍNH SÁCH BÁN HÀNG ĐẶC BIỆT _ NEWSTARLAND - NGÔI SAO MỚI_files/vang-SJC.jpg" class="img-responsive wp-post-image" alt="" srcset="http://newstarland.com/wp-content/uploads/2017/02/vang-SJC.jpg 434w, http://newstarland.com/wp-content/uploads/2017/02/vang-SJC-300x216.jpg 300w" sizes="(max-width: 434px) 100vw, 434px">                </a>
                                <h3><a href="http://newstarland.com/loc-vang-may-man-dau-nam-gianh-cho-khach-hang-mua-bds-vinhomes/" rel="bookmark" title="Lộc vàng may mắn đầu năm giành cho khách hàng mua BĐS Vinhomes">Lộc vàng may mắn đầu năm giành cho khách hàng mua BĐS Vinhomes</a></h3>
                            </li>
                            <li id="post-7929" class="post-7929 post type-post status-publish format-standard has-post-thumbnail hentry category-du-an-vinhomes-thang-long category-tin-tuc-du-an">
                                <a href="http://newstarland.com/nha-vuon-biet-lap-5-vinhomes-gia-hap-dan-nhat-thi-truong-ha-noi-2/">
                                    <img width="848" height="480" src="./VINHOMES RIVERSIDE CÔNG BỐ 3 GÓI CHÍNH SÁCH BÁN HÀNG ĐẶC BIỆT _ NEWSTARLAND - NGÔI SAO MỚI_files/Cam-gate-848x480.jpg" class="img-responsive wp-post-image" alt="" srcset="http://newstarland.com/wp-content/uploads/2017/02/Cam-gate-848x480.jpg 848w, http://newstarland.com/wp-content/uploads/2017/02/Cam-gate-300x169.jpg 300w" sizes="(max-width: 848px) 100vw, 848px">                </a>
                                <h3><a href="http://newstarland.com/nha-vuon-biet-lap-5-vinhomes-gia-hap-dan-nhat-thi-truong-ha-noi-2/" rel="bookmark" title="Nhà vườn biệt lập 5* Vinhomes giá hấp dẫn nhất thị trường Hà Nội">Nhà vườn biệt lập 5* Vinhomes giá hấp dẫn nhất thị trường Hà Nội</a></h3>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection