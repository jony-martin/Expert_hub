@extends('frontend.layouts.main') {{-- Adjust if your layout path is different --}}

@section('content')
    <!-- Hero Banner Section -->
    <section class="hero-banner">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-headline" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                Discover Amazing Products
            </h1>
            <p class="hero-subtext" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                Shop the Best Deals Today – Quality, Style, and Savings Await!
            </p>
            <a href="#products" class="hero-cta" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="600">
                Start Shopping
            </a>
        </div>
        <div class="hero-bg parallax-bg"></div>
    </section>

    <!-- Product Grid Section -->
    <section id="products" class="product-section">
        <div class="container">
            <h2 class="section-title">Our Collection</h2>
            <div class="product-grid" id="product-grid">
                <!-- Products will be loaded here via JavaScript -->
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <style>
        /* Hero Banner Styles (unchanged) */
        .hero-banner {
            position: relative;
            width: 100%;
            height: 50vh;
            padding-top: 70px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #ffffff;
            z-index: 1;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding: 0 20px;
        }

        .hero-headline {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            animation: textReveal 1.5s ease-out;
        }

        .hero-subtext {
            font-size: 1.4rem;
            font-weight: 300;
            margin-bottom: 30px;
            opacity: 0.9;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .hero-cta {
            display: inline-block;
            padding: 12px 25px;
            background: #ff6b6b;
            color: #ffffff;
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            box-shadow: 0 4px 15px rgba(255, 107, 107, 0.4);
            transition: all 0.3s ease;
        }

        .hero-cta:hover {
            background: #ff5252;
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(255, 107, 107, 0.6);
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://via.placeholder.com/1920x1080?text=Shop+Banner');
            background-size: cover;
            background-position: center;
            z-index: 0;
        }

        .parallax-bg {
            transform: translateZ(0);
            will-change: transform;
        }

        @keyframes textReveal {
            0% {
                opacity: 0;
                transform: translateY(50px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .parallax-bg {
            transition: transform 0.1s linear;
        }

        @media (max-width: 768px) {
            .hero-banner {
                height: 40vh;
                padding-top: 60px;
            }

            .hero-headline {
                font-size: 2.5rem;
            }

            .hero-subtext {
                font-size: 1.2rem;
                margin-bottom: 25px;
            }

            .hero-cta {
                padding: 10px 20px;
                font-size: 1rem;
            }

            .hero-content {
                padding: 0 15px;
            }
        }

        @media (max-width: 480px) {
            .hero-banner {
                height: 35vh;
                padding-top: 50px;
            }

            .hero-headline {
                font-size: 2rem;
            }

            .hero-subtext {
                font-size: 1rem;
                margin-bottom: 20px;
            }

            .hero-cta {
                padding: 8px 18px;
                font-size: 0.9rem;
            }

            .hero-content {
                padding: 0 10px;
            }
        }

        /* Product Section Styles */
        .product-section {
            padding: 60px 20px;
            background: #f8f9fa;
            text-align: center;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 600;
            color: #525252;
            text-align: center;
            margin-bottom: 60px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
            position: relative;
            text-transform: uppercase;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 200px;
            height: 10px;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 10"><path d="M0,5 L20,2 L40,8 L60,2 L80,8 L100,2 L120,8 L140,2 L160,8 L180,2 L200,5" stroke="%237367F0" stroke-width="3" fill="none"/></svg>') no-repeat center;
            background-size: contain;
        }

        /* Responsive Design for Title */
        @media (max-width: 768px) {
            .section-title {
                font-size: 2rem;
                margin-bottom: 50px;
            }

            .section-title::after {
                width: 150px;
                height: 8px;
            }
        }

        @media (max-width: 480px) {
            .section-title {
                font-size: 2rem;
                margin-bottom: 50px;
            }

            .section-title::after {
                width: 120px;
                height: 6px;
            }
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .product-card {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: all 0.3s ease;
            position: relative;
            border: 15px solid #ffffff;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        .product-image-container {
            position: relative;
            overflow: hidden;
        }

        .product-image {
            width: 100%;
            height: 280px;
            object-fit: cover;
            transition: transform 0.3s ease, opacity 0.3s ease;
            /* Added opacity transition for hover image */
        }

        .product-card:hover .product-image {
            transform: scale(1.1);
            opacity: 0;
            /* Fade out original image on hover */
        }

        .product-hover-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            /* Hidden by default */
            transition: opacity 0.3s ease;
            z-index: 5;
            /* Above the main image */
        }

        .product-card:hover .product-hover-image {
            opacity: 1;
            /* Fade in hover image on card hover */
        }

        .product-buttons {
            position: absolute;
            bottom: -180px;
            right: 15px;
            display: flex;
            flex-direction: column;
            gap: 8px;
            transition: bottom 0.3s ease;
            z-index: 10;
            /* Added to ensure buttons appear above the hover image */
        }

        .product-card:hover .product-buttons {
            bottom: 15px;
        }

        .btn {
            width: 35px;
            height: 35px;
            border: none;
            border-radius: 50%;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .btn-view {
            background: #FFCF91;
        }

        .btn-view:hover {
            box-shadow: 0 4px 10px rgba(255, 207, 145, 0.4);
            transform: scale(1.05);
        }

        .btn-cart {
            background: #FF6284;
        }

        .btn-cart:hover {
            box-shadow: 0 4px 10px rgba(255, 98, 132, 0.4);
            transform: scale(1.05);
        }

        .btn-wishlist {
            background: #A6D7F8;
        }

        .btn-wishlist:hover {
            box-shadow: 0 4px 10px rgba(166, 215, 248, 0.4);
            transform: scale(1.05);
        }

        .product-info {
            padding: 15px 2px;
            text-align: left;
        }

        .product-name {
            font-size: 1.2rem;
            font-weight: 500;
            color: #858585;
            margin-bottom: 10px;
            text-align: left;
        }

        .product-rating {
            font-size: 0.9rem;
            color: #FF9090;
            margin-bottom: 10px;
            text-align: left;
        }

        .product-rating i {
            margin-right: 2px;
        }

        .product-price {
            font-size: 0.9rem;
            font-weight: 500;
            color: #7367F0;
            margin-bottom: 15px;
            text-align: left;
        }

        .product-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }

        .product-colors {
            display: flex;
            gap: 8px;
        }

        .color-swatch {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 1px solid #ddd;
            cursor: pointer;
            transition: transform 0.2s ease;
        }

        .color-swatch:hover {
            transform: scale(1.2);
        }

        .product-sizes {
            display: flex;
            gap: 5px;
        }

        .size-option {
            background: #c7c7c7;
            color: #ffffff;
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 0.7rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .size-option:hover {
            background: #9b9b9b;
        }

        .discount-badge {
            position: absolute;
            top: 15px;
            left: 0px;
            background: #FF6284;
            color: #ffffff;
            padding: 3px 10px;
            border-radius: 0px 15px 15px 0px;
            font-size: 0.8rem;
            font-weight: bold;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 10;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .product-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .section-title {
                font-size: 2rem;
            }

            .product-image {
                height: 350px;
            }

            .btn {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }

            .product-buttons {
                bottom: 15px;
                right: 10px;
                gap: 10px;
            }

            .product-image-container:hover .product-buttons {
                bottom: 15px;
            }
        }

        @media (max-width: 480px) {
            .product-grid {
                grid-template-columns: 1fr;
            }

            .product-card {
                max-width: none;
                margin: 0;
            }

            .product-image {
                height: 350px;
            }

            .product-info {
                padding: 12px 2px;
            }

            .product-name {
                font-size: 1.3rem;
            }

            .product-rating {
                font-size: 0.8rem;
            }

            .product-price {
                font-size: 0.9rem;
            }

            .section-title {
                font-size: 1.8rem;
            }

            .btn {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }

            .product-buttons {
                bottom: 15px;
                right: 15px;
                gap: 10px;
            }

            .product-image-container:hover .product-buttons {
                bottom: 15px;
            }
        }
    </style>
@endpush

@push('scripts')
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
@endpush
