<hr style="border:none; border-block-start:1px solid #e0e0e0; margin:2rem 0;">

<footer>
  <div class="footer-container">
    <p>&copy; <?= date("Y") ?> Catálogo de Juegos</p>
    <div class="footer-github">
      <a href="https://github.com/Gianp2" target="_blank" aria-label="GitHub Gianp2">
        <img src="public/githublogo.png" alt="GitHub Logo">
        <span>Github - @Gianp2</span>
      </a>
    </div>
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
    max-inline-size: 960px;
    margin: 0 auto;
    text-align: center;
  }

  footer p {
    margin: 0 0 0.5rem 0;
    transition: color 0.3s ease;
    cursor: default;
  }

  footer p:hover {
    color: var(--footer-text-hover);
  }

  .footer-github {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 0.5rem;
    margin-block-start: 0.5rem;
  }

  .footer-github a {
    display: flex;
    align-items: center;
    gap: 0.4rem;
    color: var(--footer-text);
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s;
  }

  .footer-github a:hover {
    color: var(--footer-text-hover);
  }

  .footer-github img {
    inline-size: 24px;
    block-size: 24px;
    object-fit: contain;
  }

  @media (max-inline-size: 480px) {
    footer {
      font-size: 0.8rem;
      padding: 1rem 0.5rem;
    }

    .footer-github span {
      font-size: 0.85rem;
    }
  }
</style>
