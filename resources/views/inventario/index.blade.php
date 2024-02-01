@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')

    <h1>Inventario de activos</h1>

@stop

@section('content')

<div class="card">
    <div class="card-header text-right">
        <a class="btn btn-success btn-sm "  href="{{ url('inventario/create') }}">Nuevo Registro</a>
    </div>
    <div class="card-body" >
        <div class="table-responsive">
            <table id="activos" class="table table-hover table-bordered">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Cod_inv</th>
                        <th>Categoria</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Serial</th>
                        <th>Area_Asignada</th>
                        <th>Responsable</th>
                        <th>Observación</th>
                        <th>Fecha_registro</th>
                        <th>Fecha_actulización</th>
                        <th>Acciones</th>
                    </tr>

                </thead>

                <tbody>
                    @foreach ($inventario as $inventario)
                        <tr>
                            <td>{{ $inventario->cod_inv }}</td>
                            <td>{{ $inventario->categoria_activo }}</td>
                            <td>{{ $inventario->nombre }}</td>
                            <td>{{ $inventario->marca }}</td>
                            <td>{{ $inventario->modelo }}</td>
                            <td>{{ $inventario->serial }}</td>
                            <td>{{ $inventario->area_asignada }}</td>
                            <td>{{ $inventario->responsable }}</td>
                            <td>{{ $inventario->observacion }}</td>
                            <td>{{ $inventario->created_at }}</td>
                            <td>{{ $inventario->updated_at }}</td>
                            <td>
                                <a href="{{ url('/inventario/' . $inventario->id . '/edit') }}" class="btn btn-warning btn-sm fa-regular fa-pen-to-square"></a>

                                <form action="{{ url('/inventario/'. $inventario->id) }}" class="d-inline from-delete" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}

                                    <button class="btn btn-danger btn-sm fa-solid fa-trash" type="submit"></button>
                                </form>
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
    <link rel="stylesheet" type="text/css" href="{{asset("app.css")}}">
@endsection

@section('js')
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

    <script type="text/javascript" src="dataTables.scrollingPagination.js"></script>

    <!--JS local -->
    <script src="{{asset("vendor/adminlte/dist/js/inv_app.js")}}"></script>

    <!--fontawesome iconos -->
    <script src="https://kit.fontawesome.com/da45d772c3.js" crossorigin="anonymous"></script>

    <!--sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('eliminar') == 'ok')
    <script>
        Swal.fire(
            '¡Eliminado!',
            'Su archivo ha sido eliminado.',
            'success'
        )
    </script>
    @endif


@endsection



