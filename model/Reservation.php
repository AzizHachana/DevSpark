<?php
include '../Model/Event.php'; // Inclure le fichier Hotel.php
class Reservation
{
    private ?int $id = null;
    private ?int $id_e = null;
    private ?string $date_in = null;
    private ?string $date_out = null;
    private ?string $status = null;
    private ?int $nbr_p = null;


    public function __construct(
        $id,
        $id_e,
        $date_in,
        $date_out,
        $status,
        $nbr_p
    ) {
        $this->id = $id;
        $this->id_e = $id_e;
        $this->date_in = $date_in;
        $this->date_out = $date_out;
        $this->status = $status;
        $this->nbr_p = $nbr_p;

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
    public function getId_e()
    {
        return $this->id_e;
    }

    public function setId_e($id_e)
    {
        $this->id_e = $id_e;
        return $this;
    }

    public function getdate_in()
    {
        return $this->date_in;
    }

    public function setdate_in($date_in)
    {
        $this->date_in = $date_in;
        return $this;
    }

    public function getDate_out()
    {
        return $this->date_out;
    }

    public function setDate_out($date_out)
    {
        $this->date_out = $date_out;
        return $this;
    }

    public function getstatus()
    {
        return $this->status;
    }

    public function settstatus($status)
    {
        $this->status = $status;
        return $this;
    }
    public function getnbr()
    {
        return $this->status;
    }

    public function setLieu($status)
    {
        $this->status = $status;
        return $this;
    }

    
    
}

?>
