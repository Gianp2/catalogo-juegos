<h1 class="title">Lista de Juegos <span aria-label="lista" role="img">📋</span></h1>

<ul class="juegos-lista">
  <?php foreach ($juegos as $juego): ?>
    <li class="juego">
      <strong class="juego-nombre"><?= htmlspecialchars($juego['nombre']) ?></strong>
      <span class="juego-plataforma">(<?= htmlspecialchars($juego['plataforma']) ?>)</span> -
      <span class="juego-tipo"><?= htmlspecialchars($juego['tipo']) ?></span>

      <?php if (!empty($juego['fecha_lanzamiento'])): ?>
        <br><small>📅 Lanzamiento: <?= htmlspecialchars($juego['fecha_lanzamiento']) ?></small>
      <?php endif; ?>

      <?php if (!empty($juego['desarrolladora'])): ?>
        <br><small>🏢 Desarrolladora: <?= htmlspecialchars($juego['desarrolladora']) ?></small>
      <?php endif; ?>

      <?php if (!empty($juego['descripcion'])): ?>
        <br><p class="juego-descripcion"><?= nl2br(htmlspecialchars($juego['descripcion'])) ?></p>
      <?php endif; ?>

      <?php if (!empty($juego['rating'])): ?>
        <br><small>⭐ Puntuación: <?= htmlspecialchars($juego['rating']) ?>/10</small>
      <?php endif; ?>

    </li>
  <?php endforeach; ?>
</ul>
