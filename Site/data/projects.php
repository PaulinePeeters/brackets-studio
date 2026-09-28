<?php
declare(strict_types=1);

/**
 * Source de vérité unique pour les projets.
 * Ajouter une entrée ici (et les images dans assets/img/projects/<slug>/).
 */

return [
    [
        'slug'        => 'restos',
        'title'       => 'RestOS',
        'summary'     => "Application de gestion pour restaurants : commandes en temps réel, plan de salle interactif, suivi des stocks et tableaux de bord.",
        'description' => [
            "RestOS est un outil de gestion pensé pour la salle et la cuisine : prise de commande en temps réel, plan de salle interactif pour visualiser l'occupation, suivi des stocks et tableaux de bord pour le gérant.",
            "Le back-end Node.js expose une API REST et un canal Socket.IO pour synchroniser instantanément les commandes entre les tablettes en salle et l'écran de cuisine. Les données sont stockées dans PostgreSQL avec des migrations versionnées.",
        ],
        'role'        => 'Développement full-stack',
        'year'        => '2025-2026',
        'stack'       => ['React', 'Node.js', 'PostgreSQL', 'Socket.IO'],
        'cover'       => 'assets/img/projects/restos/cover.jpg',
        'screenshots' => [
            'assets/img/projects/restos/1.jpg',
            'assets/img/projects/restos/2.jpg',
            'assets/img/projects/restos/3.jpg',
        ],
        'link'        => null,
        'featured'    => true,
    ],
];

