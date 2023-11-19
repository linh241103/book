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
 <link rel="stylesheet" type="text/css" href="{{ asset('wp-content/themes/template/css/san_pham.css') }}"> 
 <link rel="stylesheet" href="{{ asset('wp-content/themes/template/js/bootstrap/css/bootstrap.min.css') }}" type="text/css" media="screen"/>
	<div class="container ">
	    <div class=" tr_block_content">
         <h1 class="tr_tieu_de">Quản lý đơn hàng </h1>
		  <div class="row">
			<div class="col-md-2 col-sm-12"> 
				<div class="global-left global-left-cus">
					<div class="glo-left glo-ykien-dm">
						 <h3><span>QL đơn hàng </span></h3>
						<div class="glo-left-nd glo-dv-menu-left">
							<ul class="ul-left-menu">
								 <li><a href="#">Tất cả(0) </a></li>
							     <li><a href="#">Đang đợi duyệt(0) </a></li>
										  <li><a href="#">Đã xác nhận (0) </a></li>
										  <li><a href="#">Đang giao hàng (0) </a></li>
										  
										  <li><a href="#">Đã Giao Hàng (0) </a></li>
										  
										  <li><a href="#"><label class="do tr_bold">Đã huỷ đơn (0)</label> </a> </li>
									   
							</ul>
						</div>
					</div>
				 
					<div class="glo-left glo-ykien-dm">
						 <h3><span>QL Tài Khoản</span></h3>
						<div class="glo-left-nd glo-dv-menu-left">
							<ul class="ul-left-menu">
                                                <li><a href="{{ route('profile.edit') }}"> Cập nhật thông tin tài khoản </a></li>
                                                <li><a href="#"> Đổi Password </a></li>
                                                <li><a href="{{ route('logout') }}" class="btn_login"
                                                      onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                      Đăng xuất
                                                </a>
                                                </li>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                                </form>
							</ul>
						</div>
					</div>
				</div>
			</div>	
			
			    <div class="col-md-10 col-sm-12"> 
					<h2 class="tr_tieu_de" >Danh sách đơn hàng</h2>
					<div class="tr_content">
						<div class="table-responsive group_form"  >	
							<table class="table-bordered table-striped table-condensed cf" cellpadding="0" cellspacing="0">
							    <thead class="cf">
									<tr>
										 <th>STT</th> 
										 <th>Mã Đơn Hàng</th>
										  <th>Người đặt</th> 
										 <th>Số điện thoại</th>    
										 <th>Tổng cộng </th> 
										 <th>Trạng thái </th> 
										 <th>Chi tiết đơn </th> 
										  
									</tr> 
							    </thead>
								<tbody>	
										
								</tbody>
							</table>		
						</div> 
					</div> 
			    </div>
			
			
			
			
			</div>
		 
	</div>
		<div class="clear"></div>  
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