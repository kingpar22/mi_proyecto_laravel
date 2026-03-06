const express = require('express');
const jwt = require('jsonwebtoken');
const bodyParser = require('body-parser');

const app = express();
const PORT = 3000;

// Clave secreta para JWT
const SECRET_KEY = 'mi_clave_secreta';

// Middleware para parsear JSON
app.use(bodyParser.json());

// Usuario hardcodeado para prueba
const USUARIO = {
  nombre: 'admin',
  contrasena: '12345', // <-- sin ñ
  perfil: 'usuario autenticado'
};

// Endpoint POST /api/login
app.post('/api/login', (req, res) => {
  console.log("req.body:", req.body); // depuración

  // Validación de que realmente recibimos JSON
  if (!req.body || !req.body.usuario || !req.body.contrasena) {
    return res.status(400).json({ error: true, message: 'Falta usuario o contraseña' });
  }

  const { usuario, contrasena } = req.body;

  if (usuario === USUARIO.nombre && contrasena === USUARIO.contrasena) {
    // Generar token JWT válido por 1 hora
    const token = jwt.sign({ usuario: USUARIO.nombre }, SECRET_KEY, { expiresIn: '1h' });
    return res.json({ mensaje: 'Login exitoso', token });
  } else {
    return res.status(401).json({ error: true, message: 'Credenciales incorrectas' });
  }
});

// Middleware para proteger rutas
function autenticarToken(req, res, next) {
  const authHeader = req.headers['authorization'];
  const token = authHeader && authHeader.split(' ')[1]; // Bearer <token>

  if (!token) return res.status(401).json({ error: true, message: 'No autorizado' });

  jwt.verify(token, SECRET_KEY, (err, user) => {
    if (err) return res.status(401).json({ error: true, message: 'Token inválido' });
    req.user = user;
    next();
  });
}

// Endpoint GET /api/perfil protegido
app.get('/api/perfil', autenticarToken, (req, res) => {
  res.json({
    usuario: USUARIO.nombre,
    perfil: USUARIO.perfil
  });
});

// Iniciar servidor
app.listen(PORT, () => {
  console.log(`Servidor corriendo en http://127.0.0.1:${PORT}`);
});