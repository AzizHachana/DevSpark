<?php
class Pays
{
    private ?int $id = null;
    private ?string $NomP = null;
    private ?string $image = null;
    

    public function __construct($id, $NomP, $image)
    {
        $this->id = $id;
        $this->NomP = $NomP;
        $this->image = $image;
    }

    // Méthodes getters et setters pour l'attribut id
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    // Méthodes getters et setters pour l'attribut NomP
    public function getNomP()
    {
        return $this->NomP;
    }

    public function setNomP($NomP)
    {
        $this->NomP = $NomP;
        return $this;
    }

    // Méthodes getters et setters pour l'attribut image
    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

}
?>