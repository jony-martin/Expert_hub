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
                                        <a href="{{ $banner->button_url }}"
                                            class="btn btn-lg btn-secondary">{{ $banner->button_name }}</a>
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
                                @foreach ($products as $product)
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="{{ route('product', $product->slug) }}" class="image">
                                                        @php
                                                            $images = explode(',', $product->image); // Split images
                                                            $mainImage = $images[0] ?? 'default.jpg'; // First image or default
                                                            $hoverImage = $images[1] ?? $mainImage; // Second image or fallback
                                                        @endphp
                                                        <img class="main-image" src="{{ asset($mainImage) }}"
                                                            alt="{{ $product->name }}" />
                                                        <img class="hover-image" src="{{ asset($hoverImage) }}"
                                                            alt="{{ $product->name }}" />
                                                    </a>
                                                    @if ($product->discount_price && $product->discount_price < $product->base_price)
                                                        <span
                                                            class="percentage">{{ round((($product->base_price - $product->discount_price) / $product->base_price) * 100) }}%</span>
                                                    @endif
                                                    <a href="#" class="quickview" data-link-action="quickview"
                                                        title="Quick view" data-bs-toggle="modal"
                                                        data-bs-target="#ec_quickview_modal"
                                                        data-product-id="{{ $product->id }}">
                                                        <i class="fi-rr-eye"></i>
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <a href="#" class="ec-btn-group compare" title="Compare"><i
                                                                class="fi fi-rr-arrows-repeat"></i></a>
                                                        <button title="Add To Cart" class="add-to-cart"
                                                            onclick="addToCart({{ $product->id }}, '{{ $product->name }}', {{ $product->discount_price ?? $product->base_price }}, '{{ asset($mainImage) }}', 1, '{{ $product->slug }}')">
                                                            <i class="fi-rr-shopping-basket"></i> Add To Cart
                                                        </button>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                                class="fi-rr-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title">
                                                    <a
                                                        href="{{ route('product', $product->slug) }}">{{ $product->name }}</a>
                                                </h5>
                                                <div class="ec-pro-rating">
                                                    <!-- Assuming a rating field; adjust if you have one -->
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </div>
                                                <div class="ec-pro-list-desc">
                                                    {{ Str::limit($product->description, 100) }}
                                                    <!-- Limit description to 100 chars -->
                                                </div>
                                                <span class="ec-price">
                                                    @if ($product->discount_price && $product->discount_price < $product->base_price)
                                                        <span
                                                            class="old-price">${{ number_format($product->base_price, 2) }}</span>
                                                        <span
                                                            class="new-price">${{ number_format($product->discount_price, 2) }}</span>
                                                    @else
                                                        <span
                                                            class="new-price">${{ number_format($product->base_price, 2) }}</span>
                                                    @endif
                                                </span>
                                                <div class="ec-pro-option">
                                                    @if ($product->color)
                                                        <div class="ec-pro-color">
                                                            <span class="ec-pro-opt-label">Color</span>
                                                            <ul class="ec-opt-swatch ec-change-img">
                                                                @php $colors = explode(',', $product->color); @endphp
                                                                @foreach ($colors as $index => $color)
                                                                    <li class="{{ $index === 0 ? 'active' : '' }}">
                                                                        <a href="#" class="ec-opt-clr-img"
                                                                            data-src="{{ asset($images[$index] ?? $mainImage) }}"
                                                                            data-src-hover="{{ asset($images[$index] ?? $hoverImage) }}"
                                                                            data-tooltip="{{ $color }}">
                                                                            <span
                                                                                style="background-color: {{ $color }}"></span>
                                                                        </a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif
                                                    @if ($product->size)
                                                        <div class="ec-pro-size">
                                                            <span class="ec-pro-opt-label">Size</span>
                                                            <ul class="ec-opt-size">
                                                                @php $sizes = explode(',', $product->size); @endphp
                                                                @foreach ($sizes as $index => $size)
                                                                    <li class="{{ $index === 0 ? 'active' : '' }}">
                                                                        <a href="#" class="ec-opt-sz"
                                                                            data-old="${{ number_format($product->base_price, 2) }}"
                                                                            data-new="${{ number_format($product->discount_price ?? $product->base_price, 2) }}"
                                                                            data-tooltip="{{ $size }}">{{ $size }}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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
                @foreach ($new_collection as $product)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="{{ route('product', $product->slug) }}" class="image">
                                        @php
                                            $images = explode(',', $product->image); // Split images
                                            $mainImage = $images[0] ?? 'default.jpg'; // First image or default
                                            $hoverImage = $images[1] ?? $mainImage; // Second image or fallback
                                        @endphp
                                        <img class="main-image" src="{{ asset($mainImage) }}"
                                            alt="{{ $product->name }}" />
                                        <img class="hover-image" src="{{ asset($hoverImage) }}"
                                            alt="{{ $product->name }}" />
                                    </a>
                                    @if ($product->discount_price && $product->discount_price < $product->base_price)
                                        <span
                                            class="percentage">{{ round((($product->base_price - $product->discount_price) / $product->base_price) * 100) }}%</span>
                                    @endif
                                    <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"
                                        data-product-id="{{ $product->id }}">
                                        <i class="fi-rr-eye"></i>
                                    </a>
                                    <div class="ec-pro-actions">
                                        <a href="#" class="ec-btn-group compare" title="Compare"><i
                                                class="fi fi-rr-arrows-repeat"></i></a>
                                        <button title="Add To Cart" class="add-to-cart"
                                            onclick="addToCart({{ $product->id }}, '{{ $product->name }}', {{ $product->discount_price ?? $product->base_price }}, '{{ asset($mainImage) }}', 1)">
                                            <i class="fi-rr-shopping-basket"></i> Add To Cart
                                        </button>
                                        <a class="ec-btn-group wishlist" title="Wishlist"><i class="fi-rr-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title">
                                    <a href="{{ route('product', $product->slug) }}">{{ $product->name }}</a>
                                </h5>
                                <div class="ec-pro-rating">
                                    <!-- Assuming a rating field; adjust if you have one -->
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <div class="ec-pro-list-desc">
                                    {{ Str::limit($product->description, 100) }}
                                    <!-- Limit description to 100 chars -->
                                </div>
                                <span class="ec-price">
                                    @if ($product->discount_price && $product->discount_price < $product->base_price)
                                        <span class="old-price">${{ number_format($product->base_price, 2) }}</span>
                                        <span class="new-price">${{ number_format($product->discount_price, 2) }}</span>
                                    @else
                                        <span class="new-price">${{ number_format($product->base_price, 2) }}</span>
                                    @endif
                                </span>
                                <div class="ec-pro-option">
                                    @if ($product->color)
                                        <div class="ec-pro-color">
                                            <span class="ec-pro-opt-label">Color</span>
                                            <ul class="ec-opt-swatch ec-change-img">
                                                @php $colors = explode(',', $product->color); @endphp
                                                @foreach ($colors as $index => $color)
                                                    <li class="{{ $index === 0 ? 'active' : '' }}">
                                                        <a href="#" class="ec-opt-clr-img"
                                                            data-src="{{ asset($images[$index] ?? $mainImage) }}"
                                                            data-src-hover="{{ asset($images[$index] ?? $hoverImage) }}"
                                                            data-tooltip="{{ $color }}">
                                                            <span style="background-color: {{ $color }}"></span>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if ($product->size)
                                        <div class="ec-pro-size">
                                            <span class="ec-pro-opt-label">Size</span>
                                            <ul class="ec-opt-size">
                                                @php $sizes = explode(',', $product->size); @endphp
                                                @foreach ($sizes as $index => $size)
                                                    <li class="{{ $index === 0 ? 'active' : '' }}">
                                                        <a href="#" class="ec-opt-sz"
                                                            data-old="${{ number_format($product->base_price, 2) }}"
                                                            data-new="${{ number_format($product->discount_price ?? $product->base_price, 2) }}"
                                                            data-tooltip="{{ $size }}">{{ $size }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-sm-12 shop-all-btn">
                    <a href="{{ route('shop') }}">Shop All Collection</a>
                </div>
            </div>
        </div>
    </section>
    <!-- New Product end -->
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
    </script>
@endpush
