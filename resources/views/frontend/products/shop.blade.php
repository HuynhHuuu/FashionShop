@extends('layouts.front')

@section('title')
    Shop
@endsection

@section('content')

    <main class="main">
        <div class="page-header text-center" style="background-image: url({{asset('user/assets/images/page-header-bg.jpg')}})">
            <div class="container-fluid">
                <h1 class="page-title">Shopping<span>Shop</span></h1>
            </div><!-- End .container-fluid -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
            <div class="container-fluid">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{'/'}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                </ol>
            </div><!-- End .container-fluid -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="container-fluid">
                <div class="toolbox">
                    <div class="toolbox-left">
                        <a href="#" class="sidebar-toggler"><i class="icon-bars"></i>Filters</a>
                    </div><!-- End .toolbox-left -->

                    <div class="toolbox-center">
                        <div class="toolbox-info">
                            Showing <span>12 of 56</span> Products
                        </div><!-- End .toolbox-info -->
                    </div><!-- End .toolbox-center -->

                    <div class="toolbox-right">
                        <div class="toolbox-sort">
                            <label for="sortby">Sort by:</label>
                            <div class="select-custom">
                                <select name="sortby" id="sortby" class="form-control">
                                    <option value="popularity" selected="selected">Most Popular</option>
                                    <option value="rating">Most Rated</option>
                                    <option value="date">Date</option>
                                </select>
                            </div>
                        </div><!-- End .toolbox-sort -->
                    </div><!-- End .toolbox-right -->
                </div><!-- End .toolbox -->

                <div class="products">
                    <div class="row ">
                        @foreach($products as $prod)
                            <div class="col-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
                            <div class="product product_data ">
                                <input type="hidden" value="{{ $prod->id }}" class="prod_id">
                                <figure class="product-media">
                                    <span class="product-label label-new">New</span>
                                    <a href="{{  url('category/'.$prod->category->slug.'/'.$prod->slug) }}">
                                        <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" alt="Product image" class="product-image" style="height: 350px">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a class="btn-product-icon btn-wishlist addToWishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action action-icon-top">
                                        <a class="btn-product btn-cart addToCartBtn1"><span>add to cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
{{--                                    <h3 class="product-title"><a href="#">{{ $prod->id }}</a></h3>--}}
                                    <h3 class="product-title"><a href="#">{{ $prod->name }}</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">${{ $prod->selling_price }}</span>
                                        <span class="old-price">${{ $prod->original_price }}</span>
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 0 )</span>
                                    </div><!-- End .rating-container -->

                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->
                        @endforeach

{{--                        <div class="col-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">--}}
{{--                            <div class="product">--}}
{{--                                <figure class="product-media">--}}
{{--                                    <a href="product.html">--}}
{{--                                        <img src="assets/images/products/product-2.jpg" alt="Product image" class="product-image">--}}
{{--                                    </a>--}}

{{--                                    <div class="product-action-vertical">--}}
{{--                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>--}}
{{--                                    </div><!-- End .product-action -->--}}

{{--                                    <div class="product-action action-icon-top">--}}
{{--                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>--}}
{{--                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>--}}
{{--                                        <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>--}}
{{--                                    </div><!-- End .product-action -->--}}
{{--                                </figure><!-- End .product-media -->--}}

{{--                                <div class="product-body">--}}
{{--                                    <div class="product-cat">--}}
{{--                                        <a href="#">Accessories</a>--}}
{{--                                    </div><!-- End .product-cat -->--}}
{{--                                    <h3 class="product-title"><a href="product.html">Cras ornare tristique</a></h3><!-- End .product-title -->--}}
{{--                                    <div class="product-price">--}}
{{--                                        $32.00--}}
{{--                                    </div><!-- End .product-price -->--}}
{{--                                    <div class="ratings-container">--}}
{{--                                        <div class="ratings">--}}
{{--                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->--}}
{{--                                        </div><!-- End .ratings -->--}}
{{--                                        <span class="ratings-text">( 11 Reviews )</span>--}}
{{--                                    </div><!-- End .rating-container -->--}}
{{--                                </div><!-- End .product-body -->--}}
{{--                            </div><!-- End .product -->--}}
{{--                        </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->--}}

