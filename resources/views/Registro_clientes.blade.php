<?php
$conn = new mysqli("localhost","root","","zagunet");

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$sql = "SELECT id, nombre FROM planes";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registrar Cliente</title>
<link rel="stylesheet" href="styles.css">
</head>

<body>

<div class="container">

<h2>Registrar Cliente</h2>

<form action="guardar_cliente.php" method="POST" class="form-grid">

<label>Nombre</label>
<input type="text" name="nombre" required>

<label>Teléfono</label>
<input type="number" name="telefono">

<label>Email</label>
<input type="email" name="email">

<label>Dirección</label>
<textarea name="direccion" required></textarea>

<label>Referencia</label>
<input type="number" name="referencia">

<label>Plan</label>
<select name="plan_id" required>

<option value="">Seleccione un plan</option>

<?php
while($row = $result->fetch_assoc()){
?>
<option value="<?php echo $row['id']; ?>">
<?php echo $row['nombre']; ?>
</option>
<?php
}
?>

</select>

<label>Usuario PPPoE</label>
<input type="text" name="usuario_pppoe">

<label>Password PPPoE</label>
<input type="text" name="password_pppoe">

<label>Fecha de corte</label>
<input type="date" name="fecha_corte" required>

<label>Fecha de instalación</label>
<input type="date" name="fecha_instalacion">

<label>Último pago</label>
<input type="date" name="ultimo_pago">

<label>Estado</label>
<select name="estado">
<option value="1">Activo</option>
<option value="0">Suspendido</option>
</select>

<label>Observaciones</label>
<textarea name="observaciones"></textarea>

<div class="buttons">
<button type="submit" class="btn-save">Guardar Cliente</button>
</div>

</form>

</div>

</body>
</html>