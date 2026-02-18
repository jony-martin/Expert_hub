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
                            <h2 class="ec-breadcrumb-title">Cart</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="ec-breadcrumb-item active">Cart</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Ec cart page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-cart-leftside col-lg-8 col-md-12">
                    <!-- cart content Start -->
                    <div class="ec-cart-content">
                        <div class="ec-cart-inner">
                            <div class="row">
                                <form action="#">
                                    <div class="table-content cart-table-content">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Price</th>
                                                    <th style="text-align: center">Quantity</th>
                                                    <th>Total</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody id="cart-table-body">
                                                <!-- Cart items will be rendered here dynamically -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="ec-cart-update-bottom">
                                                <a href="{{ route('shop') }}">Continue Shopping</a>
                                                @if(Auth::check())
                                                <a href="{{ route('checkout') }}" class="btn btn-primary">Check Out</a>
                                                @else
                                                <a href="{{ route('register') }}" class="btn btn-primary">Check Out</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--cart content End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="ec-cart-rightside col-lg-4 col-md-12">
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Summary Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">Summary</h3>
                            </div>
                            <div class="ec-sb-block-content">
                                <h4 class="ec-ship-title">Estimate Shipping</h4>
                                <div class="ec-cart-form">
                                    <p>Enter your destination to get a shipping estimate</p>
                                    <form action="#" method="post">
                                        <span class="ec-cart-wrap">
                                            <label>Country *</label>
                                            <span class="ec-cart-select-inner">
                                                <select name="ec_cart_country" id="ec-cart-select-country"
                                                    class="ec-cart-select">
                                                    <option selected="" disabled="">United States</option>
                                                    <option value="1">Country 1</option>
                                                    <option value="2">Country 2</option>
                                                    <option value="3">Country 3</option>
                                                    <option value="4">Country 4</option>
                                                    <option value="5">Country 5</option>
                                                </select>
                                            </span>
                                        </span>
                                        <span class="ec-cart-wrap">
                                            <label>State/Province</label>
                                            <span class="ec-cart-select-inner">
                                                <select name="ec_cart_state" id="ec-cart-select-state"
                                                    class="ec-cart-select">
                                                    <option selected="" disabled="">Please Select a region, state
                                                    </option>
                                                    <option value="1">Region/State 1</option>
                                                    <option value="2">Region/State 2</option>
                                                    <option value="3">Region/State 3</option>
                                                    <option value="4">Region/State 4</option>
                                                    <option value="5">Region/State 5</option>
                                                </select>
                                            </span>
                                        </span>
                                        <span class="ec-cart-wrap">
                                            <label>Zip/Postal Code</label>
                                            <input type="text" name="postalcode" placeholder="Zip/Postal Code" />
                                        </span>
                                    </form>
                                </div>
                            </div>

                            <div class="ec-sb-block-content">
                                <div class="ec-cart-summary-bottom">
                                    <div class="ec-cart-summary">
                                        <div>
                                            <span class="text-left">Sub-Total</span>
                                            <span class="text-right" id="cart-sub-total">$0.00</span>
                                        </div>
                                        <div>
                                            <span class="text-left">Delivery Charges</span>
                                            <span class="text-right" id="cart-delivery">$0.00</span>
                                        </div>
                                        <div>
                                            <span class="text-left">Coupon Discount</span>
                                            <span class="text-right"><a class="ec-cart-coupan">Apply Coupon</a></span>
                                        </div>
                                        <div class="ec-cart-coupan-content">
                                            <form class="ec-cart-coupan-form" name="ec-cart-coupan-form" method="post"
                                                action="#">
                                                <input class="ec-coupan" type="text" required=""
                                                    placeholder="Enter Your Coupon Code" name="ec-coupan" value="" />
                                                <button class="ec-coupan-btn button btn-primary" type="submit"
                                                    name="subscribe" value="">Apply</button>
                                            </form>
                                        </div>
                                        <div class="ec-cart-summary-total">
                                            <span class="text-left">Total Amount</span>
                                            <span class="text-right" id="cart-total">$0.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Summary Block -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        try {
            console.log('Cart page script loaded successfully.');

            // Cart data stored in localStorage
            let cart = [];
            try {
                cart = JSON.parse(localStorage.getItem('cart')) || [];
                console.log('Cart loaded from localStorage:', cart);
            } catch (e) {
                console.error('Error loading cart from localStorage:', e);
                cart = [];
            }

            // Function to save cart to localStorage
            function saveCart() {
                try {
                    localStorage.setItem('cart', JSON.stringify(cart));
                    console.log('Cart saved to localStorage.');
                } catch (e) {
                    console.error('Error saving cart to localStorage:', e);
                }
            }

            // Function to render cart items and calculate totals
            function renderCart() {
                try {
                    const cartTableBody = document.getElementById('cart-table-body');
                    const subTotalElement = document.getElementById('cart-sub-total');
                    const deliveryElement = document.getElementById('cart-delivery');
                    const totalElement = document.getElementById('cart-total');

                    if (!cartTableBody || !subTotalElement || !deliveryElement || !totalElement) {
                        console.error('Cart DOM elements not found. Skipping render.');
                        return;
                    }

                    cartTableBody.innerHTML = ''; // Clear existing items

                    if (cart.length === 0) {
                        cartTableBody.innerHTML = '<tr><td colspan="5">Your cart is empty.</td></tr>';
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

                        const tr = document.createElement('tr');
                        tr.innerHTML = `
                        <td data-label="Product" class="ec-cart-pro-name">
                            <a href="${productUrl}"><img class="ec-cart-pro-img mr-4" src="${item.image}" alt="${item.name}" />${item.name}</a>
                        </td>
                        <td data-label="Price" class="ec-cart-pro-price">
                            <span class="amount">$${item.price.toFixed(2)}</span>
                        </td>
                        <td data-label="Quantity" class="ec-cart-pro-qty" style="text-align: center">
                            <div class="cart-qty-plus-minus">
                                <input class="cart-plus-minus" type="number" name="cartqtybutton" value="${item.quantity}" min="1" data-id="${item.id}" />
                            </div>
                        </td>
                        <td data-label="Total" class="ec-cart-pro-subtotal">
                            $${itemTotal.toFixed(2)}
                        </td>
                        <td data-label="Remove" class="ec-cart-pro-remove">
                            <a href="javascript:void(0)" class="remove" data-id="${item.id}"><i class="ecicon eci-trash-o"></i></a>
                        </td>
                    `;
                        cartTableBody.appendChild(tr);
                    });

                    // Calculate totals
                    const deliveryCharges = 0.00; // Free shipping, update if needed
                    const couponDiscount = 0.00; // Add coupon logic here
                    const total = subTotal + deliveryCharges - couponDiscount;

                    // Update the summary
                    subTotalElement.textContent = `$${subTotal.toFixed(2)}`;
                    deliveryElement.textContent = `$${deliveryCharges.toFixed(2)}`;
                    totalElement.textContent = `$${total.toFixed(2)}`;

                    console.log('Cart totals calculated - Sub-Total:', subTotal, 'Delivery:', deliveryCharges, 'Total:',
                        total);

                    // Add event listeners for quantity changes and remove buttons
                    document.querySelectorAll('.cart-plus-minus').forEach(input => {
                        input.addEventListener('input', updateQuantity);
                    });
                    document.querySelectorAll('.remove').forEach(button => {
                        button.addEventListener('click', removeItem);
                    });
                } catch (e) {
                    console.error('Error rendering cart:', e);
                }
            }

            // Function to update quantity
            function updateQuantity(event) {
                try {
                    const productId = event.target.getAttribute('data-id');
                    const newQuantity = parseInt(event.target.value);
                    const item = cart.find(item => item.id == productId);
                    if (item && newQuantity > 0) {
                        item.quantity = newQuantity;
                        saveCart();
                        renderCart(); // Re-render and recalculate after update
                        console.log('Quantity updated for product ID:', productId);
                    }
                } catch (e) {
                    console.error('Error updating quantity:', e);
                }
            }

            // Function to remove item
            function removeItem(event) {
                try {
                    const productId = event.target.closest('a').getAttribute('data-id');
                    cart = cart.filter(item => item.id != productId);
                    saveCart();
                    renderCart(); // Re-render and recalculate after removal
                    console.log('Item removed for product ID:', productId);
                } catch (e) {
                    console.error('Error removing item:', e);
                }
            }

            // Initialize cart on page load
            document.addEventListener('DOMContentLoaded', function() {
                console.log('DOM loaded, initializing cart page.');
                renderCart(); // Render on load
            });

        } catch (e) {
            console.error('Cart page script failed to load:', e);
        }
    </script>
@endpush
