@extends('layout')
@section('content')
    <div class="container ">
        <div align="center">
            <p></p>
            <p></p>
            <h1> Lista de Departamentos </h1>

        </div>
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombres</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
            @forelse($departamentos as $departamento)
                <tr>
                    <td>{{$departamento->descripcion}}</td>
                    <td class="d-flex justify-content-around">
                        <a class="btn btn-danger" href="javascript:void(0)" onclick="event.preventDefault();
                            document.getElementById('delete-departamento-{{$departamento->iddepartamento}}').submit();">
                            Eliminar
                        </a>
                        <form id="delete-departamento-{{$departamento->iddepartamento}}"
                              action="{{route('departamentos.destroy',['departamento'=>$departamento])}}" method="POST"
                              style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @empty

                <h5 class="m-4">No hay departamentos registrados</h5>

            @endforelse
            </tbody>
        </table>
    </div>

@endsection