{{--                        <div class="col-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">--}}
{{--                            <div class="product">--}}
{{--                                <figure class="product-media">--}}
{{--                                    <span class="product-label label-sale">30% off</span>--}}
{{--                                    <a href="product.html">--}}
{{--                                        <img src="assets/images/products/product-3.jpg" alt="Product image" class="product-image">--}}
{{--                                    </a>--}}

{{--                                    <div class="product-action-vertical">--}}
{{--                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>--}}
{{--                                    </div><!-- End .product-action -->--}}

{{--                                    <div class="product-action action-icon-top">--}}
{{--                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>--}}
{{--                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>--}}
{{--                                        <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>--}}
{{--                                    </div><!-- End .product-action -->--}}
{{--                                </figure><!-- End .product-media -->--}}

{{--                                <div class="product-body">--}}
{{--                                    <div class="product-cat">--}}
{{--                                        <a href="#">Women</a>--}}
{{--                                    </div><!-- End .product-cat -->--}}
{{--                                    <h3 class="product-title"><a href="product.html">Aliquam tincidunt mauris</a></h3><!-- End .product-title -->--}}
{{--                                    <div class="product-price">--}}
{{--                                        <span class="new-price">$50.00</span>--}}
{{--                                        <span class="old-price">$84.00</span>--}}
{{--                                    </div><!-- End .product-price -->--}}
{{--                                    <div class="ratings-container">--}}
{{--                                        <div class="ratings">--}}
{{--                                            <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->--}}
{{--                                        </div><!-- End .ratings -->--}}
{{--                                        <span class="ratings-text">( 4 Reviews )</span>--}}
{{--                                    </div><!-- End .rating-container -->--}}

{{--                                    <div class="product-nav product-nav-dots">--}}
{{--                                        <a href="#" class="active" style="background: #cc9966;"><span class="sr-only">Color name</span></a>--}}
{{--                                        <a href="#" style="background: #7fc5ed;"><span class="sr-only">Color name</span></a>--}}
{{--                                        <a href="#" style="background: #e8c97a;"><span class="sr-only">Color name</span></a>--}}
{{--                                    </div><!-- End .product-nav -->--}}
{{--                                </div><!-- End .product-body -->--}}
{{--                            </div><!-- End .product -->--}}
{{--                        </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->--}}

{{--                        <div class="col-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">--}}
{{--                            <div class="product">--}}
{{--                                <figure class="product-media">--}}
{{--                                    <a href="product.html">--}}
{{--                                        <img src="assets/images/products/product-4.jpg" alt="Product image" class="product-image">--}}
{{--                                    </a>--}}

{{--                                    <div class="product-action-vertical">--}}
{{--                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>--}}
{{--                                    </div><!-- End .product-action -->--}}

{{--                                    <div class="product-action action-icon-top">--}}
{{--                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>--}}
{{--                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>--}}
{{--                                        <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>--}}
{{--                                    </div><!-- End .product-action -->--}}
{{--                                </figure><!-- End .product-media -->--}}

{{--                                <div class="product-body">--}}
{{--                                    <div class="product-cat">--}}
{{--                                        <a href="#">Dresses</a>--}}
{{--                                    </div><!-- End .product-cat -->--}}
{{--                                    <h3 class="product-title"><a href="product.html">Brown paperbag waist pencil skirt</a></h3><!-- End .product-title -->--}}
{{--                                    <div class="product-price">--}}
{{--                                        $60.00--}}
{{--                                    </div><!-- End .product-price -->--}}
{{--                                    <div class="ratings-container">--}}
{{--                                        <div class="ratings">--}}
{{--                                            <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->--}}
{{--                                        </div><!-- End .ratings -->--}}
{{--                                        <span class="ratings-text">( 2 Reviews )</span>--}}
{{--                                    </div><!-- End .rating-container -->--}}

