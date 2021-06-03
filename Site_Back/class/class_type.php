<?php

class type
{
    // déclaration d'une propriété
    public $id_type = NULL;
    public $nom_type = NULL;

    // déclaration des méthodes

    /**
     * type constructor.
     * @param null $id_type
     * @param null $nom_type
     */
    public function __construct($id_type, $nom_type)
    {
        $this->id_type = $id_type;
        $this->nom_type = $nom_type;
    }

    /**
     * @return null
     */
    public function getNomType()
    {
        return $this->nom_type;
    }

    /**
     * @param null $nom_type
     */
    public function setNomType($nom_type)
    {
        $this->nom_type = $nom_type;
    }

    /**
     * @return null
     */
    public function getIdType()
    {
        return $this->id_type;
    }

    public function displayVar()
    {
        echo $this->var;
    }
}

?>