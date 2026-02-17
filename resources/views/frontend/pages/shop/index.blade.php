@extends('frontend.layouts.main')
@section('content')
    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Shop</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="ec-breadcrumb-item active">Shop</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Ec Shop page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-shop-rightside col-lg-9 col-md-12 order-lg-last order-md-first margin-b-30">
                    <!-- Shop Top Start -->
                    <div class="ec-pro-list-top d-flex">
                        <div class="col-md-6 ec-grid-list">
                            <div class="ec-gl-btn">
                                <button class="btn btn-grid active">
                                    <i class="fi-rr-apps"></i>
                                </button>
                                <button class="btn btn-list">
                                    <i class="fi-rr-list"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 ec-sort-select">
                            <span class="sort-by">Sort by</span>
                            <div class="ec-select-inner">
                                <select name="ec-select" id="ec-select">
                                    <option selected disabled>Position</option>
                                    <option value="1">Relevance</option>
                                    <option value="2">Name, A to Z</option>
                                    <option value="3">Name, Z to A</option>
                                    <option value="4">Price, low to high</option>
                                    <option value="5">Price, high to low</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Shop Top End -->

                    <!-- Shop content Start -->
                    <div class="shop-pro-content">
                        <div class="shop-pro-inner">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ route('product') }}" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend') }}/assets/images/product-image/6_1.jpg"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend') }}/assets/images/product-image/6_2.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="#" class="ec-btn-group compare" title="Compare"><i
                                                            class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart">
                                                        <i class="fi-rr-shopping-basket"></i> Add To Cart
                                                    </button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title">
                                                <a href="{{ route('product') }}">Round Neck T-Shirt</a>
                                            </h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <div class="ec-pro-list-desc">
                                                Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum is simply dutmmy
                                                text ever since the 1500s, when an unknown printer
                                                took a galley.
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$27.00</span>
                                                <span class="new-price">$22.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active">
                                                            <a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ asset('frontend') }}/assets/images/product-image/6_1.jpg"
                                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/6_1.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color: #e8c2ff"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ asset('frontend') }}/assets/images/product-image/6_2.jpg"
                                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/6_2.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color: #9cfdd5"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active">
                                                            <a href="#" class="ec-opt-sz" data-old="$25.00"
                                                                data-new="$20.00" data-tooltip="Small">S</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="ec-opt-sz" data-old="$27.00"
                                                                data-new="$22.00" data-tooltip="Medium">M</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ route('product') }}" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend') }}/assets/images/product-image/7_1.jpg"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend') }}/assets/images/product-image/7_2.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="#" class="ec-btn-group compare" title="Compare"><i
                                                            class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart">
                                                        <i class="fi-rr-shopping-basket"></i> Add To Cart
                                                    </button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title">
                                                <a href="{{ route('product') }}">Full Sleeve Shirt</a>
                                            </h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <div class="ec-pro-list-desc">
                                                Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum is simply dutmmy
                                                text ever since the 1500s, when an unknown printer
                                                took a galley.
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$12.00</span>
                                                <span class="new-price">$10.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active">
                                                            <a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ asset('frontend') }}/assets/images/product-image/7_1.jpg"
                                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/7_1.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color: #01f1f1"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ asset('frontend') }}/assets/images/product-image/7_2.jpg"
                                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/7_2.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color: #b89df8"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active">
                                                            <a href="#" class="ec-opt-sz" data-old="$12.00"
                                                                data-new="$10.00" data-tooltip="Small">S</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ route('product') }}" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend') }}/assets/images/product-image/1_1.jpg"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend') }}/assets/images/product-image/1_2.jpg"
                                                        alt="Product" />
                                                </a>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="#" class="ec-btn-group compare" title="Compare"><i
                                                            class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart">
                                                        <i class="fi-rr-shopping-basket"></i> Add To Cart
                                                    </button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title">
                                                <a href="{{ route('product') }}">Cute Baby Toy's</a>
                                            </h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <div class="ec-pro-list-desc">
                                                Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum is simply dutmmy
                                                text ever since the 1500s, when an unknown printer
                                                took a galley.
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$40.00</span>
                                                <span class="new-price">$30.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active">
                                                            <a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ asset('frontend') }}/assets/images/product-image/1_1.jpg"
                                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/1_1.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color: #90cdf7"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ asset('frontend') }}/assets/images/product-image/1_2.jpg"
                                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/1_2.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color: #ff3b66"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active">
                                                            <a href="#" class="ec-opt-sz" data-old="$40.00"
                                                                data-new="$30.00" data-tooltip="Small">S</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="ec-opt-sz" data-old="$50.00"
                                                                data-new="$40.00" data-tooltip="Medium">M</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ route('product') }}" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend') }}/assets/images/product-image/2_1.jpg"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend') }}/assets/images/product-image/2_2.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="#" class="ec-btn-group compare" title="Compare"><i
                                                            class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart">
                                                        <i class="fi-rr-shopping-basket"></i> Add To Cart
                                                    </button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title">
                                                <a href="{{ route('product') }}">Jumbo Carry Bag</a>
                                            </h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <div class="ec-pro-list-desc">
                                                Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum is simply dutmmy
                                                text ever since the 1500s, when an unknown printer
                                                took a galley.
                                            </div>
                                            <span class="ec-price">
                                                <span class="new-price">$40.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active">
                                                            <a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ asset('frontend') }}/assets/images/product-image/2_1.jpg"
                                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/2_2.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color: #fdbf04"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ route('product') }}" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend') }}/assets/images/product-image/3_1.jpg"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend') }}/assets/images/product-image/3_2.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="#" class="ec-btn-group compare" title="Compare"><i
                                                            class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart">
                                                        <i class="fi-rr-shopping-basket"></i> Add To Cart
                                                    </button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title">
                                                <a href="{{ route('product') }}">Designer Leather Purses</a>
                                            </h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <div class="ec-pro-list-desc">
                                                Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum is simply dutmmy
                                                text ever since the 1500s, when an unknown printer
                                                took a galley.
                                            </div>
                                            <span class="ec-price">
                                                <span class="new-price">$30.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active">
                                                            <a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ asset('frontend') }}/assets/images/product-image/3_1.jpg"
                                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/3_1.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color: #75e3ff"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ asset('frontend') }}/assets/images/product-image/3_2.jpg"
                                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/3_2.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color: #11f7d8"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ asset('frontend') }}/assets/images/product-image/3_3.jpg"
                                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/3_3.jpg"
                                                                data-tooltip="Green"><span
                                                                    style="background-color: #acff7c"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ route('product') }}" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend') }}/assets/images/product-image/4_1.jpg"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend') }}/assets/images/product-image/4_2.jpg"
                                                        alt="Product" />
                                                </a>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="#" class="ec-btn-group compare" title="Compare"><i
                                                            class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart">
                                                        <i class="fi-rr-shopping-basket"></i> Add To Cart
                                                    </button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title">
                                                <a href="{{ route('product') }}">Canvas Cowboy Hat</a>
                                            </h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <div class="ec-pro-list-desc">
                                                Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum is simply dutmmy
                                                text ever since the 1500s, when an unknown printer
                                                took a galley.
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$12.00</span>
                                                <span class="new-price">$10.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active">
                                                            <a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ asset('frontend') }}/assets/images/product-image/4_1.jpg"
                                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/4_1.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color: #ebbf60"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ asset('frontend') }}/assets/images/product-image/4_2.jpg"
                                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/4_2.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color: #b4fc57"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ asset('frontend') }}/assets/images/product-image/4_3.jpg"
                                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/4_3.jpg"
                                                                data-tooltip="Green"><span
                                                                    style="background-color: #2ea1cd"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ route('product') }}" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend') }}/assets/images/product-image/5_1.jpg"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend') }}/assets/images/product-image/5_2.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="#" class="ec-btn-group compare" title="Compare"><i
                                                            class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart">
                                                        <i class="fi-rr-shopping-basket"></i> Add To Cart
                                                    </button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title">
                                                <a href="{{ route('product') }}">Leather Belt for Men</a>
                                            </h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <div class="ec-pro-list-desc">
                                                Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum is simply dutmmy
                                                text ever since the 1500s, when an unknown printer
                                                took a galley.
                                            </div>
                                            <span class="ec-price">
                                                <span class="new-price">$10.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active">
                                                            <a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ asset('frontend') }}/assets/images/product-image/5_1.jpg"
                                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/5_1.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color: #9e9e9e"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ asset('frontend') }}/assets/images/product-image/5_2.jpg"
                                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/5_2.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color: #eb8e76"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <span class="ec-pro-opt-label">Size</span>
                                                    <ul class="ec-opt-size">
                                                        <li class="active">
                                                            <a href="#" class="ec-opt-sz" data-old="$15.00"
                                                                data-new="$10.00" data-tooltip="Small">32</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ route('product') }}" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend') }}/assets/images/product-image/8_1.jpg"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend') }}/assets/images/product-image/8_2.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <a href="#" class="quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                                <div class="ec-pro-actions">
                                                    <a href="#" class="ec-btn-group compare" title="Compare"><i
                                                            class="fi fi-rr-arrows-repeat"></i></a>
                                                    <button title="Add To Cart" class="add-to-cart">
                                                        <i class="fi-rr-shopping-basket"></i> Add To Cart
                                                    </button>
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title">
                                                <a href="{{ route('product') }}">Digital Smart Watches</a>
                                            </h5>
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <div class="ec-pro-list-desc">
                                                Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum is simply dutmmy
                                                text ever since the 1500s, when an unknown printer
                                                took a galley.
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$100.00</span>
                                                <span class="new-price">$80.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <span class="ec-pro-opt-label">Color</span>
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active">
                                                            <a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ asset('frontend') }}/assets/images/product-image/8_2.jpg"
                                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/8_2.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color: #e9dddd"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ asset('frontend') }}/assets/images/product-image/8_3.jpg"
                                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/8_3.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color: #ffd5cb"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ asset('frontend') }}/assets/images/product-image/8_4.jpg"
                                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/8_4.jpg"
                                                                data-tooltip="Green"><span
                                                                    style="background-color: #92e4fd"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Ec Pagination Start -->
                        <div class="ec-pro-pagination">
                            <span>Showing 1-12 of 21 item(s)</span>
                            <ul class="ec-pro-pagination-inner">
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a class="next" href="#">Next <i class="ecicon eci-angle-right"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Ec Pagination End -->
                    </div>
                    <!--Shop content End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="ec-shop-leftside col-lg-3 col-md-12 order-lg-first order-md-last">
                    <div id="shop_sidebar">
                        <div class="ec-sidebar-heading">
                            <h1>Filter Products By</h1>
                        </div>
                        <div class="ec-sidebar-wrap">
                            <!-- Sidebar Category Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Category</h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" checked />
                                                <a href="#">clothes</a><span class="checked"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" /> <a href="#">Bags</a><span
                                                    class="checked"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" /> <a href="#">Shoes</a><span
                                                    class="checked"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" /> <a href="#">cosmetics</a><span
                                                    class="checked"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" /> <a href="#">electrics</a><span
                                                    class="checked"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" /> <a href="#">phone</a><span
                                                    class="checked"></span>
                                            </div>
                                        </li>
                                        <li id="ec-more-toggle-content" style="padding: 0; display: none">
                                            <ul>
                                                <li>
                                                    <div class="ec-sidebar-block-item">
                                                        <input type="checkbox" /> <a href="#">Watch</a><span
                                                            class="checked"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="ec-sidebar-block-item">
                                                        <input type="checkbox" /> <a href="#">Cap</a><span
                                                            class="checked"></span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item ec-more-toggle">
                                                <span class="checked"></span><span id="ec-more-toggle">More
                                                    Categories</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Size Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Size</h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" value="" checked /><a
                                                    href="#">S</a><span class="checked"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" value="" /><a href="#">M</a><span
                                                    class="checked"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" value="" /> <a href="#">L</a><span
                                                    class="checked"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" value="" /><a href="#">XL</a><span
                                                    class="checked"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <input type="checkbox" value="" /><a href="#">XXL</a><span
                                                    class="checked"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Color item -->
                            <div class="ec-sidebar-block ec-sidebar-block-clr">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Color</h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <span style="background-color: #c4d6f9"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <span style="background-color: #ff748b"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <span style="background-color: #000000"></span>
                                            </div>
                                        </li>
                                        <li class="active">
                                            <div class="ec-sidebar-block-item">
                                                <span style="background-color: #2bff4a"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <span style="background-color: #ff7c5e"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <span style="background-color: #f155ff"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <span style="background-color: #ffef00"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <span style="background-color: #c89fff"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <span style="background-color: #7bfffa"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item">
                                                <span style="background-color: #56ffc1"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Price Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Price</h3>
                                </div>
                                <div class="ec-sb-block-content es-price-slider">
                                    <div class="ec-price-filter">
                                        <div id="ec-sliderPrice" class="filter__slider-price" data-min="0"
                                            data-max="250" data-step="10"></div>
                                        <div class="ec-price-input">
                                            <label class="filter__label"><input type="text"
                                                    class="filter__input" /></label>
                                            <span class="ec-price-divider"></span>
                                            <label class="filter__label"><input type="text"
                                                    class="filter__input" /></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop page -->
