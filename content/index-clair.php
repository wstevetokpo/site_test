<?php include __DIR__ . DIRECTORY_SEPARATOR . 'part/header-' . $__theme . '.php'; ?>
<main id="main" class="shock-main">
    <section class="shock-section pt-2 pb-4 has-holder">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-md-6 align-v-center">
                    <div class="gallery image-mirror align-h-left">
                        <div class="image-wrapper">
                            <img src="<?= HOME_PATH ?>assets/img/b-34.webp" alt="Image name" class="image shadow" />
                        </div>
                        <a href="<?= HOME_PATH ?>assets/img/b-34.webp" class="mirror-button lightbox-link magnetic-effect">
                            <i class="fa-solid fa-circle-play mirror-icon primary"></i>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 align-v-center">
                    <div class="side-intro">
                        <h1 class="title text-style-1 text-offset">
                            <span class="text-1 filled black">
                                Nous construisons
                            </span>
                            <span class="text-1 outline black" data-lax="inertia-top">
                                Nous construisons
                            </span>
                        </h1>
                        <span class="text-2 text-style-4 fw-400 text-outline text-italic black">
                            d'incroyables <span class="typed-text"></span>
                        </span>
                        <div id="typed-strings">
                            <span>projets</span>
                            <span>choses</span>
                            <span>rêves</span>
                        </div>
                        <div class="description gray">
                            <p>
                                Explorez notre univers de services polyvalents allant de la création de sites captivants au marketing digital percutant, en passant par un design graphique innovant et une rédaction web qui donne vie à vos idées. Faites émerger le meilleur de votre entreprise avec notre expertise complète.
                            </p>
                        </div>
                        <a href="#modal" data-bs-toggle="modal" data-bs-target="#modal" class="button double-edge transparent black-hover">
                            <span class="button-text black white-hover">
                                Commencer
                            </span>
                            <i class="fa-solid fa-arrow-right button-icon black white-hover"></i>
                            <span class="overlay gray-50 magnetic-effect"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="shock-section pt-4 pb-4">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-md-7">
                    <div class="holder">
                        <div class="basic-intro mb-35">
                            <h2 class="title black">
                                <span class="text-1 text-style-5">
                                    Nous recherchons l'
                                </span>
                                <span class="text-2 text-style-5 fw-400 text-outline text-italic">
                                    extraordinaire.
                                </span>
                            </h2>
                            <div class="description gray">
                                <p>
                                    Au cœur de notre engagement, réside la recherche incessante de l'extraordinaire, guidés par notre passion inébranlable pour l'excellence et l'innovation.
                                </p>
                            </div>
                        </div>
                        <div class="line-progress-bar">
                            <div class="item">
                                <h3 class="title text-style-11 black">
                                    Image de marque
                                </h3>
                                <div class="counter" data-value="100" data-symbol="%" data-duration="2500" data-bar-stroke="0.5" data-bar-stroke-empty="0.5" data-bar-color="var(--primary-color)" data-empty-bar-color="var(--gray-50-color)" data-text-bg-color="var(--black-color)" data-text-color="var(--white-color)"></div>
                            </div>
                            <div class="item">
                                <h3 class="title text-style-11 black">
                                    Consultation
                                </h3>
                                <div class="counter" data-value="87" data-symbol="%" data-duration="2500" data-bar-stroke="0.5" data-bar-stroke-empty="0.5" data-bar-color="var(--primary-color)" data-empty-bar-color="var(--gray-50-color)" data-text-bg-color="var(--black-color)" data-text-color="var(--white-color)"></div>
                            </div>
                            <div class="item">
                                <h3 class="title text-style-11 black">
                                    Développement
                                </h3>
                                <div class="counter" data-value="92" data-symbol="%" data-duration="2500" data-bar-stroke="0.5" data-bar-stroke-empty="0.5" data-bar-color="var(--primary-color)" data-empty-bar-color="var(--gray-50-color)" data-text-bg-color="var(--black-color)" data-text-color="var(--white-color)"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5" data-aos="fade-up" data-aos-delay="300">
                    <div class="image-wrapper shadow" data-lax="inertia-top">
                        <img src="<?= HOME_PATH ?>assets/img/b-42.webp" class="image" alt="This is an example description for this item." />
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="shock-section d-only-desktop">
        <div class="scrolling-text has-image">
            <div class="image-wrapper max-w-25 mb-5 shadow floating-item">
                <img src="<?= HOME_PATH ?>assets/img/b-35.webp" alt="Image name" class="image" />
            </div>
            <div class="text-wrapper mix-blend-lighter">
                <h2 class="text text-style-2 fw-400 text-outline text-italic gray-75" data-lax="h-left">
                    Voici un texte qui scroll vers la gauche en descendant
                </h2>
                <h3 class="text text-style-8 gray-75" data-lax="h-right">
                    voici un autre long texte qui scroll vers la droite en descendant et vers la droite en montant.
                </h3>
            </div>
        </div>
    </section>
    
    <!-- <section class="shock-section pt-4 pb-4">
        <div class="container">
            <div class="horizontal-tab scheme-1 primary">
                <ul id="h-tab" class="nav nav-tabs" role="tablist" aria-orientation="horizontal">
                    <li class="nav-item" role="presentation">
                        <button id="h-1-tab" class="nav-link active" aria-selected="true" aria-controls="h-1"
                            data-bs-target="#h-1" data-bs-toggle="tab" role="tab">
                            About Us
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button id="h-2-tab" class="nav-link" aria-selected="false" aria-controls="h-2"
                            data-bs-target="#h-2" data-bs-toggle="tab" role="tab">
                            Our Mission
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button id="h-3-tab" class="nav-link" aria-selected="false" aria-controls="h-3"
                            data-bs-target="#h-3" data-bs-toggle="tab" role="tab">
                            Market Vision
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button id="h-4-tab" class="nav-link" aria-selected="false" aria-controls="h-4"
                            data-bs-target="#h-4" data-bs-toggle="tab" role="tab">
                            Values & Goals
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="h-1" class="tab-pane fade show active" role="tabpanel">
                        <div class="max-w-65 mx-auto mb-3 text-center">
                            <p>We keep in mind that we always need to improve everything we do, aiming to help people
                                with our products, in which we insist on guarantee quality and good service as a
                                priority.</p>
                        </div>
                        <div class="gallery">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-3">
                                    <a href="assets/images/jpg/b-35.jpg" class="item lightbox-link hover-up">
                                        <div class="image-wrapper shadow">
                                            <img src="assets/images/jpg/b-34.jpg" class="image vh-50 fit-cover"
                                                alt="This is an example description for this item." />
                                            <div class="overlay black-50"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-md-6">
                                    <a href="assets/images/jpg/a-39.jpg" class="item lightbox-link hover-up">
                                        <div class="image-wrapper shadow">
                                            <img src="assets/images/jpg/a-39.jpg" class="image vh-50 fit-cover"
                                                alt="This is an example description for this item." />
                                            <div class="overlay black-50"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-md-6 col-lg-3">
                                    <a href="assets/images/jpg/b-35.jpg" class="item lightbox-link hover-up">
                                        <div class="image-wrapper shadow">
                                            <img src="assets/images/jpg/b-35.jpg" class="image vh-50 fit-cover"
                                                alt="This is an example description for this item." />
                                            <div class="overlay black-50"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="h-2" class="tab-pane fade" role="tabpanel">
                        <div class="max-w-65 mx-auto mb-3 text-center">
                            <p>Providing our customers with products that will transform the way people see the
                                world.Following our principles we want to reach the highest level of quality.</p>
                        </div>
                        <div class="gallery">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <a href="#your-link" class="item hover-up">
                                        <div class="text-wrapper text-center">
                                            <h3 class="title text-style-5 text-outline white">VIEW PROJECT</h3>
                                        </div>
                                        <div class="image-wrapper shadow">
                                            <img src="assets/images/jpg/b-34.jpg" class="image vh-50 fit-cover"
                                                alt="This is an example description for this item." />
                                            <div class="overlay black-50"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-md-6">
                                    <a href="#your-link" class="item hover-up">
                                        <div class="text-wrapper text-center">
                                            <h3 class="title text-style-5 text-outline white">VIEW PROJECT</h3>
                                        </div>
                                        <div class="image-wrapper shadow">
                                            <img src="assets/images/jpg/b-35.jpg" class="image vh-50 fit-cover"
                                                alt="This is an example description for this item." />
                                            <div class="overlay black-50"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="h-3" class="tab-pane fade" role="tabpanel">
                        <div class="max-w-65 mx-auto mb-3 text-center">
                            <p>Having the recognition of our product as the main player in the market and becoming a
                                reference for other people and companies that intend to venture into the segment.</p>
                        </div>
                        <div class="gallery">
                            <a href="https://vimeo.com/222990241" class="item lightbox-link hover-up">
                                <div class="text-wrapper text-center">
                                    <h3 class="title text-style-1 text-offset">
                                        <span class="text-1 filled white">VIEW PROJECT</span>
                                        <span class="text-1 outline white magnetic-effect">VIEW PROJECT</span>
                                    </h3>
                                </div>
                                <div class="image-wrapper shadow">
                                    <img src="assets/images/jpg/a-39.jpg" class="image vh-50 fit-cover"
                                        alt="This is an example description for this item." />
                                    <div class="overlay black-50"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="h-4" class="tab-pane fade" role="tabpanel">
                        <div class="max-w-65 mx-auto mb-3 text-center">
                            <p>Over many years of work, we have built a very successful history in our area of
                                expertise. Check out our institutional video where we tell you a little about what we
                                do.</p>
                        </div>
                        <div class="gallery">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                                    <a href="assets/images/jpg/b-27.jpg" class="item lightbox-link hover-up">
                                        <div class="image-wrapper shadow">
                                            <img src="assets/images/jpg/b-27.jpg" class="image vh-50 fit-cover"
                                                alt="This is an example description for this item." />
                                            <div class="overlay black-50"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                                    <a href="assets/images/jpg/b-42.jpg" class="item lightbox-link hover-up">
                                        <div class="image-wrapper shadow">
                                            <img src="assets/images/jpg/b-42.jpg" class="image vh-50 fit-cover"
                                                alt="This is an example description for this item." />
                                            <div class="overlay black-50"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="900">
                                    <a href="https://vimeo.com/222990241" class="item active lightbox-link hover-up">
                                        <i class="fa-solid fa-circle-play gallery-icon white floating-item"></i>
                                        <div class="image-wrapper shadow">
                                            <img src="assets/images/jpg/b-43.jpg" class="image vh-50 fit-cover"
                                                alt="This is an example description for this item." />
                                            <div class="overlay black-50"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    
    <section class="shock-section pt-4 pb-4">
        <div class="container">
            <div class="row mb-35">
                <div class="col-12 col-md-8">
                    <div class="basic-intro">
                        <h2 class="title black">
                            <span class="text-1 text-style-5">
                                Suivez nos </span>
                            <span class="text-2 text-style-5 fw-400 text-outline text-italic">
                                récents articles.
                            </span>
                        </h2>
                        <div class="description gray">
                            <p>
                                Nous avons l'habitude de poster régulièrement des publications par ici! Restez connectés pour suivre nos articles.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 align-h-right align-v-bottom">
                    <a class="button mt-3 double-edge transparent black-hover">
                        <span class="button-text black white-hover">
                            Voir plus
                        </span>
                        <i class="fa-solid fa-arrow-right button-icon black white-hover"></i>
                        <span class="overlay gray-50 magnetic-effect"></span>
                    </a>
                </div>
            </div>
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
    
    <section class="shock-section pt-2 pb-2 bg-color white">
        <div class="container">
            <span class="zzz large scheme-1 gray-75"></span>
        </div>
    </section>

</main>

<div class="vertical-lines scheme-1 primary">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4 align-h-center">
            <span class="line"></span>
        </div>
        <div class="col-12 col-md-6 col-lg-4 align-h-center">
            <span class="line"></span>
        </div>
        <div class="col-12 col-md-6 col-lg-4 align-h-center">
            <span class="line"></span>
        </div>
    </div>
</div>

<?php include __DIR__ . DIRECTORY_SEPARATOR . 'part/footer-' . $__theme . '.php'; ?>