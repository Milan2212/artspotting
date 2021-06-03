<?php
$erreurcoo = null;

if (isset($_POST['formconnexion'])) {
    $mailconnect = htmlspecialchars($_POST['mailconnect']);
    $mdpconnect = sha1($_POST['mdpconnect']);
    if (!empty($_POST['mailconnect']) and !empty($_POST['mdpconnect'])) { ///Passe quoi qu'il se passe (jamais
        $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE mail_utilisateur = ? AND password_utilisateur = ? ");
        $requser->execute(array($mailconnect, $mdpconnect));
        $userexist = $requser->rowCount();
        if ($userexist == 1) {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id_utilisateur'];
            $_SESSION['pseudo'] = $userinfo['pseudo_utilisateur'];
            $_SESSION['mail'] = $userinfo['mail_utilisateur'];
            header("Location: account.php?id=".$_SESSION['id']);
        } else {
            $erreurcoo = "Mauvais mail ou mot de passe !";
        }
    } else {
        $erreurcoo = "Tous les champs doivent être complétés !";
    }
}
?>
