<?php
declare(strict_types=1);
/**
 * Header réutilisable. Variables optionnelles à définir avant l'include :
 * $page_title, $page_description, $canonical_path, $og_image, $noindex, $json_ld (voir seo.php).
 */
?><!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#24262B">

<link rel="icon" href="/assets/img/logo/brackets-icon-dark.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/assets/img/logo/brackets-mark-transparent.svg">

<link rel="preload" href="/assets/fonts/ibm-plex-mono-v20-latin-500.woff2" as="font" type="font/woff2" crossorigin>
<link rel="stylesheet" href="/assets/css/style.css?v=2">

<?php require_once __DIR__ . '/seo.php'; ?>

<script type="application/ld+json"><?= json_encode([
    '@context' => 'https://schema.org',
    '@type'    => 'ProfessionalService',
    'name'     => SITE_NAME,
    'url'      => SITE_BASE_URL,
    'image'    => site_url('assets/img/og-image.jpg'),
    'email'    => SITE_EMAIL,
    'areaServed' => 'BE',
    'description' => "Développement de sites et applications web sur mesure : HTML, CSS, JavaScript, React, Node.js, PostgreSQL.",
    'sameAs'   => array_values(array_filter([SITE_LINKEDIN, SITE_GITHUB])),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
</head>
<body>

<a href="#main" class="skip-link">Aller au contenu</a>

<header>
  <nav>
    <a href="/" class="logo" aria-label="<?= h(SITE_NAME) ?> — accueil">
      <span class="logo-mark">
        <svg viewBox="18 25 124 110" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path d="M70,32 L45,32 L45,68 L25,80 L45,92 L45,128 L70,128" stroke="#FF6A2B" stroke-width="14" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
          <path d="M90,32 L115,32 L115,68 L135,80 L115,92 L115,128 L90,128" stroke="#FF6A2B" stroke-width="14" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
        </svg>
      </span>
      BRACKETS STUDIO
    </a>
    <button type="button" class="nav-toggle" aria-expanded="false" aria-controls="nav-links" aria-label="Ouvrir le menu">
      <span></span><span></span><span></span>
    </button>
    <div class="nav-links" id="nav-links">
      <a href="/#services">Services</a>
      <a href="/#travaux">Travaux</a>
      <a href="/#process">Process</a>
      <a href="/#contact" class="btn btn-primary nav-cta">Démarrer un projet</a>
    </div>
  </nav>
</header>

<main id="main">
