@extends('layouts.plantillabase')

@section('css')

    <link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@endsection

@section('contenido')

    <a href="articulos/create" class="btn btn-primary mb-3">CREATE</a>

    <table  id="example"  class="table table-striped table-bordered  shadow-lg mt-4" style="width:100%">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Código</th>
                <th scope="col">Descripción</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Categoria</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($articulos as $articulo)
            <tr>
                <td>{{ $articulo->id }}</td>
                <td>{{ $articulo->codigo }}</td>
                <td>{{ $articulo->description }}</td>
                <td>{{ $articulo->cantidad }}</td>
                <td>{{ $articulo->price }}</td>
                <td>{{ $articulo->category }}</td>
                <td>
                    <form action="{{ route('articulos.destroy', $articulo->id) }}" method="post">
                        <a  class="btn btn-primary" href="articulos/{{ $articulo->id }}/edit">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    @section('script')

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#example').DataTable({
                    "lengthMenu": [[5,10, -1], [5,10,50, "ALL"]]
                });
            } );
        </script>

    @endsection


@endsection



