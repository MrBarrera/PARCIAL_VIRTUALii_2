<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Http\Requests\DepartamentoPostRequest;
use Illuminate\Http\Request;

class ControllerDepartamento extends Controller
{
    public function index(Request $request)
    {
        $departamentos = Departamento::all();
        return view('departamento.index', compact('departamentos'));
    }

    public function create()
    {
        return view('departamento.create');
    }

    public function store(DepartamentoPostRequest $request)
    {
        $data = $request->validated();
        $departamento = Departamento::create($data);
        return redirect()->route('departamentos.index');
    }

    public function destroy(Request $request, Departamento $departamento)
    {
        $departamento->delete();
        return redirect()->route('departamentos.index');
    }
}
