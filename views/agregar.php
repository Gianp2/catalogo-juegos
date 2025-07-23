<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Agregar Juego</title>
  <link rel="stylesheet" href="public/css/style.css" />
  <style>
    .container-2col {
      display: flex;
      flex-direction: row;
      gap: 2rem;
      padding: 2rem;
      max-width: 1000px;
      margin: auto;
      background: white;
      border-radius: 16px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .form-column {
      flex: 2;
    }

    .side-column {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background: #f5f5ff;
      border-radius: 12px;
      padding: 1rem;
    }

    .side-column img {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
    }

    .form-title {
      font-size: 1.6rem;
      font-weight: bold;
      color: #5a28c3;
      margin-bottom: 1.5rem;
      text-align: center;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    input, textarea {
      padding: 0.6rem;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    button {
      background: #5a28c3;
      color: white;
      border: none;
      padding: 0.8rem;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s;
    }

    button:hover {
      background: #471ea3;
    }

    .message {
      margin-top: 1rem;
      padding: 0.8rem;
      border-radius: 8px;
      color: white;
    }

    .success {
      background-color: #4caf50;
    }

    .error {
      background-color: #f44336;
    }
  </style>
</head>
<body>
  <div class="container-2col">
    <!-- Columna del formulario -->
    <div class="form-column">
      <h2 class="form-title">🎮 Agregar Nuevo Juego</h2>
      <form action="" method="POST">
        <input type="text" name="nombre" placeholder="Nombre del juego" required>
        <input type="text" name="plataforma" placeholder="Plataforma" required>
        <input type="text" name="tipo" placeholder="Tipo (acción, aventura...)" required>
        <input type="date" name="fecha_lanzamiento" placeholder="Fecha de lanzamiento" required>
        <input type="text" name="desarrolladora" placeholder="Desarrolladora" required>
        <textarea name="descripcion" rows="3" placeholder="Descripción"></textarea>
        <input type="number" name="puntuacion" min="0" max="10" step="0.1" placeholder="Puntuación (0 a 10)">
        
        <!-- Campo de imagen nuevo -->
        <input type="url" name="imagen" placeholder="URL de la imagen del juego (opcional)">
        
        <button type="submit">Guardar Juego</button>
      </form>

      <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <div class="message <?= $exito ? 'success' : 'error' ?>">
          <?= $exito ? '✅ Juego agregado correctamente.' : '❌ Error al guardar el juego.' ?>
        </div>
      <?php endif; ?>
    </div>

    <!-- Columna lateral con imagen -->
    <div class="side-column">
      <img src="public\theforest.jpg" alt="Imagen decorativa">
      <p style="text-align:center; margin-top:1rem;">Agregá tus juegos favoritos<br>al catálogo 📚</p>
    </div>
  </div>
</body>
</html>
