# Brackets Studio

Site vitrine de Brackets Studio (développement web/web app sur mesure). PHP simple, header/footer réutilisables via includes, données de projets centralisées, dockerisé, pipeline CI/CD GitLab.

## Structure

```
Site/
  index.php              page d'accueil
  projet.php             page détail d'un projet (?slug=... via URL propre /projet/<slug>)
  404.php                page d'erreur
  sitemap.php            sitemap.xml généré dynamiquement depuis data/projects.php
  robots.txt
  includes/
    config.php            constantes du site (nom, email, URL de base, réseaux)
    header.php            <head> + nav, réutilisé sur toutes les pages
    footer.php             footer + fermeture du HTML
    seo.php                balises meta / Open Graph / Twitter / JSON-LD
    projects.php           helpers pour lire data/projects.php
  data/
    projects.php           source de vérité des projets (titre, stack, screenshots, ...)
  assets/
    css/style.css
    js/main.js              menu mobile
    img/logo/                logos (copiés depuis Logo/)
    img/projects/<slug>/     screenshots de chaque projet (voir assets/img/projects/README.md)

Dockerfile                image unique nginx + php-fpm (via supervisord)
docker/                   confs nginx / supervisord / php
docker-compose.yml        pour lancer le site en local
docker-compose.prod.yml   pour le déploiement sur le VPS (réseau reverse proxy partagé)
.gitlab-ci.yml            pipeline : lint PHP → build & push l'image → déploiement manuel SSH
```

## Ajouter un projet

Ajoute une entrée dans `Site/data/projects.php` (slug, titre, résumé, description, stack, screenshots) et dépose les images dans `Site/assets/img/projects/<slug>/`. La page d'accueil et la page détail se mettent à jour automatiquement, rien d'autre à modifier.

## Lancer en local

Avec PHP seul (rapide, sans Docker) :

```bash
cd Site && php -S localhost:8000
```

Avec Docker (identique à la prod) :

```bash
docker compose up --build
# http://localhost:8080

