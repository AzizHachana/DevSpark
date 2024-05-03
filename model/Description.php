<?php

class Description
{
    private ?int $id = null;
    private ?string $Capitale = null;
    private ?string $Climat = null;
    private ?string $Langue = null;
    private ?string $Monnaie = null;
    private ?string $Attractions_touristiques = null; // Correction ici
    private ?string $Activites = null;

    public function __construct($id, $Capitale, $Climat, $Langue, $Monnaie, $Attractions_touristiques, $Activites)
    {
        $this->id = $id;
        $this->Capitale = $Capitale;
        $this->Climat = $Climat;
        $this->Langue = $Langue;
        $this->Monnaie = $Monnaie;
        $this->Attractions_touristiques = $Attractions_touristiques; // Correction ici
        $this->Activites = $Activites;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getCapitale()
    {
        return $this->Capitale;
    }

    public function setCapitale($Capitale)
    {
        $this->Capitale = $Capitale;
        return $this;
    }

    public function getClimat()
    {
        return $this->Climat;
    }

    public function setClimat($Climat)
    {
        $this->Climat = $Climat;
        return $this;
    }

    public function getLangue()
    {
        return $this->Langue;
    }

    public function setLangue($Langue)
    {
        $this->Langue = $Langue;
        return $this;
    }

    public function getMonnaie()
    {
        return $this->Monnaie;
    }

    public function setMonnaie($Monnaie)
    {
        $this->Monnaie = $Monnaie;
        return $this;
    }

    public function getAttractions()
    {
        return $this->Attractions_touristiques;
    }

    public function setAttractions($Attractions_touristiques)
    {
        $this->Attractions_touristiques = $Attractions_touristiques;
        return $this;
    }

    public function getActivites()
    {
        return $this->Activites;
    }

    public function setActivites($Activites)
    {
        $this->Activites = $Activites;
        return $this;
    }
}
