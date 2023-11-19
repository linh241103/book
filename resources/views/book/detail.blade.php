@extends('templates.app')
@section('content')
<!DOCTYPE html PUBLIC>
<html>
<head>
    <link rel="stylesheet" href=" {{ asset('css/detail.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/sty.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#addToCartButton').click(function() {
                $.ajax({
                    url: $('#addToCartForm').attr('action'),
                    type: 'POST',
                    data: $('#addToCartForm').serialize(),
                    success: function(response) {
                        // Chuyển hướng người dùng đến trang giỏ hàng
                        window.location.href = '/cart';
                    }
                });
            });
        });
    </script>
</head>

<body data-rsssl=1>
<div id="main_contener">
    <div id="container">

        <div class="d_path">
            <div class="breadcrumbs">
            <span property="itemListElement" typeof="ListItem">
                <a property="item" typeof="WebPage" href="{{ route('index') }}" class="home" >
                    <span property="name">Frosty - Nhà Sách Trên Mạng</span>
                </a>
                <meta property="position" content="1">
            </span> / 
            <span property="itemListElement" typeof="ListItem">
                <a property="item" typeof="WebPage" href="{{ route('category.show', $book->category) }}" class="taxonomy danh-muc" >
                    <span property="name">{{ $book->category->name }}</span>
                </a>
                <meta property="position" content="2">
            </span> / 
            <span property="itemListElement" typeof="ListItem">
                <span property="name" class="post post-san-pham current-item">{{ $book->name }}</span>
                <meta property="url"><meta property="position" content="3">
            </span>
            </div>
        </div>
    </div>
    <div id="container">
        <div class="sortable" id="layoutGroup1">
            <div class="product_view_contener">
                <div class="showleft">
                    <div class="product_info">	
                        <h1 class="h1_title">{{ $book->name }}</h1>
                        <div class="groups">
                            <div class="viewfields">
                                <span>Tác giả: <a href="#">{{ $book->author }}</a></span>
                                <span>Phát hành: <a href="#">{{ $book->publisher }}</a></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="groups">

                            <div class="write_comment">
                                <a href="#comment"><i class="fa fa-pencil"></i> Gửi nhật xét của bạn</a>
                            </div>
                            <div class="add_wishlist">
                                <a href="#"><i class="fa fa-star"></i> Thêm vào yêu thích</a>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="prices_contener">
                            <div class="prices">
                                <div class="saleprice">
                                    <span id="saleprice">{{ $book->discount_price }} <sup>đ</sup></span>
                                </div>
                                <div class="vrootprice" id="rootprice">Giá bìa:<span>{{ $book->price }} <sup>đ</sup></span></div>
                                <div class="yousave" id="yousave">Tiết kiệm:<span>{{$book->discountAmount}} <sup>đ</sup> (-{{ $book->discount_rate }}%)</span></div>
                                    
                            </div>

                            <div class="goshop">
                                <form id="addToCartForm" method="post" action="{{ route('cart.add', ['bookId' => $book->id]) }}">
                                    @csrf
                                    <button type="button" id="addToCartButton">Mua ngay</button>
                                    <input type="hidden" name="product_id" value="3604">
                                    <input type="hidden" name="task" value="add">
                                    <input type="hidden" name="so_luong" class="cls_soluong" id="so_luong" value="1" min="1">
                                </form>
                            </div>                               
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                        <div class="clear"></div>
                        <div class="intro">
                            <div class="block " id="content_ViewProducts">
                                <div class="blockcontent">
                                    <p><i class="fa fa-check"></i>Bọc Plastic theo yêu cầu</p>
                                    <p>
                                        <i class="fa fa-check"></i>Giao hàng miễn phí trong nội thành TP. HCM với đơn hàng  <strong>≥ 200.000 đ</strong>
                                    </p>
                                    <p>Giao hàng miễn phí toàn quốc với đơn hàng <strong>≥ 350.000 đ</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>

                        <div class="fb-like" data-href="#" data-width=""
                             data-layout="standard" data-action="like" data-size="small" data-share="true">
                        </div>

                    </div>
                </div>
                <div class="image_contenner tr_pc" style="padding: 10px 36px;">
                    <div class="d_lightslider">
                        <div class="sing_pro" data-thumb="{{ asset('storage/images/'.$book->image) }}">
                            @if (is_file('storage/images/' . $book->image))
                                <a href="{{ asset('storage/images/'.$book->image) }}" class="fancybox" data-fancybox="single_product">
                                    <img src="{{ asset('storage/images/'.$book->image) }}" style="border: 1px solid #888888;box-shadow: 0 0 5px rgba(0,0,0,0.3);" />
                                </a>
                            @else
                                <a href="{{ asset('images/default-image.jpg') }}" class="fancybox" data-fancybox="single_product">
                                    <img src="{{ asset('images/default-image.jpg') }}" style="border: 1px solid #888888;box-shadow: 0 0 5px rgba(0,0,0,0.3);" />
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
               	<div class="clear"></div>
                <input type="hidden" name="formatid" id="formatid" value=""/>
                <input type="hidden" name="sizeid" id="sizeid" value=""/>
                <input type="hidden" name="colorid" id="colorid" value=""/>
            </div>

            <div class="block" id="module_ProductDetail">
                <h3>Giới thiệu sách</h3>
                <div class="intro" id="contentid">
                    <p>{{ $book->description }}</p>
                </div>
                <div class="viewmore" id="viewmore"><span>Xem thêm nội dung <i class="fa fa-sort-desc"></i></span></div>
            </div>  
            <script>
                jQuery.noConflict()(function ($) {
                    var contentid = $('#contentid');
                    var hieght = contentid.height();
                    $('#viewmore').hide();
                    if (hieght > 400) {
                        contentid.addClass('collapse');
                        $('#viewmore').show();
                    }
                    $('.viewmore').click(function () {
                        if (contentid.hasClass('collapse')) {
                            contentid.removeClass('collapse');
                            $('#viewmore span').empty();
                            $('#viewmore span').append('Thu gọn <i class="fa fa-sort-asc"></i>');
                        } else {
                            contentid.addClass('collapse');
                            $('#viewmore span').empty();
                            $('#viewmore span').append('Xem thêm nội dung <i class="fa fa-sort-desc"></i>');
                        }
                    });
                });
            </script>
            <div class="block" id="module_ProductFieds">
                <a name="fieldlist"></a>
                <h3>Thông tin chi tiết</h3>
                <table class="fields" cellpadding="0" cellspacing="0" width="100%">
                    <tr class="field_view_contenner row0">
                        <td class="title">
                            <a href="#" title="Tác giả">Tác giả</a>
                        </td>
                        <td class="values">
                            {{ $book->author }}
                        </td>
                    </tr>
                    <tr class="field_view_contenner row1">
                        <td class="title">
                            <a href="#" title="Phát hành">Phát hành</a>
                        </td>
                        <td class="values">
                            {{ $book->publisher }}
                        </td>
                    </tr>
                    <tr class="field_view_contenner row0">
                        <td class="title">
                            Kích thước
                        </td>
                        <td class="values">
                            13x18cm      
                        </td>
                    </tr>
                    <tr class="field_view_contenner row1">
                        <td class="title">
                            Trọng lượng
                        </td>
                        <td class="values">
                            500                        </td>
                    </tr>
                    <tr class="field_view_contenner row0">
                        <td class="title">
                            Số trang
                        </td>
                        <td class="values">
                            128                        </td>
                    </tr>
                    <tr class="field_view_contenner row1">
                        <td class="title">
                            Lượt xem
                        </td>
                        <td class="values">
                            88 lượt xem                        </td>
                    </tr>
                    <tr class="field_view_contenner row0">
                        <td class="title">
                            Ngày phát hành
                        </td>
                        <td class="values">
                            @if($book->is_upcoming)
                                {{ date('d/m/Y', strtotime($book->release_date)) }}
                            @else
                                {{ date('d/m/Y', strtotime($book->created_at)) }}
                            @endif
                        </td>
                    </tr>
                    <tr class="field_view_contenner row1">
                        <td class="title">
                            Danh mục
                        </td>
                        <td class="values">
                            <a href="{{ route('category.show', $book->category) }}">{{ $book->category->name  }}</a>
                        </td>
                    </tr>
                </table>
                <div class="goshop" style="margin-top: 13px">
                    <form id="addToCartForm" method="post" action="{{ route('cart.add', ['bookId' => $book->id]) }}">
                        @csrf
                        <button type="button" id="addToCartButton">Mua ngay</button>
                        <input type="hidden" name="product_id" value="3604">
                        <input type="hidden" name="task" value="add">
                        <input type="hidden" name="so_luong" class="cls_soluong" id="so_luong" value="1" min="1">
                    </form>
                </div>   
            </div>

            <div class="block" id="module_sameAuthor">
                <h3>Sách cùng tác giả</h3>
                <div class="blockcontent">
                    <div style="position:relative; padding:0 0;">
                        @foreach($booksBySameAuthor as $book)
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
            <div class="block" id="module_AlsoBought">
                <h3>Có thể bạn quan tâm</h3>
                <div class="blockcontent">
                    <div style="position:relative; padding:0 0;">
                       
                        @foreach($relatedBooks as $books)
                            <div class="product_contener">
                                <div class="products">
                                    <div class="image">
                                        <a href="{{ route('book.show', $books->id) }}">
                                            <img src="{{ asset('storage/images/'.$books->image) }}"/>
                                        </a>
                                        @if ($books->discount_rate > 0)
                                        <span class="saleprice">-{{ $books->discount_rate }}%</span>
                                        @endif       
                                    </div>
                                    <div class="productname short_excerpt product_excerpt">
                                        <a href="{{ route('book.show', $book->id) }}">{{ $books->name }}</a>
                                    </div>
                                    <div class="fields"><span><a href="#">{{ $books->author }}</a></span></div>
                                    @if ($books->discount_rate > 0)
                                    <div class="prices">{{  $books->discount_price }}<sup>đ</sup></div>
                                    <div class="rootprice">{{ $books->price }} <sup>đ</sup></div>
                                    @else
                                    <div class="prices">{{ $books->price }}<sup>đ</sup></div>
                                    @endif                   
                                </div>
                            </div>      
                        @endforeach                                                   
                    </div>
                </div>
            </div>
        </div>
            <div id="comment">
            <div class="wpdiscuz_top_clearing"></div>
            <div id='comments' class='comments-area' data-book-id="{{ $book->id }}">
                <div id='respond' style='width: 0;height: 0;clear: both;margin: 0;padding: 0;'></div>
                <div id='wpd-post-rating' class='wpd-not-rated'>
                    <div class='wpd-rating-wrap'>
                        <div class='wpd-rating-left'></div>
                        <div class='wpd-rating-data'>
                            <div class='wpd-rating-value'>
                                <span class='wpdrv'>0</span>
                                <span class='wpdrc'>0</span>
                                <span class='wpdrt'>đánh giá</span>
                            </div>
                            <div class='wpd-rating-title'>Đánh giá bài viết</div>
                            <div class='wpd-rate-starts'>
                                <svg xmlns='https://www.w3.org/2000/svg' viewBox='0 0 24 24'>
                                    <path d='M0 0h24v24H0z' fill='none'/>
                                    <path class='wpd-star' d='M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z'/>
                                    <path d='M0 0h24v24H0z' fill='none'/>
                                </svg>
                                <svg xmlns='https://www.w3.org/2000/svg' viewBox='0 0 24 24'>
                                    <path d='M0 0h24v24H0z' fill='none'/>
                                    <path class='wpd-star' d='M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z'/>
                                    <path d='M0 0h24v24H0z' fill='none'/>
                                </svg>
                                <svg xmlns='https://www.w3.org/2000/svg' viewBox='0 0 24 24'>
                                    <path d='M0 0h24v24H0z' fill='none'/>
                                    <path class='wpd-star' d='M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z'/>
                                    <path d='M0 0h24v24H0z' fill='none'/>
                                </svg>
                                <svg xmlns='https://www.w3.org/2000/svg' viewBox='0 0 24 24'>
                                    <path d='M0 0h24v24H0z' fill='none'/>
                                    <path class='wpd-star' d='M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z'/>
                                    <path d='M0 0h24v24H0z' fill='none'/>
                                </svg>
                                <svg xmlns='https://www.w3.org/2000/svg' viewBox='0 0 24 24'>
                                    <path d='M0 0h24v24H0z' fill='none'/>
                                    <path class='wpd-star' d='M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z'/>
                                    <path d='M0 0h24v24H0z' fill='none'/>
                                </svg>
                            </div>
                        </div>
                        <div class='wpd-rating-right'></div>
                    </div>
                </div>  
            </div>

            <div id="wpdcom" class="wpdiscuz_unauth wpd-default wpd-layout-1 wpd-comments-open">
                <div class="wc_social_plugin_wrapper"></div>
                <div class="wpd-form-wrap">
                    <div class="wpd-form-head">
                        <div class="wpd-sbs-toggle">
                            <i class="fa fa-envelope"></i> <span class="wpd-sbs-title">Theo dõi</span><i class="fa fa-caret-down"></i>
                        </div>
                        <div class="wpd-auth">
                            <div class="wpd-login">
                            <a rel="nofollow" href="#">
                            <i class='fa fa-sign-in'></i> Đăng nhập
                            </a>                        
                        </div>
                    </div>
                </div>
                <div class="wpdiscuz-subscribe-bar ">       
                    <form action="#" method="post" id="wpdiscuz-subscribe-form">
                        <div class="wpdiscuz-subscribe-form-intro">Thông báo của</div>
                        <div class="wpdiscuz-subscribe-form-option" style="width:40%;">
                            <select class="wpdiscuz_select" name="wpdiscuzSubscriptionType" >
                                <option value="post">bình luận theo dõi mới</option>
                                <option value="all_comment" >trả lời mới cho bình luận của tôi</option>
                            </select>
                        </div>
                        <div class="wpdiscuz-item wpdiscuz-subscribe-form-email">
                            <input  class="email" type="email" name="wpdiscuzSubscriptionEmail" required="required" value="" placeholder="Email"/>
                        </div>
                        <div class="wpdiscuz-subscribe-form-button">
                            <input id="wpdiscuz_subscription_button" class="wpd-prim-button" type="submit" value="&rsaquo;" name="wpdiscuz_subscription_button" />
                        </div> 
                        <input type="hidden" id="wpdiscuz_subscribe_form_nonce" name="wpdiscuz_subscribe_form_nonce" value="8c83cea3f8" /><input type="hidden" name="_wp_http_referer" value="/san-pham/annel-yeu-dau" />
                    </form>
                </div>
            </div>

            <div class="wpd-form wpd-form-wrapper wpd-main-form-wrapper" id='wpd-main-form-wrapper-0_0'>

                <form class="wpd_comm_form wpd_main_comm_form" action="{{ route('reviews.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf    
                    <input type="hidden" id="selectedRating" name="rating" value="">
                    <div class="wpd-field-comment">
                        <div class="wpdiscuz-item wc-field-textarea">
                            <div class="wpdiscuz-textarea-wrap ">
                                <div class="wpd-avatar">
                                    <img alt='guest' src='https://secure.gravatar.com/avatar/?s=56&amp;d=mm&amp;r=g' srcset='https://secure.gravatar.com/avatar/?s=112&#038;d=mm&#038;r=g 2x' class='avatar avatar-56 photo avatar-default' height='56' width='56' loading='lazy' decoding='async'/>                                    
                                </div>
                            <div id="wpd-editor-wraper-0_0" style="">
                                <label style="display: none;" for="wc-textarea-0_0">Label</label>
                                <textarea required placeholder="Hãy trở thành người đầu tiên bình luận!" name="comment"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="wpd-form-foot">
                        <div class="wpd-form-row">
                            <div class="wpd-form-col-left">
                                <div class="wpdiscuz-item wc_name-wrapper wpd-has-icon">
                                    <div class="wpd-field-icon"><i class="fa fa-user"></i></div>
                                    <input id="wc_name-0_0" required='required' aria-required='true' class="wc_name wpd-field" type="text" name="name" placeholder="Tên*" maxlength="50" pattern='.{3,50}' title="">
                                    <label for="wc_name-0_0" class="wpdlb">Tên*</label>
                                </div>
                                <div class="wpdiscuz-item wc_email-wrapper wpd-has-icon">
                                    <div class="wpd-field-icon"><i class="fa fa-at"></i></div>
                                    <input id="wc_email-0_0" value="" required='required' aria-required='true' class="wc_email wpd-field" type="email" name="email" placeholder="Email*" />
                                    <label for="wc_email-0_0" class="wpdlb">Email*</label>
                                </div>
                                <div class="wpdiscuz-item wc_website-wrapper wpd-has-icon">
                                    <div class="wpd-field-icon"><i class="fa fa-link"></i></div>
                                    <input id="wc_website-0_0" value="" class="wc_website wpd-field" type="text" name="web" placeholder="Trang web" />
                                    <label for="wc_website-0_0" class="wpdlb">Trang web</label>
                                </div>
                            </div>
                            <div class="wpd-form-col-right">
                                <div class="wc-field-submit">                   
                                    <label class="wpd_label" wpd-tooltip="Thông báo nếu có phản hồi mới cho bình luận này">
                                        <input id="wc_notification_new_comment-0_0" class="wc_notification_new_comment-0_0 wpd_label__checkbox" value="comment" type="checkbox" name="wpdiscuz_notification_type" />
                                        <span class="wpd_label__text">
                                            <span class="wpd_label__check">
                                                <i class="fa fa-bell wpdicon wpdicon-on"></i>
                                                <i class="fa fa-bell-slash wpdicon wpdicon-off"></i>
                                            </span>
                                        </span>
                                    </label>
                                    
                                    <input type="hidden" name="book_id" value="{{ $book->id }}">
                                    
                                    <input id="wpd-field-submit-0_0" class="wc_comm_submit wpd_not_clicked wpd-prim-button" type="submit" value="Đăng bình luận" />
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </form>
            </div>
                
                <div id="wpd-threads" class="wpd-thread-wrapper">
                    <div class="wpd-thread-head">
                        <div class="wpd-thread-info " data-comments-count="0">
                            <span class='wpdtc' title='0'>{{count($reviews)}}</span> Góp ý                    
                        </div>
                        <div class="wpd-space">
                            
                        </div>
                        <div class="wpd-thread-filter">
                            <div class="wpd-filter wpdf-reacted wpd_not_clicked" wpd-tooltip="Bình luận phản ứng nhiều nhất"><i class="fa fa-bolt"></i></div>
                            <div class="wpd-filter wpdf-hottest wpd_not_clicked" wpd-tooltip="Chủ đề bình luận hot nhất"><i class="fa fa-fire"></i></div>
                        </div>
                    </div>
                </div>

                <div>
                    @if(count($reviews) == 0)
                        <p style="display: flex; padding: 20px 0 0 0;">Chưa có đánh giá</p>
                    @else
                        @foreach($reviews as $review)
                            <div style="display: flex; padding: 20px 0 0 0;">
                                <div class="wpd-avatar">
                                    <img src='https://secure.gravatar.com/avatar/?s=56&amp;d=mm&amp;r=g'/>
                                </div>
                                <div>
                                    <strong>{{ $review->name }}</strong>
                                    @if(isset($review->rating))
                                        {{-- <p>Số đánh giá: {{ $review->rating }}</p> --}}
                                        <div class="wpd-rating-stars">
                                            @for ($i = 0; $i < $review->rating; $i++)
                                                <svg xmlns='https://www.w3.org/2000/svg' viewBox='0 0 24 24'>
                                                    <path d='M0 0h24v24H0z' fill='none'/>
                                                    <path class='wpd-star' d='M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z'/>
                                                    <path d='M0 0h24v24H0z' fill='none'/>
                                                </svg>
                                            @endfor
                                        </div>
                                    @else
                                        <p>Chưa có đánh giá</p>
                                    @endif
                                    <p>{{ $review->comment }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                
                <div class="wpd-comment-info-bar">
                    <div class="wpd-current-view"><i class="fas fa-quote-left"></i> Phản hồi nội tuyến</div>
                    <div class="wpd-filter-view-all">Xem tất cả bình luận</div>
                </div>
                <div class="wpd-thread-list">
                    <div class="wpdiscuz-comment-pagination"></div>
                </div>
                {{-- {{dd($book)}} --}}
    
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const commentSections = document.querySelectorAll('.comments-area');

        commentSections.forEach(function (commentSection) {
            const starIcons = commentSection.querySelectorAll('.wpd-star');
            const starCountElement = commentSection.querySelector('.wpdrv');
            const bookId = commentSection.dataset.bookId;
            const ratingInput = document.getElementById('selectedRating');

            // Kiểm tra trạng thái đăng nhập bằng cách sử dụng Laravel Jetstream
            const isLoggedIn = @json(auth()->check());

            // Tải đánh giá trước đó từ localStorage nếu đã đăng nhập
            if (isLoggedIn) {
                const savedRating = localStorage.getItem(`userRating_${bookId}`);
                if (savedRating) {
                    starCountElement.textContent = savedRating;

                    // Thêm lớp 'active' cho các sao dựa trên đánh giá đã lưu
                    for (let i = 0; i < savedRating; i++) {
                        starIcons[i].classList.add('active');
                    }
                }
            }

            // Lắng nghe sự kiện click trên các sao nếu đăng nhập
            if (isLoggedIn) {
                starIcons.forEach(function (star, index) {
                    star.addEventListener('click', function () {
                        // Lấy giá trị đánh giá (index + 1 vì index bắt đầu từ 0)
                        const rating = index + 1;
                        starCountElement.textContent = rating; // Đặt giá trị vào thẻ <span class='wpdrv'>
                        console.log('Selected Rating:', rating);

                        // Lưu đánh giá vào localStorage
                        localStorage.setItem(`userRating_${bookId}`, rating);

                        // Loại bỏ lớp 'active' từ tất cả các sao
                        starIcons.forEach(function (s) {
                            s.classList.remove('active');
                        });

                        // Thêm lớp 'active' cho các sao đã chọn
                        for (let i = 0; i <= index; i++) {
                            starIcons[i].classList.add('active');
                        }
                        ratingInput.value = rating;
                    });
                });
            }
        });
    });
</script>
</body>
</html>
@endsection