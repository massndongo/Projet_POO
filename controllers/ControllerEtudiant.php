<?php
class ControllerEtudiant extends Controller{

    public  function __construct(){
        $this->layout="default";
        $this->folder="vues";
        $this->validator=new Validator();
    }
    
    public function menuEtudiant(){
        $this->view="enregistrer_etudiant";
         $this->render();
    }
    
    public function saveEtudiant(){

        if(isset($_POST['btnFormEtudiant'])){
           extract($_POST);
           $tel=intval($tel);
           var_dump($tel);
           $this->dao=new EtudiantDao();
           //Validation
           //$this->validator->isEmail($email,"email",$sms);
           //$this->validator->isTel($tel,"tel",$sms);
            if ($typeEtudiant=="Boursier" || $typeEtudiant=="Loger") {
                $this->dao->ajout($matricule,$prenom,$nom,$email,$tel,NULL,$dateNaissance,$typeEtudiant,$montant);
                $this->view="enregistrer_etudiant";
                $this->render();
            }
            if ($typeEtudiant=="NonLoger") {
                $this->dao->ajout($matricule,$prenom,$nom,$email,$tel,$adresse,$dateNaissance,$typeEtudiant,NULL);
                $this->view="enregistrer_etudiant";
                $this->render();
            }
             
           
           
        }else{
           $this->menuEtudiant();
        }
    }
}