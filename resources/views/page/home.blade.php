@extends('layouts.home.page')
@section('content')
<!-- banner -->
<div class="banner" id="home1">
    <div class="container">
        <h3>fashions fade, <span>style is eternal</span></h3>
    </div>
</div>
<!-- //banner -->

<!-- banner-bottom -->
<div class="banner-bottom">
    <div class="container">
        <div class="col-md-5 wthree_banner_bottom_left">
            <div class="video-img">
                <a class="play-icon popup-with-zoom-anim" href="#small-dialog">
                    <span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
                </a>
            </div>
            <div id="small-dialog" class="mfp-hide">
                <iframe src="https://player.vimeo.com/video/23259282?title=0&byline=0&portrait=0"></iframe>
            </div>
            <script>
                $(document).ready(function() {
                    $('.popup-with-zoom-anim').magnificPopup({
                        type: 'inline',
                        fixedContentPos: false,
                        fixedBgPos: true,
                        overflowY: 'auto',
                        closeBtnInside: true,
                        preloader: false,
                        midClick: true,
                        removalDelay: 300,
                        mainClass: 'my-mfp-zoom-in'
                    });

                });
            </script>
        </div>
        <div class="col-md-7 wthree_banner_bottom_right">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home">Watches</a></li>
                    <li role="presentation"><a href="#skirts" role="tab" id="skirts-tab" data-toggle="tab" aria-controls="skirts">Skirts</a></li>
                    <li role="presentation"><a href="#watches" role="tab" id="watches-tab" data-toggle="tab" aria-controls="watches">T-shirts</a></li>
                    <li role="presentation"><a href="#sandals" role="tab" id="sandals-tab" data-toggle="tab" aria-controls="sandals">Sandals</a></li>
                    <li role="presentation"><a href="#jewellery" role="tab" id="jewellery-tab" data-toggle="tab" aria-controls="jewellery">Jewellery</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                        <div class="agile_ecommerce_tabs">
                            @if($productInCategory)
                                @foreach($productInCategory as $items)
                                    @if($items->category_id == 6)
                                        <div class="col-md-4 agile_ecommerce_tab_left">
                                            <div class="hs-wrapper">
                                                <img src="page/image/product/{{ $items->image }}" alt=" " class="img-responsive" />
                                                @if($items->images)
                                                    @foreach($items->images as $item)
                                                        <img src="page/image/product/{{ $item->img_name }}" alt=" " class="img-responsive" />
                                                    @endforeach
                                                @endif
                                                <div class="w3_hs_bottom">
                                                    <ul>
                                                        <li>
                                                            <a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h5><a href="/detail">{{ $items->title }}</a></h5>
                                            <div class="simpleCart_shelfItem">
                                                <p><span>{{ number_format($items->unit_price) }}</span><i class="item_price">{{ number_format($items->promotion_price) }}</i></p>
                                                <p><a class="item_add" href="#">Add to cart</a></p>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="skirts" aria-labelledby="skirts-tab">
                        <div class="agile_ecommerce_tabs">
                            @if($productInCategory)
                                @foreach($productInCategory as $items)
                                    @if($items->category_id == 2)
                                        <div class="col-md-4 agile_ecommerce_tab_left">
                                            <div class="hs-wrapper">
                                                <img src="page/image/product/{{ $items->image }}" alt=" " class="img-responsive" />
                                                @if($items->images)
                                                    @foreach($items->images as $item)
                                                        <img src="page/image/product/{{ $item->img_name }}" alt=" " class="img-responsive" />
                                                    @endforeach
                                                @endif
                                                <div class="w3_hs_bottom">
                                                    <ul>
                                                        <li>
                                                            <a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h5><a href="/detail">{{ $items->title }}</a></h5>
                                            <div class="simpleCart_shelfItem">
                                                <p><span>{{ number_format($items->unit_price) }}</span> <span>đ</span><i class="item_price">{{ number_format($items->promotion_price) }}</i></p>
                                                <p><a class="item_add" href="#">Add to cart</a></p>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="watches" aria-labelledby="watches-tab">
                        <div class="agile_ecommerce_tabs">
                            @if($productInCategory)
                                @foreach($productInCategory as $items)
                                    @if($items->category_id == 1)
                                        <div class="col-md-4 agile_ecommerce_tab_left">
                                            <div class="hs-wrapper">
                                                <img src="page/image/product/{{ $items->image }}" alt=" " class="img-responsive" />
                                                @if($items->images)
                                                    @foreach($items->images as $item)
                                                        <img src="page/image/product/{{ $item->img_name }}" alt=" " class="img-responsive" />
                                                    @endforeach
                                                @endif
                                                <div class="w3_hs_bottom">
                                                    <ul>
                                                        <li>
                                                            <a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h5><a href="/detail">{{ $items->title }}</a></h5>
                                            <div class="simpleCart_shelfItem">
                                                <p><span>$320</span> <i class="item_price">{{ $items->unit_price }}</i></p>
                                                <p><a class="item_add" href="#">Add to cart</a></p>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="sandals" aria-labelledby="sandals-tab">
                        <div class="agile_ecommerce_tabs">
                            @if($productInCategory)
                                @foreach($productInCategory as $items)
                                    @if($items->category_id == 5)
                                        <div class="col-md-4 agile_ecommerce_tab_left">
                                            <div class="hs-wrapper">
                                                <img src="page/image/product/{{ $items->image }}" alt=" " class="img-responsive" />
                                                @if($items->images)
                                                    @foreach($items->images as $item)
                                                        <img src="page/image/product/{{ $item->img_name }}" alt=" " class="img-responsive" />
                                                    @endforeach
                                                @endif
                                                <div class="w3_hs_bottom">
                                                    <ul>
                                                        <li>
                                                            <a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h5><a href="/detail">{{ $items->title }}</a></h5>
                                            <div class="simpleCart_shelfItem">
                                                <p><span>{{ number_format($items->unit_price) }}</span> <i class="item_price">đ{{ number_format($items->promotion_price) }}</i></p>
                                                <p><a class="item_add" href="#">Add to cart</a></p>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="jewellery" aria-labelledby="jewellery-tab">
                        <div class="agile_ecommerce_tabs">
                            @if($productInCategory)
                                @foreach($productInCategory as $items)
                                    @if($items->category_id == 3)
                                        <div class="col-md-4 agile_ecommerce_tab_left">
                                            <div class="hs-wrapper">
                                                <img src="page/image/product/{{ $items->image }}" alt=" " class="img-responsive" />
                                                @if($items->images)
                                                    @foreach($items->images as $item)
                                                        <img src="page/image/product/{{ $item->img_name }}" alt=" " class="img-responsive" />
                                                    @endforeach
                                                @endif
                                                <div class="w3_hs_bottom">
                                                    <ul>
                                                        <li>
                                                            <a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h5><a href="/detail">{{ $items->title }}</a></h5>
                                            <div class="simpleCart_shelfItem">
                                                <<p><span>{{ number_format($items->unit_price) }}</span> <i class="item_price">đ{{ number_format($items->promotion_price) }}</i></p>
                                                <p><a class="item_add" href="#">Add to cart</a></p>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--modal-video-->
            <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <section>
                            <div class="modal-body">
                                <div class="col-md-5 modal_body_left">
                                    <img src="page/images/20.jpg" alt=" " class="img-responsive" />
                                </div>
                                <div class="col-md-7 modal_body_right">
                                    <h4>a good look women's shirt</h4>
                                    <p>Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.Duis aute irure dolor in
                                        reprehenderit in voluptate velit esse cillum dolore
                                        eu fugiat nulla pariatur. Excepteur sint occaecat
                                        cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id est laborum.</p>
                                    <div class="rating">
                                        <div class="rating-left">
                                            <img src="page/images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="page/images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="page/images/star-.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="page/images/star.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="page/images/star.png" alt=" " class="img-responsive" />
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="modal_body_right_cart simpleCart_shelfItem">
                                        <p><span>$320</span> <i class="item_price">$250</i></p>
                                        <p><a class="item_add" href="#">Add to cart</a></p>
                                    </div>
                                    <h5>Color</h5>
                                    <div class="color-quality">
                                        <ul>
                                            <li><a href="#"><span></span>Red</a></li>
                                            <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                            <li><a href="#" class="purple"><span></span>Purple</a></li>
                                            <li><a href="#" class="gray"><span></span>Violet</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //banner-bottom -->

