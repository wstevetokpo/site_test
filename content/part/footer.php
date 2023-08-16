<div id="modal" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog max-w-50">
        <div class="modal-content shadow rounded" data-bg-color="#1e1e24">
            <div class="modal-header">
                <i class="fa-solid fa-xmark close-button white tertiary-hover" data-bs-dismiss="modal"
                    aria-label="Close"></i>
                <div class="basic-intro">
                    <h2 class="title text-style-5">
                        <span class="text-1 text-outline white-75">
                            En quoi
                        </span>
                        <span class="text-2 text-italic white">
                            pouvons-nous
                            <mark class="animated-underline tertiary">
                                vous aider
                            </mark>?
                        </span>
                    </h2>
                    <div class="description gray">
                        <p>
                            Veuillez remplir le formulaire ci-dessous et nous vous répondrons sous peu.
                        </p>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="form-area scheme-2 tertiary">
                    <form class="form-fields needs-validation ajax-form">
                        <div class="form-row row">
                            <div class="form-col form-floating col-12 col-md-6">
                                <input type="text"" id=" cf_nom" class="form-control" placeholder="John">
                                <label for="cf_nom" class="form-label">
                                    Nom
                                </label>
                            </div>
                            <div class="form-col form-floating col-12 col-md-6">
                                <input type="email" id="cf_email" class="form-control" placeholder="name@example.com">
                                <label for="cf_email" class="form-label">
                                    Email
                                </label>
                            </div>
                        </div>
                        <div class="form-row row">
                            <div class="form-col form-floating col-12">
                                <textarea id="cf_message" class="form-control form-textarea" rows="3"
                                    placeholder="Vous pouvez écrire votre message (facultatif)."></textarea>
                                <label for="cf_message" class="form-label">
                                    Message
                                </label>
                                <div class="valid-feedback">
                                    C'est facultatif mais nous aimerions vous lire.
                                </div>
                            </div>
                        </div>
                        <div class="form-row row">
                            <div class="form-col col-12 col-md-8">
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input form-switch" checked>
                                    <label class="form-label form-check-label">
                                        Je veux recevoir de temps en temps des mails de notification de ce site.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-col col-12 col-md-4 align-h-right">
                            <button class="button outline white tertiary-hover magnetic-effect">
                                <span class="button-text white white-hover">
                                    Soumettre
                                </span>
                                <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
                            </button>
                        </div>
                </div>
                <!-- <span class="form-alert success">Your message was sent successful. Thanks.</span>
                        <span class="form-alert error">Sorry. We were unable to send your message.</span> -->
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<div class="side-widget to-left invert-color mix-blend-difference d-only-desktop">
    <div class="item">
        <span class="widget label-icons">
            <a class="link black black-hover">
                <i class="icon fab fa-facebook-f"></i>
            </a>
            <a class="link black black-hover">
                <i class="icon fab fa-twitter"></i>
            </a>
            <a class="link black black-hover">
                <i class="icon fab fa-linkedin-in"></i>
            </a>
            <span class="label-line black"></span>
        </span>
    </div>
</div>

<div class="side-widget to-right invert-color mix-blend-difference d-only-desktop">
    <div class="item">
        <a class="link black black-hover hover-up">
            <span class="widget label-vertical">
                <span class="label-text black">
                    <i class="fa-solid fa-arrow-right-long icon"></i>
                    Monter
                </span>
            </span>
        </a>
    </div>
</div>