{{--                                    <div class="product-nav product-nav-dots">--}}
{{--                                        <a href="#" class="active" style="background: #cc9966;"><span class="sr-only">Color name</span></a>--}}
{{--                                        <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>--}}
{{--                                        <a href="#" style="background: #7b5d36;"><span class="sr-only">Color name</span></a>--}}
{{--                                    </div><!-- End .product-nav -->--}}
{{--                                </div><!-- End .product-body -->--}}
{{--                            </div><!-- End .product -->--}}
{{--                        </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->--}}

{{--                        <div class="col-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">--}}
{{--                            <div class="product">--}}
{{--                                <figure class="product-media">--}}
{{--                                    <a href="product.html">--}}
{{--                                        <img src="assets/images/products/product-5.jpg" alt="Product image" class="product-image">--}}
{{--                                    </a>--}}

{{--                                    <div class="product-action-vertical">--}}
{{--                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>--}}
{{--                                    </div><!-- End .product-action -->--}}

{{--                                    <div class="product-action action-icon-top">--}}
{{--                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>--}}
{{--                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>--}}
{{--                                        <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>--}}
{{--                                    </div><!-- End .product-action -->--}}
{{--                                </figure><!-- End .product-media -->--}}

{{--                                <div class="product-body">--}}
{{--                                    <div class="product-cat">--}}
{{--                                        <a href="#">Dresses</a>--}}
{{--                                    </div><!-- End .product-cat -->--}}
{{--                                    <h3 class="product-title"><a href="product.html">Dark yellow lace cut out swing dress</a></h3><!-- End .product-title -->--}}
{{--                                    <div class="product-price">--}}
{{--                                        $84.00--}}
{{--                                    </div><!-- End .product-price -->--}}
{{--                                    <div class="ratings-container">--}}
{{--                                        <div class="ratings">--}}
{{--                                            <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->--}}
{{--                                        </div><!-- End .ratings -->--}}
{{--                                        <span class="ratings-text">( 0 Reviews )</span>--}}
{{--                                    </div><!-- End .rating-container -->--}}

{{--                                    <div class="product-nav product-nav-dots">--}}
{{--                                        <a href="#" style="background: #ebebeb;"><span class="sr-only">Color name</span></a>--}}
{{--                                        <a href="#" class="active" style="background: #eabc4e;"><span class="sr-only">Color name</span></a>--}}
{{--                                    </div><!-- End .product-nav -->--}}
{{--                                </div><!-- End .product-body -->--}}
{{--                            </div><!-- End .product -->--}}
{{--                        </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->--}}

{{--                        <div class="col-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">--}}
{{--                            <div class="product">--}}
{{--                                <figure class="product-media">--}}
{{--                                    <span class="product-label label-out">Out of stock</span>--}}
{{--                                    <a href="product.html">--}}
{{--                                        <img src="assets/images/products/product-6.jpg" alt="Product image" class="product-image">--}}
{{--                                    </a>--}}

{{--                                    <div class="product-action-vertical">--}}
{{--                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>--}}
{{--                                    </div><!-- End .product-action -->--}}

{{--                                    <div class="product-action action-icon-top">--}}
{{--                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>--}}
{{--                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>--}}
{{--                                        <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>--}}
{{--                                    </div><!-- End .product-action -->--}}
{{--                                </figure><!-- End .product-media -->--}}

