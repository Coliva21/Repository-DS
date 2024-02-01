@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')

@stop

@section('content')
   <img class="portada" src="{{asset('vendor/adminlte/dist/img/Img1.jpg')}}" alt="portada">
@stop

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset("vendor/adminlte/dist/css/inicio.css")}}">
@endsection

