@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')

    <h1>Lista de Roles</h1>

@stop

@section('content')

<div class="card">
    <div class="card-header text-right">
        <a class="btn btn-success btn-sm "  href="{{ url('roles/create') }}">Nuevo Rol</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="rol" class="table table-hover table-bordered">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>ID</th>
                        <th>Rol</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $roles as $roles )
                        <tr>
                            <td>{{$roles->id}}</td>
                            <td>{{$roles->name}}</td>
                            <td class="text-center">
                                <a href="{{ route('roles.edit', $roles) }}" class="btn btn-primary btn-sm">Editar</a>

                                <form action="{{ route('roles.destroy', $roles) }}" class="d-inline rol-delete" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}

                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
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

@endsection

@section('js')

    <!--JS local -->
    <script src="{{asset("vendor/adminlte/dist/js/rol_app.js")}}"></script>

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

     <!--sweetalert2 -->
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

     @if(session('eliminarRol') == 'ok')
     <script>
         Swal.fire(
             '¡Eliminado!',
             'Su archivo ha sido eliminado.',
             'success'
         )
     </script>
     @endif
@endsection