{{--                                <div class="product-body">--}}
{{--                                    <div class="product-cat">--}}
{{--                                        <a href="#">Jackets</a>--}}
{{--                                    </div><!-- End .product-cat -->--}}
{{--                                    <h3 class="product-title"><a href="product.html">Khaki utility boiler jumpsuit</a></h3><!-- End .product-title -->--}}
{{--                                    <div class="product-price">--}}
{{--                                        <span class="out-price">$120.00</span>--}}
{{--                                    </div><!-- End .product-price -->--}}
{{--                                    <div class="ratings-container">--}}
{{--                                        <div class="ratings">--}}
{{--                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->--}}
{{--                                        </div><!-- End .ratings -->--}}
{{--                                        <span class="ratings-text">( 6 Reviews )</span>--}}
{{--                                    </div><!-- End .rating-container -->--}}
{{--                                </div><!-- End .product-body -->--}}
{{--                            </div><!-- End .product -->--}}
{{--                        </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->--}}

{{--                        <div class="col-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">--}}
{{--                            <div class="product">--}}
{{--                                <figure class="product-media">--}}
{{--                                    <a href="product.html">--}}
{{--                                        <img src="assets/images/products/product-7.jpg" alt="Product image" class="product-image">--}}
{{--                                    </a>--}}

{{--                                    <div class="product-action-vertical">--}}
{{--                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>--}}
{{--                                    </div><!-- End .product-action -->--}}

{{--                                    <div class="product-action action-icon-top">--}}
{{--                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>--}}
{{--                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>--}}
{{--                                        <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>--}}
{{--                                    </div><!-- End .product-action -->--}}
{{--                                </figure><!-- End .product-media -->--}}

{{--                                <div class="product-body">--}}
{{--                                    <div class="product-cat">--}}
{{--                                        <a href="#">Jeans</a>--}}
{{--                                    </div><!-- End .product-cat -->--}}
{{--                                    <h3 class="product-title"><a href="product.html">Blue utility pinafore denim dress</a></h3><!-- End .product-title -->--}}
{{--                                    <div class="product-price">--}}
{{--                                        $76.00--}}
{{--                                    </div><!-- End .product-price -->--}}
{{--                                    <div class="ratings-container">--}}
{{--                                        <div class="ratings">--}}
{{--                                            <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->--}}
{{--                                        </div><!-- End .ratings -->--}}
{{--                                        <span class="ratings-text">( 2 Reviews )</span>--}}
{{--                                    </div><!-- End .rating-container -->--}}
{{--                                </div><!-- End .product-body -->--}}
{{--                            </div><!-- End .product -->--}}
{{--                        </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->--}}

{{--                        <div class="col-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">--}}
{{--                            <div class="product">--}}
{{--                                <figure class="product-media">--}}
{{--                                    <a href="product.html">--}}
{{--                                        <img src="assets/images/products/product-8.jpg" alt="Product image" class="product-image">--}}
{{--                                    </a>--}}

{{--                                    <div class="product-action-vertical">--}}
{{--                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>--}}
{{--                                    </div><!-- End .product-action -->--}}

{{--                                    <div class="product-action action-icon-top">--}}
{{--                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>--}}
{{--                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>--}}
{{--                                        <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>--}}
{{--                                    </div><!-- End .product-action -->--}}
{{--                                </figure><!-- End .product-media -->--}}

{{--                                <div class="product-body">--}}
{{--                                    <div class="product-cat">--}}
{{--                                        <a href="#">Shoes</a>--}}
{{--                                    </div><!-- End .product-cat -->--}}
{{--                                    <h3 class="product-title"><a href="product.html">Beige knitted elastic runner shoes</a></h3><!-- End .product-title -->--}}
{{--                                    <div class="product-price">--}}
{{--                                        $84.00--}}
{{--                                    </div><!-- End .product-price -->--}}
{{--                                    <div class="ratings-container">--}}
{{--                                        <div class="ratings">--}}
{{--                                            <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->--}}
{{--                                        </div><!-- End .ratings -->--}}
{{--                                        <span class="ratings-text">( 0 Reviews )</span>--}}
{{--                                    </div><!-- End .rating-container -->--}}

