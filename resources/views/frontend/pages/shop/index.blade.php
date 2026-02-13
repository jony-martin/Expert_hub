@extends('frontend.layouts.main')

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
    @include('frontend.pages.shop.style')
@endpush

@push('scripts')
    @include('frontend.pages.shop.script')
@endpush
