<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{

    public function index()
    {
        $datos['inventario'] = Inventario::all();
        return view('inventario.index', $datos);
    }



    public function create()
    {
        return view('inventario.create');
    }


    public function store(Request $request)
    {
        $campos=[
            'cod_inv'=>'required|string|max:50',
            'categoria_activo'=>'required|string|max:100',
            'nombre'=>'required|string|max:150',
            'marca'=>'required|string|max:150',
            'modelo'=>'required|string|max:150',
            'serial'=>'required|string|max:150',
            'area_asignada'=>'required|string|max:255',
            'responsable'=>'required|string|max:150',
            'observacion'=>'required|string|max:255'
        ];

        $mensaje=[
            'required'=>':attribute es requerido'

        ];

        $this->validate($request,$campos,$mensaje);

        $datosInventario = request()->except('_token');
        Inventario::insert($datosInventario);
        return redirect('/inventario/');
    }


    public function show(Inventario $inventario)
    {
        //
    }


    public function edit($id)
    {
        $inventario = Inventario::findOrFail($id);
        return view('inventario.edit', compact('inventario'));
    }


    public function update(Request $request, $id)
    {
        $campos=[
            'cod_inv'=>'required|string|max:50',
            'categoria_activo'=>'required|string|max:100',
            'nombre'=>'required|string|max:150',
            'marca'=>'required|string|max:150',
            'modelo'=>'required|string|max:150',
            'serial'=>'required|string|max:150',
            'area_asignada'=>'required|string|max:255',
            'responsable'=>'required|string|max:150',
            'observacion'=>'required|string|max:255'

        ];

        $mensaje=[
            'required'=>':attribute es requerido'

        ];

        $this->validate($request,$campos,$mensaje);

        $datosInventario = request()->except(['_token', '_method']);
        Inventario::where('id','=',$id)->update($datosInventario);

        $inventario = Inventario::findOrFail($id);
        return redirect('/inventario/');
        //return view('inventario.edit', compact('inventario'));

    }


    public function destroy($id)
    {
        Inventario::destroy($id);
        return redirect('/inventario/')->with('eliminar','ok');
    }
}
