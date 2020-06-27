<?php
class EtudiantDao extends Manager{
    public function __construct(){
        $this->tableName="etudiant";
        $this->className="etudiant";
    }

    public function ajout($matricule,$prenom,$nom,$email,$tel,$adresse,$dateNaissance,$typeEtudiant,$montant){
        $sql="INSERT INTO `etudiant` (`matricule`, `prenom`, `nom`, `email`, `tel`, `adresse`, `dateNaissance`, `typeEtudiant`, `montant`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $this->addEtudiant($sql,$matricule,$prenom,$nom,$email,$tel,$adresse,$dateNaissance,$typeEtudiant,$montant);
    
      }
}