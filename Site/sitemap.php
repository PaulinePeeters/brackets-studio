<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/projects.php';

header('Content-Type: application/xml; charset=UTF-8');

$projectsLastmod = date('Y-m-d', filemtime(__DIR__ . '/data/projects.php'));

$legalLastmod = date('Y-m-d', filemtime(__DIR__ . '/mentions-legales.php'));

$urls = [
    ['loc' => site_url('/'), 'priority' => '1.0', 'lastmod' => $projectsLastmod],
];
foreach (get_projects() as $project) {
    $urls[] = ['loc' => site_url('/projet/' . $project['slug']), 'priority' => '0.8', 'lastmod' => $projectsLastmod];
}
$urls[] = ['loc' => site_url('/mentions-legales'), 'priority' => '0.3', 'lastmod' => $legalLastmod];
$urls[] = ['loc' => site_url('/politique-confidentialite'), 'priority' => '0.3', 'lastmod' => $legalLastmod];

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($urls as $u): ?>
  <url>
    <loc><?= h($u['loc']) ?></loc>
    <lastmod><?= h($u['lastmod']) ?></lastmod>
    <priority><?= h($u['priority']) ?></priority>
  </url>
<?php endforeach; ?>
</urlset>
