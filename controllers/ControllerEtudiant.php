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
           //GENERER MATRICULE
           $nombre=rand(1000,9999);
           $cc="";
           $ll="";
           for ($i=0; $i < 2 ; $i++) { 
               $cc.=$nom[$i];
           }
           for ($j=(strlen($prenom)-2); $j < strlen($prenom) ; $j++) { 
               $ll.=$prenom[$j];
           }
           $matricule=date("Y")." ".strtoupper($cc)." ".strtoupper($ll)." ".$nombre;
           //Validation
           $this->validator->isVide($email,"email","Champ Obligatoire");
           $this->validator->isVide($tel,"tel","Champ Obligatoire");
           $this->validator->isEmail($email,"email","Email Invalide");
           $this->validator->isTel($tel,"tel","Numéro Telephone Invalide");
           //INSERTION
            if ($this->validator->isValid()) {
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
            }else {
                $this->data_view["error"]= $this->validator->getErrors();
                $this->view="enregistrer_etudiant";
                $this->render();


            }
           
        }else{
           $this->menuEtudiant();
        }
    }
    public function listEtudiant(){
        $this->dao=new EtudiantDao();
        $data=[];
        $data=$this->dao->findAll();
        $this->data_view["data"]=$data;
        $this->view="list_etudiant";
        $this->render(); 
    }
}