<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserRoleController extends Controller
{

    public function index()
    {
        $usuario['rolusuario'] = User::all();
        $rol['roles']= Role::all();
        return view('rolusuario.index',$usuario,$rol);
    }


    public function edit(User $user, $id)
    {
        $roles = Role::all();
        $user = User::findOrFail($id);
        return view('rolusuario.edit', compact('roles','user'));
    }


    public function update(Request $request, $id)
    {
       $user = User::findOrFail($id);
       $user->roles()->sync($request->roles);
       return redirect()->route('rolusuario.index', $user);
    }


}
