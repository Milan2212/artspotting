<?php

class utilisateur
{
    // déclaration d'une propriété
    private $id_utilisateur = NULL;
    private $pseudo_utilisateur = NULL;
    private $date_utilisateur = NULL;
    private $password_utilisateur = NULL;
    private $mail_utilisateur = NULL;
    private $photo_utilisateur = NULL;

    // déclaration des méthodes

    /**
     * utilisateur constructor.
     * @param null $id_utilisateur
     * @param null $pseudo_utilisateur
     * @param null $date_utilisateur
     * @param null $password_utilisateur
     * @param null $mail_utilisateur
     * @param null $photo_utilisateur
     */
    public function __construct($id_utilisateur, $pseudo_utilisateur, $date_utilisateur, $password_utilisateur, $mail_utilisateur, $photo_utilisateur)
    {
        $this->id_utilisateur = $id_utilisateur;
        $this->pseudo_utilisateur = $pseudo_utilisateur;
        $this->date_utilisateur = $date_utilisateur;
        $this->password_utilisateur = $password_utilisateur;
        $this->mail_utilisateur = $mail_utilisateur;
        $this->photo_utilisateur = $photo_utilisateur;
    }

    /**
     * @return null
     */
    public function getPseudoUtilisateur()
    {
        return $this->pseudo_utilisateur;
    }

    /**
     * @param null $pseudo_utilisateur
     */
    public function setPseudoUtilisateur($pseudo_utilisateur)
    {
        $this->pseudo_utilisateur = $pseudo_utilisateur;
    }

    /**
     * @return null
     */
    public function getDateUtilisateur()
    {
        return $this->date_utilisateur;
    }

    /**
     * @param null $date_utilisateur
     */
    public function setDateUtilisateur($date_utilisateur)
    {
        $this->date_utilisateur = $date_utilisateur;
    }

    /**
     * @return null
     */
    public function getPasswordUtilisateur()
    {
        return $this->password_utilisateur;
    }

    /**
     * @param null $password_utilisateur
     */
    public function setPasswordUtilisateur($password_utilisateur)
    {
        $this->password_utilisateur = $password_utilisateur;
    }

    /**
     * @return null
     */
    public function getMailUtilisateur()
    {
        return $this->mail_utilisateur;
    }

    /**
     * @param null $mail_utilisateur
     */
    public function setMailUtilisateur($mail_utilisateur)
    {
        $this->mail_utilisateur = $mail_utilisateur;
    }

    /**
     * @return null
     */
    public function getPhotoUtilisateur()
    {
        return $this->photo_utilisateur;
    }

    /**
     * @param null $photo_utilisateur
     */
    public function setPhotoUtilisateur($photo_utilisateur)
    {
        $this->photo_utilisateur = $photo_utilisateur;
    }

    /**
     * @return null
     */
    public function getIdUtilisateur()
    {
        return $this->id_utilisateur;
    }

    public function displayVar()
    {
        echo $this->var;
    }
}

?>