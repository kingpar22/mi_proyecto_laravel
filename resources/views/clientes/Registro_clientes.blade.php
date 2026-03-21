@extends('layouts.app')

@section('title', 'Registrar Cliente')
@section('page-title', 'Registrar Cliente')

@section('content')
<div class="form-container">

    @if ($errors->any())
    <div class="alert-error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>⚠ {{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('clientes.store') }}">
        @csrf

        <!-- Radios para Tabs -->
        <input type="radio" name="tabs" id="tab1" checked>
        <input type="radio" name="tabs" id="tab2">
        <input type="radio" name="tabs" id="tab3">
        <input type="radio" name="tabs" id="tab4">

        <!-- Labels como tabs -->
        <div class="tabs">
            <label for="tab1">Datos Conexión</label>
            <label for="tab2">Datos Cliente</label>
            <label for="tab3">Configuración</label>
            <label for="tab4">Facturación</label>
        </div>

        <!-- Contenido de cada tab -->
        <div class="card">
            <div class="content content1">
                <label>Usuario PPPoE</label>
                <input type="text" name="usuario_pppoe" value="{{ old('usuario_pppoe') }}">
                <label>Password PPPoE</label>
                <input type="text" name="password_pppoe" value="{{ old('password_pppoe') }}">
                <label>Plan</label>
                <select name="plan_id">
                    <option value="">Seleccione un plan</option>
                    @foreach($planes as $plan)
                        <option value="{{ $plan->id }}" 
                            {{ old('plan_id') == $plan->id ? 'selected' : '' }}>
                            {{ $plan->nombre }} - 
                            ↓ {{ $plan->velocidad_bajada }} / 
                            ↑ {{ $plan->velocidad_subida }} - 
                            ${{ $plan->precio }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="content content2">
                <label>Nombre</label>
                <input type="text" name="nombre" value="{{ old('nombre') }}" required>
                <label>Apellido</label>
                <input type="text" name="apellido" value="{{ old('apellido') }}">
                <label>Correo electrónico</label>
                <input type="email" name="email" value="{{ old('email') }}">
                <label>Codigo postal</label>
                <input type="text" name="codigo_postal" value="{{ old('codigo_postal') }}">
                <label>Dirección</label>
                <textarea name="direccion">{{ old('direccion') }}</textarea>
                <label>Referencia</label>
                <input type="text" name="referencia" value="{{ old('referencia') }}">
                <label>Teléfono</label>
                <input type="number" name="telefono" value="{{ old('telefono') }}">
            </div>

            <div class="content content3">
                <label>Fecha instalacion</label>
                <input type="date" name="fecha_instalacion" value="{{ old('fecha_instalacion') }}">
                <label>Fecha Corte</label>
                <input type="date" name="fecha_corte" value="{{ old('fecha_corte') }}">
                <label>Estado</label>
                <select name="estado">
                    <option value="1" {{ old('estado') == 1 ? 'selected' : '' }}>Activo</option>
                    <option value="0" {{ old('estado') == 0 ? 'selected' : '' }}>Inactivo</option>
                </select>
            </div>

            <div class="content content4">
                <label>Último Pago</label>
                <input type="date" name="ultimo_pago" value="{{ old('ultimo_pago') }}">
                <label>Observaciones</label>
                <textarea name="observaciones">{{ old('observaciones') }}</textarea>
            </div>
        </div>

        <!-- Botones siempre visibles -->
        <div class="buttons">
            <button type="submit" class="btn-save">Guardar</button>
            <button type="button" class="btn-cancel" onclick="window.location='{{ route('clientes.index') }}'">
                Cancelar
            </button>
        </div>
    </form>
</div>
@endsection