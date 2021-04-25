@extends('layout')
@section('content')
    <div class="container">

        <div align="center">
            <p></p>
            <p></p>
            <h1> Ingresar genero </h1>

        </div>
            <div class="">
                <form action="{{route('generos.store')}}" method="POST" novalidate>
                    @csrf
                    <div class="form-group">
                        <p></p>
                        <input class="form-control" type="text" name="descripcion" id="descripcion"
                               value="" maxlength="45" placeholder="Ingrese el genero">
                    </div>
                    <div class="d-flex justify-content-center my-4">
                        <button type="submit" class="btn" style="background-color: 	#ff4c84; " >Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
