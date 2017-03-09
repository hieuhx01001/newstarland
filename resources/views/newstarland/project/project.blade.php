@extends('layouts.newstarland.index')

@section('content')
    <div class="main-title">
        <div class="container">
            <h1 class="main-title__primary">Biệt thự Hoa Lan</h1>
        </div>
    </div>

    <div class="breadcrumbs " id="project-navigation-anchor">
        <div class="container">
            <!-- Breadcrumb NavXT 5.6.0 -->
            <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Go to NEWSTARLAND - NGÔI SAO MỚI." href="http://newstarland.com/" class="home">NEWSTARLAND - NGÔI SAO MỚI</a></span> &gt; <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Go to the Vinhomes Riverside category archives." href="http://newstarland.com/vinhomes-riverside/" class="taxonomy category">Vinhomes Riverside</a></span> &gt; <span typeof="v:Breadcrumb"><span property="v:title">Biệt thự Hoa Lan</span></span>	</div>
    </div>

    <!--block content-->
    <div class="master-container">
        <div class="container">
            <div class="row">
                <h1 class="cat-title">Biệt thự Hoa Lan</h1>
                <div class="row panel-grid">
                    <div class="col-md-3 panel-grid-cell">
                        <div class="panel">
                            <div class="category-box">
                                <a href="{{ route('projects', ['1/project/detailProject']) }}" class="page-box__picture">
                                    <img width="360" height="240" src="http://placehold.it/360x240" class="attachment-360x240 size-360x240 wp-post-image" alt="">                            </a>

                                <div class="page-box__content">
                                    <h5 class="page-box__title  text-uppercase"> <a href="{{ route('projects', ['1/project/detailProject']) }}">VINHOMES RIVERSIDE CÔNG BỐ 3 GÓI CHÍNH SÁCH BÁN HÀNG ĐẶC BIỆT</a></h5>
                                    <div class="excerp"><p>Nhằm tối ưu hóa lợi ích cho khách hàng, từ 15/3/2016, Vinhomes Riverside áp dụng ba gói chính sách bán hàng đặc biệt ưu đãi, dành cho khách mua biệt thự tại khu đô thị này. Các gói chính sách được thiết kế ưu việt, đáp ứng nhu cầu chuyên biệt: để ở,&nbsp; đầu tư …</p>
                                    </div>
                                    <p><a class="read-more  read-more--page-box" href="{{ route('projects', ['1/project/detailProject']) }}">Chi tiết </a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 panel-grid-cell">
                        <div class="panel">
                            <div class="category-box">
                                <a href="#" class="page-box__picture">
                                    <img width="360" height="240" src="http://placehold.it/360x240" class="attachment-360x240 size-360x240 wp-post-image" alt="">                            </a>

                                <div class="page-box__content">
                                    <h5 class="page-box__title  text-uppercase"> <a href="http://newstarland.com/chinh-sach-ban-hang-biet-thu-vinhomes-riverside/">Chính sách bán hàng biệt thự Vinhomes Riverside</a></h5>
                                    <div class="excerp"><p>&nbsp; &nbsp; LIÊN HỆ ĐẠI LÝ PHÂN PHỐI CHÍNH THỨC: Công ty TNHH Phát Triển Thương Mại BĐS Newstarland VPMB:L1-R3, Vinhomes Royal City, 72A Nguyễn Trãi, Thanh Xuân, Hà Nội VPMN: 135/26 Nguyễn Hữu Cảnh, P.22, Q. Bình Thạnh, TP. HCM Website: http://newstarland.com/ Hotline: 0917.032.888</p>
                                    </div>
                                    <p><a class="read-more  read-more--page-box" href="http://newstarland.com/chinh-sach-ban-hang-biet-thu-vinhomes-riverside/">Chi tiết </a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 panel-grid-cell">
                        <div class="panel">
                            <div class="category-box">
                                <a href="#" class="page-box__picture">
                                    <img width="360" height="240" src="http://placehold.it/360x240" class="attachment-360x240 size-360x240 wp-post-image" alt="" sizes="(max-width: 360px) 100vw, 360px">                            </a>

                                <div class="page-box__content">
                                    <h5 class="page-box__title  text-uppercase"> <a href="http://newstarland.com/biet-thu-hoa-lan-noi-gan-ket-yeu-thuong/">Biệt thự Hoa Lan – nơi gắn kết yêu thương</a></h5>
                                    <div class="excerp"><p>Khu biệt thự Hoa Lan là nằm dọc trục đường Hoa Lan và tiếp giáp với dòng sông Đuống thơ mộng. Nếu bạn và gia đình thích một không gian riêng biệt, mật độ biệt thự không dày thì đây là một lựa chọn tốt Vào mùa hè, cư dân sinh sống tại khu vực …</p>
                                    </div>
                                    <p><a class="read-more  read-more--page-box" href="http://newstarland.com/biet-thu-hoa-lan-noi-gan-ket-yeu-thuong/">Chi tiết </a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xs-12">
                        <nav class="pagination  text-center">
                        </nav>            </div>
                </div>

            </div>
        </div><!-- /container -->
    </div>
@endsection