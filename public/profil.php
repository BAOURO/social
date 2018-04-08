<?php
/**
 * Created by PhpStorm.
 * User: Ghost
 * Date: 06/04/2018
 * Time: 03:01
 */
    require_once "../Database/config.php";
    session_start();
    //recuperation des donnees de la connexion
    $id_user = $_SESSION['id_users'];
    $id_compte = $_SESSION['id_users'];
    $login = $_SESSION['login'];

    // connexion to the BD
    $pdo = connexion();
    $req = $pdo->query('SELECT * FROM users WHERE id_users = "'.$id_user.'"');
    $req->execute();
    $u_data = $req->fetchObject();

    //Calcul age de l'utilisateur
    $date = $u_data->date_users;
    $years = date ( "Y" );
    $age = $years - $date;

    //recuperation adresses
    $req = $pdo->query('SELECT * FROM telephones WHERE id_tel = "'.$id_user.'"');
    $ok = $req->execute();
    $u_tels = $req->fetchAll();


    //Mis a jour Profil
    if(isset($_POST['enreg'])){

    //recuperation des donnees du formulaire
    $st_social = htmlspecialchars($_POST['st_social']);
    $ethnie = htmlspecialchars($_POST['ethnie']);
    $religion = htmlspecialchars($_POST['religion']);
    $pays = htmlspecialchars($_POST['pays']);
    $ville = htmlspecialchars($_POST['ville']);
    $residence = htmlspecialchars($_POST['residence']);

    //Mis a jour des donnees
    $pdo = connexion();
    $req = $pdo->prepare('UPDATE  users SET  statut_social = "'.$st_social.'", ethnie ="'.$ethnie.'", religion ="'.$religion.'", pays ="'.$pays.'", ville ="'.$ville.'", residence ="'.$residence.'" WHERE  id_users = "'.$id_user.'"');
    $ok = $req->execute();
    if($ok){
        echo "Profil mis a jour  avec success!!";
        header("location:profil.php");
    }
    }

?>
<?php require_once "header.php";?>
<div class="row">
    <div class="col s12 m12 l2">
        <div class="row center">
            <div class="card light-blue lighten-1 white-text left-align" id="img-profil">
                <span><img class="responsive-img circle center" src="../image/avatar.jpeg"></span>
                <p class="divider"></p>
                <p><?php echo "Date : " . date("d-m-Y") ;?></p>
                <p><?php echo "Heure :" . date ( "h: i: sa" ); ?></p>
                <p>Vous avez :<?php echo $age;?> ans</p>
                <p class="divider"></p>
            </div>
        </div>
        <div class="row center">
            <div class="collection">
                <a href="#modal1" class="collection-item light-blue lighten-1 white-text modal-trigger">Mis a jour profil</a>
                <a href="#new_etab" class="collection-item light-blue lighten-1 white-text modal-trigger">Ajouter Etablissements</a>
                <a href="#new_photo"  class="collection-item light-blue lighten-1 white-text modal-trigger">Ajouter des Photos</a>
            </div>
        </div>
    </div>
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Ajouter votre addresse</h4>
            <?php require_once "maj_users.php" ?>
        </div>
        <div class="modal-footer">
            <a href="#modal1" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
        </div>
    </div>
    <div id="new_etab" class="modal">
        <div class="modal-content">
            <h4>Ajouter la ou les etablissements frequentes</h4>
            <?php require_once "ecole.php"?>
        </div>
        <div class="modal-footer">
            <a href="#modal1" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
        </div>
    </div>
    <div class="col s12 m12 l9 right">
            <ul class="tabs" style="top: 10px">
                <li class="tab col s12 m12 l12"><a  href="#profil"  class="active blue-text"><i class="small mdi-action-perm-identity"></i></a></li>
                <li class="tab col s12 m12 l12"><a href="#adress" class="active blue-text"><i class="small mdi-maps-store-mall-directory"></i></a></li>
                <li class="tab col s12 m12 l12"><a href="#etude" class="active blue-text"><i class="small mdi-social-school"></i></a></li>
                <li class="tab col s12 m12 l12"><a href="#galerie" class="active blue-text"><i class="small mdi-image-collections"></i></a></li>
            </ul>
    </div>
    <div class="col s12 m12 l10">

        <!--Detail Information personnels--->
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

        <!--Detail Adresses--->
        <div id="adress" class="col s12 m12 l10 right" style="margin-top: 50px;">
            <div class="row z-depth-1" id="perso-profil">
                <div id="profil"  style="margin-bottom: 20px">
                    <?php
                           if($u_adresses > 0){
                       ?>
                       <?php foreach($u_adresses as $adress):?>
                   <div id="profil"  class="col s12 m12 l10">
                       <div class="col s12 m12 l5" style="margin-bottom: 20px;">
                           <span class="  blue-text"> Pays : </span><?= $adress['pays']?>
                       </div>
                       <div class="col s12 m12 l5" style="margin-bottom: 20px;">
                           <span class="  blue-text"> Residence : </span><?= $adress['ville']?>
                       </div>
                       <div class="col s12 m12 l5" style="margin-bottom: 20px;">
                           <span class="  blue-text"> B.P. : </span><?= $adress['bp']?>
                       </div>
                       <div class="col s12 m12 l5" style="margin-bottom: 20px;">
                           <span class="  blue-text"> Tel : </span><?= $adress['tel']?>
                       </div>
                       <?php endforeach;?>
                   </div>
                    </div>
                    <?php
                    }
                    else{
                     ?>
                        <p>Liste des Adresses est vide</p>
                    <?php
                       }
                   ?>
                </div>
            </div>
        </div>

        <!--Detail Etudes--->
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
<script>
    $(document).ready(function(){
        $('.modal-trigger').leanModal();
        $('#modal1').openModal();
        $('#modal1').closeModal();
        $('.modal-trigger').leanModal({
                dismissible: true, // Modal can be dismissed by clicking outside of the modal
                opacity: .5, // Opacity of modal background
                in_duration: 300, // Transition in duration
                out_duration: 200, // Transition out duration
            }
        );

    });
</script>

<?php require_once "footer.php";?>

