<?php

class Event
{
    private ?int $id = null;
    private ?string $nom = null;
    private ?string $date = null;
    private ?string $lieu = null;
    private ?string $description = null;
    private ?string $prix = null;
    private ?string $image = null;
    private ?float $latitude = null; // Add latitude attribute
    private ?float $longitude = null; // Add longitude attribute
    private ?int $ratings=null;


    public function __construct(
        $id,
        $nom,
        $date,
        $lieu,
        $description,
        $prix,
        $image,
        $latitude = null,
        $longitude = null,
        $ratings=null
    ) {
        $this->id = $id;
        $this->nom = $nom;
        $this->date = $date;
        $this->lieu = $lieu;
        $this->description = $description;
        $this->prix = $prix;
        $this->image = $image;
        $this->latitude = $latitude; // Initialize latitude
        $this->longitude = $longitude; // Initialize longitude
        $this->ratings = $ratings;

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

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    public function getLieu()
    {
        return $this->lieu;
    }

    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPays($pays)
    {
        $this->pays = $pays;
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
    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }
    public function getrating()
    {
        return $this->ratings;
    }

    public function setRating($rating)
    {
        $this->ratings = $ratings;
        return $this;
    }
    
}

?>
