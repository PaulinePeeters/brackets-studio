<?php
declare(strict_types=1);

/**
 * Partial SEO. Le script appelant doit définir avant l'include :
 * $page_title, $page_description, $canonical_path (optionnel), $og_image (optionnel),
 * $noindex (optionnel bool), $json_ld (optionnel, tableau prêt pour json_encode).
 */

$page_title ??= SITE_NAME . ' — Développement web sur mesure';
$page_description ??= "Développement web sur mesure en Belgique : sites vitrines et applications métier, React, Node.js, PostgreSQL. Un seul interlocuteur, du brief au déploiement.";
$canonical_path ??= '/';
$og_image ??= site_url('assets/img/og-image.png');
$og_image_width ??= 1200;
$og_image_height ??= 630;
$noindex ??= false;
$json_ld ??= null;

$canonical = site_url($canonical_path);
?>
<title><?= h($page_title) ?></title>
<meta name="description" content="<?= h($page_description) ?>">
<link rel="canonical" href="<?= h($canonical) ?>">
<?php if ($noindex): ?>
<meta name="robots" content="noindex, nofollow">
<?php else: ?>
<meta name="robots" content="index, follow">
<?php endif; ?>

<meta property="og:type" content="website">
<meta property="og:site_name" content="<?= h(SITE_NAME) ?>">
<meta property="og:title" content="<?= h($page_title) ?>">
<meta property="og:description" content="<?= h($page_description) ?>">
<meta property="og:url" content="<?= h($canonical) ?>">
<meta property="og:image" content="<?= h($og_image) ?>">
<meta property="og:image:width" content="<?= (int) $og_image_width ?>">
<meta property="og:image:height" content="<?= (int) $og_image_height ?>">
<meta property="og:locale" content="fr_BE">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= h($page_title) ?>">
<meta name="twitter:description" content="<?= h($page_description) ?>">
<meta name="twitter:image" content="<?= h($og_image) ?>">

<?php if ($json_ld !== null): ?>
<script type="application/ld+json"><?= json_encode($json_ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
<?php endif; ?>
