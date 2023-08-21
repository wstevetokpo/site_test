<?php

    $she = isset($she) ? $she: 'tertiary';

?>
<div class="form-row row">
    <div class="form-col form-floating col-12 col-md-6">
        <input type="text" id="nl_nom" class="form-control" placeholder="John">
        <label for="nl_nom" class="form-label">
            Nom
        </label>
    </div>
    <div class="form-col form-floating col-12 col-md-6">
        <input type="email" id="nl_email" class="form-control" placeholder="name@example.com">
        <label for="nl_email" class="form-label">
            Email
        </label>
    </div>
</div>
<div class="form-row row">
    <div class="form-col col-12">
        <button type="submit" id="nl_submit" class="button arrow-button next scheme-2 <?= $she ?>">
            <span class="arrow">
                <span class="item"></span>
                <span class="item"></span>
            </span>
            <span class="line"></span>
            <span class="text">
                REJOINDRE
            </span>
        </button>
    </div>
</div>