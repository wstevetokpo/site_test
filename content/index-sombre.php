<?php include __DIR__ . DIRECTORY_SEPARATOR . 'part/header-' . $__theme . '.php'; ?>
<main id="main" class="shock-main bg-color black">
    <section id="home" class="shock-section has-overlay" style="height: 100vh !important">
        <div class="banner" style="height: 100vh !important">
            <div class="content-wrapper text-center">
                <div class="basic-intro mb-35">
                    <h2 class="title text-style-5">
                        <span class="text-1 text-outline white-75">
                            Un endroit pur
                        </span>
                        <span class="text-2 text-italic white">
                            pour trouver <mark class="animated-underline tertiary"> les meilleurs services</mark>.
                        </span>
                    </h2>
                    <div class="description white-50">
                        <p>
                            Notre mission est de fournir à nos clients des produits qui transformeront la manière
                            dont les gens voient le monde.<br>
                            Transformer une idée en quelque chose qui fonctionne, voilà ce qui nous anime.
                        </p>
                    </div>
                </div>
                <div class="gallery mt-3">
                    <a href="<?= HOME_PATH ?>assets/img/c-22.png"
                        class="button outline lightbox-link white tertiary-hover magnetic-effect">
                        <span class="button-text white white-hover">
                            En savoir plus
                        </span>
                        <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
                    </a>
                </div>
            </div>
            <div class="image-wrapper" style="height: 100vh !important">
                <video class="video vh-75 fit-cover" style="height: 100vh !important" playsinline="playsinline"
                    autoplay="autoplay" muted="muted" loop="loop">
                    <source src="<?= HOME_PATH ?>assets/vid/b-29.mp4" type="video/mp4">
                </video>
            </div>
            <div class="overlay black-50"></div>
        </div>
    </section>
    <section class="shock-section dynamic-slider is-banner scheme-2">
        <div id="slide-index" class="slide-index">
            SERVICES D'EXCELLENCE
        </div>
        <nav id="slide-navigation" class="slide-navigation hover-up-down">
            <button id="scroll-down" class="scroll-down tertiary"></button>
        </nav>
        <div class="slide-info-menu parent">
            <div id="slide-info-toggle" class="slide-info-toggle">
                <span class="arrow-button cross scheme-2 tertiary">
                    <span class="arrow">
                        <span class="item"></span>
                        <span class="item"></span>
                    </span>
                    <span class="line"></span>
                    <a href="#home" id="slide-info-toggle-text" class="text" data-toggle="VOIR MOINS">
                        VOIR PLUS
                    </a>
                </span>
            </div>
            <span class="slide-info-menu-close"></span>
        </div>
        <section class="slide-item side-intro current-slide">
            <div class="slide-content">
                <span class="slide-title text-1 text-style-1 text-outline white-75">
                    Créativité
                </span>
                <div class="slide-description">
                    <span class="text-2 text-style-3 text-italic white">
                        en <mark class="animated-underline tertiary">Action</mark>!
                    </span>
                    <div class="description gray">
                        <p>
                            Explorez notre univers de services polyvalents allant de la création de sites captivants
                            au marketing digital percutant, en passant par un design graphique innovant et une
                            rédaction web qui donne vie à vos idées. Faites émerger le meilleur de votre entreprise
                            avec notre expertise complète.
                        </p>
                    </div>
                    <a href="<?= HOME_PATH ?>nos-services" class="button arrow-button next scheme-2 tertiary">
                        <span class="arrow">
                            <span class="item"></span>
                            <span class="item"></span>
                        </span>
                        <span class="line"></span>
                        <span class="text">
                            COMMENCER
                        </span>
                    </a>
                </div>
            </div>
            <div class="slide-image-wrapper">
                <div class="slide-image-inner">
                    <video autoplay src="<?= HOME_PATH ?>assets/vid/b-29.mp4" class="slide-image"></video>
                </div>
            </div>
            <div class="slide-action">
                <div class="slide-action-inner">
                    <span class="slide-action-title">
                        Qu'attendez-vous?
                    </span>
                    <a href="#modal" class="slide-action-link animated-text scheme-2 tertiary"
                        data-bs-toggle="modal" data-bs-target="#modal">
                        Explorer les fonctionnalités
                    </a>
                </div>
            </div>

            <div class="slide-info">
                <a class="slide-info-item">
                    <h3 class="slide-info-title">
                        Création de site <i class="fas fa-chevron-right icon"></i>
                    </h3>
                    <span class="slide-info-detail">
                        Notre équipe experte en développement web crée des sites<span class="ellipse">...</span><br>
                        innovants et fonctionnels qui captent l'essence de votre entreprise et offrent une
                        expérience utilisateur exceptionnelle.
                    </span>
                </a>
                <a class="slide-info-item">
                    <h3 class="slide-info-title">
                        Marketing digital <i class="fas fa-chevron-right icon"></i>
                    </h3>
                    <span class="slide-info-detail">
                        Nous vous aidons à étendre votre portée en ligne <span class="ellipse">...</span><br> grâce
                        à des stratégies de marketing digital percutantes, en utilisant les dernières techniques
                        pour attirer, engager et fidéliser votre audience.
                    </span>
                </a>
                <a class="slide-info-item">
                    <h3 class="slide-info-title">
                        Design graphique <i class="fas fa-chevron-right icon"></i>
                    </h3>
                    <span class="slide-info-detail">
                        Notre talentueuse équipe de designers graphiques transforme vos idées en visuels captivants,
                        en associant créativité et esthétique pour donner vie à votre marque.
                    </span>
                </a>
                <a class="slide-info-item">
                    <h3 class="slide-info-title">
                        Rédaction web <i class="fas fa-chevron-right icon"></i>
                    </h3>
                    <span class="slide-info-detail">
                        Des mots qui comptent. Nos rédacteurs web créent un contenu pertinent, informatif et
                        engageant qui communique efficacement votre message et améliore votre visibilité en ligne.
                    </span>
                </a>
            </div>
            <div class="slide-expander"></div>
        </section>
    </section>

    <section class="shock-section pt-4 pb-6 bg-color black">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="gallery" data-lax="inertia-top">
                        <div class="row g-1">
                            <div class="col-6">
                                <a href="<?= HOME_PATH ?>assets/img/a-1.png"
                                    class="item lightbox-link hover-opacity floating-item">
                                    <div class="image-wrapper">
                                        <div class="overlay has-border rounded white"></div>
                                        <img src="<?= HOME_PATH ?>assets/img/a-1.png" class="image p-1 fit-cover" alt="Image du site test" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="<?= HOME_PATH ?>assets/img/a-2.png" class="item lightbox-link hover-opacity">
                                    <div class="image-wrapper">
                                        <div class="overlay has-border rounded white"></div>
                                        <img src="<?= HOME_PATH ?>assets/img/a-2.png" class="image p-1 fit-cover" alt="Image du site test" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="<?= HOME_PATH ?>assets/img/a-3.png" class="item lightbox-link hover-opacity">
                                    <div class="image-wrapper">
                                        <div class="overlay has-border rounded white"></div>
                                        <img src="<?= HOME_PATH ?>assets/img/a-3.png" class="image p-1 fit-cover" alt="Image du site test" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="<?= HOME_PATH ?>assets/img/a-4.png"
                                    class="item lightbox-link hover-opacity">
                                    <div class="image-wrapper">
                                        <div class="overlay has-border rounded white"></div>
                                        <img src="<?= HOME_PATH ?>assets/img/a-4.png" class="image p-1 fit-cover"
                                            alt="Image du site test" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 align-v-bottom" data-aos="fade-up" data-aos-delay="600">
                    <div class="holder">
                        <div class="basic-intro mb-35">
                            <h2 class="title text-style-5">
                                <span class="text-1 text-outline white-75">
                                    Nous recherchons
                                </span>
                                <span class="text-2 text-italic white">
                                    l'
                                    <mark class="animated-underline tertiary">
                                        extraordinaire
                                    </mark>
                                    .
                                </span>
                            </h2>
                            <div class="description gray">
                                <p>
                                    Au cœur de notre engagement, réside la recherche incessante de l'extraordinaire,
                                    guidés par notre passion inébranlable pour l'excellence et l'innovation.
                                </p>
                            </div>
                        </div>
                        <div class="row g-5">
                            <div class="col-12 col-md-4">
                                <div class="radial-progress-bar">
                                    <div class="item">
                                        <h3 class="title text-style-11 white">
                                            Image de marque
                                        </h3>
                                        <div class="counter outline" data-value="100" data-symbol="%"
                                            data-duration="2500" data-bar-stroke="4" data-bar-stroke-empty="1"
                                            data-bar-color="var(--tertiary-color)"
                                            data-empty-bar-color="var(--gray-color)"
                                            data-text-bg-color="transparent" data-text-color="var(--gray-color)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="radial-progress-bar">
                                    <div class="item">
                                        <h3 class="title text-style-11 white">
                                            Consultation
                                        </h3>
                                        <div class="counter outline" data-value="87" data-symbol="%"
                                            data-duration="2500" data-bar-stroke="4" data-bar-stroke-empty="1"
                                            data-bar-color="var(--tertiary-color)"
                                            data-empty-bar-color="var(--gray-color)"
                                            data-text-bg-color="transparent" data-text-color="var(--gray-color)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="radial-progress-bar">
                                    <div class="item">
                                        <h3 class="title text-style-11 white">
                                            Développement
                                        </h3>
                                        <div class="counter outline" data-value="92" data-symbol="%"
                                            data-duration="2500" data-bar-stroke="4" data-bar-stroke-empty="1"
                                            data-bar-color="var(--tertiary-color)"
                                            data-empty-bar-color="var(--gray-color)"
                                            data-text-bg-color="transparent" data-text-color="var(--gray-color)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="shock-section pt-6 pb-6 bg-color black js-switch-price">
        <div class="container">
            <div class="basic-intro mb-35 text-center">
                <h2 class="title text-style-5">
                    <span class="text-1 text-outline white-75">
                        Choisissez votre
                    </span>
                    <span class="text-2 text-italic white">nouveau <mark class="animated-underline tertiary">plan de
                            consultation</mark>.</span>
                </h2>
                <div class="description">
                    <div class="form-area scheme-2 tertiary">
                        <div class="plan-switcher">
                            <label class="form-label">
                                Annuel
                            </label>
                            <div class="form-check form-switch">
                                <input type="checkbox" class="form-check-input form-switch js-switch-price-button"
                                    checked="checked">
                            </div>
                            <label class="form-label">
                                Mensuel
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card outline has-price parent">
                        <div class="card-header pb-0 text-center">
                            <h3 class="title m-0 text-style-11 text-italic white">
                                <span class="bg-color black">
                                    BASIQUE
                                </span>
                                <span class="zzz mt-1 mb-1 scheme-2 gray"></span>
                            </h3>
                            <div class="price-wrapper">
                                <span class="price text-style-3 tertiary hover-up-down" data-annual="45"
                                    data-monthly="20">20</span>
                                <span class="billing text-style-7 text-outline gray-75">
                                    k/mo
                                </span>
                                <sup class="currency text-style-7 text-outline gray-75">
                                    FCFA
                                </sup>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="checklist">
                                <li class="item">
                                    <span class="text">
                                        Gestion des réseaux sociaux
                                    </span>
                                    <img class="image-icon white"
                                        src="<?= HOME_PATH ?>assets/img/checkmark-outline.svg" alt="Icon"
                                        data-shock-icon="32" />
                                </li>
                                <li class="item">
                                    <span class="text">
                                        Campagne publicitaire
                                    </span>
                                    <img class="image-icon white"
                                        src="<?= HOME_PATH ?>assets/img/checkmark-outline.svg" alt="Icon"
                                        data-shock-icon="32" />
                                </li>
                                <li class="item">
                                    <span class="text">
                                        Création de vue
                                    </span>
                                    <img class="image-icon white"
                                        src="<?= HOME_PATH ?>assets/img/checkmark-outline.svg" alt="Icon"
                                        data-shock-icon="32" />
                                </li>
                                <li class="item">
                                    <span class="text">
                                        Site web
                                    </span>
                                    <img class="image-icon white" src="<?= HOME_PATH ?>assets/img/close-outline.svg"
                                        alt="Icon" data-shock-icon="32" />
                                </li>
                                <li class="item">
                                    <span class="text">
                                        Assistance journalière
                                    </span>
                                    <img class="image-icon white" src="<?= HOME_PATH ?>assets/img/close-outline.svg"
                                        alt="Icon" data-shock-icon="32" />
                                </li>
                            </ul>
                            <div class="button-wrapper align-h-right">
                                <span class="button arrow-button next scheme-2 tertiary">
                                    <span class="arrow">
                                        <span class="item"></span>
                                        <span class="item"></span>
                                    </span>
                                    <span class="line"></span>
                                    <span class="text">
                                        COMMENCER
                                    </span>
                                </span>
                            </div>
                        </div>
                        <a href="<?= HOME_PATH ?>nos-services" class="full-link"></a>
                        <div class="overlay tertiary-25"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="card outline has-price parent">
                        <span class="label-vertical to-bottom-left-out">
                            <span class="label-line gray"></span>
                            <span class="label-text gray">
                                PLUS CHOISIS
                            </span>
                        </span>
                        <div class="card-header pb-0 text-center">
                            <h3 class="title m-0 text-style-11 text-italic white">
                                <span class="bg-color black">
                                    STANDARD
                                </span>
                                <span class="zzz mt-1 mb-1 scheme-2 gray"></span>
                            </h3>
                            <div class="price-wrapper">
                                <span class="price text-style-3 tertiary hover-up-down" data-annual="55"
                                    data-monthly="30">
                                    30
                                </span>
                                <span class="billing text-style-7 text-outline gray-75">
                                    k/mo
                                </span>
                                <sup class="currency text-style-7 text-outline gray-75">
                                    FCFA
                                </sup>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="checklist">
                                <li class="item">
                                    <span class="text">
                                        Gestion des réseaux sociaux
                                    </span>
                                    <img class="image-icon white"
                                        src="<?= HOME_PATH ?>assets/img/checkmark-outline.svg" alt="Icon"
                                        data-shock-icon="32" />
                                </li>
                                <li class="item">
                                    <span class="text">
                                        Campagne publicitaire
                                    </span>
                                    <img class="image-icon white"
                                        src="<?= HOME_PATH ?>assets/img/checkmark-outline.svg" alt="Icon"
                                        data-shock-icon="32" />
                                </li>
                                <li class="item">
                                    <span class="text">
                                        Création de vue
                                    </span>
                                    <img class="image-icon white"
                                        src="<?= HOME_PATH ?>assets/img/checkmark-outline.svg" alt="Icon"
                                        data-shock-icon="32" />
                                </li>
                                <li class="item">
                                    <span class="text">
                                        Site web
                                    </span>
                                    <img class="image-icon white"
                                        src="<?= HOME_PATH ?>assets/img/checkmark-outline.svg" alt="Icon"
                                        data-shock-icon="32" />
                                </li>
                                <li class="item">
                                    <span class="text">
                                        Assistance journalière
                                    </span>
                                    <img class="image-icon white" src="<?= HOME_PATH ?>assets/img/close-outline.svg"
                                        alt="Icon" data-shock-icon="32" />
                                </li>
                            </ul>
                            <div class="button-wrapper align-h-right">
                                <span class="button arrow-button next scheme-2 tertiary">
                                    <span class="arrow">
                                        <span class="item"></span>
                                        <span class="item"></span>
                                    </span>
                                    <span class="line"></span>
                                    <span class="text">
                                        COMMENCER
                                    </span>
                                </span>
                            </div>
                        </div>
                        <a href="<?= HOME_PATH ?>nos-services" class="full-link"></a>
                        <div class="overlay tertiary-25"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="card outline has-price parent">
                        <div class="card-header pb-0 text-center">
                            <h3 class="title m-0 text-style-11 text-italic white">
                                <span class="bg-color black">
                                    PREMIUM
                                </span>
                                <span class="zzz mt-1 mb-1 scheme-2 gray"></span>
                            </h3>
                            <div class="price-wrapper">
                                <span class="price text-style-3 tertiary hover-up-down" data-annual="65"
                                    data-monthly="40">
                                    40
                                </span>
                                <span class="billing text-style-7 text-outline gray-75">
                                    k/mo
                                </span>
                                <sup class="currency text-style-7 text-outline gray-75">
                                    FCFA
                                </sup>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="checklist">
                                <li class="item">
                                    <span class="text">
                                        Gestion des réseaux sociaux
                                    </span>
                                    <img class="image-icon white"
                                        src="<?= HOME_PATH ?>assets/img/checkmark-outline.svg" alt="Icon"
                                        data-shock-icon="32" />
                                </li>
                                <li class="item">
                                    <span class="text">
                                        Campagne publicitaire
                                    </span>
                                    <img class="image-icon white"
                                        src="<?= HOME_PATH ?>assets/img/checkmark-outline.svg" alt="Icon"
                                        data-shock-icon="32" />
                                </li>
                                <li class="item">
                                    <span class="text">
                                        Création de vue
                                    </span>
                                    <img class="image-icon white"
                                        src="<?= HOME_PATH ?>assets/img/checkmark-outline.svg" alt="Icon"
                                        data-shock-icon="32" />
                                </li>
                                <li class="item">
                                    <span class="text">
                                        Site web
                                    </span>
                                    <img class="image-icon white"
                                        src="<?= HOME_PATH ?>assets/img/checkmark-outline.svg" alt="Icon"
                                        data-shock-icon="32" />
                                </li>
                                <li class="item">
                                    <span class="text">
                                        Assistance journalière
                                    </span>
                                    <img class="image-icon white"
                                        src="<?= HOME_PATH ?>assets/img/checkmark-outline.svg" alt="Icon"
                                        data-shock-icon="32" />
                                </li>
                            </ul>
                            <div class="button-wrapper align-h-right">
                                <span class="button arrow-button next scheme-2 tertiary">
                                    <span class="arrow">
                                        <span class="item"></span>
                                        <span class="item"></span>
                                    </span>
                                    <span class="line"></span>
                                    <span class="text">
                                        COMMENCER
                                    </span>
                                </span>
                            </div>
                        </div>
                        <a href="<?= HOME_PATH ?>nos-services" class="full-link"></a>
                        <div class="overlay tertiary-25"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="shock-section has-overlay pt-5 pb-5 bg-image bg-fixed"
        data-bg-image="assets/images/jpg/b-17.jpg">
        <div class="container max-w-85">
            <div class="row">
                <div class="col-12 col-md-6 align-h-center align-v-center">
                    <div class="side-intro">
                        <h2 class="title text-style-5">
                            <span class="text-1 text-outline white-75">
                                Inscrivez-vous maintenant
                            </span>
                            <span class="text-2 text-italic white">
                                à notre <mark class="animated-underline tertiary">newsletter</mark>!
                            </span>
                        </h2>
                        <div class="description gray">
                            <p>
                                Abonnez-vous à notre newsletter et suivez attentivement nos contens.<br>
                                Recevez des actualités en fonction de ce qui vous concerne.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 align-h-center align-v-center">
                    <div class="form-area scheme-2 tertiary">
                        <form onsubmit="return nl_form()" id="nl_form" class="form-fields needs-validation">
                            <?php include __DIR__ . DIRECTORY_SEPARATOR . 'part/nlForm.php'; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay black-75"></div>
    </section>

    <section class="shock-section pt-6 pb-6 bg-color black">
        <div class="container">
            <div id="load-more" class="row g-4" data-display="6" data-columns="3">
                <?php
                    foreach ($blog as $key => $value) {
                        $n = $key + 1;
                        $q = $key + 5;
                ?>
                <div class="col-12 col-md-6 col-lg-4 load-more-item"
                    <?php if ( $key <= 5 ) { echo ' data-aos="fade-up" data-aos-delay="' . $n * 100 . '"'; } ?>>
                    <div class="card parent" data-bg-color="#1e1e24">
                        <?php
                                    if ( $key == 0 ) {
                                ?>
                        <div class="sticky-post-icon white-10">
                            <i class="fas fa-thumbtack icon tertiary"></i>
                        </div>
                        <?php
                                    }
                                ?>
                        <span class="label-vertical to-bottom-right-out hover-show">
                            <span class="label-line gray"></span>
                            <span class="label-text gray">
                                <i class="icon fas fa-user-circle"></i>
                                Par Prince Steve
                            </span>
                        </span>
                        <div class="card-body">
                            <h3 class="title text-style-11 white">
                                <?= $value['title'] ?>
                            </h3>
                            <p class="description">
                                <?= $value['content'] ?>
                            </p>
                            <hr class="gray-10">
                            <div class="tag-cloud">
                                <a class="link">
                                    <span class="badge outline gray-50 tertiary-hover">
                                        <span class="badge-text gray white-hover">
                                            16/08/2023
                                        </span>
                                    </span>
                                </a>
                                <a class="link">
                                    <span class="badge outline gray-50 tertiary-hover">
                                        <span class="badge-text gray white-hover">
                                            <?= APP_NAME ?>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <a class="full-link">
                            <div class="overlay shadow magnetic-effect hover-show bg-image"
                                data-bg-image="<?= HOME_PATH ?>assets/img/a-<?= $q ?>.jpg"></div>
                        </a>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
            <div class="mt-4 text-center">
                <button id="load-more-button" class="button outline white tertiary-hover magnetic-effect">
                    <span class="button-text white white-hover">
                        Charger plus
                    </span>
                    <i class="fa-solid fa-arrow-rotate-right button-icon white white-hover"></i>
                </button>
            </div>
        </div>
    </section>
</main>
<?php include __DIR__ . DIRECTORY_SEPARATOR . 'part/footer-' . $__theme . '.php'; ?>