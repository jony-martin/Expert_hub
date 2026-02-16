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
                </div>
                <div class="d-flex align-content-center flex-wrap gap-4">
                    <div class="d-flex gap-4">
                        <a href="" class="btn btn-primary">
                            product List
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- First column-->
                <div class="col-12 col-lg-12">
                    <!-- Product Information -->
                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-tile mb-0">Product information</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-6 mb-4">
                                    <label class="form-label" for="ecommerce-product-name">Name</label>
                                    <input type="text" class="form-control" id="ecommerce-product-name"
                                        placeholder="Product title" name="productTitle" aria-label="Product title" />
                                </div>
                                <!-- Category -->
                                <div class="col-12 col-md-6 mb-4">
                                    <div class="d-flex justify-content-between align-items-center mb-1">
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
                                    </div>
                                </div>
                                <!-- Status -->
                                <div class="col-12 col-md-6 mb-4">
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
                                </div>
                                <!-- Tags -->
                                <div class="col-12 col-md-6 mb-4">
                                    <div>
                                        <label for="ecommerce-product-tags" class="form-label mb-1">Tags</label>
                                        <input id="ecommerce-product-tags" class="form-control"
                                            name="ecommerce-product-tags" value="Normal,Standard,Premium"
                                            aria-label="Product Tags" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-4">
                                    <!-- Inline Checkboxes -->
                                    <div class="row row-bordered g-0">
                                        <label for="" class="form-label">Sizes</label>
                                        <div class="col-md p-6">
                                            <div class="form-check form-check-inline mt-2">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="option1" />
                                                <label class="form-check-label" for="inlineCheckbox1">S</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                    value="option2" />
                                                <label class="form-check-label" for="inlineCheckbox2">M</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                    value="option3" />
                                                <label class="form-check-label" for="inlineCheckbox3">XL</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox4"
                                                    value="option4" />
                                                <label class="form-check-label" for="inlineCheckbox4">XXL</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- color -->
                                <div class="col-12 col-md-6 mb-4">
                                    <!-- Inline Checkboxes -->
                                    <div class="row row-bordered g-0">
                                        <label for="" class="form-label">Colors</label>
                                        <!-- Color Picker -->
                                        <div class="row">
                                            <div class="classic col col-sm-3 col-lg-2">
                                                <p>Classic</p>
                                                <div id="color-picker-classic"></div>
                                            </div>
                                            <div class="monolith col col-sm-3 col-lg-2">
                                                <p>Monolith</p>
                                                <div id="color-picker-monolith"></div>
                                            </div>
                                            <div class="nano col col-sm-3 col-lg-2">
                                                <p>Nano</p>
                                                <div id="color-picker-nano"></div>
                                            </div>
                                        </div>
                                        <!-- /Color Picker-->
                                    </div>
                                </div>
                                <!-- Description -->
                                <div class="col-12 col-md-12 mb-6">
                                    <label class="form-label" for="detail">Details</label>
                                    <textarea class="form-control" id="detail" name="detail" rows="3">{{ old('detail') }}</textarea>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Pricing Card -->
                        <div class="col-12 col-md-6 mb-6">
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
                                        <label class="form-label" for="ecommerce-product-discount-price">Discounted
                                            Price</label>
                                        <input type="number" class="form-control" id="ecommerce-product-discount-price"
                                            placeholder="Discounted Price" name="productDiscountedPrice"
                                            aria-label="Product discounted price" />
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
                        </div>
                        <!-- /Pricing Card -->
                        <!-- Media -->
                        <div class="col-12 col-md-6 mb-6">
                            <div class="card mb-6">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0 card-title">Product Image</h5>
                                    <a href="javascript:void(0);" class="fw-medium">Add media from URL</a>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-md-8 mb-6">
                                            <div class="mb-6">
                                                <label class="form-label" for="ecommerce-product-image">Image</label>
                                                <input type="file" class="form-control" id="ecommerce-product-image"
                                                    name="productImage" aria-label="Product image" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 mb-6">
                                            <div class="mb-6">
                                                <div class="form-control">
                                                    <label class="form-label" for="logo_preview">Image Preview</label>
                                                    <div class="image-preview">
                                                        <img id="logo_preview"
                                                            src="https://prodinsight.verticasoft.tech/uploads/settings/prodinsight1767380471695815f79b43c.png"
                                                            class="img-fluid rounded" alt="Logo Preview" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 form-control-validation d-flex justify-content-end gap-2 mt-6 p-6">
                                    <button type="submit" class="btn btn-primary me-2">
                                        <i class="icon-base ti tabler-device-floppy icon-xs me-2"></i>
                                        Update
                                    </button>
                                    <button type="button" class="btn btn-secondary me-2"
                                        onclick="window.location.href='#'">
                                        <i class="icon-base ti tabler-x icon-xs me-2"></i>
                                        Cancel
                                    </button>
                                    <button type="button" class="btn btn-danger" onclick="window.location.reload();">
                                        <i class="icon-base ti tabler-refresh icon-xs me-2"></i>
                                        Reset
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- /Media -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#detail').summernote({
                placeholder: 'Write something about user...',
                tabsize: 2,
                height: 100
            });
        });
    </script>
@endpush
