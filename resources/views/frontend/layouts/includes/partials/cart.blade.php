<!-- ekka Cart Start -->
<div class="ec-side-cart-overlay"></div>
<div id="ec-side-cart" class="ec-side-cart">
    <div class="ec-cart-inner">
        <div class="ec-cart-top">
            <div class="ec-cart-title">
                <span class="cart_title">My Cart</span>
                <button class="ec-close">×</button>
            </div>
            <ul class="eccart-pro-items" id="cart-items">
                <!-- Cart items will be dynamically added here -->
            </ul>
        </div>
        <div class="ec-cart-bottom">
            <div class="cart-sub-total">
                <table class="table cart-table">
                    <tbody>
                        <tr>
                            <td class="text-left">Sub-Total :</td>
                            <td class="text-right" id="sub-total">$0.00</td>
                        </tr>
                        <tr>
                            <td class="text-left">VAT (20%) :</td>
                            <td class="text-right" id="vat">$0.00</td>
                        </tr>
                        <tr>
                            <td class="text-left">Total :</td>
                            <td class="text-right primary-color" id="total">$0.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="cart_btn">
                <a href="#" class="btn btn-primary">View Cart</a>
                <a href="{{ route('checkout') }}" class="btn btn-secondary"
                    onclick="checkAuthAndRedirect(event)">Checkout</a>
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

            // Cart data stored in localStorage
            let cart = [];
            try {
                cart = JSON.parse(localStorage.getItem('cart')) || [];
                console.log('Cart loaded from localStorage:', cart);
            } catch (e) {
                console.error('Error loading cart from localStorage:', e);
                cart = [];
            }

            // Function to add a product to the cart (updated to include slug)
            function addToCart(productId, name, price, image, quantity = 1, slug = '') {
                try {
                    const existingItem = cart.find(item => item.id === productId);
                    if (existingItem) {
                        existingItem.quantity += quantity;
                    } else {
                        cart.push({
                            id: productId,
                            name,
                            price,
                            image,
                            quantity,
                            slug
                        });
                    }
                    saveCart();
                    renderCart(); // Re-render and recalculate after adding
                    console.log('Product added, cart updated:', cart);
                } catch (e) {
                    console.error('Error adding product to cart:', e);
                }
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
                    const cartItemsContainer = document.getElementById('cart-items');
                    const subTotalElement = document.getElementById('sub-total');
                    const vatElement = document.getElementById('vat');
                    const totalElement = document.getElementById('total');

                    if (!cartItemsContainer || !subTotalElement || !vatElement || !totalElement) {
                        console.error('Cart DOM elements not found. Skipping render.');
                        return;
                    }

                    cartItemsContainer.innerHTML = ''; // Clear existing items

                    let subTotal = 0;
                    cart.forEach(item => {
                        const itemTotal = item.price * item.quantity;
                        subTotal += itemTotal;

                        // Generate product URL in JS to avoid Blade route error
                        const productUrl = '{{ route('product', ':slug') }}'.replace(':slug', item.slug ||
                            'default-slug');

                        const li = document.createElement('li');
                        li.innerHTML = `
                        <a href="${productUrl}" class="sidekka_pro_img">
                            <img src="${item.image}" alt="product" />
                        </a>
                        <div class="ec-pro-content">
                            <a href="${productUrl}" class="cart_pro_title">${item.name}</a>
                            <span class="cart-price"><span>$${item.price.toFixed(2)}</span> x ${item.quantity}</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="number" name="ec_qtybtn" value="${item.quantity}" min="1" data-id="${item.id}" />
                            </div>
                            <a href="javascript:void(0)" class="remove" data-id="${item.id}">×</a>
                        </div>
                    `;
                        cartItemsContainer.appendChild(li);
                    });

                    // Calculate VAT and Total
                    const vatRate = 0.20; // 20%
                    const vat = subTotal * vatRate;
                    const total = subTotal + vat;

                    // Update the table
                    subTotalElement.textContent = `$${subTotal.toFixed(2)}`;
                    vatElement.textContent = `$${vat.toFixed(2)}`;
                    totalElement.textContent = `$${total.toFixed(2)}`;

                    console.log('Prices calculated - Sub-Total:', subTotal, 'VAT:', vat, 'Total:', total);

                    // Use event delegation for remove and quantity updates (more reliable)
                    cartItemsContainer.removeEventListener('click', handleCartClick);
                    cartItemsContainer.addEventListener('click', handleCartClick);

                    cartItemsContainer.removeEventListener('input', handleQuantityChange);
                    cartItemsContainer.addEventListener('input', handleQuantityChange);
                } catch (e) {
                    console.error('Error rendering cart:', e);
                }
            }

            // Event handler for cart clicks (remove button)
            function handleCartClick(event) {
                if (event.target.classList.contains('remove')) {
                    const productId = event.target.getAttribute('data-id');
                    console.log('Remove button clicked for product ID:', productId);
                    removeItem(productId);
                }
            }

            // Event handler for quantity changes
            function handleQuantityChange(event) {
                if (event.target.classList.contains('qty-input')) {
                    const productId = event.target.getAttribute('data-id');
                    const newQuantity = parseInt(event.target.value);
                    console.log('Quantity changed for product ID:', productId, 'New quantity:', newQuantity);
                    updateQuantity(productId, newQuantity);
                }
            }

            // Function to update quantity
            function updateQuantity(productId, newQuantity) {
                try {
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
            function removeItem(productId) {
                try {
                    console.log('Removing item with product ID:', productId);
                    cart = cart.filter(item => item.id != productId);
                    saveCart();
                    renderCart(); // Re-render and recalculate after removal
                    console.log('Item removed, cart updated:', cart);
                } catch (e) {
                    console.error('Error removing item:', e);
                }
            }

            // Initialize cart on page load
            document.addEventListener('DOMContentLoaded', function() {
                console.log('DOM loaded, initializing cart sidebar.');
                renderCart(); // Render on load to show initial totals
            });

        } catch (e) {
            console.error('Cart sidebar script failed to load:', e);
        }
    </script>
@endpush
