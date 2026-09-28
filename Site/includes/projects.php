<?php
declare(strict_types=1);

/** @return array<int, array<string, mixed>> */
function get_projects(): array
{
    static $projects = null;
    if ($projects === null) {
        $projects = require __DIR__ . '/../data/projects.php';
    }
    return $projects;
}

/** @return array<string, mixed>|null */
function get_project_by_slug(string $slug): ?array
{
    foreach (get_projects() as $project) {
        if ($project['slug'] === $slug) {
            return $project;
        }
    }
    return null;
}

/** @return array<int, array<string, mixed>> */
function get_featured_projects(): array
{
    return array_values(array_filter(get_projects(), fn (array $p) => !empty($p['featured'])));
}
