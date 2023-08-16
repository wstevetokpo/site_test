<?php
    
    session_start();

    $infoDB = array(
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'dbName' => 'w__site_test'
    );

    require_once __DIR__ . DIRECTORY_SEPARATOR . 'initializeDB.php';
    require_once __DIR__ . DIRECTORY_SEPARATOR . 'connectDB.php';
    require_once __DIR__ . DIRECTORY_SEPARATOR . 'lib.php';
    require_once __DIR__ . DIRECTORY_SEPARATOR . 'var.php';

    require_once __DIR__ . DIRECTORY_SEPARATOR . 'maj.php';