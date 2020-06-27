<?php

class ChambreDao extends Manager{

    public function __construct(){
        $this->tableName="chambre";
        $this->className="chambre";
    }

    public function add($numChambre,$numBatiment,$typeChambre){
        $sql="INSERT INTO `$this->tableName` (`numChambre`, `numBatiment`, `typeChambre`) VALUES (?, ?, ?)";
        $this->addchambre($sql,$numChambre,$numBatiment,$typeChambre);
    
      }

}