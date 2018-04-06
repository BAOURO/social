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
            $res = $req->fetchObject();
            if($res->login == $login && $res->password ==$password){

                session_start();
                $_SESSION['id_comptes'] = $res->id_comptes;
                $_SESSION['id_users'] = $res->id_users;
                header("Location:../public/accueil.php");
            }else{

                echo "<script type='text/javascript'>
                        alert('Nom ou Mot de Passe incorrect! veuillez resaisir les informations!');window.location.replace('../index.php');
                      </script>";
            }

        }

    }
?>