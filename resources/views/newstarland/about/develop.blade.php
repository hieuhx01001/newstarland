@extends('layouts.newstarland.index')

@section('content')
    <div class="main-title">
        <div class="container">
            <h1 class="main-title__primary">Hình thành và phát triển</h1>
        </div>
    </div>
    <div class="breadcrumbs " id="project-navigation-anchor">
        <div class="container">
            <!-- Breadcrumb NavXT 5.6.0 -->
            <span typeof="v:Breadcrumb">
                <a rel="v:url" property="v:title" title="Go to NEWSTARLAND - NGÔI SAO MỚI." href="#" class="home">NEWSTARLAND - NGÔI SAO MỚI</a>
            </span> &gt;
            <span typeof="v:Breadcrumb">
                <a href="{{ route('aboutUs') }}" property="v:title">Về chúng tôi</a>
            </span>	&gt;
            <span typeof="v:Breadcrumb">
                <span property="v:title">Hình thành và phát triển</span>
            </span>
        </div>
    </div>

    <!--block content-->
    <div class="master-container">
        <div class="container">
            <div class="row">

                <main class="col-xs-12  col-md-9  col-md-push-3" role="main">
                    <p style="color: #000;">
                        <strong>Newstarland</strong>, xin gửi tới Quý khách hàng lời chúc tốt đẹp nhất. Kính chúc Quý khách hàng và gia đình sức khỏe, thành công trong sự nghiệp!

                        Thay mặt Công ty TNHH phát triển thương mại BĐS Newstarland, tôi xin được bày tỏ lòng cảm ơn sâu sắc nhất đến tất cả quý khách hàng, những người luôn yêu mến và quan tâm đối với Newstarland và các dịch vụ về tư vấn, môi giới bất động sản của chúng tôi.

                        Newstarland đã trải qua bao biến động, thăng trầm của thị trường bất động sản giàu tiềm năng nhưng cũng nhiều thử thách. Với chiến lược phù hợp cùng tư duy quản trị đúng đắn và tinh thần đoàn kết, nỗ lực của toàn công ty, Newstarland liên tục gặt hái những thành công và không ngừng phát triển.

                        Newstarland là đại lý chính thức của chủ đầu tư, tập đoàn Vingroup. Newstarland có đội ngũ nhân viên được đào tạo bài bản chuyên sâu từ các trường đạo học uy tín trong nước và ngoài nước có trình độ chuyên môn cao,  nhiều kinh nghiệm từ các dự án của Vinhomes như Vinhomes Times City, Vinhomes Royal City và Vinhomes Riverside.

                        Hệ thống tư vấn quản lý, kinh doanh, và môi giới bất động sản của Newstarland được  thiết lập và xây dựng theo tiêu chuẩn nghiêm ngặt của từng thị trường nhằm thúc đẩy sự hiệu quả, tính chuyên nghiệp cao, và sáng tạo trong mọi thời điểm và luôn không ngừng nâng cao chiến lược và kinh nghiệm để phù hợp với thị trường, phục vụ khách hàng tốt nhất để trở thành điểm tựa vững chắc cho khách hàng, trở thành thương hiệu có uy tín trên thị trường Việt Nam.

                        Phương châm hoạt động của Công ty chúng tôi là lấy Uy Tín là Thương Hiệu, là xây dựng mối quan hệ bền vững lâu dài với khách hàng bằng chính sự Uy Tín trong nghề nghiệp, sự chu đáo trong phục vụ khách hàng.

                        Newstarland đã và đang không ngừng hoàn thiện phát triển để đưa đến cho khách hàng những dịch vụ hoàn hảo nhất.

                        Newstarland kính chúc Quý khách hàng những lời chúc tốt đẹp nhất và vui mừng chào đón các bạn đến với Newstarland!
                    </p>
                    <div class="clearfix"></div>
                </main>

                <div class="col-xs-12  col-md-3  col-md-pull-9">
                    <div class="sidebar">
                        <div class="widget  widget_nav_menu  push-down-30">
                            <h4 class="sidebar__headings">Về chúng tôi</h4>
                            <div class="menu-du-an-menu-container">
                                <ul id="menu-du-an-menu" class="menu">
                                    <li id="menu-item-2486" class="menu-item menu-item-type-post_type menu-item-object-essential_grid current-menu-item menu-item-2486"><a href="http://newstarland.com/essential_grid/vinhomes-times-city/">Về chúng tôi</a></li>
                                    <li id="menu-item-2487" class="menu-item menu-item-type-post_type menu-item-object-essential_grid menu-item-2487"><a href="http://newstarland.com/essential_grid/vinhomes-royal-city/">Thư ngỏ</a></li>
                                    <li id="menu-item-2485" class="menu-item menu-item-type-post_type menu-item-object-essential_grid menu-item-2485"><a href="http://newstarland.com/essential_grid/vinhomes-riverside/">Hình thành và phát triển</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection