@extends('backend.layouts.main')
@section('page-title', 'Dashboard')

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="app-ecommerce">
            <!-- Add Product -->
            <div
                class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">
                <div class="d-flex flex-column justify-content-center">
                    <h4 class="mb-1">Add a new Product</h4>
                    <p class="mb-0">Orders placed across your store</p>
                </div>
                <div class="d-flex align-content-center flex-wrap gap-4">
                    <div class="d-flex gap-4">
                        <button class="btn btn-label-secondary">Discard</button>
                        <button class="btn btn-label-primary">Save draft</button>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Publish product
                    </button>
                </div>
            </div>

            <div class="row">
                <!-- First column-->
                <div class="col-12 col-lg-8">
                    <!-- Product Information -->
                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-tile mb-0">Product information</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-6">
                                <label class="form-label" for="ecommerce-product-name">Name</label>
                                <input type="text" class="form-control" id="ecommerce-product-name"
                                    placeholder="Product title" name="productTitle" aria-label="Product title" />
                            </div>
                            <div class="row mb-6">
                                <div class="col">
                                    <label class="form-label" for="ecommerce-product-sku">SKU</label>
                                    <input type="number" class="form-control" id="ecommerce-product-sku" placeholder="SKU"
                                        name="productSku" aria-label="Product SKU" />
                                </div>
                                <div class="col">
                                    <label class="form-label" for="ecommerce-product-barcode">Barcode</label>
                                    <input type="text" class="form-control" id="ecommerce-product-barcode"
                                        placeholder="0123-4567" name="productBarcode" aria-label="Product barcode" />
                                </div>
                            </div>
                            <!-- Description -->
                            <div>
                                <label class="mb-1">Description (Optional)</label>
                                <div class="form-control p-0">
                                    {{-- <div class="comment-toolbar border-0 border-bottom">
                                        <div class="d-flex justify-content-start">
                                            <span class="ql-formats me-0">
                                                <button class="ql-bold"></button>
                                                <button class="ql-italic"></button>
                                                <button class="ql-underline"></button>
                                                <button class="ql-list" value="ordered"></button>
                                                <button class="ql-list" value="bullet"></button>
                                                <button class="ql-link"></button>
                                                <button class="ql-image"></button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="comment-editor border-0 pb-6" id="ecommerce-category-description"></div> --}}
                                    <textarea class="form-control" id="ecommerce-product-description" name="productDescription" rows="3"
                                        placeholder="Product description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Information -->
                    <!-- Media -->
                    <div class="card mb-6">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 card-title">Product Image</h5>
                            <a href="javascript:void(0);" class="fw-medium">Add media from URL</a>
                        </div>
                        {{-- <div class="card-body">
                            <form action="/upload" class="dropzone needsclick p-0" id="dropzone-basic">
                                <div class="dz-message needsclick">
                                    <p class="h4 needsclick pt-3 mb-2">
                                        Drag and drop your image here
                                    </p>
                                    <p class="h6 text-body-secondary d-block fw-normal mb-2">
                                        or
                                    </p>
                                    <span class="needsclick btn btn-sm btn-label-primary" id="btnBrowse">Browse image</span>
                                </div>
                                <div class="fallback">
                                    <input name="file" type="file" />
                                </div>
                            </form>
                        </div> --}}
                        <div class="card-body">
                            <div class="mb-6">
                                <label class="form-label" for="ecommerce-product-image">Image</label>
                                <input type="file" class="form-control" id="ecommerce-product-image" name="productImage"
                                    aria-label="Product image" />
                            </div>
                            <div class="mb-6">
                                <div class="form-control">
                                    <label class="form-label" for="logo_preview">Logo Preview</label>
                                    <div class="image-preview">
                                        <img id="logo_preview"
                                            src="https://prodinsight.verticasoft.tech/uploads/settings/prodinsight1767380471695815f79b43c.png"
                                            class="img-fluid rounded" alt="Logo Preview" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Media -->
                    <!-- Variants -->
                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Variants</h5>
                        </div>
                        <div class="card-body">
                            <form class="form-repeater">
                                <div data-repeater-list="group-a">
                                    <div data-repeater-item>
                                        <div class="row g-sm-6 mb-6">
                                            <div class="col-sm-4">
                                                <label class="form-label" for="form-repeater-1-1">Options</label>
                                                <select id="form-repeater-1-1" class="select2 form-select"
                                                    data-placeholder="Size">
                                                    <option value="">Size</option>
                                                    <option value="size">Size</option>
                                                    <option value="color">Color</option>
                                                    <option value="weight">Weight</option>
                                                    <option value="smell">Smell</option>
                                                </select>
                                            </div>

                                            <div class="col-sm-8">
                                                <label class="form-label invisible" for="form-repeater-1-2">Not
                                                    visible</label>
                                                <input type="number" id="form-repeater-1-2" class="form-control"
                                                    placeholder="Enter size" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-primary" data-repeater-create>
                                        <i class="icon-base ti tabler-plus icon-xs me-2"></i>
                                        Add another option
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /Variants -->
                    
                </div>
                <!-- /Second column -->

                <!-- Second column -->
                <div class="col-12 col-lg-4">
                    <!-- Pricing Card -->
                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Pricing</h5>
                        </div>
                        <div class="card-body">
                            <!-- Base Price -->
                            <div class="mb-6">
                                <label class="form-label" for="ecommerce-product-price">Base Price</label>
                                <input type="number" class="form-control" id="ecommerce-product-price"
                                    placeholder="Price" name="productPrice" aria-label="Product price" />
                            </div>
                            <!-- Discounted Price -->
                            <div class="mb-6">
                                <label class="form-label" for="ecommerce-product-discount-price">Discounted Price</label>
                                <input type="number" class="form-control" id="ecommerce-product-discount-price"
                                    placeholder="Discounted Price" name="productDiscountedPrice"
                                    aria-label="Product discounted price" />
                            </div>
                            <!-- Charge tax check box -->
                            <div class="form-check ms-2 mt-2 mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="price-charge-tax"
                                    checked />
                                <label class="switch-label" for="price-charge-tax">
                                    Charge tax on this product
                                </label>
                            </div>
                            <!-- Instock switch -->
                            <div class="d-flex justify-content-between align-items-center border-top pt-2">
                                <span class="mb-0">In stock</span>
                                <div class="w-25 d-flex justify-content-end">
                                    <div class="form-check form-switch me-n3">
                                        <input type="checkbox" class="form-check-input" checked />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Pricing Card -->
                    <!-- Organize Card -->
                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Organize</h5>
                        </div>
                        <div class="card-body">
                            <!-- Vendor -->
                            <div class="mb-6 col ecommerce-select2-dropdown">
                                <label class="form-label mb-1" for="vendor">
                                    Vendor
                                </label>
                                <select id="vendor" class="select2 form-select" data-placeholder="Select Vendor">
                                    <option value="">Select Vendor</option>
                                    <option value="men-clothing">Men's Clothing</option>
                                    <option value="women-clothing">
                                        Women's-clothing
                                    </option>
                                    <option value="kid-clothing">Kid's-clothing</option>
                                </select>
                            </div>
                            <!-- Category -->
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mb-6 col ecommerce-select2-dropdown">
                                    <label class="form-label mb-1" for="category-org">
                                        <span>Category</span>
                                    </label>
                                    <select id="category-org" class="select2 form-select"
                                        data-placeholder="Select Category">
                                        <option value="">Select Category</option>
                                        <option value="Household">Household</option>
                                        <option value="Management">Management</option>
                                        <option value="Electronics">Electronics</option>
                                        <option value="Office">Office</option>
                                        <option value="Automotive">Automotive</option>
                                    </select>
                                </div>
                                <a href="javascript:void(0);" class="fw-medium btn btn-icon btn-label-primary ms-4"><i
                                        class="icon-base ti tabler-plus icon-md"></i></a>
                            </div>
                            <!-- Collection -->
                            <div class="mb-6 col ecommerce-select2-dropdown">
                                <label class="form-label mb-1" for="collection">Collection
                                </label>
                                <select id="collection" class="select2 form-select" data-placeholder="Collection">
                                    <option value="">Collection</option>
                                    <option value="men-clothing">Men's Clothing</option>
                                    <option value="women-clothing">
                                        Women's-clothing
                                    </option>
                                    <option value="kid-clothing">Kid's-clothing</option>
                                </select>
                            </div>
                            <!-- Status -->
                            <div class="mb-6 col ecommerce-select2-dropdown">
                                <label class="form-label mb-1" for="status-org">Status
                                </label>
                                <select id="status-org" class="select2 form-select" data-placeholder="Published">
                                    <option value="">Published</option>
                                    <option value="Published">Published</option>
                                    <option value="Scheduled">Scheduled</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                            <!-- Tags -->
                            <div>
                                <label for="ecommerce-product-tags" class="form-label mb-1">Tags</label>
                                <input id="ecommerce-product-tags" class="form-control" name="ecommerce-product-tags"
                                    value="Normal,Standard,Premium" aria-label="Product Tags" />
                            </div>
                        </div>
                    </div>
                    <!-- /Organize Card -->
                </div>
                <!-- /Second column -->
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
