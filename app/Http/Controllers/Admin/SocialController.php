<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Social;
use App\Http\Requests\StoreSocialRequest;
use App\Http\Requests\UpdateSocialRequest;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socials = Social::paginate(10);
        return view("admin.socials.index", compact("socials"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.socials.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSocialRequest $request)
    {
        $data = $request->validated();
        $result = Social::create($data);
        if ($result) {
            return redirect()->route("admin.social.index")->with("success", "Social links has been created successfully!");
        } else {
            return redirect()->back()->with("error", "Something went wrong");
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Social $social)
    {
        return view("admin.socials.edit", compact("social"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSocialRequest $request, Social $social)
    {
        $data = $request->validated();
        $result = $social->update($data);
        if ($result) {
            return redirect()->route('admin.social.index')->with('success', trans('Social Link has been updated successfully!'));
        } else {
            return redirect()->back()->with('error', trans('Something went wrong!'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Social $social)
    {
        $result = $social->delete();
        if ($result) {
            return redirect()->route('admin.social.index')->with('success', trans('Social Link has been deleted successfully!'));
        } else {
            return redirect()->back()->with('error', trans('Something went wrong!'));
        }
    }
}
