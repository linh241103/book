<!DOCTYPE html PUBLIC>
<html>

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8"/>
    <title> Frosty - Nhà Sách Trên Mạng </title>
    <link rel="preload" as="font" href="{{ asset('wp-content/themes/template/css/fontawesome-pro-6.1.1-web/webfonts/fa-brands-400.woff2') }}" crossorigin>
    <link rel="preload" as="font" href="{{ asset('wp-content/themes/template/css/fontawesome-pro-6.1.1-web/webfonts/fa-duotone-900.woff2') }}" crossorigin>
    <link rel="preload" as="font" href="{{ asset('wp-content/themes/template/css/fontawesome-pro-6.1.1-web/webfonts/fa-solid-900.woff2') }}" crossorigin>
    <link rel="preload" as="font" href="{{ asset('wp-content/themes/template/layouts/fontpage/fonts/fontawesome-webfont78ce.woff?v=4.2.0') }}" crossorigin>
    <link rel="stylesheet" href="{{ asset('css/sty.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<meta property="og:image" content="https://nobita.vn/wp-content/uploads/2018/01/logo-22.png">
    <meta property="og:image:secure_url" content="https://nobita.vn/wp-content/uploads/2018/01/logo-22.png"/>
    <meta name="description" content="Hiệu sách online hiện đại và kho sách Nobita online tiện lợi, Nobita là nơi giúp bạn có những cuốn sách đúng với sở thích và cập nhật những đầu sách hay"/>
    <meta name="robots" content="follow, index"/>
    <link rel="canonical" href="{{ asset('index.html') }}"/>
    <link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Nobita - Nhà Sách Trên Mạng" />
    <meta property="og:description" content="Hiệu sách online hiện đại và kho sách Nobita online tiện lợi, Nobita là nơi giúp bạn có những cuốn sách đúng với sở thích và cập nhật những đầu sách hay" />
    <meta property="og:url" content="https://nobita.vn" />
    <meta property="og:site_name" content="Nobita.vn - Nhà Sách Trên Mạng" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Nobita - Nhà Sách Trên Mạng" />
    <meta name="twitter:description" content="Hiệu sách online hiện đại và kho sách Nobita online tiện lợi, Nobita là nơi giúp bạn có những cuốn sách đúng với sở thích và cập nhật những đầu sách hay" />
    <style id='classic-theme-styles-inline-css' type='text/css'></style>
    <style id='global-styles-inline-css' type='text/css'></style>
    <style id='rocket-lazyload-inline-css' type='text/css'>
        .rll-youtube-player{position:relative;padding-bottom:56.23%;height:0;overflow:hidden;max-width:100%;}.rll-youtube-player:focus-within{outline: 2px solid currentColor;outline-offset: 5px;}.rll-youtube-player iframe{position:absolute;top:0;left:0;width:100%;height:100%;z-index:100;background:0 0}.rll-youtube-player img{bottom:0;display:block;left:0;margin:auto;max-width:100%;width:100%;position:absolute;right:0;top:0;border:none;height:auto;-webkit-transition:.4s all;-moz-transition:.4s all;transition:.4s all}.rll-youtube-player img:hover{-webkit-filter:brightness(75%)}.rll-youtube-player .play{height:100%;width:100%;left:0;top:0;position:absolute;background:url(wp-content/plugins/wp-rocket/assets/img/youtube.png) no-repeat center;background-color: transparent !important;cursor:pointer;border:none;}
    </style>
    <script type="text/javascript">
        window._nslDOMReady = function (callback) {
            if ( document.readyState === "complete" || document.readyState === "interactive" ) {
                callback();
            } else {
                document.addEventListener( "DOMContentLoaded", callback );
            }
        };
    </script>
    <link rel="https://api.w.org/" href="{{ asset('wp-json/index.html') }}" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="{{ asset('xmlrpc0db0.html?rsd') }}" />
    <meta name="generator" content="WordPress 6.3.1" />
    <style type="text/css"></style>
    <noscript><style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style></noscript>
    <style id="wpforms-css-vars-root"></style>
    <link rel="icon" href="{{ asset('wp-content/uploads/2018/01/favicon.jpg" type="image/x-icon') }}"/>
    <script src="{{ asset('wp-content/themes/template/js/bootstrap-5.0.0/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>                          
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Khởi tạo biến để lưu tổng số lượng từ Local Storage
            var totalQuantity = 0;
    
            // Lặp qua Local Storage để lấy số lượng từng sản phẩm và cộng vào tổng
            for (var i = 0; i < localStorage.length; i++) {
                var key = localStorage.key(i);
                if (key.startsWith('cartItem_')) {
                    totalQuantity += parseInt(localStorage.getItem(key));
                }
            }
    
            // Hiển thị tổng số lượng trong phần tử có id là 'cartTotalQuantity'
            document.getElementById('cartTotalQuantity').textContent = totalQuantity;
        });
    </script>
   
