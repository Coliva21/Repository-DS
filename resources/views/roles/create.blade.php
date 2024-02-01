@extends('adminlte::page')

@section('title', 'Crear Roles')

@section('content')
<br>
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'roles.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del rol']) !!}
                <br>
                <h5>Listado de permisos</h5>
                @if (count($errors)> 0)
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error )
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>

            @foreach ($permissions as $permisos)
            <div>
                <label>
                    {!! Form::checkbox('permissions[]', $permisos->id, null, ['class' => 'mr-1']) !!}
                    {{$permisos->name}}
                </label>
            </div>
            @endforeach
            <br>
            {!! Form::submit('Crear Rol', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>

@stop


