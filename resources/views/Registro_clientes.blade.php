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

<!-- Radios ocultos -->
<input type="radio" name="tabs" id="tab1" checked>
<input type="radio" name="tabs" id="tab2">
<input type="radio" name="tabs" id="tab3">
<input type="radio" name="tabs" id="tab4">

<!-- Tabs -->
<div class="tabs">
<label for="tab1">Datos de Conexión</label>
<label for="tab2">Datos del Cliente</label>
<label for="tab3">Configuración Avanzada</label>
<label for="tab4">Facturación</label>
</div>

<div class="card">

<!-- TAB 1 -->
<div class="content content1">

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
<input type="text">

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

</div>

<!-- TAB 2 -->
<div class="content content2">

<h3>Datos del Cliente</h3>

<form class="form-grid">

<label>Nombre</label>
<input type="text">

<label>Apellido</label>
<input type="text">

<label>DNI/C.I./C.C.</label>
<input type="text">

<label>Correo electrónico</label>
<input type="email">

<label>Dirección</label>
<textarea></textarea>

<label>Ciudad</label>
<input type="text">

<label>Código Postal</label>
<input type="text">

<label>Teléfono Celular</label>
<input type="text">

</form>

</div>

<!-- TAB 3 -->
<div class="content content3">

<h3>Configuración Avanzada</h3>

<p>Aquí puedes agregar configuraciones avanzadas.</p>

</div>

<!-- TAB 4 -->
<div class="content content4">

<h3>Facturación</h3>

<p>Aquí puedes agregar datos de facturación.</p>

</div>

<div class="buttons">
<button class="btn-save">Guardar</button>
<button class="btn-cancel">Cancelar</button>
</div>

</div>

</div>

</body>
</html>