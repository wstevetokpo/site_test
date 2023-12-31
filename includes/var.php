<?php

	$allData = $dataBases->get('data', '', [], 'id_data', TRUE, 0, 0);

	foreach ($allData as $key => $value) {
		define(strtoupper($value['name']), $value['value']);
	}

	if ( !isset($_COOKIE['token']) ) {
		$visitorCookie = md5(uniqid());
		setcookie('token', $visitorCookie, time() + 365*24*3600*5, '/', '', false, false);
		$location_info = ip_location(getIpAdresse());
	}
	else {
		$visitorCookie = $_COOKIE['token'];
	}

	// $ip = $_SERVER['REMOTE_ADDR'];
	$countryCode = 'US';
	/* $apiUrl = "http://ipinfo.io/{$ip}/json";

	
	try {
		$response = file_get_contents($apiUrl);
		
		if ( $response !== FALSE ) {
			$data = json_decode($response, true);
			if ( isset($data['country']) AND strlen($data['country']) <= 2 ) {
				$countryCode = $data['country'];
			}	
		}
	}
	catch (Exception $e) {

	} */
	function isMobileDevice() {
		$userAgent = $_SERVER['HTTP_USER_AGENT'];
		
		$mobileKeywords = array('mobile', 'android', 'iphone', 'ipod', 'blackberry', 'webos', 'windows phone');

		foreach ($mobileKeywords as $keyword) {
			if (stripos($userAgent, $keyword) !== false) {
				return 2;
			}
		}

		return 1;
	}

	$imd = isMobileDevice();

	$cv = $dataBases->get('visitor', '`cookie`=?', [$visitorCookie], 'id_visitor', FALSE, 0, 0);
	if ( count($cv) === 0 ) {
		$dataBases->put('visitor', ['device', 'cookie', 'adresse_ip', 'country', 'last_visite', 'first_visite'], [$imd, $visitorCookie, getIpAdresse(), $countryCode, time(), time()]);
		$cv = $dataBases->get('visitor', '`cookie`=?', [$visitorCookie], 'id_visitor', FALSE, 0, 0);
	}

	$VISITOR = $cv[0];

	if ( $VISITOR['last_visite'] <= time() - 2 ) {
		// envoyerNotificationTelegram('Il semblerait qu\'un utilisateur avec plus d\'un visite est venu :) CODE PAYS: ' . $countryCode);
		$upnv = $VISITOR['count_visite'] + 1;
		$dataBases->update('visitor', 'id_visitor', $VISITOR['id_visitor'], ['device' => $imd, 'country'=> $countryCode, 'count_visite' => $upnv, 'last_visite' => time()]);
		$VISITOR['count_visite'] = $upnv;
		$VISITOR['last_visite'] = time();
	}

	$requestParam = '';
	$requestValue = '';
	$requestPage = 'index';
	$requestLang = 'fr';
	$les_lg = ['fr'];