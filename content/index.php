<?php

    $__theme = 'sombre';

    if ( isset($_GET['theme']) AND in_array($_GET['theme'], array('clair', 'sombre', 'hiver'))  ) {
        $__theme = htmlspecialchars(trim($_GET['theme']));
    }

    $blog = [
        [
            'title' => 'Les Tendances du Design Web en 2023',
            'content' => 'Découvrez les dernières évolutions et tendances en matière de design web qui définiront l\'expérience utilisateur et l\'esthétique des sites cette année.'
        ],
        [
            'title' => 'Stratégies de Marketing Digital à Succès',
            'content' => 'Plongez dans le monde du marketing digital et explorez des stratégies éprouvées qui vous aideront à accroître la visibilité de votre entreprise et à atteindre vos objectifs commerciaux.'
        ],
        [
            'title' => 'L\'Art de la Rédaction Web Convaincante',
            'content' => 'Décortiquez les secrets de la rédaction web efficace. Apprenez à créer un contenu engageant qui capte l\'attention de votre audience et qui communique vos messages clés de manière persuasive.'
        ],
        [
            'title' => 'L\'Évolution des Médias Sociaux: Nouveaux Horizons',
            'content' => 'Explorez comment les médias sociaux continuent de se développer et d\'impacter nos vies, en découvrant les plateformes émergentes et les meilleures pratiques pour une présence sociale réussie.'
        ],
        [
            'title' => 'L\'Importance du Branding Cohérent',
            'content' => 'Plongez dans le monde du branding et apprenez pourquoi une identité de marque cohérente est essentielle pour établir une connexion solide avec votre public et pour vous démarquer dans un marché compétitif.'
        ],
        [
            'title' => 'Le Futur de l\'Expérience Client',
            'content' => 'Explorez comment les avancées technologiques transforment l\'expérience client. Découvrez comment offrir des interactions exceptionnelles qui créent une fidélité durable avec votre clientèle.'
        ],
        [
            'title' => 'Inspiration Artistique: Rencontre avec nos Designers',
            'content' => 'Plongez dans l\'univers créatif de nos designers. Découvrez leurs sources d\'inspiration, leurs méthodes de travail et comment ils transforment des idées en visuels saisissants.'
        ],
        [
            'title' => 'Les Bases du Référencement SEO',
            'content' => 'Démystifiez le référencement SEO en apprenant les bases essentielles pour optimiser votre site et le faire grimper dans les classements des moteurs de recherche, générant ainsi un trafic organique précieux.'
        ],
        [
            'title' => 'Coulisses de Notre Processus de Création de Site',
            'content' => 'Obtenez un aperçu exclusif de la manière dont nous concevons et développons des sites web exceptionnels. Explorez les différentes étapes du processus et découvrez comment chaque élément prend vie.'
        ]
    ];

?>
<!DOCTYPE HTML>
<html lang="<?= $requestLang ?>">
<?php $page_title = 'Acceuil du site test'; $page_md = 'Découvrez notre petite start-up digital' ?>
<?php include __DIR__ . DIRECTORY_SEPARATOR . 'part/head.php'; ?>
<?php
    if ( $__theme === 'hiver' ) {
?>
        <link rel="stylesheet" href="<?= HOME_PATH ?>assets/css/snow.css">
        <script src="<?= HOME_PATH ?>assets/js/snow.js" defer></script>
<?php
    }
?>
<body class="shock-body">
    <?php include __DIR__ . DIRECTORY_SEPARATOR . 'index-' . $__theme . '.php'; ?>
    <?php include __DIR__ . DIRECTORY_SEPARATOR . 'part/script.php'; ?>
</body>
</html>