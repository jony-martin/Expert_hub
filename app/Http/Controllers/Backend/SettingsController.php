<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Setting::findOrFail(1);
        return view('backend.pages.settings.index', compact('setting'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $setting = Setting::first();

        if ($request->settings_section == 'business'){

            $setting->company_name = $request->company_name;
            $setting->email = $request->email;
            $setting->phone = $request->phone;
            $setting->address = $request->address;
            $setting->tax_collection = $request->tax_collection;
            $setting->tax_number = $request->tax_number;
            $setting->tax_type = $request->tax_type;

            if ($request->hasFile('logo')) {

            $imagePath = public_path('backend/images/settings/');

            // Delete old image safely
            if (!empty($setting->logo)) {
                $oldImage = $imagePath . $setting->logo;

                if (file_exists($oldImage) && is_file($oldImage)) {
                    unlink($oldImage);
                }
            }

            // Upload new image
            $file = $request->file('logo');
            $filename = time() . '_' . rand(1000, 9999) . '.webp';
            $path = $imagePath . $filename;

            $manager = new ImageManager(new Driver());
            $image = $manager->read($file);
            $image->cover(400, 400);
            $image->toWebp(80)->save($path);

            $setting->logo = $filename;

            }

            // upload favicon
            if ($request->hasFile('favicon')) {

            $imagePath = public_path('backend/images/settings/');

            // Delete old image safely
            if (!empty($setting->favicon)) {
                $oldImage = $imagePath . $setting->favicon;

                if (file_exists($oldImage) && is_file($oldImage)) {
                    unlink($oldImage);
                }
            }

            // Upload new image
            $file = $request->file('favicon');
            $filename = time() . '_' . rand(1000, 9999) . '.webp';
            $path = $imagePath . $filename;

            $manager = new ImageManager(new Driver());
            $image = $manager->read($file);
            $image->resize(100, 100);
            $image->toWebp(80)->save($path);

            $setting->favicon = $filename;

            }

        }elseif ($request->settings_section == 'system'){

            $setting->app_name = $request->app_name;
            $setting->app_url = $request->app_url;
            $setting->app_locale = $request->app_locale;
            $setting->timezone = $request->timezone;
            $setting->currency = $request->currency;
            $setting->time_format = $request->time_format;
            $setting->footer_text = $request->footer_text;
            $setting->copyright_text = $request->copyright_text;
            $setting->facebook = $request->facebook;
            $setting->youtube = $request->youtube;
            $setting->instagram = $request->instagram;
            $setting->twitter = $request->twitter;
            $setting->pinterest = $request->pinterest;

        }

        $setting->save();

        notify()->success('Settings Updated Successfully!');
        return redirect()->route('settings.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
