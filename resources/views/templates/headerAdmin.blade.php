<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/sales-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jul 2023 14:16:53 GMT -->
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title>Sales</title>


<link rel="stylesheet" href="{{ asset('css/bootstrap1.min.css') }}" />

<link rel="stylesheet" href="{{ asset('vendors/themefy_icon/themify-icons.css') }}" />

<link rel="stylesheet" href="{{ asset('vendors/niceselect/css/nice-select.css') }}" />

<link rel="stylesheet" href="{{ asset('vendors/owl_carousel/css/owl.carousel.css') }}" />

<link rel="stylesheet" href="{{ asset('vendors/gijgo/gijgo.min.css') }}" />

<link rel="stylesheet" href="{{ asset('vendors/font_awesome/css/all.min.css') }}" />
<link rel="stylesheet" href="{{ asset('vendors/tagsinput/tagsinput.css') }}" />

<link rel="stylesheet" href="{{ asset('vendors/datepicker/date-picker.css') }}" />
<link rel="stylesheet" href="{{ asset('vendors/vectormap-home/vectormap-2.0.2.css') }}" />

<link rel="stylesheet" href="{{ asset('vendors/scroll/scrollable.css') }}" />

<link rel="stylesheet" href="{{ asset('vendors/datatable/css/jquery.dataTables.min.css') }}" />
<link rel="stylesheet" href="{{ asset('vendors/datatable/css/responsive.dataTables.min.css') }}" />
<link rel="stylesheet" href="{{ asset('vendors/datatable/css/buttons.dataTables.min.css') }}" />

<link rel="stylesheet" href="{{ asset('vendors/text_editor/summernote-bs4.css') }}" />

<link rel="stylesheet" href="{{ asset('vendors/morris/morris.css') }}">

<link rel="stylesheet" href="{{ asset('vendors/material_icon/material-icons.css') }}" />

<link rel="stylesheet" href="{{ asset('css/metisMenu.css') }}">

<link rel="stylesheet" href="{{ asset('css/style1.css') }}" />
<link rel="stylesheet" href="{{ asset('css/colors/default.css" id="colorSkinCSS') }}">
</head>
<body class="crm_body_bg">


<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
<div class="logo d-flex justify-content-between">
<a href="index-2.html"><img src="img/logo.png" alt></a>
<div class="sidebar_close_icon d-lg-none">
<i class="ti-close"></i>
</div>
</div>
<ul id="sidebar_menu">
<li class="mm-active">
<a href="{{ route('index') }}" aria-expanded="false">
<div class="icon_menu">
<img src="img/menu-icon/dashboard.svg" alt>
</div>
<span>Dashboard</span>
</a>
</li>
<li class>
<a href="{{ route('category.index') }}" aria-expanded="false">
<div class="icon_menu">
<img src="img/menu-icon/2.svg" alt>
</div>
<span>Category</span>
</a>
</li>
<li class>
<a href="{{ route('book.index') }}" aria-expanded="false">
<div class="icon_menu">
<img src="img/menu-icon/3.svg" alt>
</div>
<span>Book</span>
</a>
</li>
<li class>
<a href="#" aria-expanded="false">
<div class="icon_menu">
<img src="img/menu-icon/15.svg" alt>
</div>
<span>User</span>
</a>
</li>
<li class>
    <a href="#" aria-expanded="false">
    <div class="icon_menu">
    <img src="img/menu-icon/6.svg" alt>
    </div>
    <span>Order</span>
    </a>
    </li>
{{-- <li class>
<a href="#" aria-expanded="false">
<div class="icon_menu">
<img src="img/menu-icon/4.svg" alt>
</div>
<span>Bill</span>
</a>
</li>
<li class>
<a href="#" aria-expanded="false">
<div class="icon_menu">
<img src="img/menu-icon/5.svg" alt>
</div>
<span>Brand</span>
</a>
</li>

<li class>
<a href="calender.html" aria-expanded="false">
<div class="icon_menu">
<img src="img/menu-icon/7.svg" alt>
</div>
<span>Calander</span>
</a>
</li>
<li class>
<a href="#" aria-expanded="false">
<div class="icon_menu">
<img src="img/menu-icon/8.svg" alt>
</div>
<span>Products</span>
</a>
</li>
<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<div class="icon_menu">
<img src="img/menu-icon/8.svg" alt>
</div>
<span>Icons</span>
</a>
<ul>
<li><a href="Fontawesome_Icon.html">Fontawesome Icon</a></li>
<li><a href="themefy_icon.html">themefy icon</a></li>
</ul>
</li>
<li class>
<a href="#" aria-expanded="false">
<div class="icon_menu">
<img src="img/menu-icon/9.svg" alt>
</div>
<span>Size</span>
</a>
</li>
<li class>
<a  href="#" aria-expanded="false">
<div class="icon_menu">
<img src="img/menu-icon/10.svg" alt>
</div>
<span>Voucher</span>
</a>
</li>
<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<div class="icon_menu">
<img src="img/menu-icon/11.svg" alt>
</div>
<span>Table</span>
</a>
<ul>
<li><a href="data_table.html">Data Tables</a></li>
<li><a href="bootstrap_table.html">Bootstrap</a></li>
</ul>
</li>
<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<div class="icon_menu">
<img src="img/menu-icon/12.svg" alt>
</div>
<span>Cards</span>
</a>
<ul>
<li><a href="basic_card.html">Basic Card</a></li>
<li><a href="theme_card.html">Theme Card</a></li>
<li><a href="dargable_card.html">Draggable Card</a></li>
</ul>
</li>
<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<div class="icon_menu">
<img src="img/menu-icon/13.svg" alt>
</div>
<span>Charts</span>
</a>
<ul>
<li><a href="chartjs.html">ChartJS</a></li>
<li><a href="apex_chart.html">Apex Charts</a></li>
<li><a href="chart_sparkline.html">Chart sparkline</a></li>
<li><a href="am_chart.html">am-charts</a></li>
<li><a href="nvd3_charts.html">nvd3 charts.</a></li>
</ul>
</li>
<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<div class="icon_menu">
<img src="img/menu-icon/14.svg" alt>
</div>
<span>Widgets</span>
</a>
<ul>
<li><a href="chart_box_1.html">Chart Boxes 1</a></li>
<li><a href="profilebox.html">Profile Box</a></li>
</ul>
</li>

<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<div class="icon_menu">
<img src="img/menu-icon/16.svg" alt>
</div>
<span>Pages</span>
</a>
<ul>
<li><a href="login.html">Login</a></li>
<li><a href="resister.html">Register</a></li>
<li><a href="error_400.html">Error 404</a></li>
<li><a href="error_500.html">Error 500</a></li>
<li><a href="forgot_pass.html">Forgot Password</a></li>
<li><a href="gallery.html">Gallery</a></li>
</ul>
</li>
</ul> --}}
</nav>

