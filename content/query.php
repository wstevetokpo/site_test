<?php

    if ( isset($_POST['action']) ) {
        switch ($_POST['action']) {
            case 'nl':
                if ( isset($_POST['nom'], $_POST['email']) ) {
                    $nom = htmlspecialchars(trim($_POST['nom']));
                    $email = htmlspecialchars(trim($_POST['email']));
                    $ec = $dataBases->get('newsletter', '`email`=?', [$email], 'id_newsletter', FALSE, 0, 0);
                    if ( empty($nom) ) {
                        $er[0] = 'Veuillez donner votre nom!';
                    }
                    elseif ( strlen($nom) > 256 ) {
                        $er[0] = 'Le nombre de caractère maximal autorisé pour le nom est 256!';
                    }
                    if ( empty($email) ) {
                        $er[1] = 'Veuillez saisir votre email!';
                    }
                    elseif ( strlen($email) > 256 ) {
                        $er[1] = 'Le nombre de caractère maximal autorisé pour l\'email est 256!';
                    }
                    elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
                        $er[1] = 'Le format de l\'adresse email entré est incorrecte!';
                    }
                    elseif ( count($ec) !== 0 ) {
                        $er[1] = 'Cette adresse email a déjà été inscrite à la newsletter!';
                    }
                    if ( !isset($er) ) {
                        $dataBases->put('newsletter', ['nom', 'email', 'statut', 'date_join'], [$nom, $email, 1, time()]);
                        echo '<span class="form-alert success" style="display: block !important;">Vous aviez été bien inscrit(e) à la newsletter. Merci.</span>';
                        $objet = 'Inscription newsletter - ' . APP_NAME;
                        $messages = '<body style="text-align: center; margin: 20px auto; width: 650px; font-family: \'Nunito Sans\', sans-serif; background-color: #e2e2e2; display: block; position: relative;">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; border-spacing: 0;background-color: #fff; width: 100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse; border-spacing: 0;">
                                                <tr class="header">
                                                    <td align="left" valign="top">
                                                        <img src="' . APP_HOST . HOME_PATH . 'assets/img/logo.svg" class="main-logo" alt="Logo ' . APP_NAME . '" width="200px"/>
                                                    </td>
                                                    <td class="menu" align="right">
                                                        <ul style="list-style: none;">
                                                            <li style="display: inline-block;">
                                                                <a href="' . APP_HOST . HOME_PATH . '" style="text-decoration: none; color: rgb(120, 47, 28);margin-left: 10px">
                                                                    Acceuil
                                                                </a>
                                                            </li>
                                                            <li style="display: inline-block;">
                                                                <a href="' . APP_HOST . HOME_PATH . '/a-propos" style="text-decoration: none; color: rgb(120, 47, 28);margin-left: 10px">
                                                                    A propos
                                                                </a>
                                                            </li>
                                                            <li style="display: inline-block;">
                                                                <a href="' . APP_HOST . HOME_PATH . '/nos-services" style="text-decoration: none; color: rgb(120, 47, 28);margin-left: 10px">
                                                                    Nos services
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="section-t"
                                            style="position: relative; padding: 0 calc(15px + (88 - 15) * ((100vw - 320px) / (1920 - 320)))">
                                            <table style="width: 100%;border-collapse: collapse; border-spacing: 0;">
                                                <tr>
                                                    <td>
                                                        <h1 class="heading-1" style="margin-bottom: 6px">
                                                            Salut ' . $nom . '.
                                                        </h1>
                                                        <p class="pera">
                                                            Nous voulons vous informer que votre souscription à notre newsletter a été effectué avec succès! Merci de nous avoir fait confiance.
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="section-t"
                                            style="background-color: #909090; padding: calc(20px + (26 - 20) * ((100vw - 320px) / (1920 - 320))) 0">
                                            <table class="footer">
                                                <tr>
                                                    <td class="footer-content">
                                                        <table border="0" cellpadding="0" cellspacing="0" class="footer-social-icon"
                                                            align="center" class="text-center"
                                                            style="vertical-align: middle; margin: 0 auto; width: 326px">
                                                            <tr>
                                                                <td>
                                                                    <p>
                                                                        &copy; Copyright ' . date('Y') . ' by <a href="' . APP_HOST . HOME_PATH . '">' . APP_NAME . '</a>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </body>';
                        sendMailPro($objet, $messages, ['name' => $nom, 'email' => $email], ['name' => APP_NAME, 'email' => DEV_EMAIL]);
                    }
                    else {
                        foreach ($er as $key => $value) {
                            echo '<span class="form-alert error" style="display: block !important;">' . $value . '</span>';
                        }
                        include __DIR__ . DIRECTORY_SEPARATOR . 'part/nlForm.php';
                    }
                }
            break;
            case 'cf':
                if ( isset($_POST['nom'], $_POST['email'], $_POST['message']) ) {
                    $nom = htmlspecialchars(trim($_POST['nom']));
                    $email = htmlspecialchars(trim($_POST['email']));
                    $message = htmlspecialchars(trim(nl2br($_POST['message'])));
                    
                    if ( empty($nom) ) {
                        $er[0] = 'Veuillez donner votre nom!';
                    }
                    elseif ( strlen($nom) > 256 ) {
                        $er[0] = 'Le nombre de caractère maximal autorisé pour le nom est 256!';
                    }
                    if ( empty($email) ) {
                        $er[1] = 'Veuillez saisir votre email!';
                    }
                    elseif ( strlen($email) > 256 ) {
                        $er[1] = 'Le nombre de caractère maximal autorisé pour l\'email est 256!';
                    }
                    elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
                        $er[1] = 'Le format de l\'adresse email entré est incorrecte!';
                    }

                    if ( !isset($er) ) {
                        $dataBases->put('contact', ['nom', 'email', 'message', 'date_ecrit'], [$nom, $email, $message, time()]);
                        echo '<span class="form-alert success" style="display: block !important;">Votre message a été envoyé avec succès!</span>';
                        $objet = 'Message du contactez nous - ' . APP_NAME;
                        $messages = '<body style="text-align: center; margin: 20px auto; width: 650px; font-family: \'Nunito Sans\', sans-serif; background-color: #e2e2e2; display: block; position: relative;">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; border-spacing: 0;background-color: #fff; width: 100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse; border-spacing: 0;">
                                                <tr class="header">
                                                    <td align="left" valign="top">
                                                        <img src="' . APP_HOST . HOME_PATH . 'assets/img/logo.svg" class="main-logo" alt="Logo ' . APP_NAME . '" width="200px"/>
                                                    </td>
                                                    <td class="menu" align="right">
                                                        <ul style="list-style: none;">
                                                            <li style="display: inline-block;">
                                                                <a href="' . APP_HOST . HOME_PATH . '" style="text-decoration: none; color: rgb(120, 47, 28);margin-left: 10px">
                                                                    Acceuil
                                                                </a>
                                                            </li>
                                                            <li style="display: inline-block;">
                                                                <a href="' . APP_HOST . HOME_PATH . '/a-propos" style="text-decoration: none; color: rgb(120, 47, 28);margin-left: 10px">
                                                                    A propos
                                                                </a>
                                                            </li>
                                                            <li style="display: inline-block;">
                                                                <a href="' . APP_HOST . HOME_PATH . '/nos-services" style="text-decoration: none; color: rgb(120, 47, 28);margin-left: 10px">
                                                                    Nos services
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="section-t"
                                            style="position: relative; padding: 0 calc(15px + (88 - 15) * ((100vw - 320px) / (1920 - 320)))">
                                            <table style="width: 100%;border-collapse: collapse; border-spacing: 0;">
                                                <tr>
                                                    <td>
                                                        <h1 class="heading-1" style="margin-bottom: 6px">
                                                            Salut ' . $nom . '.
                                                        </h1>
                                                        <p class="pera">
                                                            Nous voulons vous informer que votre message à été reçu avec succès! Un de nos agents entrera en contact avec vous sous peu, merci.
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="section-t"
                                            style="background-color: #909090; padding: calc(20px + (26 - 20) * ((100vw - 320px) / (1920 - 320))) 0">
                                            <table class="footer">
                                                <tr>
                                                    <td class="footer-content">
                                                        <table border="0" cellpadding="0" cellspacing="0" class="footer-social-icon"
                                                            align="center" class="text-center"
                                                            style="vertical-align: middle; margin: 0 auto; width: 326px">
                                                            <tr>
                                                                <td>
                                                                    <p>
                                                                        &copy; Copyright ' . date('Y') . ' by <a href="' . APP_HOST . HOME_PATH . '">' . APP_NAME . '</a>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </body>';
                        sendMailPro($objet, $messages, ['name' => $nom, 'email' => $email], ['name' => APP_NAME, 'email' => DEV_EMAIL]);
                    }
                    else {
                        foreach ($er as $key => $value) {
                            echo '<span class="form-alert error" style="display: block !important;">' . $value . '</span>';
                        }
                        include __DIR__ . DIRECTORY_SEPARATOR . 'part/contactForm.php';
                    }
                }
            break;
        }
    }