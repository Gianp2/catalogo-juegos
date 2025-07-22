<hr style="border:none; border-top:1px solid #e0e0e0; margin:2rem 0;">

<footer>
  <div class="footer-container">
    <p>&copy; <?= date("Y") ?> Catálogo de Juegos</p>
  </div>
</footer>

<style>
  :root {
    --footer-bg: #fafafa;
    --footer-text: #555555;
    --footer-text-hover: #000000;
  }

  footer {
    background-color: var(--footer-bg);
    padding: 1.5rem 1rem;
    color: var(--footer-text);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 0.9rem;
    border-radius: 4px;
  }

  .footer-container {
    max-width: 960px;
    margin: 0 auto;
    text-align: center;
  }

  footer p {
    margin: 0;
    transition: color 0.3s ease;
    cursor: default;
  }

  footer p:hover {
    color: var(--footer-text-hover);
  }

  @media (max-width: 480px) {
    footer {
      font-size: 0.8rem;
      padding: 1rem 0.5rem;
    }
  }
</style>
