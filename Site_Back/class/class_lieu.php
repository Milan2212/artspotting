<?php

class lieu_exposition
{
    // déclaration d'une propriété
    private $id_lieu = NULL;
    private $continent = NULL;
    private $pays = NULL;
    private $ville = NULL;
    private $musee = NULL;

    // déclaration des méthodes

    /**
     * lieu_exposition constructor.
     * @param null $id_lieu
     * @param null $continent
     * @param null $pays
     * @param null $ville
     * @param null $musee
     */
    public function __construct($id_lieu, $continent, $pays, $ville, $musee)
    {
        $this->id_lieu = $id_lieu;
        $this->continent = $continent;
        $this->pays = $pays;
        $this->ville = $ville;
        $this->musee = $musee;
    }

    /**
     * @return null
     */
    public function getContinent()
    {
        return $this->continent;
    }

    /**
     * @param null $continent
     */
    public function setContinent($continent)
    {
        $this->continent = $continent;
    }

    /**
     * @return null
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * @param null $pays
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    }

    /**
     * @return null
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param null $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return null
     */
    public function getMusee()
    {
        return $this->musee;
    }

    /**
     * @param null $musee
     */
    public function setMusee($musee)
    {
        $this->musee = $musee;
    }

    /**
     * @return null
     */
    public function getIdLieu()
    {
        return $this->id_lieu;
    }

    public function displayVar()
    {
        echo $this->var;
    }
}


?>