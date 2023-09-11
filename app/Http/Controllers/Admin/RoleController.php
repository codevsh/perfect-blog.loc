<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
        $data = $request->validated();
        $result = Role::create($data);
        if ($result) {
            return redirect()->route('admin.role.index')->with('success', trans('Role created successfully!'));
        } else {
            return redirect()->back()->with('error', trans('Something went wrong'));
        }

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($locale, Role $role)
    {
        return view('admin.roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($locale, UpdateRoleRequest $request, Role $role)
    {
        $data = $request->validated();
        $result = $role->update($data);
        if ($result) {
            return redirect()->route('admin.role.index')->with('success', trans('Role has been updated successfully!'));
        } else {
            return redirect()->back()->with('error', trans('Something went wrong'));
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($locale, Role $role)
    {
        $result = $role->delete();
        if ($result) {
            return redirect()->route('admin.role.index')->with('success', trans('Role has been deleted successfully!'));
        } else {
            return redirect()->back()->with('error', trans('Something went wrong'));
        }
    }
}
