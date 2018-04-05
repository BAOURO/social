<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 02/04/2018
 * Time: 10:43
 */
require_once "config.php";


if(isset($_POST['btn-sign'])){
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $date = htmlspecialchars($_POST['date']);
    $lieu = htmlspecialchars($_POST['lieu']);
    $sexe = htmlspecialchars($_POST['sexe']);
    $mail = htmlspecialchars($_POST['mail']);
    $login = htmlspecialchars($_POST['login']);
    $pass = htmlspecialchars($_POST['pass']);
    $cpass = htmlspecialchars($_POST['cpass']);
    $status = 1;
    $id_users = 0;

    if($pass != $cpass){
        echo "Les mots de passe doivent etre identiques ";
        require "inscription.php";
    }else{
        $pdo = connexion();
        $password =md5($pass);

        try{

            $req = $pdo->prepare('INSERT INTO users VALUES (NULL , :nom_users, :prenom_users, :date_users, :lieu_users, :sexe_users, :mail_users)');
            $req->bindValue(":nom_users",$nom);
            $req->bindValue(":prenom_users",$prenom);
            $req->bindValue(":date_users",$date);
            $req->bindValue(":lieu_users",$lieu);
            $req->bindValue(":sexe_users",$sexe);
            $req->bindValue(":mail_users",$mail);
            $ok_users = $req->execute();
            $id_users = $pdo->lastInsertId();

            if($ok_users){
                $req_log = $pdo->prepare('INSERT INTO comptes VALUES (NULL , :id_users, :login, :password, :status)');
                $req_log->bindValue(":id_users",$id_users, PDO::PARAM_INT);
                $req_log->bindValue(":login",$login, PDO::PARAM_STR);
                $req_log->bindValue(":password",$password, PDO::PARAM_STR);
                $req_log->bindValue(":status",$status, PDO::PARAM_INT);
                $ok = $req_log->execute();

                if($ok){
                    header("Location:../index.php");
                }else{

                    require_once "inscription.php";
                }
            }else{
                require "inscription.php";
            }
        }catch (Exception $e){
            $e->getMessage();
        }
    }

}