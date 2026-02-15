<script>
    // Parallax Effect on Scroll (unchanged)
    $(window).on('scroll', function() {
        var scrollTop = $(this).scrollTop();
        $('.parallax-bg').css('transform', 'translateY(' + scrollTop * 0.5 + 'px)');
    });

    // Dummy Product Data (12 items) - Updated with hover images
    const products = [{
            id: 1,
            name: 'Wireless Headphones',
            price: '$99.99',
            image: "{{ asset('frontend/assets/images/doll.jpg') }}",
            hoverImage: "{{ asset('frontend/assets/images/doll-2.jpg') }}",
            description: 'High-quality sound with noise cancellation.',
            rating: 4.5,
            colors: ['#FFCF91', '#FF6284', '#A6D7F8']
        },
        {
            id: 2,
            name: 'Smart Watch',
            price: '$199.99',
            image: "{{ asset('frontend/assets/images/doll.jpg') }}",
            hoverImage: "{{ asset('frontend/assets/images/doll-2.jpg') }}",
            description: 'Track your fitness and stay connected.',
            rating: 5,
            colors: ['#FFCF91', '#FF6284', '#A6D7F8']
        },
        {
            id: 3,
            name: 'Laptop Stand',
            price: '$49.99',
            image: "{{ asset('frontend/assets/images/doll.jpg') }}",
            hoverImage: "{{ asset('frontend/assets/images/doll-2.jpg') }}",
            description: 'Ergonomic design for better posture.',
            rating: 4,
            colors: ['#FFCF91', '#FF6284', '#A6D7F8']
        },
        {
            id: 4,
            name: 'Bluetooth Speaker',
            price: '$79.99',
            image: "{{ asset('frontend/assets/images/doll.jpg') }}",
            hoverImage: "{{ asset('frontend/assets/images/doll-2.jpg') }}",
            description: 'Portable sound with deep bass.',
            rating: 4.5,
            colors: ['#FFCF91', '#FF6284', '#A6D7F8']
        },
        {
            id: 5,
            name: 'Gaming Mouse',
            price: '$59.99',
            image: "{{ asset('frontend/assets/images/doll.jpg') }}",
            hoverImage: "{{ asset('frontend/assets/images/doll-2.jpg') }}",
            description: 'Precision and speed for gamers.',
            rating: 5,
            colors: ['#FFCF91', '#FF6284', '#A6D7F8']
        },
        {
            id: 6,
            name: 'Phone Case',
            price: '$29.99',
            image: "{{ asset('frontend/assets/images/doll.jpg') }}",
            hoverImage: "{{ asset('frontend/assets/images/doll-2.jpg') }}",
            description: 'Protective and stylish cover.',
            rating: 4,
            colors: ['#FFCF91', '#FF6284', '#A6D7F8']
        },
        {
            id: 7,
            name: 'Wireless Charger',
            price: '$39.99',
            image: "{{ asset('frontend/assets/images/doll.jpg') }}",
            hoverImage: "{{ asset('frontend/assets/images/doll-2.jpg') }}",
            description: 'Fast charging without wires.',
            rating: 4.5,
            colors: ['#FFCF91', '#FF6284', '#A6D7F8']
        },
        {
            id: 8,
            name: 'Tablet Holder',
            price: '$34.99',
            image: "{{ asset('frontend/assets/images/doll.jpg') }}",
            hoverImage: "{{ asset('frontend/assets/images/doll-2.jpg') }}",
            description: 'Adjustable stand for tablets.',
            rating: 4,
            colors: ['#FFCF91', '#FF6284', '#A6D7F8']
        },
        {
            id: 9,
            name: 'Keyboard',
            price: '$89.99',
            image: "{{ asset('frontend/assets/images/doll.jpg') }}",
            hoverImage: "{{ asset('frontend/assets/images/doll-2.jpg') }}",
            description: 'Mechanical keys for typing comfort.',
            rating: 5,
            colors: ['#FFCF91', '#FF6284', '#A6D7F8']
        },
        {
            id: 10,
            name: 'Monitor',
            price: '$299.99',
            image: "{{ asset('frontend/assets/images/doll.jpg') }}",
            hoverImage: "{{ asset('frontend/assets/images/doll-2.jpg') }}",
            description: 'High-resolution display for work.',
            rating: 4.5,
            colors: ['#FFCF91', '#FF6284', '#A6D7F8']
        },
        {
            id: 11,
            name: 'Webcam',
            price: '$69.99',
            image: "{{ asset('frontend/assets/images/doll.jpg') }}",
            hoverImage: "{{ asset('frontend/assets/images/doll-2.jpg') }}",
            description: 'HD video for online meetings.',
            rating: 4,
            colors: ['#FFCF91', '#FF6284', '#A6D7F8']
        },
        {
            id: 12,
            name: 'External Drive',
            price: '$119.99',
            image: "{{ asset('frontend/assets/images/doll.jpg') }}",
            hoverImage: "{{ asset('frontend/assets/images/doll-2.jpg') }}",
            description: 'Extra storage for your files.',
            rating: 5,
            colors: ['#FFCF91', '#FF6284', '#A6D7F8']
        }
    ];
    // Function to Render Products
    function renderProducts() {
        const grid = document.getElementById('product-grid');
        grid.innerHTML = ''; // Clear existing content
        const discounts = ['20%', '10%', '30%']; // Cycle through discounts
        const sizes = ['S', 'M', 'L', 'XL']; // Size options
        products.forEach((product, index) => {
            // Generate star rating HTML
            const fullStars = Math.floor(product.rating);
            const halfStar = product.rating % 1 !== 0;
            let starsHtml = '';
            for (let i = 0; i < fullStars; i++) {
                starsHtml += '<i class="fas fa-star"></i>';
            }
            if (halfStar) {
                starsHtml += '<i class="fas fa-star-half-alt"></i>';
            }
            for (let i = fullStars + (halfStar ? 1 : 0); i < 5; i++) {
                starsHtml += '<i class="far fa-star"></i>';
            }

            // Generate color swatches HTML with new colors
            const colorsHtml = product.colors.map(color =>
                `<span class="color-swatch" style="background-color: ${color};"></span>`).join('');

            // Calculate discount price (20% off for demo)
            const discountPercent = 20;
            const originalPrice = parseFloat(product.price.replace('$', ''));
            const discountPrice = (originalPrice * (1 - discountPercent / 100)).toFixed(2);
            const priceHtml =
                `<del style="color: #999; margin-right: 10px;">${product.price}</del><span style="color: #FF6284; font-weight: bold;">$${discountPrice}</span>`;

            // Get discount for this product
            const discount = discounts[index % discounts.length];

            // Generate size options HTML
            const sizesHtml = sizes.map(size => `<span class="size-option">${size}</span>`).join('');

            const card = document.createElement('div');
            card.className = 'product-card';
            card.innerHTML = `
            <div class="product-image-container">
                <img src="${product.image}" alt="${product.name}" class="product-image">
                <img src="${product.hoverImage}" alt="${product.name} Hover" class="product-hover-image">
                <div class="discount-badge">${discount}</div>
                <div class="product-buttons">
                    <button class="btn btn-view" title="View"><i class="fas fa-eye"></i></button>
                    <button class="btn btn-cart" title="Add to Cart"><i class="fas fa-shopping-cart"></i></button>
                    <button class="btn btn-wishlist" title="Wishlist"><i class="fas fa-heart"></i></button>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-name">${product.name}</h3>
                <div class="product-rating">${starsHtml} (${product.rating})</div>
                <p class="product-price">${priceHtml}</p>
                <div class="product-options">
                    <div class="product-colors">${colorsHtml}</div>
                    <div class="product-sizes">${sizesHtml}</div>
                </div>
            </div>
        `;
            grid.appendChild(card);
        });
    }

    // Load Products on Page Load
    $(document).ready(function() {
        renderProducts();
    });
    AOS.init();
</script>
