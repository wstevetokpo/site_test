<section class="shock-section pt-5 pb-5<?php if ( $__theme === 'dark' ) { echo ' has-overlay bg-image bg-fixed" data-bg-image="<?= HOME_PATH ?>assets/img/a-37.webp'; } else { echo ' bg-color gray-50'; } ?>">
    <div class="container max-w-85">
        <div class="row">
            <div class="col-12 col-md-6 align-h-center align-v-center">
                <div class="side-intro">
                    <?php
                        if ( $__theme === 'dark' ) {
                    ?>
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
                    <?php
                        }
                        else {
                    ?>
                            <h2 class="title text-style-5">
                                <span class="text-1 text-outline black-75">
                                    Inscrivez-vous maintenant
                                </span>
                                <span class="text-2 text-italic black">
                                    à notre <mark class="animated-underline <?= $she ?>">newsletter</mark>!
                                </span>
                            </h2>
                            <div class="description gray">
                                <p>
                                    Abonnez-vous à notre newsletter et suivez attentivement nos contens.<br>
                                    Recevez des actualités en fonction de ce qui vous concerne.
                                </p>
                            </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
            <div class="col-12 col-md-6 align-h-center align-v-center">
                <div class="form-area scheme-2 <?= $she ?>">
                    <form onsubmit="return nl_form()" id="nl_form" class="form-fields needs-validation">
                        <?php include __DIR__ . DIRECTORY_SEPARATOR . 'nlForm.php'; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay black-75"></div>
</section>