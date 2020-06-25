<?php
class Controleur extends Controller {

    public  function __construct(){
        $this->layout="default";
        $this->folder="vues";
    }

    public function index(){
        $this->view="accueil";
         $this->render();
    }
    public function menuChambre(){
        $this->view="enregistrer_chambre";
        $this->render();
    }

}