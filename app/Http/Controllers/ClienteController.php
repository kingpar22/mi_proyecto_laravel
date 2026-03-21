<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Plan;
use App\Http\Requests\StoreClienteRequest;

class ClienteController extends Controller
{
    // LISTAR
    public function index()
    {
        $clientes = Cliente::all();
        $planes = Plan::where('estado', 1)->get(); // 👈 IMPORTANTE

        return view('clientes.Lista_cliente', compact('clientes','planes'));
    }

    // FORM CREAR
    public function create()
    {
        $planes = Plan::where('estado', 1)->get();

        return view('clientes.Registro_clientes', compact('planes'));
    }

    // GUARDAR
   public function store(StoreClienteRequest $request)
{
    Cliente::create($request->all());

    return redirect()->route('clientes.index')
        ->with('success', 'Cliente guardado correctamente');
}

    // EDITAR
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        $planes = Plan::where('estado', 1)->get();

        return view('clientes.Registro_clientes', compact('cliente','planes'));
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