{{--                                    <div class="product-nav product-nav-dots">--}}
{{--                                        <a href="#" class="active" style="background: #d8c5b0;"><span class="sr-only">Color name</span></a>--}}
{{--                                        <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>--}}
{{--                                    </div><!-- End .product-nav -->--}}
{{--                                </div><!-- End .product-body -->--}}
{{--                            </div><!-- End .product -->--}}
{{--                        </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->--}}

{{--                        <div class="col-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">--}}
{{--                            <div class="product">--}}
{{--                                <figure class="product-media">--}}
{{--                                    <a href="product.html">--}}
{{--                                        <img src="assets/images/products/product-9.jpg" alt="Product image" class="product-image">--}}
{{--                                    </a>--}}

{{--                                    <div class="product-action-vertical">--}}
{{--                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>--}}
{{--                                    </div><!-- End .product-action -->--}}

{{--                                    <div class="product-action action-icon-top">--}}
{{--                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>--}}
{{--                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>--}}
{{--                                        <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>--}}
{{--                                    </div><!-- End .product-action -->--}}
{{--                                </figure><!-- End .product-media -->--}}

{{--                                <div class="product-body">--}}
{{--                                    <div class="product-cat">--}}
{{--                                        <a href="#">Bags</a>--}}
{{--                                    </div><!-- End .product-cat -->--}}
{{--                                    <h3 class="product-title"><a href="product.html">Orange saddle lock front  chain cross body bag</a></h3><!-- End .product-title -->--}}
{{--                                    <div class="product-price">--}}
{{--                                        $52.00--}}
{{--                                    </div><!-- End .product-price -->--}}
{{--                                    <div class="ratings-container">--}}
{{--                                        <div class="ratings">--}}
{{--                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->--}}
{{--                                        </div><!-- End .ratings -->--}}
{{--                                        <span class="ratings-text">( 1 Reviews )</span>--}}
{{--                                    </div><!-- End .rating-container -->--}}

{{--                                    <div class="product-nav product-nav-dots">--}}
{{--                                        <a href="#" class="active" style="background: #e07a3d;"><span class="sr-only">Color name</span></a>--}}
{{--                                        <a href="#" style="background: #7b5d36;"><span class="sr-only">Color name</span></a>--}}
{{--                                        <a href="#" style="background: #dac1a7;"><span class="sr-only">Color name</span></a>--}}
{{--                                    </div><!-- End .product-nav -->--}}
{{--                                </div><!-- End .product-body -->--}}
{{--                            </div><!-- End .product -->--}}
{{--                        </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->--}}

{{--                        <div class="col-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">--}}
{{--                            <div class="product">--}}
{{--                                <figure class="product-media">--}}
{{--                                    <span class="product-label label-new">New</span>--}}
{{--                                    <a href="product.html">--}}
{{--                                        <img src="assets/images/products/product-10.jpg" alt="Product image" class="product-image">--}}
{{--                                    </a>--}}

{{--                                    <div class="product-action-vertical">--}}
{{--                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>--}}
{{--                                    </div><!-- End .product-action -->--}}

{{--                                    <div class="product-action action-icon-top">--}}
{{--                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>--}}
{{--                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>--}}
{{--                                        <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>--}}
{{--                                    </div><!-- End .product-action -->--}}
{{--                                </figure><!-- End .product-media -->--}}

{{--                                <div class="product-body">--}}
{{--                                    <div class="product-cat">--}}
{{--                                        <a href="#">Jumpers</a>--}}
{{--                                    </div><!-- End .product-cat -->--}}
{{--                                    <h3 class="product-title"><a href="product.html">Yellow button front tea top</a></h3><!-- End .product-title -->--}}
{{--                                    <div class="product-price">--}}
{{--                                        $56.00--}}
{{--                                    </div><!-- End .product-price -->--}}
{{--                                    <div class="ratings-container">--}}
{{--                                        <div class="ratings">--}}
{{--                                            <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->--}}
{{--                                        </div><!-- End .ratings -->--}}
{{--                                        <span class="ratings-text">( 0 Reviews )</span>--}}
{{--                                    </div><!-- End .rating-container -->--}}
{{--                                </div><!-- End .product-body -->--}}
{{--                            </div><!-- End .product -->--}}
{{--                        </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->--}}

