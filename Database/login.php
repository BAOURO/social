<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 02/04/2018
 * Time: 16:52
 */
    require_once "config.php";

    $login = htmlspecialchars($_POST['login']);
    $pass = htmlspecialchars($_POST['pass']);

    if(isset($_POST['btn-log'])){
        if(!empty($login) && !empty($pass)){
            $password = md5($pass);

            $pdo = connexion();
            $req = $pdo->prepare('SELECT * FROM comptes WHERE login = :login AND password = :password');
            $req->bindValue(":login", $login, PDO::PARAM_STR);
            $req->bindValue(":password", $password, PDO::PARAM_STR);
            $con = $req->execute();
            if($con){

                echo "Connexion success";
                header("Location:../public/accueil.php");
            }else{
                echo "Connexion echoue";
                header("Location:../index.php");
            }

        }

    }
?>