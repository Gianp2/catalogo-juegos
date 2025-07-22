<h1 class="title">Lista de Juegos <span aria-label="lista" role="img">📋</span></h1>

<ul class="juegos-lista">
  <?php foreach ($juegos as $juego): ?>
    <li class="juego">
      <strong class="juego-nombre"><?= htmlspecialchars($juego['nombre']) ?></strong>
      <span class="juego-plataforma">(<?= htmlspecialchars($juego['plataforma']) ?>)</span> -
      <span class="juego-tipo"><?= htmlspecialchars($juego['tipo']) ?></span>
    </li>
  <?php endforeach; ?>
</ul>
