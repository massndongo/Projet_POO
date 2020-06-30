<?php

class ChambreDao extends Manager{

    public function __construct(){
        $this->tableName="Chambre";
        $this->className="chambre";
        $this->idName="numChambre";
    }

    public function add($numChambre,$numBatiment,$typeChambre){
        $sql="INSERT INTO `$this->tableName` (`numChambre`, `numBatiment`, `typeChambre`) VALUES (?, ?, ?)";
        $this->addchambre($sql,$numChambre,$numBatiment,$typeChambre);
    
      }
      public function supprimerChambre($numChambre){
          $sql="delete from $this->tableName where `$this->idName`=$numChambre";
          $this->delete($this->idName,$numChambre);
      }


}