@extends('backend.layouts.main')
@section('page-title', 'Dashboard')

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">

                <div class="card mb-6">
                    <!-- Account -->
                    <form method="POST" action="{{ route('profile.update', $user->id) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="profile_section" value="detail">
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-6">
                                @if ($user->image)
                                    <div class="image-preview">
                                        <img id="logo_preview" src="{{ asset('backend/images/users/' . $user->image) }}"
                                            class="d-block w-px-100 h-px-100 rounded" alt="Logo Preview" />
                                    </div>
                                @else
                                    <div class="image-preview">
                                        <img id="logo_preview" src="{{ asset('backend/images/no-image.jpg') }}"
                                            class="d-block w-px-100 h-px-100 rounded" alt="Logo Preview" />
                                    </div>
                                @endif
                                <div class="button-wrapper">
                                    <label for="upload" class="btn btn-primary me-3 mb-4" tabindex="0">
                                        <span class="d-none d-sm-block">Upload new photo</span>
                                        <i class="icon-base ti tabler-upload d-block d-sm-none"></i>
                                        <input type="file" id="upload" name="image" class="account-file-input"
                                            hidden accept="image/png, image/jpeg"
                                            onchange="document.getElementById('logo_preview').src = window.URL.createObjectURL(this.files[0])" />
                                    </label>
                                    <div>Allowed JPG, GIF or PNG.</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-4">

                            <div class="row gy-4 gx-6 mb-6">
                                <div class="col-md-6 form-control-validation">
                                    <label for="name" class="form-label">Full Name<span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" type="text" id="name" name="name"
                                        value="{{ $user->name }}" autofocus />
                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label">E-mail<span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" type="text" id="email" name="email"
                                        value="{{ $user->email }}" placeholder="Email" />
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label" for="phone">Phone Number<span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="phone" name="phone" value="{{ $user->phone }}"
                                        class="form-control" placeholder="Phone Number" />
                                </div>

                                <div class="col-md-6">
                                    <label for="address" class="form-label">Address<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="{{ $user->address }}" id="address"
                                        name="address" placeholder="Address" />
                                </div>

                                <div class="col-md-6">
                                    <label for="detail" class="form-label">Details</label>
                                    <textarea class="form-control" id="detail" name="detail" rows="3" placeholder="Enter details here">{{ $user->detail }}</textarea>
                                </div>

                                <div class="mb-4 col-md-6 form-password-toggle form-control-validation">
                                    <label class="form-label" for="current_password">Enter Current Password<span
                                            class="text-danger">*</span></label>
                                    <div class="input-group input-group-merge">
                                        <input class="form-control" type="password" id="current_password"
                                            name="current_password"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                        <span class="input-group-text cursor-pointer"><i
                                                class="icon-base ti tabler-eye-off icon-xs"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-3">
                                    Save changes
                                </button>
                                <button type="reset" class="btn btn-label-secondary">
                                    Cancel
                                </button>
                            </div>

                        </div>
                    </form>
                    <!-- /Account -->
                </div>

                <div class="card">
                    <h5 class="card-header">Update Your Password</h5>
                    <form method="POST" action="{{ route('profile.update', $user->id) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="profile_section" value="password">
                    <div class="card-body pt-4">

                        <div class="row gy-4 gx-6 mb-6">

                            <div class="mb-4 col-md-4 form-password-toggle form-control-validation">
                                <label class="form-label" for="current_password">Current Password<span
                                            class="text-danger">*</span></label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="password" id="current_password"
                                        name="current_password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                    <span class="input-group-text cursor-pointer"><i
                                            class="icon-base ti tabler-eye-off icon-xs"></i></span>
                                </div>
                            </div>

                            <div class="mb-4 col-md-4 form-password-toggle form-control-validation">
                                <label class="form-label" for="new_password">New Password<span
                                            class="text-danger">*</span></label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="password" id="new_password" name="new_password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                    <span class="input-group-text cursor-pointer"><i
                                            class="icon-base ti tabler-eye-off icon-xs"></i></span>
                                </div>
                            </div>

                            <div class="mb-4 col-md-4 form-password-toggle form-control-validation">
                                <label class="form-label" for="confirm_password">Confirm New Password<span
                                            class="text-danger">*</span></label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="password" name="confirm_password"
                                        id="confirm_password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                    <span class="input-group-text cursor-pointer"><i
                                            class="icon-base ti tabler-eye-off icon-xs"></i></span>
                                </div>
                            </div>

                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-3">
                                Save changes
                            </button>
                            <button type="reset" class="btn btn-label-secondary">
                                Cancel
                            </button>
                        </div>

                    </div>
                    </form>
                </div>

                <div class="card mt-6">
                    <h5 class="card-header">Delete Account</h5>
                    <div class="card-body">
                        <div class="mb-6 col-12 mb-0">
                            <div class="alert alert-warning">
                                <h5 class="alert-heading mb-1">
                                    Are you sure you want to delete your account?
                                </h5>
                                <p class="mb-0">
                                    Once you delete your account, there is no going
                                    back. Please be certain.
                                </p>
                            </div>
                        </div>
                        <form id="formAccountDeactivation" onsubmit="return false;">
                            <div class="form-check my-8">
                                <input class="form-check-input" type="checkbox" name="accountActivation"
                                    id="accountActivation" />
                                <label class="form-check-label" for="accountActivation">I confirm my account
                                    deactivation</label>
                            </div>
                            <button onclick="userDelete({{ $user->id }})" type="submit"
                                class="btn btn-danger deactivate-account" disabled>
                                Deactivate Account
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection

@push('scripts')
    <script>
        function userDelete(id) {
            let url = "{{ route('users.destroy', ':id') }}";
            url = url.replace(':id', id);
            Swal.fire({
                title: 'Are you sure?',
                text: "You want to delete this User!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#2f4cdd',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed && id) {
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        data: {
                            _token: "{{ csrf_token() }}",
                        },
                        success: function(response) {
                            if (response.status) {
                                Swal.fire(
                                    'Deleted!',
                                    'User has been deleted.',
                                    'success'
                                ).then((result) => {
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }
                                })
                            } else {
                                Swal.fire(
                                    'Deleted!',
                                    'User has not been deleted.',
                                    'error'
                                )
                            }
                        }
                    });
                }
            })
        }
    </script>
@endpush
