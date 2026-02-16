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

                            <a href="" class="btn btn-primary gap-2 offcanvasEcommerceCategoryListBtn" data-bs-toggle="offcanvas"
                             data-bs-target="#offcanvasEcommerceCategoryList" aria-controls="offcanvasEcommerceCategoryList">
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
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr class="text-center">
                                <td class="text-center">

                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>

                                </td>
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon btn-light" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="icon-base ti tabler-dots-vertical icon-xs"></i>
                                        </button>

                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="">
                                                    <i class="icon-base ti tabler-pencil icon-xs me-2"></i> Edit
                                                </a>
                                            </li>
                                            <li>
                                                <button class="dropdown-item text-danger" onclick="userDelete()">
                                                    <i class="icon-base ti tabler-trash icon-xs me-2"></i> Delete
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Offcanvas to add new customer -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceCategoryList"
                aria-labelledby="offcanvasEcommerceCategoryListLabel">
                <!-- Offcanvas Header -->
                <div class="offcanvas-header py-6">
                    <h5 id="offcanvasEcommerceCategoryListLabel" class="offcanvas-title">
                        Add Category
                    </h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <!-- Offcanvas Body -->
                <div class="offcanvas-body border-top">
                    <form class="pt-0" id="eCommerceCategoryListForm" onsubmit="return true;">
                        <!-- Title -->
                        <div class="mb-6 form-control-validation">
                            <label class="form-label" for="ecommerce-category-title">Title</label>
                            <input type="text" class="form-control" id="ecommerce-category-title"
                                placeholder="Enter category title" name="categoryTitle" aria-label="category title" />
                        </div>
                        <!-- Slug -->
                        <div class="mb-6 form-control-validation">
                            <label class="form-label" for="ecommerce-category-slug">Slug</label>
                            <input type="text" id="ecommerce-category-slug" class="form-control" placeholder="Enter slug"
                                aria-label="slug" name="slug" />
                        </div>
                        <!-- Image -->
                        <div class="mb-6">
                            <label class="form-label" for="ecommerce-category-image">Attachment</label>
                            <input class="form-control" type="file" id="ecommerce-category-image" />
                        </div>
                        <!-- Parent category -->
                        <div class="mb-6 ecommerce-select2-dropdown">
                            <label class="form-label" for="ecommerce-category-parent-category">Parent category</label>
                            <select id="ecommerce-category-parent-category" class="select2 form-select"
                                data-placeholder="Select parent category">
                                <option value="">Select parent Category</option>
                                <option value="Household">Household</option>
                                <option value="Management">Management</option>
                                <option value="Electronics">Electronics</option>
                                <option value="Office">Office</option>
                                <option value="Automotive">Automotive</option>
                            </select>
                        </div>
                        <!-- Description -->
                        <div class="mb-6">
                            <label class="form-label">Description</label>
                            <div class="form-control p-0 py-1">
                                <div class="comment-editor border-0" id="ecommerce-category-description"></div>
                                <div class="comment-toolbar border-0 rounded">
                                    <div class="d-flex justify-content-end">
                                        <span class="ql-formats me-0">
                                            <button class="ql-bold"></button>
                                            <button class="ql-italic"></button>
                                            <button class="ql-underline"></button>
                                            <button class="ql-list" value="ordered"></button>
                                            <button class="ql-list" value="bullet"></button>
                                            <button class="ql-link"></button>
                                            <button class="ql-image"></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Status -->
                        <div class="mb-6 ecommerce-select2-dropdown">
                            <label class="form-label">Select category status</label>
                            <select id="ecommerce-category-status" class="select2 form-select"
                                data-placeholder="Select category status">
                                <option value="">Select category status</option>
                                <option value="Scheduled">Scheduled</option>
                                <option value="Publish">Publish</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>
                        <!-- Submit and reset -->
                        <div class="mb-6">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">
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
