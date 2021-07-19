<?php

/**
 * Base class for validator
 *
 * @author ahsen tekdemir
 * @version 1.0.0
 */

 trait Validator{
     protected $message;
     protected $value;

     public function validate_($value){
         $this->value = $value;
         if(!$this->validate($value)){
            return false;
         }
         return true;
     }

     public function setValidationParams($params ,$message=null){
         $this->setParams($params);
         $this->message = $message;
     }

     public function setParams(array $params){
         foreach($params as $param){
             $this->value = $value;
         }
     }
     
     public function getParams(): array{
         return [];
     }
 }
