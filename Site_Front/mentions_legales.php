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
    <title>Mentions Légales</title>
    <link rel="icon" type="image/svg" href="img/logo_blanc.svg" />
    <link rel="stylesheet" href="css/typography.css">
    <link rel="stylesheet" href="css/layout.css">
</head>
<body class="mentions">
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
<div class="pad">
<h3>Nom du site web : </h3>
<p>ArtSpotting</p>
<h3>Adresse URL :</h3>
<p>artspotting.milanmorisot.fr</p>
<h3>Propriétaires :</h3>
<p>Jonas MORISOT</p>
<p>Mail : <a href="mailto:milanmorisot@gmail.com">milanmorisot@gmail.com</a></p>
<p>Zoé LOUYOT </p>
<p>Mail : <a href="mailto:zoe.louyot@laposte.net">zoe.louyot@laposte.net </a></p>
<p>Maëlle MARCHAL</p>
<p>Mail : <a href="mailto:tghmae@gmail.com">tghmae@gmail.com</a></p>
<h3>Conception et réalisation :</h3>
<p>Jonas MORISOT, Zoé LOUYOT, Maëlle MARCHAL</p>
<h3>Hébergement :</h3>
<p><a href="https://www.infomaniak.com/fr">Infomaniak</a></p>
<h2>Conditions d'utilisation</h2>
<p>La structure générale du site ArtSpotting ainsi que les textes, graphiques, images, sons et vidéos la composant, sont
    la propriété de l'éditeur ou de ses partenaires. Toute représentation ou reproduction et exploitation partielle ou
    totale des contenus et services proposés par le site ArtSpotting, par quelque procédé que ce soit, sans
    l'autorisation préalable et par écrit de l’éditeur et de ses partenaires est strictement interdite et serait
    susceptible de constituer une contrefaçon au sens des articles L 335-2 et suivants du Code de la propriété
    intellectuelle.</p>
<p>Le site ArtSpotting peut contenir des liens hypertextes vers d’autres sites présents sur le réseau Internet. Les
    liens vers ces autres ressources vous feront quitter le site.
</p>
<p>Il est possible de créer un lien vers la page de présentation de ce site sans autorisation, aucune autorisation ou
    demande d’information préalable ne peut être exigée par l’éditeur à l’égard d’un site qui souhaite établir un lien
    vers le site de l’éditeur. Il convient toutefois d’afficher ce site dans une nouvelle fenêtre du navigateur.
    Cependant, les éditeurs se réservent le droit de demander la suppression d’un lien qu’ils estiment non conforme à
    l’objet du site ArtSpotting.
</p>
<p>Les informations et documents figurant sur ce site et/ou accessibles par ce site proviennent de sources considérées
    comme étant fiables. Les informations et documents disponibles sur ce site sont susceptibles d’être modifiés à tout
    moment, et peuvent avoir fait l’objet de mises à jour.
</p>
<p>L’utilisation des informations et documents disponibles sur ce site se fait sous l’entière et seule responsabilité de
    l’utilisateur, qui assume la totalité des conséquences. Les éditeurs ne pourront en aucun cas être tenu responsable
    de tout dommage de l’interprétation ou de l’utilisation des informations et documents disponibles sur ce site.
</p>
<p>La responsabilité des éditeurs ne sera pas engagée en cas d’impossibilité d’accès au site ArtSpotting et
    d’utilisation des services. Par ailleurs, les éditeurs peuvent être amenés à interrompre le site ou une partie des
    services, à tout moment sans préavis, et l’utilisateur accepte que les éditeurs ne soient pas responsables des
    interruptions.</p>
<h2>Modification des Conditions d'utilisation</h2>
<p>Les éditeurs se réservent la possibilité de modifier, à tout moment et sans préavis, les présentes conditions
    d’utilisation afin de les adapter aux évolutions du site ou de son exploitation.</p>
<h2>Règles d'usage d'Internet</h2>
<p>L’utilisateur déclare accepter les caractéristiques et les limites d’Internet, et notamment reconnaît que :
    Les éditeurs du site ArtSpotting n’assument aucune responsabilité sur les services accessibles par Internet et
    n'exercent aucun contrôle sous aucune forme, que ce soit sur la nature ou les caractéristiques des données qui
    pourraient transiter par l’intermédiaire de son centre serveur.
</p>
<p>L’utilisateur reconnaît que les données circulant sur Internet peuvent être réglementées en termes d’usage ou être
    protégées par un droit de propriété, et l’utilisateur est seul responsable de l’usage des données qu’il consulte sur
    internet.</p>
<p>L’utilisateur reconnaît que les éditeurs de ArtSpotting ne disposent d’aucun moyen de contrôle sur le contenu des
    services accessibles sur Internet.</p>
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