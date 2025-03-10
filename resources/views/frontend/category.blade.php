@extends('layouts.front')

@section('title')
    Category
@endsection

@section('content')



    <main class="main">
        <div class="page-header text-center" style="background-image: url({{asset('user/assets/images/page-header-bg.jpg')}})">
            <div class="container-fluid">
                <h1 class="page-title">Category<span>Shop</span></h1>
            </div><!-- End .container-fluid -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav breadcrumb-with-filter">
            <div class="container-fluid">
                <a href="#" class="sidebar-toggler"><i class="icon-bars"></i>Filters</a>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item"><a href="#">Product Category</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Fullwidth</li>
                </ol>
            </div><!-- End .container-fluid -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="categories-page">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-sm-8">
                                    @foreach($category as $cate)
                                        <div class="banner banner-cat banner-badge">
                                            <a href="{{ url('view-category/'.$cate->slug) }}">
                                                <img src="{{ asset('assets/uploads/category/'.$cate->image) }}" alt="Banner">
                                            </a>

                                            <a class="banner-link" href="{{ url('view-category/'.$cate->slug) }}">
                                                <h3 class="banner-title">{{ $cate->name }}</h3><!-- End .banner-title -->
                                                <h4 class="banner-subtitle">0 Products</h4><!-- End .banner-subtitle -->
                                                <span class="banner-link-text">Shop Now</span>
                                            </a><!-- End .banner-link -->
                                        </div><!-- End .banner -->

{{--                                        @if($cate->children->count() > 0)--}}
{{--                                            <div class="row">--}}
{{--                                                @foreach($cate->children as $child)--}}
{{--                                                    <div class="col-md-6 col-sm-6 col-xs-12">--}}
{{--                                                        <a href="{{ url('view-category/'.$child->slug) }}" class="cat-block">--}}
{{--                                                            <img src="{{ asset('assets/uploads/category/'.$child->image) }}" alt="Category Image">--}}
{{--                                                            <h3 class="cat-title">{{ $child->name }}</h3>--}}
{{--                                                            <span class="cat-count">0 Products</span>--}}
{{--                                                        </a><!-- End .cat-block -->--}}
{{--                                                    </div><!-- End .col-md-6 -->--}}
{{--                                                @endforeach--}}
{{--                                            </div><!-- End .row -->--}}
{{--                                        @endif--}}

                                    @endforeach
                                    </div><!-- End .col-sm-8 -->


{{--                                <div class="col-sm-4">--}}
{{--                                    <div class="banner banner-cat banner-badge">--}}
{{--                                        <a href="{{ url('view-category/'.$cate->slug) }}">--}}
{{--                                            <img src="{{ asset('assets/uploads/category/'.$cate->image) }}" alt="Banner">--}}
{{--                                        </a>--}}

{{--                                        <a class="banner-link" href="#">--}}
{{--                                            <h3 class="banner-title">{{ $cate->name }}</h3><!-- End .banner-title -->--}}
{{--                                            <h4 class="banner-subtitle">2 Products</h4><!-- End .banner-subtitle -->--}}
{{--                                            <span class="banner-link-text">Shop Now</span>--}}
{{--                                        </a><!-- End .banner-link -->--}}
{{--                                    </div><!-- End .banner -->--}}
{{--                                </div><!-- End .col-sm-4 -->--}}

{{--                                <div class="col-sm-4">--}}
{{--                                    <div class="banner banner-cat banner-badge">--}}
{{--                                        <a href="{{ url('view-category/'.$cate->slug) }}">--}}
{{--                                            <img src="{{ asset('assets/uploads/category/'.$cate->image) }}" alt="Banner">--}}
{{--                                        </a>--}}

{{--                                        <a class="banner-link" href="#">--}}
{{--                                            <h3 class="banner-title">{{ $cate->name }}</h3><!-- End .banner-title -->--}}
{{--                                            <h4 class="banner-subtitle">2 Products</h4><!-- End .banner-subtitle -->--}}
{{--                                            <span class="banner-link-text">Shop Now</span>--}}
{{--                                        </a><!-- End .banner-link -->--}}
{{--                                    </div><!-- End .banner -->--}}
{{--                                </div><!-- End .col-sm-4 -->--}}

{{--                                <div class="col-sm-8">--}}
{{--                                    <div class="banner banner-cat banner-badge">--}}
{{--                                        <a href="#">--}}
{{--                                            <img src="assets/images/category/fullwidth-page/banner-4.jpg" alt="Banner">--}}
{{--                                        </a>--}}

