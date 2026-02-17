<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

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
        $categories = Category::where('status', 1)->get();
        return view('backend.pages.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255|unique:products,name',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|boolean',
            'tag' => 'nullable|string|max:255',
            'size' => 'nullable|array',
            'size.*' => 'string|max:10',  // Validate each size value
            'color' => 'nullable|array',
            'color.*' => 'string|max:7',  // Validate hex colors (e.g., #FFFFFF)
            'base_price' => 'required|numeric|min:0',
            'discount_price' => 'nullable|numeric|min:0|lte:base_price',
            'description' => 'nullable|string',
            'image' => 'nullable|array',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',  // Validate each image (2MB max)
            'stock' => 'nullable|integer|min:0',  // Optional, defaults to 0
            'sku' => 'nullable|string|max:255|unique:products,sku',
        ]);

        // Handle multiple image uploads
        $imagePaths = [];
        if ($request->hasFile('image')) {
            $uploadPath = public_path('backend/images/products');

            // Ensure the directory exists
            if (!File::exists($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true);
            }

            foreach ($request->file('image') as $file) {
                // Generate a unique filename to avoid overwrites
                $filename = time() . '_' . $file->getClientOriginalName();

                // Move the file to the public directory
                $file->move($uploadPath, $filename);

                // Store the relative path (from public/)
                $imagePaths[] = 'backend/images/products/' . $filename;
            }
        }
        $imagesString = implode(',', $imagePaths);
        // Process size and color arrays
        $sizesString = $request->size ? implode(',', $request->size) : null;
        $colorsString = $request->color ? implode(',', $request->color) : null;

        // Generate slug from name
        $slug = Str::slug($request->name);

        // Create the product
        Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'status' => $request->status,
            'tag' => $request->tag,
            'size' => $sizesString,
            'color' => $colorsString,
            'description' => $request->description,
            'base_price' => $request->base_price,
            'discount_price' => $request->discount_price,
            'image' => $imagesString,
            'stock' => $request->stock ?? 0,
            'sku' => $request->sku,
            'slug' => $slug,
        ]);

        // Redirect back with success message
        notify()->success('Product created successfully!');
        return redirect()->route('admin.products.index');
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
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('backend.pages.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255|unique:products,name,' . $product->id,
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|boolean',
            'tag' => 'nullable|string|max:255',
            'size' => 'nullable|array',
            'size.*' => 'string|max:10',
            'color' => 'nullable|array',
            'color.*' => 'string|max:7',
            'base_price' => 'required|numeric|min:0',
            'discount_price' => 'nullable|numeric|min:0|lte:base_price',
            'description' => 'nullable|string',
            'image' => 'nullable|array',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'stock' => 'nullable|integer|min:0',
            'sku' => 'nullable|string|max:255|unique:products,sku,' . $product->id,
        ]);

        // Handle multiple image uploads
        $imagePaths = [];
        if ($request->hasFile('image')) {
            $uploadPath = public_path('backend/images/products');
            if (!File::exists($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true);
            }
            foreach ($request->file('image') as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move($uploadPath, $filename);
                $imagePaths[] = 'backend/images/products/' . $filename;
            }
        }
        $imagesString = implode(',', $imagePaths);

        // Process size and color arrays
        $sizesString = $request->size ? implode(',', $request->size) : $product->size;
        $colorsString = $request->color ? implode(',', $request->color) : $product->color;

        // Regenerate slug
        $slug = Str::slug($request->name);

        // Update the product
        $product->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'status' => $request->status,
            'tag' => $request->tag,
            'size' => $sizesString,
            'color' => $colorsString,
            'description' => $request->description,
            'base_price' => $request->base_price,
            'discount_price' => $request->discount_price,
            'image' => $imagesString,
            'stock' => $request->stock ?? $product->stock,
            'sku' => $request->sku,
            'slug' => $slug,
        ]);

        // Redirect back with success message
        notify()->success('Product updated successfully!');
        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // Delete the product
        $product->delete();

        // Redirect back with success message
        notify()->success('Product deleted successfully!');
        return redirect()->route('admin.products.index');
    }


    private function data()
    {
        return Product::get()->map(function ($product) {
            // Handle image (render first image as thumbnail)
            $product->image = $product->image ? '<img src="' . asset(explode(',', $product->image)[0]) . '" width="50" alt="Product Image" />' : 'No Image';

            // Handle status (convert boolean to readable text)
            $product->status = $product->status ? 'Published' : 'Inactive';

            // Actions (HTML for dropdown)
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

    public function quickview($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }
}
