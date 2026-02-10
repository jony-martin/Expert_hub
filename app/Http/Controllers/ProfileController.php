<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('backend.pages.profile.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        $user = User::find($id);
        return view('backend.pages.profile.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $user = User::find($id);

        if ($request->profile_section == 'detail') {

            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . $id,
                'phone' => 'required|string|max:255',
                'address' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'current_password' => 'required|string',
            ], [
                'name.required' => 'Name is required',
                'email.required' => 'Email is required',
                'phone.required' => 'Phone is required',
                'address.required' => 'Address is required',
                'image.image' => 'Image must be an image',
                'image.mimes' => 'Image must be a file of type: jpeg, png, jpg, gif, svg',
                'image.max' => 'Image must not be greater than 2MB',
                'current_password.required' => 'Current password is required',
            ]);

            if ($validator->fails()) {
                notify()->error($validator->errors()->first());
                return back()->withErrors($validator)->withInput();
            }


            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->detail = $request->detail;

            if ($request->hasFile('image')) {

                $imagePath = public_path('backend/images/users/');

                // Delete old image safely
                if (!empty($user->image)) {
                    $oldImage = $imagePath . $user->image;

                    if (file_exists($oldImage) && is_file($oldImage)) {
                        unlink($oldImage);
                    }
                }

                // Upload new image
                $file = $request->file('image');
                $filename = time() . '_' . rand(1000, 9999) . '.webp';
                $path = $imagePath . $filename;

                $manager = new ImageManager(new Driver());
                $image = $manager->read($file);
                $image->cover(500, 400);
                $image->toWebp(80)->save($path);

                $user->image = $filename;
            }

            if (!Hash::check($request->current_password, $user->password)) {
                notify()->error('Current password is incorrect!');
                return back();
            }
        } elseif ($request->profile_section == 'password') {

            if ($request->filled('new_password')) {
                // check current password
                if (!Hash::check($request->current_password, $user->password)) {
                    notify()->error('Current password is incorrect!');
                    return back();
                }

                //new_password and confirm_password
                if ($request->new_password != $request->confirm_password) {
                    notify()->error('New password and confirm password does not match!');
                    return back();
                }

                //new_password length
                if (strlen($request->new_password) < 8) {
                    notify()->error('New password must be at least 8 characters!');
                    return back();
                }

                if ($request->filled('new_password')) {
                    $user->password = Hash::make($request->new_password);
                }
            }
        }

        $user->save();

        notify()->success('Profile Updated Successfully!');
        return redirect()->route('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if ($user->id == 1) {
            notify()->error('Admin can not be Deleted!');
            return back();
        }

        $user->delete();

        notify()->success('Profile Deleted Successfully!');
        return redirect()->route('register');
    }
}
