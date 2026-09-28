<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';

$page_title       = 'Mentions légales — ' . SITE_NAME;
$page_description = "Mentions légales du site Brackets Studio : identité de l'éditrice, hébergement, propriété intellectuelle.";
$canonical_path   = '/mentions-legales';

require_once __DIR__ . '/includes/header.php';
?>

<section class="project-hero">
  <div class="wrap">
    <a href="/" class="back-link">← Retour à l'accueil</a>
    <span class="eyebrow">// informations légales</span>
    <h1>Mentions légales</h1>
  </div>
</section>

<section class="legal-body">
  <div class="wrap">

    <h2>Éditrice du site</h2>
    <p>
      Ce site est édité par Pauline Peeters, personne physique, exerçant sous le nom
      commercial « Brackets Studio ». Brackets Studio n'est à ce jour pas encore
      immatriculé comme entreprise (statut d'indépendant complémentaire en cours) :
      ce site a une vocation de vitrine et de portfolio, et ne permet aucune
      transaction commerciale en ligne. Les mentions relatives au numéro
      d'entreprise (BCE) et à la TVA seront ajoutées dès l'immatriculation officielle.
    </p>
    <p>
      Contact : <a href="mailto:<?= h(SITE_EMAIL) ?>"><?= h(SITE_EMAIL) ?></a><br>
      Pays : Belgique
    </p>

    <h2>Directrice de la publication</h2>
    <p>Pauline Peeters.</p>

    <h2>Hébergement</h2>
    <p>
      Le site (nom de domaine et serveur) est hébergé par :<br>
      OVH SAS — 2 rue Kellermann, 59100 Roubaix, France —
      <a href="https://www.ovhcloud.com" rel="noopener" target="_blank">ovhcloud.com</a>
    </p>

    <h2>Propriété intellectuelle</h2>
    <p>
      L'ensemble des contenus présents sur ce site (textes, identité visuelle, logo,
      code source) est la propriété de Pauline Peeters, sauf mention contraire, et ne
      peut être reproduit sans autorisation préalable.
    </p>

    <h2>Responsabilité</h2>
    <p>
      Malgré le soin apporté à ce site, des erreurs ou omissions peuvent subsister.
      Certains liens peuvent renvoyer vers des sites tiers dont le contenu n'engage
      pas la responsabilité de l'éditrice.
    </p>

    <h2>Droit applicable</h2>
    <p>Le présent site est soumis au droit belge.</p>

    <p class="legal-updated">Dernière mise à jour : 20/07/2026</p>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
