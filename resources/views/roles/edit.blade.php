@extends('adminlte::page')

@section('title', 'Editar Permisos')

@section('content_header')

    <h1>Asignar permisos al rol</h1>

@stop

@section('content')
<br>
<div class="card">
    <div class="card-body">
        <p class="h5">Nombre</p>
        <p class="form-control">{{$role->name}}</p>
        <br>
        <h5>Listado de permisos</h5>
        <br>
        {!! Form::model($role, ['route' =>  ['roles.update', $role], 'method' => 'put']) !!}
            @foreach ($permissions as $permisos)
                <div>
                    <label>
                        {!! Form::checkbox('permissions[]', $permisos->id, null, ['class' => 'mr-1']) !!}
                        {{$permisos->name}}
                    </label>
                </div>

            @endforeach
            <br>

            {!! Form::submit('Asignar permisos', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop
