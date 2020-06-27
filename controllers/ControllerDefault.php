<?php
class ControllerDefault extends Controller {

    public  function __construct(){
        $this->layout="default";
        $this->folder="vues";
    }

    public function index(){
        $this->view="accueil";
         $this->render();
    }
}