<?php
session_start();

include ('php/pdo.php');
include('php/inscription.php');
include ('php/login.php');
if(isset($_GET['id']) AND $_GET['id'] > 0) {
    $getid = intval($_GET['id']);
    $requser = $bdd->prepare('SELECT * FROM oeuvre WHERE id_oeuvre = ?');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();
    //TYPE
    $reqtype = $bdd->prepare('SELECT nom_type FROM oeuvre, `type` where  oeuvre.id_type=`type`.id_type AND oeuvre.id_type ='.$userinfo['id_type'] );
    $reqtype->execute();
    $typeinfo = $reqtype->fetch();
    //TECHNIQUE
    $reqtech = $bdd->prepare('SELECT nom_technique FROM oeuvre, technique where  oeuvre.id_technique=technique.id_technique AND oeuvre.id_technique ='.$userinfo['id_technique'] );
    $reqtech->execute();
    $techinfo = $reqtech->fetch();
    //ARTISTE
    $reqartiste = $bdd->prepare('SELECT nom_artiste, prenom_artiste FROM oeuvre, artiste where  oeuvre.id_artiste=artiste.id_artiste AND oeuvre.id_artiste ='.$userinfo['id_artiste'] );
    $reqartiste->execute();
    $artisteinfo = $reqartiste->fetch();
    //LIEU
    $reqlieu = $bdd->prepare('SELECT pays, ville, musee FROM oeuvre, lieu_exposition where  oeuvre.id_lieu=lieu_exposition.id_lieu AND oeuvre.id_lieu ='.$userinfo['id_lieu'] );
    $reqlieu->execute();
    $lieuinfo = $reqlieu->fetch();
    //MOUVEMENT
    $reqmouv = $bdd->prepare('SELECT nom_mouvement FROM oeuvre, mouvement where  oeuvre.id_mouvement=mouvement.id_mouvement AND oeuvre.id_mouvement ='.$userinfo['id_mouvement'] );
    $reqmouv->execute();
    $mouvinfo = $reqmouv->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ArtSpotting - Oeuvre</title>
    <link rel="icon" type="image/svg" href="img/logo_blanc.svg" />
    <link rel="stylesheet" href="css/typography.css">
    <link rel="stylesheet" href="css/layout.css">
</head>
<body class="oeuvre">
<header>
    <a href="index.php">
        <img class="logo" src="img/logo_blanc.svg" alt="Logo">
    </a>
    <h1>ArtSpotting</h1>
    <p style="position: absolute; color: deepskyblue; width: 25vw; top: 1.4vw; left: 37.5vw;">
        <?php
        if (isset($erreurcoo)) {
            echo $erreurcoo;
        } else if (isset($erreur)) {
            echo $erreur;
        }
        ?>
    </p>
    <div class="iconheader">
        <img id="don" src="img/global/don.png" alt="Don">
        <img id="account" class="icon" src="img/global/account.png" alt="Account">
        <img id="menu" class="icon" src="img/global/menu.png" alt="Menu">
        <ul class="menu">
            <li><img class="icon" src="img/global/filter.png" alt="Filtre"></li>
            <li><img class="icon" src="img/global/random.png" alt="Dé"></li>
            <li><a href="contact.php"><img class="icon" src="img/global/Contact.png" alt="Contact"></a></li>
            <li><a href="add.php"><img class="icon" src="img/global/add.png" alt="Ajout"></a></li>
        </ul>
    </div>

</header>
<div class="wait">
    <div class="dons">
        <div id="donclose" class="closebutton"></div>
        <h2>AIDEZ ARTSPOTTING</h2>
        <p>Vous souhaitez soutenir notre travail ?
            N’hésitez pas à rejoindre notre association ou à faire un don en suivant les boutons ci-dessous</p>
        <div class="bouton">Adhérer à
            l'association
        </div>
        <div class="bouton">Faire un don</div>
    </div>
    <div class="register">
        <div id="inscriclose" class="closebutton"></div>
        <h2>INSCRIPTION</h2>
        <form method="POST" action="">
            <ul>
                <li><input type="text" name="pseudo" placeholder="Pseudo" value="<?php if (isset($pseudo)) {
                        echo $pseudo;
                    } ?>"/></li>
                <li><input type="password" placeholder="Mot de passe *" name="mdp"/></li>
                <li><input type="password" placeholder="Confirmation du mot de passe *" name="mdp2"/></li>
                <li><input type="date" placeholder="Date de naissance (JJ / MM / AAAA) *" name="date"
                           value="<?php if (isset($pseudo)) {
                               echo $date;
                           } ?>"/></li>
                <li><input type="email" name="mail" placeholder="E-mail" value="<?php if (isset($pseudo)) {
                        echo $mail;
                    } ?>"/></li>
                <li><h4>* Champs obligatoires</h4></li>
                <li><input type="checkbox" name="checkinscri"/>
                    <p>J’ai lu et j’accepte les <a href="">Conditions générales d’utilisation</a>, les <a href="">Règles
                            d’utilisation d’Internet</a> et la <a href="">Charte de confidentialité</a>.</p>
                </li>
            </ul>
            <p>Ces informations sont collectées par ArtSpotting pour créer votre compte. En savoir plus sur la <a
                    href="">gestion de vos données personnelles et de vos droits.</a></p>
            <p>Déjà inscrit ? <a id="loginopen">Se connecter</a></p>

            <input type="submit" name="forminscription" class="bouton" value="INSCRIPTION" onsubmit="return false"/>
        </form>
    </div>
    <div class="login">
        <div id="loginclose" class="closebutton"></div>
        <h2>CONNEXION</h2>
        <form method="POST" action="">
            <ul>
                <li><input type="text" placeholder="E-mail" name="mailconnect"/></li>
                <li><input type="password" placeholder="Mot de passe" name="mdpconnect"/></li>
                <li><input type="checkbox"/>
                    <p>Rester connecté</p>
                </li>
            </ul>
            <p class="mdpforget">Mot de passe oublié ?</p>
            <input type="submit" name="formconnexion" class="bouton" value="Se connecter"/>
            <p style="color: deepskyblue; width: 19.26vw">
                <?php
                if (isset($erreurcoo)) {
                    echo $erreurcoo;
                }
                ?>
            </p>
        </form>
    </div>