</head>
<body data-rsssl=1 id="homepage">
<div id="main_contener">
    <div id="header" class="tr_pc">
        <div class="top_header">
            <div id="container">
                <span class="menumobile" style="font-size:30px;cursor:pointer; display: none;" onclick="openNav()">&#9776;</span>
                <div class="mainlogo">

                    <div class="block banner" id="banner_mainlogo">
                        <div class="blockcontent">
                            <a href="{{route('index')}}" target="_self">
                                <img src="{{ asset('wp-content/uploads/2018/01/12.png') }}" border="0" width="110px" height="20px">
                            </a>
                        </div>
                    </div>

                </div>

                <div class="search-mb">
                    <i class="fa fa-search"></i>
                </div>
                <div class="rightheader">
                    <div class="search">
                        <form class="" id="search_form" action="/search" method="get">
                            <div class="d_search">
                                <input autocomplete="off" id="key_input" name="query" placeholder="Tìm kiếm" />
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </form>

                    </div>

                    <div class="shoptool">
                        <ul class="right_topbar">
                            <li>
                                <div class="textlable" title="Tài khoản của bạn">
                                    @auth
                                        Xin chào {{ ucfirst(Auth::user()->name) }}
                                    @else
                                        Tài khoản của bạn
                                    @endauth
                                    <i class="fa fa-sort-desc"></i>
                                </div>

                                <div class="subcontent">
                                    @if (Route::has('login'))
                                        <div class="buttom">
                                            @auth
                                                <div>
                                                    @if (Auth::user()->role == 1)
                                                        <a href="{{ route('dashboard') }}" class="btn_login">Quản lý tài khoản</a>
                                                    @elseif (Auth::user()->role == 0)
                                                        <a href="{{ route('order.index') }}" class="btn_login">Quản lý tài khoản</a>
                                                    @endif
                                                </div>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <x-dropdown-link :href="route('logout')"
                                                        onclick="event.preventDefault();
                                                        this.closest('form').submit();" class="btn_login">
                                                        {{ __('Log Out') }}
                                                    </x-dropdown-link>
                                                </form>
                                            @else
                                                <div><a href="{{ route('login') }}" class="btn_login">Đăng nhập</a></div>
                                                @if (Route::has('register'))
                                                    <div align="center" class="loginlink">
                                                        Khách hàng mới? <a href="{{ route('register') }}">Tạo tài khoản</a>
                                                    </div>
                                                @endif
                                            @endauth
                                        </div>
                                    @endif

                                </div>
                            </li>
                            <li>
                                
                                <div class="textlable" title="Giỏ hàng">
                                    Giỏ hàng (<span class="shownumber" id="cartTotalQuantity">0</span>)
                                    <i class="fa fa-sort-desc"></i>
                                </div>
                                <div class="subcontent">
                                    <h3>Giỏ hàng</h3>
                                    <div id="cartslist"></div>
                                    <div class="buttom" id="showcartlink">
                                        <a class="cartlink"   href="{{ route('cart.view') }}">
                                            Xem giỏ hàng
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div id="mainmenu">
            <div id="container">
                <div class="mainmenu_contener">
                    <div class="mainmenu">
                        <span><h2><i class="fa fa-bars"></i>Danh mục sản phẩm</h2></span>
                        <div class="submenu-wrapper">
                          <ul class="submenu0" id="submenu0">
                            <li class="group"><a class="havechild">Nổi bật</a>
                              <ul class="submenu1" id="submenu1">
                                <li><a href="#">Sách bán chạy</a> </li>
                                <li><a href="#">Sách mới</a> </li>
                                <li><a href="#">Sắp phát hành</a> </li>
                                <li><a href="#">Sách giảm giá</a> </li>
                              </ul>
                            </li>
                            @foreach ($categories as $category)
                            <li data-value='{{$category->id}}' class='degree_1'>
                              <a href='{{ route('category.show', $category->id) }}'>{{ $category->name }}</a>
                            </li>
                            @endforeach           
                          </ul>
                        </div>
                    </div>

                    <div class="hotline">
                        <div class="block " id="content_SupportOnline">
                            <div class="blockcontent">
                                <div>
                                    <strong><span style="color:#000000;"><span style="font-size:14px;">Hotline:&nbsp;</span></span>
                                    </strong>
                                    <span style="color:#ff0000;"><b style="box-sizing: border-box; color: #5CACEE; font-family: Verdana, Arial, Helvetica, sans-serif;">0938 424 289</b></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   