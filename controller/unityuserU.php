<?php
require $_SERVER["DOCUMENT_ROOT"] . '/vacation/config.php';
class unityuserU
{
    public function listeUnityusers()
    {
        $sql = "SELECT * FROM unityuser";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    public function listUnityusersB()
    {
       
        $sql = "SELECT * FROM unityuser WHERE etat= 2";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function DeleteUnityuser($id)
    {
        $sql = "DELETE FROM unityuser WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    public function addUnityuser($unityuser)
    {
         $sql = "INSERT INTO unityuser (`nom`, `prenom`, `email`, `mdp`, `tel`, `tache`,`sexe`,`etat`)
        VALUES (:nom, :prenom, :email, :mdp, :tel, :tache, :sexe, :etat)";

        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $unityuser->getNom(),
                'prenom' => $unityuser->getPrenom(),
                'email' => $unityuser->getEmail(),
                'mdp' => $unityuser->getmdp(),
                'tel' => $unityuser->gettel(),
                'tache' => $unityuser->gettache(),
                'sexe' => $unityuser->getsexe(),
                'etat' => $unityuser->getetat(),
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    function showUnityuser($id)
    {
        $sql = "SELECT * from unityuser where id = :id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(['id' => $id]);
            $unityuser = $query->fetch(PDO::FETCH_ASSOC);
            return $unityuser;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    function updateUnityuser($unityuser, $id)
    {   
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE unityuser SET 
                    nom = :nom, 
                    prenom = :prenom,
                    email = :email,
                    mdp = :mdp,
                    tel = :tel, 
                    tache = :tache,
                    sexe = :sexe,
                    etat = :etat
                WHERE id= :id'
            );
            
            $query->execute([
                'id' => $id,
                'nom' => $unityuser->getnom(),
                'prenom' => $unityuser->getprenom(),
                'email' => $unityuser->getemail(),
                'mdp' => $unityuser->getmdp(),
                'tel' => $unityuser->gettel(),
                'tache' => $unityuser->gettache(),
                'sexe' => $unityuser->getsexe(),
                'etat' => $unityuser->getetat()
             
            ]);
            
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function login ($email , $mdp)
    {
    $sql = "SELECT * FROM unityuser WHERE email=:email AND  mdp=:mdp";
    $db = config::getConnexion();

    try {
        $query = $db->prepare($sql);
        $query->execute([
            'email' => $email,
            'mdp' => $mdp
        ]);

        $unityuser = $query->fetch(PDO::FETCH_ASSOC);
        return $unityuser;
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
    }

    
    function reset($mail,$password)
    {
        $query=$this->dbb->prepare("UPDATE unityuser SET mdp = :password WHERE email = :email ");
        $query->bindValue(":password",$password);
        $query->bindValue(":email",$mail);
        $query->execute();
    }


    private $dbb; 
    public function __construct()
    {
        $this->dbb = config::getConnexion();
    }
}
