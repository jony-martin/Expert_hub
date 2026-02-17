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
                    <h4 class="mb-1">Edit Category</h4>
                </div>
                <div class="d-flex align-content-center flex-wrap gap-4">
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-primary">
                        Category List
                    </a>
                </div>
            </div>

            <div class="row">
                <!-- First column-->
                <div class="col-12 col-lg-12">
                    <!-- User Information -->
                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-tile mb-0">Category information</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row mb-6">
                                    <div class="col-12 col-md-6">
                                        <div class="mb-6">
                                            <label class="form-label" for="name">Name<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Enter name" value="{{ old('name', $category->name) }}" name="name"
                                                aria-label="Enter name" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 mb-6">
                                        <label for="status" class="form-label mb-1">Status</label>
                                        <select id="status" name="status" class="select2 form-select"
                                            data-placeholder="status">
                                            <option value="1" {{ old('status', $category->status) == 1 ? 'selected' : '' }}>Active</option>
                                            <option value="2" {{ old('status', $category->status) == 2 ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>

                                    <div class="col-12 col-md-6 mb-6">
                                        <div class="row">
                                            <div class="col-md-10 form-control-validation align-self-center mb-3">
                                                <label class="form-label" for="image">Image</label>
                                                <input type="file" name="image" id="image" class="form-control"
                                                    accept="image/*"
                                                    onchange="document.getElementById('image_preview').src = window.URL.createObjectURL(this.files[0])" />
                                            </div>
                                            <div class="col-md-2 form-control-validation">
                                                <label class="form-label" for="image_preview">Image Preview</label>
                                                @if($category->image)
                                                <div class="image-preview">
                                                    <img id="image_preview"
                                                        src="{{ asset('backend/images/categories/' . $category->image) }}"
                                                        class="img-fluid rounded" alt="Image Preview" />
                                                </div>
                                                @else
                                                <div class="image-preview">
                                                    <img id="image_preview" src="{{ asset('backend/images/no-image.jpg') }}"
                                                        class="img-fluid rounded" alt="Logo Preview" />
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 mb-6">
                                        <label class="form-label" for="description">Description</label>
                                        <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $category->description) }}</textarea>
                                    </div>

                                </div>
                                <div class="col-12 form-control-validation d-flex justify-content-end gap-2">
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
                            </form>
                            <!-- Media -->
                        </div>
                        <!-- /Media -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
