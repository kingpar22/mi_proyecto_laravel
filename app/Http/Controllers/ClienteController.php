<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    // LISTAR
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.Registro_clientes', compact('clientes'));
    }

    // FORM CREAR
    public function create()
    {
        return view('clientes.Registro_clientes');
    }

    // GUARDAR
    public function store(Request $request)
    {
        Cliente::create($request->all());
        return redirect()->route('clientes.index');
    }

    // EDITAR
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.Registro_clientes', compact('cliente'));
    }

    // ACTUALIZAR
    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());
        return redirect()->route('clientes.index');
    }

    // ELIMINAR
    public function destroy($id)
    {
        Cliente::destroy($id);
        return redirect()->route('clientes.index');
    }
}