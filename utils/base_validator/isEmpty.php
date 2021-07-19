<?php

require __DIR__.'validator_base.php';

class IsEmpty extends Validator{
    
    public function __construct(){
       // passs
    }

    public function validate($value){
        return $value==null;
    }

    public function getParams(): array{
        return ["value"];
    }
}    