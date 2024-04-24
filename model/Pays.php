<?php


class Pays
{
    private ?int $id = null;
    private ?string $NomP = null;
    private ?string $image = null;
    private ?int $likes = null;
    private ?int $dislikes = null;
    

    public function __construct($id, $NomP, $image,$likes = null, $dislikes = null)
    {
        $this->id = $id;
        $this->NomP = $NomP;
        $this->image = $image;
        $this->likes = $likes;
        $this->dislikes = $dislikes;
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
    public function getLikes()
    {
        return $this->likes;
    }

    public function setLikes($likes)
    {
        $this->likes = $likes;
        return $this;
    }

    public function getDislikes()
    {
        return $this->dislikes;
    }

    public function setDislikes($dislikes)
    {
        $this->dislikes = $dislikes;
        return $this;
    }

}
?>