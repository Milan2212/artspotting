<?php

class mouvement_oeuvre
{
    // déclaration d'une propriété
    private $id_mouvement_oeuvre = NULL;
    private $id_mouvement = NULL;
    private $id_oeuvre = NULL;

    // déclaration des méthodes

    /**
     * mouvement_oeuvre constructor.
     * @param null $id_mouvement_oeuvre
     * @param null $id_mouvement
     * @param null $id_oeuvre
     */
    public function __construct($id_mouvement_oeuvre, $id_mouvement, $id_oeuvre)
    {
        $this->id_mouvement_oeuvre = $id_mouvement_oeuvre;
        $this->id_mouvement = $id_mouvement;
        $this->id_oeuvre = $id_oeuvre;
    }

    /**
     * @return null
     */
    public function getIdMouvement()
    {
        return $this->id_mouvement;
    }

    /**
     * @param null $id_mouvement
     */
    public function setIdMouvement($id_mouvement)
    {
        $this->id_mouvement = $id_mouvement;
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
    public function getIdMouvementOeuvre()
    {
        return $this->id_mouvement_oeuvre;
    }

    public function displayVar()
    {
        echo $this->var;
    }
}

?>