<header class="header">
    <div class="container">
        <div class="logo">
            <a href="{{ route('index') }}">
                <img src="{{ asset('frontend/newstarland/images/logo.png') }}" class="img-responsive" width="200" height="46">
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
                        <a href="{{ route('listProject') }}">DỰ ÁN PHÂN PHỐI</a>
                        {!! SiteHelpers::generateProjectMenu() !!}
                    </li>
                    <li id="menu-item-2462"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2462">
                        <a href="{{ route('news', ['ve-chung-toi']) }}">VỀ CHÚNG TÔI</a>
                        <ul class="sub-menu">
                            <li id="menu-item-2465"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2465">
                                <a href="{{ route('news', ['thu-ngo']) }}">Thư ngỏ</a></li>
                            <li id="menu-item-2464"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2464">
                                <a href="{{ route('news', ['hinh-thanh-va-phat-trien']) }}">Hình thành và phát triển</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-2432"
                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-2432">
                        <a href="{{ route('listNews') }}">TIN TỨC</a>
                        {!! SiteHelpers::generateNewsMenu() !!}
                    </li>
                    <li id="menu-item-2461"
                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2461">
                        <a href="{{ route('news', ['tin-tuyen-dung']) }}">TUYỂN DỤNG</a></li>
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
