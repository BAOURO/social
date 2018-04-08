<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 06/04/2018
 * Time: 07:47
 */
?>

<div class="row">
    <div class="col s12 center-align z-depth-1">
        <form class="col l12 m12 s12" method="post" action="profil.php">
            <div class="input-field col l6 m6 s12">
                <select class="amber-text" name="st_social">
                        <option class="disabled">Statut Social</option>
                        <option value="Marie">Marie</option>
                        <option value="Celibataire">Celibataire</option>
                        <option value="Divorce">Divorce</option>
                </select>
            </div>
            <div class="input-field col l6 m6 s12">
                <input id="ethnie" name="ethnie" type="text" value="" required >
                <label for="ethnie">Ethnie :</label>
            </div>
            <div class="input-field col l6 m6 s12">
                <select class="amber-text" name="religion">
                    <option class="disabled">Religion</option>
                    <option value="Islam">Islam</option>
                    <option value="christianisme">christianisme</option>
                    <option value="Autre">Autre</option>
                </select>
            </div>
            <div class="input-field col l6 m6 s12">
                <input id="pays" name="pays" type="text" value="" required >
                <label for="pays">Pays :</label>
            </div>
            <div class="input-field col l6 m6 s12">
                <input id="ville" name="ville" type="text" value="" required >
                <label for="ville">Ville :</label>
            </div>
            <div class="input-field col l6 m6 s12">
                <input id="residence" name="residence" type="text" value="" required >
                <label for="residence">Residence :</label>
            </div>
            <div class="input-field col l12 m12 s12" style="text-align: center">
                <button  class="btn-large" name="enreg" type="submit" value="save">save</button>
                <button class="btn-large" name="reset" type="reset" value="Annuler">cancel</button>
            </div>
        </form>
    </div>
</div>
