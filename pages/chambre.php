<?php
class chambre extends Manager {

    public function __construct(){
        $this->tableName="chambre";
        $this->className="chambre";
        $this->pdo=null;
    }
    public function add($object){
        $numuro=$object->getNumero();
        $numBat=$object->getNumBat();
        $type=$object->getType();

       $sql="INSERT INTO $this->tableName('numChambre','numBatiment','idTypeChambre') VALUE(?,?,?)";
       $this->addchambre($sql,$numero,$numBat,$typet);
    }
    public function update($object){
        
    }
    
}

