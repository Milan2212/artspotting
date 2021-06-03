<?php

class technique
{
    // déclaration d'une propriété
    private $id_technique = NULL;
    private $nom_technique = NULL;

    // déclaration des méthodes

    /**
     * technique constructor.
     * @param null $id_technique
     * @param null $nom_technique
     */
    public function __construct($id_technique, $nom_technique)
    {
        $this->id_technique = $id_technique;
        $this->nom_technique = $nom_technique;
    }

    /**
     * @return null
     */
    public function getNomTechnique()
    {
        return $this->nom_technique;
    }

    /**
     * @param null $nom_technique
     */
    public function setNomTechnique($nom_technique)
    {
        $this->nom_technique = $nom_technique;
    }

    /**
     * @return null
     */
    public function getIdTechnique()
    {
        return $this->id_technique;
    }

    public function displayVar()
    {
        echo $this->var;
    }
}


?>