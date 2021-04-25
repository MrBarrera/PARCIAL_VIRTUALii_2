@extends('layout')
@section('content')
    <div class="container">
        <div align="center">
            <p></p>
            <p></p>
            <h1> Lista de categorias </h1>
        </div>
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <td>Nombres</td>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @forelse($categorias as $categoria)
                <tr>
                    <td>{{$categoria->descripcion}}</td>


                    <td class="d-flex justify-content-around">
                        <a class="btn btn-danger"  onclick="event.preventDefault();
                            document.getElementById('delete-categoria-{{$categoria->idcategoria}}').submit();">
                            Eliminar
                        </a>
                        <form id="delete-categoria-{{$categoria->idcategoria}}"
                              action="{{route('categorias.destroy',['categoria'=>$categoria])}}" method="POST"
                              style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @empty

                <h5 class="m-4">No hay categorias registradas</h5>

            @endforelse
            </tbody>
        </table>
    </div>

@endsection
