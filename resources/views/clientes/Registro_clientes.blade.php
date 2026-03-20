<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registro Cliente</title>
@vite('resources/css/styles.css')
<style>
/* Body */
body {
    font-family: Arial, sans-serif;
    background: #f4f6f9;
    margin: 0;
}

/* Form container */
.form-container {
    max-width: 700px;
    margin: 50px auto;
    padding: 20px 30px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.1);
}

/* Tabs radios ocultos */
input[name="tabs"] {
    display: none;
}

/* Tabs labels */
.tabs {
    display: flex;
    border-bottom: 2px solid #ddd;
    margin-bottom: 20px;
}
.tabs label {
    padding: 10px 20px;
    background: #eee;
    cursor: pointer;
    margin-right: 5px;
    border-radius: 5px 5px 0 0;
    transition: 0.3s;
}
.tabs label:hover {
    background: #ddd;
}

/* Tabs activos */
#tab1:checked ~ .tabs label[for="tab1"],
#tab2:checked ~ .tabs label[for="tab2"],
#tab3:checked ~ .tabs label[for="tab3"],
#tab4:checked ~ .tabs label[for="tab4"] {
    background: #fff;
    border-top: 3px solid #3498db;
}

/* Card que contiene contenido de cada tab */
.card {
    background: #fff;
    padding: 20px;
    border-radius: 0 10px 10px 10px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

/* Contenido de tabs */
.content {
    display: none;
}
#tab1:checked ~ .card .content1,
#tab2:checked ~ .card .content2,
#tab3:checked ~ .card .content3,
#tab4:checked ~ .card .content4 {
    display: block;
}

/* Inputs y selects */
.content label {
    display: block;
    margin-bottom: 6px;
    font-weight: 600;
    color: #333;
}
.content input,
.content select,
.content textarea {
    width: 100%;
    padding: 10px 12px;
    margin-bottom: 12px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 14px;
    transition: 0.3s;
}
.content input:focus,
.content select:focus,
.content textarea:focus {
    border-color: #3498db;
    outline: none;
}

/* Botones */
.buttons {
    margin-top: 20px;
    display: flex;
    gap: 10px;
}
.btn-save {
    background: #3498db;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 6px;
    cursor: pointer;
    font-weight: 600;
}
.btn-save:hover {
    background: #217dbb;
}
.btn-cancel {
    background: #ddd;
    border: none;
    padding: 10px 20px;
    border-radius: 6px;
    cursor: pointer;
}
.btn-cancel:hover {
    background: #ccc;
}
</style>
</head>
<body>
<div class="form-container">
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
                <input type="text" name="usuario_pppoe">
                <label>Password PPPoE</label>
                <input type="text" name="password_pppoe">
                <label>Plan</label>
                <select name="plan_id">
                    <option value="1">Plan 1</option>
                    <option value="2">Plan 2</option>
                </select>
            </div>

            <div class="content content2">
                <label>Nombre</label>
                <input type="text" name="nombre" required>
                <label>Apellido</label>
                <input type="text" name="apellido">
                <label>Correo electrónico</label>
                <input type="email" name="email">
                <label>Dirección</label>
                <textarea name="direccion"></textarea>
                <label>Teléfono</label>
                <input type="text" name="telefono">
            </div>

            <div class="content content3">
                <label>Fecha Corte</label>
                <input type="date" name="fecha_corte">
                <label>Estado</label>
                <select name="estado">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>

            <div class="content content4">
                <label>Último Pago</label>
                <input type="date" name="ultimo_pago">
                <label>Observaciones</label>
                <textarea name="observaciones"></textarea>
            </div>
        </div>

        <!-- Botones siempre visibles -->
        <div class="buttons">
            <button type="submit" class="btn-save">Guardar</button>
            <a href="#" class="btn-cancel">Cancelar</a>
        </div>

    </form>
</div>
</body>
</html>

