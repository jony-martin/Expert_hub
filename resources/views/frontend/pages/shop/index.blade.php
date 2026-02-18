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
                            <div class="row" id="product-grid">
                                <!-- Products will be rendered here dynamically -->
                            </div>
                        </div>
                        <!-- Ec Pagination Start -->
                        <div class="ec-pro-pagination">
                            <span id="pagination-info">Showing 1-12 of 21 item(s)</span>
                            <ul class="ec-pro-pagination-inner" id="pagination-controls">
                                <!-- Pagination will be updated dynamically if needed -->
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
                <!-- filter by products Start -->
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
                                    <ul id="category-filters">
                                        <!-- Categories will be populated dynamically -->
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Size Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Size</h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <ul id="size-filters">
                                        <!-- Sizes will be populated dynamically -->
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Color item -->
                            <div class="ec-sidebar-block ec-sidebar-block-clr">
                                <div class="ec-sb-title">

                                </div>
                                <div class="ec-sb-block-content">
                                    <ul id="color-filters">
                                        <!-- Colors will be populated dynamically -->
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
                                        <div id="ec-sliderPrice" class="filter__slider-price"></div>
                                        <div class="ec-price-input">
                                            <label class="filter__label"><input type="text" class="filter__input"
                                                    id="price-min" /></label>
                                            <span class="ec-price-divider"></span>
                                            <label class="filter__label"><input type="text" class="filter__input"
                                                    id="price-max" /></label>
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

