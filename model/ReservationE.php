<?php
class Reservation
{
    private ?int $id_r = null;
    private ?int $id_e = null;
    private ?string $date_check_in = null;
    private ?string $date_check_out = null;
    private ?string $status = null;
    private ?int $nbr_p = null;


    public function __construct(
        $id_r,
        $date_check_in,
        $date_check_out,
        $nbr_p,
        $status,
        $id_e
    ) {
        $this->id_r = $id_r;
        $this->date_check_in = $date_check_in;
        $this->date_check_out = $date_check_out;
        $this->nbr_p = $nbr_p;
        $this->status = $status;
        $this->id_e = $id_e;


    }

    // Getters and setters
    public function getId()
    {
        return $this->id_r;
    }

    public function setId($id_r)
    {
        $this->id_r = $id_r;
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
        return $this->date_check_in;
    }

    public function setdate_in($date_check_in)
    {
        $this->date_check_in = $date_check_in;
        return $this;
    }

    public function getDate_out()
    {
        return $this->date_check_out;
    }

    public function setDate_out($date_check_out)
    {
        $this->date_check_out = $date_check_out;
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
        return $this->nbr_p;
    }

    public function setnbr($nbr_p)
    {
        $this->nbr_p = $nbr_p;
        return $this;
    }
    

    
    
}

?>
