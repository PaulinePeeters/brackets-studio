<?php
declare(strict_types=1);

/**
 * Config globale du site. BASE_URL doit pointer vers le domaine de prod
 * une fois le DNS de brackets-studio.be configuré sur le VPS.
 */

$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host   = $_SERVER['HTTP_HOST'] ?? 'brackets-studio.be';

define('SITE_NAME', 'Brackets Studio');
define('SITE_BASE_URL', getenv('SITE_BASE_URL') ?: $scheme . '://' . $host);
define('SITE_EMAIL', 'hello@brackets-studio.be');
define('SITE_LOCALE', 'fr_BE');

define('SITE_LINKEDIN', 'https://www.linkedin.com/in/pauline-peeters-dev');
// GitHub pas encore public : ne pas afficher tant que les repos ne sont pas rendus publics.
define('SITE_GITHUB', '');

/** Échappe pour un contexte HTML. */
function h(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

/** Construit une URL absolue à partir d'un chemin relatif au site. */
function site_url(string $path = ''): string
{
    return rtrim(SITE_BASE_URL, '/') . '/' . ltrim($path, '/');
}
