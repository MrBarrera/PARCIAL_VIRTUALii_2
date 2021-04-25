<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Cliente;
use App\Departamento;
use App\Genero;
use App\Http\Requests\ClientePostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerCliente extends Controller
{
    public function index(Request $request)
    {

        $clientes = DB::table('cliente')
            ->join('categoria', 'cliente.categoria_idcategoria','=', 'categoria.idcategoria')
            ->join('genero', 'cliente.categoria_idcategoria','=', 'genero.idgenero')
            ->join('departamento', 'cliente.departamento_iddepartamento','=', 'departamento.iddepartamento')
            ->select('cliente.*', 'categoria.descripcion as categoria' , 'departamento.descripcion as departamento' ,'genero.descripcion as genero' )->get();
        return view('cliente.index', compact('clientes'));


    }

    public function create()
    {
        $generos = Genero::all();
        $categorias = Categoria::all();
        $departamentos = Departamento::all();
        return view('cliente.create',compact('departamentos','categorias','generos'));
    }

    public function store(ClientePostRequest $request)
    {
         $data = $request->validated();
        $cliente = Cliente::create($data);
        return redirect()->route('clientes.index');
    }

    public function destroy(Request $request, Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}
