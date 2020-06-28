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

  public function executeUpdateNaissance($sql){
    $this->getConnexion();
     $nbreLigne= $this->pdo->exec($sql);
    $this->closeConnexion();
    return $nbreLigne;
}

/*public function insertInto($table="chambre", $data=["numChambre"=>"001-1234","numBatiment"=>"001","idTypeChambre"=>1]) {

  $this->getConnexion();

  $champs = '';
  $marqueurs = '';

    // Boucle pour :
    // _incrémenter les champs (ex: titre, contenu...)
    // _incrémenter marqueurs pour la req préparée
  foreach($data as $key => $value) {
      $champs .= ''.$key.', ';
      $marqueurs .= ':'.$key.', ';
  }

      // Enlever dernière virgule
  $champs = rtrim($champs, ', ');
  $marqueurs = rtrim($marqueurs, ', ');

  // ********** requete **********
  $statement = "INSERT INTO ".$table."(".$champs.")
                VALUES(".$marqueurs.")";
  $requete = $db->prepare($statement);

  // Boucle pour incrémenter les bindValue avec les marqueurs de la requete préparée, avec les valeurs
  foreach($data as $key => $value) {
      if(is_string($value)) { $pdo_param = PDO::PARAM_STR; } else { $pdo_param = PDO::PARAM_INT; }
      $requete->bindValue(':'.$key, $value, $pdo_param);
  }

  $result = $requete->execute();
  // ********** /requete **********

  // fermer
  $this->closeConnexion();

  return $result;
  var_dump($result);

}




    //Connexion
    //FermerConnexion
    //Executer une requete et Retourner un Résultat
       //Execution Requete MaJ(Insert,UpdateNaissance,delete)
       //Execution requete Select */

    
}