<?php

require __DIR__.'validator_base.php';

class IsNull extends Validator{

    public function __construct(){
        //
    }

    public function validate($value){
        return $value === null;
    }
}