<?php
declare(strict_types=1);

$standalone = !defined('SITE_NAME');
if ($standalone) {
    require_once __DIR__ . '/includes/config.php';
}

$page_title       = 'Page introuvable — ' . SITE_NAME;
$page_description = "Cette page n'existe pas ou plus.";
$noindex          = true;

require_once __DIR__ . '/includes/header.php';
?>

<section class="not-found">
  <div class="wrap">
    <span class="eyebrow">// 404</span>
    <h1>{ 404 }</h1>
    <p style="color:#5c5e63;margin-bottom:32px;">Cette page n'existe pas ou plus.</p>
    <a href="/" class="btn btn-primary">Retour à l'accueil</a>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
