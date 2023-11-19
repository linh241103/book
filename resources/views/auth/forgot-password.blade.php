@extends('templates.app')
@section('content')
<head>
        <link href="{{ asset('wp-content/themes/template/js/bootstrap-5.0.0/css/bootstrap.min.css') }}" rel="stylesheet"
          crossorigin="anonymous">
        <script src="{{ asset('wp-content/themes/template/js/bootstrap-5.0.0/js/bootstrap.bundle.min.js') }}"
            crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
        <link rel="stylesheet" href="{{ asset('css/sty.css') }}">
        <style>
            #dr_billingContainer .dr_label {
                font-weight: 700;
            }
            #billingDetails .checkoutButton {
                float: right;
                width: 264px;
            }
            .dr_button {
                -moz-user-select: none;
                background-color: #ed2939;
                background-image: none;
                color: #fff!important;
                cursor: pointer;
                display: inline-block;
                font-size: 13px;
                line-height: 1.42857;
                margin-top: 10px;
                margin-bottom: 0;
                padding: 10px;
                text-align: center;
                vertical-align: middle;
                white-space: nowrap;
                text-decoration: none;
                text-transform: uppercase;
                font-family: Roboto,'Helvetica Neue',Helvetica,Arial,sans-serif;
            }
            input{
                width: 100%;
            }
        </style>
</head>
<body data-rsssl=1>	 
    <div class="container">	  
        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif   
        <div class="intro_head"><h2 class="orange h1_title"><font>Quên pass </font></h2></div>
        <form method="POST" action="{{ route('password.email') }}">
        @csrf
            <div class="dr_Content" id="dr_ThreePgCheckoutAddressPaymentInfo">
                <div id="dr_CheckoutPayment">
                    <div id="billingDetails" class="col-sm-12 ">
                        <div id="dr_billingContainer">
                            <fieldset id="dr_billing"> 
                                <div class="dr_formLine">
                                    <label for="email" class="dr_label"> <span class="dr_required tr_bold">Email (*):</span></label>
                                    <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email đăng nhập" class="form-control">
                                </div> 
                            </fieldset>
                        </div> 
                        <input type="submit" value="Gửi mail lấy lại pass " class="dr_button checkoutButton">
                    </div>
                </div>
            </div>
        </form>
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
