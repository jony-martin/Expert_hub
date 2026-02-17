@extends('backend.layouts.main')
@section('page-title', 'Edit Product')

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="app-ecommerce">
            <!-- Edit Product -->
            <div
                class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">
                <div class="d-flex flex-column justify-content-center">
                    <h4 class="mb-1">Edit Product</h4>
                </div>
                <div class="d-flex align-content-center flex-wrap gap-4">
                    <div class="d-flex gap-4">
                        <a href="{{ route('admin.products.index') }}" class="btn btn-primary">
                            Product List
                        </a>
                    </div>
                </div>
            </div>

            <form method="POST" action="{{ route('admin.products.update', $product->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- First column-->
                    <div class="col-12 col-lg-12">
                        <!-- Product Information -->
                        <div class="card mb-6">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Product information</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-4">
                                        <label class="form-label" for="ecommerce-product-name">Name</label>
                                        <input type="text" class="form-control" id="ecommerce-product-name"
                                            placeholder="Product title" name="name" value="{{ old('name', $product->name) }}" aria-label="Product title" />
                                    </div>
                                    <!-- Category -->
                                    <div class="col-12 col-md-6 mb-4">
                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                            <div class="mb-6 col ecommerce-select2-dropdown">
                                                <label class="form-label mb-1" for="category">
                                                    <span>Category</span>
                                                </label>
                                                <select id="category" name="category_id" class="select2 form-select"
                                                    data-placeholder="Select Category">
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                                            {{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Status -->
                                    <div class="col-12 col-md-6 mb-4">
                                        <div class="mb-6 col ecommerce-select2-dropdown">
                                            <label class="form-label mb-1" for="status">Status</label>
                                            <select id="status" name="status" class="select2 form-select"
                                                data-placeholder="Published">
                                                <option value="1" {{ old('status', $product->status) == 1 ? 'selected' : '' }}>Published</option>
                                                <option value="0" {{ old('status', $product->status) == 0 ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Tags -->
                                    <div class="col-12 col-md-6 mb-4">
                                        <div>
                                            <label for="tags" class="form-label mb-1">Tags</label>
                                            <input id="tags" class="form-control" name="tag"
                                                value="{{ old('tag', $product->tag) }}" aria-label="Product Tags" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 mb-4">
                                        <!-- Inline Checkboxes for Sizes -->
                                        <div class="row row-bordered g-0">
                                            <label for="sizes" class="form-label">Sizes</label>
                                            <div class="col-md p-6">
                                                @php $selectedSizes = explode(',', $product->size ?? ''); @endphp
                                                <div class="form-check form-check-inline mt-2">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                        value="S" name="size[]" {{ in_array('S', $selectedSizes) ? 'checked' : '' }} />
                                                    <label class="form-check-label" for="inlineCheckbox1">S</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                        value="M" name="size[]" {{ in_array('M', $selectedSizes) ? 'checked' : '' }} />
                                                    <label class="form-check-label" for="inlineCheckbox2">M</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                        value="XL" name="size[]" {{ in_array('XL', $selectedSizes) ? 'checked' : '' }} />
                                                    <label class="form-check-label" for="inlineCheckbox3">XL</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4"
                                                        value="XXL" name="size[]" {{ in_array('XXL', $selectedSizes) ? 'checked' : '' }} />
                                                    <label class="form-check-label" for="inlineCheckbox4">XXL</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Colors -->
                                    <div class="col-12 col-md-6 mb-4">
                                        <div class="row flex-grow-1 row-bordered g-5">
                                            <div class="col-auto">
                                                <label for="colorOne" class="form-label">Colors</label>
                                            </div>
                                            @php $selectedColors = explode(',', $product->color ?? ''); @endphp
                                            <div class="col-auto">
                                                <input type="color" class="form-control form-control-color"
                                                    id="colorOne" value="{{ old('color.0', $selectedColors[0] ?? '#FF6284') }}" title="Choose your color"
                                                    name="color[]">
                                            </div>
                                            <div class="col-auto">
                                                <input type="color" class="form-control form-control-color"
                                                    id="colorTwo" value="{{ old('color.1', $selectedColors[1] ?? '#A6D7F8') }}" title="Choose your color"
                                                    name="color[]">
                                            </div>
                                            <div class="col-auto">
                                                <input type="color" class="form-control form-control-color"
                                                    id="colorThree" value="{{ old('color.2', $selectedColors[2] ?? '#FFCF91') }}" title="Choose your color"
                                                    name="color[]">
                                            </div>
                                            <div class="col-auto">
                                                <input type="color" class="form-control form-control-color"
                                                    id="colorFour" value="{{ old('color.3', $selectedColors[3] ?? '#47F3C7') }}" title="Choose your color"
                                                    name="color[]">
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
                                                    <input type="number" class="form-control"
                                                        id="ecommerce-product-price" placeholder="Price"
                                                        name="base_price" value="{{ old('base_price', $product->base_price) }}" aria-label="Product price" />
                                                </div>
                                                <!-- Discounted Price -->
                                                <div class="mb-6">
                                                    <label class="form-label" for="ecommerce-product-discount-price">Discounted Price</label>
                                                    <input type="number" class="form-control"
                                                        id="ecommerce-product-discount-price" placeholder="Discounted Price"
                                                        name="discount_price" value="{{ old('discount_price', $product->discount_price) }}" aria-label="Product discounted price" />
                                                </div>
                                            </div>
                                            <!-- Description -->
                                            <div class="col-12 col-md-6 mb-6">
                                                <label class="form-label" for="description">Description</label>
                                                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $product->description) }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Pricing Card -->
                            <!-- Multi  -->
                            <div class="col-12">
                                <div class="card">
                                    <h5 class="card-header">Edit Images</h5>
                                    <div class="card-body">
                                        <!-- Existing Images -->
                                        @if($product->image)
                                            <div class="mb-4">
                                                <label class="form-label">Current Images</label>
                                                <div class="d-flex flex-wrap gap-2">
                                                    @foreach(explode(',', $product->image) as $image)
                                                        <img src="{{ asset($image) }}" width="100" alt="Product Image" class="border rounded" />
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif
                                        <!-- Upload New Images -->
                                        <div class="dropzone needsclick" id="dropzone-multi">
                                            <div class="dz-message needsclick">
                                                Drop new images here or click to upload
                                                <span class="note needsclick">(Files will be uploaded when the form is submitted.)</span>
                                            </div>
                                            <div class="fallback">
                                                <input name="image[]" type="file" multiple />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Media -->
                            <!-- Action Buttons -->
                            <div class="col-12 form-control-validation d-flex justify-content-end gap-2 mt-6 p-6">
                                <button type="submit" class="btn btn-primary me-2">
                                    <i class="icon-base ti tabler-device-floppy icon-xs me-2"></i>
                                    Update
                                </button>
                                <button type="button" class="btn btn-secondary me-2" onclick="window.location.href='{{ route('admin.products.index') }}'">
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
                </div>
            </form>

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
    <!-- Optional Dropzone JS for styling -->
    <script>
        $(document).ready(function() {
            new Dropzone('#dropzone-multi', {
                url: '#',  // Dummy URL; files submit with form
                autoProcessQueue: false,  // Don't upload
                clickable: true,
                maxFilesize: 2,
                acceptedFiles: 'image/*'
            });
        });
    </script>
@endpush