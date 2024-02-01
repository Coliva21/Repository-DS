@extends('adminlte::page')

@section('title', 'Rol Usuario')

@section('content_header')

    <h1>Usuarios</h1>

@stop

@section('content')

<div class="card">
    <div class="card-body" >
        <div class="table-responsive">
            <table id="roluser" class="table table-hover table-bordered">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Acciones</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($rolusuario as $rolusuario)
                            <tr>
                                <td>{{ $rolusuario->id }}</td>
                                <td>{{ $rolusuario->name }}</td>
                                <td class="text-center">
                                    <a href="{{ route("rolusuario.edit", $rolusuario) }}" class="btn btn-primary btn-sm">Signar Rol</a>
                                </td>
                            </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

@section('css')
   <!--Datatable -->
   <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.css" rel="stylesheet"/>
   <link href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.bootstrap5.css" rel="stylesheet"/>

    <!--CSS local -->

@endsection

@section('js')

    <!--JS local -->
    <script src="{{asset("vendor/adminlte/dist/js/roluser_app.js")}}"></script>

    <!--Datatable -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.js"></script>

    <!--fontawesome iconos -->
    <script src="https://kit.fontawesome.com/da45d772c3.js" crossorigin="anonymous"></script>

@endsection
