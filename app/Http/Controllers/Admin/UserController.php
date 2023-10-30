<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(15);
        return view('admin.users.index', compact('users'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $data = $request->validated();
        $result = $user->update($data);
        if ($result) {
            return redirect()->route('admin.user.index')->with('success', trans('Role has been updated successfully!'));
        } else {
            return redirect()->back()->with('error', trans('Something went wrong'));
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $result = $user->delete();
        if ($result) {
            return redirect()->route('admin.user.index')->with('success', trans('User has been deleted successfully!'));
        } else {
            return redirect()->back()->with('error', trans('Something went wrong'));
        }
    }
}
