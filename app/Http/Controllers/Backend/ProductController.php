<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return response()->json($this->data());
        }
        return view('backend.pages.products.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    private function data()
    {
        return Product::get()->map(function ($product) {
            $product->name = $product->name;
            $product->category = $product->category_id;
            $product->base_price = $product->base_price;
            $product->status = $product->status;
            $product->actions = '<div class="dropdown">
                                <button class="btn btn-sm btn-icon btn-light" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="icon-base ti tabler-dots-vertical icon-xs"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="' . route('admin.products.edit', $product->id) . '">
                                            <i class="icon-base ti tabler-pencil icon-xs me-2"></i> Edit
                                        </a>
                                    </li>
                                    <li>
                                        <button class="dropdown-item text-danger"
                                            onclick="productDelete(' . $product->id . ')">
                                            <i class="icon-base ti tabler-trash icon-xs me-2"></i> Delete
                                        </button>
                                    </li>
                                </ul>
                            </div>';

            return $product;
        })->toArray();
    }
}
