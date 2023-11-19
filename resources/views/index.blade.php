@extends('templates.app')
@section('content')
<div id="container">
    <div id="header" class="tr_pc">
        <div id="mainmenu">
            <div class="mainmenu">
                <ul>
                    <li class="group"><a class="havechild">Nổi bật</a>
                        <ul class="submenu1" id="submenu1">
                            <li><a href="#">Sách bán chạy</a> </li>
                            <li><a href="#">Sách mới</a> </li>
                            <li><a href="#">Sắp phát hành</a> </li>
                            <li><a href="#">Sách giảm giá</a> </li>
                        </ul>
                    </li>

                    @foreach ($categories as $category)
                        <li data-value='245' class='degree_1'>
                            <a href='{{ route('category.show', $category->id) }}'>{{ $category->name }}</a>
                        </li>
                    @endforeach           
                </ul>
            </div>
        </div>
    </div>
    <div id="mainbanner">
        <div class="mainbaner">
            <div id="slider-wrapper">
                <ul class="bxslider">
                    <li><a href="#" target="_self">
                        <img style="height: 397px;" src="{{ asset('wp-content/uploads/2018/01/banner1.jpg') }}"></a>
                    </li>
                    <li><a href="#" target="_self">
                        <img style="height: 397px;" src="{{ asset('wp-content/uploads/2018/01/loai-3-01.jpg') }}"></a>
                    </li>
                    <li><a href="#" target="_self">
                        <img style="height: 397px;" src="{{ asset('wp-content/uploads/2018/01/3d.jpg') }}">
                    </a></li>
                    <li><a href="#" target="_self">
                        <img style="height: 397px;" src="{{ asset('wp-content/uploads/2018/01/truyen-ma-anh-pr-06.jpg') }}">
                    </a></li>           
                </ul>
            </div>
        </div>
    </div>
    <div class="sortable" id="layoutGroup1">
    <div class="block" id="module_newproducts">

        <h2>
            <a class="title" href="sach-moi.html" title="Sách mới" style="background-color: #5CACEE;">Sách mới
                <span class="b-main__category-arrow"></span>
            </a>
            <a class="more" href="sach-moi.html" title="Xem tất cả">Xem tất cả</a>
        </h2>

        <div class="blockcontent">

            <div class="newproducts" style="position:relative; padding:0 20px; overflow:hidden;">

                <div class="aloha5 owl-carousel">
                    @foreach ($newBooks as $book)
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
                                <div class="productname short_excerpt product_excerpt">
                                    <a href="{{ route('book.show', $book->id) }}">{{ $book->name }}</a>
                                </div>
                                <div class="fields"><span><a href="#">{{ $book->author }}</a></span></div>
                                @if ($book->discount_rate > 0)
                                <div class="prices">{{  $book->discount_price }}<sup>đ</sup></div>
                                <div class="rootprice">{{ $book->price }} <sup>đ</sup></div>
                                @else
                                <div class="prices">{{ $book->price }}<sup>đ</sup></div>
                                @endif                                        
                            </div>
                        </div>
                    @endforeach                          
                </div>



            </div>

        </div>


    </div>

    <div class="block" id="module_newproducts">

        <h2>
            <a class="title" href="sap-phat-hanh.html" style="background-color: #5CACEE;">Sắp phát hành<span
                        class="b-main__category-arrow"></span></a>
            <a class="more" href="#" title="Xem tất cả">Xem tất cả</a>
        </h2>

        <div class="blockcontent">

            <div class="newproducts" style="position:relative; padding:0 20px; overflow:hidden;">

                <div class="aloha5 owl-carousel">

                    @foreach($upcomingBooks as $book)
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
                                <div class="productname short_excerpt product_excerpt">
                                    <a href="{{ route('book.show', $book->id) }}">{{ $book->name }}</a>
                                </div>
                                <div class="fields"><span><a href="#">{{ $book->author }}</a></span></div>
                                    @if ($book->discount_rate > 0)
                                    <div class="prices">{{  $book->discount_price }}<sup>đ</sup></div>
                                    <div class="rootprice">{{ $book->price }} <sup>đ</sup></div>
                                    @else
                                    <div class="prices">{{ $book->price }}<sup>đ</sup></div>
                                    @endif
                            </div>
                        </div>
                    @endforeach                           
                                                    
                </div>
            </div>

        </div>
    </div>


            <div class="block" id="module_newproducts">

                <h2>
                    <a class="title" href="loai-sp/sach-ban-chay.html" style="background-color: #5CACEE;">Sách bán chạy<span
                                class="b-main__category-arrow"></span></a>

                    <a class="more" href="sach-ban-chay.html" title="Xem tất cả">Xem tất cả</a>
                </h2>

                <div class="blockcontent">

                    <div class="newproducts"
                         style="position:relative; padding:0 20px; overflow:hidden;">

                        <div class="aloha5 owl-carousel">
                                <div class="product_contener">
                                    <div class="products">
                                        <div class="image"><a
                                                    href="san-pham/thuong-tien-tuu-tap-4-mem-2.html"
                                                    title="Thương Tiến Tửu – Tập 4 ( bản đặc biệt)"><img
                                                        src="wp-content/uploads/2023/09/bia-1-mem-ttt4-1.jpg"
                                                        alt="Thương Tiến Tửu – Tập 4 ( bản đặc biệt)"
                                                        title="Thương Tiến Tửu – Tập 4 ( bản đặc biệt)"/></a>

                                            
                                        </div>
                                        <div class="productname short_excerpt product_excerpt">
                                            <a href="san-pham/thuong-tien-tuu-tap-4-mem-2.html"
                                               title="Thương Tiến Tửu – Tập 4 ( bản đặc biệt)">Thương Tiến Tửu – Tập 4 ( bản đặc biệt)</a>
                                        </div>

                                        
                                        <div class="fields"><span><a href="tac-gia/duong-tuu-khanh.html"
                                                                     title="Đường Tửu Khanh">Đường Tửu Khanh</a></span></div>


                                        <div class="prices">239.000 <sup>đ</sup></div>

                                        
                                    </div>
                                </div>
                                
                        </div>
                    </div>
                </div>
            </div>
            
    <div class="block" id="module_topcategories">
        <h2>
            <a class="title" href="#" title="Danh mục" style="background-color: #5CACEE;">Danh mục<span
                        class="b-main__category-arrow"></span></a>
            <a class="more" href="#" title="Xem tất cả">Xem tất cả</a>
        </h2>
                <div class="blockcontent">
                    <div style="position:relative; padding:0; overflow:hidden; margin-left:-4%">
                        @foreach ($categories as $category)
                            <div class="category_contener">
                                @php
                                    $book = $category->books->first(); 
                                @endphp
                                <div class="categories">
                                    <div class="image"><a href="{{ route('category.show', $book->category) }}">
                                        <img src="{{ asset('storage/images/'.$book->image) }}"/></a>
                                    </div>
                                    <div class="catname">
                                        <a href="{{ route('category.show', $book->category) }}">{{ $category->name }}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>                                 
                </div>
        </div>
    </div>
    <div class="block " id="content_seohome">
        <div class="blockcontent">
            <h3><span style="font-family: 'times new roman', times, serif;">Mua Sách Online Tại Linh.Vn</span></h3><hr style="border-top: 0.5px solid #BBBBBB; margin: 10px 0; opacity: 0.5;" size="1" noshade>
            <p><span style="font-family: 'times new roman', times, serif;">Ra đời từ năm 2011, đến nay <strong>Linh.vn</strong> đã trở thành địa chỉ <a href="index.html"><strong>mua sách online</strong></a> quen thuộc của hàng ngàn độc giả trên cả nước. Với đầu sách phong phú, thuộc các thể loại: <strong><a href="index.html">Văn học nước ngoại</a>, <a href="index.html">Văn học trong nước</a>, <a href="index.html">Kinh tế</a>, <a href="index.html">Kỹ năng sống</a>, <a href="index.html">Thiếu nhi</a>, <a href="index.html">Sách học ngoại ngữ</a>, <a href="index.html">Sách chuyên ngành</a></strong>,... được cập nhật liên tục từ các nhà xuất bản uy tín trong nước.</span></p>
            <p><span style="font-family: 'times new roman', times, serif;">Ngoài ra, với hình thức <strong>Giao hàng thu tiền tận nơi</strong> và <strong>Đổi hàng trong vòng 7 ngày</strong> nếu sách có bất kỳ lỗi nào trong quá trình in ấn sẽ giúp Quý khách yên tâm hơn khi mua sắm tại Nobita.vn</span></p>
            <p>&nbsp;</p>
        </div>
    </div>
</div>
@endsection