<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Agregar Juego</title>
  <link rel="stylesheet" href="public/css/style.css" />

  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #e8e8f8;
      margin: 0;
      padding: 2rem 0;
    }

    .container-2col {
      display: flex;
      flex-direction: row;
      gap: 2rem;
      padding: 2rem;
      max-inline-size: 1100px;
      margin: auto;
      background: white;
      border-radius: 16px;
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.1);
    }

    @media (max-inline-size: 768px) {
      .container-2col {
        flex-direction: column;
      }
    }

    .form-column {
      flex: 2;
    }

    .side-column {
      flex: 1.3;
      display: flex;
      flex-direction: column;
      align-items: center;
      background: #f5f5ff;
      border-radius: 12px;
      padding: 1rem;
    }

    .form-title {
      font-size: 2rem;
      font-weight: bold;
      color: #5a28c3;
      margin-block-end: 1.5rem;
      text-align: center;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    input, textarea, select {
      padding: 0.75rem;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 1rem;
      inline-size: 100%;
    }

    button {
      background: #5a28c3;
      color: white;
      border: none;
      padding: 0.8rem;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
      font-size: 1rem;
      transition: background 0.3s;
    }

    button:hover {
      background: #471ea3;
    }

    .message {
      margin-block-start: 1rem;
      padding: 0.8rem;
      border-radius: 8px;
      color: white;
      font-weight: bold;
      text-align: center;
    }

    .success { background-color: #4caf50; }
    .error { background-color: #f44336; }

    /* Carousel */
    .carousel {
      position: relative;
      inline-size: 100%;
      max-inline-size: 500px;
      block-size: 300px;
      overflow: hidden;
      border-radius: 16px;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
      background-color: #111;
      margin-block-end: 1rem;
    }

    .carousel-images {
      display: flex;
      transition: transform 0.5s ease-in-out;
      block-size: 100%;
    }

    .carousel-images img {
      inline-size: 100%;
      block-size: 100%;
      object-fit: cover;
      flex-shrink: 0;
    }

    .carousel-btn {
      position: absolute;
      inset-block-start: 50%;
      transform: translateY(-50%);
      background: rgba(0, 0, 0, 0.6);
      color: #fff;
      border: none;
      padding: 0.7rem;
      border-radius: 50%;
      cursor: pointer;
      z-index: 2;
      font-size: 1.5rem;
      transition: background 0.3s ease;
    }

    .carousel-btn:hover {
      background-color: #5a28c3;
    }

    .carousel-btn.prev { inset-inline-start: 10px; }
    .carousel-btn.next { inset-inline-end: 10px; }

    .carousel-dots {
      display: flex;
      justify-content: center;
      gap: 8px;
      margin-block-start: 0.5rem;
    }

    .dot {
      inline-size: 10px;
      block-size: 10px;
      background: #bbb;
      border-radius: 50%;
      cursor: pointer;
      transition: background-color 0.3s, transform 0.3s;
    }

    .dot.active {
      background: #5a28c3;
      transform: scale(1);
    }

    .platform-logos {
      display: flex;
      justify-content: center;
      gap: 1rem;
      margin-block-start: 0.5rem;
    }

    .platform-logos img {
      inline-size: 40px;
      block-size: 40px;
      object-fit: contain;
    }

    .side-column p {
      text-align: center;
      font-size: 1rem;
      color: #333;
      margin-block-end: 0.5rem;
    }
  </style>
</head>
<body>
  <div class="container-2col">
    <!-- Columna Formulario -->
    <div class="form-column">
      <h2 class="form-title">🎮 Agregar Nuevo Juego</h2>
      <form action="" method="POST">
        <input type="text" name="nombre" placeholder="Nombre del juego" required>
        <input type="text" name="plataforma" placeholder="Plataforma" required>
        <input type="text" name="tipo" placeholder="Tipo (acción, aventura...)" required>
        <input type="date" name="fecha_lanzamiento" required>
        <input type="text" name="desarrolladora" placeholder="Desarrolladora" required>
        <textarea name="descripcion" rows="3" placeholder="Descripción"></textarea>
        <input type="number" name="puntuacion" min="0" max="10" step="0.1" placeholder="Puntuación (0 a 10)">
        <button type="submit">Guardar Juego</button>
      </form>

      <?php 
      // Nota: Asegúrate de definir $exito en el backend antes de usar este bloque
      if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <div class="message <?= $exito ? 'success' : 'error' ?>">
          <?= $exito ? '✅ Juego agregado correctamente.' : '❌ Error al guardar el juego.' ?>
        </div>
      <?php endif; ?>
    </div>

    <!-- Columna Carrusel -->
    <div class="side-column">
      <div class="carousel">
        <div class="carousel-images">
          <img src="public/theforest.jpg" alt="The Forest">
          <img src="public/juego1.jpg" alt="Juego 1">
          <img src="public/juego2.jpg" alt="Juego 2">
          <img src="public/juego3.jpg" alt="Juego 3">
        </div>
        <button class="carousel-btn prev" aria-label="Imagen anterior">&#8249;</button>
        <button class="carousel-btn next" aria-label="Siguiente imagen">&#8250;</button>
      </div>
      <div class="carousel-dots"></div>
      <br>
      <p>Agregá tus juegos favoritos<br>al catálogo 📚</p>
      <br>
      <div class="platform-logos">
        <img src="public/steamlogo.png" alt="Steam Logo">
        <img src="public/pslogo.png" alt="PlayStation Logo">
      </div>
    </div>
  </div>

  <script>
    const carousel = document.querySelector('.carousel');
    const imagesContainer = document.querySelector('.carousel-images');
    const images = document.querySelectorAll('.carousel-images img');
    const prevBtn = document.querySelector('.carousel-btn.prev');
    const nextBtn = document.querySelector('.carousel-btn.next');
    const dotsContainer = document.querySelector('.carousel-dots');

    let currentIndex = 0;
    const total = images.length;

    // Crear dots
    images.forEach((_, i) => {
      const dot = document.createElement('div');
      dot.classList.add('dot');
      dot.addEventListener('click', () => showImage(i));
      dotsContainer.appendChild(dot);
    });

    function updateDots() {
      const dots = document.querySelectorAll('.dot');
      dots.forEach((dot, i) => {
        dot.classList.toggle('active', i === currentIndex);
      });
    }

    function showImage(index) {
      currentIndex = (index + total) % total; // Loop infinito
      imagesContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
      updateDots();
    }

    prevBtn.addEventListener('click', () => showImage(currentIndex - 1));
    nextBtn.addEventListener('click', () => showImage(currentIndex + 1));

    document.addEventListener('keydown', e => {
      if (e.key === 'ArrowLeft') showImage(currentIndex - 1);
      if (e.key === 'ArrowRight') showImage(currentIndex + 1);
    });

    let autoSlide = setInterval(() => showImage(currentIndex + 1), 5000);

    carousel.addEventListener('mouseenter', () => clearInterval(autoSlide));
    carousel.addEventListener('mouseleave', () => {
      autoSlide = setInterval(() => showImage(currentIndex + 1), 5000);
    });

    // Inicializar
    showImage(currentIndex);
  </script>
</body>
</html>