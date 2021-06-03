<?php

class mouvement
{
    // déclaration d'une propriété
    private $id_mouvement = NULL;
    private $nom_mouvement = NULL;

    // déclaration des méthodes

    /**
     * mouvement constructor.
     * @param null $id_mouvement
     * @param null $nom_mouvement
     */
    public function __construct($id_mouvement, $nom_mouvement)
    {
        $this->id_mouvement = $id_mouvement;
        $this->nom_mouvement = $nom_mouvement;
    }

    /**
     * @return null
     */
    public function getNomMouvement()
    {
        return $this->nom_mouvement;
    }

    /**
     * @param null $nom_mouvement
     */
    public function setNomMouvement($nom_mouvement)
    {
        $this->nom_mouvement = $nom_mouvement;
    }

    /**
     * @return null
     */
    public function getIdMouvement()
    {
        return $this->id_mouvement;
    }

    public function displayVar()
    {
        echo $this->var;
    }
}

?>