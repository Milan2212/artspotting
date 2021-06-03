<?php

class utilisateur_oeuvre
{

    // déclaration d'une propriété
    private $id_utilisateur_oeuvre = NULL;
    private $id_utilisateur = NULL;
    private $id_oeuvre = NULL;


    /**
     * @return null
     */
    public function getIdUtilisateur()
    {
        return $this->id_utilisateur;
    }

    /**
     * @param null $id_utilisateur
     */
    public function setIdUtilisateur($id_utilisateur)
    {
        $this->id_utilisateur = $id_utilisateur;
    }

    /**
     * @return null
     */
    public function getIdOeuvre()
    {
        return $this->id_oeuvre;
    }

    /**
     * @param null $id_oeuvre
     */
    public function setIdOeuvre($id_oeuvre)
    {
        $this->id_oeuvre = $id_oeuvre;
    }
    /**
     * @return null
     */
    public function getIdUtilisateurOeuvre()
    {
        return $this->id_utilisateur_oeuvre;
    }
    // déclaration d'une propriété
    public $id_utilisateur_oeuvre = NULL;
    public $id_utilisateur = NULL;
    public $id_oeuvre = NULL;

    // déclaration des méthodes

    /**
     * utilisateur_oeuvre constructor.
     * @param null $id_utilisateur_oeuvre
     * @param null $id_utilisateur
     * @param null $id_oeuvre
     */
    public function __construct($id_utilisateur_oeuvre, $id_utilisateur, $id_oeuvre)
    {
        $this->id_utilisateur_oeuvre = $id_utilisateur_oeuvre;
        $this->id_utilisateur = $id_utilisateur;
        $this->id_oeuvre = $id_oeuvre;
    }

    public function displayVar()
    {
        echo $this->var;
    }
}

?>