<?php
class Validator{
   private $errors=[];

   public function getErrors(){
       return $this->errors;
   }

   public function isValid(){
      return count($this->errors)==0;
   }


   public function isVide($champ,$key,$sms="Champ Obligatoire"){
     if($champ==""){
        $this->errors[$key]=$sms;
     }
    }

    public function isEmail($champ,$key,$sms="Email Invalide"){
      $champ = filter_var($champ, FILTER_SANITIZE_EMAIL);
      if (!filter_var($champ, FILTER_VALIDATE_EMAIL)) {
         $this->errors[$key]=$sms;
      }
    }
    public function isTel($champ,$key,$sms="Telephone Invalide"){
      if (!preg_match('#^(77|76|70|78)[0-9]{7}#',$champ)) {
         $this->errors[$key]=$sms;
      }
    }




}