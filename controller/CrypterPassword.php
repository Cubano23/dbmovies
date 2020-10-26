<?php
    class CrypterPassword{

       var $key;

       function __construct($chaine){
          $this->key = $chaine;
       }

       function setKey($chaine){
          $this->key = $chaine;
       }
       
       function keyED($password) { 
          $encrypt_key = md5($this->key); 
          $ctr=0; 
          $tmp = ""; 
          for ($i=0;$i<strlen($password);$i++) { 
             if ($ctr==strlen($encrypt_key)) $ctr=0; 
             $tmp.= substr($password,$i,1) ^ substr($encrypt_key,$ctr,1); 
             $ctr++; 
          } 
          return $tmp; 
       } 
       
       function encrypt($password){ 
          srand((double)microtime()*1000000); 
          $encrypt_key = md5(rand(0,32000)); 
          $ctr=0; 
          $tmp = ""; 
          for ($i=0;$i<strlen($password);$i++){ 
             if ($ctr==strlen($encrypt_key)) $ctr=0; 
             $tmp.= substr($encrypt_key,$ctr,1) . 
                 (substr($password,$i,1) ^ substr($encrypt_key,$ctr,1)); 
             $ctr++; 
          } 
          return base64_encode($this->keyED($tmp)); 
       } 

       function decrypt($password) { 
          $password = $this->keyED(base64_decode($password)); 
          $tmp = ""; 
          for ($i=0;$i<strlen($password);$i++){ 
             $md5 = substr($password,$i,1); 
             $i++; 
             $tmp.= (substr($password,$i,1) ^ $md5); 
          } 
          return $tmp; 
       } 

    }
?>