{{--                                        <a class="banner-link" href="#">--}}
{{--                                            <h3 class="banner-title">Bags</h3><!-- End .banner-title -->--}}
{{--                                            <h4 class="banner-subtitle">4 Products</h4><!-- End .banner-subtitle -->--}}
{{--                                            <span class="banner-link-text">Shop Now</span>--}}
{{--                                        </a><!-- End .banner-link -->--}}
{{--                                    </div><!-- End .banner -->--}}
{{--                                </div><!-- End .col-sm-8 -->--}}
                            </div><!-- End .row -->
                        </div><!-- End .col-lg-6 -->

{{--                        <div class="col-lg-6">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-8">--}}
{{--                                    <div class="banner banner-cat banner-badge">--}}
{{--                                        <a href="#">--}}
{{--                                            <img src="assets/images/category/fullwidth-page/banner-5.jpg" alt="Banner">--}}
{{--                                        </a>--}}

{{--                                        <a class="banner-link" href="#">--}}
{{--                                            <h3 class="banner-title">Dresses</h3><!-- End .banner-title -->--}}
{{--                                            <h4 class="banner-subtitle">3 Products</h4><!-- End .banner-subtitle -->--}}
{{--                                            <span class="banner-link-text">Shop Now</span>--}}
{{--                                        </a><!-- End .banner-link -->--}}
{{--                                    </div><!-- End .banner -->--}}

{{--                                    <div class="banner banner-cat banner-badge">--}}
{{--                                        <a href="#">--}}
{{--                                            <img src="assets/images/category/fullwidth-page/banner-6.jpg" alt="Banner">--}}
{{--                                        </a>--}}

{{--                                        <a class="banner-link" href="#">--}}
{{--                                            <h3 class="banner-title">Shoes</h3><!-- End .banner-title -->--}}
{{--                                            <h4 class="banner-subtitle">2 Products</h4><!-- End .banner-subtitle -->--}}
{{--                                            <span class="banner-link-text">Shop Now</span>--}}
{{--                                        </a><!-- End .banner-link -->--}}
{{--                                    </div><!-- End .banner -->--}}
{{--                                </div><!-- End .col-sm-8 -->--}}

{{--                                <div class="col-sm-4">--}}
{{--                                    <div class="banner banner-cat banner-badge">--}}
{{--                                        <a href="#">--}}
{{--                                            <img src="assets/images/category/fullwidth-page/banner-7.jpg" alt="Banner">--}}
{{--                                        </a>--}}

{{--                                        <a class="banner-link" href="#">--}}
{{--                                            <h3 class="banner-title">T-shirts</h3><!-- End .banner-title -->--}}
{{--                                            <h4 class="banner-subtitle">0 Products</h4><!-- End .banner-subtitle -->--}}
{{--                                            <span class="banner-link-text">Shop Now</span>--}}
{{--                                        </a><!-- End .banner-link -->--}}
{{--                                    </div><!-- End .banner -->--}}

{{--                                    <div class="banner banner-cat banner-badge">--}}
{{--                                        <a href="#">--}}
{{--                                            <img src="assets/images/category/fullwidth-page/banner-8.jpg" alt="Banner">--}}
{{--                                        </a>--}}

{{--                                        <a class="banner-link" href="#">--}}
{{--                                            <h3 class="banner-title">Jumpers</h3><!-- End .banner-title -->--}}
{{--                                            <h4 class="banner-subtitle">1 Product</h4><!-- End .banner-subtitle -->--}}
{{--                                            <span class="banner-link-text">Shop Now</span>--}}
{{--                                        </a><!-- End .banner-link -->--}}
{{--                                    </div><!-- End .banner -->--}}
{{--                                </div><!-- End .col-sm-4 -->--}}
{{--                            </div><!-- End .row -->--}}
{{--                        </div><!-- End .col-lg-6 -->--}}
                    </div><!-- End .row -->
                </div><!-- End .container-fluid -->
            </div><!-- End .categories-page -->


            <div class="sidebar-filter-overlay"></div><!-- End .sidebar-filter-overlay -->
            <aside class="sidebar-shop sidebar-filter sidebar-filter-banner">
                <div class="sidebar-filter-wrapper">
                    <div class="widget widget-clean">
                        <label><i class="icon-close"></i>Filters</label>
                        <a href="#" class="sidebar-filter-clear">Clean All</a>
                    </div>
                    <div class="widget">
                        <h3 class="widget-title">
                            Browse Category
                        </h3><!-- End .widget-title -->

                        <div class="widget-body">
                            <div class="filter-items filter-items-count">
                                <div class="filter-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="cat-1">
                                        <label class="custom-control-label" for="cat-1">Women</label>
                                    </div><!-- End .custom-checkbox -->
                                    <span class="item-count">3</span>
                                </div><!-- End .filter-item -->

                                <div class="filter-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="cat-2">
                                        <label class="custom-control-label" for="cat-2">Men</label>
                                    </div><!-- End .custom-checkbox -->
                                    <span class="item-count">0</span>
                                </div><!-- End .filter-item -->

                                <div class="filter-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="cat-3">
                                        <label class="custom-control-label" for="cat-3">Holiday Shop</label>
                                    </div><!-- End .custom-checkbox -->
                                    <span class="item-count">0</span>
                                </div><!-- End .filter-item -->

                                <div class="filter-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="cat-4">
                                        <label class="custom-control-label" for="cat-4">Gifts</label>
                                    </div><!-- End .custom-checkbox -->
                                    <span class="item-count">0</span>
                                </div><!-- End .filter-item -->

                                <div class="filter-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="cat-5">
                                        <label class="custom-control-label" for="cat-5">Homeware</label>
                                    </div><!-- End .custom-checkbox -->
                                    <span class="item-count">0</span>
                                </div><!-- End .filter-item -->

                                <div class="filter-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="cat-6" checked="checked">
                                        <label class="custom-control-label" for="cat-6">Grid Categories Fullwidth</label>
                                    </div><!-- End .custom-checkbox -->
                                    <span class="item-count">13</span>
                                </div><!-- End .filter-item -->

                                <div class="sub-filter-items">
                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cat-7">
                                            <label class="custom-control-label" for="cat-7">Dresses</label>
                                        </div><!-- End .custom-checkbox -->
                                        <span class="item-count">3</span>
                                    </div><!-- End .filter-item -->

                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cat-8">
                                            <label class="custom-control-label" for="cat-8">T-shirts</label>
                                        </div><!-- End .custom-checkbox -->
                                        <span class="item-count">0</span>
                                    </div><!-- End .filter-item -->

                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cat-9">
                                            <label class="custom-control-label" for="cat-9">Bags</label>
                                        </div><!-- End .custom-checkbox -->
                                        <span class="item-count">4</span>
                                    </div><!-- End .filter-item -->

                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cat-10">
                                            <label class="custom-control-label" for="cat-10">Jackets</label>
                                        </div><!-- End .custom-checkbox -->
                                        <span class="item-count">2</span>
                                    </div><!-- End .filter-item -->

                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cat-11">
                                            <label class="custom-control-label" for="cat-11">Shoes</label>
                                        </div><!-- End .custom-checkbox -->
                                        <span class="item-count">2</span>
                                    </div><!-- End .filter-item -->

                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cat-12">
                                            <label class="custom-control-label" for="cat-12">Jumpers</label>
                                        </div><!-- End .custom-checkbox -->
                                        <span class="item-count">1</span>
                                    </div><!-- End .filter-item -->

                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cat-13">
                                            <label class="custom-control-label" for="cat-13">Jeans</label>
                                        </div><!-- End .custom-checkbox -->
                                        <span class="item-count">1</span>
                                    </div><!-- End .filter-item -->

                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cat-14">
                                            <label class="custom-control-label" for="cat-14">Sportwear</label>
                                        </div><!-- End .custom-checkbox -->
                                        <span class="item-count">0</span>
                                    </div><!-- End .filter-item -->
                                </div><!-- End .sub-filter-items -->
                            </div><!-- End .filter-items -->
                        </div><!-- End .widget-body -->
                    </div><!-- End .widget -->
                </div><!-- End .sidebar-filter-wrapper -->
            </aside><!-- End .sidebar-filter -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->

{{--    <div class="py-5">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <h2>All Categories</h2>--}}
{{--                    <div class="row">--}}
{{--                        @foreach($category as $cate)--}}
{{--                            <div class="col-md-3 mb-3">--}}
{{--                                <a href="{{ url('view-category/'.$cate->slug) }}">--}}
{{--                                    <div class="card">--}}
{{--                                        <img src="{{ asset('assets/uploads/category/'.$cate->image) }}" alt="Category image" >--}}
{{--                                        <div class="card-body">--}}
{{--                                            <h5>{{ $cate->name }}</h5>--}}
{{--                                            <p>--}}
{{--                                                {{ $cate->description }}--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
