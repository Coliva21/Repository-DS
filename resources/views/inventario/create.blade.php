@extends('adminlte::page')

@section('title', 'Crear Registro')

@section('content')
<br>
<div class="container">
    <div class="card card-info">
        <div class=" card-header">
            <h3 class="card-title">Registro</h3>
        </div>
        <div class="card-body" >
            @if (count($errors)> 0)
                <div class="alert alert-danger" role="alert">
                    <i class="icon fas fa-ban"> Corrige los siguientes errores</i>
                    <ul>
                        @foreach ($errors->all() as $error )
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="row g-3" action="{{ url('/inventario') }}" method="post">
                <!-- CSRF Token -->
                @csrf
                @include('inventario.form',['modo'=>'Crear'])
            </form>
        </div>
    </div>
</div>

@stop


