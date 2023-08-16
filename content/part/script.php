<script src="<?= HOME_PATH ?>assets/js/all.min.js"></script>
<!-- <script src="<?= HOME_PATH ?>assets/js/main.js"></script> -->
<script src="<?= HOME_PATH ?>assets/js/vendor/jquery.min.js"></script>
<script src="<?= HOME_PATH ?>assets/js/vendor/imagesloaded.pkgd.min.js"></script>
<script src="<?= HOME_PATH ?>assets/js/vendor/preloader.min.js"></script>
<script src="<?= HOME_PATH ?>assets/js/vendor/inview.min.js"></script>
<script src="<?= HOME_PATH ?>assets/js/vendor/menu-engine.min.js"></script>
<script src="<?= HOME_PATH ?>assets/js/vendor/menu-grid.min.js"></script>
<script src="<?= HOME_PATH ?>assets/js/vendor/bootstrap.min.js"></script>
<script src="<?= HOME_PATH ?>assets/js/vendor/swiper.min.js"></script>
<script src="<?= HOME_PATH ?>assets/js/vendor/anime.min.js"></script>
<script src="<?= HOME_PATH ?>assets/js/vendor/dynamic-slider.min.js"></script>
<script src="<?= HOME_PATH ?>assets/js/vendor/shuffle.min.js"></script>
<script src="<?= HOME_PATH ?>assets/js/vendor/stickybits.min.js"></script>
<script src="<?= HOME_PATH ?>assets/js/vendor/bricklayer.min.js"></script>
<script src="<?= HOME_PATH ?>assets/js/vendor/lightbox.min.js"></script>
<script src="<?= HOME_PATH ?>assets/js/vendor/typed.min.js"></script>
<script src="<?= HOME_PATH ?>assets/js/vendor/progressbar.min.js"></script>
<script src="<?= HOME_PATH ?>assets/js/vendor/map-styles.min.js"></script>
<script src="<?= HOME_PATH ?>assets/js/vendor/magnetic-effect.min.js"></script>
<script src="<?= HOME_PATH ?>assets/js/vendor/gsap.min.js"></script>
<script src="<?= HOME_PATH ?>assets/js/vendor/aos.min.js"></script>
<script src="<?= HOME_PATH ?>assets/js/vendor/lax.min.js"></script>
<script src="<?= HOME_PATH ?>assets/js/vendor/cursor-effect.min.js"></script>

<script src="<?= HOME_PATH ?>assets/js/main.js"></script>
<script>
    function contact_form() {
        $('#cf_submit').html(`<span class="button-text white white-hover">En cours</span><i class="fas fa-spin fa-spinner button-icon white white-hover"></i>`)
        let cf_nom = $('#cf_nom').val(), cf_email = $('#cf_email').val(), cf_message = $('#cf_message').val()
        setTimeout(() => {
            $('#cf_form').load('<?= HOME_PATH . 'query' ?>', {
                action: 'cf',
                nom: cf_nom,
                email: cf_email,
                message: cf_message
            })
        }, 2000);
        return false
    }
    function nl_form() {
        $('#nl_submit').html(`<span class="arrow"><span class="item"></span><span class="item"></span></span><span class="line"></span><span class="text">EN COURS <i class="fas fa-spin fa-spinner"></i></span>`)
        let nl_nom = $('#nl_nom').val(), nl_email = $('#nl_email').val()
        setTimeout(() => {
            $('#nl_form').load('<?= HOME_PATH . 'query' ?>', {
                action: 'nl',
                nom: nl_nom,
                email: nl_email
            })
        }, 2000);
        return false
    }
</script>