<?php


$pseudo = null;
$mdp = null;
$mdp2 = null;
$mail = null;
$date = null;
$ma_requette = null;
$insertmbr = null;


ini_set('display_errors', 1);


if (isset($_POST['forminscription'])) {


    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mdp = sha1($_POST['mdp']);
    $mdp2 = sha1($_POST['mdp2']);
    $mail = htmlspecialchars($_POST['mail']);
    $date = htmlspecialchars($_POST['date']);




    if (!empty($_POST['pseudo']) and !empty($_POST['mdp']) and !empty($_POST['mdp2']) and !empty($_POST['date']) and !empty($_POST['mail'])) {
        $pseudolength = strlen($pseudo);

        $ma_requette2 = ("SELECT mail_utilisateur from utilisateur);"); //COMPARER QUE L'ADRESSE MAIL N'EST PAS DEJA UTILISEE
        $insertmbr2 = $bdd->prepare($ma_requette2);
        $insertmbr2->execute();


        if ($pseudolength <= 255) {
            if ($mdp == $mdp2) {
                if (isset($_POST['checkinscri'])){
                    $ma_requette = ("INSERT INTO utilisateur(pseudo_utilisateur, date_utilisateur, password_utilisateur, mail_utilisateur) VALUES('" .  $pseudo . "','" . $date . "','" . $mdp . "','" .  $mail ."');");
                    $insertmbr = $bdd->prepare($ma_requette);
                    $insertmbr->execute();
                    print_r($insertmbr->errorInfo());
                    $_SESSION['comptecree'] = "Votre compte à bien été créé";
                    header('Location: account.php');
                } else {
                    $erreur = "Vous n'avez pas acceptée les conditions générales d'utilisation";
                }

            } else {
                $erreur = "Vos mots de passes ne correspondent pas";
            }
        } else {
            $erreur = "Votre pseudo ne doit pas dépasser 255 caractères.";
        }
    } else {
        $erreur = "Tous les champs doivent être complétés !";
    }
}
?>
