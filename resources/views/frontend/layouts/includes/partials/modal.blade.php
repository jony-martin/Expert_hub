<!-- Modal -->
<div class="modal fade" id="ec_quickview_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <!-- Swiper -->
                        <div class="qty-product-cover" id="qty-product-cover">
                            <!-- Images will be dynamically added here -->
                        </div>
                        <div class="qty-nav-thumb" id="qty-nav-thumb">
                            <!-- Thumbnails will be dynamically added here -->
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="quickview-pro-content">
                            <h5 class="ec-quick-title">
                                <a href="#" id="quickview-title">Product Title</a>
                            </h5>
                            <div class="ec-quickview-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>

                            <div class="ec-quickview-desc" id="quickview-desc">
                                Product description will appear here.
                            </div>
                            <div class="ec-quickview-price" id="quickview-price">
                                <span class="old-price">$0.00</span>
                                <span class="new-price">$0.00</span>
                            </div>

                            <div class="ec-pro-variation" id="quickview-variations">
                                <!-- Variations will be dynamically added here -->
                            </div>
                            <div class="ec-quickview-qty">
                                <div class="qty-plus-minus">
                                    <input class="qty-input" type="number" name="ec_qtybtn" value="1" min="1" id="quickview-qty" />
                                </div>
                                <div class="ec-quickview-cart">
                                    <button class="btn btn-primary" id="quickview-add-to-cart">
                                        <i class="fi-rr-shopping-basket"></i> Add To Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->