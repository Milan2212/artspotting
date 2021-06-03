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
    <title>ArtSpotting - Index</title>
    <link rel="icon" type="image/svg" href="img/logo_blanc.svg"/>
    <link rel="stylesheet" href="css/typography.css">
    <link rel="stylesheet" href="css/layout.css">
</head>
<body class="index">
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
        <img id="account" name="accountbutton" class="icon" src="img/global/account.png" alt="Account">
        <img id="menu" class="icon" src="img/global/menu.png" alt="Menu">
        <ul class="menu">
            <li><img class="icon" src="img/global/filter.png" alt="Filtre"></li>
            <li><img class="icon" src="img/global/random.png" alt="Dé"></li>
            <li><a href="contact.php"><img class="icon" src="img/global/Contact.png" alt="Contact"></a></li>
            <li><a href="add.php"><img class="icon" src="img/global/add.png" alt="Ajout"></a></li>
        </ul>
    </div>

</header>
<div class="popup">
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
</div>
<div id="wait" style="height: 37vw;">
</div>


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
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBO1OKdDu8mg8kclO8cimxdkdRX5X8Lq08&callback=initMap&libraries=&v=weekly"
        async
></script>
<script>
    let map;

    function initMap() {
        map = new google.maps.Map(document.getElementById("wait"), {
            center: { lat: 46.00, lng: 2.00 },
            zoom: 5 ,
        });

        //MARKER 1
        const marker = new google.maps.Marker({
            position: { lat: 48.86, lng: 2.342},
            map: map,
            icon: new google.maps.MarkerImage('img/epingle.png')
        });

        var infoWindowOptions = {
            content: '<h3 style="color: black">Le triomphe de l\'hiver,<br/>Antoine Caron</h3>'
                + '<img src="img/oeuvre/triomphedelhiver.jpg" height="150px" />'
                + '<br/><br/><a href="./oeuvre.php?id=1" target="_blank">En voir plus</a>'
        };

        var infoWindow = new google.maps.InfoWindow(infoWindowOptions);

        google.maps.event.addListener(marker, 'click', function() {
            infoWindow.open(map, marker);
        });
        //MARKER 2
        const marker2 = new google.maps.Marker({
            position: { lat: 48.864824, lng: 2.334595},
            map: map,
            icon: new google.maps.MarkerImage('img/epingle.png')
        });

        var infoWindowOptions2 = {
            content: '<h3 style="color: black">Les acteurs de la comédie italienne,<br/>Nicolas Lancret</h3>'
                + '<img src="img/oeuvre/acteursdelacomedieitalienne.jpg" height="150px" />'
                + '<br/><br/><a href="./oeuvre.php?id=2" target="_blank">En voir plus</a>'
        };

        var infoWindow2 = new google.maps.InfoWindow(infoWindowOptions2);

        google.maps.event.addListener(marker2, 'click', function() {
            infoWindow2.open(map, marker2);
        });
        //MARKER 3
        const marker3 = new google.maps.Marker({
            position: { lat: 48.117266, lng: -1.6777926},
            map: map,
            icon: new google.maps.MarkerImage('img/epingle.png')
        });

        var infoWindowOptions3 = {
            content: '<h3 style="color: black">Cléopâtre se donnant la mort,<br/>Claude Vignon</h3>'
                + '<img src="img/oeuvre/cleopatresedonnantlamort.jpg" height="150px" />'
                + '<br/><br/><a href="./oeuvre.php?id=3" target="_blank">En voir plus</a>'
        };

        var infoWindow3 = new google.maps.InfoWindow(infoWindowOptions3);

        google.maps.event.addListener(marker3, 'click', function() {
            infoWindow3.open(map, marker3);
        });
        // MARKER 4
        const marker4 = new google.maps.Marker({
            position: { lat: 35.6894, lng: 139.692},
            map: map,
            icon: new google.maps.MarkerImage('img/epingle.png')
        });

        var infoWindowOptions4 = {
            content: '<h3 style="color: black">L\'éventail noir,<br/>Fujishima Takeji</h3>'
                + '<img src="img/oeuvre/eventailnoir.jpg" height="150px" />'
                + '<br/><br/><a href="./oeuvre.php?id=4" target="_blank">En voir plus</a>'
        };

        var infoWindow4 = new google.maps.InfoWindow(infoWindowOptions4);

        google.maps.event.addListener(marker4, 'click', function() {
            infoWindow4.open(map, marker4);
        });
        // MARKER 5
        const marker5 = new google.maps.Marker({
            position: { lat: 40.761060, lng: -73.977410},
            map: map,
            icon: new google.maps.MarkerImage('img/epingle.png')
        });

        var infoWindowOptions5 = {
            content: '<h3 style="color: black">La persistance de la mémoire,<br/>Salvador Dali</h3>'
                + '<img src="img/oeuvre/persistancedelamemoire.jpg" height="150px" />'
                + '<br/><br/><a href="./oeuvre.php?id=5" target="_blank">En voir plus</a>'
        };

        var infoWindow5 = new google.maps.InfoWindow(infoWindowOptions5);

        google.maps.event.addListener(marker5, 'click', function() {
            infoWindow5.open(map, marker5);
        });
    }
</script>
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