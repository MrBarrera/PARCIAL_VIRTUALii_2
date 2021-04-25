@extends('layout')
@section('content')
    <div class="container ">
        <div align="center">
            <p></p>
            <p></p>
            <h1> Crear nuevo cliente </h1>

        </div>
            <div class="">
                <form action="{{route('clientes.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input class="form-control" type="text"  name="nit"
                               value="" placeholder="Nit">
                    </div>
                    <p></p>

                    <div class="form-group">
                        <input class="form-control" type="text" name="nombre"
                               value="" placeholder="Nombre y apellido">
                    </div>
                    <p></p>

                    <div class="form-group">
                        <input class="form-control" type="email"  name="correo"
                               value="" placeholder="Correo electronico">
                    </div>
                    <p></p>

                    <div class="form-group">
                        <input class="form-control" type="text"  name="telefono"
                               value="" placeholder="Telefono">
                    </div>
                    <p></p>

                    <div class="form-group">
                        <label for="descripcion">Fecha de nacimiento</label>
                        <input class="form-control" type="date"
                               value=""  name="fecha_nacimiento" placeholder="Fecha de Nacimiento">
                    </div>
                    <p></p>


                    <div class="form-group">
                        <label for="descripcion">Categoria</label>
                        <div class="input-group mb-3">
                            <select class="custom-select form-control" id="inputGroupSelect01" name="categoria_idcategoria">
                                @foreach($categorias as $categoria)
                                    <option value="{{$categoria->idcategoria}}">{{$categoria->descripcion}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="descripcion">Genero</label>
                        <div class="input-group mb-3">
                            <select class="custom-select form-control" id="inputGroupSelect01" name="genero_idgenero">
                                @foreach($generos as $genero)
                                    <option data-tokens="{{$genero->descripcion}}"
                                            value="{{$genero->idgenero}}">{{$genero->descripcion}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Departamento</label>
                        <div class="input-group mb-3">
                            <select class="custom-select form-control" id="inputGroupSelect01" name="departamento_iddepartamento">
                                @foreach($departamentos as $departamento)
                                    <option value="{{$departamento->iddepartamento}}">{{$departamento->descripcion}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center my-4">
                        <button type="submit" class="btn" style="background-color: 	#ff4c84; " >Crear cliente</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
