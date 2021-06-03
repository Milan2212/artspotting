<?php

class oeuvre
{
    // déclaration d'une propriété
    private $id_oeuvre = NULL;
    private $nom_oeuvre = NULL;
    private $date_oeuvre = NULL;
    private $taille_oeuvre = NULL;
    private $description_oeuvre = NULL;
    private $description_artiste = NULL;
    private $id_lieu = NULL;
    private $id_artiste = NULL;
    private $id_type = NULL;
    private $id_technique = NULL;

    // déclaration des méthodes

    /**
     * oeuvre constructor.
     * @param null $id_oeuvre
     * @param null $nom_oeuvre
     * @param null $date_oeuvre
     * @param null $taille_oeuvre
     * @param null $description_oeuvre
     * @param null $description_artiste
     * @param null $id_lieu
     * @param null $id_artiste
     * @param null $id_type
     * @param null $id_technique
     */
    public function __construct($id_oeuvre, $nom_oeuvre, $date_oeuvre, $taille_oeuvre, $description_oeuvre, $description_artiste, $id_lieu, $id_artiste, $id_type, $id_technique)
    {
        $this->id_oeuvre = $id_oeuvre;
        $this->nom_oeuvre = $nom_oeuvre;
        $this->date_oeuvre = $date_oeuvre;
        $this->taille_oeuvre = $taille_oeuvre;
        $this->description_oeuvre = $description_oeuvre;
        $this->description_artiste = $description_artiste;
        $this->id_lieu = $id_lieu;
        $this->id_artiste = $id_artiste;
        $this->id_type = $id_type;
        $this->id_technique = $id_technique;
    }

    /**
     * @return null
     */
    public function getIdOeuvre()
    {
        return $this->id_oeuvre;
    }

    /**
     * @return null
     */
    public function getNomOeuvre()
    {
        return $this->nom_oeuvre;
    }

    /**
     * @param null $nom_oeuvre
     */
    public function setNomOeuvre($nom_oeuvre)
    {
        $this->nom_oeuvre = $nom_oeuvre;
    }

    /**
     * @return null
     */
    public function getDateOeuvre()
    {
        return $this->date_oeuvre;
    }

    /**
     * @param null $date_oeuvre
     */
    public function setDateOeuvre($date_oeuvre)
    {
        $this->date_oeuvre = $date_oeuvre;
    }

    /**
     * @return null
     */
    public function getTailleOeuvre()
    {
        return $this->taille_oeuvre;
    }

    /**
     * @param null $taille_oeuvre
     */
    public function setTailleOeuvre($taille_oeuvre)
    {
        $this->taille_oeuvre = $taille_oeuvre;
    }

    /**
     * @return null
     */
    public function getDescriptionOeuvre()
    {
        return $this->description_oeuvre;
    }

    /**
     * @param null $description_oeuvre
     */
    public function setDescriptionOeuvre($description_oeuvre)
    {
        $this->description_oeuvre = $description_oeuvre;
    }

    /**
     * @return null
     */
    public function getDescriptionArtiste()
    {
        return $this->description_artiste;
    }

    /**
     * @param null $description_artiste
     */
    public function setDescriptionArtiste($description_artiste)
    {
        $this->description_artiste = $description_artiste;
    }

    /**
     * @return null
     */
    public function getIdLieu()
    {
        return $this->id_lieu;
    }

    /**
     * @param null $id_lieu
     */
    public function setIdLieu($id_lieu)
    {
        $this->id_lieu = $id_lieu;
    }

    /**
     * @return null
     */
    public function getIdArtiste()
    {
        return $this->id_artiste;
    }

    /**
     * @param null $id_artiste
     */
    public function setIdArtiste($id_artiste)
    {
        $this->id_artiste = $id_artiste;
    }

    /**
     * @return null
     */
    public function getIdType()
    {
        return $this->id_type;
    }

    /**
     * @param null $id_type
     */
    public function setIdType($id_type)
    {
        $this->id_type = $id_type;
    }

    /**
     * @return null
     */
    public function getIdTechnique()
    {
        return $this->id_technique;
    }

    /**
     * @param null $id_technique
     */
    public function setIdTechnique($id_technique)
    {
        $this->id_technique = $id_technique;
    }



}


?>