</div>--
    <div class="greyoeuvre">
        <div class="grid-item1">
            <h3><?php echo $userinfo['nom_oeuvre']; ?> , <?php echo $artisteinfo['prenom_artiste']; ?> <?php echo $artisteinfo['nom_artiste']; ?></h3>
        </div>
        <div class="grid-item2">
            <img src="<?php echo $userinfo['img_oeuvre']; ?>" alt="">
        </div>
        <div class="grid-item2">
        <ul>
            <li>Année de création : <?php echo $userinfo['date_oeuvre']; ?></li>
            <li>Taille : <?php echo $userinfo['taille_oeuvre']; ?>cm</li>
            <li>Type : <?php echo $typeinfo['nom_type']; ?></li>
            <li>Technique : <?php echo $techinfo['nom_technique']; ?>
            </li>
            <li>Mouvement : <?php echo $mouvinfo['nom_mouvement']; ?>
            </li>
            <li>Lieu d’exposition : <?php echo $lieuinfo['pays']; ?>, <?php echo $lieuinfo['ville']; ?>  <?php echo $lieuinfo['musee']; ?></li></li>
        </ul>
        </div>
        <div class="grid-item2">
            <h2>L'auteur</h2>
            <p><?php echo $userinfo['description_artiste']; ?></p>
        </div>
        <div class="grid-item2">
            <h2>L'oeuvre</h2>
            <p><?php echo $userinfo['description_oeuvre']; ?></p>
        </div>
    </div>
<a href="index.php"><div class="bouton">← Retour</div></a>
<footer>
    <section id="reseaux">
        <a href="https://twitter.com/"><img src="img/logo_tw.svg" alt="Logo Twitter"></a>
        <a href="https://www.facebook.com/"><img src="img/logo_fb.svg" alt="Logo Facebook"></a>
        <a href="https://www.instagram.com/"><img src="img/logo_insta.svg" alt="Logo Instagram"></a>
    </section>
    <section id="informations">
        <h4><a href="mailto:artspotting1@gmail.com">artspotting1@gmail.com</a></h4>
        <p>Projet réalisé dans le cadre d'un exercice pédagogique <br/>au département <a
                href="http://mmimontbeliard.com/">MMI
                de Montbéliard.</a></p>
        <a href="http://mmimontbeliard.com/"><img src="img/logo_MMI.svg" alt="Logo de DUT MMI"></a>
    </section>
    <section id="mentions_legales">
        <h4><a href="mentions_legales.php">Mentions Légales</a></h4>
    </section>
</footer>
<script>
    (function () {
        "use strict";
        var menu = document.querySelector(".menu");
        var ouverture = document.querySelector("#menu");

        function clickouverture() {
            if (menu.classList.contains('open')) {
                menu.classList.remove('open');
            } else {
                menu.classList.add('open');
            }
        }

        ouverture.addEventListener('click', clickouverture);

        var donopen = document.querySelector("#don");
        var dons = document.querySelector(".dons");
        var donclose = document.querySelector("#donclose");

        function donouverture() {
            dons.classList.add('donshow');
            login.classList.remove('loginshow');
            inscription.classList.remove('regishow');
        }

        function donfermeture() {
            dons.classList.remove('donshow');
        }

        donopen.addEventListener('click', donouverture);
        donclose.addEventListener('click', donfermeture);

        var inscriopen = document.querySelector("#account");
        var inscription = document.querySelector(".register");
        var inscriclose = document.querySelector("#inscriclose");

        function inscriouverture() {
            inscription.classList.add('regishow');
            login.classList.remove('loginshow');
            dons.classList.remove('donshow');
        }

        function inscrifermeture() {
            inscription.classList.remove('regishow');
        }

        inscriopen.addEventListener('click', inscriouverture);
        inscriclose.addEventListener('click', inscrifermeture);


        var loginopen = document.querySelector("#loginopen");
        var login = document.querySelector(".login");
        var loginclose = document.querySelector("#loginclose");

        function loginmessage() {
            login.classList.add('loginshow');
            inscription.classList.remove('regishow');
        }

        function loginmclose() {
            login.classList.remove('loginshow');
        }

        loginopen.addEventListener('click', loginmessage);
        loginclose.addEventListener('click', loginmclose);


    }());
</script>
</body>
</html>
<?php
} else {
    header('Location: index.php');
}
?>