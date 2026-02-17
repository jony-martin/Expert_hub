@extends('frontend.layouts.main')
@section('page-title', 'Checkout')
@section('content')
    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Checkout</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="ec-breadcrumb-item active">Checkout</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Ec checkout page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-checkout-leftside col-lg-8 col-md-12">
                    <!-- checkout content Start -->
                    <div class="ec-checkout-content">
                        <div class="ec-checkout-inner">
                            <div class="ec-checkout-wrap margin-bottom-30 padding-bottom-3">
                                <div class="ec-checkout-block ec-check-bill">
                                    <h3 class="ec-checkout-title">Billing Details</h3>
                                    <div class="ec-bl-block-content">
                                        <div class="ec-check-subtitle">Checkout Options</div>
                                        <span class="ec-bill-option">
                                            <span>
                                                <input type="radio" id="bill1" name="radio-group" />
                                                <label for="bill1">I want to use an existing address</label>
                                            </span>
                                            <span>
                                                <input type="radio" id="bill2" name="radio-group" checked />
                                                <label for="bill2">I want to use new address</label>
                                            </span>
                                        </span>
                                        <div class="ec-check-bill-form">
                                            <form action="#" method="post">
                                                <span class="ec-bill-wrap ec-bill-half">
                                                    <label>First Name*</label>
                                                    <input type="text" name="firstname"
                                                        placeholder="Enter your first name" required />
                                                </span>
                                                <span class="ec-bill-wrap ec-bill-half">
                                                    <label>Last Name*</label>
                                                    <input type="text" name="lastname" placeholder="Enter your last name"
                                                        required />
                                                </span>
                                                <span class="ec-bill-wrap">
                                                    <label>Address</label>
                                                    <input type="text" name="address" placeholder="Address Line 1" />
                                                </span>
                                                <span class="ec-bill-wrap ec-bill-half">
                                                    <label>City *</label>
                                                    <span class="ec-bl-select-inner">
                                                        <select name="ec_select_city" id="ec-select-city"
                                                            class="ec-bill-select">
                                                            <option selected disabled>City</option>
                                                            <option value="1">City 1</option>
                                                            <option value="2">City 2</option>
                                                            <option value="3">City 3</option>
                                                            <option value="4">City 4</option>
                                                            <option value="5">City 5</option>
                                                        </select>
                                                    </span>
                                                </span>
                                                <span class="ec-bill-wrap ec-bill-half">
                                                    <label>Post Code</label>
                                                    <input type="text" name="postalcode" placeholder="Post Code" />
                                                </span>
                                                <span class="ec-bill-wrap ec-bill-half">
                                                    <label>Country *</label>
                                                    <span class="ec-bl-select-inner">
                                                        <select name="ec_select_country" id="ec-select-country"
                                                            class="ec-bill-select">
                                                            <option selected disabled>Country</option>
                                                            <option value="1">Country 1</option>
                                                            <option value="2">Country 2</option>
                                                            <option value="3">Country 3</option>
                                                            <option value="4">Country 4</option>
                                                            <option value="5">Country 5</option>
                                                        </select>
                                                    </span>
                                                </span>
                                                <span class="ec-bill-wrap ec-bill-half">
                                                    <label>Region State</label>
                                                    <span class="ec-bl-select-inner">
                                                        <select name="ec_select_state" id="ec-select-state"
                                                            class="ec-bill-select">
                                                            <option selected disabled>Region/State</option>
                                                            <option value="1">Region/State 1</option>
                                                            <option value="2">Region/State 2</option>
                                                            <option value="3">Region/State 3</option>
                                                            <option value="4">Region/State 4</option>
                                                            <option value="5">Region/State 5</option>
                                                        </select>
                                                    </span>
                                                </span>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="ec-check-order-btn">
                                <a class="btn btn-primary" href="#">Place Order</a>
                            </span>
                        </div>
                    </div>
                    <!--cart content End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="ec-checkout-rightside col-lg-4 col-md-12">
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Summary Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">Summary</h3>
                            </div>
                            <div class="ec-sb-block-content">
                                <div class="ec-checkout-summary">
                                    <div>
                                        <span class="text-left">Sub-Total</span>
                                        <span class="text-right" id="checkout-sub-total">$0.00</span>
                                    </div>
                                    <div>
                                        <span class="text-left">Delivery Charges</span>
                                        <span class="text-right" id="checkout-delivery">$0.00</span>
                                    </div>
                                    <div>
                                        <span class="text-left">Coupon Discount</span>
                                        <span class="text-right"><a class="ec-checkout-coupan">Apply Coupon</a></span>
                                    </div>
                                    <div class="ec-checkout-coupan-content">
                                        <form class="ec-checkout-coupan-form" name="ec-checkout-coupan-form"
                                            method="post" action="#">
                                            <input class="ec-coupan" type="text" required=""
                                                placeholder="Enter Your Coupon Code" name="ec-coupan" value="" />
                                            <button class="ec-coupan-btn button btn-primary" type="submit"
                                                name="subscribe" value="">Apply</button>
                                        </form>
                                    </div>
                                    <div class="ec-checkout-summary-total">
                                        <span class="text-left">Total Amount</span>
                                        <span class="text-right" id="checkout-total">$0.00</span>
                                    </div>
                                </div>
                                <div class="ec-checkout-pro" id="checkout-products">
                                    <!-- Cart products will be dynamically added here -->
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Summary Block -->
                    </div>
                    <div class="ec-sidebar-wrap ec-checkout-del-wrap">
                        <!-- Sidebar Summary Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">Delivery Method</h3>
                            </div>
                            <div class="ec-sb-block-content">
                                <div class="ec-checkout-del">
                                    <div class="ec-del-desc">
                                        Please select the preferred shipping method to use on this order.
                                    </div>
                                    <form action="#">
                                        <span class="ec-del-option">
                                            <span>
                                                <span class="ec-del-opt-head">Free Shipping</span>
                                                <input type="radio" id="del1" name="radio-group" checked />
                                                <label for="del1">Rate - $0.00</label>
                                            </span>
                                            <span>
                                                <span class="ec-del-opt-head">Flat Rate</span>
                                                <input type="radio" id="del2" name="radio-group" />
                                                <label for="del2">Rate - $5.00</label>
                                            </span>
                                        </span>
                                        <span class="ec-del-commemt">
                                            <span class="ec-del-opt-head">Add Comments About Your Order</span>
                                            <textarea name="your-commemt" placeholder="Comments"></textarea>
                                        </span>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Summary Block -->
                    </div>
                    <div class="ec-sidebar-wrap ec-checkout-pay-wrap">
                        <!-- Sidebar Payment Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">Payment Method</h3>
                            </div>
                            <div class="ec-sb-block-content">
                                <div class="ec-checkout-pay">
                                    <div class="ec-pay-desc">
                                        Please select the preferred payment method to use on this order.
                                    </div>
                                    <form action="#">
                                        <span class="ec-pay-option">
                                            <span>
                                                <input type="radio" id="pay1" name="radio-group" checked />
                                                <label for="pay1">Cash On Delivery</label>
                                            </span>
                                        </span>
                                        <span class="ec-pay-commemt">
                                            <span class="ec-pay-opt-head">Add Comments About Your Order</span>
                                            <textarea name="your-commemt" placeholder="Comments"></textarea>
                                        </span>
                                        <span class="ec-pay-agree"><input type="checkbox" value="" /><a
                                                href="#">I have read and agree to the <span>Terms &
                                                    Conditions</span></a><span class="checked"></span></span>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Payment Block -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        try {
            console.log('Checkout page script loaded successfully.');

            // Cart data stored in localStorage
            let cart = [];
            try {
                cart = JSON.parse(localStorage.getItem('cart')) || [];
                console.log('Cart loaded from localStorage:', cart);
            } catch (e) {
                console.error('Error loading cart from localStorage:', e);
                cart = [];
            }

            // Function to render checkout summary and products
            function renderCheckout() {
                try {
                    const productsContainer = document.getElementById('checkout-products');
                    const subTotalElement = document.getElementById('checkout-sub-total');
                    const deliveryElement = document.getElementById('checkout-delivery');
                    const totalElement = document.getElementById('checkout-total');

                    if (!productsContainer || !subTotalElement || !deliveryElement || !totalElement) {
                        console.error('Checkout DOM elements not found. Skipping render.');
                        return;
                    }

                    productsContainer.innerHTML = ''; // Clear existing products

                    if (cart.length === 0) {
                        productsContainer.innerHTML = '<p>Your cart is empty.</p>';
                        subTotalElement.textContent = '$0.00';
                        deliveryElement.textContent = '$0.00';
                        totalElement.textContent = '$0.00';
                        return;
                    }

                    let subTotal = 0;
                    cart.forEach(item => {
                        const itemTotal = item.price * item.quantity;
                        subTotal += itemTotal;

                        // Generate product URL
                        const productUrl = '{{ route('product', ':slug') }}'.replace(':slug', item.slug ||
                            'default-slug');

                        const productDiv = document.createElement('div');
                        productDiv.className = 'col-sm-12 mb-6';
                        productDiv.innerHTML = `
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="${productUrl}" class="image">
                                        <img class="main-image" src="${item.image}" alt="${item.name}" />
                                        <img class="hover-image" src="${item.image}" alt="${item.name}" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title">
                                    <a href="${productUrl}">${item.name}</a>
                                </h5>
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <span class="ec-price">
                                    <span class="new-price">$${item.price.toFixed(2)} x ${item.quantity}</span>
                                </span>
                                <div class="ec-pro-option">
                                    <!-- Add variations if stored in cart, e.g., color/size -->
                                    <p>Quantity: ${item.quantity}</p>
                                </div>
                            </div>
                        </div>
                    `;
                        productsContainer.appendChild(productDiv);
                    });

                    // Calculate totals
                    const deliveryCharges = 0.00; // Free shipping, update based on selection if needed
                    const couponDiscount = 0.00; // Add coupon logic here
                    const total = subTotal + deliveryCharges - couponDiscount;

                    // Update the summary
                    subTotalElement.textContent = `$${subTotal.toFixed(2)}`;
                    deliveryElement.textContent = `$${deliveryCharges.toFixed(2)}`;
                    totalElement.textContent = `$${total.toFixed(2)}`;

                    console.log('Checkout totals calculated - Sub-Total:', subTotal, 'Delivery:', deliveryCharges, 'Total:',
                        total);
                } catch (e) {
                    console.error('Error rendering checkout:', e);
                }
            }

            // Initialize checkout on page load
            document.addEventListener('DOMContentLoaded', function() {
                console.log('DOM loaded, initializing checkout.');
                renderCheckout();
            });

        } catch (e) {
            console.error('Checkout page script failed to load:', e);
        }
    </script>
@endpush
