<div class="form-row row">
    <div class="form-col form-floating col-12 col-md-6">
        <input type="text"" id="cf_nom" class="form-control" placeholder="John">
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
<?php
    if ( $__theme === 'sombre' ) {
?>
<div class="form-col col-12 col-md-4 align-h-right">
    <button type="submit" id="cf_submit" class="button outline white tertiary-hover magnetic-effect">
        <span class="button-text white white-hover">
            Soumettre
        </span>
        <i class="fa-solid fa-arrow-right button-icon white white-hover"></i>
    </button>
</div>
<?php
    }
    else {
?>
<div class="form-col col-12 col-md-4 align-h-right">
    <button type="submit" id="cf_submit" class="button outline black primary-hover magnetic-effect">
        <span class="button-text black black-hover">
            Soumettre
        </span>
        <i class="fa-solid fa-arrow-right button-icon black black-hover"></i>
    </button>
</div>
<?php
    }
?>
<!-- <span class="form-alert success">Your message was sent successful. Thanks.</span>
<span class="form-alert error">Sorry. We were unable to send your message.</span> -->