<!-- <footer id="footer" class="shock-footer scheme-1 tertiary" data-bg-color="#1e1e24">
    <div class="top-bar" data-bg-color="#1e1e24">
        <div class="footer-content focus-trigger">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5 align-h-right align-v-center order-2 order-lg-1">
                        <div class="footer-item text-center">
                            <ul class="nav-list list-unstyled">
                                <li class="nav-item">
                                    <a href="tel:+22961045091" class="nav-link has-icon">
                                        <img class="image-icon" src="<?= HOME_PATH ?>assets/img/call-sharp.svg"
                                            alt="Icon" data-shock-icon="32" />
                                        <span class="text fw-bold">
                                            +229 61 04 50 91
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 order-1 order-lg-2">
                        <div class="footer-item text-center">
                            <a href="<?= HOME_PATH ?>" class="footer-brand magnetic-effect">
                                <img src="<?= HOME_PATH ?>assets/img/logo-white.svg" alt="Logo de <?= APP_NAME ?>"
                                    class="logo" />
                                <span class="logo-after-text">
                                    <?= APP_NAME ?>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 align-h-left align-v-center order-3">
                        <div class="footer-item text-center">
                            <div class="list-wrapper">
                                <ul class="icon-h-list">
                                    <li class="item">
                                        <a class="link gray tertiary-hover hover-rotate">
                                            <i class="icon fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a class="link gray tertiary-hover hover-rotate">
                                            <i class="icon fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a class="link gray tertiary-hover hover-rotate">
                                            <i class="icon fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a class="link gray tertiary-hover hover-rotate">
                                            <i class="icon fab fa-whatsapp"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-content focus-trigger">
        <div class="container">
            <div class="row g-3">
                <div class="col-12">
                    <div class="footer-item text-center">
                        <h6 class="title">
                            Liens rapides
                        </h6>
                        <ul class="nav-list list-unstyled">
                            <li class="nav-item">
                                <a href="<?= HOME_PATH ?>a-propos" class="nav-link">
                                    <span class="text">
                                        Qui sommes-nous?
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= HOME_PATH ?>a-propos" class="nav-link">
                                    <span class="text">
                                        Our Services
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">
                                    <span class="text">
                                        Politique de confidentialité
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-bar" data-bg-color="#1e1e24">
        <div class="text">
            &copy; <?= date('Y') ?> - Tous les droits sont réservés. Le <a href="<?= HOME_PATH ?>"
                class="link gray primary-hover"><u><?= APP_NAME ?></u></a> est conçu uniquement pour but de tester par
            <a href="https://stevetokpo.netlify.app" class="link gray primary-hover"><u>Prince Steve Tokpo</u></a>.
        </div>
    </div>
</footer> -->

