@extends('layouts.app')

@section('title', 'Lista de Clientes')

@section('content')
<h1><i class="fas fa-users"></i> Lista de Clientes</h1>

<!-- Filtros superiores -->
<div class="card">
    <select>
      <option>Seleccione una Zona</option>
    </select>
    <a href="{{ route('clientes.create') }}" class="btn green">
        <i class="fas fa-plus"></i> Agregar Cliente
    </a>
</div>

<div class="card">
    <label>Acción:</label>
    <select>
      <option>-----------</option>
    </select>
    <button class="btn blue"><i class="fas fa-play"></i> Ejecutar</button>
    <span class="muted">0 seleccionados/as</span>
</div>

<!-- Barra de acciones -->
<div class="table-toolbar">
    <div class="left">
        <button class="btn green small">Mostrar 10 registros</button>
        <button class="btn light small"><i class="fas fa-copy"></i></button>
        <button class="btn light small"><i class="fas fa-file-excel"></i></button>
        <button class="btn light small"><i class="fas fa-table"></i> Tabla</button>
    </div>

    <div class="right">
        <span>Buscar:</span>
        <input type="text">
    </div>
</div>

<!-- Tabla -->
<div class="table-container">
    <table>
        <thead>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Código Postal</th>
                <th>Referencia</th>
                <th>Email</th>
                <th>Plan</th>
                <th>Usuario PPPoE</th>
                <th>Password PPPoE</th>
                <th>Fecha Instalación</th>
                <th>Fecha Corte</th>
                <th>Último Pago</th>
                <th>Estado</th>
                <th>Observaciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td><input type="checkbox"></td>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->apellido }}</td>
                <td>{{ $cliente->telefono }}</td>
                <td>{{ $cliente->direccion }}</td>
                <td>{{ $cliente->codigo_postal }}</td>
                <td>{{ $cliente->referencia }}</td>
                <td>{{ $cliente->email }}</td>
                <td>{{ $cliente->plan ? $cliente->plan->nombre : '-' }}</td>
                <td>{{ $cliente->usuario_pppoe }}</td>
                <td>{{ $cliente->password_pppoe }}</td>
                <td>{{ $cliente->fecha_instalacion }}</td>
                <td>{{ $cliente->fecha_corte }}</td>
                <td>{{ $cliente->ultimo_pago }}</td>
                <td>
                    @if($cliente->estado)
                        <span class="badge active">Activo</span>
                    @else
                        <span class="badge inactive">Inactivo</span>
                    @endif
                </td>
                <td>{{ $cliente->observaciones }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection