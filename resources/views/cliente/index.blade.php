@extends('layout')
@section('content')
    <div class="container ">
        <div align="center">
            <p></p>
            <p></p>
            <h1> Lista de clientes </h1>

        </div>
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <td>Nit</td>
                <td>Nombre</td>
                <td>Fecha de Nacimiento</td>
                <td>Edad</td>
                <td>Correo</td>
                <td>Telefono</td>
                <td>Categoria</td>
                <td>Genero</td>
                <td>Departamento</td>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @forelse($clientes as $cliente)
                <tr>
                    <td>{{$cliente->nit}}</td>

                    <td>{{$cliente->nombre}}</td>

                    <td>{{$cliente->fecha_nacimiento}}</td>

                    <td>@if($cliente->fecha_nacimiento) {{Carbon\Carbon::parse($cliente->fecha_nacimiento)->diffInYears(now())}} @endif</td>


                    <td>{{$cliente->correo}}</td>

                    <td>{{$cliente->telefono}}</td>

                    <td>{{$cliente->categoria}}</td>

                    <td>{{$cliente->genero}}</td>

                    <td>{{$cliente->departamento}}</td>

                    <td class="d-flex justify-content-around">
                        <a class="btn btn-danger" href="javascript:void(0)" onclick="event.preventDefault();
                            document.getElementById('delete-cliente-{{$cliente->idcliente}}').submit();">
                            Eliminar
                        </a>
                        <form id="delete-cliente-{{$cliente->idcliente}}"
                              action="{{route('clientes.destroy',['cliente'=>$cliente->idcliente])}}" method="POST"
                              style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @empty
                <h5 class="m-4">No hay clientes registrados</h5>
            @endforelse
            </tbody>
        </table>
    </div>

@endsection
