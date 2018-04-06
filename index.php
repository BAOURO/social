<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Social">
    <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="assets/libs/materialize/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <title>Social</title>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col l12 m12 s12">
                <div  class="row z-depth-1" id="index">
                    <form method="post" action="Database/login.php">
                        <div class="avatar">
                            <img class="responsive-img circle" src="image/avatar.jpeg" id="img-log">
                        </div>
                        <div class="input-field col l12 m12 s12">
                            <input type="text" name="login" id="login">
                            <label for="login">Login</label>
                        </div>
                        <div class="input-field col l12 m12 s12">
                            <input type="password" name="pass" id="pass">
                            <label for="pass">Password</label>
                        </div>
                        <div class="input-field col l12 m12 s12 col l12 m12 s12">
                            <button class="btn-large center-align"  name="btn-log" type="submit" id="btn-log">
                                <i class="mdi-content-send right"></i>connect
                            </button>
                        </div>
                        <div class="mdi-action-help col l12 m12 s12 center" id="lab-log">
                            <a href="#">Forgot password ?</a>
                        </div>
                        <div class="mdi-action-account-circle col l12 m12 s12 center" id="lab-log">
                            <a href="public/inscription.php">Sign up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts-->
    <script src="assets/libs/materialize/js/jquery.js"></script>
    <script src="assets/libs/materialize/js/materialize.js"></script>
    <script src="assets/libs/materialize/js/init.js"></script>

</body>
</html>