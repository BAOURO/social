<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 01/04/2018
 * Time: 23:31
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Social network">
    <title>Social</title>

    <!-- CSS  -->
    <link href="../assets/libs/materialize/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../assets/libs/materialize/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
    <div class="row">
        <header>
            <nav>
                <div class="navbar-fixed">
                    <div class="card light-blue white-text">
                        <p class="center-align" style="font-family: cursive; font-size: 45px;">Creation de compte</p>
                    </div>
                </div>
            </nav>
        </header>
        <div class="col l12 m12 s12 ">
            <div class="container">
                <div class="row z-depth-1 light-blue-text"  style="margin-top: 40px;">
                    <form method="post" action="../Database/inscription.php">
                        <div class="col l12 m12 s12">
                            <p class="card-header light-blue-text center-align" style="font-size: 25px ;text-align: center; color: #f57f17">S'inscrire</p>
                        </div>
                        <div class="input-field col l6 m12 s12">
                            <input type="text" name="nom" id="nom">
                            <label for="nom">Nom</label>
                        </div>
                        <div class="input-field col l6 m12 s12">
                            <input type="text" name="prenom" id="prenom">
                            <label for="prenom">Prenom</label>
                        </div>
                        <div class="input-field col l6 m12 s12">
                            <input type="date" name="date" id="date" placeholder="Date de naissance">
                        </div>
                        <div class="input-field col l6 m12 s12">
                            <input type="text" name="lieu" id="lieu">
                            <label for="lieu">Lieu de naissance</label>
                        </div>
                        <div class="col l6 m12 s12">
                            <label for="sexe">Sexe :</label>
                            <input class="with-gap" type="radio" name="sexe" value="M" id="Masculin" checked>
                            <label for="Masculin">Masculin</label>
                            <input class="with-gap" type="radio" name="sexe" value="F" id="Feminin">
                            <label for="Feminin">Feminin</label>
                        </div>
                        <div class="input-field col l6 m12 s12">
                            <input type="email" name="mail" id="mail">
                            <label for="mail">Email</label>
                        </div>
                        <div class="input-field col l6 m12 s12">
                            <input type="text" name="login" id="login">
                            <label for="login">Login</label>
                        </div>
                        <div class="input-field col l6 m12 s12">
                            <input type="password" name="pass" id="pass">
                            <label for="pass">Password</label>
                        </div>
                        <div class="input-field col l12 m12 s12">
                            <input type="password" name="cpass" id="cpass">
                            <label for="cpass">Confirm Password</label>
                        </div>
                        <div class="input-field col l12 m12 s12 center" style="display: block;">
                            <button style="width: 150px;" class="btn-large light-blue lighten-1"  name="btn-cancel" type="reset" id="btn-cancel">
                                <i class="mdi-content-send right"></i>Cancel
                            </button>
                            <button style="width: 150px;" class="btn-large light-blue lighten-1"  name="btn-sign" type="submit" id="btn-sign">
                                <i class="mdi-content-send right"></i>Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Scripts-->
    <script src="../assets/libs/materialize/js/jquery.js"></script>
    <script src="../assets/libs/materialize/js/materialize.js"></script>
    <script src="../assets/libs/materialize/js/init.js"></script>
</body>
</html>
