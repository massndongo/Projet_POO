<?php
class chambre extends Manager {

    public function __construct(){
        $this->tableName="chambre";
        $this->className="chambre";
        $this->pdo=null;
    }
    public function add($object){
        $numChambre=$object->getnumChambre();
        $numBatiment=$object->getnumBatiment();
        $idTypeChambre=$object->getidTypeChambre();

       $sql="INSERT INTO $this->tableName('numChambre','numBatiment','typeChambre') VALUE(?,?,?)";
       $this->addchambre($sql,$numChambre,$numBatiment,$idTypeChambre);
    }
    public function update($object){
        
    }
    
}

