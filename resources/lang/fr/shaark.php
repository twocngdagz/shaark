<?php

return [
    // Settings
    'settings' => [
        'general' => [
            'title' => 'Général',
            'install_button' => 'Installer',
            'site_name' => 'Nom du site',
            'lang' => 'Langue',
            'private_help' => "Contenu privé (tout est privé et nécessite d'être connecté)",
            'private_download' => 'Garder les téléchargements privés (liens et albums)',
            'use_default_search' => 'Utiliser la recherche SQL plutôt que la recherche full-text',
        ],

        'appearance' => [
            'title' => 'Apparence',
            'is_dark' => 'Mode sombre',
            'home_show_tags' => "Afficher les tags sur la page d'accueil",
            'home_show_chests' => "Afficher les coffres sur la page d'accueil",
            'compact_cardslist' => "Compacter les listes de carte",
            'columns_count' => "Nombre de colonnes à afficher",
            'custom_background' => "Fond d'écran personnalisé",
            'custom_icon' => "Icône personnalisé (PNG, 512px)",
        ],

        '2fa' => [
            'title' => "Connexion sécurisée",
            'secure_login' => "Activer 2-FA (requiert un code envoyé par email)",
            'secure_code_expires' => "Durée d'expiration du code de sécurité (en minutes)",
            'secure_code_length' => "Taille du code de sécurité",
        ],

        'archiving' => [
            'title' => "Archivage",
            'link_archive_pdf' => "Archiver les pages en PDF",
            'node_bin' => "Éxécutable node.js",
            'link_archive_media' => "Archiver les médias (Youtube, Soundcloud, ...)",
            'youtube_dl_bin' => "Éxécutable Youtube-dl",
            'python_bin' => 'Éxécutable Python',
            'check_pdf_archiving' => 'Tester archive PDF',
            'check_media_archiving' => 'Tester archive Média',
        ],

        'backup' => [
            'title' => 'Sauvegarde',
            'enabled' => 'Sauvegarde activée ?',
            'enabled_help' => "Vérifiez votre configuration avant de l'activer.",
            'only_database' => 'Sauvegarder seulement la base de données',
            'period' => 'Période de sauvegarde',
            'period_daily' => 'Tous les jours',
            'period_weekly' => 'Toutes les semaines',
        ],

        'images' => [
            'title' => 'Images',
            'images_original_resize' => "Redimensionner l'image originale",
            'images_original_resize_width' => "Largeur max de l'image originale en pixels",
            'images_thumb_format' => 'Format de la miniature',
            'format_square' => 'Carré',
            'format_original' => 'Original',
            'images_thumb_queue' => 'Générer les miniatures en tâche de fond ?',
        ]
    ],

    // Mails
    'mails' => [
        '2fa' => [
            'title' => 'Sécurisez votre connexion',
            'message' => 'Veuillez utiliser le code suivant :code pour sécuriser votre connexion.',
            'button' => 'Confirmer la connexion'
        ],
    ],
];