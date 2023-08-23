<div id="preloader" class="preloader" data-delay="0" data-limit="2000">
    <img src="<?= HOME_PATH ?>assets/img/logo-white.png" class="emblem" alt="Chargement du site test" hidden="hidden"/>
</div>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= 'Acceuil - ' . APP_NAME ?></title>
    <meta name="description" content="Décrouvrez notre agence digital <?= APP_NAME ?>.">
    <meta name="author" content="Steve Tokpo">
    <link rel="shortcut icon" href="<?= HOME_PATH ?>assets/img/logo.png"/>
    
    <link rel="stylesheet" href="<?= HOME_PATH ?>assets/css/vendor/preloader.min.css" />
    <link rel="stylesheet" href="<?= HOME_PATH ?>assets/css/vendor/font-family.min.css" />
    <link rel="stylesheet" href="<?= HOME_PATH ?>assets/css/vendor/font-awesome.min.css" />
    <link rel="stylesheet" href="<?= HOME_PATH ?>assets/css/vendor/menu-engine.min.css" />
    <link rel="stylesheet" href="<?= HOME_PATH ?>assets/css/vendor/menu-grid.min.css" />
    <link rel="stylesheet" href="<?= HOME_PATH ?>assets/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= HOME_PATH ?>assets/css/vendor/swiper.min.css" />
    <link rel="stylesheet" href="<?= HOME_PATH ?>assets/css/vendor/dynamic-slider.min.css" />
    <link rel="stylesheet" href="<?= HOME_PATH ?>assets/css/vendor/bricklayer.min.css" />
    <link rel="stylesheet" href="<?= HOME_PATH ?>assets/css/vendor/lightbox.min.css" />
    <link rel="stylesheet" href="<?= HOME_PATH ?>assets/css/vendor/aos.min.css" />
    
    <link rel="stylesheet" href="<?= HOME_PATH ?>assets/css/theme.css" />
    <link rel="stylesheet" href="<?= HOME_PATH ?>assets/css/core.css" />
    <link rel="stylesheet" href="<?= HOME_PATH ?>assets/css/main.css" />
</head>
<style>
    @keyframes rotate {
        0% {
            transform: rotate(180deg);
        }
        100% {
            transform: rotate(90deg);
        }
    }
    .rotations {
        transform: rotate(90deg);
        animation: rotate 3s linear 1;
    }
    #audio-button {
        position: fixed;
        bottom: 20px;
        right: 20px;
        border: none;
        cursor: pointer;
        margin: 20px;
        box-shadow: 6px 6px 12px silver, -6px -6px 12px silver;
        background-color: white;
        color: black;
        padding: 10px;
        padding-left: 16px;
        padding-right: 16px;
        border-radius: 20px;
    }
    .cee {
        box-shadow: 3px 3px 6px silver, -3px -3px 6px silver;
        background-color: #efefef;
        color: #0e0e0e;
        padding: 10px;
        padding-left: 16px;
        padding-right: 16px;
        border-radius: 20px;
    }
    .divboss {
        display: flex;
        justify-content: space-between;
        padding-left: 15px;
        padding-right: 15px;
    }
</style>