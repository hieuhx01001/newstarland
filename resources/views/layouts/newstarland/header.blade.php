<header class="header">
    <div class="container">
        <div class="logo">
            <a href="{{ route('index') }}">
                <img src="{{ asset('frontend/newstarland/images/logo.png') }}" alt="NEWSTARLAND - NGÔI SAO MỚI" class="img-responsive" width="200" height="46">
            </a>
        </div>

        <div class="header-widgets  header-widgets-desktop">
            <div class="widget  widget-icon-box">
                <div class="icon-box">
                    <i class="fa  fa-phone  fa-3x"></i>
                    <div class="icon-box__text">
                        <h4 class="icon-box__title">0946.355.655 - 0917.032.888</h4>
                        <span class="icon-box__subtitle">info@newstarland.com</span>
                    </div>
                </div>
            </div>
            <div class="widget  widget-icon-box">
                <div class="icon-box">
                    <i class="fa  fa-home  fa-3x"></i>
                    <div class="icon-box__text">
                        <h4 class="icon-box__title">CÔNG TY TNHH PHÁT TRIỂN THƯƠNG MẠI BĐS NEWSTARLAND</h4>
                        <span class="icon-box__subtitle">Tầng 1, tòa D - Vinaconex 1, HN | Tầng 1, The Manor 2, 91 Nguyễn Hữu Cảnh, HCM</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Toggle Button for Mobile Navigation -->

        <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="#buildpress-navbar-collapse">

            <span class="navbar-toggle__text">MENU</span>

				<span class="navbar-toggle__icon-bar">

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

				</span>
        </button>


    </div>

    <div class="sticky-offset  js-sticky-offset"></div>

    <div class="container">

        <div class="navigation">

            <div class="collapse  navbar-collapse" id="buildpress-navbar-collapse">
                <ul id="menu-main-menu" class="navigation--main  js-dropdown">
                    <li id="menu-item-2152" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item menu-item-2152">
                        <a href="{{ route('index') }}">HOME</a>
                    </li>
                    <li id="menu-item-2439" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2439">
                        <a href="{{ route('list-project') }}">
                            DỰ ÁN PHÂN PHỐI
                        </a>
                        <ul class="sub-menu">
                            <li id="menu-item-2481"
                                class="menu-item menu-item-type-post_type menu-item-object-essential_grid menu-item-has-children menu-item-2481">
                                <a href="{{ route('projects', ['1']) }}">Vinhomes Times City</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-3218"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3218">
                                        <a href="{{ route('projects', ['1/project']) }}">Park 1 – Park Hill</a></li>
                                    <li id="menu-item-2508"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2508">
                                        <a href="#">Park
                                            2 – Park Hill</a></li>
                                    <li id="menu-item-2929"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2929">
                                        <a href="#">Park
                                            3 – Park Hill</a></li>
                                    <li id="menu-item-2509"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2509">
                                        <a href="#">Park
                                            6 – Park Hill</a></li>
                                    <li id="menu-item-2879"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2879">
                                        <a href="#">Park
                                            7 – Park 8</a></li>
                                    <li id="menu-item-3008"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3008">
                                        <a href="#">T10
                                            – Times City</a></li>
                                    <li id="menu-item-3812"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-3812">
                                        <a href="#">Park
                                            Hill Premium</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-3916"
                                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3916">
                                                <a href="#">Park
                                                    9 – Park Hill Premium</a>
                                            </li>
                                            <li id="menu-item-5033"
                                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5033">
                                                <a href="#">Park
                                                    10 – Park Hill Premium</a>
                                            </li>
                                            <li id="menu-item-4366"
                                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4366">
                                                <a href="#">Park
                                                    11- Park Hill Premium</a>
                                            </li>
                                            <li id="menu-item-4933"
                                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4933">
                                                <a href="#">Park
                                                    12 – Park Hill Premium</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-2556"
                                        class="menu-item menu-item-type-post_type menu-item-object-post menu-item-2556">
                                        <a href="#">Chính
                                            sách bán hàng</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-2482"
                                class="menu-item menu-item-type-post_type menu-item-object-essential_grid menu-item-has-children menu-item-2482">
                                <a href="#">Vinhomes
                                    Royal City</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-2961"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2961">
                                        <a href="#">R1
                                            – Royal City</a></li>
                                    <li id="menu-item-2962"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2962">
                                        <a href="#">R2
                                            – Royal City</a></li>
                                    <li id="menu-item-2506"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2506">
                                        <a href="#">R3
                                            – Royal City</a></li>
                                    <li id="menu-item-2507"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2507">
                                        <a href="#">R4
                                            – Royal City</a></li>
                                    <li id="menu-item-2963"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2963">
                                        <a href="#">R5
                                            – Royal City</a></li>
                                    <li id="menu-item-2964"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2964">
                                        <a href="#">R6
                                            – Royal City</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-2480"
                                class="menu-item menu-item-type-post_type menu-item-object-essential_grid menu-item-has-children menu-item-2480">
                                <a href="#">Vinhomes
                                    Riverside</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-2504"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2504">
                                        <a href="#">Biệt
                                            thự Hoa Lan</a></li>
                                    <li id="menu-item-2505"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2505">
                                        <a href="#">Biệt
                                            thự Hoa Sữa</a></li>
                                    <li id="menu-item-2977"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2977">
                                        <a href="#">Biệt
                                            thự Hoa Anh Đào</a></li>
                                    <li id="menu-item-2978"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2978">
                                        <a href="#">Biệt
                                            thự Hoa Bằng Lăng</a></li>
                                    <li id="menu-item-2979"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2979">
                                        <a href="#">Biệt
                                            thự Hoa Phượng</a></li>
                                    <li id="menu-item-7602"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7602">
                                        <a href="#">The
                                            Harmony</a></li>
                                    <li id="menu-item-2613"
                                        class="menu-item menu-item-type-post_type menu-item-object-post menu-item-2613">
                                        <a href="#">Chính
                                            sách bán hàng</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-2479"
                                class="menu-item menu-item-type-post_type menu-item-object-essential_grid menu-item-has-children menu-item-2479">
                                <a href="#">Vinpearl
                                    Resort &amp; Villas</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-2510"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2510">
                                        <a href="#">Đà
                                            Nẵng Resort &amp; Villas</a></li>
                                    <li id="menu-item-2511"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2511">
                                        <a href="#">Nha
                                            Trang Bay Resort &amp; Villas</a>
                                    </li>
                                    <li id="menu-item-2512"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2512">
                                        <a href="#">Golf
                                            Land Resort &amp; Villas</a></li>
                                    <li id="menu-item-2513"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2513">
                                        <a href="#">Phú
                                            Quốc Villas</a></li>
                                    <li id="menu-item-4567"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4567">
                                        <a href="#">Vinpearl
                                            Empire Condotel</a></li>
                                    <li id="menu-item-4942"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4942">
                                        <a href="#">Vinpearl
                                            Long Beach Villas (Bãi Dài – Nha
                                            Trang)</a></li>
                                    <li id="menu-item-5153"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5153">
                                        <a href="#">Vinpearl
                                            Riverfront Condotel (Đà Nẵng)</a>
                                    </li>
                                    <li id="menu-item-5388"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5388">
                                        <a href="#">Vinpearl
                                            Luxury Villas (Nha Trang)</a></li>
                                    <li id="menu-item-5398"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5398">
                                        <a href="#">Vinpearl
                                            Nha Trang Villas (Bãi Trũ – Nha
                                            Trang)</a></li>
                                    <li id="menu-item-5416"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5416">
                                        <a href="#">Vinpearl
                                            Beachfront Condotel (Trần Phú – Nha
                                            Trang)</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-2478"
                                class="menu-item menu-item-type-post_type menu-item-object-essential_grid menu-item-2478">
                                <a href="#">Vincom
                                    Shophouse Hải Phòng</a></li>
                            <li id="menu-item-3201"
                                class="menu-item menu-item-type-post_type menu-item-object-essential_grid menu-item-has-children menu-item-3201">
                                <a href="#">Vinhomes
                                    Central Park</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-4272"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4272">
                                        <a href="#">Landmark
                                            3</a></li>
                                    <li id="menu-item-4271"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4271">
                                        <a href="#">Landmark
                                            6</a></li>
                                    <li id="menu-item-4538"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4538">
                                        <a href="#">Landmark
                                            Plus</a></li>
                                    <li id="menu-item-4946"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4946">
                                        <a href="#">Park
                                            Paroma (Park 4)</a></li>
                                    <li id="menu-item-5516"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5516">
                                        <a href="#">Park
                                            5</a></li>
                                    <li id="menu-item-5517"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5517">
                                        <a href="#">Park
                                            6</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-5173"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5173">
                                <a href="#">Vinhomes
                                    Golden River</a></li>
                            <li id="menu-item-5342"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5342">
                                <a href="#">Vinhomes
                                    Metropolis</a></li>
                            <li id="menu-item-5471"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5471">
                                <a href="#">Vinhomes
                                    Thăng Long</a></li>
                            <li id="menu-item-7504"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7504">
                                <a href="#">Vinhomes
                                    Green Bay</a></li>
                            <li id="menu-item-7606"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7606">
                                <a href="#">D’.Capitale</a>
                            </li>
                        </ul>
                    </li>
                    <li id="menu-item-2462"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2462">
                        <a href="{{ route('aboutUs') }}">VỀ CHÚNG TÔI</a>
                        <ul class="sub-menu">
                            <li id="menu-item-2465"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2465">
                                <a href="{{ route('letter') }}">Thư ngỏ</a></li>
                            <li id="menu-item-2464"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2464">
                                <a href="{{ route('develop') }}">Hình thành và phát triển</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-2432"
                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-2432">
                        <a href="{{ route('news.project') }}">TIN TỨC</a>
                        <ul class="sub-menu">
                            <li id="menu-item-2457"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-2457">
                                <a href="{{ route('news.project') }}">Tin tức dự án</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-6445"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6445">
                                        <a href="#">Dự
                                            án D’.Capitale</a></li>
                                    <li id="menu-item-2458"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2458">
                                        <a href="#">Dự
                                            án Vinhomes Royal City</a></li>
                                    <li id="menu-item-2459"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2459">
                                        <a href="#">Dự
                                            án Vinhomes Times City</a></li>
                                    <li id="menu-item-2460"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2460">
                                        <a href="#">Dự
                                            án Vinpearl Resort &amp; Villas</a>
                                    </li>
                                    <li id="menu-item-2466"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2466">
                                        <a href="#">Dự
                                            án Vinhomes Riverside</a></li>
                                    <li id="menu-item-3204"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3204">
                                        <a href="#">Dự
                                            án Vinhomes Central Park</a></li>
                                    <li id="menu-item-5175"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5175">
                                        <a href="#">Dự
                                            án Vinhomes Golden River</a></li>
                                    <li id="menu-item-6005"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6005">
                                        <a href="#">Dự
                                            án Vinhomes Thăng Long</a></li>
                                    <li id="menu-item-5343"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-5343">
                                        <a href="#">Dự
                                            án Vinhomes Metropolis</a></li>
                                    <li id="menu-item-7502"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7502">
                                        <a href="#">Vinhomes
                                            Green Bay</a></li>
                                    <li id="menu-item-7548"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7548">
                                        <a href="#">Tin
                                            tức Vincity</a></li>
                                    <li id="menu-item-2782"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2782">
                                        <a href="#">Dự
                                            án Vingroup khác</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-6172"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6172">
                                <a href="#">Cập nhật tiến độ dự án</a>
                                <a href="#">Tin nội bộ</a>
                            </li>
                        </ul>
                    </li>
                    <li id="menu-item-2461"
                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2461">
                        <a href="{{ route('recruitment') }}">TUYỂN DỤNG</a></li>
                    <li id="menu-item-2155"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2155">
                        <a href="{{ route('contact') }}">LIÊN HỆ</a>
                    </li>
                </ul>
            </div>

        </div>

    </div>

    <div class="container">

        <div class="header-widgets  hidden-md  hidden-lg">

            <div class="widget  widget-icon-box">
                <div class="icon-box">
                    <i class="fa  fa-phone  fa-3x"></i>
                    <div class="icon-box__text">
                        <h4 class="icon-box__title">0946.355.655 -
                            0917.032.888</h4>
                        <span class="icon-box__subtitle">info@newstarland.com</span>
                    </div>
                </div>
            </div>
            <div class="widget  widget-icon-box">
                <div class="icon-box">
                    <i class="fa  fa-home  fa-3x"></i>
                    <div class="icon-box__text">
                        <h4 class="icon-box__title">CÔNG TY TNHH PHÁT TRIỂN
                            THƯƠNG MẠI BĐS NEWSTARLAND</h4>
                        <span class="icon-box__subtitle">Tầng 1, tòa D - Vinaconex 1, HN | Tầng 1, The Manor 2, 91 Nguyễn Hữu Cảnh, HCM</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

</header>
