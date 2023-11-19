@extends('templates.app')
@section('content')
<head>
        <!-- BOOTSTRAP -->
        <link href="{{ asset('wp-content/themes/template/js/bootstrap-5.0.0/css/bootstrap.min.css') }}" rel="stylesheet"
          crossorigin="anonymous">
        <script src="{{ asset('wp-content/themes/template/js/bootstrap-5.0.0/js/bootstrap.bundle.min.js') }}"
            crossorigin="anonymous"></script>
        <!-- HOVER -->
        <link href="wp-content/themes/template/js/Hover-master/css/hover.css" rel="stylesheet" media="all">
        <link href="wp-content/themes/template/css/fontawesome-pro-6.1.1-web/css/all.css" rel="stylesheet">
        <!-- MENU -->
        <link type="text/css" rel="stylesheet" href="wp-content/themes/template/js/menu/jquery.mmenu.all.css">
        <!-- NIVO -->
        <link rel="stylesheet" href="wp-content/themes/template/js/nivo_repo/default.css" type="text/css"
            media="screen"/>
        <link rel="stylesheet" href="wp-content/themes/template/js/nivo_repo/nivo-slider.css" type="text/css"
            media="screen"/>
        <!-- OWL CAROUSEL -->
        <link rel="stylesheet" href="wp-content/themes/template/js/owl.carousel/owl.carousel.css">
        <link rel="stylesheet" href="wp-content/themes/template/js/owl.carousel/owl.theme.default.css">
        <!-- WOW -->
        <link rel='stylesheet' href="wp-content/themes/template/js/wow/animate.min.css">
        <!-- lightSlider -->
        <link type="text/css" rel="stylesheet"
            href="wp-content/themes/template/js/lightslider/lightslider.css"/>
        <!-- Magnific Popup core CSS file -->
        <link rel="stylesheet" href="wp-content/themes/template/js/magnific_popup/magnific-popup.css">
        <!-- mmenu -->
        <link href="wp-content/themes/template/js/mmenu-light/mmenu-light.css" rel="stylesheet"/>
        <!-- Bxslider -->
        <link rel="stylesheet"
            href="wp-content/themes/template/js/bxslider-4-4.2.12/dist/jquery.bxslider.css">
        <!-- FANCYBOX -->
        <link href="wp-content/themes/template/js/fancybox-3.5.7/dist/jquery.fancybox.min.css"
            rel="stylesheet">
        <link type="text/css" href="wp-content/themes/template/layouts/fontpage/css/styles.css"
            rel="stylesheet"/>
        <link type="text/css" href="wp-content/themes/template/layouts/fontpage/css/font-awesome.min.css"
            rel="stylesheet"/>
        <link type="text/css" href="wp-content/themes/template/layouts/fontpage/css/styles.resolution.css"
            rel="stylesheet"/>
        <link rel="stylesheet" href="wp-content/themes/template/layouts/system/css/boxy.css" type="text/css"/>
        <link rel="stylesheet" type="text/css"
            href="wp-content/themes/template/layouts/fontpage/css/responsive.css" rel="stylesheet"/>
        <link href="wp-content/themes/template/layouts/fontpage/css/home.css" type="text/css"
            rel="stylesheet"/>
        <link href="wp-content/themes/template/layouts/fontpage/css/home.css" type="text/css"
            rel="stylesheet"/>
        <link href="wp-content/themes/template/layouts/fontpage/css/products.css" type="text/css"
            rel="stylesheet"/>
        <link href="wp-content/themes/template/layouts/fontpage/css/users.css" type="text/css"
            rel="stylesheet"/>
        <link href="wp-content/themes/template/layouts/fontpage/css/statics.css" type="text/css"
            rel="stylesheet"/> 
        <link href="wp-content/themes/template/css/offical.css" rel="stylesheet" type="text/css"/>
        <link href="wp-content/themes/template/style.css" rel="stylesheet" type="text/css"/> 
        <link href="wp-content/themes/template/css/offical_responsive.css" rel="stylesheet" type="text/css"/> 
        <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
        <link rel="stylesheet" href="{{ asset('css/sty.css') }}">
</head>
<body data-rsssl=1>
    <div id="main_contener">
        <div id="container">
            <div class="d_path">
                <div class="breadcrumbs">
                    <span property="itemListElement" typeof="ListItem">
                        <a property="item" typeof="WebPage" href="#" class="home" >
                            <span property="name">Nobita.vn - Nhà Sách Trên Mạng</span>
                        </a><meta property="position" content="1">
                    </span> / <span property="itemListElement" typeof="ListItem">
                        <span property="name" class="post post-page current-item">Đăng nhập</span>
                        <meta property="url" content="dang-ky-2"><meta property="position" content="2">
                    </span>
                </div>
            </div>
        </div>
        <div id="container">
            <div class="sortable" id="layoutGroup1">
                <div class="block" id="module_Register">
                    <h1>
                        Đăng nhập <span>hoặc</span>
                        <a href="#" title="Đăng nhập">Đăng ký </a>
                    </h1>
                    <div class="blockcontent">
                        <div class="loginsocial">
                            <h3></h3>
                        </div>
                        <div class="loginform">
                            <h3>Đăng nhập bằng tài khoản</h3>
                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="field">
                                    <div class="textlabel">
                                        <label for="email">Email</label> <span class="Required">*</span>:
                                    </div>
                                    <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                                    <span class="help" id="help1">Nhập email của bạn</span>
                                </div>
                                <div class="field">
                                    <div class="textlabel">
                                        <label for="password">Mật khẩu</label> <span class="Required">*</span>:
                                    </div>
                                    <input id="password" type="password" name="password" required autocomplete="current-password">
                                    <span class="help" id="help2">Nhập mật khẩu của bạn</span>
                                </div>
                                <div class="field">
                                    <div class="textlabel"></div>
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">Quên mật khẩu?</a>
                                    @endif
                                </div>
                                <div class="clear"></div>
                                <div class="field">
                                    <div class="textlabel">
                                        &nbsp;
                                    </div>
                                    <input type="hidden" name="redirect" value=""/>
                                    <input type="submit"  name="txt_dang_nhap" align="absmiddle" class="loginbuton" value="Đăng nhập"/>
                                    &nbsp;&nbsp;&nbsp;
                                    <a href="#" title="Đăng ký" class="link_register">Tạo tài khoản</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var submenuWrapper = document.querySelector('.submenu-wrapper');
        submenuWrapper.style.display = 'none'; // Ẩn submenu khi trang web được tải

        var mainmenu = document.querySelector('.mainmenu');
        var timer;

        mainmenu.addEventListener('mouseover', function() {
            clearTimeout(timer);
            submenuWrapper.style.display = 'block';
        });

        mainmenu.addEventListener('mouseleave', function() {
            timer = setTimeout(function() {
                submenuWrapper.style.display = 'none';
            }, 500);
            });
        });
    </script>
</body>
@endsection