<?php

    function initializeDB() {
        global $infoDB;

        try {

            // Connexion au serveur mysql
            $defaultConn = new PDO('mysql:host=' . $infoDB['host'], $infoDB['username'], $infoDB['password']);
            $defaultConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Vérification si la bdd existe
            $checkoutDB = $defaultConn->prepare("SELECT COUNT(*) FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME=?");
            $checkoutDB->execute([$infoDB['dbName']]);
            $checkoutDBa = $checkoutDB->fetchColumn();
            $checkoutDB->closeCursor();

            // Si elle n'existe pas
            if ( $checkoutDBa === 0 ) {
                $DBN = $infoDB['dbName'];
                $dbSql = "CREATE DATABASE IF NOT EXISTS $DBN";
                $res = $defaultConn->exec($dbSql);
                // Si la création n'a pas été effectuée on renvoir un false
                if ($res !== 1) {
                    return FALSE;
                }
            }
            
            // Dans la suite la bdd existe
            // On se connecte maintenant à la bdd
            $connDB = new PDO('mysql:host=' . $infoDB['host'] . ';dbname=' . $infoDB['dbName'], $infoDB['username'], $infoDB['password']);

            $createTableSQL = array(

            );

            foreach ($createTableSQL as $key => $value):
                // On vérifie si les tables existent
                try {
                    $checkoutTBL = $connDB->prepare("SELECT COUNT(*) AS nbr FROM $key");
                    $checkoutTBL->execute(array());
                    $checkoutTBLa = $checkoutTBL->fetch();
                    $checkoutTBL->closeCursor();
                    if ( !$checkoutTBLa ) {
                        $tableNotExist = TRUE;
                    }
                }
                catch (EXCEPTION $e) {
                    $tableNotExist = TRUE;
                }

                // La tale n'existe pas
                if ( isset($tableNotExist) AND $tableNotExist ) {
                    $TBLDOESNTEXIST = TRUE;
                    // Si la création de la table a échoue on renvoie une erreur
                    if ( !$connDB->exec($value) ) {
                        // return FALSE;
                    }
                    unset($tableNotExist);
                }
                unset($checkoutTBLa);
            endforeach;

            if ( isset($TBLDOESNTEXIST) ) {
            // on insere les données

            }
            return TRUE;

        } catch (PDOException $e) {
           die('Connection failed: ' . $e->getMessage());
        }
    }