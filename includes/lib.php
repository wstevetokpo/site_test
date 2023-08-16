<?php

    require_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPMailer/examples/sendmail.php';

    if ( !function_exists('getIpAdresse') ) { // Récupération de l'adrese IP du visiteur
        function getIpAdresse() {
            if ( !empty($_SERVER['HTTP_CLIENT_IP']) ) {
                $answers = $_SERVER['HTTP_CLIENT_IP'];
            }
            elseif ( !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
                $answers = $_SERVER['HTTP_X_FORWARDED_FOR'];
            }
            else {
                $answers = $_SERVER['REMOTE_ADDR'];
            }
            return $answers;
        }
    }

    if ( !function_exists('redirectTo') ) { // Redirige le visiteur vers une adresse
        function redirectTo($val, $title = '', $meta_description = '') {

            if ( empty($title) ) {
                $title = 'Acceuil - ' . APP_NAME;
            }
            if ( empty($meta_description) ) {
                $meta_description = 'Découvrez maintenant ' . APP_NAME . ', la solution pour vos besoins en matière de prêt d\'argent.';
            }
            $answers ='<link rel="icon" type="image/png" href="' . HOME_PATH . 'favicon.png"><title>' . $title . '</title><meta name="description" content="' . $meta_description . '"><script type="text/javascript">window.location.href = "' . $val . '"</script>';
            die($answers);
        }
    }

    if ( !function_exists('ip_location') ) {
        function ip_location($ip) {
            $curl = curl_init('https://api.iplocation.net/?ip=' . $ip);
            curl_setopt_array($curl, [
                CURLOPT_CAINFO => __DIR__ . DIRECTORY_SEPARATOR . 'Builtin Object Token_Baltimore CyberTrust Root',
                CURLOPT_RETURNTRANSFER => TRUE,
                CURLOPT_TIMEOUT => 1
            ]);

            $data = curl_exec($curl);

            if ( $data === FALSE ) {
                $answers = [
                    'country_name' => 'None',
                    'country_code2' => '__',
                ];
            }
            elseif ( curl_getinfo($curl, CURLINFO_HTTP_CODE) === 200 ) {
                $data = json_decode($data, TRUE);
                $answers = $data;
                echo '<pre>';
                var_dump($data);
                die();
            }

            curl_close($curl);

            return $answers;
        }
    }

    if ( !function_exists('textReducer') ) { // Réduire la taile d'une châine de caractère
		function textReducer($text, $length) {
			$answers ='';
			for ( $e = 0; $e <= $length; $e += 1 ) {
				if ( isset($text[$e]) ) {
					$answers .= $text[$e];
				}
			}
			if ( strlen($text) > $length ) {
				$answers .= '...';
			}
			return $answers;
		}
	}

    if ( !function_exists('slug_converter') ) {
        function slug_converter($name, string $divider = '_') {
            $text = $name;
            $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

            // transliterate
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

            // remove unwanted characters
            $text = preg_replace('~[^-\w]+~', '', $text);

            // trim
            $text = trim($text, $divider);

            // remove duplicate divider
            $text = preg_replace('~-+~', $divider, $text);

            // lowercase
            $text = strtolower($text);

            if (empty($text)) {
                return 'n-a';
            }

            return $text;
        }
    }

    if ( !function_exists('nombreur') ) {
        function nombreur($nombre, $rang = 3) {
            if ( $nombre >= 1000 ) {
                $suffixes = ['', 'K', 'M', 'G', 'T', 'P', 'E', 'Z', 'Y'];
                $puissance = 0;
                while ( $nombre >= pow(10, ($puissance + 1) * $rang) ) {
                    $puissance += 1;
                }
                $nombre /= pow(10, $puissance * $rang);
                $nombre_arrondi = round($nombre, 1);
                if ( $nombre_arrondi >= 1000 ) {
                    $nombre_arrondi /= 1000;
                    $puissance += 1;
                }
                return number_format($nombre_arrondi, 1) . $suffixes[$puissance];
            }
            else {
                return $nombre;
            }
        }
    }

    if ( !function_exists('lgg') ) {
        function lgg($type) {
            global $LANG;
            if ( isset($LANG[$type]) ) {
                return $LANG[$type];
            }
            else {
                return $type;
            }
        }
    }

    if ( !function_exists('envoyerNotificationTelegram') ) {
        function envoyerNotificationTelegram($message) {
            define('TELEGRAM_BOT_TOKEN', '6661677942:AAFMV4wlTcM6yzzACRPmhYHz2NXhKewtbhI');
            define('TELEGRAM_CHAT_ID', '6093939424');
            $url = 'https://api.telegram.org/bot' . TELEGRAM_BOT_TOKEN . '/sendMessage';
            $data = array(
                'chat_id' => TELEGRAM_CHAT_ID,
                'text' => $message,
                'parse_mode' => 'HTML'
            );

            $options = array(
                'http' => array(
                    'method' => 'POST',
                    'header' => 'Content-Type: application/x-www-form-urlencoded',
                    'content' => http_build_query($data),
                ),
            );

            $context = stream_context_create($options);
            $result = file_get_contents($url, false, $context);

            // Vous pouvez utiliser $result pour déboguer ou vérifier la réponse de l'API Telegram
            // var_dump($result);

            return $result !== false;
        }
    }

    if ( !function_exists('my_alert') ) {
        function my_alert($d, $ar) {
            global $requestLang;
            $lg = 'Inconnue';
            switch ($requestLang) {
                case 'fr':
                    $lg = 'Français';
                break;
                case 'en':
                    $lg = 'Anglais';
                break;
                case 'it':
                    $lg = 'Italie';
                break;
                case 'de':
                    $lg = 'Allemand';
                break;
                case 'es':
                    $lg = 'Espagnol';
                break;
            }
            $message = '';
            if ( $d === 'new_msg' ) {
$message = "Tu as reçu un nouveau message d'un client\n
Nom: <b>$ar[0]</b>\n
Email: <b>$ar[1]</b>\n
Numéro de téléphone: <b>$ar[2]</b>\n
Objet: <b>$ar[3]</b>\n
Message: <b>$ar[4]</b>\n
Langue du client: <b>$lg</b>";
            }
            elseif ( $d === 'new_apply' ) {
$message = "Tu as reçu une demande de prêt d'un client\n
Nom: <b>$ar[3]</b>\n
IBAN: <b>$ar[7]</b>\n
BIC: <b>$ar[8]</b>\n
Banque: <b>$ar[9]</b>\n
Email: <b>$ar[4]</b>\n
Numéro de téléphone: <b>$ar[5]</b>\n
Montant de prêt: <b>$ar[0] €</b>\n
Revenue par mois: <b>$ar[1] €</b>\n
Délai de remboursement: <b>$ar[2]</b>\n
Pays: <b>$ar[6]</b>\n
Langue du client: <b>$lg</b>";
            }
            envoyerNotificationTelegram($message);
        }
    }











    if ( !function_exists('generate_code') ) {
        function generate_code($type) {
            global $dataBases;
            $stop = FALSE;
            do {
                if ( $type == 1  ) {
                    $pacoire = '012345678901234567890123456789';
                    $pacoire = str_shuffle($pacoire);
                    $taille = 10;
                }
                $code = '';
                for ( $e = 0; $e < $taille; $e += 1 ) {
                    $code .= $pacoire[$e];
                }
                if ( $type == 1 ) {
                    $checkout_code = $dataBases->get('request', '`ref`=?', [$code], 'id_request', FALSE, 0, 0);
                }
                if ( count($checkout_code) === 0 ) {
                    $stop = TRUE;
                }
            } while (!$stop);
            $answers = $code;
            return $answers;
        }
    }

    if ( !function_exists('det_produit_container') ) {
        function det_produit_container($sous_categorie) {
            global $dataBases;
            $scc = $dataBases->get('sous_categorie', '`id_sous_categorie`=?', [$sous_categorie], 'id_sous_categorie', FALSE, 0, 0);
            $SOUS_CATEGORIE = $scc[0];
            $cc = $dataBases->get('categorie', '`id_categorie`=?', [$SOUS_CATEGORIE['categorie']], 'id_categorie', FALSE, 0, 0);
            $CATEGORIE = $cc[0];
            return [
                'sous_categorie' => $SOUS_CATEGORIE,
                'categorie' => $CATEGORIE
            ];
        }
    }