{{--                        <div class="col-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">--}}
{{--                            <div class="product">--}}
{{--                                <figure class="product-media">--}}
{{--                                    <span class="product-label label-top">Top</span>--}}
{{--                                    <a href="product.html">--}}
{{--                                        <img src="assets/images/products/product-11.jpg" alt="Product image" class="product-image">--}}
{{--                                    </a>--}}

{{--                                    <div class="product-action-vertical">--}}
{{--                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>--}}
{{--                                    </div><!-- End .product-action -->--}}

{{--                                    <div class="product-action action-icon-top">--}}
{{--                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>--}}
{{--                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>--}}
{{--                                        <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>--}}
{{--                                    </div><!-- End .product-action -->--}}
{{--                                </figure><!-- End .product-media -->--}}

{{--                                <div class="product-body">--}}
{{--                                    <div class="product-cat">--}}
{{--                                        <a href="#">Shoes</a>--}}
{{--                                    </div><!-- End .product-cat -->--}}
{{--                                    <h3 class="product-title"><a href="product.html">Light brown studded Wide fit wedges</a></h3><!-- End .product-title -->--}}
{{--                                    <div class="product-price">--}}
{{--                                        $110.00--}}
{{--                                    </div><!-- End .product-price -->--}}
{{--                                    <div class="ratings-container">--}}
{{--                                        <div class="ratings">--}}
{{--                                            <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->--}}
{{--                                        </div><!-- End .ratings -->--}}
{{--                                        <span class="ratings-text">( 2 Reviews )</span>--}}
{{--                                    </div><!-- End .rating-container -->--}}

{{--                                    <div class="product-nav product-nav-dots">--}}
{{--                                        <a href="#" class="active" style="background: #cc9966;"><span class="sr-only">Color name</span></a>--}}
{{--                                        <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>--}}
{{--                                        <a href="#" style="background: #dac1a7;"><span class="sr-only">Color name</span></a>--}}
{{--                                    </div><!-- End .product-nav -->--}}
{{--                                </div><!-- End .product-body -->--}}
{{--                            </div><!-- End .product -->--}}
{{--                        </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->--}}

{{--                        <div class="col-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">--}}
{{--                            <div class="product">--}}
{{--                                <figure class="product-media">--}}
{{--                                    <a href="product.html">--}}
{{--                                        <img src="assets/images/products/product-12.jpg" alt="Product image" class="product-image">--}}
{{--                                    </a>--}}

{{--                                    <div class="product-action-vertical">--}}
{{--                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>--}}
{{--                                    </div><!-- End .product-action -->--}}

{{--                                    <div class="product-action action-icon-top">--}}
{{--                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>--}}
{{--                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>--}}
{{--                                        <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>--}}
{{--                                    </div><!-- End .product-action -->--}}
{{--                                </figure><!-- End .product-media -->--}}