@push('styles')
    <style>
        /* Initial state for animations */
        .pro-gl-content {
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94), transform 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        /* Highly professional slide-up animation */
        .pro-gl-content.animate {
            opacity: 1;
            transform: translateY(0);
            animation: slideUpElite 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) forwards;
        }

        /* Keyframes for elite slide-up effect with refined bounce */
        @keyframes slideUpElite {
            0% {
                opacity: 0;
                transform: translateY(50px);
            }

            60% {
                opacity: 0.95;
                transform: translateY(-3px);
            }

            80% {
                opacity: 1;
                transform: translateY(1px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Staggered delays for cascading effect */
        .pro-gl-content:nth-child(1) {
            animation-delay: 0s;
        }

        .pro-gl-content:nth-child(2) {
            animation-delay: 0.08s;
        }

        .pro-gl-content:nth-child(3) {
            animation-delay: 0.16s;
        }

        .pro-gl-content:nth-child(4) {
            animation-delay: 0.24s;
        }

        .pro-gl-content:nth-child(5) {
            animation-delay: 0.32s;
        }

        .pro-gl-content:nth-child(6) {
            animation-delay: 0.4s;
        }

        .pro-gl-content:nth-child(7) {
            animation-delay: 0.48s;
        }

        .pro-gl-content:nth-child(8) {
            animation-delay: 0.56s;
        }

        /* Add more if you have more cards */
    </style>
@endpush
@push('scripts')
    <script>
        // Script for filtering and sorting the products
        try {
            console.log('Shop filter script loaded successfully.');

            // Load data from Laravel
            let allProducts = @json($products);
            let categories = @json($categories);
            let sizes = @json($sizes);
            let colors = @json($colors); // Not used in current script, but available if needed
            let minPrice = @json($minPrice);
            let maxPrice = @json($maxPrice);
            let filteredProducts = [...allProducts]; // Copy for filtering

            console.log('Loaded products:', allProducts.length); // Debug: Check if data is loaded

            // Function to populate filters dynamically
            function populateFilters() {
                // Categories
                const categoryUl = document.getElementById('category-filters');
                categories.forEach(cat => {
                    const li = document.createElement('li');
                    li.innerHTML =
                        `<div class="ec-sidebar-block-item"><input type="checkbox" value="${cat.toLowerCase()}" /><a href="#">${cat}</a><span class="checked"></span></div>`;
                    categoryUl.appendChild(li);
                });

                // Sizes
                const sizeUl = document.getElementById('size-filters');
                sizes.forEach(size => {
                    const li = document.createElement('li');
                    li.innerHTML =
                        `<div class="ec-sidebar-block-item"><input type="checkbox" value="${size}" /><a href="#">${size}</a><span class="checked"></span></div>`;
                    sizeUl.appendChild(li);
                });

                // Price slider (using noUiSlider)
                const slider = document.getElementById('ec-sliderPrice');
                if (slider && typeof noUiSlider !== 'undefined') {
                    noUiSlider.create(slider, {
                        start: [minPrice, maxPrice],
                        connect: true,
                        range: {
                            'min': minPrice,
                            'max': maxPrice
                        },
                        step: 10
                    });

                    slider.noUiSlider.on('update', function(values) {
                        document.getElementById('price-min').value = Math.round(values[0]);
                        document.getElementById('price-max').value = Math.round(values[1]);
                        applyFiltersAndSort();
                    });
                }
            }

            // Function to render products
            function renderProducts(products) {
                const grid = document.getElementById('product-grid');
                if (!grid) {
                    console.error('Product grid not found.');
                    return;
                }
                grid.innerHTML = ''; // Clear grid

                if (products.length === 0) {
                    grid.innerHTML = '<p>No products found.</p>';
                    return;
                }

                products.forEach(product => {
                    const images = product.image ? product.image.split(',') : [];
                    const mainImage = images[0] || 'default.jpg';
                    const hoverImage = images[1] || mainImage;
                    const price = product.discount_price || product.base_price;
                    const oldPrice = product.discount_price ? product.base_price : '';

                    // Generate product URL in JS to avoid Blade route error
                    const productUrl = '{{ route('product', ':slug') }}'.replace(':slug', product.slug ||
                        'default-slug');

                    const productHtml = `
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                    <div class="ec-product-inner">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image">
                                <a href="${productUrl}" class="image">
                                    <img class="main-image" src="/${mainImage}" alt="${product.name}" />
                                    <img class="hover-image" src="/${hoverImage}" alt="${product.name}" />
                                </a>
                                ${product.discount_price ? `<span class="percentage">${Math.round(((product.base_price - product.discount_price) / product.base_price) * 100)}%</span>` : ''}
                                <a href="#" class="quickview" data-product-id="${product.id}">
                                    <i class="fi-rr-eye"></i>
                                </a>
                                <div class="ec-pro-actions">
                                    <a href="#" class="ec-btn-group compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                    <button class="add-to-cart" onclick="addToCart(${product.id}, '${product.name}', ${price}, '/${mainImage}', 1, '${product.slug}')">
                                        <i class="fi-rr-shopping-basket"></i> Add To Cart
                                    </button>
                                    <a class="ec-btn-group wishlist"><i class="fi-rr-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title">
                                <a href="${productUrl}">${product.name}</a>
                            </h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>
                            <div class="ec-pro-list-desc">${product.description ? product.description.substring(0, 100) : 'No description.'}</div>
                            <span class="ec-price">
                                ${oldPrice ? `<span class="old-price">$${parseFloat(oldPrice).toFixed(2)}</span>` : ''}
                                <span class="new-price">$${parseFloat(price).toFixed(2)}</span>
                            </span>
                            <div class="ec-pro-option">
                                ${product.color ? `<div class="ec-pro-color"><span class="ec-pro-opt-label">Color</span><ul class="ec-opt-swatch">${product.color.split(',').map(c => `<li><span style="background-color: ${c}"></span></li>`).join('')}</ul></div>` : ''}
                                ${product.size ? `<div class="ec-pro-size"><span class="ec-pro-opt-label">Size</span><ul class="ec-opt-size">${product.size.split(',').map(s => `<li><a href="#">${s}</a></li>`).join('')}</ul></div>` : ''}
                            </div>
                        </div>
                    </div>
                </div>
            `;
                    grid.insertAdjacentHTML('beforeend', productHtml);
                });

                // Update pagination info
                const paginationInfo = document.getElementById('pagination-info');
                if (paginationInfo) {
                    paginationInfo.textContent = `Showing 1-${products.length} of ${allProducts.length} item(s)`;
                }

                // Trigger animations after rendering
                triggerAnimations();
            }

            // Function to apply filters and sort
            function applyFiltersAndSort() {
                // Apply filters
                const selectedCategories = Array.from(document.querySelectorAll('#category-filters input:checked')).map(
                    cb => cb.value.toLowerCase());
                const selectedSizes = Array.from(document.querySelectorAll('#size-filters input:checked')).map(cb => cb
                    .value);
                const minPriceFilter = parseFloat(document.getElementById('price-min').value) || minPrice;
                const maxPriceFilter = parseFloat(document.getElementById('price-max').value) || maxPrice;

                filteredProducts = allProducts.filter(product => {
                    const categoryMatch = selectedCategories.length === 0 || selectedCategories.includes(product
                        .category?.name?.toLowerCase());
                    const sizeMatch = selectedSizes.length === 0 || (product.size && product.size.split(',').some(
                        s => selectedSizes.includes(s)));
                    const price = product.discount_price || product.base_price;
                    const priceMatch = price >= minPriceFilter && price <= maxPriceFilter;

                    return categoryMatch && sizeMatch && priceMatch;
                });

                // Apply sorting
                const sortValue = document.getElementById('ec-select').value;
                if (sortValue) {
                    filteredProducts.sort((a, b) => {
                        switch (sortValue) {
                            case '2': // Name, A to Z
                                return a.name.localeCompare(b.name);
                            case '3': // Name, Z to A
                                return b.name.localeCompare(a.name);
                            case '4': // Price, low to high
                                return (a.discount_price || a.base_price) - (b.discount_price || b.base_price);
                            case '5': // Price, high to low
                                return (b.discount_price || b.base_price) - (a.discount_price || a.base_price);
                            default: // Relevance or default
                                return 0;
                        }
                    });
                }

                renderProducts(filteredProducts);
            }

            // Function to trigger animations on scroll (repeats every time the section is scrolled into view)
            function triggerAnimations() {
                const observerOptions = {
                    threshold: 0.1, // Trigger when 10% of the element is visible
                    rootMargin: '0px 0px -50px 0px' // Trigger a bit before fully visible
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('animate');
                        } else {
                            entry.target.classList.remove(
                            'animate'); // Remove to allow re-animation on scroll back
                        }
                    });
                }, observerOptions);

                // Observe all product cards
                document.querySelectorAll('.pro-gl-content').forEach(card => {
                    observer.observe(card);
                });
            }

            // Event listeners for filters and sorting
            document.addEventListener('change', function(e) {
                if (e.target.closest('#category-filters') || e.target.closest('#size-filters') || e.target.id ===
                    'ec-select') {
                    applyFiltersAndSort();
                }
            });

            // Initialize on page load
            document.addEventListener('DOMContentLoaded', function() {
                console.log('DOM loaded, initializing shop filters.');
                populateFilters(); // Populate filters from database
                renderProducts(allProducts); // Show all products initially
            });

        } catch (e) {
            console.error('Shop filter script failed to load:', e);
        }
    </script>
@endpush
