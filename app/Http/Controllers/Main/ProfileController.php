<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('main.profile.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($locale, User $user)
    {
        return view('main.profile.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($locale, Request $request, User $user)
    {
        // $data = $request->validate([
        //     'profile_image' => 'image|max:1024',
        //     'name' => 'required|string',
        //     'email' => 'required|string|unique:users,email,' . $user
        // ]);
        // $user->profile_image = $data
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
