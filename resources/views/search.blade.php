@extends('templates.app')
@section('content')
<head>
    <script>
        var mainmenu = document.querySelector('.mainmenu');
        var submenuWrapper = document.querySelector('.submenu-wrapper');
        var timer;

        mainmenu.addEventListener('mouseover', function() {
            clearTimeout(timer); // Hủy bỏ timer nếu còn đang chạy
            submenuWrapper.style.display = 'block';
        });

        mainmenu.addEventListener('mouseleave', function() {
            timer = setTimeout(function () {
                submenuWrapper.style.display = 'none';
            }, 500); // Sau 500ms (0.5 giây), ẩn menu nếu không hover lại
        });
    </script>
    <link rel="stylesheet" href=" {{ asset('css/cate.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/sty.css') }}">
</head>
<body data-rsssl=1>
<div id="main_contener">    

    <div id="container">

        <div class="d_path">
            <div class="breadcrumbs">
                <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Nobita.vn - Nhà Sách Trên Mạng." href="{{ route('index') }}" class="home" ><span property="name">Nobita.vn - Nhà Sách Trên Mạng</span></a><meta property="position" content="1"></span> / <span property="itemListElement" typeof="ListItem"><span property="name">Tìm kiếm sản phẩm với từ khóa: {{ $query }} </span><meta property="position" content="2"></span>
            </div>      
        </div>

    </div>

    <div id="container">
        <div class="sortable" id="layoutGroup3">
            <div class="block" id="module_categories">
                <h2>Danh mục</h2>
                <div class="blockcontent">
                    <ul>
                        @foreach ($categories as $cate)
                        <li>
                            <a href='{{ route('category.show', $cate->id) }}'>{{ $cate->name }}</a>
                        </li>
                        @endforeach  
                    </ul>
                </div>
            </div>

        </div>
        <div class="sortable" id="layoutGroup4">
            <div class="block" id="module_listproducts">
                <h2>Tìm Kiếm Sản Phẩm Với Từ Khóa: "{{ $query }}"</h2>
                <div class="intro"></div>
                <div class="clear"></div>
                <div class="pagesright">
                    <div class="views">
                                                <a class="active fa fa-th-large" href="https://nobita.vn/danh-muc/danh-muc-1-1?cty_phat_hanh=&amp;tac_gia=&amp;nxb=&amp;sort=0&amp;pages=&amp;view=0"
                           title="Xem danh sách theo dạng lưới"></a>
                        <a class=" fa fa-th-list" href="https://nobita.vn/danh-muc/danh-muc-1-1?cty_phat_hanh=&amp;tac_gia=&amp;nxb=&amp;sort=0&amp;pages=&amp;view=1"
                           title="Xem theo dạng danh sách"></a>
                    </div>
                    <div class="sorts">
                        Xem theo: &nbsp;&nbsp;&nbsp;

                        
                        <select id="order" name="item_order">
                            <option value="https://nobita.vn/danh-muc/danh-muc-1-1?cty_phat_hanh=&tac_gia=&nxb=&view=0&sort=0" selected>Mới trước
                                cũ sau
                            </option>
                            <option value="https://nobita.vn/danh-muc/danh-muc-1-1?cty_phat_hanh=&amp;tac_gia=&amp;nxb=&amp;view=0&amp;sort=1" >Cũ trước
                                mới sau
                            </option>
                            <option value="https://nobita.vn/danh-muc/danh-muc-1-1?cty_phat_hanh=&amp;tac_gia=&amp;nxb=&amp;view=0&amp;sort=2" >Giá thấp
                                đến cao
                            </option>
                            <option value="https://nobita.vn/danh-muc/danh-muc-1-1?cty_phat_hanh=&amp;tac_gia=&amp;nxb=&amp;view=0&amp;sort=3" >Giá cao
                                đến thấp
                            </option>
                            <option value="https://nobita.vn/danh-muc/danh-muc-1-1?cty_phat_hanh=&amp;tac_gia=&amp;nxb=&amp;view=0&amp;sort=4" >Bán chạy
                                nhất
                            </option>
                            <option value="https://nobita.vn/danh-muc/danh-muc-1-1?cty_phat_hanh=&amp;tac_gia=&amp;nxb=&amp;view=0&amp;sort=5" >Xem
                                nhiều
                            </option>
                            <option value="https://nobita.vn/danh-muc/danh-muc-1-1?cty_phat_hanh=&amp;tac_gia=&amp;nxb=&amp;view=0&amp;sort=6" >Ngày xuất
                                bản
                            </option>
                        </select>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <div class="blockcontent">
                    @foreach ($books as $book)
                        <div class="product_contener">
                            <div class="products">
                                <div class="image">
                                    <a href="{{ route('book.show', $book->id) }}">
                                        <img src="{{ asset('storage/images/'.$book->image) }}"/>
                                    </a>
                                    @if ($book->discount_rate > 0)
                                        <span class="saleprice">-{{ $book->discount_rate }}%</span>
                                    @endif                                          
                                </div>
                                <div class="d_pro_content">
                                    <div class="productname short_excerpt product_excerpt">
                                        <a href="{{ route('book.show', $book->id) }}">{{ $book->name }}</a>
                                    </div>                                        
                                    <div class="fields"><span><a href="#">{{ $book->author }}</a></span></div>
                                    <div class="d_price_group">
                                        @if ($book->discount_rate > 0)
                                        <div class="prices">{{  $book->discount_price }}<sup>đ</sup></div>
                                        <div class="rootprice">{{ $book->price }} <sup>đ</sup></div>
                                        @else
                                        <div class="prices">{{ $book->price }}<sup>đ</sup></div>
                                        @endif
                                    </div>
                                    <div class="intro product_excerpt short_excerpt"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                   
                    
                <div class="clear">&nbsp;</div>

                <div class="clear"></div>

                <div class="clear"></div>
            </div>

        </div>
    </div>
    <div class="clear"></div>
</div>
</body>
@endsection