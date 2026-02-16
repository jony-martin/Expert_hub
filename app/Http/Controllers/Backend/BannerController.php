<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::all();
        return view('backend.pages.banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.banners.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|string|max:255',
                'sub_title' => 'required|string|max:255',
                'button_name' => 'required|string|max:255',
                'button_url' => 'required|string|max:255',
                'status' => 'required',
                'description' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'title.required' => 'Title is required',
                'sub_title.required' => 'Sub Title is required',
                'button_name.required' => 'Button Name is required',
                'button_url.required' => 'Button URL is required',
                'status.required' => 'Status is required',
                'description.string' => 'Description must be a string',
                'image.image' => 'Image must be an image',
                'image.mimes' => 'Image must be a file of type: jpeg, png, jpg, gif, svg',
                'image.max' => 'Image must not be greater than 2MB',
                
            ]
        );
        $user = new Banner();
        $user->title = $request->title;
        $user->sub_title = $request->sub_title;
        $user->button_name = $request->button_name;
        $user->button_url = $request->button_url;
        $user->status = $request->status;
        $user->description = $request->description;
        $user->slug = $request->slug;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . rand(1000, 9999) . '.' . $file->extension();
            $path = public_path('backend/images/banners/' . $filename);
            $manager = new ImageManager(new Driver());
            $image = $manager->read($file);
            $image->resize(600, 400);
            $image->toWebp(80)->save($path);
            $user->image = $filename;
        }

        $user->save();

        notify()->success('Banner Created Successfully!');
        return redirect()->route('admin.banners.index');
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
        $banner = Banner::findOrFail($id);
        return view('backend.pages.banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validation
        $request->validate(
            [
                'title' => 'required|string|max:255',
                'sub_title' => 'required|string|max:255',
                'button_name' => 'required|string|max:255',
                'button_url' => 'required|string|max:255',
                'status' => 'required',
                'description' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'title.required' => 'Title is required',
                'sub_title.required' => 'Sub Title is required',
                'button_name.required' => 'Button Name is required',
                'button_url.required' => 'Button URL is required',
                'status.required' => 'Status is required',
                'description.string' => 'Description must be a string',
                'image.image' => 'Image must be an image',
                'image.mimes' => 'Image must be a file of type: jpeg, png, jpg, gif, svg',
                'image.max' => 'Image must not be greater than 2MB',
                
            ]
        );
        
        $banner = Banner::findOrFail($id);
        $banner->title = $request->title;
        $banner->sub_title = $request->sub_title;
        $banner->button_name = $request->button_name;
        $banner->button_url = $request->button_url;
        $banner->status = $request->status;
        $banner->description = $request->description;
        $banner->slug = $request->slug;

        if ($request->hasFile('image')) {

            $imagePath = public_path('backend/images/banners/');

            // Delete old image safely
            if (!empty($banner->image)) {
                $oldImage = $imagePath . $banner->image;

                if (file_exists($oldImage) && is_file($oldImage)) {
                    unlink($oldImage);
                }
            }

            $file = $request->file('image');
            $filename = time() . '_' . rand(1000, 9999) . '.' . $file->extension();
            $path = public_path('backend/images/banners/' . $filename);
            $manager = new ImageManager(new Driver());
            $image = $manager->read($file);
            $image->resize(600, 400);
            $image->toWebp(80)->save($path);
            $banner->image = $filename;
        }   

        $banner->save();

        notify()->success('Banner Updated Successfully!');
        return redirect()->route('admin.banners.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
 
        // Delete image file if exists
        $imagePath = public_path('backend/images/banners/');
        if (!empty($banner->image)) {
            $oldImage = $imagePath . $banner->image;

            if (file_exists($oldImage) && is_file($oldImage)) {
                unlink($oldImage);
            }
        }

        // Delete banner
        $banner->delete();

        return response()->json(['status' => true]);
    }
}
