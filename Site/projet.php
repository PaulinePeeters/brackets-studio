<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/projects.php';

$slug    = isset($_GET['slug']) ? (string) $_GET['slug'] : '';
$project = $slug !== '' ? get_project_by_slug($slug) : null;

if ($project === null) {
    http_response_code(404);
    require_once __DIR__ . '/404.php';
    return;
}

$page_title       = $project['title'] . ' — ' . SITE_NAME;
$page_description = $project['summary'];
$canonical_path    = '/projet/' . $project['slug'];
$og_image          = is_file(__DIR__ . '/' . ltrim($project['cover'], '/'))
    ? site_url($project['cover'])
    : site_url('assets/img/og-image.png');
$json_ld = [
    '@context'    => 'https://schema.org',
    '@type'       => 'CreativeWork',
    'name'        => $project['title'],
    'description' => $project['summary'],
    'creator'     => ['@type' => 'Organization', 'name' => SITE_NAME],
    'url'         => site_url('/projet/' . $project['slug']),
    'dateCreated' => $project['year'],
];

require_once __DIR__ . '/includes/header.php';
?>

<section class="project-hero">
  <div class="wrap">
    <a href="/#travaux" class="back-link">← Tous les projets</a>
    <span class="eyebrow">// projet sélectionné</span>
    <h1><?= h($project['title']) ?></h1>
    <p style="font-size:17px;color:#54565c;max-width:620px;"><?= h($project['summary']) ?></p>
    <div class="project-meta">
      <div><strong>Rôle</strong><?= h($project['role']) ?></div>
      <div><strong>Année</strong><?= h($project['year']) ?></div>
      <div style="flex:1 1 240px;">
        <strong>Stack</strong>
        <div class="tags">
          <?php foreach ($project['stack'] as $tech): ?>
            <span class="tag"><?= h($tech) ?></span>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="project-body">
  <div class="wrap">
    <?php foreach ($project['description'] as $paragraph): ?>
      <p><?= h($paragraph) ?></p>
    <?php endforeach; ?>

    <?php if (!empty($project['link'])): ?>
      <a href="<?= h($project['link']) ?>" class="btn btn-ghost" rel="noopener" target="_blank">Voir le site en ligne</a>
    <?php endif; ?>

    <div class="gallery">
      <?php foreach ($project['screenshots'] as $i => $shot): ?>
        <?php $shotPath = __DIR__ . '/' . ltrim($shot, '/'); ?>
        <figure>
          <?php if (is_file($shotPath)): ?>
            <img src="/<?= h(ltrim($shot, '/')) ?>" alt="Capture d'écran <?= (int) ($i + 1) ?> du projet <?= h($project['title']) ?>" loading="lazy" width="1280" height="800">
          <?php else: ?>
            <div class="gallery-placeholder">Screenshot à venir<br><?= h(basename($shot)) ?></div>
          <?php endif; ?>
        </figure>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
