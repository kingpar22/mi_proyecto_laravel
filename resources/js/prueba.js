import express from 'express';

const app = express();

app.listen(3000, () => {
    console.log("Servidor corriendo en puerto 3000");
});

/*
Ruta:
http://localhost:3000/usuario/fanny
*/

app.get('/usuario/:reyli', (req, res) => {

    // Obtener parámetro desde la URL
    const nombre = req.params.nombre;

    // Procesar lógica → convertir a MAYÚSCULAS
    const nombreProcesado = nombre.toUpperCase();

    // Respuesta JSON
    res.json({
        original: nombre,
        procesado: nombreProcesado
    });
});

app.listen(PORT, () => {
    console.log(`Servidor ejecutándose en http://localhost:${PORT}`);
});