<!-- banner-bottom1 -->
<div class="banner-bottom1">
    <div class="agileinfo_banner_bottom1_grids">
        <div class="col-md-7 agileinfo_banner_bottom1_grid_left">
            <h3>Grand Opening Event With flat<span>20% <i>Discount</i></span></h3>
            <a href="products.html">Shop Now</a>
        </div>
        <div class="col-md-5 agileinfo_banner_bottom1_grid_right">
            <h4>hot deal</h4>
            <div class="timer_wrap">
                <div id="counter"> </div>
            </div>
            <script src="{{ asset('js/jquery.countdown.js') }}"></script>
            <script src="{{ asset('js/script.js') }}"></script>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //banner-bottom1 -->

<!-- special-deals -->
<div class="special-deals">
    <div class="container">
        <h2>Special Deals</h2>
        <div class="w3agile_special_deals_grids">
            <div class="col-md-7 w3agile_special_deals_grid_left">
                <div class="w3agile_special_deals_grid_left_grid">
                    <img src="page/images/26.jpg" alt=" " class="img-responsive" />
                    <div class="w3agile_special_deals_grid_left_grid_pos1">
                        <h5>30%<span>Off/-</span></h5>
                    </div>
                    <div class="w3agile_special_deals_grid_left_grid_pos">
                        <h4>We Offer <span>Best Products</span></h4>
                    </div>
                </div>
                <div class="wmuSlider example1">
                    <div class="wmuSliderWrapper">
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <div class="w3agile_special_deals_grid_left_grid1">
                                    <img src="page/images/1.png" alt=" " class="img-responsive" />
                                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate
                                        velit esse quam nihil molestiae consequatur, vel illum qui dolorem
                                        eum fugiat quo voluptas nulla pariatur</p>
                                    <h4>Laura</h4>
                                </div>
                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <div class="w3agile_special_deals_grid_left_grid1">
                                    <img src="page/images/2.png" alt=" " class="img-responsive" />
                                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate
                                        velit esse quam nihil molestiae consequatur, vel illum qui dolorem
                                        eum fugiat quo voluptas nulla pariatur</p>
                                    <h4>Michael</h4>
                                </div>
                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <div class="w3agile_special_deals_grid_left_grid1">
                                    <img src="page/images/3.png" alt=" " class="img-responsive" />
                                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate
                                        velit esse quam nihil molestiae consequatur, vel illum qui dolorem
                                        eum fugiat quo voluptas nulla pariatur</p>
                                    <h4>Rosy</h4>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <script>
                    $('.example1').wmuSlider();
                </script>
            </div>
            <div class="col-md-5 w3agile_special_deals_grid_right">
                <img src="page/images/25.jpg" alt=" " class="img-responsive" />
                <div class="w3agile_special_deals_grid_right_pos">
                    <h4>Women's <span>Special</span></h4>
                    <h5>save up <span>to</span> 30%</h5>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //special-deals -->
