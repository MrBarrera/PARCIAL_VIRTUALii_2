@extends('layout')
@section('content')
    <div class="container">
        <div align="center">
            <p></p>
            <p></p>
            <h1> Lista de Generos </h1>
        </div>
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <td>Generos</td>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @forelse($generos as $genero)
                <tr>
                    <td>{{$genero->descripcion}}</td>
                    <td class="d-flex justify-content-around">
                        <a class="btn btn-danger" href="javascript:void(0)" onclick="event.preventDefault();
                            document.getElementById('delete-genero-{{$genero->idgenero}}').submit();">
                            Eliminar
                        </a>
                        <form id="delete-genero-{{$genero->idgenero}}"
                              action="{{route('generos.destroy',['genero'=>$genero])}}" method="POST"
                              style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @empty
                <h5 class="m-4">No hay generos registrados</h5>
            @endforelse
            </tbody>
        </table>
    </div>

@endsection
