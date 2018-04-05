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
    <div class="col m12 s12 l8 center">
        <div class="container">
            <form method="post" action="accueil.php" enctype="multipart/form-data">
                <img class="responsive-img circle" src="../image/avatar.jpeg" style="top: 40px; width: 75px; height: 75px; position: relative">
                <div class="row">
                    <div class="input-field col s12 m12 l7 right">
                        <i class="mdi-editor-mode-edit prefix"></i>
                        <textarea id="statut" class="materialize-textarea" name="statut" placeholder="Statut"></textarea>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Publier
                            <i class="mdi-action-search right"></i>
                        </button>
                    </div>
                </div>
            </div>
            </form>
    </div>
</div>
