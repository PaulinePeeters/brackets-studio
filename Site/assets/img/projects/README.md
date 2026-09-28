# Screenshots des projets

Pour chaque projet, dépose les fichiers dans `assets/img/projects/<slug>/` :

- `cover.jpg` — utilisée comme image de partage (Open Graph) pour la page du projet.
- `1.jpg`, `2.jpg`, ... — les captures affichées dans la galerie de la page projet, dans l'ordre de `data/projects.php`.

Tant qu'un fichier n'existe pas, `projet.php` affiche automatiquement un placeholder "Screenshot à venir" à sa place — pas besoin de toucher au code, dépose juste l'image au bon endroit et au bon nom.

Format recommandé : JPG ou WebP, 1600px de large max, compressé (< 300 Ko/image) pour ne pas plomber les perfs.
