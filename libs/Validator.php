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
      if (preg_match('^[a-zA-Z]+@[a-zA-Z]+\.[a-zA-Z]{2,6}$)',$champ)) {
         $this->errors[$key]='';
      }else {
         $this->errors[$key]=$sms;
      }
    }
    public function isTel($champ,$key,$sms="Telephone Invalide"){
      if (preg_match('#^(77|76|70|78)[0-9]{7}#',$champ)) {
         $this->errors[$key]='';
      }else {
         $this->errors[$key]=$sms;
      }
    }




}