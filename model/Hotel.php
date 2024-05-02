<?php

class Hotel
{
    private ?int $id = null;
    private ?string $nom = null;
    private ?string $adresse = null;
    private ?string $ville = null;
    private ?string $codePostal = null;
    private ?string $pays = null;
    private ?string $telephone = null;
    private ?string $email = null;
    private ?string $image = null;
    private ?string $description= null;
    //private ?string $etoile = null;

  

    public function __construct(
        $id,
        $nom,
        $adresse,
        $ville,
        $codePostal,
        $pays,
        $telephone,
        $email,
        $image,
        $description,
        //$etoile,
    
    ) {
        $this->id = $id;
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->codePostal = $codePostal;
        $this->pays = $pays;
        $this->telephone = $telephone;
        $this->email = $email;
        $this->image = $image;
        $this->description = $description;
       // $this->etoile = $etoile;
    }

    // Getters and setters
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
        return $this;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;
        return $this;
    }

    public function getCodePostal()
    {
        return $this->codePostal;
    }

    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
        return $this;
    }

    public function getPays()
    {
        return $this->pays;
    }

    public function setPays($pays)
    {
        $this->pays = $pays;
        return $this;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }
   /* public function getetoile()
    {
        return $this->etoile;
    }

    public function setetoile($etoile)
    {
        $this->etoile= $etoile;
        return $this;
    }*/
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

   
}


?>
