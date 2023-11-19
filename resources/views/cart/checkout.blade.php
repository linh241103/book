@extends('templates.app')
@section('content')

<head>
    <!-- BOOTSTRAP -->
    <link href="{{ asset('wp-content/themes/template/js/bootstrap-5.0.0/css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sty.css') }}">  
</head>
<body data-rsssl=1>
	<link rel="stylesheet" type="text/css" href="{{ asset('/wp-content/themes/template/css/san_pham.css') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 tr_block_content">
                    <h1 class="tr_tieu_de">Đặt Hàng</h1>
                    <div class="tr_content">
                        <form method="post" action="#" onsubmit="check_submit_form()">
                            <div class="dr_Content" id="dr_ThreePgCheckoutAddressPaymentInfo">
                                <div id="dr_CheckoutPayment" class="row">
                                    <div id="billingDetails" class="col-sm-12 col-md-8">
                                        <div id="dr_billingContainer">
                                            <fieldset id="dr_billing">
                                                <legend>Thông tin đơn hàng</legend>
                                                <h3>Thông tin đơn hàng</h3>
                                                <p> <span class="dr_error"> </span></p>
    
    
                                                <div class="dr_formLine">
                                                    <label class="dr_label"> <span class="dr_required">Họ và tên:<b class="do"> (*)</b></span> </label>
                                                    <input name="don_ho_ten" type="text" maxlength="255" placeholder="Họ và tên" required>
                                                </div>
    
    
                                                <div class="dr_formLine">
                                                    <label class="dr_label"> <span class="dr_required">Điện thoại: <b class="do"> (*)</b> </span> </label>
                                                    <input name="don_so_dt" type="text" maxlength="255" placeholder="Số điện thoại" required>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="dr_formLine">
                                                    <label class="dr_label"> <span class="dr_required">Email: <b class="do"> (*)</b> </span>
                                                    </label>
                                                    <input name="don_mail" type="email" maxlength="255" placeholder="Email để nhận thông báo đơn hàng" required>
                                                </div>
    
                                                <div class="clear"></div>
    
                                                <div class="dr_formLine">
                                                    <label class="dr_label"> <span class="dr_required">Địa chỉ nhận:<b class="do"> (*)</b></span> </label>
                                                    <input name="don_dia_chi" type="text" maxlength="255" placeholder="Địa chỉ " required>
                                                </div>
                                                <div class="dr_formLine">
                                                    <label class="dr_label"> <span class="dr_required">Tỉnh/Thành: <b class="do"> (*)</b></span> </label>
                                                 
                                                        <select name="don_tinh" id="ddlcity1" onchange="check_ma_giam_gia()" required>
                                                            <option value="">Chọn tỉnh thành</option>
                                                            <option value="79">Hồ Chí Minh </option>
                                                            <option value="01">Hà Nội </option>
                                                                                                                        <option  value="760">  </option>
                                                                                                                        <option  value="89"> An Giang </option>
                                                                                                                        <option  value="77"> Bà Rịa - Vũng Tàu </option>
                                                                                                                        <option  value="24"> Bắc Giang </option>
                                                                                                                        <option  value="06"> Bắc Kạn </option>
                                                                                                                        <option  value="95"> Bạc Liêu </option>
                                                                                                                        <option  value="27"> Bắc Ninh </option>
                                                                                                                        <option  value="83"> Bến Tre </option>
                                                                                                                        <option  value="74"> Bình Dương </option>
                                                                                                                        <option  value="70"> Bình Phước </option>
                                                                                                                        <option  value="60"> Bình Thuận </option>
                                                                                                                        <option  value="52"> Bình Định </option>
                                                                                                                        <option  value="96"> Cà Mau </option>
                                                                                                                        <option  value="92"> Cần Thơ </option>
                                                                                                                        <option  value="04"> Cao Bằng </option>
                                                                                                                        <option  value="64"> Gia Lai </option>
                                                                                                                        <option  value="02"> Hà Giang </option>
                                                                                                                        <option  value="35"> Hà Nam </option>
                                                                                                                        <option  value="01"> Hà Nội </option>
                                                                                                                        <option  value="42"> Hà Tĩnh </option>
                                                                                                                        <option  value="30"> Hải Dương </option>
                                                                                                                        <option  value="31"> Hải Phòng </option>
                                                                                                                        <option  value="93"> Hậu Giang </option>
                                                                                                                        <option  value="79"> Hồ Chí Minh </option>
                                                                                                                        <option  value="17"> Hoà Bình </option>
                                                                                                                        <option  value="33"> Hưng Yên </option>
                                                                                                                        <option  value="56"> Khánh Hòa </option>
                                                                                                                        <option  value="91"> Kiên Giang </option>
                                                                                                                        <option  value="62"> Kon Tum </option>
                                                                                                                        <option  value="12"> Lai Châu </option>
                                                                                                                        <option  value="68"> Lâm Đồng </option>
                                                                                                                        <option  value="20"> Lạng Sơn </option>
                                                                                                                        <option  value="10"> Lào Cai </option>
                                                                                                                        <option  value="80"> Long An </option>
                                                                                                                        <option  value="36"> Nam Định </option>
                                                                                                                        <option  value="40"> Nghệ An </option>
                                                                                                                        <option  value="37"> Ninh Bình </option>
                                                                                                                        <option  value="58"> Ninh Thuận </option>
                                                                                                                        <option  value="25"> Phú Thọ </option>
                                                                                                                        <option  value="54"> Phú Yên </option>
                                                                                                                        <option  value="44"> Quảng Bình </option>
                                                                                                                        <option  value="49"> Quảng Nam </option>
                                                                                                                        <option  value="51"> Quảng Ngãi </option>
                                                                                                                        <option  value="22"> Quảng Ninh </option>
                                                                                                                        <option  value="45"> Quảng Trị </option>
                                                                                                                        <option  value="94"> Sóc Trăng </option>
                                                                                                                        <option  value="14"> Sơn La </option>
                                                                                                                        <option  value="72"> Tây Ninh </option>
                                                                                                                        <option  value="34"> Thái Bình </option>
                                                                                                                        <option  value="19"> Thái Nguyên </option>
                                                                                                                        <option  value="38"> Thanh Hóa </option>
                                                                                                                        <option  value="46"> Thừa Thiên Huế </option>
                                                                                                                        <option  value="82"> Tiền Giang </option>
                                                                                                                        <option  value="84"> Trà Vinh </option>
                                                                                                                        <option  value="08"> Tuyên Quang </option>
                                                                                                                        <option  value="86"> Vĩnh Long </option>
                                                                                                                        <option  value="26"> Vĩnh Phúc </option>
                                                                                                                        <option  value="15"> Yên Bái </option>
                                                                                                                        <option  value="48"> Đà Nẵng </option>
                                                                                                                        <option  value="66"> Đắk Lắk </option>
                                                                                                                        <option  value="67"> Đắk Nông </option>
                                                                                                                        <option  value="11"> Điện Biên </option>
                                                                                                                        <option  value="75"> Đồng Nai </option>
                                                                                                                        <option  value="87"> Đồng Tháp </option>
                                                            
                                                        </select>
    
                                                     
                                                </div>
                                                 
                                                 <div class="dr_formLine">
                                                    <label class="dr_label"> <span class="dr_required">Quận/Huyện: <b class="do"> (*)</b></span> </label>
                                                 
                                                        <select name="quan_huyen" id="quan_huyen"  onchange="doi_xa()"   required>
                                                            <option value="">Chọn Quận/Huyện</option> 
    
                                                        </select>
    
                                                     
                                                </div>
                                                <div class="dr_formLine">
                                                    <label class="dr_label"> <span class="dr_required">Phường/Xã: <b class="do"> (*)</b></span> </label>
                                                 
                                                        <select name="phuong_xa" id="phuong_xa"   required>
                                                            <option value="">Chọn Phường/Xã</option> 
    
                                                        </select>
    
                                                     
                                                </div>
                                                <div class="clear"></div>	
                                                 
                                                <div class="dr_formLine">
                                                    <label class="dr_label"> <span class="dr_required">Đóng Gói:<b class="do"> (*)</b></span> </label>
                                                     
                                                        <select name="dong_goi"  required>
                                                            <option value="">Chọn quy cách đóng gói</option>
                                                            <option value="1">Để nguyên seal</option>
                                                            <option value="2">Bọc Platis</option> 
                                                        </select>
    
                                                     
                                                </div>
                                                <div class="clear"></div>	
                                                
                                                <div class="clear"></div>	
                                                 
                                                <div class="dr_formLine">
                                                    <label class="dr_label"> <span class="dr_required">Hình thức thanh toán:<b class="do"> (*)</b></span> </label>
                                                     
                                                        <select name="hinh_thuc_tt"  required>
                                                            <option value="">Chọn hình thức</option>
                                                            <option value="1">Cod: Giao hàng nhận tiền</option>
                                                            <option value="2">Chuyển khoản  </option> 
                                                        </select>
    
                                                     
                                                </div>
                                                
                                                
                                                <div class="dr_formLine"> <label class="dr_label" for="billingAddress1"> <span class="dr_required">Ghi chú:</span> </label><textarea name="ghi_chu" rows="3" cols="20" id="cphContent_txtNote" placeholder="Ghi chú về đơn hàng" style="margin-left: 0;"></textarea></div>
    
                                            </fieldset>
                                                                                </div>
    
    
    
                                        <div class="optinCheckbox" id="dr_optInContainer">
                                            
                                        </div>
    
    
                                        <input type="submit" name="tr_tranh_toan" value="Đặt Hàng" class="dr_button checkoutButton">
    
    
    
    
                                    </div>
                                    <div id="fixedMinicart" class="col-sm-12 col-md-4">
                                        <div class="billing_miniCart col-sm-12 " style="top: 40px; position: relative;">
                                            <div class="summaryText  tr_none">
    
                                                <fieldset id="dr_optIn" class="dr_couponCode">
                                                    <h4>Áp dụng mã giảm giá</h4>
                                                    <div class="couponCodeContainer">
    
                                                        <div class="couponCodeContent">
                                                            <div for="promoCode">Nhập mã giảm giá tại đây:</div>
                                                            <div class="">
                                                                <div class="">
                                                                    <input class="tr_ma_giam_gia" name="ma_giam_gia" type="text" id="cphContent_txtCouponCode">
                                                                </div>
                                                                <div class="">
                                                                    <div class="tr_right">
                                                                        <input id="btnUserCoupon" class="dr_button" type="button" value="Áp dụng" onclick="check_ma_giam_gia();">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
    
    
    
    
    
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="summaryText">
                                                <h4>Chi tiết đơn </h4>
                                            </div>
                                            <div class="miniCartDetails" id="chi_tiet_don">
                                                <div class="mini-cart">
    
                                                                                                        <div class="product-content">
                                                            <div class="prod-name MuseoSans_500">
                                                                <a href="san-pham/van-hao-luu-lac-tap-2-dazai-osamu-va-thoi-ki-den-toi">
                                                                    Văn Hào Lưu Lạc - Tập 2: Dazai Osamu Và Thời Kì Đen Tối <br />
                                                                                                                                        <label class="font_nho">Mã SP: id_2256</label>
                                                                        <br />
                                                                                                                                </a>
    
                                                                <label class="font_nho">Số lượng: 1</label> <br />
                                                                <label class="font_nho">Khối lượng: 0.5 Kg</label> <br />
                                                                
                                                                
                                                                
                                                            </div>
    
                                                            <div class="dr-li-price MuseoSans_700 do"> 85.000 đ
                                                            </div>
    
                                                            <span style="color: Red;" name="dcPercentRangeName" id="dcPercentRange-1236429"></span>
    
                                                        </div>
                                                                                                    <div class="dr-sub-total "> <span class="miniCartSubTotal">Tổng tiền:</span> &nbsp;<span id="cphContent_litTotalPrice">85.000 đ </span></div>
                                                    <div class="dr-sub-total  "> <span class="miniCartSubTotal">Phí vận chuyển:</span> &nbsp; <span id="cphContent_litDeliveryPrice">0</span></div>
                                                    <div class="dr-sub-total tr_none "> <span class="miniCartSubTotal">Mã Giảm giá:</span> &nbsp; <span id="cphContent_litDeliveryPrice"></span></div>
                                                    <div class="dr-sub-total tr_none " id="discountRange"> <span class="miniCartSubTotal">Giảm giá:</span> &nbsp; <span id="cphContent_litDiscount" class="dc-style">0</span></div>
                                                    <div class="dr-sub-total "> <span class="miniCartSubTotal">Thanh toán:</span> &nbsp;<span id="cphContent_litPayment" class="pm-style">85.000 đ</span></div>
                                                    <div style="padding-top: 10px">
                                                        <a href="gio-hang" style="color: #fff;">
                                                            <div style="width: 100%" class="button button-green"> Chỉnh sửa đơn hàng</div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
