@extends('backend.layouts.main')
@section('page-title', 'Dashboard')

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Product List Table -->
        <div class="card">
            <div class="card-header border-bottom">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">
                <div class="d-flex flex-column justify-content-center">
                    <h4 class="mb-1">Product List</h4>
                </div>
                <div class="d-flex align-content-center flex-wrap gap-4">
                    <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
                        Add Product
                    </a>
                </div>
            </div>
            </div>
            <div class="card-datatable">
                <table class="common-products table" data-url="{{ route('admin.products.index') }}"
                    data-columns='[
                { "data": "name" },
                { "data": "category" },
                { "data": "base_price" },
                { "data": "status" },
                { "data": "actions" }
                ]'>
                    <thead class="border-top">
                        <tr>
                            <th>product</th>
                            <th>category</th>
                            <th>price</th>
                            <th>status</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <!-- / Content -->
    <div class="content-backdrop fade"></div>
@endsection
@push('scripts')
    @include('backend.pages.products.script')
@endpush
