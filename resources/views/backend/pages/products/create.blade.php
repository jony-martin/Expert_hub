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
                                        placeholder="Product title" name="name" aria-label="Product title" />
                                </div>
                                <!-- Category -->
                                <div class="col-12 col-md-6 mb-4">
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                        <div class="mb-6 col ecommerce-select2-dropdown">
                                            <label class="form-label mb-1" for="category">
                                                <span>Category</span>
                                            </label>
                                            <select id="category" name="category" class="select2 form-select"
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
                                        <label class="form-label mb-1" for="status">Status
                                        </label>
                                        <select id="status" name="status" class="select2 form-select"
                                            data-placeholder="Published">
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
                                        <label for="tags" class="form-label mb-1">Tags</label>
                                        <input id="tags" class="form-control" name="tags"
                                            value="Normal,Standard,Premium" aria-label="Product Tags" />
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
                                    <div class="row flex-grow-1 row-bordered g-5">
                                        <div class="col-auto">
                                            <label for="exampleColorInput" class="form-label">Colors</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="color" class="form-control form-control-color" id="colorOne"
                                                value="#FF6284" title="Choose your color">
                                        </div>
                                        <div class="col-auto">
                                            <input type="color" class="form-control form-control-color" id="colorTwo"
                                                value="#A6D7F8" title="Choose your color">
                                        </div>
                                        <div class="col-auto">
                                            <input type="color" class="form-control form-control-color" id="colorThree"
                                                value="#FFCF91" title="Choose your color">
                                        </div>
                                        <div class="col-auto">
                                            <input type="color" class="form-control form-control-color" id="colorFour"
                                                value="#47F3C7" title="Choose your color">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Pricing Card -->
                        <div class="col-12 col-md-12 mb-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Description and Pricing</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <!-- Base Price -->
                                        <div class="col-12 col-md-6 mb-6">
                                            <label class="form-label mb-3" for="ecommerce-product-base-price">Product Price</label>
                                            <div class="mb-6">
                                                <label class="form-label" for="ecommerce-product-price">Base Price</label>
                                                <input type="number" class="form-control" id="ecommerce-product-price"
                                                    placeholder="Price" name="base_price" aria-label="Product price" />
                                            </div>
                                            <!-- Discounted Price -->
                                            <div class="mb-6">
                                                <label class="form-label"
                                                    for="ecommerce-product-discount-price">Discounted
                                                    Price</label>
                                                <input type="number" class="form-control"
                                                    id="ecommerce-product-discount-price" placeholder="Discounted Price"
                                                    name="discounted_price" aria-label="Product discounted price" />
                                            </div>
                                        </div>
                                        <!-- Description -->
                                        <div class="col-12 col-md-6 mb-6">
                                            <label class="form-label" for="description">Description</label>
                                            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Pricing Card -->
                        <!-- Media -->
                        <!-- Multi  -->
                        <div class="col-12 col-md-12 mb-6">
                            <div class="card">
                                <h5 class="card-header">Choose Multiple Images</h5>
                                <div class="card-body">
                                    <form action="/upload" class="dropzone needsclick" id="dropzone-multi">
                                        <div class="dz-message needsclick">
                                            Drop files here or click to upload
                                            <span class="note needsclick">(This is just a demo dropzone. Selected files are
                                                <span class="fw-medium">not</span> actually
                                                uploaded.)</span>
                                        </div>
                                        <div class="fallback">
                                            <input name="file" type="file" />
                                        </div>
                                    </form>
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
                                        <button type="button" class="btn btn-danger"
                                            onclick="window.location.reload();">
                                            <i class="icon-base ti tabler-refresh icon-xs me-2"></i>
                                            Reset
                                        </button>
                                    </div>
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
            $('#description').summernote({
                placeholder: 'Write something about user...',
                tabsize: 2,
                height: 100
            });
        });
    </script>
@endpush
