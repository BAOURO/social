<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 06/04/2018
 * Time: 20:21
 */

    require_once "config.php";

    $pdo = connexion();

    if(isset($_POST['publier'])){
        if(!empty($_POST['statut'])){

            $id_user = $_POST['id'];
            $pub = htmlspecialchars( $_POST['statut']);
            $req_stat = $pdo->prepare('INSERT INTO statuts VALUES (NULL , :id_users, :statut, NOW())');
            $req_stat->bindValue(":id_users",$id_user);
            $req_stat->bindValue(":statut",$pub);
            $ok = $req_stat->execute();

            if($ok){
                header('location:../public/accueil.php');
            }else{
                header('location:../public/accueil.php');
            }

        }else{

        }
    }
?>