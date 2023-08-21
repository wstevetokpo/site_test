<?php include __DIR__ . DIRECTORY_SEPARATOR . 'part/header-' . $__theme . '.php'; ?>
<main id="main" class="shock-main">
    <section id="home" class="shock-section dynamic-slider scheme-1" data-autoplay="10000">
        <div id="slide-index" class="slide-index">
            <span class="slide-index-current">
                <span class="slide-index-inner"></span>
            </span>
            <span class="slide-index-total"></span>
        </div>
        <nav class="slide-navigation">
            <a href="#home" class="slide-navigation-item-prev">
                <span class="arrow-button prev scheme-1 primary">
                    <span class="arrow">
                        <span class="item"></span>
                        <span class="item"></span>
                    </span>
                    <span class="line"></span>
                    <span class="text">
                        PRECEDENT
                    </span>
                </span>
            </a>
            <a href="#home" class="slide-navigation-item-next">
                <span class="arrow-button next scheme-1 primary">
                    <span class="arrow">
                        <span class="item"></span>
                        <span class="item"></span>
                    </span>
                    <span class="line"></span>
                    <span class="text">
                        SUIVANT
                    </span>
                </span>
            </a>
        </nav>
        <div class="slide-info-menu parent">
            <div id="slide-info-toggle" class="slide-info-toggle">
                <span class="arrow-button cross scheme-2 primary">
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
        <div class="slide-item side-intro current-slide">
            <div class="slide-content">
                <span class="slide-title text-1 text-style-1 black">
                    Créativité
                </span>
                <div class="slide-description">
                    <span class="text-2 text-style-4 text-italic black">
                        en <mark class="animated-underline primary">action</mark>!
                    </span>
                    <div class="description gray">
                        <p>
                            Explorez notre univers de services polyvalents allant de la création de sites captivants au marketing digital percutant, en passant par un design graphique innovant et une rédaction web qui donne vie à vos idées. Faites émerger le meilleur de votre entreprise avec notre expertise complète.
                        </p>
                    </div>
                </div>
            </div>
            <div class="slide-image-wrapper">
                <div class="slide-image-inner">
                    <img src="<?= HOME_PATH ?>assets/img/color.webp" alt="Image" class="slide-image bg-color accent" />
                </div>
            </div>
            <div class="slide-action">
                <div class="slide-action-inner">
                    <span class="slide-action-title">
                        Qu'attendez-vous?
                    </span>
                    <a href="#modal" class="slide-action-link animated-text scheme-1 primary" data-bs-toggle="modal" data-bs-target="#modal">
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
        </div>
        <div class="slide-item side-intro">
            <div class="slide-content">
                <span class="slide-title text-1 text-style-1 black">
                    Créativité
                </span>
                <div class="slide-description">
                    <span class="text-2 text-style-4 text-italic black">
                        en <mark class="animated-underline primary">action</mark>!
                    </span>
                    <div class="description gray">
                        <p>
                            Explorez notre univers de services polyvalents allant de la création de sites captivants au marketing digital percutant, en passant par un design graphique innovant et une rédaction web qui donne vie à vos idées. Faites émerger le meilleur de votre entreprise avec notre expertise complète.
                        </p>
                    </div>
                </div>
            </div>
            <div class="slide-image-wrapper">
                <div class="slide-image-inner">
                    <img src="<?= HOME_PATH ?>assets/img/color1.webp" alt="Image" class="slide-image bg-color accent" />
                </div>
            </div>
            <div class="slide-action">
                <div class="slide-action-inner">
                    <span class="slide-action-title">
                        Qu'attendez-vous?
                    </span>
                    <a href="#modal" class="slide-action-link animated-text scheme-1 primary" data-bs-toggle="modal" data-bs-target="#modal">
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
        </div>
        <div class="slide-item side-intro current-slide">
            <div class="slide-content">
                <span class="slide-title text-1 text-style-1 black">
                    Créativité
                </span>
                <div class="slide-description">
                    <span class="text-2 text-style-4 text-italic black">
                        en <mark class="animated-underline primary">action</mark>!
                    </span>
                    <div class="description gray">
                        <p>
                            Explorez notre univers de services polyvalents allant de la création de sites captivants au marketing digital percutant, en passant par un design graphique innovant et une rédaction web qui donne vie à vos idées. Faites émerger le meilleur de votre entreprise avec notre expertise complète.
                        </p>
                    </div>
                </div>
            </div>
            <div class="slide-image-wrapper">
                <div class="slide-image-inner">
                    <img src="<?= HOME_PATH ?>assets/img/color2.webp" alt="Image" class="slide-image bg-color accent" />
                </div>
            </div>
            <div class="slide-action">
                <div class="slide-action-inner">
                    <span class="slide-action-title">
                        Qu'attendez-vous?
                    </span>
                    <a href="#modal" class="slide-action-link animated-text scheme-1 primary" data-bs-toggle="modal" data-bs-target="#modal">
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
        </div>
    </section>
    
    <section class="shock-section">
        <div class="scrolling-text has-image">
            <div class="image-wrapper max-w-25 mb-5">
                <img src="<?= HOME_PATH ?>assets/img/b-14.webp" alt="Image" class="image floating-item" />
            </div>
            <div class="text-wrapper mix-blend-lighter">
                <h2 class="text text-style-1 text-outline gray-75" data-lax="h-left">
                    Voici un texte qui scroll vers la gauche en descendant
                </h2>
                <h3 class="text text-style-8 text-italic gray-75" data-lax="h-right">
                    voici un autre long texte qui scroll vers la droite en descendant et vers la droite en montant.
                </h3>
            </div>
        </div>
    </section>
    
    <section class="shock-section pt-2 pb-4">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-lg-7 align-v-center" data-aos="zoom-in-up" data-aos-delay="300">
                    <div class="holder">
                        <div class="basic-intro mb-35">
                            <h2 class="title black">
                                <span class="text-1 text-style-7">Nous recherchons</span>
                                <span class="text-2 text-style-8 text-italic">l'<mark class="animated-underline accent">extraordinaire</mark>.
                            </span>
                            </h2>
                            <div class="description gray">
                                <p>
                                    Au cœur de notre engagement, réside la recherche incessante de l'extraordinaire, guidés par notre passion inébranlable pour l'excellence et l'innovation.
                                </p>
                            </div>
                        </div>
                        <div class="row g-5">
                            <div class="col-12 col-md-4">
                                <div class="radial-progress-bar">
                                    <div class="item">
                                        <h3 class="title text-style-11 black">
                                            Image de marque
                                        </h3>
                                        <div class="counter" data-value="100" data-symbol="%" data-duration="2500" data-bar-stroke="4" data-bar-stroke-empty="1" data-bar-color="var(--primary-color)" data-empty-bar-color="var(--black-25-color)" data-text-bg-color="var(--black-color)" data-text-color="var(--white-color)"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="radial-progress-bar">
                                    <div class="item">
                                        <h3 class="title text-style-11 black">
                                            Consultation
                                        </h3>
                                        <div class="counter" data-value="87" data-symbol="%" data-duration="2500" data-bar-stroke="4" data-bar-stroke-empty="1" data-bar-color="var(--primary-color)" data-empty-bar-color="var(--black-25-color)" data-text-bg-color="var(--black-color)" data-text-color="var(--white-color)"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="radial-progress-bar">
                                    <div class="item">
                                        <h3 class="title text-style-11 black">
                                            Développement
                                        </h3>
                                        <div class="counter" data-value="92" data-symbol="%" data-duration="2500" data-bar-stroke="4" data-bar-stroke-empty="1" data-bar-color="var(--primary-color)" data-empty-bar-color="var(--black-25-color)" data-text-bg-color="var(--black-color)" data-text-color="var(--white-color)"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5" data-aos="zoom-in-up" data-aos-delay="600">
                    <div class="circular-text">
                        <div class="emblem to-top-left mix-blend-lighter gray-75">
                            Design
                        </div>
                    </div>
                    <div class="gallery swiper slider has-navigation has-scrollbar scheme-1 primary" data-columns="1,1,1,1" data-autoplay="10000" data-loop="true">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="<?= HOME_PATH ?>assets/img/b-10.webp" class="item lightbox-link hover-zoom-rotate">
                                    <div class="image-wrapper">
                                        <img src="<?= HOME_PATH ?>assets/img/b-10.webp" class="image" alt="This is an example description for this item." />
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?= HOME_PATH ?>assets/img/b-16.webp" class="item lightbox-link hover-zoom-rotate">
                                    <div class="image-wrapper">
                                        <img src="<?= HOME_PATH ?>assets/img/b-16.webp" class="image"
                                            alt="This is an example description for this item." />
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?= HOME_PATH ?>assets/img/b-10.webp" class="item lightbox-link hover-zoom-rotate">
                                    <div class="image-wrapper">
                                        <img src="<?= HOME_PATH ?>assets/img/b-10.webp" class="image"
                                            alt="This is an example description for this item." />
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include __DIR__ . DIRECTORY_SEPARATOR . 'part/newsletter.php'; ?>

    <section class="shock-section pt-6 pb-6 bg-color white">
        <div class="container">
            <div id="load-more" class="row g-4" data-display="6" data-columns="3">
                <?php
                    foreach ($blog as $key => $value) {
                        $n = $key + 1;
                        $q = $key + 5;
                ?>
                <div class="col-12 col-md-6 col-lg-4 load-more-item"
                    <?php if ( $key <= 5 ) { echo ' data-aos="fade-up" data-aos-delay="' . $n * 100 . '"'; } ?>>
                    <div class="card outline parent bg-color gray-10">
                        <?php
                                    if ( $key == 0 ) {
                                ?>
                            <div class="sticky-post-icon primary">
                                <i class="fas fa-thumbtack icon white"></i>
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
                            <h3 class="title text-style-11 black">
                                <?= $value['title'] ?>
                            </h3>
                            <p class="description">
                                <?= $value['content'] ?>
                            </p>
                            <hr class="gray-10">
                            <div class="tag-cloud">
                                <a class="link">
                                    <span class="badge outline gray-50 primary-hover">
                                        <span class="badge-text gray white-hover">
                                            16/08/2023
                                        </span>
                                    </span>
                                </a>
                                <a class="link">
                                    <span class="badge outline gray-50 primary-hover">
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
                <button id="load-more-button" class="button outline black primary-hover magnetic-effect">
                    <span class="button-text black black-hover">
                        Charger plus
                    </span>
                    <i class="fa-solid fa-arrow-rotate-right button-icon black black-hover"></i>
                </button>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . DIRECTORY_SEPARATOR . 'part/footer-' . $__theme . '.php'; ?>