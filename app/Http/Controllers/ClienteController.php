<?php

// app/Http/Controllers/ClienteController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function create()
    {
        return view('Registro_clientes');
    }
}

<?php
$conn = new mysqli("localhost","root","","tu_base_datos");

if($conn->connect_error){
    die("Error de conexión");
}

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$referencia = $_POST['referencia'];
$email = $_POST['email'];
$plan_id = $_POST['plan_id'];
$usuario_pppoe = $_POST['usuario_pppoe'];
$password_pppoe = $_POST['password_pppoe'];
$fecha_corte = $_POST['fecha_corte'];
$estado = $_POST['estado'];
$fecha_instalacion = $_POST['fecha_instalacion'];
$ultimo_pago = $_POST['ultimo_pago'];
$observaciones = $_POST['observaciones'];

$sql = "INSERT INTO clientes
(nombre,telefono,direccion,referencia,email,plan_id,usuario_pppoe,password_pppoe,fecha_corte,estado,fecha_instalacion,ultimo_pago,observaciones)
VALUES
('$nombre','$telefono','$direccion','$referencia','$email','$plan_id','$usuario_pppoe','$password_pppoe','$fecha_corte','$estado','$fecha_instalacion','$ultimo_pago','$observaciones')";

$conn->query($sql);

echo "Cliente registrado correctamente";

?>