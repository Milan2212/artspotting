<?php

class artiste
{
    // déclaration d'une propriété
    private $id_artiste = NULL;
    private $nom_artiste = NULL;
    private $prenom_artiste = NULL;

    // déclaration des méthodes

    /**
     * artiste constructor.
     * @param null $id_artiste
     * @param null $nom_artiste
     * @param null $prenom_artiste
     */
    public function __construct($id_artiste, $nom_artiste, $prenom_artiste)
    {
        $this->id_artiste = $id_artiste;
        $this->nom_artiste = $nom_artiste;
        $this->prenom_artiste = $prenom_artiste;
    }

    /**
     * @return null
     */
    public function getNomArtiste()
    {
        return $this->nom_artiste;
    }

    /**
     * @param null $nom_artiste
     */
    public function setNomArtiste($nom_artiste)
    {
        $this->nom_artiste = $nom_artiste;
    }

    /**
     * @return null
     */
    public function getPrenomArtiste()
    {
        return $this->prenom_artiste;
    }

    /**
     * @param null $prenom_artiste
     */
    public function setPrenomArtiste($prenom_artiste)
    {
        $this->prenom_artiste = $prenom_artiste;
    }

    /**
     * @return null
     */
    public function getIdArtiste()
    {
        return $this->id_artiste;
    }

    public function displayVar()
    {
        echo $this->var;
    }
}

?>