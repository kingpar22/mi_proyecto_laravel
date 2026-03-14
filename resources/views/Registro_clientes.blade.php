<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Agregar Cliente</title>
<link rel="stylesheet" href="styles.css">
</head>

<body>

<header class="topbar">
    <div class="menu">☰</div>
    <div class="title">Sistema</div>

    <div class="top-right">
        <span>Ayuda</span>
        <span class="user">reyli@zagunetwork</span>
    </div>
</header>

<div class="container">

    <h2>➕ Agregar Cliente</h2>

    <div class="tabs">
        <button class="tab active">Datos de Conexión</button>
        <button class="tab">Datos del Cliente</button>
        <button class="tab">Configuración Avanzada</button>
        <button class="tab">Facturación</button>
    </div>

    <div class="card">

        <h3>Datos de Conexión</h3>

        <form class="form-grid">

            <label>Nombre Secret PPPoE</label>
            <input type="text" placeholder="0558">

            <label>Password PPPoE</label>
            <input type="text" placeholder="3lb0bpsj">

            <label>Remote Address PPPoE</label>
            <input type="text">

            <label>Local Address PPPoE</label>
            <input type="text">

            <label>Mac Cpe</label>
            <input type="text">

            <label>Coordenadas</label>
            <input type="text" placeholder="Ej. 21.150168,-86.875023">

            <label>Router cliente</label>
            <select>
                <option>Rb_Centralizado_CCR</option>
            </select>

            <label>Zona cliente</label>
            <select>
                <option>Rb_Centralizado_CCR</option>
            </select>

            <label>Plan internet</label>
            <select>
                <option>----------</option>
            </select>

            <label>Sectorial/Nodo/NAP</label>
            <select>
                <option>----------</option>
            </select>

        </form>

        <div class="buttons">
            <button class="btn-save">Guardar</button>
            <button class="btn-cancel">Cancelar</button>
        </div>

    </div>

</div>

</body>
</html>