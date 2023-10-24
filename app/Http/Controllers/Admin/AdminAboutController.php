<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;

class AdminAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::all();
        return view("admin.about.index", compact('abouts'));
    }

    /**
     * Display the specified resource.
     */
    public function show($locale, About $about)
    {
        return view('admin.about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($locale, About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($locale, UpdateAboutRequest $request, About $about)
    {
        $data = $request->validated();
        // dd($data);
        $file_destination = public_path('storage\\' . $about->image);
        if (isset($data['image']) && $data['image'] != null) {
            if (File::exists($file_destination)) {
                File::delete($file_destination);
            }
            $image_about = $request->file('image');
            $fileImage = $image_about->getClientOriginalName();
            $file_image_ext = $image_about->getClientOriginalExtension();
            $resize_image_about = Image::make($image_about->getRealPath())->resize(640, 465, function ($constraint) {
                $constraint->aspectRatio();
            })->fit(640, 465);
            $new_image_about = 'about' . time() . '.' . $file_image_ext;
            $resize_image_about->save(public_path('storage/' . $new_image_about));
            $data['image'] = $new_image_about;
        } else {
            $data['image'] = $about->image;
        }
        $about->update($data);
        return redirect(route('admin.about.show', compact('about')));
    }


}
