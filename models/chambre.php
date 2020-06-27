<?php
class chambre{

    private $numChambre;
    private $numBatiment;
    private $typeChambre;



    public   function __construct($row=null){
        if($row!=null){
            $this->hydrate($row);
        }

    }
    public  function hydrate($row){
       $this->numChambre=$row['numChambre']; 
       $this->numBatiment=$row['numBatiment']; 
       $this->typeChambre=$row['typeChambre']; 
    }
    
    public function getnumBatiment(){
        return $this->numBatiment;
    }
    public function getnumChambre(){
        return $this->numChambre;
    }
    public function gettypeChambre(){
        return $this->typeChambre;
    }
    public function setNumBat($numBatiment){
         $this->numBatiment=$numBatiment;
    }
    public function setnumChambre($numChambre){
        $this->numChambre=$numChambre;
   }

   public function settypeChambre($typeChambre){
    $this->typeChambre=$typeChambre;
}



}

