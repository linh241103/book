<div id="footer">
    <div id="container">
        <div class="footer_menu">
            <div class="block " id="menu_Footer">
                <div class="blockcontent">
                    <ul>
                        <li class="group">hỗ trợ khách hàng
                            <ul>
                                <li><a href="#">Address: Đường 16, Phù Lỗ, Sóc Sơn, Hà Nội</a></li>
                                <li><a href="#">Email: linh24@gmail.com</a></li>
                                <li><a href="#">Hotline: <b>0974 400 769</b></a></li>                               
                            </ul>
                        </li>
                        <li class="group">Giới thiệu
                            <ul>
                                <li><a href="#">Về chúng tôi</a></li>
                                <li><a href="#">Tuyển dụng</a></li>
                                <li><a href="#">Điều khoản dịch vụ</a></li>
                                <li><a href="#">Chính sách bảo mật</a></li>
                            </ul>
                        </li>
                        <li class="group">Tài khoản
                            <ul>
                                <li><a href="dang-nhap-2.html" title="Tài khoản"
                                    target="_self">Đăng nhập</a></li>
                                <li><a href="quen-pass.html" title="Tài khoản"
                                    target="_self">Chi tiết tài khoản</a></li>	  
                                <li><a href="quen-pass.html" title="Tài khoản"
                                    target="_self">Lịch sử mua hàng</a></li> 
                                <li><a href="quen-pass.html" title="Tài khoản"
                                    target="_self">Đăng ký nhận tin</a></li> 
                                
                            </ul>
                        </li>
                        <li class="group">Hướng dẫn
                            <ul>
                                <li><a href="#">Hướng dẫn mua hàng</a></li>
                                <li><a href="#">Phương thức thanh toán</a></li>
                                <li><a href="#">Chính sách bảo hành</a></li>
                                <li><a href="#">Câu hỏi thường gặp</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="facebook">
            <p>* Kết nối với chúng tôi</p>
            <div class="icon-container">
                <a href="#">
                    <i class="fa fa-facebook" style="padding: 5px 9px"></i>
                </a>
                <a href="#">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
                <a href="#">
                    <i class="fa fa-google"></i>
                </a>
                <a href="#">
                    <i class="fa fa-youtube-play"></i>
                </a>
            </div>
        </div>
        <div class="clear"></div>
        <div class="footer_address">
            <div class="block " id="content_FooterAddress">
                <div class="blockcontent">
                    <div style="text-align: center;">
                        Copyright &copy; 2023 Trần Linh
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- FOOTER TEMPLATE JS -->
    <script src="{{ asset('wp-content/themes/template/js/jquery-3.6.0.min.js') }}"></script> 
    {{-- Slide cuộn sách --}}
    <script src="{{ asset('wp-content/themes/template/js/owl.carousel/owl.carousel.js') }}"></script>
    <script>
        jQuery.noConflict()(function ($) {

        let official_config = {
        autoHeight: false,
        nav: true,
        dots: false,
        items: 1,
        autoplay: false,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        vertical: false,
        margin: 10,
        navText: ['<i class="fad fa-chevron-circle-left"></i>', '<i class="fad fa-chevron-circle-right"></i>'],
        loop: false,
        rewind: true,
        responsiveClass: true,
        };
        // config_1
        // do nothing
        let config_1 = Object.assign({}, official_config);
        $(".aloha1").owlCarousel(config_1);
        // config_2
        let config_2 = Object.assign({}, official_config);
        config_2.responsive = {
        0: {
            items: 1,
        },
        300: {
            items: 2,
        },
        400: {
            items: 2,
        },
        601: {
            items: 2,
        },
        769: {
            items: 2,
        },
        1201: {
            items: 2,
        },
        };
        $(".aloha2").owlCarousel(config_2);
        // config_3
        let config_3 = Object.assign({}, official_config);
        config_3.responsive = {
        0: {
            items: 1,
        },
        300: {
            items: 2,
        },
        400: {
            items: 2,
        },
        601: {
            items: 2,
            margin: 10,
        },
        769: {
            items: 2,
            margin: 10,
        },
        1201: {
            items: 3,
            margin: 20,
        },
        };
        $(".aloha3").owlCarousel(config_3);
        // config_4
        let config_4 = Object.assign({}, official_config);
        config_4.responsive = {
        0: {
            items: 1,
        },
        300: {
            items: 2,
        },
        400: {
            items: 2,
        },
        601: {
            items: 2,
        },
        769: {
            items: 3,
        },
        1201: {
            items: 4,
            margin: 20,
        },
        };
        $(".aloha4").owlCarousel(config_4);
        // config_5
        let config_5 = Object.assign({}, official_config);
        config_5.responsive = {
        0: {
            items: 2,
        },
        300: {
            items: 2,
        },
        400: {
            items: 2,
        },
        601: {
            items: 3,
        },
        769: {
            items: 4,
        },
        1201: {
            items: 5,
            margin: 0
        },
        };
        // config_5.autoHeight = false;
        $(".aloha5").owlCarousel(config_5);
        // config_6
        let config_6 = Object.assign({}, official_config);
        config_6.responsive = {
        0: {
            items: 2,
        },
        300: {
            items: 2,
        },
        400: {
            items: 3,
        },
        601: {
            items: 4,
        },
        769: {
            items: 5,
        },
        1201: {
            items: 6,
            margin: 20
        },
        };
        $(".aloha6").owlCarousel(config_6);
        });
    </script>
    <!-- Bxslider -->
    <script src="{{ asset('wp-content/themes/template/js/bxslider-4-4.2.12/dist/jquery.bxslider.min.js') }}"></script>
    <script>
        jQuery.noConflict()(function ($) {
        $('.bxslider').bxSlider({
            auto: true,
            preloadImages: 'all',
            mode: 'horizontal',
            captions: false,
            controls: true,
            pause: 5000,
            nextText: "<i class='fad fa-chevron-circle-right'></i>",
            prevText: "<i class='fad fa-chevron-circle-left'></i>",
            mode: 'fade',
            speed: 200,
            pager: true,
            touchEnabled: false

        }
        );
        });
    </script>

    {{-- Icon footer --}}
    <script>
        function openCartPopup() {
        jQuery.noConflict()(function ($) {
            $("#cart_popup").show();
            $("#overlay").show();
        }
        );
        }

        function closeCartPopup() {
        jQuery.noConflict()(function ($) {
            $("#cart_popup").hide();
            $("#overlay").hide();
        }
        );
        }
    </script>
</div>
</body>
</html>
