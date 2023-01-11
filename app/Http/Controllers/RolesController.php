<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function create()
    {
        $role = new Role();
        $data = [
            'name' => 'anton',
        ];
        $role->fill($data);
        // $role->name = 'dima';
        $role->save();
        return response()->json(true);
    }

    public function index()
    {
        $role = Role::find(11)->update([
            'name' => 'tosha'
        ]);
        // $role->name = 'dima';
        // $role->save();
        return $role;
    }
}
