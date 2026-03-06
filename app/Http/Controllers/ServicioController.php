<?php

namespace App\Http\Controllers;


class ServicioController extends Controller
{
    public function verificarPago()
    {
        try {

            $cliente = "Juan Perez";
            $promesaPago = false; // el cliente no cumplió
            $deuda = 500;

            // 🔴 Breakpoint aquí para el debugger
            if ($promesaPago == false) {

                // provocamos un error de lógica de negocio
                throw new \Exception("El cliente no cumplió la promesa de pago. Cortar suministro de red.");

            }

            return response()->json([
                "message" => "Servicio activo"
            ]);

        } catch (\Exception $e) {

            return response()->json([
                "error" => true,
                "message" => "Ocurrió un problema interno, intente más tarde"
            ], 500);

        }
    }
}