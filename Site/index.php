<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/projects.php';

$page_title       = SITE_NAME . ' — Développement web sur mesure';
$page_description = "Développement web sur mesure en Belgique : sites vitrines et applications métier, React, Node.js, PostgreSQL. Un seul interlocuteur, du brief au déploiement.";
$canonical_path   = '/';

require_once __DIR__ . '/includes/header.php';
?>
<section class="hero">
  <div class="wrap">
    <span class="eyebrow">// développement web</span>
    <h1><span class="brace">{</span> Des sites et applications qui tiennent la route <span class="brace">}</span></h1>
    <p>Développement web full-stack sur-mesure — du site vitrine à l'application métier complexe. Un seul interlocuteur, du brief au déploiement.</p>
    <div class="hero-ctas">
      <a href="#travaux" class="btn btn-primary">Voir mes projets</a>
      <a href="#contact" class="btn btn-ghost">Me contacter</a>
    </div>
  </div>
</section>

<section class="services" id="services">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">// services</span>
      <h2>Ce que je fais</h2>
    </div>
    <div class="cards">
      <div class="card">
        <span class="num">01</span>
        <h3>Sites vitrines & marketing</h3>
        <p>Conception et intégration sur-mesure, React / Next.js, performance et référencement soignés dès la livraison.</p>
      </div>
      <div class="card">
        <span class="num">02</span>
        <h3>Applications web métier</h3>
        <p>Back-end Node.js, bases PostgreSQL, authentification, tableaux de bord — pour des outils internes qui durent.</p>
      </div>
      <div class="card">
        <span class="num">03</span>
        <h3>Maintenance & évolutions</h3>
        <p>Suivi, corrections, nouvelles fonctionnalités sur des projets existants, les vôtres ou ceux d'une autre équipe.</p>
      </div>
    </div>
  </div>
</section>

<section class="work" id="travaux">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">// travaux récents</span>
      <h2>Projets sélectionnés</h2>
    </div>
    <div class="projects">
      <?php foreach (get_featured_projects() as $project): ?>
      <a class="project" href="/projet/<?= h($project['slug']) ?>">
        <div>
          <h3><?= h($project['title']) ?></h3>
          <p><?= h($project['summary']) ?></p>
          <div class="tags">
            <?php foreach ($project['stack'] as $tech): ?>
              <span class="tag"><?= h($tech) ?></span>
            <?php endforeach; ?>
          </div>
        </div>
        <span class="project-link">Voir le projet</span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="process" id="process">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">// méthode</span>
      <h2>Comment ça se passe</h2>
    </div>
    <div class="steps">
      <div class="step">
        <span class="num">01</span>
        <h3>Brief</h3>
        <p>On clarifie le besoin, les contraintes et les objectifs du projet.</p>
      </div>
      <div class="step">
        <span class="num">02</span>
        <h3>Conception</h3>
        <p>Maquettes, architecture technique et choix des outils.</p>
      </div>
      <div class="step">
        <span class="num">03</span>
        <h3>Développement</h3>
        <p>Build itératif avec des points réguliers sur l'avancement.</p>
      </div>
      <div class="step">
        <span class="num">04</span>
        <h3>Mise en ligne</h3>
        <p>Déploiement, suivi des performances et support après livraison.</p>
      </div>
    </div>
  </div>
</section>

<section class="contact" id="contact">
  <div class="wrap">
    <span class="eyebrow">// contact</span>
    <h2>On parle de votre projet ?</h2>
    <p>Derrière Brackets Studio, il y a une seule personne : moi, Pauline Peeters. Une idée, un besoin précis ou juste une question — je réponds sous 48h.</p>
    <a href="mailto:<?= h(SITE_EMAIL) ?>" class="btn btn-primary"><?= h(SITE_EMAIL) ?></a>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