<!-- new-products -->
<div class="new-products">
    <div class="container">
        <h3>New Products</h3>
        <div class="agileinfo_new_products_grids">
            @foreach($products as $product)
            <div class="col-md-3 agileinfo_new_products_grid">
                <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                    <div class="hs-wrapper hs-wrapper1">
                        <img src="page/image/product/{{ $product->image }}" alt=" " class="img-responsive" />
                        @if($product->images)
                            @foreach($product->images as $item)
                                <img src="page/image/product/{{ $item->img_name }}" alt=" " class="img-responsive" />
                            @endforeach
                        @endif
                        <div class="w3_hs_bottom w3_hs_bottom_sub">
                            <ul>
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h5><a href="{{ $product->product_id }}">{{ $product->title }}</a></h5>
                    <div class="simpleCart_shelfItem">
                        <p><span>{{ number_format($product->unit_price) }}</span> <i class="item_price">{{ number_format($product->promotion_price) }}</i></p>
                        <p><a class="item_add" href="#">Add to cart</a></p>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //new-products -->
<!-- top-brands -->
<div class="top-brands">
    <div class="container">
        <h3>Top Brands</h3>
        <div class="sliderfig">
            <ul id="flexiselDemo1">
                <li>
                    <img src="page/images/4.png" alt=" " class="img-responsive" />
                </li>
                <li>
                    <img src="page/images/5.png" alt=" " class="img-responsive" />
                </li>
                <li>
                    <img src="page/images/6.png" alt=" " class="img-responsive" />
                </li>
                <li>
                    <img src="page/images/7.png" alt=" " class="img-responsive" />
                </li>
                <li>
                    <img src="page/images/46.jpg" alt=" " class="img-responsive" />
                </li>
            </ul>
        </div>
        <script type="text/javascript">
            $(window).load(function() {
                $("#flexiselDemo1").flexisel({
                    visibleItems: 4,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint:480,
                            visibleItems: 1
                        },
                        landscape: {
                            changePoint:640,
                            visibleItems:2
                        },
                        tablet: {
                            changePoint:768,
                            visibleItems: 3
                        }
                    }
                });

            });
        </script>
    </div>
</div>
<!-- //top-brands -->
@endsection()