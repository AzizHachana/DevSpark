<?php
class Commentaire
{
    private ?int $id_com = null;
    private ?int $id_pays = null;
    private ?string $Commentaire = null;
    private ?string $Date_commentaire = null;
    private ?int $id_user = null;


    public function __construct($idPays, $commentaire, $idUser)
    {
        $this->id_pays = $idPays;
        $this->Commentaire = $commentaire;
        $this->id_user = $idUser;
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
}
