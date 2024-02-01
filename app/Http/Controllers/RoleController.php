<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
        $datos['roles'] = Role::all();
        return view('roles.index', $datos);
    }


    public function create()
    {
       $permissions = Permission::all();
        return view('roles.create', compact('permissions'));
    }


    public function store(Request $request)
    {
       $campos=[
            'name'=>'required|string|max:150',
        ];
        $mensaje=[
            'required'=>'Nombre del rol es requerido'
        ];
        $this->validate($request,$campos,$mensaje);

        $role = Role::create($request->all());
        $role->permissions()->sync($request->permissions);

        return redirect()->route('roles.index', $role);

    }


    public function edit($id)
    {
        $permissions = Permission::all();
        $role = Role::findOrFail($id);
        return view('roles.edit', compact('permissions', 'role'));
    }


    public function update(Request $request, Role $role)
    {
        $role->permissions()->sync($request->permissions);
        return redirect()->route('roles.index', $role);
    }


    public function destroy($id)
    {
        Role::destroy($id);
        return redirect('/roles/')->with('eliminarRol','ok');
    }
}
