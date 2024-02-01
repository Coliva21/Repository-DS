


   <div class="col-sm-6">
    <label for="cod_inv"  class="form-label">Cod_inv</label><br>
    <input type="text" class="form-control" name="cod_inv" value="{{ isset($inventario->cod_inv)?$inventario->cod_inv:old('cod_inv') }}" id="cod_inv">
    </div>

    <div class="col-sm-6">
    <label for="categoria_activo" class="form-label">Categoria</label><br>
    <input type="text" class="form-control" name="categoria_activo" value="{{ isset($inventario->categoria_activo)?$inventario->categoria_activo:old('categoria_activo') }}" id="categoria_activo">
    </div>

    <div class="col-sm-6">
    <label for="nombre" class="form-label">Nombre</label><br>
    <input type="text" class="form-control" name="nombre" value="{{ isset($inventario->nombre)?$inventario->nombre:old('nombre') }}" id="nombre">
    </div>

    <div class="col-sm-6">
    <label for="marca" class="form-label">Marca</label><br>
    <input type="text" class="form-control" name="marca" value="{{ isset($inventario->marca)?$inventario->marca:old('marca') }}" id="marca">
    </div>

    <div class="col-sm-6">
    <label for="modelo" class="form-label">Modelo</label><br>
    <input type="text" class="form-control" name="modelo" value="{{ isset($inventario->modelo)?$inventario->modelo:old('modelo') }}" id="modelo">
    </div>

    <div class="col-sm-6">
    <label for="serial" class="form-label">Serial</label><br>
    <input type="text" class="form-control" name="serial" value="{{ isset($inventario->serial)?$inventario->serial:old('serial') }}" id="serial">
    </div>

    <div class="col-sm-6">
    <label for="area_asignada" class="form-label">Area_Asignada</label><br>
    <input type="text" class="form-control" name="area_asignada" value="{{ isset($inventario->area_asignada)?$inventario->area_asignada:old('area_asignada') }}" id="area_asignada">
    </div>

    <div class="col-sm-6">
    <label for="responsable" class="form-label">Responsable</label><br>
    <input type="text" class="form-control" name="responsable" value="{{ isset($inventario->responsable)?$inventario->responsable:old('responsable') }}" id="responsable">
    </div>

    <div class="col-sm-12">
    <label for="observacion" class="form-label">Observacion</label><br>
    <input type="text" class="form-control" name="observacion" value="{{ isset($inventario->observacion)?$inventario->observacion:old('observacion') }}" id="observacion"><br>
    </div>


    <div class="col-sm-4  mx-auto">
    <input type="submit" class="btn btn-block btn-success" value=" {{ $modo }} Datos">
    </div>

    <div class="col-sm-4  mx-auto">
    <a class="btn btn-block btn-danger" href="{{ url('inventario') }}">Cancelar</a>
    </div>


