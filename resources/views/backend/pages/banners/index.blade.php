@extends('backend.layouts.main')
@section('page-title', 'Dashboard')

@section('content')

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Banners List Table -->
        <div class="card">
            <div class="card-header border-bottom">

                <div class="d-flex justify-content-between align-items-center row pt-4 gap-4 gap-md-0">
                    <div class="col-md-4">
                        <h5 class="card-title mb-0">Banners List</h5>
                    </div>
                    <div class="col-md-4 text-md-end">

                        <a href="{{ route('admin.banners.create') }}" class="btn btn-primary gap-2">
                            <i class="icon-base ti tabler-plus icon-xs"></i>Add New Banner</a>

                    </div>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover table-bordered">
                    <thead class="border-top">
                        <tr class="text-center">
                            <th>Image</th>
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banners as $banner)
                            <tr class="text-center">
                                <td class="text-center">
                                   @if ($banner->image)
                                        <img src="{{ asset('/backend/images/banners/' . $banner->image) }}"
                                            alt="{{ $banner->title }}" style="max-width: 70px; max-height: 70px;">
                                    @else
                                        <img src="{{ asset('backend/images/no-image.jpg') }}" alt="{{ $banner->title }}"
                                            style="max-width: 70px; max-height: 70px;">
                                    @endif 
                                </td>
                                <td>{{ $banner->title }}</td>
                                <td>{{ $banner->sub_title }}</td>
                                <td>{!! $banner->description !!}</td>
                                <td>
                                    @if ($banner->status == 1)
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
                                                <a class="dropdown-item" href="{{ route('admin.banners.edit', $banner->id) }}">
                                                    <i class="icon-base ti tabler-pencil icon-xs me-2"></i> Edit
                                                </a>
                                            </li>
                                            <li>
                                                <button class="dropdown-item text-danger"
                                                    onclick="deleteBanner({{ $banner->id }})">
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
    </div>
    <!-- / Content -->

@endsection

@push('scripts')
    <script>
        function deleteBanner(id) {
            let url = "{{ route('admin.banners.destroy', ':id') }}";
            url = url.replace(':id', id);
            Swal.fire({
                title: 'Are you sure?',
                text: "You want to delete this Banner!",
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
                                    'Banner has been deleted.',
                                    'success'
                                ).then((result) => {
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }
                                })
                            } else {
                                Swal.fire(
                                    'Deleted!',
                                    'Banner has not been deleted.',
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