<section class="main_content dashboard_part large_header_bg">

<div class="container-fluid g-0">
<div class="row">
<div class="col-lg-12 p-0">
<div class="header_iner d-flex justify-content-between align-items-center">
<div class="sidebar_icon d-lg-none">
<i class="ti-menu"></i>
</div>
<div class="serach_field-area d-flex align-items-center">
<div class="search_inner">
<form action="#">
<div class="search_field">
<input type="text" placeholder="Search here...">
</div>
<button type="submit"> <img src="img/icon/icon_search.svg" alt> </button>
</form>
</div>
<span class="f_s_14 f_w_400 ml_25 white_text text_white">Apps</span>
</div>
<div class="header_right d-flex justify-content-between align-items-center">
<div class="header_notification_warp d-flex align-items-center">
<li>
<a class="bell_notification_clicker nav-link-notify" href="#"> <img src="img/icon/bell.svg" alt>
</a>

<div class="Menu_NOtification_Wrap">
<div class="notification_Header">
<h4>Notifications</h4>
</div>
<div class="Notification_body">

<div class="single_notify d-flex align-items-center">
<div class="notify_thumb">
<a href="#"><img src="img/staf/2.png" alt></a>
</div>
<div class="notify_content">
<a href="#"><h5>Cool Marketing </h5></a>
<p>Lorem ipsum dolor sit amet</p>
</div>
</div>

<div class="single_notify d-flex align-items-center">
<div class="notify_thumb">
<a href="#"><img src="img/staf/4.png" alt></a>
</div>
<div class="notify_content">
<a href="#"><h5>Awesome packages</h5></a>
<p>Lorem ipsum dolor sit amet</p>
</div>
</div>

<div class="single_notify d-flex align-items-center">
<div class="notify_thumb">
<a href="#"><img src="img/staf/3.png" alt></a>
</div>
<div class="notify_content">
<a href="#"><h5>what a packages</h5></a>
<p>Lorem ipsum dolor sit amet</p>
</div>
</div>

<div class="single_notify d-flex align-items-center">
<div class="notify_thumb">
<a href="#"><img src="img/staf/2.png" alt></a>
</div>
<div class="notify_content">
<a href="#"><h5>Cool Marketing </h5></a>
<p>Lorem ipsum dolor sit amet</p>
</div>
</div>

<div class="single_notify d-flex align-items-center">
<div class="notify_thumb">
<a href="#"><img src="img/staf/4.png" alt></a>
</div>
<div class="notify_content">
<a href="#"><h5>Awesome packages</h5></a>
<p>Lorem ipsum dolor sit amet</p>
</div>
</div>

<div class="single_notify d-flex align-items-center">
<div class="notify_thumb">
<a href="#"><img src="img/staf/3.png" alt></a>
</div>
<div class="notify_content">
<a href="#"><h5>what a packages</h5></a>
<p>Lorem ipsum dolor sit amet</p>
</div>
</div>
</div>
<div class="nofity_footer">
<div class="submit_button text-center pt_20">
<a href="#" class="btn_1">See More</a>
</div>
</div>
</div>

</li>
<li>
<a class="CHATBOX_open nav-link-notify" href="#"> <img src="img/icon/msg.svg" alt> </a>
</li>
</div>
<div class="profile_info">
<img src="img/client_img.png" alt="#">
<div class="profile_info_iner">
<div class="profile_author_name">
<p>Neurologist </p>
<h5>Dr. Robar Smith</h5>
</div>
<div class="profile_info_details">
<a href="#">My Profile </a>
<a href="#">Settings</a>
<a href="#">Log Out </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>