<footer id="footer" class="shock-footer scheme-1 primary">
    <div class="footer-content focus-trigger">
        <div class="container">
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-item">
                        <a href="<?= HOME_PATH ?>" class="footer-brand floating-item">
                            <img src="<?= HOME_PATH ?>assets/img/logo-white.svg" alt="<?= APP_NAME ?>" class="logo" />
                            <span class="logo-after-text">
                                <?= APP_NAME ?>
                            </span>
                        </a>
                        <div class="footer-text">
                            <p>
                                Explorez une galaxie de créativité où chaque pixel, chaque mot et chaque idée forment une constellation unique. Notre passion est le carburant de projets qui transcendent l'ordinaire, élevant votre vision au firmament du numérique. ⭐🚀
                            </p>
                        </div>
                    </div>
                    <div class="footer-item">
                        <h6 class="title">
                            Nous contacter
                        </h6>
                        <ul class="nav-list list-unstyled">
                            <li class="nav-item">
                                <a href="tel:+19912345678" class="nav-link has-icon">
                                    <img class="image-icon" src="<?= HOME_PATH ?>assets/img/call-sharp.svg" alt="Icon" data-shock-icon="32" />
                                    <span class="text">
                                        +229 61 04 50 91
                                    </span>
                                    <span class="badge flex ms-1 primary primary-hover">
                                        <span class="badge-text white white-hover">
                                            Lun-Ven
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="mailto:dev.stevetokpo@gmail.com" class="nav-link has-icon">
                                    <img class="image-icon" src="<?= HOME_PATH ?>assets/img/mail-sharp.svg" alt="Icon" data-shock-icon="32" />
                                    <span class="text">
                                        dev.stevetokpo@gmail.com
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-item">
                        <h6 class="title">
                            Liens rapides
                        </h6>
                        <ul class="nav-list list-unstyled">
                            <li class="nav-item">
                                <a href="<?= HOME_PATH ?>a-propos" class="nav-link has-icon">
                                    <img class="image-icon" src="<?= HOME_PATH ?>assets/img/chevron-forward-sharp.svg" alt="Icon" data-shock-icon="32" />
                                    <span class="text">
                                        Qui sommes-nous
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#your-link" class="nav-link has-icon">
                                    <img class="image-icon" src="assets/svg/chevron-forward-sharp.svg" alt="Icon name"
                                        data-shock-icon="32" />
                                    <span class="text">Social Projects</span>
                                    <span class="badge flex ms-1 primary primary-hover">
                                        <span class="badge-text white white-hover">New</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#your-link" class="nav-link has-icon">
                                    <img class="image-icon" src="assets/svg/chevron-forward-sharp.svg" alt="Icon name"
                                        data-shock-icon="32" />
                                    <span class="text">Our Services</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#your-link" class="nav-link has-icon">
                                    <img class="image-icon" src="assets/svg/chevron-forward-sharp.svg" alt="Icon name"
                                        data-shock-icon="32" />
                                    <span class="text">Privacy Police</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-item">
                        <!-- Button -->
                        <a href="#your-link" class="button outline gray primary-hover">
                            <span class="hover-rotate">
                                <span class="button-text white white-hover">Get in Touch</span>
                                <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-item">
                        <h6 class="title">Popular Searches</h6>
                        <!-- Tag Cloud -->
                        <div class="tag-cloud">
                            <a href="#your-link" class="link">
                                <span class="badge outline gray-50 primary-hover">
                                    <span class="badge-text gray white-hover">Environment</span>
                                </span>
                            </a>
                            <a href="#your-link" class="link">
                                <span class="badge outline gray-50 primary-hover floating-item-smooth">
                                    <span class="badge-text gray white-hover">Events</span>
                                </span>
                            </a>
                            <a href="#your-link" class="link">
                                <span class="badge outline gray-50 primary-hover">
                                    <span class="badge-text gray white-hover">Technology</span>
                                </span>
                            </a>
                            <a href="#your-link" class="link">
                                <span class="badge outline gray-50 primary-hover">
                                    <span class="badge-text gray white-hover">Web</span>
                                </span>
                            </a>
                            <a href="#your-link" class="link">
                                <span class="badge outline gray-50 primary-hover">
                                    <span class="badge-text gray white-hover">Mobile</span>
                                </span>
                            </a>
                            <a href="#your-link" class="link">
                                <span class="badge outline gray-50 primary-hover">
                                    <span class="badge-text gray white-hover">Design</span>
                                </span>
                            </a>
                            <a href="#your-link" class="link">
                                <span class="badge outline gray-50 primary-hover">
                                    <span class="badge-text gray white-hover">Branding</span>
                                </span>
                            </a>
                            <a href="#your-link" class="link">
                                <span class="badge outline gray-50 primary-hover">
                                    <span class="badge-text gray white-hover">Development</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="footer-item">
                        <h6 class="title">Follow Us</h6>
                        <!-- Icon list -->
                        <div class="list-wrapper">
                            <ul class="icon-h-list">
                                <li class="ms-0 item">
                                    <a href="#your-link" class="link gray primary-hover hover-rotate"><i
                                            class="icon fab fa-facebook-f"></i></a>
                                </li>
                                <li class="item">
                                    <a href="#your-link" class="link gray primary-hover hover-rotate"><i
                                            class="icon fab fa-twitter"></i></a>
                                </li>
                                <li class="item">
                                    <a href="#your-link" class="link gray primary-hover hover-rotate"><i
                                            class="icon fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-item">
                        <h6 class="title">Inspirations</h6>
                        <!-- Image -->
                        <a href="#your-link" class="footer-image black">
                            <img src="assets/images/jpg/b-29.jpg" alt="Image name" class="image shadow">
                            <span class="title">View Portfolio</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-bar">
        <div class="text">© 2023 - All rights reserved. The <a href="https://codings.dev?redirect=shock-html"
                class="link gray primary-hover"><u>Shock Theme</u></a> is developed and maintained by <a
                href="https://codings.dev?ref=shock-html" class="link gray primary-hover"><u>Codings Group</u></a>.
        </div>
    </div>
</footer>

<svg class="cursor-effect tertiary" width="220" height="220" viewBox="0 0 220 220">
    <defs>
        <filter id="cursor-effect-filter" x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox">
            <feTurbulence type="fractalNoise" baseFrequency="0" numOctaves="1" result="warp"></feTurbulence>
            <feOffset dx="-30" result="warpOffset"></feOffset>
            <feDisplacementMap xChannelSelector="R" yChannelSelector="G" scale="20" in="SourceGraphic" in2="warpOffset">
            </feDisplacementMap>
        </filter>
    </defs>
    <circle class="cursor-effect-inner" cx="110" cy="110" r="20"></circle>
</svg>