<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';

$page_title       = 'Politique de confidentialité — ' . SITE_NAME;
$page_description = "Politique de confidentialité du site Brackets Studio : données collectées, cookies, droits RGPD.";
$canonical_path   = '/politique-confidentialite';

require_once __DIR__ . '/includes/header.php';
?>

<section class="project-hero">
  <div class="wrap">
    <a href="/" class="back-link">← Retour à l'accueil</a>
    <span class="eyebrow">// vie privée</span>
    <h1>Politique de confidentialité</h1>
  </div>
</section>

<section class="legal-body">
  <div class="wrap">

    <h2>Aucune collecte automatisée</h2>
    <p>
      Ce site ne dépose aucun cookie, ne fait appel à aucun outil d'analyse d'audience
      (Google Analytics ou équivalent) et n'intègre aucune ressource tierce
      susceptible de suivre votre navigation. Toutes les polices, styles et scripts
      sont hébergés directement sur le serveur du site.
    </p>

    <h2>Données que vous nous transmettez</h2>
    <p>
      Le site ne contient aucun formulaire : les liens de contact ouvrent votre
      messagerie personnelle vers <a href="mailto:<?= h(SITE_EMAIL) ?>"><?= h(SITE_EMAIL) ?></a>.
      Aucune donnée n'est donc stockée sur le serveur du site lorsque vous nous
      contactez ; l'email que vous envoyez est traité comme n'importe quel email reçu,
      dans votre propre boîte mail et celle de Pauline Peeters.
    </p>
    <p>
      Les seules données personnelles traitées sont celles que vous choisissez de
      communiquer dans cet email (nom, adresse email, contenu du message), dans le
      but exclusif de répondre à votre demande. Elles sont conservées le temps
      nécessaire au traitement de l'échange, puis supprimées.
    </p>

    <h2>Base légale et destinataire</h2>
    <p>
      Le traitement repose sur votre démarche volontaire de contact (intérêt
      légitime). Le seul destinataire de ces données est Pauline Peeters, éditrice
      du site.
    </p>

    <h2>Vos droits</h2>
    <p>
      Conformément au Règlement Général sur la Protection des Données (RGPD), vous
      disposez d'un droit d'accès, de rectification, d'effacement et d'opposition
      concernant les données vous concernant. Pour exercer ces droits, contactez
      simplement <a href="mailto:<?= h(SITE_EMAIL) ?>"><?= h(SITE_EMAIL) ?></a>.
    </p>

    <h2>Hébergement des données</h2>
    <p>
      Le site est hébergé chez OVH SAS (France), au sein de l'Union européenne.
      Aucune donnée n'est transférée en dehors de l'UE.
    </p>

    <p class="legal-updated">Dernière mise à jour : 20/07/2026</p>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
