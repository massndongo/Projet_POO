<?php
class Etudiant{

    private $matricule;
    private $prenom;
    private $nom;
    private $email;
    private $tel;
    private $dateNaissance;
    private $typeEtudiant;
    private $adresse;
    private $montant;






    public   function __construct($row=null){
        if($row!=null){
            $this->hydrate($row);
        }

    }
    public  function hydrate($row){
       $this->matricule=$row['matricule']; 
       $this->prenom=$row['prenom']; 
       $this->nom=$row['nom']; 
       $this->email=$row['email']; 
       $this->tel=$row['tel']; 
       $this->dateNaissance=$row['dateNaissance']; 
       $this->typeEtudiant=$row['typeEtudiant']; 
       $this->adresse=$row['adresse']; 
       $this->montant=$row['montant']; 
    }
    
    public function getPrenom(){
        return $this->prenom;
    }
    public function getMatricule(){
        return $this->matricule;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getTel(){
        return $this->tel;
    }
    public function getdateNaissance(){
        return $this->dateNaissance;
    }
    public function gettypeEtudiant(){
        return $this->typeEtudiant;
    }
    public function getAdresse(){
        return $this->adresse;
    }
    public function getMontant(){
        return $this->montant;
    }

    public function setMatricule($matricule){
        $this->matricule=$matricule;
   }

   public function setNom($nom){
    $this->nom=$nom;
    }
    public function setPrenom($prenom){
        $this->prenom=$prenom;
   }
   public function setEmail($email){
    $this->email=$email;
    }

    public function setTel($tel){
        $this->tel=$tel;
    }
    public function setdateNaissance($dateNaissance){
        $this->dateNaissance=$dateNaissance;
    }
    public function settypeEtudiant($typeEtudiant){
        $this->typeEtudiant=$typeEtudiant;
    }    
    public function setadresse($adresse){
        $this->adresse=$adresse;
    }    
    public function setMontant($montant){
        $this->montant=$montant;
    }   
}

