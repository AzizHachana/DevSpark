<?php

class Reservation
{
    private ?int $id = null;
    private ?string $DDP = null;
    private ?string $DDA = null;
    private ?string $Adultes = null;
    private ?string $Enfants = null;
    private ?string $Chambres = null;
    private ?string $hotel_id = null;
    
    
    public function __construct(
        $id,
        $DDP,
        $DDA,
        $Adultes,
        $Enfants,
        $Chambres,
        $hotel_id,
      
    )
    {
        $this->id = $id;
        $this->DDP = $DDP;
        $this->DDA = $DDA;
        $this->Adultes = $Adultes;
        $this->Enfants= $Enfants;
        $this->Chambres = $Chambres ;
        $this->hotel_id = $hotel_id;
        
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

    public function getDDP()
    {
        return $this->DDP;
    }

    public function setDDP($DDP)
    {
        $this->DDP = $DDP;
        return $this;
    }

    public function getDDA()
    {
        return $this->DDA;
    }

    public function setDDA($DDA)
    {
        $this->DDA = $DDA;
        return $this;
    }

    public function getAdultes()
    {
        return $this->Adultes;
    }

    public function setAdultes($Adultes)
    {
        $this->Adultes = $Adultes;
        return $this;
    }

    public function getEnfants()
    {
        return $this->Enfants;
    }

    public function setEnfants($Enfants)
    {
        $this->Enfants = $Enfants;
        return $this;
    }
    public function getChambres()
    {
        return $this->Chambres;
    }

    public function setChambres($Chambres)
    {
        $this->Chambres = $Chambres;
        return $this;
    }
    /*public function getHotel()
    {
        return $this->Hotel;
    }

    public function setHotel($Hotel)
    {
        $this->Hotel = $Hotel;
        return $this;
    }*/
    public function getHotelId()
    {
        return $this->hotel_id;
    }

    public function setHotelId($hotel_id)
    {
        $this->hotel_id = $hotel_id;
        return $this;
    }
}