<!DOCTYPE HTML>
<html lang="<?= $requestLang ?>">
<?php $page_title = 'A propos de nous'; $page_md = 'Voici sur cette page ce que nous sommes' ?>
<?php include __DIR__ . DIRECTORY_SEPARATOR . 'part/head.php'; ?>
<body class="shock-body">
    <?php include __DIR__ . DIRECTORY_SEPARATOR . 'part/header.php'; ?>
    <main id="main" class="shock-main bg-color black">
        <section class="shock-section pt-2 pb-2 has-holder">
            <div class="container">
                <div class="row g-4">
                    <div class="col-12 col-md-6 align-v-center">
                        <div class="gallery image-mirror align-h-left">
                            <div class="image-wrapper">
                                <img src="<?= HOME_PATH ?>assets/img/b-10.webp" alt="Image" class="image shadow rounded" />
                            </div>
                            <a href="<?= HOME_PATH ?>assets/img/b-10.webp" class="mirror-button lightbox-link magnetic-effect">
                                <i class="fa-solid fa-circle-play mirror-icon primary floating-item"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 align-v-center">
                        <div class="side-intro">
                            <h1 class="title white">
                                <span class="slide-title text-1 text-style-1 text-outline white-75">
                                    Construction
                                </span>
                                <span class="text-2 text-style-3 text-italic white">
                                    de bons
                                    <span class="typed-text"></span>
                                </span>
                            </h1>
                            <div id="typed-strings">
                                <span>projets</span>
                                <span>choses</span>
                                <span>rêves</span>
                            </div>
                            <div class="description gray">
                                <p>
                                    Le design est un concept qui représente le processus de création de produits basé sur l'excellence technique et esthétique, dans le but de résoudre des problèmes.
                                </p>
                            </div>
                            <a href="<?= HOME_PATH ?>nos-services" class="button double-edge transparent white-hover">
                                <span class="button-text white black-hover">
                                    COMMENCER
                                </span>
                                <i class="fa-solid fa-arrow-right button-icon white black-hover"></i>
                                <span class="overlay gray-50 magnetic-effect"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="shock-section pt-2 pb-2">
            <div class="container">
                <div class="row g-4">
                    <div class="col-12 col-md-7 align-v-center">
                        <div class="holder">
                            <div class="basic-intro">
                                <h2 class="title text-style-3 white">
                                    <span class="text-1 text-outline white">
                                        Découvrez
                                    </span>
                                    <span class="text-2 text-italic white">notre histoire.</span>
                                </h2>
                                <div class="description gray">
                                    <p>Plongez dans notre parcours passionnant qui a donné vie à notre plateforme créative. Notre histoire débute avec une vision audacieuse de transformer des idées en réalité numérique captivante. De modestes débuts à une équipe de talents diversifiés, chaque étape de notre voyage a été marquée par l'innovation, la persévérance et la volonté constante d'atteindre l'excellence.</p>
                                </div>
                            </div>
                            <hr class="gray-25">
                            <figure class="blockquote">
                                <blockquote class="blockquote-body text-style-11 white">
                                    <p style="color: white !important">
                                        "Ceci est juste un site de teste".
                                    </p>
                                </blockquote>
                                <figcaption class="blockquote-footer">
                                    <cite title="Source Title">
                                        Prince Steve Tokpo / <?= APP_NAME ?>
                                    </cite>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-12 col-md-5" data-aos="fade-up" data-aos-delay="300">
                        <div class="image-wrapper" data-lax="inertia-top">
                            <img src="<?= HOME_PATH ?>assets/img/b-14.webp" class="image shadow rounded" alt="Ceci est un site teste" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="shock-section pt-5">
            <div class="container">
                <span class="zzz large scheme-1 gray-75"></span>
            </div>
        </section>
        
        <section class="shock-section pt-5 pb-6">
            <div class="container">
                <div class="row mb-35">
                    <div class="col-12 col-md-8">
                        <div class="basic-intro">
                            <h2 class="title text-style-3 white">
                                <span class="text-1 text-outline white">
                                    Expert
                                </span>
                                <span class="text-2 text-italic white">
                                    services d'unité.
                                </span>
                            </h2>
                            <div class="description gray">
                                <p>
                                    Au fil de nombreuses années de travail, nous avons construit une histoire très réussie dans notre domaine d'expertise.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 align-h-right align-v-bottom">
                        <a href="<?= HOME_PATH ?>nous-contacter" class="button double-edge mt-3 transparent white-hover">
                            <span class="button-text white black-hover">
                                Lire plus
                            </span>
                            <i class="fa-solid fa-arrow-right button-icon white black-hover"></i>
                            <span class="overlay gray-50 magnetic-effect"></span>
                        </a>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-12 col-md-6">
                        <div class="card boxed parent">
                            <div class="image-wrapper shadow rounded">
                                <img src="<?= HOME_PATH ?>assets/img/b-34.webp" alt="Image" class="image min-vh-50 fit-cover" />
                            </div>
                            <div class="card-body box shadow rounded" data-bg-color="#1e1d25">
                                <span class="label-vertical outline">
                                    <span class="label-line gray"></span>
                                    <span class="label-text gray">
                                        Abomey-Calavi
                                    </span>
                                </span>
                                <h3 class="title text-style-11 white">
                                    <a href="tel:+22961045091" target="_blank" class="link align-v-center white white-hover hover-up-down">
                                        <i class="fa-solid fa-phone icon"></i>
                                        <span class="text ms-05">
                                            +229 61 04 50 91
                                        </span>
                                        <span class="badge ms-05 primary primary-hover">
                                            <span class="badge-text white white-hover">
                                                Lun-Ven
                                            </span>
                                        </span>
                                    </a>
                                </h3>
                                <p class="description gray">
                                    Notre agence à abomey-calavi est ouverte 5j/24h
                                </p>
                                <div class="list-wrapper align-h-right hover-up-down">
                                    <ul class="icon-h-list">
                                        <li class="item">
                                            <a target="_blank" class="link white primary-hover hover-rotate">
                                                <i class="fa-regular fa-map icon"></i>
                                            </a>
                                        </li>
                                        <li class="item">
                                            <a href="mailto:dev.stevetokpo@gmail.com" target="_blank" class="link white primary-hover hover-rotate">
                                                <i class="fa-regular fa-envelope icon"></i>
                                            </a>
                                        </li>
                                        <li class="item">
                                            <a href="https://wa.me/22961045091?text=Bonsoir+Prince+bon+travail" target="_blank" class="link white primary-hover hover-rotate">
                                                <i class="fa-brands fa-whatsapp icon"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card boxed parent">
                            <div class="image-wrapper shadow rounded">
                                <img src="<?= HOME_PATH ?>assets/img/b-35.webp" alt="Image" class="image min-vh-50 fit-cover"/>
                            </div>
                            <div class="card-body box shadow rounded" data-bg-color="#1e1d25">
                                <span class="label-vertical outline">
                                    <span class="label-line gray"></span>
                                    <span class="label-text gray">
                                        Cotonou
                                    </span>
                                </span>
                                <h3 class="title text-style-11 white">
                                    <a href="tel:+22961045091" target="_blank"
                                        class="link align-v-center white white-hover hover-up-down">
                                        <i class="fa-solid fa-phone icon"></i>
                                        <span class="text ms-05">
                                            +229 61 04 50 91
                                        </span>
                                        <span class="badge ms-05 primary primary-hover">
                                            <span class="badge-text white white-hover">
                                                Lun-Dim
                                            </span>
                                        </span>
                                    </a>
                                </h3>
                                <p class="description gray">
                                    Notre agence de cotonou est toujours ouverte 24h/24
                                </p>
                                <div class="list-wrapper align-h-right hover-up-down">
                                    <ul class="icon-h-list">
                                        <li class="item">
                                            <a target="_blank" class="link white primary-hover hover-rotate">
                                                <i class="fa-regular fa-map icon"></i>
                                            </a>
                                        </li>
                                        <li class="item">
                                            <a href="mailto:dev.stevetokpo@gmail.com" target="_blank" class="link white primary-hover hover-rotate">
                                                <i class="fa-regular fa-envelope icon"></i>
                                            </a>
                                        </li>
                                        <li class="item">
                                            <a href="https://wa.me/22961045091?text=Hello..." target="_blank" class="link white primary-hover hover-rotate">
                                                <i class="fa-brands fa-whatsapp icon"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include __DIR__ . DIRECTORY_SEPARATOR . 'part/footer.php'; ?>
    <?php include __DIR__ . DIRECTORY_SEPARATOR . 'part/script.php'; ?>
</body>
</html>