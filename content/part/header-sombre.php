<header id="header" class="shock-header">
    <nav id="navbar" class="navbar navbar-menu-grid scheme-1">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= HOME_PATH ?>">
                <img src="<?= HOME_PATH ?>assets/img/logo-white.svg" alt="Logo Blanc de <?= APP_NAME ?>" class="logo main-logo" />
                <img src="<?= HOME_PATH ?>assets/img/logo.svg" alt="Logo de <?= APP_NAME ?>" class="logo sticky-logo" />
                <img src="<?= HOME_PATH ?>assets/img/logo-white.svg" alt="Logo Blanc de <?= APP_NAME ?>" class="logo mobile-logo" />
                <span class="logo-after-text">
                    <?= APP_NAME ?>
                </span>
            </a>
            
            <div id="menu-toggle" class="menu-toggle is-inactive magnetic-effect scheme-1 tertiary">
                <div class="menu-toggle-icon">
                    <div class="menu-toggle-container">
                        <span class="menu-toggle-line-top"></span>
                        <span class="menu-toggle-line-middle"></span>
                        <span class="menu-toggle-line-bottom"></span>
                    </div>
                </div>
                <div class="menu-toggle-circle">
                    <svg class="menu-toggle-menu-toggle-svg-circle">
                        <path class="menu-toggle-path-circle" fill="none" stroke-miterlimit="10" stroke-width="4" d="M 34 2 C 16.3 2 2 16.3 2 34 s 14.3 32 32 32 s 32 -14.3 32 -32 S 51.7 2 34 2" />
                    </svg>
                </div>
                <svg width="0" height="0">
                    <mask id="menu-toggle-mask">
                        <path class="path-mask" fill="none" stroke-miterlimit="10" stroke-width="4" d="M 34 2 c 11.6 0 21.8 6.2 27.4 15.5 c 2.9 4.8 5 16.5 -9.4 16.5 h -4" />
                    </mask>
                </svg>
                <div class="menu-toggle-path">
                    <div class="path-animation">
                        <div class="path-rotation"></div>
                    </div>
                </div>
            </div>
            
            <nav id="menu-grid" class="menu-grid scheme-1 tertiary">
                <div class="menu-grid-item item-1" data-direction="bt">
                    <div class="menu-grid-item-inner">
                        <div class="menu-grid-label top">
                            <span class="label-vertical">
                                <span class="label-line gray"></span>
                                <span class="label-text gray">
                                    DEPUIS <?= date('Y') ?>
                                </span>
                            </span>
                        </div>
                        
                        <div class="menu-grid-label bottom">
                            <span class="label-vertical">
                                <span class="label-line gray"></span>
                                <span class="label-text gray">
                                    REFERENCE DIGITAL
                                </span>
                            </span>
                        </div>
                        <div class="menu-grid-main">
                            <a href="<?= HOME_PATH ?>a-propos" class="menu-grid-main-item menu-item">
                                A propos
                            </a>
                            <a href="<?= HOME_PATH ?>nos-services" class="menu-grid-main-item menu-item">
                                Services
                            </a>
                            <a href="<?= HOME_PATH ?>nous-contacter" class="menu-grid-main-item menu-item">
                                Contacts
                            </a>
                        </div>
                        
                        <div class="menu-grid-search focus-trigger">
                            <div class="form-area scheme-2 white">
                                <form class="form-fields needs-validation" novalidate="novalidate">
                                    <div class="form-row row has-icon">
                                        <div class="form-col form-floating">
                                            <button class="button overlay-button">
                                                <i class="fa-solid fa-magnifying-glass overlay-icon"></i>
                                            </button>
                                            <input id="InputSearchMenu" class="form-control focus-trigger-field" placeholder="Faire une recherche..." required="required">
                                            <label for="InputSearchMenu" class="form-label">
                                                Entrer le mot-clé
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-grid-item item-2" data-direction="lr">
                    <div class="menu-grid-item-inner">
                        <a href="<?= HOME_PATH ?>portofolio" class="menu-grid-item-image">
                            <img src="<?= HOME_PATH ?>assets/img/c-22.png" alt="Portofolio" class="image"/>
                            <span class="title">
                                Voir le portofolio
                            </span>
                        </a>
                    </div>
                </div>
                <div class="menu-grid-item item-3" data-direction="bt">
                    <div class="menu-grid-item-inner">
                        <div class="menu-grid-label">
                            <span class="label-horizontal">
                                <span class="label-line gray"></span>
                                <span class="label-text gray">
                                    NOS SERVICES
                                </span>
                            </span>
                        </div>
                        <div class="menu-grid-minor">
                            <a href="#your-link" class="menu-grid-minor-item menu-item">
                                <span class="menu-grid-minor-item-inner">
                                    Création de site
                                </span>
                            </a>
                            <a href="#your-link" class="menu-grid-minor-item menu-item">
                                <span class="menu-grid-minor-item-inner">
                                    Marketing digital
                                </span>
                            </a>
                            <a href="#your-link" class="menu-grid-minor-item menu-item">
                                <span class="menu-grid-minor-item-inner">
                                    Design Graphique
                                </span>
                            </a>
                            <a href="#your-link" class="menu-grid-minor-item menu-item">
                                <span class="menu-grid-minor-item-inner">
                                    Rédaction web
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-grid-item item-4" data-direction="rl">
                    <div class="menu-grid-item-inner">
                        <a class="menu-grid-item-image">
                            <img src="<?= HOME_PATH ?>assets/img/c-16.png" alt="Voir Route" class="image" />
                            <span class="title">
                                Voir le plan
                            </span>
                        </a>
                    </div>
                </div>
                <div class="menu-grid-item item-5" data-direction="tb">
                    <div class="menu-grid-item-inner">
                        <div class="menu-grid-minor">
                            <a href="tel:+22961045091" class="menu-grid-minor-item">
                                <span class="menu-grid-minor-item-inner">
                                    <i class="fas fa-mobile-alt icon"></i>
                                    +229 61 04 50 91
                                </span>
                            </a>
                            <a href="tel:+229XXXXXX" class="menu-grid-minor-item">
                                <span class="menu-grid-minor-item-inner">
                                    <i class="fas fa-phone-alt icon"></i>
                                    +229 XX XX XX XX
                                </span>
                            </a>
                            <a href="mailto:dev.stevetokpo@gmail.com" class="menu-grid-minor-item">
                                <span class="menu-grid-minor-item-inner">
                                    <i class="fas fa-envelope icon"></i>
                                    dev.stevetokpo@gmail.com
                                </span>
                            </a>
                            <div class="menu-grid-icons">
                                <a class="menu-grid-minor-item">
                                    <span class="menu-grid-minor-item-inner">
                                        <i class="fab fa-facebook-f icon"></i>
                                    </span>
                                </a>
                                <a class="menu-grid-minor-item">
                                    <span class="menu-grid-minor-item-inner">
                                        <i class="fab fa-twitter icon"></i>
                                    </span>
                                </a>
                                <a class="menu-grid-minor-item">
                                    <span class="menu-grid-minor-item-inner">
                                        <i class="fab fa-linkedin-in icon"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </nav>
</header>