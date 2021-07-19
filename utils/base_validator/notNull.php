<?php

require __DIR__.'validator_base.php';


class NotNull extends Validator{

    public function __construct(){
        //
    }

    public function validate($value){
        return $value !== null;
    }
}