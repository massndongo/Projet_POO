<?php
class ChambreDao extends Manager {

    public function __construct(){
        $this->className="Chambre";
    }

    public function ajoutChambre($object){

       return $this->insertInto();
     
    }
}