<?php
class unityuser {
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $mdp;
    private $tel;
    private $tache;
    private $sexe;
    private $etat;

    
    public function __construct($nom, $prenom, $email, $mdp, $tel, $tache,$sexe,$etat) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->mdp = $mdp;
        $this->tel = $tel;
        $this->tache = $tache;
        $this->sexe = $sexe;
        $this->etat = $etat;

    }
    
    public function getid()
    {
        return $this->id;
    }

    public function setid($id)
    {
        $this->id= $id;
        return $this;
    }
    
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom= $nom;

        return $this;
    }
    
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom= $prenom;

        return $this;
    }
    
    
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email= $email;

        return $this;
    }
    public function getmdp()
    {
        return $this->mdp;
    }
    public function setmdp($mdp)
    {
        $this->mdp= $mdp;

        return $this;
    }
    
    
    public function gettel()
    {
        return $this->tel;
    }
    public function settel($tel)
    {
        $this->tel= $tel;

        return $this;
    }
    public function gettache()
    {
        return $this->tache;
    }
    public function settache($tache)
    {
        $this->tache= $tache;

        return $this;
    }
    public function getsexe()
    {
        return $this->sexe;
    }
    public function setsexe($sexe)
    {
        $this->sexe= $sexe;

        return $this;
    }
    public function getetat()
    {
        return $this->etat;
    }
    public function setetat($etat)
    {
        $this->etat= $etat;

        return $this;
    }
}
?>