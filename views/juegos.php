<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Lista de Juegos - Catálogo de Juegos</title>
  <link rel="stylesheet" href="public/css/style.css" />

  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #e8e8f8;
      margin: 0;
      padding: 0;
    }

    .header {
      text-align: center;
      padding: 2rem 0;
      background: #fff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .header-title {
      color: #5a28c3;
      font-size: 2.5rem;
      margin: 0 0 1rem 0;
    }

    .header-nav {
      display: flex;
      justify-content: center;
      gap: 1rem;
      align-items: center;
    }

    .nav-link {
      color: #333;
      text-decoration: none;
      font-weight: 600;
      font-size: 1.1rem;
      transition: color 0.3s;
    }

    .nav-link:hover {
      color: #5a28c3;
    }

    .nav-link--primary {
      background: #5a28c3;
      color: white;
      padding: 0.5rem 1rem;
      border-radius: 8px;
    }

    .nav-link--primary:hover {
      background: #471ea3;
    }

    .nav-separator {
      color: #777;
      font-size: 1.2rem;
    }

    .main-content {
      padding: 2rem;
      max-width: 1100px;
      margin: auto;
    }

    .intro {
      text-align: center;
      margin-bottom: 3rem;
    }

    .intro h2 {
      font-size: 2rem;
      color: #333;
    }

    .intro p {
      font-size: 1.1rem;
      color: #555;
      max-width: 700px;
      margin: 1rem auto;
    }

    .cta-button {
      display: inline-block;
      margin-top: 1rem;
      background-color: #5a28c3;
      color: white;
      padding: 0.75rem 1.5rem;
      border-radius: 8px;
      font-weight: bold;
      text-decoration: none;
      transition: background 0.3s;
    }

    .cta-button:hover {
      background-color: #471ea3;
    }

    .destacados h3 {
      text-align: center;
      color: #5a28c3;
      margin-bottom: 1rem;
    }

    .juegos-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
    }

    .juego-card {
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      padding: 1rem;
      text-align: center;
    }

    .juego-card img {
      width: 100%;
      height: 160px;
      object-fit: cover;
      border-radius: 8px;
      margin-bottom: 0.5rem;
    }

    .juego-card h4 {
      margin: 0.5rem 0;
      color: #333;
    }

    .juego-card p {
      color: #666;
      font-size: 0.95rem;
    }

    footer {
      background-color: #fafafa;
      padding: 1.5rem 1rem;
      color: #555;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      font-size: 0.9rem;
      border-radius: 4px;
      text-align: center;
    }

    footer p {
      margin: 0.5rem 0;
      transition: color 0.3s ease;
      cursor: default;
    }

    footer p:hover {
      color: #000;
    }

    .github-link {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      text-decoration: none;
      font-weight: 500;
      color: #333;
      margin-top: 0.5rem;
      transition: color 0.3s;
    }

    .github-link:hover {
      color: #5a28c3;
    }

    .github-link img {
      width: 20px;
      height: 20px;
    }

    @media (max-width: 480px) {
      .header-title {
        font-size: 1.8rem;
      }

      .cta-button {
        font-size: 0.9rem;
      }

      footer {
        font-size: 0.8rem;
        padding: 1rem 0.5rem;
      }
    }
  </style>
</head>
<body>
  <header class="header">
    <h1 class="header-title" tabindex="0">
      Lista de Juegos <span role="img" aria-label="lista">📋</span>
    </h1>
    <nav class="header-nav" aria-label="Navegación principal">
      <a href="index.php?controller=Juegos&action=agregar" class="nav-link nav-link--primary" role="button" aria-label="Agregar nuevo juego">Agregar Juego</a>
    </nav>
  </header>

  <main>
    <?php if (!empty($juegos)): ?>
      <ul class="juegos-lista">
        <?php foreach ($juegos as $juego): ?>
          <li class="juego" tabindex="0" aria-label="Juego <?= htmlspecialchars($juego['nombre']) ?>">
            <div>
              <span class="juego-nombre"><?= htmlspecialchars($juego['nombre']) ?></span>
              <span class="juego-plataforma">(<?= htmlspecialchars($juego['plataforma']) ?>)</span> - 
              <span class="juego-tipo"><?= htmlspecialchars($juego['tipo']) ?></span>
            </div>

            <div class="juego-detalles">
              <?php if (!empty($juego['fecha_lanzamiento'])): ?>
                <small>📅 Lanzamiento: <?= htmlspecialchars($juego['fecha_lanzamiento']) ?></small>
              <?php endif; ?>

              <?php if (!empty($juego['desarrolladora'])): ?>
                <small>🏢 Desarrolladora: <?= htmlspecialchars($juego['desarrolladora']) ?></small>
              <?php endif; ?>

              <?php if (!empty($juego['descripcion'])): ?>
                <p class="juego-descripcion"><?= nl2br(htmlspecialchars($juego['descripcion'])) ?></p>
              <?php endif; ?>

              <?php if (!empty($juego['rating'])): ?>
                <small>⭐ Puntuación: <?= htmlspecialchars($juego['rating']) ?>/10</small>
              <?php endif; ?>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php else: ?>
      <p style="text-align:center; font-size: 1.2rem; color: #666; margin-top: 2rem;">No hay juegos cargados aún.</p>
    <?php endif; ?>
  </main>
</body>
</html>
