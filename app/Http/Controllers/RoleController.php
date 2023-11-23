<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:roles-list|roles-create|roles-edit|roles-delete', ['only' => ['index','store']]);
        $this->middleware('permission:roles-create', ['only' => ['create','store']]);
        $this->middleware('permission:roles-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:roles-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $roles = Role::all();

        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        return view('roles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles,name',
        ]);

        Role::create(['name' => $request->name]);

        return redirect()->route('roles.index')->with('success', 'Role created successfully!');
    }

    public function edit(Role $role)
    {
        return view('roles.edit', compact('role'));
    }

    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|unique:roles,name,' . $role->id,
        ]);

        $role->name = $request->name;
        $role->save();

        return redirect()->route('roles.index')->with('success', 'Role updated successfully!');
    }

    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('roles.index')->with('success', 'Role deleted successfully!');
    }
}