{{--                                <div class="product-body">--}}
{{--                                    <div class="product-cat">--}}
{{--                                        <a href="#">Bags</a>--}}
{{--                                    </div><!-- End .product-cat -->--}}
{{--                                    <h3 class="product-title"><a href="product.html">Black soft RI weekend travel bag</a></h3><!-- End .product-title -->--}}
{{--                                    <div class="product-price">--}}
{{--                                        $68.00--}}
{{--                                    </div><!-- End .product-price -->--}}
{{--                                    <div class="ratings-container">--}}
{{--                                        <div class="ratings">--}}
{{--                                            <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->--}}
{{--                                        </div><!-- End .ratings -->--}}
{{--                                        <span class="ratings-text">( 0 Reviews )</span>--}}
{{--                                    </div><!-- End .rating-container -->--}}
{{--                                </div><!-- End .product-body -->--}}
{{--                            </div><!-- End .product -->--}}
{{--                        </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->--}}
                    </div><!-- End .row -->

                    <div class="load-more-container text-center">
                        <a href="#" class="btn btn-outline-darker btn-load-more">More Products <i class="icon-refresh"></i></a>
                    </div><!-- End .load-more-container -->
                </div><!-- End .products -->

                <div class="sidebar-filter-overlay"></div><!-- End .sidebar-filter-overlay -->
                <aside class="sidebar-shop sidebar-filter">
                    <div class="sidebar-filter-wrapper">
                        <div class="widget widget-clean">
                            <label><i class="icon-close"></i>Filters</label>
                            <a href="#" class="sidebar-filter-clear">Clean All</a>
                        </div><!-- End .widget -->
                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1">
                                    Category
                                </a>
                            </h3><!-- End .widget-title -->

                            <div class="collapse show" id="widget-1">
                                <div class="widget-body">
                                    <div class="filter-items filter-items-count">
                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-1">
                                                <label class="custom-control-label" for="cat-1">Dresses</label>
                                            </div><!-- End .custom-checkbox -->
                                            <span class="item-count">3</span>
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-2">
                                                <label class="custom-control-label" for="cat-2">T-shirts</label>
                                            </div><!-- End .custom-checkbox -->
                                            <span class="item-count">0</span>
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-3">
                                                <label class="custom-control-label" for="cat-3">Bags</label>
                                            </div><!-- End .custom-checkbox -->
                                            <span class="item-count">4</span>
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-4">
                                                <label class="custom-control-label" for="cat-4">Jackets</label>
                                            </div><!-- End .custom-checkbox -->
                                            <span class="item-count">2</span>
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-5">
                                                <label class="custom-control-label" for="cat-5">Shoes</label>
                                            </div><!-- End .custom-checkbox -->
                                            <span class="item-count">2</span>
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-6">
                                                <label class="custom-control-label" for="cat-6">Jumpers</label>
                                            </div><!-- End .custom-checkbox -->
                                            <span class="item-count">1</span>
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-7">
                                                <label class="custom-control-label" for="cat-7">Jeans</label>
                                            </div><!-- End .custom-checkbox -->
                                            <span class="item-count">1</span>
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-8">
                                                <label class="custom-control-label" for="cat-8">Sportwear</label>
                                            </div><!-- End .custom-checkbox -->
                                            <span class="item-count">0</span>
                                        </div><!-- End .filter-item -->
                                    </div><!-- End .filter-items -->
                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .widget -->

                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-2" role="button" aria-expanded="true" aria-controls="widget-2">
                                    Size
                                </a>
                            </h3><!-- End .widget-title -->

                            <div class="collapse show" id="widget-2">
                                <div class="widget-body">
                                    <div class="filter-items">
                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="size-1">
                                                <label class="custom-control-label" for="size-1">XS</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="size-2">
                                                <label class="custom-control-label" for="size-2">S</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" checked id="size-3">
                                                <label class="custom-control-label" for="size-3">M</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" checked id="size-4">
                                                <label class="custom-control-label" for="size-4">L</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="size-5">
                                                <label class="custom-control-label" for="size-5">XL</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="size-6">
                                                <label class="custom-control-label" for="size-6">XXL</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->
                                    </div><!-- End .filter-items -->
                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .widget -->

                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-3" role="button" aria-expanded="true" aria-controls="widget-3">
                                    Colour
                                </a>
                            </h3><!-- End .widget-title -->

                            <div class="collapse show" id="widget-3">
                                <div class="widget-body">
                                    <div class="filter-colors">
                                        <a href="#" style="background: #b87145;"><span class="sr-only">Color Name</span></a>
                                        <a href="#" style="background: #f0c04a;"><span class="sr-only">Color Name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color Name</span></a>
                                        <a href="#" class="selected" style="background: #cc3333;"><span class="sr-only">Color Name</span></a>
                                        <a href="#" style="background: #3399cc;"><span class="sr-only">Color Name</span></a>
                                        <a href="#" style="background: #669933;"><span class="sr-only">Color Name</span></a>
                                        <a href="#" style="background: #f2719c;"><span class="sr-only">Color Name</span></a>
                                        <a href="#" style="background: #ebebeb;"><span class="sr-only">Color Name</span></a>
                                    </div><!-- End .filter-colors -->
                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .widget -->

                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-4" role="button" aria-expanded="true" aria-controls="widget-4">
                                    Brand
                                </a>
                            </h3><!-- End .widget-title -->

                            <div class="collapse show" id="widget-4">
                                <div class="widget-body">
                                    <div class="filter-items">
                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brand-1">
                                                <label class="custom-control-label" for="brand-1">Next</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brand-2">
                                                <label class="custom-control-label" for="brand-2">River Island</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brand-3">
                                                <label class="custom-control-label" for="brand-3">Geox</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brand-4">
                                                <label class="custom-control-label" for="brand-4">New Balance</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brand-5">
                                                <label class="custom-control-label" for="brand-5">UGG</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brand-6">
                                                <label class="custom-control-label" for="brand-6">F&F</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brand-7">
                                                <label class="custom-control-label" for="brand-7">Nike</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                    </div><!-- End .filter-items -->
                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .widget -->

                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-5" role="button" aria-expanded="true" aria-controls="widget-5">
                                    Price
                                </a>
                            </h3><!-- End .widget-title -->

                            <div class="collapse show" id="widget-5">
                                <div class="widget-body">
                                    <div class="filter-price">
                                        <div class="filter-price-text">
                                            Price Range:
                                            <span id="filter-price-range"></span>
                                        </div><!-- End .filter-price-text -->

                                        <div id="price-slider"></div><!-- End #price-slider -->
                                    </div><!-- End .filter-price -->
                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .widget -->
                    </div><!-- End .sidebar-filter-wrapper -->
                </aside><!-- End .sidebar-filter -->
            </div><!-- End .container-fluid -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->

    {{--    <div class="py-3 mb-4 shadow-sm bg-warning border-top">--}}
    {{--        <div class="container">--}}
    {{--            <h6 class="mb-0">Collections / {{ $category->name}}  </h6>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    {{--    <div class="container">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-md-4">--}}
    {{--                <label for="amount">Sort By</label>--}}
    {{--                <form>--}}
    {{--                    @csrf--}}
    {{--                    <select name="sort" id="sort" class="form-control">--}}
    {{--                        <option value="">--sort--</option>--}}
    {{--                        <option value="">--sort by max price</option>--}}
    {{--                        <option value="">--sort by min price</option>--}}
    {{--                        <option value="">--sort by A to Z</option>--}}
    {{--                        <option value="">--sort by Z to A</option>--}}
    {{--                    </select>--}}
    {{--                </form>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    {{--    <div class="py-5">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <h2>{{ $category->name }}</h2>--}}
    {{--                @foreach($products as $prod)--}}
    {{--                     <div class="col-md-3 mb-3">--}}
    {{--                         <div class="card">--}}
    {{--                             <a href="{{ url('category/'.$category->slug.'/'.$prod->slug) }}">--}}
    {{--                                 <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" alt="Product image" style="height: 350px">--}}
    {{--                                 <div class="card-body">--}}
    {{--                                     <h5>{{ $prod->name }}</h5>--}}
    {{--                                     <span class="float-start">{{ $prod->selling_price }}</span>--}}
    {{--                                     <span class="float-end"> <s> {{ $prod->original_price }} </s> </span>--}}
    {{--                                 </div>--}}
    {{--                             </a>--}}
    {{--                         </div>--}}
    {{--                        </div>--}}
    {{--                @endforeach--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
@endsection
