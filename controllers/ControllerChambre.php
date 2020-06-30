<?php
class ControllerChambre extends Controller{

    public  function __construct(){
        $this->layout="default";
        $this->folder="vues";
        $this->validator=new Validator();
    }
    public function index(){
        $this->view="accueil";
         $this->render();
    }
    public function menuChambre(){
        $this->view="enregistrer_chambre";
         $this->render();
    }
    public function saveChambre(){
        if (isset($_POST['btnFormChambre'])) {
            extract($_POST);
            $tab=[];
            $tab=$numBatiment;
            $nombre=rand(1000,9999);
            if (strlen($tab)==1) {
                $numBatiment="00".$numBatiment;
            }
            elseif (strlen($tab)==2) {
                $numBatiment="0".$numBatiment;
            }
            $numChambre=$numBatiment."-".$nombre;
            $this->dao=new ChambreDao();
            $this->dao->add($numChambre,$numBatiment,$typeChambre);
            $this->view="enregistrer_chambre";
            $this->render();
        }
        $this->view="enregistrer_chambre";
        $this->render();

    }
    public function listChambre(){
        $this->dao=new ChambreDao();
        $data=[];
        $data=$this->dao->findAll();
        $this->data_view["data"]=$data;
        $this->view="list_chambre";
        $this->render();
    }
    public function deleteChambre(){

        $this->dao=new ChambreDao();
        $data=$this->dao->findAll();
        $this->data_view["data"]=$data;
        foreach ($data as $key => $value) {
            $d=$value->getnumChambre();
            $this->dao->supprimerChambre($d);
        }
        $this->view="list_chambre";
        $this->render();


    }
    public function updateChambre(){
        
    }
}