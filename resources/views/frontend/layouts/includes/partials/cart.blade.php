<!-- ekka Cart Start -->
<div class="ec-side-cart-overlay"></div>
<div id="ec-side-cart" class="ec-side-cart">
    <div class="ec-cart-inner">
        <div class="ec-cart-top">
            <div class="ec-cart-title">
                <span class="cart_title">My Cart</span>
                <button class="ec-close">×</button>
            </div>
            <ul class="eccart-pro-items">
                <li>
                    <a href="###" class="sidekka_pro_img"><img
                            src="{{ asset('frontend') }}/assets/images/product-image/6_1.jpg" alt="product" /></a>
                    <div class="ec-pro-content">
                        <a href="###" class="cart_pro_title">T-shirt For Women</a>
                        <span class="cart-price"><span>$76.00</span> x 1</span>
                        <div class="qty-plus-minus">
                            <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                        </div>
                        <a href="javascript:void(0)" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="###" class="sidekka_pro_img"><img
                            src="{{ asset('frontend') }}/assets/images/product-image/12_1.jpg" alt="product" /></a>
                    <div class="ec-pro-content">
                        <a href="###" class="cart_pro_title">Women Leather Shoes</a>
                        <span class="cart-price"><span>$64.00</span> x 1</span>
                        <div class="qty-plus-minus">
                            <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                        </div>
                        <a href="javascript:void(0)" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="###" class="sidekka_pro_img"><img
                            src="{{ asset('frontend') }}/assets/images/product-image/3_1.jpg" alt="product" /></a>
                    <div class="ec-pro-content">
                        <a href="###" class="cart_pro_title">Girls Nylon Purse</a>
                        <span class="cart-price"><span>$59.00</span> x 1</span>
                        <div class="qty-plus-minus">
                            <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                        </div>
                        <a href="javascript:void(0)" class="remove">×</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="ec-cart-bottom">
            <div class="cart-sub-total">
                <table class="table cart-table">
                    <tbody>
                        <tr>
                            <td class="text-left">Sub-Total :</td>
                            <td class="text-right">$300.00</td>
                        </tr>
                        <tr>
                            <td class="text-left">VAT (20%) :</td>
                            <td class="text-right">$60.00</td>
                        </tr>
                        <tr>
                            <td class="text-left">Total :</td>
                            <td class="text-right primary-color">$360.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="cart_btn">
                <a href="#" class="btn btn-primary">View Cart</a>
                <a href="{{ route('checkout') }}" class="btn btn-secondary" onclick="checkAuthAndRedirect(event)">Checkout</a>
            </div>
        </div>
    </div>
</div>
<!-- ekka Cart End -->

@push('scripts')
    <script>
        try {
            console.log('Cart sidebar script loaded successfully.');

            // Set authentication status from Laravel (passed from server-side)
            window.isAuthenticated = {{ Auth::check() ? 'true' : 'false' }};

            // Function to check authentication and redirect if needed
            function checkAuthAndRedirect(event) {
                if (!window.isAuthenticated) {
                    event.preventDefault(); // Prevent the default link action
                    window.location.href = '{{ route('register') }}'; // Redirect to register route
                    console.log('User not authenticated, redirecting to register.');
                } else {
                    // If authenticated, allow the link to proceed to checkout
                    console.log('User authenticated, proceeding to checkout.');
                }
            }

        } catch (e) {
            console.error('Cart sidebar script failed to load:', e);
        }
    </script>
@endpush
