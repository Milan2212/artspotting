<?php
session_start();

include ('php/pdo.php');
include('php/inscription.php');
include ('php/login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ArtSpotting - Contact</title>
    <link rel="icon" type="image/svg" href="img/logo_blanc.svg" />
    <link rel="stylesheet" href="css/typography.css">
    <link rel="stylesheet" href="css/layout.css">
</head>
<body class="contact">
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
</div>
<h1>Contactez-nous !</h1>
<p class="desc">Nous vous invitons à compléter et envoyer ce formulaire pour contacter notre équipe support.
    Pour que nous puissions vous répondre le plus précisément possible et dans les meilleurs délais, décrivez votre
    demande avec un maximum de détails.</p>
<form action="" method="get" class="form-example greyform">
    <div class="form-example">
        <input type="email" name="email" id="email" required placeholder="E-mail">
    </div>
    <div class="form-example">
        <input type="text" name="topic" id="topic" required placeholder="Objet">
    </div>
    <div class="form-example">
        <input type="text" name="message" id="message" required placeholder="Catégorie">
    </div>
    <div class="form-example">
        <textarea id="story" name="story" rows="9" cols="90" required placeholder="Votre message"></textarea>
    </div>
    <div class="form-example">
        <input type="submit" class="bouton" value="Envoyer">
    </div>
</form>
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