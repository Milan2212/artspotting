<?php
session_start();
include ('php/pdo.php');
if(isset($_GET['id']) AND $_GET['id'] > 0)
{
    $getid = intval($_GET['id']);
    $requser = $bdd->prepare('SELECT * FROM utilisateur WHERE id_utilisateur = ?');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();
    if ( isset($_SESSION['id']) AND $userinfo['id_utilisateur'] == $_SESSION['id']) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ArtSpotting - Compte</title>
    <link rel="icon" type="image/svg" href="img/logo_blanc.svg"/>
    <link rel="stylesheet" href="css/typography.css">
    <link rel="stylesheet" href="css/layout.css">
</head>

<body class="account">
<header>
    <a href="index.php">
        <img class="logo" src="img/logo_blanc.svg" alt="Logo">
    </a>
    <h1>ArtSpotting</h1>
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
            l'association</div>
        <div class="bouton">Faire un don</div>
    </div>
    <div class="register">
        <div id="inscriclose" class="closebutton"></div>
        <h2>INSCRIPTION</h2>
        <ul>
            <li><input type="text" placeholder="Identifiant *"/></li>
            <li><input type="password" placeholder="Mot de passe *"/></li>
            <li><input type="password" placeholder="Confirmation du mot de passe *"/></li>
            <li><input type="date" placeholder="Date de naissance (JJ / MM / AAAA) *"/></li>
            <li><input type="email" id="mail" name="user_mail" placeholder="E-mail"/></li>
            <li><h4>* Champs obligatoires</h4></li>
            <li><input type="checkbox"/>
                <p>J’ai lu et j’accepte les <a href="">Conditions générales d’utilisation</a>, les <a href="">Règles
                    d’utilisation d’Internet</a> et la <a href="">Charte de confidentialité</a>.</p>
            </li>
        </ul>
        <p>Ces informations sont collectées par ArtSpotting pour créer votre compte. En savoir plus sur la <a
                href="">gestion de vos données personnelles et de vos droits.</a></p>
        <p>Déjà inscrit ? <a id="loginopen">Se connecter</a></p>

        <a href="">
            <div class="bouton">INSCRIPTION</div>
        </a>
    </div>
    <div class="login">
        <div id="loginclose" class="closebutton"></div>
        <h2>CONNEXION</h2>
        <ul>
            <li><input type="text" placeholder="Identifiant"/></li>
            <li><input type="password" placeholder="Mot de passe"/></li>
            <li><input type="checkbox"/>
                <p>Rester connecté</p>
            </li>
        </ul>
        <p><a href="">Mot de passe oublié ? </a></p>
        <a href="account.html   ">
            <div class="bouton">Connexion</div>
        </a>
    </div>
</div>
<h1>Mon Compte</h1>
<div class="info-profile">
    <div class="divavatar">
        <img src="img/account/Avatar.png" class="avatar" alt="">
        <div class="divchang">
            <img src="img/account/ChangementAvatar.png" class="changementavatar" alt="">
        </div>
    </div>
    <h3> <?php echo $userinfo['pseudo_utilisateur']; ?> </h3>
    <a href="php/deconnexion.php"><div class="button1">
        <p>Déconnexion</p>
    </div></a>
    <form action="" method="get" class="form-example">
        <div class="form-example">
            <label for="name">Identifiant </label>
            <input type="text" name="name" id="name" value="<?php echo $userinfo['pseudo_utilisateur']; ?>" required>
        </div>
        <div class="form-example">
            <label for="date">Date de naissance</label>
            <input type="date" name="date" id="date" value="<?php echo $userinfo['date_utilisateur']; ?>" required>
        </div>
        <div class="form-example">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div class="form-example">
            <label for="email">Adresse E-Mail</label>
            <input type="email" name="email" id="email" value="<?php echo $userinfo['mail_utilisateur']; ?>" required>
        </div>
        <div class="form-example">
            <input class="button2" type="submit" value="Enregistrer les modifications">
        </div>
    </form>
</div>
<div class="oeuvrelike">
    <div class="greyoeuvre">
        <div class="grid-item1">
            <h3>Œuvres likées</h3>
        </div>
        <div class="grid-item2">
            <img src="img/oeuvre/acteursdelacomedieitalienne.jpg" alt="">
        </div>
        <div class="grid-item2">
            <img src="img/oeuvre/cleopatresedonnantlamort.jpg" alt="">
        </div>
        <div class="grid-item2">
            <img src="img/oeuvre/eventailnoir.jpg" alt="">
        </div>
        <div class="grid-item2">
            <img src="img/oeuvre/persistancedelamemoire.jpg" alt="">
        </div>
        <div class="grid-item2">
            <img src="img/oeuvre/triomphedelhiver.jpg" alt="">
        </div>
        <div class="grid-item2">
            <img src="" alt="">
        </div>
        <div class="grid-item2">
            <img src="" alt="">
        </div>
        <div class="grid-item2">
            <img src="" alt="">
        </div>
    </div>
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
        <h4><a href="mentions_legales.html">Mentions Légales</a></h4>
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
} else {
    header('Location: index.php');
}
?>