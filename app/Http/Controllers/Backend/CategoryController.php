<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('backend.pages.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->description = $request->description;
        $category->status = $request->status;
        
        if ($request->hasFile('image')) {

            $imagePath = public_path('backend/images/category/');

            // Delete old image safely
            if (!empty($category->image)) {
                $oldImage = $imagePath . $category->image;

                if (file_exists($oldImage) && is_file($oldImage)) {
                    unlink($oldImage);
                }
            }

            $file = $request->file('image');
            $filename = time() . '_' . rand(1000, 9999) . '.' . $file->extension();
            $path = public_path('backend/images/category/' . $filename);
            $manager = new ImageManager(new Driver());
            $image = $manager->read($file);
            $image->resize(200, 200);
            $image->toWebp(80)->save($path);
            $category->image = $filename;
        }
        $category->save();

        notify()->success('Category created successfully!');
        return redirect()->route('admin.categories.index');
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
        $category = Category::find($id);
        return view('backend.pages.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $category = Category::find($id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->description = $request->description;
        $category->status = $request->status;
        
        if ($request->hasFile('image')) {

            $imagePath = public_path('backend/images/category/');

            // Delete old image safely
            if (!empty($category->image)) {
                $oldImage = $imagePath . $category->image;

                if (file_exists($oldImage) && is_file($oldImage)) {
                    unlink($oldImage);
                }
            }

            $file = $request->file('image');
            $filename = time() . '_' . rand(1000, 9999) . '.' . $file->extension();
            $path = public_path('backend/images/category/' . $filename);
            $manager = new ImageManager(new Driver());
            $image = $manager->read($file);
            $image->resize(200, 200);
            $image->toWebp(80)->save($path);
            $category->image = $filename;
        }
        $category->save();

        notify()->success('Category updated successfully!');
        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {

        $category->delete();

        notify()->success('Category deleted successfully!');
        return redirect()->route('admin.categories.index');
    }
}
