<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 02/04/2018
 * Time: 17:44
 */
require_once "header.php";
?>

<div class="row">
    <div class="col s12 m12 l2">
        <div class="row z-depth-1">
            <p>Sous menu's</p>
        </div>
    </div>
    <div class="col m12 s12 l7 center">
        <div class="row">
            <form method="post" action="accueil.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="input-field col s12 m12 l7">
                        <img class="responsive-img circle left" src="../image/avatar.jpeg" id="img-avatar">
                        <textarea id="statut" class="materialize-textarea" name="statut" placeholder="Statut"></textarea>
                        <button class="btn waves-effect waves-light light-blue lighten-1" type="submit" name="publier">Publier
                            <i class="mdi-content-send right"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="row z-depth-1">
            <p id="statut">
                Bonne journe de vendredi a tous
            </p>
        </div>
    </div>
    <div class="col s12 m12 l3 hide-on-small-only">
        <div class="row z-depth-1">
            <p>
                Online people's
            </p>
        </div>
    </div>
</div>
