<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Social network">
    <title>Social</title>
    <style>
        #index{
            position:relative;
            top: 100pt;
            box-shadow: 5px;
            margin: auto;
            padding: 1em;
            border-radius: 10px;
            max-width: 450px;
            min-width: 300px;
        }
        #btn-log{
            background: #29b6f6;
            width: 400px;
        }
        #lab-log{
            padding: 7px 5px 0px;
            color: #29b6f6;
            align-content: center;
        }
        #img-log{
            width: 150px;
            height: 100px;
            margin-top: -100px;
            margin-left: 135px;
            position: static;

        }
    </style>

    <!-- CSS  -->
    <link href="assets/libs/materialize/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="assets/libs/materialize/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col l12 m12 s12">
                <div  class="row z-depth-1" id="index">
                    <div class="avatar">
                        <img class="responsive-img circle" src="image/logo-fs.png" id="img-log">
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
                        <a href="#">Forgot password</a>
                    </div>
                    <div class="mdi-action-account-circle col l12 m12 s12 center" id="lab-log">
                        <a href="public/inscription.php"> Sign up</a>
                    </div>
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