<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 02/04/2018
 * Time: 10:16
 */

function connexion() {

    $db_host = "localhost";
    $db_name = "social";
    $db_user = "root";
    $db_pass = "";

    try{
        $pdo = new PDO('mysql:host"'.$db_host.'"";"'.$db_name.'"', $db_user, $db_pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return ($pdo);

    }catch (Exception $e){
        die($e->getMessage());
    }
}
