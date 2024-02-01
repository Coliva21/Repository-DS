<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function index()
    {
        $datos['usuarios'] = User::all();
        return view('usuarios.index', $datos);
    }



    public function create(Request $request )
    {
        return view('usuarios.create');

    }


    public function store(Request $request)
    {
        $campos=[
            'name'=>'required|string|max:150',
            'email'=>'required|string|max:150',
            'password'=>'required|string|max:150|',
        ];

        $mensaje=[
            'required'=>':attribute es requerido'

        ];

        $this->validate($request,$campos,$mensaje);

       $user = User::create([
            'name' => $request['name'],
            'email'=> $request['email'],
            'password'=> bcrypt($request['password']),
        ]);

        return redirect('/usuarios/');
    }



    public function edit($id)
    {
        $usuarios = User::findOrFail($id);
        return view('usuarios.edit', compact('usuarios'));
    }


    public function update(Request $request, $id,User $user)
    {
        $campos=[
            'name'=>'required|string|max:150',
            'email'=>'required|string|max:150',
            'password'=>'required|string|max:150',

        ];

        $mensaje=[
            'required'=>':attribute es requerido'

        ];

        $this->validate($request,$campos,$mensaje);


        $datosUsuarios = request()->except(['_token', '_method']);
        User::where('id','=',$id)->update($datosUsuarios);


        $usuarios = User::findOrFail($id);
        $usuarios->password = Hash::make($request->password);
        $usuarios->save();

        return redirect('/usuarios/');
    }


    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/usuarios/')->with('eliminarUsuario','ok');
    }








}
