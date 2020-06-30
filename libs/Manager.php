<?php
abstract class Manager implements IDao{
    //Connexion est Fermée
    private $pdo=null;
    protected $tableName;
    protected $className;

  public function getConnexion(){
      //Connexion est fermée
      if($this->pdo==null){
          try{
            $this->pdo = new PDO("mysql:host=localhost;dbname=allocation","root","");
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
          }catch(PDOException $ex){
             die("Erreur de Connexion");
          }
        
      }
      
  }

 private function closeConnexion(){
      
    if($this->pdo!=null){
      $this->pdo=null;
    }
  }
  public function executeSelect($sql){
      
    $this->getConnexion();
    //Traitement
      $result=$this->pdo->query($sql);
      $data=[];
      foreach( $result as $rowBD){
        //ORM=> tuple BD transformer en Objet
        $data[]=new $this->className($rowBD);//new User($rowBD)     
      }
      $this->closeConnexion();
      return $data;

  }

  public function addChambre($sql,$numChambre,$numBatiment,$typeChambre){
    $this->getConnexion();
      $req=$this->pdo->prepare($sql);
      $req->execute(array($numChambre,$numBatiment,$typeChambre));
      $this->closeConnexion();

  }
  public function addEtudiant($sql,$matricule,$prenom,$nom,$email,$tel,$adresse,$dateNaissance,$typeEtudiant,$montant){
    $this->getConnexion();
      $req=$this->pdo->prepare($sql);
      $req->execute(array($matricule,$prenom,$nom,$email,$tel,$adresse,$dateNaissance,$typeEtudiant,$montant));
      $this->closeConnexion();

  }

  public function executeUpdate($sql){
    $this->getConnexion();
     $nbreLigne= $this->pdo->exec($sql);
    $this->closeConnexion();
    return $nbreLigne;
}
public function findAll(){
  $sql="select * from $this->tableName";
  $data=$this->executeSelect($sql);
  return $data;
}
public function findById($id){
  $sql="select * from $this->tableName where id=$id ";
  $data=$this->executeSelect($sql);
  return count($data)==1?$data[0]:$data;

}

public function delete($nom,$id){
  $sql="delete from $this->tableName where $nom=$id";
  return $this->executeUpdate($sql)!=0;
}

function getPrepUp($data,$idName="id",$where=null){	
  $prep="UPDATE `".$data['table']."` SET `".$data[CHAMP]."`='".$data['val']."' WHERE $idName=?";
  $w="";
  if($where){
      foreach ($where as $name) {
          $w .= " AND $name=?";
      } 
      $prep .= $w;
  }
  return $prep;	
}






    
}