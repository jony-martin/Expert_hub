@extends('frontend.layouts.main')
@section('content')
    <!-- Main Slider Start -->
    <div class="sticky-header-next-sec ec-main-slider section section-space-pb">
        <div class="ec-slider swiper-container main-slider-nav main-slider-dot">
            <!-- Main slider -->
            <div class="swiper-wrapper">
                @foreach ($banners as $banner)
                    <div class="ec-slide-item swiper-slide d-flex ec-slide-2">
                        <div class="container align-self-center">
                            <div class="row">
                                <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                    <div class="ec-slide-content slider-animation">
                                        <h1 class="ec-slide-title">{{ $banner->title }}</h1>
                                        <h2 class="ec-slide-stitle">{{ $banner->sub_title }}</h2>
                                        <p>
                                            {!! $banner->description !!}
                                        </p>
                                        <a href="{{ $banner->button_url }}" class="btn btn-lg btn-secondary">{{ $banner->button_name }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination swiper-pagination-white"></div>
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <!-- Main Slider End -->

    <!--  shop full width Start -->
    <!-- Ec Shop page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Our Top Collection</h2>
                        <h2 class="ec-title">Our Top Collection</h2>
                        <p class="sub-title">Browse The Collection of Top Products</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ec-shop-rightside col-lg-12 col-md-12">
                    <!-- Shop Top Start -->
                    <div class="ec-pro-list-top d-flex">
                        <div class="col-md-6 ec-grid-list">
                            <div class="ec-gl-btn">
                                <button class="btn sidebar-toggle-icon">
                                    <i class="fi-rr-filter"></i>
                                </button>
                                <button class="btn btn-grid-50 active">
                                    <i class="fi-rr-apps"></i>
                                </button>
                                <button class="btn btn-list-50">
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
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
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
                                                <a href="{{ route('product.index') }}">Round Neck T-Shirt</a>
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
                                                text.
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
                                                        <li>
                                                            <a href="#" class="ec-opt-sz" data-old="$35.00"
                                                                data-new="$30.00" data-tooltip="Extra Large">XL</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend') }}/assets/images/product-image/7_1.jpg"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend') }}/assets/images/product-image/7_2.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
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
                                                <a href="product-left-sidebar.html">Full Sleeve Shirt</a>
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
                                                text.
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
                                                        <li>
                                                            <a href="#" class="ec-opt-sz" data-old="$15.00"
                                                                data-new="$12.00" data-tooltip="Medium">M</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="ec-opt-sz" data-old="$20.00"
                                                                data-new="$17.00" data-tooltip="Extra Large">XL</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend') }}/assets/images/product-image/1_1.jpg"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend') }}/assets/images/product-image/1_2.jpg"
                                                        alt="Product" />
                                                </a>
                                                <span class="percentage">20%</span>
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
                                                <a href="product-left-sidebar.html">Cute Baby Toy's</a>
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
                                                text.
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
                                                        <li>
                                                            <a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ asset('frontend') }}/assets/images/product-image/1_3.jpg"
                                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/1_3.jpg"
                                                                data-tooltip="Green"><span
                                                                    style="background-color: #ffc476"></span></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ asset('frontend') }}/assets/images/product-image/1_4.jpg"
                                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/1_4.jpg"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color: #1af0ba"></span></a>
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
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend') }}/assets/images/product-image/2_1.jpg"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend') }}/assets/images/product-image/2_2.jpg"
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
                                                <a href="product-left-sidebar.html">Jumbo Carry Bag</a>
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
                                                text.
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$50.00</span>
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
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('frontend') }}/assets/images/product-image/3_1.jpg"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('frontend') }}/assets/images/product-image/3_2.jpg"
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
                                                <a href="product-left-sidebar.html">Designer Leather Purses</a>
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
                                                text.
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
                                                        <li>
                                                            <a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ asset('frontend') }}/assets/images/product-image/3_5.jpg"
                                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/3_5.jpg"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color: #e996fa"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
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
                                                <a href="product-left-sidebar.html">Canvas Cowboy Hat</a>
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
                                                text.
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
                                                        <li>
                                                            <a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ asset('frontend') }}/assets/images/product-image/4_4.jpg"
                                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/4_4.jpg"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color: #c1a1fd"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
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
                                                <a href="product-left-sidebar.html">Leather Belt for Men</a>
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
                                                text.
                                            </div>
                                            <span class="ec-price">
                                                <span class="old-price">$15.00</span>
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
                                                        <li>
                                                            <a href="#" class="ec-opt-sz" data-old="$17.00"
                                                                data-new="$12.00" data-tooltip="Medium">34</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
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
                                                <a href="product-left-sidebar.html">Digital Smart Watches</a>
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
                                                text.
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
                <div class="filter-sidebar-overlay"></div>
                <div class="ec-shop-leftside filter-sidebar">
                    <div class="ec-sidebar-heading">
                        <h1>Filter Products By</h1>
                        <a class="filter-cls-btn" href="javascript:void(0)">×</a>
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
                                            <input type="checkbox" checked /> <a href="#">clothes</a><span
                                                class="checked"></span>
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
                                            <input type="checkbox" value="" checked /><a href="#">S</a><span
                                                class="checked"></span>
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
                                    <div id="ec-sliderPrice" class="filter__slider-price" data-min="0" data-max="250"
                                        data-step="10"></div>
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
    </section>
    <!-- End Shop page -->

    <!-- New Product Start -->
    <section class="section ec-new-product section-space-p" id="arrivals">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">New Arrivals</h2>
                        <h2 class="ec-title">New Arrivals</h2>
                        <p class="sub-title">Browse The Collection of Top Products</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- New Product Content -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 ec-product-content" data-animation="flipInY">
                    <div class="ec-product-inner">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image"
                                        src="{{ asset('frontend') }}/assets/images/product-image/9_1.jpg"
                                        alt="Product" />
                                    <img class="hover-image"
                                        src="{{ asset('frontend') }}/assets/images/product-image/9_2.jpg"
                                        alt="Product" />
                                </a>
                                <span class="flags">
                                    <span class="sale">Sale</span>
                                </span>
                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                        class="fi-rr-eye"></i></a>
                                <div class="ec-pro-actions">
                                    <a href="#" class="ec-btn-group compare" title="Compare"><i
                                            class="fi fi-rr-arrows-repeat"></i></a>
                                    <button title="Add To Cart" class="add-to-cart">
                                        <i class="fi-rr-shopping-basket"></i> Add To Cart
                                    </button>
                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title">
                                <a href="product-left-sidebar.html">Full Sleeve Cap T-Shirt</a>
                            </h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>
                            <span class="ec-price">
                                <span class="old-price">$20.00</span>
                                <span class="new-price">$15.00</span>
                            </span>
                            <div class="ec-pro-option">
                                <div class="ec-pro-color">
                                    <span class="ec-pro-opt-label">Color</span>
                                    <ul class="ec-opt-swatch ec-change-img">
                                        <li>
                                            <a href="#" class="ec-opt-clr-img"
                                                data-src="{{ asset('frontend') }}/assets/images/product-image/9_1.jpg"
                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/9_1.jpg"
                                                data-tooltip="Orange"><span style="background-color: #74c7ff"></span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="ec-opt-clr-img"
                                                data-src="{{ asset('frontend') }}/assets/images/product-image/9_2.jpg"
                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/9_2.jpg"
                                                data-tooltip="Green"><span style="background-color: #7af6ff"></span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="ec-opt-clr-img"
                                                data-src="{{ asset('frontend') }}/assets/images/product-image/9_3.jpg"
                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/9_3.jpg"
                                                data-tooltip="Sky Blue"><span
                                                    style="background-color: #85ffeb"></span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ec-pro-size">
                                    <span class="ec-pro-opt-label">Size</span>
                                    <ul class="ec-opt-size">
                                        <li class="active">
                                            <a href="#" class="ec-opt-sz" data-old="$20.00" data-new="$15.00"
                                                data-tooltip="Small">S</a>
                                        </li>
                                        <li>
                                            <a href="#" class="ec-opt-sz" data-old="$22.00" data-new="$17.00"
                                                data-tooltip="Medium">M</a>
                                        </li>
                                        <li>
                                            <a href="#" class="ec-opt-sz" data-old="$25.00" data-new="$20.00"
                                                data-tooltip="Large">X</a>
                                        </li>
                                        <li>
                                            <a href="#" class="ec-opt-sz" data-old="$27.00" data-new="$22.00"
                                                data-tooltip="Extra Large">XL</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 ec-product-content" data-animation="flipInY">
                    <div class="ec-product-inner">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image"
                                        src="{{ asset('frontend') }}/assets/images/product-image/11_1.jpg"
                                        alt="Product" />
                                    <img class="hover-image"
                                        src="{{ asset('frontend') }}/assets/images/product-image/11_2.jpg"
                                        alt="Product" />
                                </a>
                                <span class="flags">
                                    <span class="new">New</span>
                                </span>
                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                        class="fi-rr-eye"></i></a>
                                <div class="ec-pro-actions">
                                    <a href="#" class="ec-btn-group compare" title="Compare"><i
                                            class="fi fi-rr-arrows-repeat"></i></a>
                                    <button title="Add To Cart" class="add-to-cart">
                                        <i class="fi-rr-shopping-basket"></i> Add To Cart
                                    </button>
                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title">
                                <a href="product-left-sidebar.html">Classic Leather purse</a>
                            </h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
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
                                                data-src="{{ asset('frontend') }}/assets/images/product-image/11_1.jpg"
                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/11_1.jpg"
                                                data-tooltip="Gray"><span style="background-color: #dba4ff"></span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="ec-opt-clr-img"
                                                data-src="{{ asset('frontend') }}/assets/images/product-image/11_2.jpg"
                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/11_2.jpg"
                                                data-tooltip="Orange"><span style="background-color: #ff4a77"></span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="ec-opt-clr-img"
                                                data-src="{{ asset('frontend') }}/assets/images/product-image/11_3.jpg"
                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/11_3.jpg"
                                                data-tooltip="Green"><span style="background-color: #c9ff55"></span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="ec-opt-clr-img"
                                                data-src="{{ asset('frontend') }}/assets/images/product-image/11_4.jpg"
                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/11_4.jpg"
                                                data-tooltip="Sky Blue"><span
                                                    style="background-color: #ffcc5e"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 ec-product-content" data-animation="flipInY">
                    <div class="ec-product-inner">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image"
                                        src="{{ asset('frontend') }}/assets/images/product-image/12_1.jpg"
                                        alt="Product" />
                                    <img class="hover-image"
                                        src="{{ asset('frontend') }}/assets/images/product-image/12_2.jpg"
                                        alt="Product" />
                                </a>
                                <span class="percentage">5%</span>
                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                        class="fi-rr-eye"></i></a>
                                <div class="ec-pro-actions">
                                    <a href="#" class="ec-btn-group compare" title="Compare"><i
                                            class="fi fi-rr-arrows-repeat"></i></a>
                                    <button title="Add To Cart" class="add-to-cart">
                                        <i class="fi-rr-shopping-basket"></i> Add To Cart
                                    </button>
                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title">
                                <a href="product-left-sidebar.html">Fancy Ladies Sandal</a>
                            </h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
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
                                                data-src="{{ asset('frontend') }}/assets/images/product-image/12_1.jpg"
                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/12_1.jpg"
                                                data-tooltip="Gray"><span style="background-color: #db9dff"></span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="ec-opt-clr-img"
                                                data-src="{{ asset('frontend') }}/assets/images/product-image/12_2.jpg"
                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/12_2.jpg"
                                                data-tooltip="Orange"><span
                                                    style="background-color: #00ffff"></span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="ec-opt-clr-img"
                                                data-src="{{ asset('frontend') }}/assets/images/product-image/12_3.jpg"
                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/12_3.jpg"
                                                data-tooltip="Green"><span style="background-color: #ffa7f3"></span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="ec-opt-clr-img"
                                                data-src="{{ asset('frontend') }}/assets/images/product-image/12_4.jpg"
                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/12_4.jpg"
                                                data-tooltip="Sky Blue"><span
                                                    style="background-color: #89ff7e"></span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ec-pro-size">
                                    <span class="ec-pro-opt-label">Size</span>
                                    <ul class="ec-opt-size">
                                        <li class="active">
                                            <a href="#" class="ec-opt-sz" data-old="$50.00" data-new="$40.00"
                                                data-tooltip="Small">6</a>
                                        </li>
                                        <li>
                                            <a href="#" class="ec-opt-sz" data-old="$60.00" data-new="$50.00"
                                                data-tooltip="Medium">7</a>
                                        </li>
                                        <li>
                                            <a href="#" class="ec-opt-sz" data-old="$70.00" data-new="$60.00"
                                                data-tooltip="Large">8</a>
                                        </li>
                                        <li>
                                            <a href="#" class="ec-opt-sz" data-old="$80.00" data-new="$70.00"
                                                data-tooltip="Extra Large">9</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 ec-product-content" data-animation="flipInY">
                    <div class="ec-product-inner">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image"
                                        src="{{ asset('frontend') }}/assets/images/product-image/13_1.jpg"
                                        alt="Product" />
                                    <img class="hover-image"
                                        src="{{ asset('frontend') }}/assets/images/product-image/13_2.jpg"
                                        alt="Product" />
                                </a>
                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                        class="fi-rr-eye"></i></a>
                                <div class="ec-pro-actions">
                                    <a href="#" class="ec-btn-group compare" title="Compare"><i
                                            class="fi fi-rr-arrows-repeat"></i></a>
                                    <button title="Add To Cart" class="add-to-cart">
                                        <i class="fi-rr-shopping-basket"></i> Add To Cart
                                    </button>
                                    <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title">
                                <a href="product-left-sidebar.html">Womens Leather Backpack</a>
                            </h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
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
                                                data-src="{{ asset('frontend') }}/assets/images/product-image/13_1.jpg"
                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/13_1.jpg"
                                                data-tooltip="Gray"><span style="background-color: #deffa4"></span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="ec-opt-clr-img"
                                                data-src="{{ asset('frontend') }}/assets/images/product-image/13_2.jpg"
                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/13_2.jpg"
                                                data-tooltip="Orange"><span
                                                    style="background-color: #ffcdbe"></span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="ec-opt-clr-img"
                                                data-src="{{ asset('frontend') }}/assets/images/product-image/13_3.jpg"
                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/13_3.jpg"
                                                data-tooltip="Green"><span style="background-color: #ff94df"></span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="ec-opt-clr-img"
                                                data-src="{{ asset('frontend') }}/assets/images/product-image/13_4.jpg"
                                                data-src-hover="{{ asset('frontend') }}/assets/images/product-image/13_4.jpg"
                                                data-tooltip="Sky Blue"><span
                                                    style="background-color: #dd9bfc"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 shop-all-btn">
                    <a href="{{ route('shop') }}">Shop All Collection</a>
                </div>
            </div>
        </div>
    </section>
    <!-- New Product end -->
@endsection
