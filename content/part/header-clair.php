<header id="header" class="shock-header">
    <nav id="navbar" class="navbar navbar-expand-lg has-top-bar fixed-scroll hover-line-center scheme-2 primary">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-top-wrapper">
                    <div class="container">
                        <div class="navbar-top">
                            <div class="navbar-left">
                                <ul id="menu-shock-language-switcher" class="navbar-nav language-switcher">
                                    <li class="nav-item dropdown hover">
                                        <a href="<?= HOME_PATH ?>" class="nav-link dropdown-toggle has-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-earth-americas icon"></i>
                                            <span class="text">
                                                Français
                                            </span>
                                            <img class="image-icon dropdown-icon" src="<?= HOME_PATH ?>assets/img/chevron-down-outline.svg" alt="Icon" data-shock-icon="32" />
                                        </a>
                                        <ul class="dropdown-menu animate fade-down">
                                            <li class="nav-item">
                                                <a class="nav-link">
                                                    <span class="text">
                                                        Français
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="mailto:<?= DEV_EMAIL ?>" class="nav-link has-icon has-text">
                                            <i class="fa-solid fa-envelope icon"></i>
                                            <span class="text">
                                                <?= DEV_EMAIL ?>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="navbar-right">
                                <ul class="navbar-nav link-list">
                                    <li class="nav-item">
                                        <a class="nav-link has-icon has-text">
                                            <i class="fa-solid fa-location-dot icon"></i>
                                            <span class="text">
                                                <?= LOCATION ?>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-icon has-text">
                                            <i class="fa-solid fa-phone icon"></i>
                                            <span class="text">
                                                <?= PHONE ?>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item d-only-desktop">
                                        <a class="nav-link has-icon">
                                            <i class="icon fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item d-only-desktop">
                                        <a class="nav-link has-icon">
                                            <i class="icon fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item d-only-desktop">
                                        <a class="nav-link has-icon">
                                            <i class="icon fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navbar-divider horizontal-line-animate"></div>
                <div class="navbar-bottom-wrapper fixed-scroll">
                    <div class="container">
                        <div class="navbar-bottom">
                            <a class="navbar-brand" href="<?= HOME_PATH ?>">
                                <img src="<?= HOME_PATH ?>assets/img/logo.svg" alt="<?= APP_NAME ?>" class="logo main-logo" />
                                <img src="<?= HOME_PATH ?>assets/img/logo.svg" alt="<?= APP_NAME ?>" class="logo sticky-logo" />
                                <img src="<?= HOME_PATH ?>assets/img/logo.svg" alt="<?= APP_NAME ?>" class="logo mobile-logo" />
                                <span class="logo-after-text">
                                    <?= APP_NAME ?>
                                </span>
                            </a>
                            <button class="navbar-toggler" data-bs-target="#navbar-items" data-bs-toggle="collapse" aria-expanded="false">
                                <span class="navbar-toggler-icon">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </span>
                            </button>
                            
                            <div id="navbar-items" class="collapse navbar-collapse focus-trigger">
                                <ul class="navbar-nav ms-auto">
                                    <!-- <li class="nav-item dropdown has-megamenu hover">
                                        <a class="nav-link dropdown-toggle has-icon" data-bs-toggle="dropdown"> -->
                                    <li class="nav-item">
                                        <a href="<?= HOME_PATH ?>" class="nav-link">
                                            <span class="text">
                                                Mode clair
                                            </span>
                                            <!-- <img class="image-icon dropdown-icon" src="<?= HOME_PATH ?>assets/img/chevron-down-outline.svg"  alt="Icon" data-shock-icon="32"/> -->
                                        </a>
                                        <!-- <div class="dropdown-menu megamenu animate fade-down" role="menu">
                                            <div class="container">
                                                <div class="section-inner-expanded">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="megamenu-item pt-0">
                                                                <ul class="nav-list list-unstyled">
                                                                    <li class="nav-item">
                                                                        <a href="<?= HOME_PATH ?>" class="nav-link parent">
                                                                            <span class="text">
                                                                                Clair
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="megamenu-item pt-0">
                                                                <ul class="nav-list list-unstyled">
                                                                    <li class="nav-item">
                                                                        <a href="<?= HOME_PATH . '?theme=sombre' ?>" class="nav-link parent">
                                                                            <span  class="text">
                                                                                Sombre
                                                                            </span>
                                                                        </a>
                                                                    </li>  
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="megamenu-item pt-0">
                                                                <ul class="nav-list list-unstyled">
                                                                    <li class="nav-item">
                                                                        <a href="<?= HOME_PATH . '?theme=hiver' ?>" class="nav-link parent">
                                                                            <span class="text">
                                                                                Hiver
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= HOME_PATH . '?theme=sombre' ?>" class="nav-link">
                                            <span class="text">
                                                Mode sombre
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= HOME_PATH . '?theme=hiver' ?>" class="nav-link">
                                            <span class="text">
                                                Mode hiver
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="navbar-action">
                                    <div class="nav-item">
                                        <a href="#modal" data-bs-toggle="modal" data-bs-target="#modal" class="button small-button outline gray-25 black-hover">
                                            <span class="hover-rotate">
                                                <span class="button-text black white-hover">
                                                    Nous contacter
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>