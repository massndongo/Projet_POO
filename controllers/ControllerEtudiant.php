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
           $this->dao=new EtudiantDao();
           //Validation
           $this->validator->isVide($email,"email","Champ Obligatoire");
           $this->validator->isVide($tel,"tel","Champ Obligatoire");
           $this->validator->isEmail($email,"email","Email Invalide");
           $this->validator->isTel($tel,"tel","Numéro Telephone Invalide");
            if ($this->validator->isValid()) {
                if ($typeEtudiant=="Boursier" || $typeEtudiant=="Loger") {
                    $this->dao->ajout($matricule,$prenom,$nom,$email,$tel,NULL,$dateNaissance,$typeEtudiant,$montant);
                    $this->view="enregistrer_etudiant";
                    $this->render();
                }
                elseif ($typeEtudiant=="NonLoger") {
                    $this->dao->ajout($matricule,$prenom,$nom,$email,$tel,$adresse,$dateNaissance,$typeEtudiant,NULL);
                    $this->view="enregistrer_etudiant";
                    $this->render();
                }
            }else {
                $this->data_view["error"]= $this->validator->getErrors();
                var_dump($this->data_view["error"]);
                $this->view="enregistrer_etudiant";
                $this->render();


            }
             
           
           
        }else{
           $this->menuEtudiant();
        }
    }
}