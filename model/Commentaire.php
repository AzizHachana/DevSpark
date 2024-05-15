<?php
class Commentaire
{
    private ?int $id_com = null;
    private ?int $id_pays = null;
    private ?string $Commentaire = null;
    private ?string $Date_commentaire = null;
    private ?int $id_user = null;
    private ?int $nbre_like = null;


    public function __construct($id_pays, $Commentaire, $id_user, $nbre_like)
    {
        $this->id_pays = $id_pays;
        $this->Commentaire = $Commentaire;
        $this->id_user = $id_user;
        $this->nbre_like = $nbre_like;
    }

    // Méthodes getters et setters pour l'attribut id
    public function getIdCom()
    {
        return $this->id_com;
    }

    public function setIdCom($id_com)
    {
        $this->id_com = $id_com;
        return $this;
    }

    public function getIdPays()
    {
        return $this->id_pays;
    }

    public function setIdPays($id_pays)
    {
        $this->id_pays = $id_pays;
        return $this;
    }
    public function getIdUser()
    {
        return $this->id_user;
    }

    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
        return $this;
    }

    public function getCommentaire()
    {
        return $this->Commentaire;
    }

    public function setCommentaire($Commentaire)
    {
        $this->Commentaire = $Commentaire;
        return $this;
    }


    public function getDate()
    {
        return $this->Date_commentaire;
    }

    public function setDate($Date_commentaire)
    {
        $this->Date_commentaire = $Date_commentaire;
        return $this;
    }
    public function getNbre_Like()
    {
        return $this->nbre_like;
    }

    public function setNbre_Like($nbre_like)
    {
        $this->nbre_like = $nbre_like;
        return $this;
    }
}
