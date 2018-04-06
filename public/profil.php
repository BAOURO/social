<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 06/04/2018
 * Time: 03:01
 */
    require_once "../Database/config.php";

    //recuperation des donnees de la connexion
    session_start();
    $id_user = $_SESSION['id_users'];
    $id_compte = $_SESSION['id_users'];
    $login = $_SESSION['login'];

    // connexion to the BD
    $pdo = connexion();
    $req = $pdo->query('SELECT * FROM users WHERE id_users = "'.$id_user.'"');
    $req->execute();
    $u_data = $req->fetchObject();

    $date = $u_data->date_users;
    $age = 2018 - $date;

?>
<?php require_once "header.php";?>
<div class="row">
    <div class="col s12 m12 l2">
        <div class="container">
            <div class="col s12 m12 l2 left">
                <div class="card light-blue lighten-1 white-text center-align" id="img-profil">
                    <span><img class="responsive-img circle center" src="../image/avatar.jpeg"></span>
                    <p class="divider"></p>
                    <p>Vous avez :<?php echo $age;?> ans</p>
                    <p class="divider"></p>

                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m12 l10">
        <div class="col s12 m12 l10 right">
            <ul class="tabs" style="top: 10px">
                <li class="tab col s12 m12 l12"><a  href="#profil"  class="active blue-text">Personnel</a></li>
                <li class="tab col s12 m12 l12"><a href="#adress" class="active blue-text">Adresses</a></li>
                <li class="tab col s12 m12 l12"><a href="#etude" class="active blue-text">Etudes</a></li>
                <li class="tab col s12 m12 l12"><a href="#galerie" class="active blue-text">Galerie</a></li>
            </ul>
        </div>
    </div>
    <div class="col s12 m12 l10">
        <div id="profil" class="col s12 m12 l10" style="margin-top: 50px;">
            <div class="col s12 m12 l10 right">
                <div class="row z-depth-2" id="perso-profil">
                    <div class="col s12 m12 l5" style="margin-bottom: 20px;">
                        <span class="  blue-text">Nom :</span>
                        <?=$u_data->nom_users?>
                    </div>
                    <div class="col s12 m12 l5" style="margin-bottom: 20px;">
                        <span class="  blue-text">Prenom :</span>
                        <?=$u_data->prenom_users?>
                    </div>
                    <div class="col s12 m12 l5" style="margin-bottom: 20px;">
                        <span class="  blue-text">Date de naissance : </span>
                        <?=$u_data->date_users?>
                    </div>
                    <div class="col s12 m12 l5" style="margin-bottom: 20px;">
                        <span class="  blue-text">Lieu de naissance :</span>
                        <?=$u_data->lieu_users?>
                    </div>
                    <div class="col s12 m12 l5" style="margin-bottom: 20px;">
                        <span class="  blue-text">sexe :</span>
                        <?=$u_data->sexe_users?>
                    </div>
                    <div class="col s12 m12 l5" style="margin-bottom: 20px;">
                        <span class="  blue-text">Mail :</span>
                        <?=$u_data->mail_users?>
                    </div>
                    <a class="btn-floating btn light-blue lighten-1 right" href="#"><i class="large mdi-editor-mode-edit"></i></a>
                </div>
            </div>
        </div>
        <div id="adress" class="col s12 m12 l10 right" style="margin-top: 50px;">
            <div class="row z-depth-1" id="perso-profil">
                <div style="margin-bottom: 20px">
                   <p>Liste des Adresses</p>
                </div>
            </div>
        </div>
        <div id="etude" class="col s12 m12 l10 right" style="margin-top: 50px;">
            <div class="row z-depth-1" id="perso-profil">
                <div style="margin-bottom: 20px;">
                    <p>Les etablissements frequentes</p>
                </div>
            </div>
        </div>
        <div id="galerie" class="col s12 m12 l10 right" style="margin-top: 50px;">
            <div class="row z-depth-1" id="perso-profil">
                <div style="margin-bottom: 20px;">
                    <p>Mes photos</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "footer.php";?>

