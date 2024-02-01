@extends('adminlte::page')

@section('title', 'Asignar Rol')

@section('content_header')
<h1>Asignar rol</h1>

@stop
@section('content')
<div class="card">
    <div class="card-body">
        <p class="h5">Nombre</p>
        <p class="form-control">{{$user->name}}</p>
        <br>
        <h5>Listado de roles</h5>
        <br>
        {!! Form::model($user, ['route' =>  ['rolusuario.update', $user], 'method' => 'put']) !!}
            @foreach ($roles as $role)
                <div>
                    <label>
                        {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                        {{$role->name}}
                    </label>
                </div>

            @endforeach
            <br>

            {!! Form::submit('Asignar Rol', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

