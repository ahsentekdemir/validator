<?php

require __DIR__.'validator_base.php';

class NotEmpty extends Validator{
    public function __construct(){
        // pass
    }

    public function validate($value){
        if($value==null and empty($value)){
            return false;
        }
        return true;
    }
}