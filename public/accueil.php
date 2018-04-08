<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 02/04/2018
 * Time: 17:44
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

    //affichage statut
    $statut = $pdo->prepare('SELECT * FROM statuts WHERE id_users ="'.$id_user.'" ORDER BY date_ajout DESC LIMIT 15');
    $statut->execute();
    $statuts = $statut->fetchAll();

    //Affichages des Amis
    $people = $pdo->query('SELECT * FROM users WHERE id_users != "'.$id_user.'"');
    $people->execute();
    $all_people = $people->fetchAll();

?>
<?php require_once "header.php";?>
<div class="row">

    <div class="col s12 m12 l2 left">
        <div class="row z-depth-1 light-blue lighten-1 white-text center-align">
            <h4>UN-Social's</h4>
            <p> Salut <?= $login?></p>
            <p><?= $u_data->nom_users?></p>
            <p><?= $u_data->prenom_users?></p>
            <p><?= $u_data->date_users?></p>
        </div>
    </div>

    <div class="col s12 m12 l2 right">
        <div class="center light-blue-text">
            <h5>Friend Liste</h5>
        </div>
        <div class="z-depth-1 light-blue lighten-1">
            <?php foreach($all_people as $all):?>
            <p><a href="#" class=" white-text"><?= $all['nom_users']?></a></p>
            <?php endforeach;?>
        </div>
    </div>

    <div class="col m12 s12 l6 center">
        <div class="row">
            <form method="post" action="../Database/InsertStatut.php">
                <div class="row">
                    <img class="responsive-img circle left" src="../image/avatar.jpeg" id="img-avatar">
                    <div class="input-field col s12 m12 l7 center" id="align-statut">
                        <textarea id="statut" class="materialize-textarea" name="statut" placeholder="Statut" required></textarea><br>
                        <button class="btn waves-light waves-effect light-blue lighten-1 left" type="submit" name="publier">Publier
                            <i class="mdi-content-send right"></i>
                        </button>
                    </div>
                    <input type="hidden" name="id" value="<?= $id_user?>">
                </div>
            </form>
        </div>
    </div>
    <div class="col m12 s12 l8 center">
        <?php foreach($statuts as $stat):?>
        <div class="row" style="margin-top: 55px;">
            <div class="col s12 m4 l12 ">
                <div class="card light-blue" style="border-radius: 15px; margin: 5px; padding: 1em;">
                    <span class="badge"><?= $u_data->nom_users ?></span>
                    <div class="left">
                        <img src="../image/avatar.jpeg" class="card-image responsive-img circle" style="width: 75px; height: 75px;">
                    </div>
                    <div class="card-content">
                        <span class="white-text" style="text-justify:inter-word;"><?=$stat['statut']?></span><br>
                        <span class="white-text right"><?=$stat['date_ajout']?></span>
                    </div>
                    <div class="card-action left" style="color: #fff; padding: 0px; border-radius: 15px;">
                        <a href="#"><i class="mdi-action-thumb-up white-text">12</i></a>
                        <a href='#'><i class="mdi-action-thumb-down white-text">5</i></a>
                        <a href='#'><i class="mdi-action-speaker-notes white-text">4</i></a>
                        <a href='#'><i class="mdi-social-share white-text"></i></a>
                    </div>
                </div>
            </div>
         <?php endforeach;?>
        </div>
    </div>


</div>
