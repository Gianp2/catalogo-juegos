<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Catálogo de Juegos con PHP y MVC. Agrega y consulta juegos por plataforma o tipo." />
  <meta name="author" content="Gian Pasquinelli" />
  <title>Catálogo de Juegos</title>
  
  <!-- Estilo principal -->
  <link rel="stylesheet" href="public/css/style.css" />

  <!-- Google Fonts (opcional para mejorar la tipografía) -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <nav class="nav">
      <div class="nav-container">
        <a href="index.php" class="logo">🎮 Catálogo de Juegos</a>
        <ul class="nav-links">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="index.php?controller=Juegos&action=index">Ver Juegos</a></li>
          <li><a href="index.php?controller=Juegos&action=agregar">Agregar Juego</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <main class="container">
