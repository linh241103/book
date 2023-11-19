@extends('templates.app')
@section('content')
<head>
    <link rel="stylesheet" href=" {{ asset('css/cate.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/sty.css') }}">
</head>
<body data-rsssl=1>
<div id="main_contener">    

    <div id="container">

        <div class="d_path">
            <div class="breadcrumbs">
                <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" href="{{ route('index') }}" class="home" ><span property="name">Frosty - Nhà Sách Trên Mạng</span></a><meta property="position" content="1"></span> / <span property="itemListElement" typeof="ListItem"><span property="name">{{ $category->name }}</span><meta property="position" content="2"></span>
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

            <div class="block" id="module_listfields">
                
                <div class="fields_contener">
                    <h2>Tác giả</h2>
                    <div class="blockcontent">
                        <div class="showboxfield">
                            @foreach ($allAuthors as $author)
                            <div class="checkbox_item ">
                                <a href="{{ route('category.author.books', ['category' => $category, 'author' => $author]) }}">
                                    <div class="checkbox">
                                        <i class="fa {{ $books->where('author', $author)->count() > 0 ? 'fa-check-square' : 'fa-square-o' }}"></i>
                                        {{ $author }}<span class="count"> ({{ $books->where('author', $author)->count() }})
                                        </span>
                                        <span class="delete"></span>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                <div class="fields_contener">
                    <h2>Phát hành</h2>
                    <div class="blockcontent">
                        <div class="showboxfield">
                            @foreach ($books->groupBy('publisher') as $publisher => $booksByPublisher)
                            <div class="checkbox_item ">
                                <a href="#" title="Comicola">
                                    <div class="checkbox">
                                        <i class="fa fa-square-o"></i>  
                                        {{ $publisher }}<span class="count"> ({{ $booksByPublisher->count() }})</span>
                                        <span class="delete"></span>
                                    </div>
                                </a>
                            </div>    
                            @endforeach      
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="sortable" id="layoutGroup4">
            <div class="block" id="module_listproducts">
                <h1>{{ $category->name }}</h1>
                <div class="intro"></div>
                <div class="clear"></div>
                <div class="pagesright">
                    <div class="views">
                        <a class="active fa fa-th-large" href="#"
                           title="Xem danh sách theo dạng lưới">
                        </a>
                        <a class=" fa fa-th-list" href="#"
                           title="Xem theo dạng danh sách">
                        </a>
                    </div>
                    <div class="sorts">
                        Xem theo: &nbsp;&nbsp;&nbsp;

                        
                        <select id="order" name="item_order">
                            <option value="#" selected>Mới trước
                                cũ sau
                            </option>
                            <option value="#" >Cũ trước
                                mới sau
                            </option>
                            <option value="#" >Giá thấp
                                đến cao
                            </option>
                            <option value="#" >Giá cao
                                đến thấp
                            </option>
                            <option value="#" >Bán chạy
                                nhất
                            </option>
                            <option value="#" >Xem
                                nhiều
                            </option>
                            <option value="#" >Ngày xuất
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
                    <div id="rela_news_page" class="d_text_center">
                        <div class="d_navigation">
                            <ul>
                                <li class="disable"><span>Đầu</span></li>
                                <li class="disable"><span><i class="fal fa-long-arrow-left"></i></span></li>
                                <li class="d_central_page active"><a href="#">1</a></li>
                                <li class="d_central_page"><a href="#">2</a></li>
                                <li class="d_central_page"><a href="#">3</a></li>
                                <li>...</li><li class="d_central_page"><a href="#">11</a></li>
                                <li class="d_central_page"><a href="#">12</a></li>
                                <li><a href="#">Cuối</a></li>
                                <li><a href="#"><i class="fal fa-long-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    
                <div class="clear">&nbsp;</div>

                <div class="clear"></div>

                <div class="clear"></div>
            </div>

        </div>
    </div>
    <div class="clear"></div>
</div>
<script>window.lazyLoadOptions={elements_selector:"iframe[data-lazy-src]",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,callback_loaded:function(element){if(element.tagName==="IFRAME"&&element.dataset.rocketLazyload=="fitvidscompatible"){if(element.classList.contains("lazyloaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}};window.addEventListener('LazyLoad::Initialized',function(e){var lazyLoadInstance=e.detail.instance;if(window.MutationObserver){var observer=new MutationObserver(function(mutations){var image_count=0;var iframe_count=0;var rocketlazy_count=0;mutations.forEach(function(mutation){for(var i=0;i<mutation.addedNodes.length;i++){if(typeof mutation.addedNodes[i].getElementsByTagName!=='function'){continue}
if(typeof mutation.addedNodes[i].getElementsByClassName!=='function'){continue}
images=mutation.addedNodes[i].getElementsByTagName('img');is_image=mutation.addedNodes[i].tagName=="IMG";iframes=mutation.addedNodes[i].getElementsByTagName('iframe');is_iframe=mutation.addedNodes[i].tagName=="IFRAME";rocket_lazy=mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');image_count+=images.length;iframe_count+=iframes.length;rocketlazy_count+=rocket_lazy.length;if(is_image){image_count+=1}
if(is_iframe){iframe_count+=1}}});if(image_count>0||iframe_count>0||rocketlazy_count>0){lazyLoadInstance.update()}});var b=document.getElementsByTagName("body")[0];var config={childList:!0,subtree:!0};observer.observe(b,config)}},!1)</script><script data-no-minify="1" async src="https://nobita.vn/wp-content/plugins/wp-rocket/assets/js/lazyload/17.8.3/lazyload.min.js"></script><script>function lazyLoadThumb(e){var t='<img src="https://i.ytimg.com/vi/ID/hqdefault.jpg" alt="" width="480" height="360">',a='<button class="play" aria-label="play Youtube video"></button>';return t.replace("ID",e)+a}function lazyLoadYoutubeIframe(){var e=document.createElement("iframe"),t="ID?autoplay=1";t+=0===this.parentNode.dataset.query.length?'':'&'+this.parentNode.dataset.query;e.setAttribute("src",t.replace("ID",this.parentNode.dataset.src)),e.setAttribute("frameborder","0"),e.setAttribute("allowfullscreen","1"),e.setAttribute("allow", "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"),this.parentNode.parentNode.replaceChild(e,this.parentNode)}document.addEventListener("DOMContentLoaded",function(){var e,t,p,a=document.getElementsByClassName("rll-youtube-player");for(t=0;t<a.length;t++)e=document.createElement("div"),e.setAttribute("data-id",a[t].dataset.id),e.setAttribute("data-query", a[t].dataset.query),e.setAttribute("data-src", a[t].dataset.src),e.innerHTML=lazyLoadThumb(a[t].dataset.id),a[t].appendChild(e),p=e.querySelector('.play'),p.onclick=lazyLoadYoutubeIframe});
</script>
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