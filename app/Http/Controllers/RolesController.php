<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function create(Request $request)
    {  
        Role::create($request->only('name'));
        return response()->json(true);
    }

    public function index()
    {
        $role = Role::find(11)->update([
            'name' => 'tosha'
        ]);
        // $role->name = 'dima';
        // $role->save();
        Role::truncate();
        return $role;
    }

    public function show(Role $role)
    {
        // $role = Role::find($id);
        // if (empty($role)) {
        //     return response([], 404);
        // }
        return response()->json(['data' => $role]);
    }

    public function update(Role $role, Request $request)
    {
        // dd($request->name);
        // $role->fill(['name' => $request->name]);
        // $role->save();
        $role->update($request->only('name'));
        return response()->json($role);
    }

    public function users(Role $role)
    {
        return $role->users->map->name;
        // return $role->users()->orderByDesc('id')->first();
    }
}
