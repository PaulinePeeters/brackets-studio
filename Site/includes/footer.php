</main>

<footer>
  <div class="wrap footer-row">
    <a href="/" class="logo">BRACKETS STUDIO</a>
    <div class="footer-links">
      <?php if (SITE_LINKEDIN): ?><a href="<?= h(SITE_LINKEDIN) ?>" rel="noopener" target="_blank">LinkedIn</a><?php endif; ?>
      <?php if (SITE_GITHUB): ?><a href="<?= h(SITE_GITHUB) ?>" rel="noopener" target="_blank">GitHub</a><?php endif; ?>
      <a href="mailto:<?= h(SITE_EMAIL) ?>">Email</a>
      <a href="/mentions-legales">Mentions légales</a>
      <a href="/politique-confidentialite">Confidentialité</a>
    </div>
    <div>&copy; <?= h(date('Y')) ?> Brackets Studio</div>
  </div>
</footer>

<script src="/assets/js/main.js" defer></script>
</body>
</html>
