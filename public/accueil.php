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

?>
<?php require_once "header.php";?>
<div class="row">
    <div class="col s12 m12 l2">
        <div class="row z-depth-1 light-blue lighten-1 white-text center-align">
            <h4>Sous menu's</h4>
            <p> Salut <?= $login?></p>
            <p><?= $u_data->nom_users?></p>
            <p><?= $u_data->prenom_users?></p>
            <p><?= $u_data->date_users?></p>
        </div>
    </div>
    <div class="col m12 s12 l6 center">
        <div class="row">
            <form method="post" action="accueil.php" enctype="multipart/form-data">
                <div class="row">
                    <img class="responsive-img circle left" src="../image/avatar.jpeg" id="img-avatar">
                    <div class="input-field col s12 m12 l7 center" id="align-statut">
                        <textarea id="statut" class="materialize-textarea" name="statut" placeholder="Statut"></textarea><br>
                        <button class="btn waves-light waves-effect light-blue lighten-1" type="submit" name="publier">Publier
                            <i class="mdi-content-send right"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col m12 s12 l7 center">
        <div class="row z-depth-1" style="margin-top: 55px;">
            <p id="statut">
                Bonne journe de vendredi a tous
            </p>
        </div>
    </div>
    <div class="col s12 m12 l3 right hide-on-small-only" style="margin-top: 40px;">
        <div class="row z-depth-1 light-blue lighten-1 white-text center-align">
            <p>
                Online people's
            </p>
        </div>
    </div>
</div>