@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sortSelect = document.getElementById('ec-select');
            const productsContainer = document.querySelector('.shop-pro-inner .row'); // Parent of product elements

            // Function to get sort value from a product element
            function getSortValue(product, criteria) {
                const titleEl = product.querySelector('.ec-pro-title a');
                const priceEl = product.querySelector('.new-price');

                switch (criteria) {
                    case 'name-asc':
                        return titleEl ? titleEl.textContent.trim().toLowerCase() : '';
                    case 'name-desc':
                        return titleEl ? titleEl.textContent.trim().toLowerCase() : '';
                    case 'price-asc':
                        return priceEl ? parseFloat(priceEl.textContent.replace('$', '')) || 0 : 0;
                    case 'price-desc':
                        return priceEl ? parseFloat(priceEl.textContent.replace('$', '')) || 0 : 0;
                    default:
                        return 0; // For relevance, no specific value needed
                }
            }

            // Function to sort and reorder products
            function sortProducts(criteria) {
                const products = Array.from(productsContainer.querySelectorAll('.pro-gl-content'));

                if (criteria === 'relevance') {
                    // For relevance, do nothing (keep original order)
                    return;
                }

                products.sort((a, b) => {
                    const valA = getSortValue(a, criteria);
                    const valB = getSortValue(b, criteria);

                    if (criteria === 'name-desc' || criteria === 'price-desc') {
                        return valB > valA ? 1 : valB < valA ? -1 : 0; // Descending
                    } else {
                        return valA > valB ? 1 : valA < valB ? -1 : 0; // Ascending
                    }
                });

                // Re-append sorted products to the container
                products.forEach(product => productsContainer.appendChild(product));
            }

            // Listen for select changes
            sortSelect.addEventListener('change', function() {
                const selectedValue = this.value;
                let criteria = '';

                switch (selectedValue) {
                    case '1': // Relevance
                        criteria = 'relevance';
                        break;
                    case '2': // Name, A to Z
                        criteria = 'name-asc';
                        break;
                    case '3': // Name, Z to A
                        criteria = 'name-desc';
                        break;
                    case '4': // Price, low to high
                        criteria = 'price-asc';
                        break;
                    case '5': // Price, high to low
                        criteria = 'price-desc';
                        break;
                    default:
                        return; // Do nothing for invalid values
                }

                sortProducts(criteria);
            });
        });
        // filter products by
        document.addEventListener('DOMContentLoaded', function() {
            const productsContainer = document.querySelector('.shop-pro-inner .row');
            const categoryCheckboxes = document.querySelectorAll(
            '#shop_sidebar input[type="checkbox"]'); // All checkboxes in sidebar
            const colorSpans = document.querySelectorAll('.ec-sidebar-block-clr .ec-sidebar-block-item span');
            const minPriceInput = document.querySelector('.filter__input:nth-child(1)');
            const maxPriceInput = document.querySelector('.filter__input:nth-child(2)');
            const moreToggle = document.getElementById('ec-more-toggle');
            const moreContent = document.getElementById('ec-more-toggle-content');

            // Initialize price slider (requires jQuery UI)
            if (typeof $ !== 'undefined' && $('#ec-sliderPrice').length) {
                $('#ec-sliderPrice').slider({
                    range: true,
                    min: 0,
                    max: 250,
                    step: 10,
                    values: [0, 250],
                    slide: function(event, ui) {
                        minPriceInput.value = ui.values[0];
                        maxPriceInput.value = ui.values[1];
                        filterProducts();
                    }
                });
                minPriceInput.value = $('#ec-sliderPrice').slider('values', 0);
                maxPriceInput.value = $('#ec-sliderPrice').slider('values', 1);
            }

            // Handle manual input changes for price
            [minPriceInput, maxPriceInput].forEach(input => {
                input.addEventListener('input', function() {
                    const minVal = parseFloat(minPriceInput.value) || 0;
                    const maxVal = parseFloat(maxPriceInput.value) || 250;
                    if (typeof $ !== 'undefined') {
                        $('#ec-sliderPrice').slider('values', [minVal, maxVal]);
                    }
                    filterProducts();
                });
            });

            // Make color spans clickable
            colorSpans.forEach(span => {
                span.addEventListener('click', function() {
                    this.parentElement.parentElement.classList.toggle('active');
                    filterProducts();
                });
            });

            // Handle "More Categories" toggle
            if (moreToggle) {
                moreToggle.addEventListener('click', function() {
                    moreContent.style.display = moreContent.style.display === 'none' ? 'block' : 'none';
                });
            }

            // Listen for checkbox changes (Category and Size)
            categoryCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', filterProducts);
            });

            // Function to get selected filters
            function getSelectedFilters() {
                const selectedCategories = Array.from(document.querySelectorAll(
                    '#shop_sidebar .ec-sidebar-block:nth-child(1) input[type="checkbox"]:checked')).map(cb => cb
                    .nextElementSibling.textContent.trim().toLowerCase()); // Category block only
                const selectedSizes = Array.from(document.querySelectorAll(
                    '#shop_sidebar .ec-sidebar-block:nth-child(2) input[type="checkbox"]:checked')).map(cb => cb
                    .nextElementSibling.textContent.trim().toUpperCase()); // Size block only
                const selectedColors = Array.from(document.querySelectorAll(
                    '.ec-sidebar-block-clr .ec-sidebar-block-item.active span')).map(span => span.style
                    .backgroundColor);
                const minPrice = parseFloat(minPriceInput.value) || 0;
                const maxPrice = parseFloat(maxPriceInput.value) || 250;
                return {
                    selectedCategories,
                    selectedSizes,
                    selectedColors,
                    minPrice,
                    maxPrice
                };
            }

            // Function to infer category from product title
            function inferCategory(title) {
                const lowerTitle = title.toLowerCase();
                if (lowerTitle.includes('t-shirt') || lowerTitle.includes('shirt')) return 'clothes';
                if (lowerTitle.includes('bag') || lowerTitle.includes('purse')) return 'bags';
                if (lowerTitle.includes('shoe')) return 'shoes';
                if (lowerTitle.includes('cosmetic')) return 'cosmetics';
                if (lowerTitle.includes('electric') || lowerTitle.includes('watch')) return 'electrics';
                if (lowerTitle.includes('phone')) return 'phone';
                if (lowerTitle.includes('cap')) return 'cap';
                return ''; // No match
            }

            // Function to extract product data
            function getProductData(product) {
                const titleEl = product.querySelector('.ec-pro-title a');
                const category = titleEl ? inferCategory(titleEl.textContent.trim()) : '';
                const sizes = Array.from(product.querySelectorAll('.ec-pro-size .ec-opt-sz')).map(el => el
                    .textContent.trim().toUpperCase());
                const colors = Array.from(product.querySelectorAll('.ec-pro-color .ec-opt-swatch span')).map(span =>
                    span.style.backgroundColor);
                const priceEl = product.querySelector('.new-price');
                const price = priceEl ? parseFloat(priceEl.textContent.replace('$', '')) || 0 : 0;
                return {
                    category,
                    sizes,
                    colors,
                    price
                };
            }

            // Function to filter products
            function filterProducts() {
                const {
                    selectedCategories,
                    selectedSizes,
                    selectedColors,
                    minPrice,
                    maxPrice
                } = getSelectedFilters();
                const products = document.querySelectorAll('.pro-gl-content');

                products.forEach(product => {
                    const {
                        category,
                        sizes,
                        colors,
                        price
                    } = getProductData(product);

                    let show = true;

                    // Check category
                    if (selectedCategories.length > 0 && !selectedCategories.some(cat => category ===
                        cat)) {
                        show = false;
                    }

                    // Check size
                    if (selectedSizes.length > 0 && !selectedSizes.some(size => sizes.includes(size))) {
                        show = false;
                    }

                    // Check color
                    if (selectedColors.length > 0 && !selectedColors.some(color => colors.includes(
                        color))) {
                        show = false;
                    }

                    // Check price
                    if (price < minPrice || price > maxPrice) {
                        show = false;
                    }

                    product.style.display = show ? '' : 'none';
                });
            }

            // Initial filter (show all if no selections)
            filterProducts();
        });
    </script>
@endpush
