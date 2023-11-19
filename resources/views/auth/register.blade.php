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
        <style>
            .btn-success {
                color: #fff;
                background-color: #198754;
                border-color: #198754;
            }
        </style>
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
                        <span property="name" class="post post-page current-item">Đăng ký</span>
                        <meta property="url" content="dang-ky-2"><meta property="position" content="2">
                    </span>
                </div>
            </div>
        </div>
        <div id="container">
            <div class="sortable" id="layoutGroup1">
                <div class="block" id="module_Register">
                    <h1>
                        Đăng ký <span>hoặc</span>
                        <a href="#" title="Đăng nhập">Đăng nhập</a>
                    </h1>
                    <div class="blockcontent">
                        <div class="loginsocial">
                            <h3></h3>
                        </div>
                        <div class="registerform">
                            <form method="POST" action="{{ route('register') }}">
                            @csrf
                                <h3>Thông tin đăng nhập</h3>
                                <div class="field">
                                    <div class="textlabel">
                                        <label for="email">Email</label> <span class="Required">*</span>:
                                    </div>
                                    <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username"/>
                                    <span class="help" id="help1">Nhập email của bạn</span>
                                </div>
                                <div class="field">
                                    <div class="textlabel">
                                        <label for="password">Mật khẩu</label> <span class="Required">*</span>:
                                    </div>
                                    <input id="password" type="password" name="password" required autocomplete="new-password" />
                                    <span class="help" id="help2">Mật khẩu phải có ít nhất 6 ký tự</span>
                                </div>
                                <div class="field">
                                    <div class="textlabel">
                                        <label for="password_confirmation">Xác nhận mật khẩu</label> <span class="Required">*</span>:
                                    </div>
                                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"/>
                                    <span class="help" id="help3">Xác nhận lại mật khẩu</span>
                                </div>
                                <div class="clear"></div>
                                <h3>Thông tin cá nhân</h3>
                                <div class="field">
                                    <div class="textlabel">
                                        <label for="name">Họ và tên</label> <span class="Required">*</span>:
                                    </div>
                                    <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    <span class="help" id="help4"></span>
                                </div>
                                <div class="field">
                                    <div class="textlabel">
                                        <label for="phone">Điện thoại</label> <span class="Required">*</span>:
                                    </div>
                                    <input id="phone" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
                                    <span class="help" id="help5"></span>
                                </div>
                                <div class="field">
                                    <div class="textlabel">
                                        <label for="address">Địa chỉ</label>  
                                    </div>
                                    <input id="address" type="text" name="address" :value="old('address')" required autofocus autocomplete="address"/>
                                    <span class="help" id="help5"></span>
                                </div> 
                                <div class="field" style="">
                                    <input type="submit" align="absmiddle" class="btn btn-success"  value="Đăng ký"/>
                                    <input type="hidden" name="bt_txt_dang_ky" value=""/>
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