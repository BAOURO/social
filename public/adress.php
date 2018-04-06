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
        <form class="col l12 m12 s12" method="post" action="#">
            <div class="input-field col l6 m6 s12">
                <input id="tel" name="tel" type="text" value="" required >
                <label for="tel">Tel :</label>
            </div>
            <div class="input-field col l6 m6 s12">
                <input id="bp" name="bp" type="text" value="" required >
                <label for="bp">B.P. :</label>
            </div>
            <div class="input-field col l6 m6 s12">
                <input id="pays" name="pays" type="text" value="" required >
                <label for="pays">Pays :</label>
            </div>
            <div class="input-field col l6 m6 s12">
                <input id="ville" name="ville" type="text" value="" required >
                <label for="ville">Ville :</label>
            </div>
            <div class="input-field col l12 m12 s12" style="text-align: center">
                <button  class="btn-large" name="enreg" type="submit" value="Enregistrer">Enregistrer</button>
                <button class="btn-large" name="reset" type="reset" value="Annuler">  Annuler   </button>
            </div>
        </form>
    </div>
</div>
