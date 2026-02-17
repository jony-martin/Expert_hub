@extends('backend.layouts.main')
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="app-ecommerce-category">
            <!-- category list -->
            <div class="card">
                <div class="card-header border-bottom">

                    <div class="d-flex justify-content-between align-items-center row pt-4 gap-4 gap-md-0">
                        <div class="col-md-4">
                            <h5 class="card-title mb-0">Category List</h5>
                        </div>
                        <div class="col-md-4 text-md-end">

                            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary gap-2">
                                <i class="icon-base ti tabler-plus icon-xs"></i>Add Category</a>

                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover table-bordered">
                        <thead class="border-top">
                            <tr class="text-center">
                                <th>Image</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr class="text-center">
                                    <td class="text-center">
                                        @if (!empty($category->image))
                                            <img src="{{ asset('backend/images/category/' . $category->image) }}"
                                                alt="Category Image" class="img-fluid rounded-circle" width="50"
                                                height="50">
                                        @else
                                            <img src="{{ asset('backend/images/no-image.jpg') }}" alt="No Image"
                                                class="img-fluid rounded-circle" width="50" height="50">
                                        @endif
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td>
                                        @if ($category->status == 1)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>

                                    <td class="text-center">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-icon btn-light" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="icon-base ti tabler-dots-vertical icon-xs"></i>
                                            </button>

                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.categories.edit', $category->id) }}">
                                                        <i class="icon-base ti tabler-pencil icon-xs me-2"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <button class="dropdown-item text-danger" onclick="categoryDelete({{ $category->id }})">
                                                        <i class="icon-base ti tabler-trash icon-xs me-2"></i> Delete
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Offcanvas to add new customer -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceCategoryList"
                aria-labelledby="offcanvasEcommerceCategoryListLabel">
                <!-- Offcanvas Body -->
                <div class="offcanvas-body border-top">
                    <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data"
                        class="pt-0" id="eCommerceCategoryListForm">
                        @csrf
                        <!-- Title -->
                        <div class="mb-6 form-control-validation">
                            <label class="form-label" for="ecommerce-category-title">Title<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="ecommerce-category-title"
                                placeholder="Enter category title" name="name" aria-label="category title" />
                        </div>
                        <!-- Slug -->
                        <div class="mb-6 form-control-validation">
                            <label class="form-label" for="ecommerce-category-slug">Slug</label>
                            <input type="text" id="ecommerce-category-slug" class="form-control" placeholder="Enter slug"
                                aria-label="slug" name="slug" />
                        </div>
                        <!-- Status -->
                        <div class="mb-6 ecommerce-select2-dropdown">
                            <label class="form-label">Select category status</label>
                            <select id="ecommerce-category-status" name="status" class="select2 form-select"
                                data-placeholder="Select category status">
                                <option value="">Select category status</option>
                                <option value="1">Publish</option>
                                <option value="2">Inactive</option>
                            </select>
                        </div>
                        <!-- Image -->
                        <div class="mb-6">
                            <label class="form-label" for="ecommerce-category-image">Attachment</label>
                            <input class="form-control" type="file" name="image" id="ecommerce-category-image" />
                        </div>

                        <!-- Submit and reset -->
                        <div class="mb-6">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">
                                Add
                            </button>
                            <button type="reset" class="btn btn-label-danger" data-bs-dismiss="offcanvas">
                                Discard
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- / Content -->
@endsection
@push('scripts')
    <script>
        function categoryDelete(id) {
            let url = "{{ route('admin.categories.destroy', ':id') }}";
            url = url.replace(':id', id);
            Swal.fire({
                title: 'Are you sure?',
                text: "You want to delete this Category!",
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
                                    'Category has been deleted.',
                                    'success'
                                ).then((result) => {
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }
                                })
                            } else {
                                Swal.fire(
                                    'Deleted!',
                                    'Category has not been deleted.',
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