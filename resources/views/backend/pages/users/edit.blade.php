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
                    <h4 class="mb-1">Edit User</h4>
                </div>
                <div class="d-flex align-content-center flex-wrap gap-4">
                    <a href="{{ route('users.index') }}" class="btn btn-primary">

                        Back to User List
                    </a>
                </div>
            </div>

            <div class="row">
                <!-- First column-->
                <div class="col-12 col-lg-12">
                    <!-- User Information -->
                    <div class="card mb-6">
                        <div class="card-header">
                            <h5 class="card-tile mb-0">User information</h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('users.update', $user->id) }}"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="row mb-6">
                                    <div class="col-12 col-md-6">
                                        <div class="mb-6">
                                            <label class="form-label" for="name">Full Name<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Enter full name" value="{{ $user->name }}" name="name"
                                                aria-label="Enter full name" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="mb-6">
                                            <label class="form-label" for="email">Email<span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Enter email" value="{{ $user->email }}" name="email"
                                                aria-label="Email" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="mb-6">
                                            <label class="form-label" for="phone">Phone<span class="text-danger">*</span></label>
                                            <input type="tel" class="form-control" id="phone"
                                                placeholder="0123-4567" value="{{ $user->phone }}" name="phone"
                                                aria-label="Phone" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="status" class="form-label mb-1">User Status</label>
                                        <select id="status" name="status" class="select2 form-select" data-placeholder="status">
                                            <option value="1" {{ $user->status == '1' ? 'selected' : '' }}>Active
                                            </option>
                                            <option value="2" {{ $user->status == '2' ? 'selected' : '' }}>Inactive
                                            </option>
                                        </select>
                                    </div>

                                    <div class="col-12 col-md-6 mb-6">
                                        <label class="form-label" for="address">Address<span class="text-danger">*</span></label>
                                        <textarea class="form-control" id="address" name="address" rows="2" placeholder="Address"> {{ $user->address }} </textarea>
                                    </div>

                                    <div class="col-12 col-md-6 mb-6">
                                        <div class="row">
                                            <div class="col-md-10 form-control-validation align-self-center">
                                                <label class="form-label" for="logo">Image</label>
                                                <input type="file" name="image" id="image" class="form-control"
                                                    accept="image/*"
                                                    onchange="document.getElementById('logo_preview').src = window.URL.createObjectURL(this.files[0])" />
                                            </div>
                                            <div class="col-md-2 form-control-validation">
                                                <label class="form-label" for="logo_preview">Logo Preview</label>
                                                @if($user->image)
                                                <div class="image-preview">
                                                    <img id="logo_preview"
                                                        src="{{ asset('backend/images/users/' . $user->image) }}"
                                                        class="img-fluid rounded" alt="Logo Preview" />
                                                </div>
                                                @else
                                                <div class="image-preview">
                                                    <img id="logo_preview" src="{{ asset('backend/images/no-image.jpg') }}"
                                                        class="img-fluid rounded" alt="Logo Preview" />
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-12 mb-6">
                                        <label class="form-label" for="detail">Details</label>
                                        <textarea class="form-control" id="detail" name="detail" rows="3">{{ $user->detail }}</textarea>
                                    </div>

                                    <div class="mb-6 col-md-6 form-password-toggle form-control-validation">
                                        <label class="form-label" for="new_password">New Password</label>
                                        <div class="input-group input-group-merge">
                                            <input class="form-control" type="password" id="new_password"
                                                name="new_password"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                            <span class="input-group-text cursor-pointer"><i
                                                    class="icon-base ti tabler-eye-off icon-xs"></i></span>
                                        </div>
                                    </div>

                                    <div class="mb-6 col-md-6 form-password-toggle form-control-validation">
                                        <label class="form-label" for="confirm_password">Confirm New Password</label>
                                        <div class="input-group input-group-merge">
                                            <input class="form-control" type="password" name="confirm_password"
                                                id="confirm_password"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                            <span class="input-group-text cursor-pointer"><i
                                                    class="icon-base ti tabler-eye-off icon-xs"></i></span>
                                        </div>
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
            $('#detail').summernote({
                placeholder: 'Write something about user...',
                tabsize: 2,
                height: 100
            });
        });
    </script>
@endpush