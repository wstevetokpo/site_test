<!DOCTYPE HTML>
<html lang="<?= $requestLang ?>">
<?php $page_title = 'Contactez nous - ' . APP_NAME; $page_md = 'Vous pouvez entrer en contact avec nous' ?>
<?php include __DIR__ . DIRECTORY_SEPARATOR . 'part/head.php'; ?>

<body class="shock-body">
    <?php include __DIR__ . DIRECTORY_SEPARATOR . 'part/header.php'; ?>
    <main id="main" class="shock-main bg-color black">
        <section class="shock-section bg-image bg-only-desktop size-50 bg-fixed position-x-right" data-bg-image="<?= HOME_PATH ?>assets/img/c-38.jpg">
            <div class="container-fluid">
                <div class="half-section me-auto align-v-center">
                    <span class="label-vertical to-top-right opacity-75">
                        <span class="label-line gray"></span>
                        <span class="label-text gray">
                            DEPUIS 2023
                        </span>
                    </span>
                    <span class="label-vertical to-bottom-right opacity-75">
                        <span class="label-line gray"></span>
                        <span class="label-text gray">
                            MARCHE REFERENCE
                        </span>
                    </span>
                    <div class="side-intro">
                        <h1 class="title">
                            <span class="text-1 text-style-2 text-outline gray">
                                On discute?
                            </span>
                            <span class="text-2 text-style-5 text-italic white">
                                +229 <mark class="animated-underline secondary typed-text"></mark>
                            </span>
                        </h1>
                        <div id="typed-strings">
                            <span>61 04 50 91</span>
                            <span>98 32 62 62</span>
                            <span>XX XX XX XX</span>
                        </div>
                        <div class="description gray">
                            <p>
                                Veuillez nous contacter pour obtenir plus d'informations sur nos services. Ce sera un plaisir de découvrir comment nous pouvons vous aider. <b>Ouvrez le formulaire de contact pour nous envoyer directement un message.</b>
                            </p>
                        </div>
                        
                        <a href="#modal" class="button outline gray secondary-hover" data-bs-toggle="modal"
                            data-bs-target="#modal">
                            <span class="hover-rotate">
                                <span class="button-text white white-hover">
                                    Ouvrir
                                </span>
                                <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include __DIR__ . DIRECTORY_SEPARATOR . 'part/footer.php'; ?>
    <?php include __DIR__ . DIRECTORY_SEPARATOR . 'part/script.php'; ?>
</body>

</html>