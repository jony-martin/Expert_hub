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
                    <h4 class="mb-1">Add a Banner</h4>
                </div>
                <div class="d-flex align-content-center flex-wrap gap-4">
                    <a href="{{ route('admin.banners.index') }}" class="btn btn-primary">
                        Back to Banner List
                    </a>
                </div>
            </div>

            <div class="row">
                <!-- First column-->
                <div class="col-12 col-lg-12">
                    <!-- User Information -->
                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-tile mb-0">Banner information</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.banners.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-6">
                                    <div class="col-12 col-md-6">
                                        <div class="mb-6">
                                            <label class="form-label" for="title">Title<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="title"
                                                placeholder="Enter title" value="{{ old('title') }}" name="title"
                                                aria-label="Enter title" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="mb-6">
                                            <label class="form-label" for="sub_title">Sub Title<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="sub_title"
                                                placeholder="Enter sub title" value="{{ old('sub_title') }}"
                                                name="sub_title" aria-label="Sub Title" />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="mb-6">
                                            <label class="form-label" for="button_name">Button Name<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="button_name"
                                                placeholder="Enter button name" value="{{ old('button_name') }}"
                                                name="button_name" aria-label="button_name" />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="mb-6">
                                            <label class="form-label" for="button_url">Button URL<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="button_url"
                                                placeholder="Enter button Url" value="{{ old('button_url') }}"
                                                name="button_url" aria-label="button_url" />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 mb-6">
                                        <div class="row">
                                            <div class="col-md-10 form-control-validation align-self-center mb-3">
                                                <label class="form-label" for="image">Banner Image (670*320)<span
                                                        class="text-danger">*</span></label>
                                                <input type="file" name="image" id="image" class="form-control"
                                                    accept="image/*"
                                                    onchange="document.getElementById('image_preview').src = window.URL.createObjectURL(this.files[0])" />
                                            </div>
                                            <div class="col-md-2 form-control-validation">
                                                <label class="form-label" for="image_preview">Image Preview</label>
                                                <div class="image-preview">
                                                    <img id="image_preview" src="{{ asset('backend/images/no-image.jpg') }}"
                                                        class="img-fluid rounded" alt="Logo Preview" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-6 mb-6">
                                        <label class="form-label" for="description">Description<span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
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
